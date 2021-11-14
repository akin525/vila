<?php include "sidebar.php";

if(isset($_GET["username"])){
    $todelete= mysqli_real_escape_string($con,$_GET["username"]);

    $result=mysqli_query($con,"DELETE FROM users WHERE username='$todelete'");
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


    <div class="card">
        <div class="card-body">
            <h6 class="text-success">Data Between Selected Dates</h6>

            <div>
                <div class="panel-body">
                    <table id="data-table-buttons" class="table table-striped table-bordered align-middle">
                        <thead>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Wallet Balance</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th></th>
                        </thead>
                        <tbody>
                        <?php
                        $query="SELECT * FROM users LEFT JOIN wallet on users.username = wallet.username";
                        $result = mysqli_query($con,$query);

                        while($row = mysqli_fetch_array($result))
                        {
//    return $row;
                            $username=$row["username"];
//    $picture=$row["profilepix"];
//    $status=$row["active"];
//    if($status==1)
//        $sta="Active";
//    if($status==1)
//        $color="success";
//    if ($status==2)
//        $sta="Blocked";
//    if($status==2)
//        $color="danger";
//    if ($status==0)
//        $sta="Inactive";
//    if($status==0)
//        $color="warning";
                            ?>
                            <tr>
                                <td><?php print decryptdata("$row[name]"); ?></td>
                                <td><?php print decryptdata($row["username"]); ?></td>
                                <td><?php print $row["balance"]; ?></td>
                                <td><?php print decryptdata($row["phone"]); ?></td>
                                <td><?php print decryptdata($row["email"]); ?></td>
                                <td><?php print $row["date"]; ?></td>
                                <!--        <td><div class="label cl---><?php // print $color ?><!-- bg---><?php //print $color; ?><!---light">--><?php //print $sta; ?><!--</div></td>-->
                                <td>
                                    <a href="edituser.php?username=<?php print $row["username"]; ?>" class="settings" title="Settings" data-toggle="tooltip"><i class="fa fa-edit"></i></a>                              <a href="allu.php?username=<?php print $row["username"]; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                    <!--    --><?php //echo $from; ?>
                    <!--    --><?php //echo $to; ?>
                </div>
            </div>
        </div>
    </div>
</div>




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