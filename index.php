<?php 

    $page_name = "Setting";
    include "module/header.php";

    // toast("success", "test", "test msg"); # Status - Title - Messege

    if ( isset($_POST['submit']) ) {
        $data = json_decode(file_get_contents($data_file), true) ?? array();
        $data = array_merge($data, $_POST);
        file_put_contents($data_file, json_encode($data, JSON_PRETTY_PRINT));
        toast("success", "Update Success", "Setting updated succfully");
    }
    
    $app_data = json_decode(file_get_contents($data_file), true);
    
    foreach( $app_data as $key => $val ) {
        $$key = $val;
    }
    
?>

    <?php include "module/nav.php" ?>
    <?php include "module/topbar.php" ?>
    <?php include "module/sidebar.php" ?>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> -->
    

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SETTINGS</h2>
            </div>

            
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>GENERAL SETTINGS</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="" method="POST">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="">
                                        <div class="form-line">
                                            <label>Company Info</label>
                                            <textarea class="form-control" rows="3" name="company_info"><?= $company_info ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <div class="form-line">
                                            <label>Vip Events</label>
                                            <textarea class="form-control" rows="3" name="vip_events"><?= $vip_events ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <div class="form-line">
                                            <label>Financial Info</label>
                                            <textarea class="form-control" rows="3" name="financial_info"><?= $financial_info ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <div class="form-line">
                                            <label>Beginner Tutorial</label>
                                            <textarea class="form-control" rows="3" name="beginner_tutorial"><?= $beginner_tutorial ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-sm-6">
                                    <div class="">
                                        <div class="form-line">
                                            <label>Notification</label>
                                            <textarea class="form-control" rows="3" name="notification"><?= $notification ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="">
                                        <div class="form-line">
                                            <label>Order Grab Notice</label>
                                            <textarea class="form-control" rows="3" name="order_brab_notice"><?= $order_brab_notice ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit">SETTING UPDATE</button>
                            </form>
                        </div>
                            
                    </div>
                </div>
                <!-- #END# Task Info -->

            </div>
        </div>
    </section>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> -->

    <?php include "module/footer.php" ?>
