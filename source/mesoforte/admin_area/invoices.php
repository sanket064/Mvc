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




    <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <h1 class="align-middle">Invoice Listing</h1>
        <h4 class="position">Manage All Your Invoices Here</h4>
    </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <?php
        if (isset($_GET["success"]))
        {
          ?>
          <h4 class="message">We <?=ucfirst($_GET["verb"])?> Your Invoice</h4>
          <?php
        }?> 
      </div>
    </div>
    </div>
    <?php
$con = ConnectToDB::con();
$results_per_page = 10;

$sql = "SELECT * FROM invoices";
$result = mysqli_query($con,$sql);
$number_of_results = mysqli_num_rows($result);
// while($row = mysqli_fetch_array($result)){
//   echo $row['id'] . ' ' . $row['name']. '<br>'  . $row['email']. '<br>'. $row['phone']. '<br>'. $row['message']. '<br>';

// }
$number_of_pages = ceil($number_of_results/$results_per_page);
if(!isset($_GET['page'])){
  $page = 1;
}else {
  $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;

$sql = "SELECT * FROM invoices ORDER BY id LIMIT " . $this_page_first_result . ',' . $results_per_page;
$result = mysqli_query($con, $sql);
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `invoices` WHERE CONCAT(`id`, `nInvoiceNumber`)LIKE'%".$valueToSearch."%'";
    $result = filterTable($sql);
    
}
 else {
    $sql = "SELECT * FROM invoices ORDER BY id;";
    $search_result = filterTable($sql);
}

// function to connect and execute the query
function filterTable($query)
{
    $con = ConnectToDB::con();
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>
         
        <form action="invoices.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Enter Invoice Number" class="ml-4"><br><br>
            <input type="submit" name="search" value="Filter" class="btn btn-primary ml-3"><br><br>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Invoice Number</th>
                <th scope="col">View</th>
                <th scope="col">Delete</th>
                </tr>
                </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row['nInvoiceNumber'];?></td>
                    <td><a href='../index.php?controller=cart&action=showInvoice&nInvoiceNumber=".$invoice_number."'>View Invoice</a></td>
                    <td><a href="deleteinvoice.php?id=<?=$row["id"]?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endwhile;?>
                  </table>
        </form>

<?php



for($page=1;$page<=$number_of_pages;$page++)
{
  echo '<div class="align btn mb-5"><a href="invoices.php?page=' . $page . '">' . $page . '</a> </div>';
}

?>
    </div>

    <?php
include('partials/footer.php')
 ?>
