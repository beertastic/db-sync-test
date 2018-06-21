<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Yacht;

class YachtController extends Controller
{
    private $db_master;

    public function __construct()
    {
        try {
            $this->db_master = DB::connection('pgsql_tunnel');
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function index() {

        $data['YachtCaption']   = 'Caption';
        $data['YachtOverview']  = '';
        $data['JavaVideoArray'] = '';
        $data['HtmlSlides']     = '';
        $data['YachtName']  = '';
        $data['YachtLength']  = '';
        $data['YachtBuildYear']  = '';
        $data['YachtDesc']  = '';

//        $data[''] = '';

        return view('hack.yacht', $data);
    }








    function GetYachtMainSectionImagesAndVideos($YachtProfileID, &$JavaVideoArray, &$HtmlSlides)
    {
        $JavaVideoArray = "<script language='javascript'>
    var VideoPages = [
        ";


        $JavaVideoArray = "";

        /*
            $JavaVideoArray = $JavaVideoArray . "
              ['viddivhero', 'hsvid1', 'v.mp4', 'viddivside1', 'hsvid1s', 'v23.mp4', 'viddivside2', 'hsvid2s', 'V21.mp4']
            , ['viddivhero', 'hsvid1', 'V14.mp4', 'viddivside1', 'hsvid1s', 'V22.mp4', 'viddivside2', 'hsvid2s', 'v11.mp4']
            , ['viddivhero', 'hsvid1', 'V15.mp4', 'viddivside1', 'hsvid1s', 'v23.mp4', 'viddivside2', 'hsvid2s', 'V12.mp4']
            , ['viddivhero', 'hsvid1', 'heider.jpg', 'viddivside1', 'hsvid1s', 'heider.jpg', 'viddivside2', 'hsvid2s', 'heider.jpg']
            , ['viddivhero', 'hsvid1', 'hero-h1.jpg', 'viddivside1', 'hsvid1s', '', 'viddivside2', 'hsvid2s', '']
            ";
        */


        $SqlConnected = false;
        $TotalSlides = 0;

        try
        {
            $SqlConnection = pg_connect($_SESSION["ConnectionString"]);

            if ($_SESSION["DEBUG"]) error_log("Connection Status: " . pg_connection_status($SqlConnection));

            if ($SqlConnection)
            {
                if ($_SESSION["DEBUG"]) error_log("Connected to SQL Server<br>");
                $SqlConnected = true;
            } else {
                if ($_SESSION["DEBUG"]) error_log("ERROR: SQL Server connection failed: " . pg_last_error($SqlConnection) . "\r\n");
            }

        } catch (PDOException $e) {
            echo "Error while connecting to SQL server: " . $e->getMessage() . "<br>";
        }

        if ($SqlConnected)
        {
            try
            {
                $SqlString = "Select id, property_profile_id "
                    . ", case when resource_main_large_type = 'OV' then (select vzaar_video_id || '.mp4' from public.property_yacht_video LV where LV.id = resource_main_large_id) "
                    . "       when resource_main_large_type = 'OI' then (select 'superyacht-' || replace(replace(lower(regexp_replace(name, '[^\w]+','')),' ', '-'), '''', '') ||'-' || LI.id ||'.jpg' from public.property_yacht_resource LI, public.property_yacht PY where LI.property_yacht_id = PY.id and LI.id = resource_main_large_id) "
                    . "       else '' "
                    . "  end as object_image_large "
                    . ", case when resource_main_side_top_type = 'OV' then (select vzaar_video_id || '.mp4' from public.property_yacht_video LV where LV.id = resource_main_side_top_id) "
                    . "       when resource_main_side_top_type = 'OI' then (select 'superyacht-' || replace(replace(lower(regexp_replace(name, '[^\w]+','')),' ', '-'), '''', '') ||'-' || LI.id ||'.jpg' from public.property_yacht_resource LI, public.property_yacht PY where LI.property_yacht_id = PY.id and LI.id = resource_main_side_top_id) "
                    . "       else '' "
                    . "  end as object_image_side_top "
                    . ", case when resource_main_side_bot_type = 'OV' then (select vzaar_video_id || '.mp4' from public.property_yacht_video LV where LV.id = resource_main_side_bot_id) "
                    . "       when resource_main_side_bot_type = 'OI' then (select 'superyacht-' || replace(replace(lower(regexp_replace(name, '[^\w]+','')),' ', '-'), '''', '') ||'-' || LI.id ||'.jpg' from public.property_yacht_resource LI, public.property_yacht PY where LI.property_yacht_id = PY.id and LI.id = resource_main_side_bot_id) "
                    . "       else '' "
                    . "  end as object_image_side_bot "
                    . " , * "
                    . " From public.property_yacht_slide_images "
                    . " Where property_profile_id = " . $YachtProfileID;

                $ResultSet = pg_query($SqlConnection, $SqlString);

                if ($ResultSet)
                {
                    while ($Row = pg_fetch_assoc($ResultSet))
                    {
                        $TotalSlides = $TotalSlides + 1;

                        if ($JavaVideoArray == "")
                        {
                            $JavaVideoArray = $JavaVideoArray
                                . "['viddivhero', 'hsvid1', '" . Slugify($Row['object_image_large'])
                                . "', 'viddivside1', 'hsvid1s', '" . Slugify ($Row['object_image_side_top'])
                                . "', 'viddivside2', 'hsvid2s', '" . Slugify ($Row['object_image_side_bot'])
                                . "']\r\n";
                        } else {
                            $JavaVideoArray = $JavaVideoArray
                                . ", ['viddivhero', 'hsvid1', '" . Slugify($Row['object_image_large'])
                                . "', 'viddivside1', 'hsvid1s', '" . Slugify ($Row['object_image_side_top'])
                                . "', 'viddivside2', 'hsvid2s', '" . Slugify ($Row['object_image_side_bot'])
                                . "']\r\n";
                        }

                    }

                } else {
                    if ($_SESSION["DEBUG"]) error_log("ERROR: SQL Query failed: " . pg_last_error($SqlConnection) . "\r\n");
                    if ($_SESSION["DEBUG"]) error_log("Sql Query: " . $SqlString);
                }

            } catch (PDOException $e) {
                echo "Error while Querying SQL server: " . $e->getMessage() . "<br>";
            }
        }


        $HtmlSlides = '
            <div class="section-container section-hero">
                <div style="position:relative; background-color: #ffffff; width: 1024px;" onmouseleave="VideoPlay(\'hsvid1\');VideoStop(\'hsvid1s\');VideoStop(\'hsvid2s\');" >
                    <div id="MainVideo" style="position:relative; height: 386px; " >
                  ';




        if ($TotalSlides > 40) $TotalSlides = 40;
        $Left = 10;

        for ($i=0; $i < $TotalSlides ; $i++)
        {
            $HtmlSlides = $HtmlSlides . '<div class="video-icon-page" style="left:' . $Left . 'px;"><img width="10" height="10" src="/assets/images/video-icons/page-dot.png" onclick="SelectVideoPage(' . $i . ', \'MainVideo\');"></div>';

            $Left = $Left + 15;
        }



        $JavaVideoArray = 'var VideoPages = [' . $JavaVideoArray . '];';

        $HtmlSlides = $HtmlSlides . '
                        <div id="viddivhero" class="video-main-hero" onmouseover="VideoPlay(\'hsvid1\');VideoStop(\'hsvid1s\');VideoStop(\'hsvid2s\');" >
                            <div class="video-icon-expand"><img width="100" height="100" src="/assets/images/video-icons/play.png" onclick="VideoExpand_Explode1(\'viddivhero\', \'MainVideo\');"></div>
                            <div class="video-icon-restore"><img width="20" height="20" src="/assets/images/video-icons/close.png" onclick="VideoRestore(\'viddivhero\', \'MainVideo\');"></div>
                            <div class="video-icon-fullscreen"><img width="20" height="20" src="/assets/images/video-icons/close.png" onclick="VideoFullScreen(\'hsvid1\');"></div>

                            <video id="hsvid1" preload="none" width="100%" height="100%" autoplay="autoplay" loop="loop" muted >  <!-- poster="/assets/images/heider.jpg" -->
                                <!-- source src="/assets/videos/v.mp4#t=10,50" /-->
                                <!-- source src="/assets/videos/v.mp4" /-->
                                <source src="" ></source>
                                <!-- track src="/assets/videos/v.vtt" label="HS SUB" kind="subtitles" srclang="en" default/-->
                            </video>

                            <img id="picalterhero" class="video-alternative" width="100%" height="100%" src="/assets/videos/heider.jpg"/>
                        </div>


                        <div id="viddivside1" class="video-main-sidetop" onmouseover="VideoPlay(\'hsvid1s\');VideoStop(\'hsvid1\');VideoStop(\'hsvid2s\');" >
                            <div class="video-icon-expand"><img width="70" height="70" src="/assets/images/video-icons/play.png" onclick="VideoExpand_Explode1(\'viddivside1\', \'MainVideo\');"></div>
                            <div class="video-icon-restore"><img width="20" height="20" src="/assets/images/video-icons/close.png" onclick="VideoRestore(\'viddivside1\', \'MainVideo\');"></div>
                            <div class="video-icon-fullscreen"><img width="20" height="20" src="/assets/images/video-icons/close.png" onclick="VideoFullScreen(\'hsvid1s\');"></div>

                            <video id="hsvid1s" preload="none" width="100%" height="100%" loop="loop" muted >  <!-- poster="/assets/images/heider.jpg" -->
                                <!-- source src="/assets/videos/v.mp4#t=10,50" /-->
                                <!-- source src="/assets/videos/v.mp4" ></source -->
                                <source src=""/>
                                <!-- track src="/assets/videos/v.vtt" label="HS SUB" kind="subtitles" srclang="en" default></track -->
                            </video>

                            <img id="picaltersidetop" class="video-alternative" width="100%" height="100%" src="/assets/videos/heider.jpg"/>
                        </div>


                        <div id="viddivside2" class="video-main-sidebottom" onmouseover="VideoPlay(\'hsvid2s\');VideoStop(\'hsvid1\');VideoStop(\'hsvid1s\');" >
                            <div class="video-icon-expand"><img width="70" height="70" src="/assets/images/video-icons/play.png" onclick="VideoExpand_Explode1(\'viddivside2\', \'MainVideo\');"></div>
                            <div class="video-icon-restore"><img width="20" height="20" src="/assets/images/video-icons/close.png" onclick="VideoRestore(\'viddivside2\', \'MainVideo\');"></div>
                            <div class="video-icon-fullscreen"><img width="20" height="20" src="/assets/images/video-icons/close.png" onclick="VideoFullScreen(\'hsvid2s\');"></div>

                            <video id="hsvid2s" preload="none" width="100%" height="100%" loop="loop" muted >  <!-- poster="/assets/images/heider.jpg" -->
                                <!-- source src="/assets/videos/v.mp4#t=10,50" /-->
                                <!-- source src="/assets/videos/v.mp4" ></source -->
                                <source src=""/>
                                <!-- track src="/assets/videos/v.vtt" label="HS SUB" kind="subtitles" srclang="en" default></track -->
                            </video>

                            <img id="picaltersidebot" class="video-alternative" width="100%" height="100%" src="/assets/videos/heider.jpg"/>
                        </div>
                    </div>
                </div>
        </div>

    ';

    }




}

