
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Light Way Admin</title>

    <link rel="stylesheet" type="text/css" href="/admin_assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/admin_assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/admin_assets/css/local.css" />

    <script type="text/javascript" src="/admin_assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/admin_assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Admin Panel</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active"><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
                <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                <li><a href="bootstrap-grid.html"><i class="fa fa-table"></i > Bootstrap Grid</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-user">

                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$_SESSION['user']['role']?> <?=$_SESSION['user']['name']?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <?php require_once $fullPath ?>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!--
    This section initializes the chart widgets and a grid component,
    which visualize records and allow sorting and paging.
    For more information visit:
    http://www.shieldui.com/documentation/javascript.chart/getting.started
    http://www.shieldui.com/documentation/grid/javascript/getting.started
    http://www.shieldui.com/documentation/datasource/javascript/getting.started
-->

</body>
</html>

