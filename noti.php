<?php include "sidebar.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect the data from post method of form submission //
    $name = mysqli_real_escape_string($con, $_POST['name']);
    mysqli_query($con, "UPDATE `mg` SET `message`='$name'");

    print "
				<script>
				 let message = 'Update Successfully: ';
                                    alert(message);
window.location = 'noti.php';
</script>
";

}
?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/default/app.min.css" rel="stylesheet" />


<link href="assets/plugins/summernote/dist/summernote-lite.css" rel="stylesheet" />

<div id="content" class="app-content">

    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">NOtification</a></li>
        <li class="breadcrumb-item active">Note</li>
    </ol>


    <h1 class="page-header">Notification for all User <small></small></h1>


    <div class="row">

        <div class="col-xl-2">
            <div><b class="text-inverse">Features</b></div>
            <p>
                - Support bootstrap 4.x.x<br />
                - Lightweight (js+css: 80Kb)<br />
                - Smart User Interaction<br />
                - Safari, Chrome, Firefox, Opera<br />
                - Internet Explorer 9+
            </p>
            <p>
                <a href="dashboard.php" target="_blank" class="btn btn-sm btn-inverse">Back to dashboard</a>
            </p>
        </div>


        <div class="col-xl-10">

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Notification</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <?php
                $query="SELECT * FROM  mg";
                $result = mysqli_query($con,$query);

                while($row = mysqli_fetch_array($result)) {
                    $mo= $row["message"];
                }
                ?>
                <marquee class="font-weight-bold mb-0">
                    <h4>
                        <b><?php echo $mo; ?></b></h4>
                </marquee>

                <div class="panel-body panel-body p-0">
                    <form action="#" method="POST">
                        <?php
                        $query = "SELECT * FROM  `mg` ";
                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($result)) {
                            $mes = "$row[message]";

                        }
                        ?>
                        <textarea class="summernote"  name="name" ></textarea>
                        <button type="submit" class="btn btn-outline-success rounded">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




                <script src="assets/js/vendor.min.js" type="eab21253ada7358f36f64ccb-text/javascript"></script>
                <script src="assets/js/app.min.js" type="eab21253ada7358f36f64ccb-text/javascript"></script>
                <script src="assets/js/theme/default.min.js" type="eab21253ada7358f36f64ccb-text/javascript"></script>


                <script src="assets/plugins/summernote/dist/summernote-lite.min.js" type="eab21253ada7358f36f64ccb-text/javascript"></script>
                <script src="assets/js/demo/form-summernote.demo.js" type="eab21253ada7358f36f64ccb-text/javascript"></script>
                <script src="assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="eab21253ada7358f36f64ccb-text/javascript"></script>
                <script src="assets/js/demo/render.highlight.js" type="eab21253ada7358f36f64ccb-text/javascript"></script>
<script src="assets/plugins/jszip/dist/jszip.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
<script src="assets/js/demo/table-manage-buttons.demo.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
<script src="assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>
<script src="assets/js/demo/render.highlight.js" type="f1e2722e35a43ad4c1e3a0c8-text/javascript"></script>

                <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="eab21253ada7358f36f64ccb-|49" defer=""></script><script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a9107182ebf0718","version":"2021.10.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'></script>
                </div>

                <!-- Mirrored from seantheme.com/color-admin/admin/html/form_summernote.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 21:48:42 GMT -->
                </html>
</bosy>