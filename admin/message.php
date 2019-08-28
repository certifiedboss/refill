<?php

include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
	<li><a href="message.php"><i class="icon icon-envelope"></i> <span>Check Messages</span></a></li>
  </ul>
</div>
<div id="content">
 <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
         <li class="bg_lb span3"> <a href="index.php"> <i class="icon-dashboard"></i> <span class="label label-important"></span> My Dashboard </a> </li>
        <li class="bg_lo span3"> <a href="message.php"> <i class="icon-envelope"></i>Check Messages</a></li>
      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
  
<!--End-Chart-box--> 
    <hr/>
    
  </div>


  <div id="content-header">
    
    <h1>Message</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Inbox</h5>
          </div>
          <div class="widget-content">
            
            <div class="row-fluid">
              <div class="span12">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
					<th class="head0">
					ID</th>
                      <th class="head0">Name</th>
					  <th class="head0 right">Email</th>
                      <th class="head1">New message</th>
					  <th class="head0 right">Delete</th>
                    </tr>
                  </thead>
				  	<?php


					$qry = "SELECT * FROM messagetbl order by id desc ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
				$id=$row['id'];
				$pnam=$row['name'];
			  $pmai=$row['email'];
			  $pmes=$row['message'];
			
				
			echo"
			
                  <tbody>
                    <tr>
					 <td>$id</td>
                      <td>$pnam</td>
					  <td class='right'>$pmai</td>
                      <td>$pmes</td>
					  <td class='right'><a href='message.php?del=$id' style='background-color:darkblue;  color:white; margin-left:30%; padding:5px; font-size:15px; border:1px solid black; border-radius:5px; letter-spacing:4px;' >Delete</a></td>
                    </tr>
               
                  </tbody>
				  		";
			}
			?>
			
			<?php						
							
							if (isset($_GET['del']))
{
	$del=$_GET['del'];
	
	$del_user="delete from messagetbl where id='$del'";
	$run_del=mysqli_query($conn,$del_user);
	
	if($run_del)
	{
		echo "<script>alert('Deleted')</script>";

	}
	
	{
		  echo "<script>window.open('message.php?view','self')</script>";	
	}
}


?>
		
			
                </table>
                
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
