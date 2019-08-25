<?php
include('partials/checkLogged.php');
include('partials/header.php')
 ?>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="dashboard.php" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Your Dashboard"><i class="fas fa-home"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <?=$_SESSION['name']?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="ticket.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i>Tickets</a>
                </li>
                <li>
                    <a href="invoices.php" data-toggle="collapse" data-target="#submenu-2"><i class="glyphicon glyphicon-indent-left"></i>  Invoices </a>
                </li>
                <li>
                    <a href="http://sankettech.com/mesoforte/source/mesoforte/index.php" data-toggle="collapse" data-target="#submenu-2"><i class="glyphicon glyphicon-play"></i>  Live Site </a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome back, <?=$_SESSION['name']?></h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->

    <?php
include('partials/footer.php')
 ?>
