 <?php

    $hostname = "localhost";
    $username = "manojdaniels";
    $password = "daniels";
    $role = "";
    $dbname = "easysim";
    $usertable="users";
    $columnname="username";

mysql_connect($hostname,$username,$password) OR die ("Unable to connect database");
mysql_select_db($dbname);
    $query = "select * from $usertable";
    $result = mysql_query($query);
  
?> 

<!DOCTYPE html>
<html>

<head>
    <title>Easy Sim : Author Dashboard</title>
	<meta charset="UTF-8">
	<!----------------------------Bootstrap code---------------------------->
	<script type="text/javascript" src="content/js/bootstrap.js"></script>
	<script type="text/javascript" src="content/js/bootstrap.min.js"></script>	
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.css" /> 
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.min.css" />	
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-responsive.css">
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-editable.css">
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-toggle.css">
	<link type="text/css" rel="stylesheet" href="content/css/style.css">


	
  <!-- SCORM related files -->
    <script type="text/javascript" src="content/js/scorm/APIWrapper.js"></script>
    <script type="text/javascript" src="content/js/scorm/SCORMToXAPIFunctions.js"></script>

  <!-- SCORM related files -->

	<!--------------------------add delete text field code---------------------->  


 <script>
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>   

<style>

body{
font-size:14px;
font-family:Segoe UI;
}
a{
color:black;
}
a:hover{
color:black;
}




/* 
Generic Styling, for Desktops/Laptops 
*/
.table-vertical { 
  width: 100%; 
  height:auto;
  border-collapse: collapse; 
 
}
/* Zebra striping */
.table-vertical>tbody>tr:nth-of-type(odd) { 
  background: #fff;
  
}
.table-vertical>tr>th { 
  background: #fff; 
  color: #73CDD6; 
  font-weight: bold; 
  border-top: 1px solid #ddd; 
  
}
.table-vertical>tbody>tr>td, .table-vertical>thead>tr>th { 
  padding: 6px; 
  max-width:0;
  padding-left:30px;
    border-top: 1px solid #ddd; 
}


@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {
.container{
	width:90%;
}
	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	.table-vertical thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	.table-vertical>thead>tr,  .table-vertical>tbody>tr{ border: 1px solid #ccc;  }
	
	 
	.table-vertical>thead>tr>td,  .table-vertical>tbody>tr>td{ 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
		  max-width:100%;
		  
		
	}
	
		.table-vertical>tbody>tr>td{ 
		/* Behave  like a "row" */
		  padding-left:150px;

		
	}
	
	.table-vertical>tbody>tr>td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 15px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		color: #73CDD6; 
		font-weight: bold; 
	}
	
	/*
	Label the data
	*/
	.table-vertical>tbody>tr>td:before { content: attr(data-th); }
			padding:70px;
}


</style>

<!-------------------------------show hide(open)------------------------------>			
<script src="content/js/show_hide.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#myDIV").hide();
    });
    $("#show").click(function(){
        $("#myDIV").show();
    });
});
</script>
<!-------------------------------show hide(close)------------------------------>	
	
</head>	
   



<body style="background-color: #f1f3f4;">  
<!------------------------------menu(open)------------------------------->	
<div id="header">
	<div class="container">	
			<ul id="gn-menu" class="gn-menu-main" style="border-bottom: 0px ;">
				<li class="gn-trigger" style="border-bottom: 2px solid #f68972" >
					<a class="gn-icon gn-icon-menu" ><span></span></a>
					<nav class="gn-menu-wrapper" class="player-slideMenu" id="player-slideMenu">
							<ul class="gn-menu">							
							<div id="overview" class="a1"><a href="#" style=" padding-left:15px;">Profile <img src="img/profile.png" style="margin-left:25%;"></a></div>
							<div id="Key"  class="b1"> <a href="#" style=" padding-left:15px">Setting <img src="img/setting.png" style="margin-left:18%;"></a></div>
							<div id="Skill" class="c1"><a href="login.php" style=" padding-left:15px">Logout <img src="img/logout.png" style="margin-left:22%;"></a></div>
							</ul>
					</nav>
				</li>
				<li class="dropdown1" style="background-color:#fff">
					<div class="dropdown">
					<button class="dropbtn"><img src="img/user.png" style="max-width:100%; height:auto"> Username
					</button>
					</div>
				</li>				
				<li><a class="codrops-icon codrops-icon-drop" href="#"> <IMG SRC="img/logo_1.png"  style="max-width:100%; height:auto" > </a></li>				
			</ul>
	</div>
	
	
	<!--------------------------menu code--------------------->
	<link type="text/css" rel="stylesheet" href="content/css/component.css">	
	 <script src="content/js/menu/classie.js"></script> 
	 <script src="content/js/menu/menu.js"></script> 
	<script> 
		 new gnMenu(document.getElementById('gn-menu'));				 
		 $(document).ready(function() { 
		 $("#btnAdd").click(function() { 
		 $("#a").append('<div class="con"></div>'); 
		 }); 
		 $('body').on('click','.btnRemove',function() {
		 $(this).parent('div.con').remove()
		 });
		});		
	</script>
</div>

<!-------------------------------menu(close)------------------------------>		






  <br><br><br>
<div class="header1"><img src="img/dash_1.png" style="max-width:100%; height:auto; margin-left:5px"><b style="margin-left:17px">  Dashboard Administrator</b></div><br><br><br><br>


<div class="container-field" style="padding-left:5%; padding-right:5%">
<div class="row">
				<a href="create_scenario.php"><img src="img/add_admin.png" id="pop"> Add Scenario</a>
				<div style="border:1px solid #c5c6c6;  margin-top:10px; box-shadow: 2px 2px white;"></div>
			</div>


</div>	



<div class='container-field' style="padding-left:5%; padding-right:5%">
	<div class='row'>		
        <table class='table-vertical'>	
           	<thead style="background-color:#e0e0e0">
        	<tr>
        		<th ></th>
        		<th>Scenario Title</th>
        		<th>Assigned to</th>
        		<th>Role</th>
        		<th></th>
        		<th></th>      
        	</tr>
        	</thead>	
        </table>	
</div>
</div>
            
        
    
     <div class='container-field' style='padding-left:5%; padding-right:5%'>
	<div class='row'>		
        <table class='table-vertical'>				
        	<tbody>
			
        	<tr>
        		<td data-th=''><img src='img/profile_admin.png' style='max-width:100%; height:auto'></td>
        		<td data-th='Username'>Scenario name goes here</td>
        		<td data-th='Email'>
             
                <select> 
                    <option value=''> -- Select User -- </option> 
                <?php
                   $dd_res=mysql_query('Select DISTINCT username from users WHERE role = "learner"');
                    while($r = mysql_fetch_row($dd_res))
                    
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
   
                 }
                ?>
              </select> 				
				</td>
        		<td data-th='Role'>Learner
                </td>				
        		<td data-th=''><img src='img/asign.png'></td>
        		<td data-th=''><img src='img/cross.png'></td>	
        	</tr>
			
        	</tbody>
        </table>	
</div>
</div>
                        
  
<div class="container-field" style="padding-left:5%; padding-right:5%">
<div class="row">
				<div style="border:1px solid #c5c6c6;  margin-bottom:10px; box-shadow: 2px 2px white;"></div>
				<a href="create_scenario.php"><img src="img/add_admin.png" id="pop"> Add Scenario</a>
				</div>
</div>	
   <br>
   
   
   
</body>
</html>



