
<?php
include_once ("include/database.php");
if (isset($_SESSION['email'])) {

    print "
                    <script>
                        window.location = 'dashboard.php';
                    </script>
                    ";

}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


    $query= "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
    $result = $con->query($query);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $result = mysqli_query($con, $query);


        $_SESSION['email'] = $email;
        $_SESSION['login_user']=$email;
        print "
                    <script>
                        window.location = 'dashboard.php';
                    </script>
                    ";
//        }
    } else {
        $errormsg = "<div class='alert alert-danger'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <i class='fa fa-ban-circle'></i><strong>Incorrect login details </br></strong></div>"; //printing error if found in validation
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/html/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 21:54:30 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Developer Admin | Login v3</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/default/app.min.css" rel="stylesheet" />

</head>
<body class='pace-top'>

<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>

<div id="app" class="app">

    <div class="login login-with-news-feed">

        <div class="news-feed">
            <div class="news-image" style="background-image: url(assets/img/login-bg/login-bg-11.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>Developer</b> Admin App</h4>
                <p>
                    Get 5Star Developer Admin Dashboard From 5Starcompany.com.ng
                </p>
            </div>
        </div>


        <div class="login-container">

            <div class="login-header mb-30px">
                <div class="brand">
                    <div class="d-flex align-items-center">
                        <span class="logo"></span>
                        <b>Reno</b> Admin
                    </div>
                    <small>Developer Admin </small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in-alt"></i>
                </div>
            </div>


            <div class="login-content">
                <?php
                if(!empty($errormsg))
                {
                    print $errormsg;

                }
                ?>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post" class="fs-13px">

                    <div class="form-floating mb-15px">
                        <input type="email" name="email" class="form-control h-45px fs-13px" placeholder="Email Address" id="emailAddress" />
                        <label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Email Address</label>
                    </div>
                    <div class="form-floating mb-15px">
                        <input type="password" name="password" class="form-control h-45px fs-13px seen" placeholder="Password" id="password" />
                        <label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
                    </div>
                    <div class="form-check mb-30px">
                        <input class="form-check-input" type="checkbox" value="1" id="rememberMe" />
                        <label class="form-check-label" for="rememberMe">
                            Remember Me
                        </label>
                    </div>
                    <div class="mb-15px">
                        <button type="submit" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">Sign me in</button>
                    </div>
                    <div class="mb-40px pb-40px text-inverse">
<!--                        Not a member yet? Click <a href="register_v3.html" class="text-primary">here</a> to register.-->
                    </div>
                    <hr class="bg-gray-600 opacity-2" />
                    <div class="text-gray-600 text-center text-gray-500-darker mb-0">
                        &copy; Color Admin All Right Reserved 2021
                    </div>
                </form>
            </div>

        </div>

    </div>



    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

</div>


<script src="assets/js/vendor.min.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/js/app.min.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/js/theme/default.min.js" type="7b1f880b34b3053340dad235-text/javascript"></script>


<script src="assets/plugins/d3/d3.min.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/plugins/nvd3/build/nv.d3.min.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/plugins/gritter/js/jquery.gritter.js" type="7b1f880b34b3053340dad235-text/javascript"></script>
<script src="assets/js/demo/dashboard-v2.js" type="7b1f880b34b3053340dad235-text/javascript"></script>

<script type="7b1f880b34b3053340dad235-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
<script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7b1f880b34b3053340dad235-|49" defer=""></script><script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a9106a83b080718","version":"2021.10.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'></script>
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 21:46:40 GMT -->
</html>