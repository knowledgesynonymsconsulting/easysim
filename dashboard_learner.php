<!DOCTYPE html>
<html>

<head>
    <title>Easy Sim : Learner Dashboard</title>
	<meta charset="UTF-8">
	<!----------------------------Bootstrap code---------------------------->
	<script src="content/js/bootstrap.js"></script>
	<script src="content/js/bootstrap.min.js"></script>	
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.css" /> 
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.min.css" />	
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-responsive.css">
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-editable.css">
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-toggle.css">
	<link type="text/css" rel="stylesheet" href="content/css/style.css">	

<script>
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>   	


	<!--------------------------add delete text field code---------------------->  
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
</style>
	
	
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
 <div class="header1"><img src="img/dash_1.png" style="max-width:100%; height:auto; margin-left:5px"><b style="margin-left:17px">  Dashboard Learner</b></div><br><br><br> 






<div class="container-field" style="padding-left:5%; padding-right:5%;"> 
    <div class="row-clearfix">
		<div class="col-md-12">	
			<div class="row">		
				<div style="border:1px solid #c5c6c6; margin-bottom:20px; margin-top:10px; box-shadow: 2px 2px white;"></div>
			</div>
		</div>		
	    <div class="col-md-12">
			<div id="example" class="content">
				<div class="row">			
				  <div class="col-md-4" >
					<div class="thumbnail" style="border:2px solid #73cdd6;"><a href="scenario_final.php">
						<img src="img/blue.png" alt="Lights" style="max-width:100%; height:auto; float:left;">
						<img src="img/D_1.png" alt="Lights" style="width:100%">
						<div class="caption"  style="margin-bottom:25px;">
						  <div style="float:left; color:#73cdd6"><b>Scenario name</b></div><br>
						  <div>Bob Burger is an accountant with a pump-making firm. </div><br>
						  <img src="img/clock.png" alt="Lights" style="max-width:100%; height:auto; float:left;"> 
						  <img src="img/text.png" alt="Lights" style="max-width:100%; height:auto; float:right;"></a>
						</div>
					</div>
				  </div>
				  <div class="col-md-4" >
					<div class="thumbnail">
						<img src="img/red.png" alt="Lights" style="max-width:100%; height:auto; float:left;">
						<img src="img/D_2.png" alt="Lights" style="width:100%">
						<div class="caption"  style="margin-bottom:25px;">
						  <div style="float:left; color:#73cdd6"><b>Scenario name</b></div><br>
						  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante ipsum, laoreet in nulla non.</div><br>
						  <img src="img/clock.png" alt="Lights" style="max-width:100%; height:auto; float:left;"> 
						  <img src="img/video.png" alt="Lights" style="max-width:100%; height:auto; float:right;">
						</div>
					</div>
				  </div>
				  <div class="col-md-4" >
					<div class="thumbnail">
						<img src="img/red.png" alt="Lights" style="max-width:100%; height:auto; float:left;">
						<img src="img/D_3.png" alt="Lights" style="width:100%">
						<div class="caption"  style="margin-bottom:25px;">
						  <div style="float:left; color:#73cdd6"><b>Scenario name</b></div><br>
						  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante ipsum, laoreet in nulla non.</div><br>
						  <img src="img/clock.png" alt="Lights" style="max-width:100%; height:auto; float:left;"> 
						  <img src="img/video.png" alt="Lights" style="max-width:100%; height:auto; float:right;">
						</div>
					</div>
				  </div>
				</div>
				
				
				
				
				<div class="row">
				  <div class="col-md-4" >
					<div class="thumbnail">
						<img src="img/red.png" alt="Lights" style="max-width:100%; height:auto; float:left;">
						<img src="img/D_3.png" alt="Lights" style="width:100%">
						<div class="caption"  style="margin-bottom:25px;">
						  <div style="float:left; color:#73cdd6"><b>Scenario name</b></div><br>
						  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante ipsum, laoreet in nulla non.</div><br>
						  <img src="img/clock.png" alt="Lights" style="max-width:100%; height:auto; float:left;"> 
						  <img src="img/video.png" alt="Lights" style="max-width:100%; height:auto; float:right;">
						</div>
					</div>
				  </div>
				  <div class="col-md-4" >
					<div class="thumbnail">
						<img src="img/red.png" alt="Lights" style="max-width:100%; height:auto; float:left;">
						<img src="img/D_5.png" alt="Lights" style="width:100%">
						<div class="caption"  style="margin-bottom:25px;">
						  <div style="float:left; color:#73cdd6"><b>Scenario name</b></div><br>
						  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante ipsum, laoreet in nulla non.</div><br>
						  <img src="img/clock.png" alt="Lights" style="max-width:100%; height:auto; float:left;"> 
						  <img src="img/video.png" alt="Lights" style="max-width:100%; height:auto; float:right;">
						</div>
					</div>
				  </div>
				  <div class="col-md-4" >
					<div class="thumbnail">
						<img src="img/red.png" alt="Lights" style="max-width:100%; height:auto; float:left;">
						<img src="img/D_6.png" alt="Lights" style="width:100%">
						<div class="caption"  style="margin-bottom:25px;">
						  <div style="float:left; color:#73cdd6"><b>Scenario name</b></div><br>
						  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante ipsum, laoreet in nulla non.</div><br>
						  <img src="img/clock.png" alt="Lights" style="max-width:100%; height:auto; float:left;"> 
						  <img src="img/video.png" alt="Lights" style="max-width:100%; height:auto; float:right;">
						</div>
					</div>
				  </div>
				</div>

				
				</div>
			</div>
		<div class="col-md-12">	
			<div class="row">		
				<div style="border:1px solid #c5c6c6; margin-bottom:20px; margin-top:10px; box-shadow: 2px 2px white;"></div>
				<img src="img/adduser.png" alt="Lights" style="max-width:100%; height:auto; float:right;"><br><br><br>
			</div>
		</div>			
	</div>
</div>

		






</body>

</html>
