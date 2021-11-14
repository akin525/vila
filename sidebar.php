<?php include "include/database.php";

if (!isset($_SESSION['email'])) {
    print "
<script>
    window.location = 'index.php';
</script>
";
}


$result = mysqli_query($con,"SELECT sum(balance) FROM  wallet ");
$row = mysqli_fetch_row($result);
$balance= $row[0];

$query="SELECT * FROM  userbvn";
//$result = mysqli_query($con,$query);
$bvn=0;
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
    $bvn=$row["bvn"];
}
$depositor=0;
$iwallet=0;
$query="SELECT * FROM deposit";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
    $depositor=$row["amount"];
    $iwallet=$row["iwallet"];

}
?>

<?php
$result = mysqli_query($con,"SELECT sum(amount) FROM  deposit");
$row = mysqli_fetch_row($result);
$deposited = $row[0];

?>
<?php
$query="SELECT  sum(amount) FROM referal";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
    $refer=$row[0];


}

$lock=0;
$query="SELECT  sum(balance) FROM safe_lock";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) {
    $lock = $row[0];
//    $da = $row["date"];
}

$query="SELECT * FROM `admin` WHERE email='" . $_SESSION['email'] . "'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) {
    $date = $row["date"];
    $username=$row["username"];
    $name=$row["name"];
    $email=$row["email"];
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/html/index_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 21:44:49 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Developer Admin | Dashboard V3</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/default/app.min.css" rel="stylesheet" />


    <link href="assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

</head>
<body>

<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>


<div id="app" class="app app-header-fixed app-sidebar-fixed">

    <div id="header" class="app-header">

        <div class="navbar-header">
            <a href="dashboard.php" class="navbar-brand"><span class="navbar-logo"></span> <b>Developer</b> Admin</a>
            <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>


        <div class="navbar-nav">
            <div class="navbar-item navbar-form">
                <form action="#" method="POST" name="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="navbar-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
                    <i class="fa fa-bell"></i>
<!--                    <span class="badge">5</span>-->
                </a>
            </div>
            <div class="navbar-item navbar-user dropdown">
                <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                    <img src="assets/img/user/user-13.jpg" alt="" />
                    <span>
