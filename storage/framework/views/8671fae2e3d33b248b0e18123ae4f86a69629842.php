<?php $__env->startSection('page_title', 'Legacy Data Admin'); ?>

<?php $__env->startSection('main_content'); ?>
    <?php // dd($data); ?>
    <div class="normalheader transition">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="/admin/">Dashboard</a></li>
                        <li class="active">
                            <span>Legacy Data Structure</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Legacy Data Structure
                </h2>
                <small>Manage data structure between old legacy data and new optimised database</small>
            </div>
        </div>
    </div>







    <div class="content animate-panel">

        <!-- First row, only Base level data, just making sure that we've got all the parent ID's -->
        <div class="row projects">

            <div class="col-md-4">
                <div class="hpanel hgreen">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="text-center">
                                    <h2 class="m-b-xs">Yachts</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="project-label">Legacy Count</div>
                                            <span id="sync-count-data-yacht-old"><?php echo e($data['yacht']['old']); ?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="project-label">Current Count</div>
                                            <span id="sync-count-data-yacht-new"><?php echo e($data['yacht']['new']); ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="m">
                                                <div id="percent-data-yacht" class="progress m-t-xs full progress-striped">
                                                    <div style="width: <?php echo e($data['yacht']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['yacht']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-success">
                                                        <?php echo e($data['yacht']['percent_complete']); ?>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($data['yacht']['old'] != $data['yacht']['new']): ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button id="data-yacht" class="ladda-button btn btn-success sync-data" data-style="contract">
                                                    <span class="ladda-label">Sync</span>
                                                    <span class="ladda-spinner"></span>
                                                    <div class="ladda-progress" style="width: 100px;"></div>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                    </div>

                    <?php if( $data['yacht']['old'] != $data['yacht']['new'] ): ?>
                        <div class="panel-footer" id="alert-message-data-yacht">
                            Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                        </div>
                    <?php endif; ?>

                </div>
            </div>


            <div class="col-md-4">
                <div class="hpanel hyellow">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="text-center">
                                    <h2 class="m-b-xs">Brokers</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="project-label">Legacy Count</div>
                                            <span id="sync-count-data-broker-old"><?php echo e($data['broker']['old']); ?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="project-label">Current Count</div>
                                            <span id="sync-count-data-broker-new"><?php echo e($data['broker']['new']); ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="m">
                                                <div id="percent-data-broker" class="progress m-t-xs full progress-striped">
                                                    <div style="width: <?php echo e($data['broker']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['broker']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-warning">
                                                        <?php echo e($data['broker']['percent_complete']); ?>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if( $data['broker']['old'] != $data['broker']['new'] ): ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button id="data-broker" class="ladda-button btn btn-warning sync-data" data-style="contract">
                                                    <span class="ladda-label">Sync</span>
                                                    <span class="ladda-spinner"></span>
                                                    <div class="ladda-progress" style="width: 100px;"></div>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                    </div>

                    <?php if( $data['broker']['old'] != $data['broker']['new'] ): ?>
                        <div class="panel-footer" id="alert-message-data-broker">
                            Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="hpanel hblue">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="text-center">
                                    <h2 class="m-b-xs">Builders</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="project-label">Legacy Count</div>
                                            <span id="sync-count-data-builder-old"><?php echo e($data['builder']['old']); ?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="project-label">Current Count</div>
                                            <span id="sync-count-data-builder-new"><?php echo e($data['builder']['new']); ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="m">
                                                <div id="percent-data-builder" class="progress m-t-xs full progress-striped">
                                                    <div style="width: <?php echo e($data['builder']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['builder']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-info">
                                                        <?php echo e($data['builder']['percent_complete']); ?>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if( $data['builder']['old'] != $data['builder']['new'] ): ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button id="data-builder" class="ladda-button btn btn-info sync-data" data-style="contract">
                                                    <span class="ladda-label">Sync</span>
                                                    <span class="ladda-spinner"></span>
                                                    <div class="ladda-progress" style="width: 100px;"></div>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                    </div>

                    <?php if( $data['builder']['old'] != $data['builder']['new'] ): ?>
                        <div class="panel-footer" id="alert-message-data-builder">
                            Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <!-- Now we've got the ID's, let's capture the addresses -->
        <div class="row projects">

            <?php if(  ($data['yacht']['percent_complete']      == 100)
                && ($data['broker']['percent_complete']     == 100)
                && ($data['builder']['percent_complete']    == 100)
            ): ?>

                <div class="col-md-4">
                    <div class="hpanel hviolet">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="text-center">
                                        <h2 class="m-b-xs">Groups</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="project-label">Legacy Count</div>
                                                <span id="sync-count-data-group-old"><?php echo e($data['group']['old']); ?></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="project-label">Current Count</div>
                                                <span id="sync-count-data-group-new"><?php echo e($data['group']['new']); ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="m">
                                                    <div id="percent-data-group" class="progress m-t-xs full progress-striped">
                                                        <div style="width: <?php echo e($data['group']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['group']['percent_complete']); ?>" role="progressbar" class=" progress-bar-purple">
                                                            <?php echo e($data['group']['percent_complete']); ?>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $data['group']['old'] != $data['group']['new'] ): ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button id="data-group" class="ladda-button btn w-xs btn-primary2 sync-data" data-style="contract">
                                                        <span class="ladda-label">Sync</span>
                                                        <span class="ladda-spinner"></span>
                                                        <div class="ladda-progress" style="width: 100px;"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php if( $data['group']['old'] != $data['group']['new'] ): ?>
                            <div class="panel-footer" id="alert-message-data-group">
                                Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="hpanel hyellow">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="text-center">
                                        <h2 class="m-b-xs">Addresses</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="project-label">Legacy Count</div>
                                                <span id="sync-count-data-broker-address-old"><?php echo e($data['broker']['address']['old']); ?></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="project-label">Current Count</div>
                                                <span id="sync-count-data-broker-address-new"><?php echo e($data['broker']['address']['new']); ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="m">
                                                    <div id="percent-data-broker-address" class="progress m-t-xs full progress-striped">
                                                        <div style="width: <?php echo e($data['broker']['address']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['broker']['address']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-warning">
                                                            <?php echo e($data['broker']['address']['percent_complete']); ?>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $data['broker']['address']['old'] != $data['broker']['address']['new'] ): ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button id="data-broker-address" class="ladda-button btn btn-warning sync-data" data-style="contract">
                                                        <span class="ladda-label">Sync</span>
                                                        <span class="ladda-spinner"></span>
                                                        <div class="ladda-progress" style="width: 100px;"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php if( $data['broker']['address']['old'] != $data['broker']['address']['new'] ): ?>
                            <div class="panel-footer" id="alert-message-data-broker-address">
                                Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="hpanel hblue">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="text-center">
                                        <h2 class="m-b-xs">Addresses</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="project-label">Legacy Count</div>
                                                <span id="sync-count-data-builder-address-old"><?php echo e($data['builder']['address']['old']); ?></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="project-label">Current Count</div>
                                                <span id="sync-count-data-builder-address-new"><?php echo e($data['builder']['address']['new']); ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="m">
                                                    <div id="percent-data-builder-address" class="progress m-t-xs full progress-striped">
                                                        <div style="width: <?php echo e($data['builder']['address']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['builder']['address']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-info">
                                                            <?php echo e($data['builder']['address']['percent_complete']); ?>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $data['builder']['address']['old'] != $data['builder']['address']['new'] ): ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button id="data-builder-address" class="ladda-button btn btn-info sync-data" data-style="contract">
                                                        <span class="ladda-label">Sync</span>
                                                        <span class="ladda-spinner"></span>
                                                        <div class="ladda-progress" style="width: 100px;"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php if( $data['builder']['address']['old'] != $data['builder']['address']['new'] ): ?>
                            <div class="panel-footer" id="alert-message-data-builder-address">
                                Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>



            <?php endif; ?>
        </div>

        <!-- Next, Builder models, and yacht mapping data.. maybe -->
        <div class="row projects">

            <?php if(  ($data['yacht']['percent_complete']      == 100)
                && ($data['broker']['percent_complete']     == 100)
                && ($data['builder']['percent_complete']    == 100)
            ): ?>

                <div class="col-md-4">

                    <div class="hpanel hyellow">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="text-center">
                                        <h2 class="m-b-xs">News</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="project-label">Legacy Count</div>
                                                <span id="sync-count-data-broker-old"><?php echo e($data['news']['old']); ?></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="project-label">Current Count</div>
                                                <span id="sync-count-data-broker-new"><?php echo e($data['news']['new']); ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="m">
                                                    <div id="percent-data-broker" class="progress m-t-xs full progress-striped">
                                                        <div style="width: <?php echo e($data['broker']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['broker']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-warning">
                                                            <?php echo e($data['broker']['percent_complete']); ?>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $data['broker']['old'] != $data['broker']['new'] ): ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button id="data-broker" class="ladda-button btn btn-warning sync-data" data-style="contract">
                                                        <span class="ladda-label">Sync</span>
                                                        <span class="ladda-spinner"></span>
                                                        <div class="ladda-progress" style="width: 100px;"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php if( $data['broker']['old'] != $data['broker']['new'] ): ?>
                            <div class="panel-footer" id="alert-message-data-broker">
                                Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="hpanel hyellow">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="text-center">
                                        <h2 class="m-b-xs">Multimedia</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="project-label">Legacy Count</div>
                                                <span id="sync-count-data-broker-old"><?php echo e($data['broker']['old']); ?></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="project-label">Current Count</div>
                                                <span id="sync-count-data-broker-new"><?php echo e($data['broker']['new']); ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="m">
                                                    <div id="percent-data-broker" class="progress m-t-xs full progress-striped">
                                                        <div style="width: <?php echo e($data['broker']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['broker']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-warning">
                                                            <?php echo e($data['broker']['percent_complete']); ?>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $data['broker']['old'] != $data['broker']['new'] ): ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button id="data-broker" class="ladda-button btn btn-warning sync-data" data-style="contract">
                                                        <span class="ladda-label">Sync</span>
                                                        <span class="ladda-spinner"></span>
                                                        <div class="ladda-progress" style="width: 100px;"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php if( $data['broker']['old'] != $data['broker']['new'] ): ?>
                            <div class="panel-footer" id="alert-message-data-broker">
                                Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="hpanel hblue">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="text-center">
                                        <h2 class="m-b-xs">Models</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="project-label">Legacy Count</div>
                                                <span id="sync-count-data-model-old"><?php echo e($data['model']['old']); ?></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="project-label">Current Count</div>
                                                <span id="sync-count-data-model-new"><?php echo e($data['model']['new']); ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="m">
                                                    <div id="percent-data-model" class="progress m-t-xs full progress-striped">
                                                        <div style="width: <?php echo e($data['model']['percent_complete']); ?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo e($data['model']['percent_complete']); ?>" role="progressbar" class=" progress-bar progress-bar-info">
                                                            <?php echo e($data['model']['percent_complete']); ?>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if( $data['model']['old'] != $data['model']['new'] ): ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button id="data-model" class="ladda-button btn btn-info sync-data" data-style="contract">
                                                        <span class="ladda-label">Sync</span>
                                                        <span class="ladda-spinner"></span>
                                                        <div class="ladda-progress" style="width: 100px;"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php if( $data['model']['old'] != $data['model']['new'] ): ?>
                            <div class="panel-footer" id="alert-message-data-model">
                                Warnings: <span class="label label-danger pull-right">Count mismatch</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>



            <?php endif; ?>
        </div>

        <?php $__env->stopSection(); ?>




        <?php $__env->startSection('custom_jquery'); ?>

            $('.sync-data').ladda().click( function () {
            var myID = $('#' + this.id);
            var masterID = this.id;
            myID.ladda( 'start' );
            var status_flag = '';



            $.ajax( "/ajax/cms/syncData/" + masterID )
            .done(function( msg ) {
            if (msg == 'true') {
            $('#sync-count-' + masterID + '-new').text( $('#sync-count-' + masterID + '-old').text() );

            toastr["success"]("You should now find all requested data in the master database", "Success!");

            $('#alert-message-' + masterID).hide();

            myID.closest(".row").hide();

            myID.ladda('stop');

            if (masterID == 'data-yacht') {
            status_flag = 'success';
            } else if (masterID == 'data-broker') {
            status_flag = 'warning';
            } else if (masterID == 'data-builder') {
            status_flag = 'info';
            } else {
            status_flag = 'success';
            }

            $('#percent-' + masterID).html('<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class=" progress-bar progress-bar-' + status_flag + '">100%</div>');

            } else {
            toastr["warning"]("Please try again, if this persists, contact your database administrator.", "Sync Failed");
            myID.ladda( 'stop' );
            }
            })
            .fail(function( msg ) {
            toastr["warning"]("Please try again, if this persists, contact your database administrator.", "Sync Failed");
            myID.ladda( 'stop' );
            });

            });

<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>