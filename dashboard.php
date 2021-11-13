<?php include "sidebar.php"; ?>
<div class="menu-item d-flex">
    <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
</div>

</div>

</div>

</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>


<div id="content" class="app-content">

    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard v3</li>
    </ol>


    <h1 class="page-header mb-3">Dashboard v3</h1>


    <div class="d-sm-flex align-items-center mb-3">
        <a href="#" class="btn btn-inverse me-2 text-truncate" id="daterange-filter">
            <i class="fa fa-calendar fa-fw text-white-transparent-5 ms-n1"></i>
<!--            <span>1 Jun 2021 - 7 Jun 2021</span>-->
            <b class="caret ms-1 opacity-5"></b>
        </a>
<!--        <div class="text-muted fw-bold mt-2 mt-sm-0">compared to <span id="daterange-prev-date">24 Mar-30 Apr 2021</span></div>-->
    </div>


    <div class="row">

        <div class="col-xl-6">

            <div class="card border-0 mb-3 overflow-hidden bg-gray-800 text-white">

                <div class="card-body">

                    <div class="row">

                        <div class="col-xl-7 col-lg-8">

                            <div class="mb-3 text-gray-500">
                                <b>TOTAL BILLS PAYMENT</b>
                                <?php
                                $result = mysqli_query($con,"SELECT sum(amount) FROM  bill_payment ");
                                $row = mysqli_fetch_row($result);
                                $total = $row[0];
                                ?>
                                <span class="ms-2">
