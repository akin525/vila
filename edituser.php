<?php  include "sidebar.php";
$toupdate =  mysqli_real_escape_string($con,$_GET['username']);

$query="SELECT * FROM  users WHERE username='$toupdate'";
$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
    $username=$row["username"];
    $name=$row["name"];
    $date=$row["date"];
    $email=$row["email"];
    $phone=$row["phone"];
    $address=$row["address"];
//    $cphoto=$row["photo"];
}
?>
<link href="assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />

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
        <li class="breadcrumb-item"><a href="javascript:;">Transaction Daily Report</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">ALL USERS</a></li>
        <!--        <li class="breadcrumb-item active">Dashboard v3</li>-->
    </ol>


    <h1 class="page-header mb-3">All Usera</h1>


    <div class="d-sm-flex align-items-center mb-3">
        <a href="#" class="btn btn-inverse me-2 text-truncate" id="daterange-filter">
            <i class="fa fa-calendar fa-fw text-white-transparent-5 ms-n1"></i>
            <!--            <span>1 Jun 2021 - 7 Jun 2021</span>-->
            <b class="caret ms-1 opacity-5"></b>
        </a>
        <!--        <div class="text-muted fw-bold mt-2 mt-sm-0">compared to <span id="daterange-prev-date">24 Mar-30 Apr 2021</span></div>-->
    </div>

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
<!--                                    <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">-->
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Fund Account With Transfer</h4>
                                    <h6 class="mb-1 mb-sm-0">Bank Name: Wema | Account No: 7481522214 | Account Name: Efe Mobile Money </h6>
                                    <!--                            <p class="mb-0 font-weight-normal d-none d-sm-block">Account No: 7481522214</p>-->
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
<!--                          <a href="fund.php" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Make Deposit</a>-->
                        </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-white font-weight-bold">Your Referral Link</h6>
                        <!-- The text field -->
                        <input class="text-success form-control"  id="myInput" value=https://renomobilemoney.com/go/register.php?refer=<?php echo $username; ?> readonly/>
                        <!-- The button used to copy the text -->
                        <button onclick="myFunction()" class="btn badge-success">Copy Referral Link</button>
                    </div>
                </div>
                <script>
                    function myFunction() {
                        /* Get the text field */
                        var copyText = document.getElementById("myInput");

                        /* Select the text field */
                        copyText.select();
                        copyText.setSelectionRange(0, 99999); /* For mobile devices */

                        /* Copy the text inside the text field */
                        navigator.clipboard.writeText(copyText.value);

                        /* Alert the copied text */
                        alert("Copied the text: " + copyText.value);
                    }
                </script>
                <br>
                <h5 class="form-title">Basic Information</h5>
                <div class="alert alert-warning" id="PayNote" style="font-weight: bold;font-size: 13px;">

                    Dear <?php echo decryptdata($name); ?>! Your Account privacy is important to us, as this might be need by our technical team for assistant when needed. Keep Safe.

                </div>

                <!--        <div class="col-auto profile-image">-->
                <!--            <a href="#">-->
                <!--                --><?php //if($cphoto==1){ ?>
                <!--                    <img class=" img-thumbnail rounded-circle" alt="User Image" src="assets/images/profiles/avatar.png">-->
                <!--                --><?php //}else{ ?>
                <!--                    <img class="img-thumbnail rounded-circle" alt="User Image" src="--><?//= 'assets/php/'.$cphoto; ?><!--">-->
                <!--                --><?php //} ?>
                <!--            </a>-->
                <!--        </div>-->
                <!--        <button type="submit" name="submit"  class="btn btn-primary" id="profileUpdateBtn"><a class="text-white" href="editp.php">Upload Profile Photo</a><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;" id="edit-profile-spinner"></span></button>-->


                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

                    $status="OK";
                    // Collect the data from post method of form submission //
                    $name=encryptdata(mysqli_real_escape_string($con,$_POST['name']));
                    //                            $contr=mysqli_real_escape_string($con,$_POST['country']);
                    $phone=encryptdata(mysqli_real_escape_string($con,$_POST['phone']));
                    $email=encryptdata(mysqli_real_escape_string($con,$_POST['email']));
                    $address=encryptdata(mysqli_real_escape_string($con,$_POST['address']));
                    $userp=mysqli_real_escape_string($con,$_POST['username']);
                    //                            $gender=mysqli_real_escape_string($con,$_POST['gender']);
                    //                            $address=mysqli_real_escape_string($con,$_POST['address']);
                    //collection ends

                    $query3=mysqli_query($con,"update users set `name`='$name', phone='$phone',email='$email', address='$address' where username = '$userp'");

                    echo $message = "Profile Update Successfully";
                    print "
				<script language='javascript'>
				 let message = 'Profile Update Successfully: ';
                                    alert(message);
window.location = 'allu.php';
</script>
";
                }
                ?>
                <form action="edituser.php" method="POST">

                    <?php if(isset($error) != NULL):?>
                        <p><?php echo $error; ?></p>
                    <?php endif; ?>
                    <!--            <div class="row">-->
                    <!--                <div class="card">-->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-xl-6">
                                <label class="mr-sm-2">Name</label>
                                <input class="form-control" type="text" value="<?php echo decryptdata($name); ?>" name="name" placeholder="" required>
                            </div>
                            <div class="form-group col-xl-6">
                                <label class="mr-sm-2">Email</label>
                                <input class="form-control" type="email" value="<?php echo decryptdata($email); ?>" name="email" placeholder="" required>
                            </div>
                            <div class="form-group col-xl-6">
                                <label class="mr-sm-2">Mobile Number</label>
                                <input class="form-control no_only" type="text" value="<?php echo decryptdata($phone); ?>" name="phone" placeholder="" required>
                            </div>
                            <div class="form-group col-xl-6">
                                <label class="mr-sm-2">Address</label>
                                <input class="form-control no_only" type="text" value="<?php echo decryptdata($address); ?>" name="add" placeholder="" required>
                            </div>
                            <div class="form-group col-xl-6">
                                <label class="mr-sm-2">Username</label>
                                <input type="text" class="form-control datepicker" type="text" name="dob" value="<?php echo decryptdata($username); ?>"  readonly>
                            </div>
                            <!--    <div class="col-xl-12">-->
                            <!--        <h5 class="form-title">Address</h5>-->
                            <!--    </div>-->
                            <!--    <div class="form-group col-xl-12">-->
                            <!--        <label class="mr-sm-2">Address</label>-->
                            <!--        <input type="text" class="form-control" name="address" value="">-->
                            <!--    </div>-->
                            <div class="form-group col-xl-12">
                                <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Update</button>
                            </div>
                </form>
                <button type="button" class="btn btn-outline-primary btn-rounded"><a href="pass.php"> Change Password</a></button>
                <!--                <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="button"><a href="password.php"> Change Password</a></button>-->


            </div>
        </div>
    </div>
</div