<span class="d-none d-md-inline"><?php echo $name; ?></span>
<b class="caret"></b>
</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-1">
                    <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                    <a href="javascript:;" class="dropdown-item"><span class="badge bg-danger float-end rounded-pill">2</span> Inbox</a>
                    <a href="javascript:;" class="dropdown-item">Calendar</a>
                    <a href="javascript:;" class="dropdown-item">Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="logout.php" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>

    </div>


    <div id="sidebar" class="app-sidebar">

        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

            <div class="menu">
                <div class="menu-profile">
                    <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                        <div class="menu-profile-cover with-shadow"></div>
                        <div class="menu-profile-image">
                            <img src="assets/img/user/user-13.jpg" alt="" />
                        </div>
                        <div class="menu-profile-info">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                   <?php echo $username; ?>
                                </div>
                                <div class="menu-caret ms-auto"></div>
                            </div>
                            <small>Front end developer</small>
                        </div>
                    </a>
                </div>
                <div id="appSidebarProfileMenu" class="collapse">
                    <div class="menu-item pt-5px">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-cog"></i></div>
                            <div class="menu-text">Settings</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                            <div class="menu-text"> Send Feedback</div>
                        </a>
                    </div>
                    <div class="menu-item pb-5px">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                            <div class="menu-text"> Helps</div>
                        </a>
                    </div>
                    <div class="menu-divider m-0"></div>
                </div>
                <div class="menu-header">Navigation</div>
                <div class="menu-item">
                    <a href="dashboard.php" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-th-large"></i>
                        </div>
                        <div class="menu-text">Dashboard</div>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="noti.php" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-hdd"></i>
                        </div>
                        <div class="menu-text">Notification</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="allu.php" class="menu-link">
                        <div class="menu-icon">
                            <i class="fab fa-simplybuilt"></i>
                        </div>
                        <div class="menu-text">All Users<span class="menu-label">NEW</span></div>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-wallet"></i>
                        </div>
                        <div class="menu-text">Transaction </div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="tran1.php" class="menu-link">
                                <div class="menu-text">Daily Deposit <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="tran2.php" class="menu-link">
                                <div class="menu-text">Daily Charges</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="tran3.php" class="menu-link">
                                <div class="menu-text">Daily Product</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item ">
                    <a href="bootstrap_5.html" class="menu-link">
                        <div class="menu-icon-img">
                            <img src="assets/img/logo/logo-bs5.png" alt="" />
                        </div>
                        <div class="menu-text">Bootstrap 5 <span class="menu-label">NEW</span></div>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-list-ol"></i>
                        </div>
                        <div class="menu-text">Form Stuff <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="form_elements.html" class="menu-link">
                                <div class="menu-text">Form Elements <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_plugins.html" class="menu-link">
                                <div class="menu-text">Form Plugins <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_slider_switcher.html" class="menu-link">
                                <div class="menu-text">Form Slider + Switcher</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_validation.html" class="menu-link">
                                <div class="menu-text">Form Validation</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_wizards.html" class="menu-link">
                                <div class="menu-text">Wizards <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_wysiwyg.html" class="menu-link">
                                <div class="menu-text">WYSIWYG</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_editable.html" class="menu-link">
                                <div class="menu-text">X-Editable</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_multiple_upload.html" class="menu-link">
                                <div class="menu-text">Multiple File Upload</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_summernote.html" class="menu-link">
                                <div class="menu-text">Summernote</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form_dropzone.html" class="menu-link">
                                <div class="menu-text">Dropzone</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        <div class="menu-text">Tables</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="table_basic.html" class="menu-link">
                                <div class="menu-text">Basic Tables</div>
                            </a>
                        </div>
                        <div class="menu-item has-sub">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-text">Managed Tables</div>
                                <div class="menu-caret"></div>
                            </a>
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="table_manage.html" class="menu-link">
                                        <div class="menu-text">Default</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_buttons.html" class="menu-link">
                                        <div class="menu-text">Buttons</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_colreorder.html" class="menu-link">
                                        <div class="menu-text">ColReorder</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_fixed_columns.html" class="menu-link">
                                        <div class="menu-text">Fixed Column</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_fixed_header.html" class="menu-link">
                                        <div class="menu-text">Fixed Header</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_keytable.html" class="menu-link">
                                        <div class="menu-text">KeyTable</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_responsive.html" class="menu-link">
                                        <div class="menu-text">Responsive</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_rowreorder.html" class="menu-link">
                                        <div class="menu-text">RowReorder</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_scroller.html" class="menu-link">
                                        <div class="menu-text">Scroller</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_select.html" class="menu-link">
                                        <div class="menu-text">Select</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="table_manage_combine.html" class="menu-link">
                                        <div class="menu-text">Extension Combination</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-cash-register"></i>
                        </div>
                        <div class="menu-text">POS System <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="pos_customer_order.html" target="_blank" class="menu-link">
                                <div class="menu-text">Customer Order</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_kitchen_order.html" target="_blank" class="menu-link">
                                <div class="menu-text">Kitchen Order</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_counter_checkout.html" target="_blank" class="menu-link">
                                <div class="menu-text">Counter Checkout</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_table_booking.html" target="_blank" class="menu-link">
                                <div class="menu-text">Table Booking</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_menu_stock.html" target="_blank" class="menu-link">
                                <div class="menu-text">Menu Stock</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="menu-text">Front End <span class="menu-label">NEW</span></div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="https://seantheme.com/color-admin/frontend/one-page-parallax/index.html" target="_blank" class="menu-link">
                                <div class="menu-text">One Page Parallax</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="https://seantheme.com/color-admin/frontend/blog/index.html" target="_blank" class="menu-link">
                                <div class="menu-text">Blog</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="https://seantheme.com/color-admin/frontend/forum/index.html" target="_blank" class="menu-link">
                                <div class="menu-text">Forum</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="https://seantheme.com/color-admin/frontend/e-commerce/index.html" target="_blank" class="menu-link">
                                <div class="menu-text">E-Commerce</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="https://seantheme.com/color-admin/frontend/corporate/index.html" target="_blank" class="menu-link">
                                <div class="menu-text">Corporate <i class="fa fa-paper-plane text-theme"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
























                <script src="assets/js/vendor.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/js/app.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/js/theme/default.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>


                <script src="assets/plugins/d3/d3.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/plugins/nvd3/build/nv.d3.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/plugins/apexcharts/dist/apexcharts.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/plugins/moment/min/moment.min.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>
                <script src="assets/js/demo/dashboard-v3.js" type="04c42b9bd99bcb9de71cd368-text/javascript"></script>

                <script type="04c42b9bd99bcb9de71cd368-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
                <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="04c42b9bd99bcb9de71cd368-|49" defer=""></script><script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a91068488c00718","version":"2021.10.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'></script>
</body>