<?php
include('partials/checkLogged.php');
include('partials/header.php');
include("123_connect/config.php");
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


    <?php
      $verb = "Adding";
      if(isset($_GET["ticketID"])){
        $verb = "Editing";
        $arrTicket = getTicket($_GET["ticketID"]);
        if (!$arrTicket)
        {
          echo "Could Not Find Any Ticket";
          die;
        }
      } else {

        $_GET["ticketID"] = (isset($_GET['ticketID']))?$_GET['ticketID']:"";
        $arrTicket['strName']= "";
        $arrTicket['strDate']= "";
        $arrTicket['strTime']= "";
        $arrTicket['strDescription']= "";
        $arrTicket['strLocation']= "";
        $arrTicket['nQuantity']= "";
        $arrTicket['nPrice']= "";
        $arrTicket['strImage']= "";
        $arrTicket['nCategoryID']= "";
      }

      ?>



      <div class=" col-xl-10">
        <h1 id="addHead"><?=$verb?> An Ticket</h1> <!-- success message -->
        <form id="saveForm" class="card col-sm-12 col-md-12 col-lg-12" method="post" action="saveticket.php" enctype="multipart/form-data">   
          <div class="small_inp col-sm-4 col-md-4 col-lg-4">
            <input type="hidden" name="ticketID" value="<?=$_GET["ticketID"]?>">
            <input type="text" name="strName" value="<?=$arrTicket['strName']?>" placeholder="Enter Ticket Name"><br/>
            <input type="text" name="strDate" value="<?=$arrTicket['strDate']?>" placeholder="2119-06-00"><br/>
            <input type="text" name="strTime" value="<?=$arrTicket['strTime']?>" placeholder="00:00 Pm/Am"><br/>
            <input type="text" name="strLocation" value="<?=$arrTicket['strLocation']?>" placeholder="Enter The Location"><br/>
            <input type="text" name="nQuantity" value="<?=$arrTicket['nQuantity']?>" placeholder="Enter The Quantity"><br/>
            <input type="text" name="nPrice" value="<?=$arrTicket['nPrice']?>" placeholder="Enter The Price"><br/>
            <input type="text" name="nCategoryID" value="<?=$arrTicket['nCategoryID']?>" placeholder="Enter Event Category"><br/>
          </div>
          <div class="big_inp col-sm-4 col-md-4 col-lg-4">
            <textarea name="strDescription" placeholder="Enter Ticket Description" cols="20" rows="5"><?=$arrTicket['strDescription']?></textarea><br/>
          </div>
          <div class="act_inp col-sm-4 col-md-4 col-lg-4">

            <h3>Ticket Image</h3>
        <img src="../assets/<?=$arrTicket['strImage']?>" width=500><br/>
        <input type="hidden" name="old_Image" value="<?=$arrTicket['strImage']?>">
        <input type="file" name="strImage" class="mt-5"><br/>
            <input  class="btn btn-primary mt-5 mb-5" type="submit" value="save ticket">
          </div>
        </form>
      </div>

</div>
    <?php
include('partials/footer.php')
 ?>
