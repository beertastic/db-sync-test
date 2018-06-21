
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Superyachts.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?=$YachtCaption ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?=$YachtOverview ?>">
    <title>Brokerage listing | superyachts.com</title>
    <link rel="shortcut icon" href="/assets/images/site/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link href="hack/assets/stylesheets/hsvideo.css" rel="stylesheet" type="text/css" media="all">
    <link href="hack/assets/stylesheets/styles.css" rel="stylesheet" type="text/css" media="all">
    <link href="hack/assets/stylesheets/dev.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="brokerage-listing" class="brokerage-listing-overview" data-length-uni="metric" data-currency-unit="gbp">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->




<?php echo $__env->make('hack.menus.sideout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="site-body">

    <!--
    Only for development purposes. Remove in production.:

    <...?php include 'menus/dev-orange-top.php'; ?...>
    -->

<?php echo $__env->make('hack.menus.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('hack.menus.mainbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    <!-- SY.com ... contact us ...  -->
<?php echo $__env->make('hack.menus.pagenavi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   <!-- Main Menu -->



    <!--
    # Hero player placeholder container
    -->

    <!-- ?=GetYachtHeroDemoImage(1234);? -->

    <script language="JavaScript"><?=$JavaVideoArray?></script>

    <?=$HtmlSlides?>

    <script src="hack/assets/javascripts/hsvideo.js"></script>


    <!--
    # Page tabs, dropdown share (desktop) and fast find quick link
    -->


    <div class="section-container section-tabs">

        <div class="section-main">
            <h1 class="mobile-listing-title hide-tablet hide-desktop">SUPERYACHT TV FOR SALE</h1>


            <div class="page-tabs page-tabs--sale">
                <div class="page-tabs__inner">
                    <nav class="page-tabs__nav dragscroll" data-overflowing="none">
                        <div class="page-tabs__nav-inner no-transition" style="transform: none;">
                            <a href="/for-sale/brokerage-listing.php?tab=overview" class="page-tabs__item " aria-selected="true">overview</a>
                            <a href="/for-sale/brokerage-listing.php?tab=deck-plans" class="page-tabs__item " aria-selected="false">Deck plans</a>
                            <a href="/for-sale/brokerage-listing.php?tab=equipment" class="page-tabs__item " aria-selected="false">Equipment</a>
                            <a href="/for-sale/brokerage-listing.php?tab=specifications" class="page-tabs__item " aria-selected="false">Specs</a>
                        </div>
                    </nav>
                    <button class="page-tabs__advancer page-tabs__advancer-left icon-chevron-left" type="button"></button>
                    <button class="page-tabs__advancer page-tabs__advancer-right icon-chevron-right" type="button"></button>
                </div>
                <a href="#" class="page-tabs__item page-tabs__item--share" aria-selected="false">
                    Share <span class="page-tabs__item-share-icon icon-share"></span>
                </a>
            </div>



            <div class="hide-tablet hide-desktop">
                <div class="slidedown-share" data-aos="fade-up" data-aos-once="true">
                    <ul class="slidedown-share__list">
                        <li class="slidedown-share__list-item twitter">
                            <a class="share-link" href="https://twitter.com/share?url=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-twitter"></span>
                                    <div class="slidedown-share__footer">Tweet <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li
                        ><li class="slidedown-share__list-item facebook">
                            <a class="share-link" href="https://www.facebook.com/sharer.php?u=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-facebook"></span>
                                    <div class="slidedown-share__footer">Share <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li
                        ><li class="slidedown-share__list-item linkedin">
                            <a class="share-link" href="https://www.linkedin.com/shareArticle?mini=true&url=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-linkedin"></span>
                                    <div class="slidedown-share__footer">Share <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li
                        ><li class="slidedown-share__list-item email">
                            <a class="share-link" href="mailto:?subject=http://superyachts.com&body=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-email"></span>
                                    <div class="slidedown-share__footer">Email <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li><li class="slidedown-share__list-item link">
                            <a class="share-link" href="mailto:?subject=http://superyachts.com&body=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-link"></span>
                                    <div class="slidedown-share__footer">Copy <span class="hide-mobile hide-smartphone hide-tablet">link</span><span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="slidedown-share__link-copied">Page copied to clipboard</div>
                </div>
            </div>


        </div>

        <div class="section-sidebar hide-mobile hide-smartphone hide-tablet">

            <a id="toggle-fast-find" class="fast-find-button fast-find-button--sale" href="#">
                <span class="icon-arrow-line-right"></span>
                Sale <span class="highlight highlight--sale">Search</span><span class="icon icon-search"></span>
            </a>
        </div>
    </div>

    <!--
    # Dropdown share (mobile), articles (for each tab), sidebar build team.
    -->

    <div class="section-container section-article">

        <div class="section-main no-pad">
            <div class="hide-mobile hide-smartphone">
                <div class="slidedown-share" data-aos="fade-up" data-aos-once="true">
                    <ul class="slidedown-share__list">
                        <li class="slidedown-share__list-item twitter">
                            <a class="share-link" href="https://twitter.com/share?url=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-twitter"></span>
                                    <div class="slidedown-share__footer">Tweet <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li
                        ><li class="slidedown-share__list-item facebook">
                            <a class="share-link" href="https://www.facebook.com/sharer.php?u=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-facebook"></span>
                                    <div class="slidedown-share__footer">Share <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li
                        ><li class="slidedown-share__list-item linkedin">
                            <a class="share-link" href="https://www.linkedin.com/shareArticle?mini=true&url=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-linkedin"></span>
                                    <div class="slidedown-share__footer">Share <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li
                        ><li class="slidedown-share__list-item email">
                            <a class="share-link" href="mailto:?subject=http://superyachts.com&body=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-email"></span>
                                    <div class="slidedown-share__footer">Email <span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li><li class="slidedown-share__list-item link">
                            <a class="share-link" href="mailto:?subject=http://superyachts.com&body=http://localhost:9010/for-sale/brokerage-listing.php?tab=overview">
                                <div class="slidedown-share__list-item-inner">
                                    <span class="slidedown-share__icon icon-link"></span>
                                    <div class="slidedown-share__footer">Copy <span class="hide-mobile hide-smartphone hide-tablet">link</span><span class="icon-arrow-line-right hide-mobile hide-smartphone"></span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="slidedown-share__link-copied">Page copied to clipboard</div>
                </div>            </div>

            <article class="article article--concrete article--sale article-yacht-listing" data-aos="fade-up" data-aos-once="true" data-aos-offset="0">
                <div class="article__inner clearfix">
                    <div class="article__body">
                        <header class="article__header article-yacht-listing__header">
                            <h1 class="article__title article-yacht-listing__title"><?=$YachtName?></h1>
                            <div class="article-yacht-listing__details">
                    <span class="circle-container circle-container--sale">
                        <svg width="76" height="76" class="ring">
                            <circle r="38" cx="38" cy="38" class="pie"></circle>
                        </svg>
                        <span class="circle-val circle-val-length">
                            <span class="lbl">length</span>
                            <span class="val" data-length="<?=$YachtLength?>"><?=$YachtLength?>m</span>
                        </span>
                    </span>
                                <span class="circle-container circle-container--sale">
                        <svg width="76" height="76" class="ring">
                            <circle r="38" cx="38" cy="38" class="pie"></circle>
                        </svg>
                        <span class="circle-val circle-val-year">
                            <span class="lbl">year</span>
                            <span class="val" data-year="<?=$YachtBuildYear?>"><?=$YachtBuildYear?></span>
                        </span>
                    </span>
                            </div>
                        </header>

                        <!-- Article description -->
                        <?=$YachtDesc?>
                    </div>
                </div>
                <footer class="article__footer clearfix">
                    <a class="article__read-more" href="#">
                        <div class="article__read-more-open">
                            <span class="icon-arrow-line-down"></span> read more
                        </div>
                        <div class="article__read-more-closed">
                            <span class="icon-arrow-line-up"></span> collapse
                        </div>
                    </a>
                </footer>
            </article>
        </div>






        <!-- Listing Details -->
        <div class="section-sidebar ">
            <div class="sidebar__inner">
                <h3 class="heading hide-mobile hide-smartphone hide-tablet">
                    Listing <span class="highlight highlight--sale">details</span>
                </h3>

                <hr class="bar bar--sale hide-mobile hide-smartphone hide-tablet">

                <a class="listing-logo" href="#">
                    <img src="/assets/images/n_placeholders/company-pack/wide-logo-1.jpg" alt="">
                </a>

                <a class="brochure-button" href="/assets//images/n_placeholders/news-event/charter-news06.jpg" download="/assets//images/n_placeholders/news-event/charter-news06.jpg">
                    <span class="icon-pdf"></span>
                    <div>PDF Brochure</div>
                </a>

                <ul class="listing-contact">
                    <li class="listing-contact__item listing-contact__item--email">
                        <a type="button" data-micromodal-trigger="contact-modal" class="open-contact-modal">
                            <span class="icon icon-email"></span> Email central agent
                        </a>
                    </li>
                    <li class="listing-contact__item listing-contact__item--phone">
                        <a type="button" class="secret-phone-number">
                            <span class="icon icon-phone"></span>
                            <span class="secret-phone-number__label">Phone central agent</span>
                            <span class="secret-phone-number__secret">+10 2 888 3323</span>
                        </a>
                    </li>
                </ul>

                <ul class="listing-brokerage-info">
                    <li class="listing-brokerage-info__price">
                        <h4>Listed price:</h4>
                        <div data-price-gbp="GBP £65,741,360" data-price-usd="USD $92,000,000" data-price-eur="EUR €75,240,360">USD $92,000,000</div>
                    </li>
                    <li class="listing-brokerage-info__location">
                        <h4>Location:</h4>
                        <span>Genoa, Italy</span>
                    </li>
                </ul>

                <div class="listing-build-team listing-build-team--sale">
                    <header class="listing-build-team__header">Build<span>team</span></header>
                    <ul class="listing-build-team__list">
                        <li>Shipyard: <a href="#">Lürssen yachts</a></li>
                        <li>Naval architect: <a href="#">Lürssen yachts</a></li>
                        <li>Interior designer: <a href="#">Reymond Langton Yardmans</a></li>
                        <li>Exterior designer: <a href="#">Espen Oeino</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Listing Details -->





    </div>

    <!--
    # Other {company} yachts and related news
    -->

    <div class="section-container section-featured">
        <div class="section-main">
            <h2 class="heading heading--sale">
                <span class="highlight highlight--sale">Similar</span> yachts
                <div class="slider-buttons">
                    <a class="see-all" href="#">see all</a>
                    <a href="#" class="slider-button icon-arrow-triangle-left" id="similar-yachts-swiper-btn-prev" role="button"></a>
                    <a href="#" class="slider-button icon-arrow-triangle-right" id="similar-yachts-swiper-btn-next" role="button"></a>
                </div>
            </h2>

            <hr class="bar bar--sale">
            <div class="swiper-container main-dual-yachts-swiper" data-swiper-btn-prev-selector="#similar-yachts-swiper-btn-prev" data-swiper-btn-next-selector="#similar-yachts-swiper-btn-next" data-aos="fade-up" data-aos-once="true">
                <div class="swiper-wrapper">



                    <h1>xxxxxxxxxxxxxx <?php //echo Slugify(" .  adfhj-/--§-/ABCDE klhkjqehr A%^&%*&£ jklj;lj /z§");  ?> yyyyyyyyy</h1><br>

                    <?php //GetSimilarYachts(9999999); ?>




                </div>
            </div>
        </div>

        <div class="section-sidebar">
            <h2 class="heading heading--sale">
                <span class="highlight highlight--sale">Related</span> news
                <div class="slider-buttons">
                    <a href="#" class="slider-button icon-arrow-triangle-left" id="side-vertical-dual-related-news-btn-prev" role="button"></a>
                    <a href="#" class="slider-button icon-arrow-triangle-right" id="side-vertical-dual-related-news-btn-next" role="button"></a>
                </div>
            </h2>

            <hr class="bar bar--sale">

            <div class="side-widget">
                <div class="swiper-container side-vertical-dual-related-news" data-aos="fade-up" data-aos-once="true">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <a href="/news/event-single.php?tab=overview" class="news-white-vertical-card  ">
                                <div class="thumbnail">
                                    <img src="/assets/images/n_placeholders/news-event/charter-news01.jpg" alt="">

                                    <!-- Tag displays in bottom left corner -->
                                    <div class="tag tag--bl ">SY Exclusive</div>

                                    <!-- Star thing that animates from top when hovering -->
                                    <div class="exclusive-tag">
                                        <div class="exclusive-tag__icon" >
                                            <span class="icon-sy-exclusive-star"></span>
                                        </div>
                                        <div class="exclusive-tag__text">Exclusive</div>
                                    </div>
                                </div>

                                <div class="content">
                                    <time>28/04/2016</time>
                                    <h3>An American classic : Delta 122 SOC sold by Denison</h3>
                                </div>
                            </a>            </div>
                        <div class="swiper-slide">

                            <a href="/news/event-single.php?tab=overview" class="news-white-vertical-card  ">
                                <div class="thumbnail">
                                    <img src="/assets/images/n_placeholders//news-event/charter-news02.jpg" alt="">

                                    <!-- Tag displays in bottom left corner -->
                                    <div class="tag tag--bl ">SY Exclusive</div>

                                    <!-- Star thing that animates from top when hovering -->
                                    <div class="exclusive-tag">
                                        <div class="exclusive-tag__icon" >
                                            <span class="icon-sy-exclusive-star"></span>
                                        </div>
                                        <div class="exclusive-tag__text">Exclusive</div>
                                    </div>
                                </div>

                                <div class="content">
                                    <time>28/04/2016</time>
                                    <h3>An American classic : Delta 122 SOC sold by Denison</h3>
                                </div>
                            </a>            </div>
                        <div class="swiper-slide">

                            <a href="/news/event-single.php?tab=overview" class="news-white-vertical-card  ">
                                <div class="thumbnail">
                                    <img src="/assets/images/n_placeholders//news-event/charter-news03.jpg" alt="">

                                    <!-- Tag displays in bottom left corner -->
                                    <div class="tag tag--bl ">SY Exclusive</div>

                                    <!-- Star thing that animates from top when hovering -->
                                    <div class="exclusive-tag">
                                        <div class="exclusive-tag__icon" >
                                            <span class="icon-sy-exclusive-star"></span>
                                        </div>
                                        <div class="exclusive-tag__text">Exclusive</div>
                                    </div>
                                </div>

                                <div class="content">
                                    <time>28/04/2016</time>
                                    <h3>An American classic : Delta 122 SOC sold by Denison</h3>
                                </div>
                            </a>            </div>
                        <div class="swiper-slide">

                            <a href="/news/event-single.php?tab=overview" class="news-white-vertical-card  ">
                                <div class="thumbnail">
                                    <img src="/assets/images/n_placeholders//news-event/charter-news04.jpg" alt="">

                                    <!-- Tag displays in bottom left corner -->
                                    <div class="tag tag--bl ">SY Exclusive</div>

                                    <!-- Star thing that animates from top when hovering -->
                                    <div class="exclusive-tag">
                                        <div class="exclusive-tag__icon" >
                                            <span class="icon-sy-exclusive-star"></span>
                                        </div>
                                        <div class="exclusive-tag__text">Exclusive</div>
                                    </div>
                                </div>

                                <div class="content">
                                    <time>28/04/2016</time>
                                    <h3>An American classic : Delta 122 SOC sold by Denison</h3>
                                </div>
                            </a>            </div>
                        <div class="swiper-slide">

                            <a href="/news/event-single.php?tab=overview" class="news-white-vertical-card  ">
                                <div class="thumbnail">
                                    <img src="/assets/images/n_placeholders//news-event/charter-news05.jpg" alt="">

                                    <!-- Tag displays in bottom left corner -->
                                    <div class="tag tag--bl ">SY Exclusive</div>

                                    <!-- Star thing that animates from top when hovering -->
                                    <div class="exclusive-tag">
                                        <div class="exclusive-tag__icon" >
                                            <span class="icon-sy-exclusive-star"></span>
                                        </div>
                                        <div class="exclusive-tag__text">Exclusive</div>
                                    </div>
                                </div>

                                <div class="content">
                                    <time>28/04/2016</time>
                                    <h3>An American classic : Delta 122 SOC sold by Denison</h3>
                                </div>
                            </a>            </div>
                        <div class="swiper-slide">

                            <a href="/news/event-single.php?tab=overview" class="news-white-vertical-card  ">
                                <div class="thumbnail">
                                    <img src="/assets/images/n_placeholders//news-event/charter-news06.jpg" alt="">

                                    <!-- Tag displays in bottom left corner -->
                                    <div class="tag tag--bl ">SY Exclusive</div>

                                    <!-- Star thing that animates from top when hovering -->
                                    <div class="exclusive-tag">
                                        <div class="exclusive-tag__icon" >
                                            <span class="icon-sy-exclusive-star"></span>
                                        </div>
                                        <div class="exclusive-tag__text">Exclusive</div>
                                    </div>
                                </div>

                                <div class="content">
                                    <time>28/04/2016</time>
                                    <h3>An American classic : Delta 122 SOC sold by Denison</h3>
                                </div>
                            </a>            </div>
                    </div>
                </div>            </div>
        </div>
    </div>

    <div class="modal" id="contact-modal" aria-hidden="true" data-recipient="Lürssen yachtsss">
        <div class="modal-overlay" tabindex="-1" data-micromodal-close>
            <div class="modal-dialog" role="dialog" aria-modal="true" aria-labelledby="contact-modal-title" >
                <header class="modal-header">
                    <h3>
                        <span class="modal-header-icon icon-contact"></span> Talk to us
                        <a class="modal-close-btn" type="button" data-micromodal-close>X</a>
                    </h3>
                </header>

                <form class="modal-form">
                    <div class="modal-success-message animated zoomIn"><p></p></div>
                    <div>
                        <div class="modal-error-message animated lightSpeedIn"><p></p></div>
                        <textarea class="modal-textarea" spellcheck='false' placeholder="Type you message here..."></textarea>
                        <div class="textarea-counter is-invalid"><span class="current">0</span> / <span class="limit">1000</span></div>
                    </div>
                    <hr class="bar bar--dotted bar--grey">

                    <div class="modal-grid">
                        <div class="modal-grid-row">
                            <div class="modal-grid-col"><input type="text" name="first-name" placeholder="FIRST NAME"></div>
                            <div class="modal-grid-col"><input type="text" name="last-name" placeholder="LAST NAME"></div>
                        </div>
                        <div class="modal-grid-row">
                            <div class="modal-grid-col"><input type="text" name="email-address" placeholder="EMAIL ADDRESS"></div>
                            <div class="modal-grid-col"> <input type="text" name="phone-number" placeholder="PHONE NUMBER"></div>
                        </div>
                    </div>

                    <footer class="modal-footer">
                        <div class="g-recaptcha" data-sitekey="6Lf2aT0UAAAAALdzvxQK45-MgAHz5_IIK5rG0aQW"></div>
                        <div class="flex-spacer"></div>
                        <button class="modal-submit" type="submit">Send message <span class="icon-arrow-line-right"></span></button>
                    </footer>
                </form>
            </div>
        </div>
    </div>


    <?php echo $__env->make('hack.menus.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div> <!-- #site-Body -->



<script src='https://www.google.com/recaptcha/api.js' async></script>

<script src="/assets/javascripts/manifest.js"></script>
<script src="/assets/javascripts/vendor.js"></script>
<script src="/assets/javascripts/scripts.js"></script>
<script src="/assets/javascripts/dev.js"></script>
</body>
</html>