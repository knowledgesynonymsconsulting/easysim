<?php
if (isset($_POST['insert']))
   {
       $xml = new DomDocument("1.0","UTF-8");
       $xml->load('scenario/qbank.xml');
       
       $scntitle = $_POST['c_title'];
       $qname = $_POST['c_name'];
       $scnavatar = $_POST['c_avatar'];	   
      // $img01 = $_POST['c_img01'];
       $img01 = $_POST['c_grab'];	  
       $ans1 = $_POST['c_ans1'];
       $aud01 = $_POST['c_aud01'];
       $y1 = $_POST['c_y1'];
       $fb1 = $_POST['c_fb1'];
    
       $ans2 = $_POST['c_ans2'];
       $aud02 = $_POST['c_aud02'];
       $y2 = $_POST['c_y2'];
       $fb2 = $_POST['c_fb2'];
    
       $ans3 = $_POST['c_ans3'];
       $aud03 = $_POST['c_aud03'];
       $y3 = $_POST['c_y3'];
       $fb3 = $_POST['c_fb3'];
    
    
       
       $rootTag = $xml->getElementsByTagName("scenario")->item(0);
      
       $infoTag = $xml->createElement("question");
        $titleTag = $xml->createElement("title", $scntitle);
        $avatarTag = $xml->createElement("avatar", $scnavatar);
        $nameTag = $xml->createElement("label", $qname);
        //$img01Tag = $xml->createElement("image", $img01);
        $imageTag = $xml->createElement("image1", $img01);		

        $ans1Tag = $xml->createElement("answer1", $ans1);
        //$aud01Tag = $xml->createElement("audio", $aud01);
        $y1Tag = $xml->createElement("weightage1", $y1);
        $fb1Tag = $xml->createElement("feedback1", $fb1);
    
        $ans2Tag = $xml->createElement("answer2", $ans2);
        //$aud02Tag = $xml->createElement("audio", $aud02);
        $y2Tag = $xml->createElement("weightage2", $y2);
        $fb2Tag = $xml->createElement("feedback2", $fb2);
    
        $ans3Tag = $xml->createElement("answer3", $ans3);
        //$aud03Tag = $xml->createElement("audio", $aud03);
        $y3Tag = $xml->createElement("weightage3", $y3);
        $fb3Tag = $xml->createElement("feedback3", $fb3);
           
    
      
       $infoTag->appendChild($nameTag); 
       $infoTag->appendChild($imageTag); 	   
       //$infoTag->appendChild($img01Tag);	   
       $infoTag->appendChild($ans1Tag); 
       $infoTag->appendChild($ans2Tag); 
       $infoTag->appendChild($ans3Tag); 
    
     
       //$ans1Tag->appendChild($aud01); 
       $ans1Tag->appendChild($y1Tag); 
       $ans1Tag->appendChild($fb1Tag); 
    
       //$ans2Tag->appendChild($aud02); 
       $ans2Tag->appendChild($y2Tag); 
       $ans2Tag->appendChild($fb2Tag); 
    
       //$ans3Tag->appendChild($aud03); 
       $ans3Tag->appendChild($y3Tag); 
       $ans3Tag->appendChild($fb3Tag); 
             
       $rootTag->appendChild($titleTag); 
       $rootTag->appendChild($avatarTag); 

    
       $rootTag->appendChild($infoTag); 
       $xml->save('scenario/qbank.xml');
     }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Easy Sim : Admin Dashboard</title>
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
.image-upload img
{
cursor: pointer;
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
							<div id="Skill" class="c1"><a href="index.php?logout='1'" style=" padding-left:15px">Logout <img src="img/logout.png" style="margin-left:22%;"></a></div>
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
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
.modal  {
    /*display: block;*/
    padding-right: 0px;
    background-color: rgba(4, 4, 4, 0.8); 
    }
.modal-content {
    border-radius: 0px;
    border: none;
	top: 40%;
    }
.modal-header {
    border-top:10px solid #F68972;
	  border-bottom:none;
	color: white;
}
 .modal-body1 {
	padding-top:5%;
	padding-bottom:8%;
}  
 .modal-body1 {
	padding-top:3%;
	padding-bottom:4%;
	padding-left:2%;
	padding-right:2%;
}  
 .modal-body2 {
	padding-top:3%;
	padding-bottom:4%;
	padding-left:2%;
	padding-right:2%;
}                
</style>

<br><br><br>

<div class="header1"><img src="img/creat_scenario.png" style="max-width:100%; height:auto; margin-left:5px"><b style="margin-left:17px">  Create Scenario</b></div><br><br><br><br>

<form method ="POST" action = "create_scenario.php">

<div class="container-field" style="padding-left:5%; padding-right:5%;">
    <div class="row-clearfix">
		<div class="col-md-12"  style="background-color:#fff; padding:10px; margin-bottom:4px;">
			<div class="form-group">
				<font color="#73cdd6"><div class="col-md-12"><label for="usr">Scenario Title</label></font>
					<input type="text" name = "c_title" class="form-control" id="usr" placeholder="Scenario name" style="width:100%; margin-bottom:10px"></input>
					<input name = "c_avatar" class="form-control" placeholder="Add Avatar Image" style="margin-bottom:10px;"></input>
					<div class="col-md-12" style="border:1px solid #BDC1C3">
					<!-- div class="col-md-6" style="margin-top: 2%;">
						<center><div data-toggle="buttons">
						 <label class="btn btn-default btn-circle btn-lg" style="margin-bottom:5px"><input type="radio"><img src="img/text1.png" style="height:auto; max-width:100%;" class="glyphicon glyphicon-home"></label><span style="margin-left:10px; font-size:18px">Text based Scenario&nbsp;&nbsp;&nbsp;</span><br>
						  <label class="btn btn-default btn-circle btn-lg"><input type="radio" name="q1" value="1"><img src="img/video1.png" style="height:auto; max-width:100%" class="glyphicon glyphicon-ok"></label><span style="margin-left:10px; font-size:18px">Video based Scenario</span>
						</div></center>	
					</div>
					<center>
						<div class="col-md-6" style="margin-bottom:5px;">
						<div>Add Scenario Image</div>
						<image name = "c_avatar" src="img/thumbnail.png" />
						</div>						
					</center>
					</div>				
				</div>				
			</div>
			<!--<di	v class="form-group">
				<font color="#73cdd6"><div class="col-md-12"><label for="usr">Add Scenario</label></font>
					<div class="input-group">
					  <input type="text" class="form-control" style="z-index:-0">
					  <span class="input-group-btn">
						<button class="browse btn btn-primary input-md" type="button" style="background-color:#73cdd6; border:1px solid #73cdd6;"  href="#largeModal" data-toggle="modal"> Browse</button>
					  </span>
					</div>	
				</div>				
			</div>					
		</div>	--->
		
		<!-- div class="col-md-12" style="background-color:#fff; padding:10px; margin-bottom:4px;">			
				<div style="font-size:24px">Add Avatar</div>
				<div style="border:1px solid #e5e5e5; margin-bottom:20px; margin-top:10px; box-shadow: 2px 2px white;"></div>
				<center><img src="img/q1.png" name = "c_avatar" style="max-width:100%; height:auto"><img src="img/edit.png" style="max-width:100%; height:auto"><img src="img/cross.png" style="max-width:100%; height:auto">	</center>			
		</div -->

		<div class="col-md-12" style="background-color:#fff; padding:30px; margin-bottom:1%;">
			<div class="row" style="margin-bottom:2%;">
				<div class="col-md-12"> 			
					<div class="form-group" class="image-upload">
						<font color="#73cdd6"><div class="col-md-12"><label for="usr">Question</label></font>
							<input type="text" name = "c_name"  class="form-control" id="usr" placeholder="Click here to add question...." style="width:100%">
							<input type="text" name = "c_grab"  class="form-control" id="usr" placeholder="Click here to add image and its folder location ...." style="width:100%">
							<input type="text" name = "c_audio"  class="form-control" id="usr" placeholder="Click here to add audio and its folder location...." style="width:100%">
						</div>
					</div>			
				</div>
			</div>
			
		<div class="row">
			<div class="col-md-12"  style="margin-bottom:2%;">
					<div class="form-group" class="image-upload">
						<font color="#73cdd6"><div class="col-md-12"><label for="usr">Answer Option 1</label></font>
							<input type="text" name = "c_ans1" class="form-control" id="usr" placeholder="Click here to add answer...." style="width:100%">
							<input type="text" name = "c_fb1" class="form-control" id="usr" placeholder="feedback...." style="width:100%">
							<font color="#fff">
                                <div class="image-upload" style="background-color:#6A7A89; padding:5px" >
								<label for="file-input"><img src="img/audio.png" style="max-width:100%; height:auto"></label>
								<input id="file-input" type="file" name = "c_aud01" style="display:none"> <span class="audio">Add Audio </span>												
								<select class="number" name = "c_y1" style="color:black; float:right;">
									<option>10</option>
									<option>20</option>
									<option>30</option>
									<option>40</option>
									<option>50</option>
									<option>60</option>
									<option>70</option>
									<option>80</option>
									<option>90</option>
									<option>100</option>
								</select>					
							     </div>	
                            </font>
						</div>
					</div>
			</div>	
			<div class="col-md-12"  style="margin-bottom:2%;">
					<div class="form-group" class="image-upload">
						<font color="#73cdd6"><div class="col-md-12"><label for="usr">Answer Option 2</label></font>
							<input type="text" name = "c_ans2" class="form-control" id="usr" placeholder="Click here to add answer...." style="width:100%">
							<input type="text" name = "c_fb2" class="form-control" id="usr" placeholder="feedback...." style="width:100%">
							<font color="#fff">
                                <div  style="background-color:#6A7A89; padding:5px" >
								<label for="file-input" class="image-upload"><img src="img/audio.png" style="max-width:100%; height:auto"></label>
								<input id="file-input" type="file" name = "c_aud02" style="display:none"> <span class="audio">Add Audio </span>
								<select class="number" name = "c_y2" style="color:black; float:right;">
									<option>10</option>
									<option>20</option>
									<option>30</option>
									<option>40</option>
									<option>50</option>
									<option>60</option>
									<option>70</option>
									<option>80</option>
									<option>90</option>
									<option>100</option>
								</select>									
                                </div>	
                            </font>
						</div>
					</div>						
			</div>						
			<div class="col-md-12"  style="margin-bottom:2%;">
					<div id="content" class="form-group" class="image-upload">
						<font color="#73cdd6"><div class="col-md-12"><label for="usr">Answer Option 3</label></font>
							<input type="text" class="form-control" name = "c_ans3" id="usr" placeholder="Click here to add answer...." style="width:100%">
							<input type="text" name = "c_fb3" class="form-control" id="usr" placeholder="feedback...." style="width:100%">
							<font color="#fff">
                                <div  style="background-color:#6A7A89; padding:5px" >
								<label for="file-input" class="image-upload"><img src="img/audio.png" style="max-width:100%; height:auto"></label>
								<input id="file-input" type="file" name = "c_aud03" style="display:none"> <span class="audio">Add Audio </span>
								<select class="number" name = "c_y3" style="color:black; float:right;">
									<option>10</option>
									<option>20</option>
									<option>30</option>
									<option>40</option>
									<option>50</option>
									<option>60</option>
									<option>70</option>
									<option>80</option>
									<option>90</option>
									<option>100</option>
								</select>									
                                </div>	
                            </font>
						</div>					
				</div>									
			</div>					
			
		</div>
	</div>	
 </div>
</div>        
<center><div class="col-md-12"><input type = "submit" name="insert" value="add"> <input type = "submit" name="insert" value="save" style="height:40px; width:155px; background-color:#73CDD6; color:#fff; border:none; font-size:20px">
<img src="img/saveclose.png" style="height:auto; max-width:100%;"></div></center>

 </form>         	
		
		

<!-------------------------------------profile code---------------------->	  


</body>
</html>