<i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Total sales" data-bs-placement="top" data-bs-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
</span>
                            </div>


                            <div class="d-flex mb-1">
                                <h2 class="mb-0">NGN<span data-animation="number" data-value="<?php echo number_format(intval($total *1),2); ?>">0.00</span></h2>
                                <div class="ms-auto mt-n1 mb-n1"><div id="total-sales-sparkline"></div></div>
                            </div>


                            <div class="mb-3 text-gray-500">
                                <i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">0.00</span>% compare to last week
                            </div>

                            <hr class="bg-white-transparent-5" />

                            <div class="row text-truncate">

                                <div class="col-6">
                                    <div class="fs-12px text-gray-500">Number Of Bills Sold</div>
                                    <?php
                                    $result = mysqli_query($con,"SELECT count(*) FROM  bill_payment");
                                    $row = mysqli_fetch_row($result);
                                    $soldproducts = $row[0];
                                    $aver= $total/$soldproducts;

                                    ?>
                                    <div class="fs-18px mb-5px fw-bold" data-animation="number" data-value="<?php echo $soldproducts; ?>">0</div>
                                    <div class="progress h-5px rounded-3 bg-gray-900 mb-5px">
                                        <div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 0%"></div>
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="fs-12px text-gray-500">Avg. sales per order</div>
                                    <div class="fs-18px mb-5px fw-bold">NGN<span data-animation="number" data-value="<?php echo $aver; ?>">0.00</span></div>
                                    <div class="progress h-5px rounded-3 bg-gray-900 mb-5px">
                                        <div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
                            <img src="https://seantheme.com/color-admin/admin/assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-6">

            <div class="row">

                <div class="col-sm-6">

                    <div class="card border-0 text-truncate mb-3 bg-gray-800 text-white">

                        <div class="card-body">

                            <div class="mb-3 text-gray-500">
                                <b class="mb-3">Total Deposit</b>
                                <span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Conversion Rate" data-bs-placement="top" data-bs-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
                            </div>


                            <div class="d-flex align-items-center mb-1">
                                <h2 class="text-white mb-0"><span data-animation="number" data-value="NGN<?php echo number_format(intval($deposited  *1),2); ?>">0.00</span></h2>
                                <div class="ms-auto">
                                    <div id="conversion-rate-sparkline"></div>
                                </div>
                            </div>


                            <div class="mb-4 text-gray-500 ">
                                <i class="fa fa-caret-down"></i> <span data-animation="number" data-value=""></span>Top 4 Deposit
                            </div>


                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-red fs-8px me-2"></i>
                                    Added to cart
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">0</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="3.79">0.00</span>%</div>
                                </div>
                            </div>


                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-warning fs-8px me-2"></i>
                                    Reached checkout
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">0</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="3.85">0.00</span>%</div>
                                </div>
                            </div>


                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-lime fs-8px me-2"></i>
                                    Sessions converted
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">0</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="2.19">0.00</span>%</div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-sm-6">

                    <div class="card border-0 text-truncate mb-3 bg-gray-800 text-white">

                        <div class="card-body">?

                            <div class="mb-3 text-gray-500">
                                <b class="mb-3">Total Users</b>
                                <span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Store Sessions" data-bs-placement="top" data-bs-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
                            </div>

                            <?php
                            $result = mysqli_query($con,"SELECT count(*) FROM  users");
                            $row = mysqli_fetch_row($result);
                            $numrows = $row[0];

                            ?>
                            <div class="d-flex align-items-center mb-1">
                                <h2 class="text-white mb-0"><span data-animation="number" data-value="<?php echo $numrows; ?>"></span></h2>
                                <div class="ms-auto">
                                    <div id="store-session-sparkline"></div>
                                </div>
                            </div>


                            <div class="mb-4 text-gray-500 ">
                                <i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">0.00</span>% compare to last week
                            </div>


                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-teal fs-8px me-2"></i>
                                    Mobile
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">0.00</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="53210">0</span></div>
                                </div>
                            </div>


                            <div class="d-flex mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-blue fs-8px me-2"></i>
                                    Desktop
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">0.00</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="11959">0</span></div>
                                </div>
                            </div>


                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle text-cyan fs-8px me-2"></i>
                                    Tablet
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    <div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">0.00</span>%</div>
                                    <div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="5545">0</span></div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>





    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-teal">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TOTAL USER WALLET</div>
                <div class="stats-number">NGN <?php echo number_format(intval($balance *1),2);?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 70.1%;"></div>
                </div>
                <div class="stats-desc">Better than last week (70.1%)</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-blue">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TOTAL LOCK WALLET</div>
                <div class="stats-number">NGN<?php echo number_format(intval($lock *1),2); ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 40.5%;"></div>
                </div>
                <div class="stats-desc">Better than last week (40.5%)</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-indigo">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">MCD BALANCE</div>
                <?php
                $query = "SELECT * FROM  paymentgateway where name='MCD Token'";

                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $token = $row["code"];
                }


                $query="SELECT * FROM `admin` where email ='" . $_SESSION['email'] . "'";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                {
                    $payer="$row[username]";
//                    $p=$row["phone"];
                }
                $resellerURL='https://app.mcd.5starcompany.com.ng/api/reseller/';

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/me',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => array('service' => 'balance'),
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: MCDKEY_903sfjfi0ad833mk8537dhc03kbs120r0h9a'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                //                                                    echo $response;
                $data=json_decode($response, true);
                $success=$data["success"];
                $tran=$data["data"]["wallet"];
                $pa=$data["data"]["commission"];
                if($success==1){
                ?>
                <div class="stats-number">NGN<?php echo number_format(intval($tran *1),2);?></div>
                <?php }else{ ?>
                <div class="stats-number">Network Error</div>
<?php } ?>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 76.3%;"></div>
                </div>
                <div class="stats-desc">Better than last week (76.3%)</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-dark">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">MCD COMMISSION</div>
                <div class="stats-number">NGN<?php echo number_format(intval($pa *1),2); ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 54.9%;"></div>
                </div>
                <div class="stats-desc">Better than last week (54.9%)</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-teal">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TOTAL CHARGES</div>
                <?php
                $result = mysqli_query($con,"SELECT sum(amount) FROM  charge where status=1");
                $row = mysqli_fetch_row($result);
                $total11 = $row[0];
                ?>
                <div class="stats-number">NGN<?php echo number_format(intval($total11 *1),2); ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 70.1%;"></div>
                </div>
                <div class="stats-desc">Better than last week (70.1%)</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-blue">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TOTAL WITHDRAW</div>
                <?php
                $result = mysqli_query($con,"SELECT sum(amount) FROM  withdraw ");
                $row = mysqli_fetch_row($result);
                $total12 = $row[0];
                ?>
                <div class="stats-number">NGN<?php echo number_format(intval($total12 *1),2); ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 40.5%;"></div>
                </div>
                <div class="stats-desc">Better than last week (40.5%)</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-indigo">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TOTAL DISCOUNT</div>
                <?php
                $result = mysqli_query($con,"SELECT sum(discountamount) FROM  bill_payment ");
                $row = mysqli_fetch_row($result);
                $total13 = $row[0];
                ?>
                <div class="stats-number">NGN<?php echo number_format(intval($total13 *1),2); ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 76.3%;"></div>
                </div>
                <div class="stats-desc">Better than last week (76.3%)</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-dark">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
            <div class="stats-content">
                <div class="stats-title">TOTAL TRANSFER</div>
                <?php
                $result = mysqli_query($con,"SELECT sum(amount) FROM  tran ");
                $row = mysqli_fetch_row($result);
                $total14 = $row[0];
                ?>
                <div class="stats-number">NGN<?php echo number_format(intval($total13 *1),2); ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 54.9%;"></div>
                </div>
                <div class="stats-desc">Better than last week (54.9%)</div>
            </div>
        </div>
    </div>


        <div class="card">
            <div class="card-body">
                <center>
                    <button class="btn btn-outline-primary">Withdraw Your Commission</button>
                </center>
            </div>
        </div>
        <br>
        <link href="assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
        <link href="assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />

        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <!--           <button type="button" class="btn btn-outline-success">-->
                        <!--<a href="tp.php"class="text-white">test credit</a></button>-->
                        <h4 class="card-title">All Deposit History</h4>
                        <div class="panel-body">
                            <table id="data-table-buttons" class="table table-striped table-bordered align-middle">
                                <thead>
                                <tr>
                                    <th class="text-nowrap"> Username </th>
                                    <th class="text-nowrap"> Transaction Id </th>
                                    <th class="text-nowrap"> Date</th>
                                    <th class="text-nowrap">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM deposit";
                                $result = mysqli_query($con,$query);
                                while($row = mysqli_fetch_array($result)) { ?>

                                    <tr class="odd gradeX" >
                                        <td><?php echo decryptdata($row["username"]) ; ?></td>
                                        <td><?php echo $row["payment_ref"] ; ?></td>
                                        <td><?php echo $row["date"] ; ?></td>
                                        <td>NGN.<?php echo $row ["amount"] ; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>



                                </tbody>
                            </table>
<!--                            <button class="btn btn-outline-success align-content-center"><a href="history.php"> See More Deposite</a></button>-->
                        </div>
                    </div>
                    <link href="assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
                    <link href="assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
                    <link href="assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />

<!--                    <div class="row ">-->
<!--                        <div class="col-12 grid-margin">-->
<!--                            <div class="card">-->
<!--                                <div class="card-body">-->
                                    <!--           <button type="button" class="btn btn-outline-success">-->
                                    <!--<a href="tp.php"class="text-white">test credit</a></button>-->
<!--                                    <h4 class="card-title">All Charges History</h4>-->
<!--                                    <div class="panel-body">-->
<!--                                        <table id="data-table-default" class="table table-striped table-bordered align-middle">-->
<!--                                            <thead>-->
<!--                                            <tr>-->
<!--                                                <th class="text-nowrap"> Username </th>-->
<!--                                                <th class="text-nowrap"> Transaction Id </th>-->
<!--                                                <th class="text-nowrap"> Date</th>-->
<!--                                                <th class="text-nowrap">Amount Charge</th>-->
<!--                                                <th class="text-nowrap">Description</th>-->
<!--                                            </tr>-->
<!--                                            </thead>-->
<!--                                            <tbody>-->
<!--                                            --><?php
//                                            $query = "SELECT * FROM charge ";
//                                            $result = mysqli_query($con,$query);
//                                            while($row = mysqli_fetch_array($result)) { ?>
<!---->
<!--                                                <tr>-->
<!--                                                    <td>--><?php //echo decryptdata($row["username"]) ; ?><!--</td>-->
<!--                                                    <td>--><?php //echo $row["payment_ref"] ; ?><!--</td>-->
<!--                                                    <td>--><?php //echo $row["date"] ; ?><!--</td>-->
<!--                                                    <td>NGN.--><?php //echo $row ["amount"] ; ?><!--</td>-->
<!--                                                    <td>--><?php //echo $row ["description"] ; ?><!--</td>-->
<!--                                                </tr>-->
<!--                                                --><?php
//                                            }
//                                            ?>
<!---->
<!---->
<!---->
<!--                                            </tbody>-->
<!--                                        </table>-->
<!--                                        <button class="btn btn-outline-success align-content-center"><a href="ch.php"> See More Deposite</a></button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>
    </div>
</div>




</div>





                <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

            </div>


            <script src="../assets/js/vendor.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="../assets/js/app.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="../assets/js/theme/default.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>


            <script src="assets/js/vendor.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/js/app.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/js/theme/default.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>


            <script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/js/demo/table-manage-default.demo.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>
            <script src="assets/js/demo/render.highlight.js" type="847c8da2504a1915642ffbeb-text/javascript"></script>


            <script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-buttons/js/buttons.flash.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/pdfmake/build/pdfmake.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/pdfmake/build/vfs_fonts.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/jszip/dist/jszip.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/js/demo/table-manage-buttons.demo.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
            <script src="assets/js/demo/render.highlight.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>

            <script type="f1e2722e35a43ad4c1e3a0c8-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
            <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="f1e2722e35a43ad4c1e3a0c8-|49" defer=""></script><script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a910724bd190718","version":"2021.10.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'></script>

                        <!-- html -->
                        <table id="data-table-buttons" class="table table-striped table-bordered align-middle">
                            <thead>
                            <tr>
                                <th width="1%"></th>
                                <th width="1%" data-orderable="false"></th>
                                ...
                            </tr>
                            </thead>
                            <tbody>
                            ...
                            </tbody>
                        </table>

                        <!-- script -->
                        <script>
                            $('#data-table-default').DataTable({
                                responsive: true,
                                dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
                                buttons: [
                                    { extend: 'copy', className: 'btn-sm' },
                                    { extend: 'csv', className: 'btn-sm' },
                                    { extend: 'excel', className: 'btn-sm' },
                                    { extend: 'pdf', className: 'btn-sm' },
                                    { extend: 'print', className: 'btn-sm' }
                                ],
                            });
                        </script>