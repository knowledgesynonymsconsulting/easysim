<!DOCTYPE html>
<html>

<head>
    <title>Easy SIM - Scenario 1 - Questionnaire </title>
	<meta charset="UTF-8">
    
	<!----------------------------Bootstrap code---------------------------->
	<script src="content/js/bootstrap.js"></script>
	<script src="content/js/bootstrap.min.js"></script>	
	<script src="content/js/scenario-final.js"></script>	
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.css" /> 
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.min.css" />	
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-responsive.css">
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-editable.css">
	<link type="text/css" rel="stylesheet" href="content/css/bootstrap-toggle.css">
	<link type="text/css" rel="stylesheet" href="content/css/style.css">
	<link type="text/css" rel="stylesheet" href="content/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<!------------------------google window back button disbale code(open)------------------>
<script>
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script> 
<!------------------------google window back button disbale code (close)------------------>


  
<!-------------------------------show hide(js)------------------------------>			
<script src="content/js/show_hide.js"></script>
   
     
<!-------------------------------show hide(graph)------------------------------>	 
 <script>
$(document).ready(function(){
    $("#line").click(function(){
        $("#chartContainerPie").hide();
        $("#chartContainerbar").hide();	
        $("#chartContainersplineArea").hide();		
    });
    $("#line").click(function(){
        $("#chartContainerline").show();
    });
});

$(document).ready(function(){
    $("#pie").click(function(){
        $("#chartContainerline").hide();
        $("#chartContainerbar").hide();
        $("#chartContainersplineArea").hide();		
    });
    $("#pie").click(function(){
        $("#chartContainerPie").show();
    });
});


$(document).ready(function(){
    $("#bar").click(function(){
        $("#chartContainerline").hide();
        $("#chartContainerPie").hide();		
        $("#chartContainersplineArea").hide();		
    });		
    $("#bar").click(function(){
        $("#chartContainerbar").show();
    });
});

$(document).ready(function(){
    $("#splineArea").click(function(){
        $("#chartContainerline").hide();
        $("#chartContainerPie").hide();	
        $("#chartContainerbar").hide();				
    });	
    $("#splineArea").click(function(){
        $("#chartContainersplineArea").show();
    });
});



function swap1() {
	document.getElementById("line").src = "img/g2_sel.png";
	document.getElementById("pie").src = "img/g3.png";
	document.getElementById("bar").src = "img/g4.png";
	document.getElementById("splineArea").src = "img/g5.png";
    }
function swap2() {
	document.getElementById("pie").src = "img/g3_sel.png";
	document.getElementById("line").src = "img/g2.png";
	document.getElementById("bar").src = "img/g4.png";
	document.getElementById("splineArea").src = "img/g5.png";
	}
function swap3() {
	document.getElementById("bar").src = "img/g4_sel.png";
	document.getElementById("line").src = "img/g2.png";
	document.getElementById("splineArea").src = "img/g5.png";
	document.getElementById("pie").src = "img/g3.png";
	}	
function swap4() {
	document.getElementById("splineArea").src = "img/g5_sel.png";
	document.getElementById("line").src = "img/g2.png";
	document.getElementById("bar").src = "img/g4.png";
	document.getElementById("pie").src = "img/g3.png";
	}			


</script>

 <!-------------------------------show hide(graph)------------------------------>	
 
  <!-------------------------------open(tooltip)------------------------------>	
<script type="text/javascript">
    $(document).ready(function(){
        $(".tip").tooltip({
            placement:"right"
        });                                                  
    });
</script>     
 <!-------------------------------close(tooltip)------------------------------>
 
 <!-------------------------------show hide(option)------------------------------>	   
<script>
$(document).ready(function(){
    $("#hideoption1").click(function(){
        $("#mydiv1").hide();
    });
    $("#showoption1").click(function(){
        $("#mydiv1").show();
    });
});


$(document).ready(function(){
    $("#hideoption2").click(function(){
        $("#mydiv2").hide();
    });
    $("#showoption2").click(function(){
        $("#mydiv2").show();
    });
});


$(document).ready(function(){
    $("#hideoption3").click(function(){
        $("#mydiv3").hide();
    });
    $("#showoption3").click(function(){
        $("#mydiv3").show();
    });
});


$(document).ready(function(){
    $("#hideoption4").click(function(){
        $("#mydiv4").hide();
    });
    $("#showoption4").click(function(){
        $("#mydiv4").show();
    });
});


$(document).ready(function(){
    $("#hideoption5").click(function(){
        $("#mydiv5").hide();
    });
    $("#showoption5").click(function(){
        $("#mydiv5").show();
    });
});
</script>
<!-------------------------------show hide(option)------------------------------>	

<!-------------------------------show hide(page)------------------------------>		
<script>
$(document).ready(function(){
    $(".showpage2").click(function(){
        $("#page1").hide();        
    });
    $(".showpage2").click(function(){
        $("#page2").show();
    });
});


$(document).ready(function(){
    $(".showpage3").click(function(){
        $("#page2").hide();
    });
    $(".showpage3").click(function(){
        $("#page3").show();
    });
});


$(document).ready(function(){
    $(".showpage4").click(function(){
        $("#page3").hide();
    });
    $(".showpage4").click(function(){
        $("#page4").show();
    });
});


$(document).ready(function(){
    $(".showpage5").click(function(){
        $("#page4").hide();
    });
    $(".showpage5").click(function(){
        $("#page5").show();
    });
});
</script>
    
<!-------------------------------show hide(page)------------------------------>	
    
    
<!-------------------------------responses(page)------------------------------>		
<script>
$(document).ready(function(){
    $(".showpage2").click(function(){
        $("#block1").show();
    });
});

    
$(document).ready(function(){
    $(".showpage3").click(function(){
        $("#block2").show();
    });
});

    
$(document).ready(function(){
    $(".showpage4").click(function(){
        $("#block3").show();
    });
});

    
    
$(document).ready(function(){
    $(".showpage5").click(function(){
        $("#block4").show();
    });
});
    
    
$(document).ready(function(){
    $(".showpage6").click(function(){
        $("#block5").show();
    });
});   
</script>
    
<!-------------------------------responses(page)------------------------------>	    
<script>
function changecall() {
    var image = document.getElementById('Greeting');
    if (image.src.match("bulbon")) {
        image.src = "img/call.png";
    } else {
        image.src = "img/call_hover.png";
    }
}

function changeBridge() {
    var image = document.getElementById('Bridge');
    if (image.src.match("bulbon")) {
        image.src = "img/bridge.png";
    } else {
        image.src = "img/bridge_hover.png";
    }
}

function changeBody() {
    var image = document.getElementById('Body');
    if (image.src.match("bulbon")) {
        image.src = "img/body.png";
    } else {
        image.src = "img/body_hover.png";
    }
}

function changeBridge1() {
    var image = document.getElementById('Bridge1');
    if (image.src.match("bulbon")) {
        image.src = "img/bridge1.png";
    } else {
        image.src = "img/bridge1_hover.png";
    }
}

function changeEnd() {
    var image = document.getElementById('End');
    if (image.src.match("bulbon")) {
        image.src = "img/end.png";
    } else {
        image.src = "img/end_hover.png";
    }
}
</script> 



<style>
body{
font-size:14px;
font-family:Segoe UI;
height:100%
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

    
<?php
$xml=simplexml_load_file("qbank.xml") or die("Error: Cannot create object");
//$xml=simplexml_load_file("scn1.xml") or die("Error: Cannot create object");
?> 
    
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



<!-------------------------------Page1(open)------------------------------>	

  <br><br><br>

 <div class="header1"><img src="img/text_s1.png" style="max-width:100%; height:auto; margin-left:5px"><b style="margin-left:17px">  Customer Service Scenario</b><a href="dashboard_learner.php"><img src="img/back1.png" style="max-width:100%; height:auto; float:right"></a></div><br><br><br><br>
  

				
<div class="container-field" style="padding-left:5%; padding-right:5%;">
    <div class="row-clearfix">
	     <div class="col-md-12">	 
			<div class="col-md-12" style="background-color: #fff; padding-top:2px; padding-bottom:0px;margin-bottom:10px;"> 
			<div class="col-md-12" >
					<div style="font-size:24px;"> Call Strategy</div>
					<hr style="border:1px solid #f1f3f4; margin-bottom: 10px; margin-top: 10px;">			
				<center><div class="col-md-6 calling" style="margin-bottom:5px;" >			
					<div class="call" style="margin-left:10px;"><img src="img/call.png" id="Greeting"  class="img1"><p style="font-size:12px; color:#999999">Greeting</p></div>
					<div id="myImage" class="call"style="margin-left:10px;"><img id="Bridge" src="img/bridge.png" class="img1"><p style="font-size:12px; color:#999999">Bridge to Body</p></div>
					<div class="call"style="margin-left:10px;"><img id="Body" src="img/body.png" class="img1"><p style="font-size:12px; color:#999999">Body</p></div>
					<div class="call"style="margin-left:10px;"><img id="Bridge1" src="img/bridge1.png" class="img1"><p style="font-size:12px; color:#999999">Bridge to End</p></div>
					<div class="call"style="margin-left:10px;"><img id="End"  src="img/end.png" class="img1"><p style="font-size:12px; color:#999999">End</p></div>
                </div></center>
				<center><div class="col-md-6 progressbar">
				<img src="img/progress.png" style="max-width:100%; height:auto;"><img class="move" src="img/progress_move.png" style="max-width:100%; height:auto;">		
				</div></center>					
			</div>
			</div>
		</div>
	</div>		
</div>	
    

    
<div class="container-field"  id="page1" style="padding-left:5%; padding-right:5%;">
    <div class="row-clearfix">
	     <div class="col-md-12">
		 
		 
<!------image popup1----------->		 
				<div id="largeModal1" class="modal">
					<div class="modal-dialog modal-lg1" style="margin-top: 100px;">
						<div class="modal-content" style="height:auto;">
							<div class="modal-body">
								<?php echo '<img src="' . $xml->question[0]->image . '" />';?>
							</div>
						</div>
					</div>
				</div>
				
				
				
			<div class="col-md-12" style="background-color: #fff; padding:10px; margin-bottom:10px;">
				<div class="col-md-1">	
					 <?php echo '<img src="' . $xml->avatar . '" />'; ?>
				</div>
				<div id="p1q1" class="col-md-11">					
					<div style="font-size:18px;">
						<?php echo $xml->question[0]->label . "<br>"; ?>
					</div>
				</div>
			</div>
			


	
			<div class="col-md-12" id="quiz1"> <div style="margin-left:10px; margin-right:10px">
			<font color="white"><div style="font-size:24px;">Options<i  href="#largeModal1" data-toggle="modal" title="click here for question image" class="fa fa-desktop fa-1x circle-icon blink tip" style="cursor:pointer; float:right; margin-bottom:10px"/></i></div></font>
			
				<a href="#">
                    <div class="option showpage2" id="q1" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;1</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval1" onclick="changecall()"><?php echo $xml->question[0]->answer1 . "<br>";?></div><div id= "feed1" style="display:none"><?php echo $xml->question[0]->answer1->feedback . "<br>";?></div><div id="q1a1w" style="display:none"><?php echo $xml->question[0]->answer1->y . "<br>";?></div>
                        </div>
                    </div>
                </a>	
				
				<a href="#">
                    <div class="option showpage2" id="q2" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;2</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval2" onclick="changecall()"><?php echo $xml->question[0]->answer2 . "<br>";?></div><div id= "feed2" style="display:none"><?php echo $xml->question[0]->answer2->feedback . "<br>";?></div><div id="q1a2w" style="display:none"><?php echo $xml->question[0]->answer2->y . "<br>";?></div>
                        </div>
                    </div>
                </a>

				<a href="#">
                    <div class="option showpage2" id="q3" onClick="reply_click(this.id)">		
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;3</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval3" onclick="changecall()"><?php echo $xml->question[0]->answer3 . "<br>";?></div><div id= "feed3" style="display:none"><?php echo $xml->question[0]->answer3->feedback . "<br>";?></div><div id="q1a3w" style="display:none"><?php echo $xml->question[0]->answer3->y . "<br>";?></div>
                        </div>
                    </div>
                </a>			
			</div>
			</div>			
		</div>
	</div>	
</div>  


<!-------------------------------Page1(close)------------------------------>	


<!-------------------------------Page2(open)------------------------------>	


<div class="container-field"  id="page2" style="display:none; padding-left:5%; padding-right:5%;">
    <div class="row-clearfix">
	     <div class="col-md-12">		 
		<!------image popup1----------->		 
				<div id="largeModal2" class="modal">
					<div class="modal-dialog modal-lg1" style="margin-top: 100px;">
						<div class="modal-content" style="height:auto;">
							<div class="modal-body">
								<?php echo '<img src="' . $xml->question[1]->image . '" />';?>
							</div>
						</div>
					</div>
				</div>


				
			<div class="col-md-12" style="background-color: #fff; padding:10px; margin-bottom:10px;">
				<div class="col-md-1">	
					 <?php echo '<img src="' . $xml->avatar . '" />'; ?>
				</div>
				<div id="p1q2" class="col-md-11">	
					<div style="font-size:18px;">
						<?php echo $xml->question[1]->label .  "<br>"; ?>
					</div>				
				</div>
			</div>
			

         <div class="col-md-12" id="quiz2"><div style="margin-left:10px; margin-right:10px">
			<font color="white"><div style="font-size:24px;">Options <i  href="#largeModal2" data-toggle="modal" title="click here for question image" class="fa fa-desktop fa-1x circle-icon blink tip"  style="cursor:pointer; float:right; margin-bottom:10px"/></i></div></font>
			
			
				<a href="#">
                    <div class="option showpage3" id="q4" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;1</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval4" onclick="changeBridge()"><?php echo $xml->question[1]->answer1 . "<br>";?></div><div id= "feed4" style="display:none"><?php echo $xml->question[1]->answer1->feedback . "<br>";?></div><div id="q2a1w" style="display:none"><?php echo $xml->question[1]->answer1->y . "<br>";?></div>
                        </div>
                    </div>
                </a>	
				
				<a href="#">
                    <div class="option showpage3" id="q5" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;2</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval5" onclick="changeBridge()"><?php echo $xml->question[1]->answer2 . "<br>";?></div><div id= "feed5" style="display:none"><?php echo $xml->question[1]->answer2->feedback . "<br>";?></div><div id="q2a2w" style="display:none"><?php echo $xml->question[1]->answer2->y . "<br>";?></div>
                        </div>
                    </div>
                </a>

				<a href="#">
                    <div class="option showpage3" id="q6" onClick="reply_click(this.id)">		
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;3</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval6" onclick="changeBridge()"><?php echo $xml->question[1]->answer3 . "<br>";?></div><div id= "feed6" style="display:none"><?php echo $xml->question[1]->answer3->feedback . "<br>";?></div><div id="q2a3w" style="display:none"><?php echo $xml->question[1]->answer3->y . "<br>";?></div>
                        </div>
                    </div>
                </a></div>	
			
		</div>	
		</div>
	</div>	
</div>  
 
<!-------------------------------Page2(close)------------------------------>


<!-------------------------------Page3(open)------------------------------>

<div class="container-field" id="page3" style="display:none; padding-left:5%; padding-right:5%;"> 
    <div class="row-clearfix">
	     <div class="col-md-12">

<!------image popup1----------->		 
				<div id="largeModal3" class="modal">
					<div class="modal-dialog modal-lg1" style="margin-top: 100px;">
						<div class="modal-content" style="height:auto;">
							<div class="modal-body">
								<?php echo '<img src="' . $xml->question[2]->image . '" />';?>
							</div>
						</div>
					</div>
				</div>


				
			<div class="col-md-12" style="background-color: #fff; padding:10px; margin-bottom:10px;">
				<div class="col-md-1">	
					 <?php echo '<img src="' . $xml->avatar . '" />'; ?>
				</div>
				<div id="p1q3" class="col-md-11">	
					<div style="font-size:18px;">
						<?php echo $xml->question[2]->label . "<br>"; ?>
					</div>						
				</div>
			</div>


             
            <div class="col-md-12" id="quiz3">
			<div style="margin-left:10px; margin-right:10px">
			<font color="white"><div style="font-size:24px;">Options<i  href="#largeModal3" data-toggle="modal" title="click here for question image" class="fa fa-desktop fa-1x circle-icon blink tip"  style="cursor:pointer; float:right; margin-bottom:10px"/></i></div></font>	
			
				<a href="#">
                    <div class="option showpage4" id="q7" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;1</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval7" onclick="changeBody()"><?php echo $xml->question[2]->answer1 . "<br>";?></div><div id= "feed7" style="display:none"><?php echo $xml->question[2]->answer1->feedback . "<br>";?></div><div id="q3a1w" style="display:none"><?php echo $xml->question[2]->answer1->y . "<br>";?></div>
                        </div>
                    </div>
                </a>	
				
				<a href="#">
                    <div class="option showpage4" id="q8" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;2</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval8" onclick="changeBody()"><?php echo $xml->question[2]->answer2 . "<br>";?><div id= "feed8" style="display:none"><?php echo $xml->question[2]->answer2->feedback . "<br>";?></div></div><div id="q3a2w" style="display:none"><?php echo $xml->question[2]->answer2->y . "<br>";?></div>
                        </div>
                    </div>
                </a>

				<a href="#">
                    <div class="option showpage4" id="q9" onClick="reply_click(this.id)">		
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;3</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval9" onclick="changeBody()"><?php echo $xml->question[2]->answer3 . "<br>";?></div><div id= "feed9" style="display:none"><?php echo $xml->question[2]->answer3->feedback . "<br>";?></div><div id="q3a3w" style="display:none"><?php echo $xml->question[2]->answer3->y . "<br>";?></div>
                        </div>
                    </div>
                </a>	
			</div>             			
			</div>	
		</div>
	</div>	
</div>  		
					
<!-------------------------------Page3(close)------------------------------>



<!-------------------------------Page4(open)------------------------------>

<div class="container-field" id="page4" style="display:none; padding-left:5%; padding-right:5%;">
    <div class="row-clearfix">
	     <div class="col-md-12">
		 
<!------image popup1----------->		 
				<div id="largeModal4" class="modal">
					<div class="modal-dialog modal-lg1" style="margin-top: 100px;">
						<div class="modal-content" style="height:auto;">
							<div class="modal-body">
								<?php echo '<img src="' . $xml->question[3]->image . '" />';?>
							</div>
						</div>
					</div>
				</div>		 

			<div class="col-md-12" style="background-color: #fff; padding:10px; margin-bottom:10px;">
				<div class="col-md-1">	
					 <?php echo '<img src="' . $xml->avatar . '" />'; ?>
				</div>
				<div id="p1q4" class="col-md-11">	
					<div style="font-size:18px;">
						<?php echo $xml->question[3]->label . "<br>"; ?>
					</div>					
				</div>
			</div>
		

			<div class="col-md-12" id="quiz4"><div style="margin-left:10px; margin-right:10px">
			<font color="white"><div style="font-size:24px;">Options <i href="#largeModal4" data-toggle="modal" title="click here for question image" class="fa fa-desktop fa-1x circle-icon blink tip"  style="cursor:pointer; float:right; margin-bottom:10px"/></i></div></font>
			
				<a href="#">
                    <div class="option showpage5" id="q10" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;1</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval10" onclick="changeBridge1()"><?php echo $xml->question[3]->answer1 . "<br>";?></div><div id= "feed10" style="display:none"><?php echo $xml->question[3]->answer1->feedback . "<br>";?></div><div id="q4a1w" style="display:none"><?php echo $xml->question[3]->answer1->y . "<br>";?></div>
                        </div>
                    </div>
                </a>	
				
				<a href="#">
                    <div class="option showpage5" id="q11" onClick="reply_click(this.id)">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;2</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval11" onclick="changeBridge1()"><?php echo $xml->question[3]->answer2 . "<br>";?></div><div id= "feed11" style="display:none"><?php echo $xml->question[3]->answer2->feedback . "<br>";?></div><div id="q4a2w" style="display:none"><?php echo $xml->question[3]->answer2->y . "<br>";?></div>
                        </div>
                    </div>
                </a>

				<a href="#">
                    <div class="option showpage5" id="q12" onClick="reply_click(this.id)">		
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;3</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval12" onclick="changeBridge1()"><?php echo $xml->question[3]->answer3 . "<br>";?></div><div id= "feed12" style="display:none"><?php echo $xml->question[3]->answer3->feedback . "<br>";?></div><div id="q4a3w" style="display:none"><?php echo $xml->question[3]->answer3->y . "<br>";?></div>
                        </div>
                    </div>
                </a></div>
				
			</div>	
		</div>
	</div>	
</div>  
<!-------------------------------Page4(close)------------------------------>


<!-------------------------------Page5(open)------------------------------>

<div class="container-field"  id="page5" style="display:none; padding-left:5%; padding-right:5%;">
    <div class="row-clearfix">
	     <div class="col-md-12">
		 
<!------image popup1----------->		 
				<div id="largeModal5" class="modal">
					<div class="modal-dialog modal-lg1" style="margin-top: 100px;">
						<div class="modal-content" style="height:auto;">
							<div class="modal-body">
								<?php echo '<img src="' . $xml->question[4]->image . '" />';?>
							</div>
						</div>
					</div>
				</div>		

				
			<div class="col-md-12" style="background-color: #fff; padding:10px; margin-bottom:10px;">
				<div class="col-md-1">	
					 <?php echo '<img src="' . $xml->avatar . '" />'; ?>
				</div>
				<div id="p1q5" class="col-md-11">	
					<div style="font-size:18px;">
						<?php echo $xml->question[4]->label . "<br>"; ?>
					</div>									
				</div>
			</div>
			

      
			<div class="col-md-12" id="quiz5"><div style="margin-left:10px; margin-right:10px">
			<font color="white"><div style="font-size:24px;">Options <i  href="#largeModal5" data-toggle="modal" title="click here for question image" class="fa fa-desktop fa-1x circle-icon blink tip"  style="cursor:pointer; float:right; margin-bottom:10px"/></i></div> </font>
			
				<a href="#">
                    <div class="option showpage6" id="q13" onClick="reply_click(this.id);graphcreate();" href="#largeModal" data-toggle="modal">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;1</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval13" onclick="changeEnd()"><?php echo $xml->question[4]->answer1 . "<br>";?></div><div id= "feed13" style="display:none"><?php echo $xml->question[4]->answer1->feedback . "<br>";?></div><div id="q5a1w" style="display:none"><?php echo $xml->question[4]->answer1->y . "<br>";?></div>
                        </div>
                    </div>
                </a>	
				
				<a href="#">
                    <div class="option showpage6" id="q14" onClick="reply_click(this.id);graphcreate();" href="#largeModal" data-toggle="modal">	
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;2</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval14" onclick="changeEnd()"><?php echo $xml->question[4]->answer2 . "<br>";?></div><div id= "feed14" style="display:none"><?php echo $xml->question[4]->answer2->feedback . "<br>";?></div><div id="q5a2w" style="display:none"><?php echo $xml->question[4]->answer2->y . "<br>";?></div>
                        </div>
                    </div>
                </a>

				<a href="#">
                    <div class="option showpage6" id="q15" onClick="reply_click(this.id);graphcreate();" href="#largeModal" data-toggle="modal">		
						<div class="input_box"><label id="label1" style="margin-top: 10px; color:white;">&nbsp;3</label></div>						
                        <div class="questionTextWidth">
                            <div id= "xval15" onclick="changeEnd()"><?php echo $xml->question[4]->answer3 . "<br>";?></div><div id= "feed15" style="display:none"><?php echo $xml->question[4]->answer3->feedback . "<br>";?></div><div id="q5a3w" style="display:none"><?php echo $xml->question[4]->answer3->y . "<br>";?></div>
                        </div>
                    </div>
                </a>	</div>		
			
				
			</div>	          
        </div>
	</div>	
</div>  

 <!-- Responses Panel --->  

<div class="container-field" style="padding-left:5%; padding-right:5%;">
    <div class="row-clearfix">
         <div class="col-md-12">
			<div class="col-md-12 feedback" id="block1"  style="margin-top: 10px; padding-top: 1px; padding-bottom: 10px;"> 		   			  
				<h2 style="margin-top: 5px;">Responses</h2>
				<hr style="border:1px solid #999999; box-shadow: 0px 2px white; margin: 10px 0px 10px 0px;">               
        
				<div style="background-color:#fff; padding:10px; margin-bottom:2px;">
					<div style="margin-bottom:10px"><font color="#F68972"><b>Executive:</b></font><div id="q1exec1" style="background-color:#fff;"></div></div>
					<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q1q1" style="background-color:#fff;"></div></div>			   
				</div>
	  
	  
				<div id="block2" style="background-color:#fff; display:block; padding:10px; margin-bottom:2px;display:none">
					<div style="margin-bottom:10px"><font color="#F68972"><b>Executive:</b></font><div id="q2exec1" style="background-color:#fff;"></div> </div>
					<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q2q1" style="background-color:#fff;"></div></div>			  
				</div>                
					
		   
			   <div id="block3" style="background-color:#fff; display:block; padding:10px; margin-bottom:2px; display:none">
					<div style="margin-bottom:10px"><font color="#F68972"><b>Executive:</b></font><div id="q3exec1" style="background-color:#fff;"></div> </div>
					<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q3q1" style="background-color:#fff;"></div></div>			  
			   </div>     
		
						   
			   <div id="block4" style="background-color:#fff; display:block; padding:10px; margin-bottom:2px; display:none">
					<div style="margin-bottom:10px"><font color="#F68972"><b>Executive:</b></font><div id="q4exec1" style="background-color:#fff;"></div> </div>
					<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q4q1" style="background-color:#fff;"></div></div>			  
			   </div>                   
					
		   
			  <div id="block5" style="background-color:#fff; display:block; padding:10px; margin-bottom:2px; display:none">
					<div style="margin-bottom:10px"><font color="#F68972"><b>Executive:</b></font><div id="q5exec1" style="background-color:#fff;"></div> </div>
					<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q5q1" style="background-color:#fff;"></div></div>			  
			  </div>           
            </div>
        </div>
    </div>
</div>








<!-- end of Responses Panel  -->  

	
<!-------------------------------Page5(open)------------------------------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-------------------------------graph(open)------------------------------>

<!-- end of Graph code -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>

<div class="bs-example">
    <div id="largeModal" class="modal">
        <div class="modal-dialog modal-lg" style="margin-top: 100px;">
            <div class="modal-content" style="height:600px;">
                <div class="modal-body">
					<div class="graph">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_a" data-toggle="tab">Statistics</a></li>
					  <li><a href="#tab_b" data-toggle="tab">Summary</a></li>
					  <li><a href="#tab_c" data-toggle="tab">Jobaid</a></li>
					</ul>
					<div class="tab-content" style="background-color:white">

					<div class="tab-pane active" id="tab_a" style="height:500px">
						<div style="float: right">
						<img src="img/g2_sel.png" name="line" id="line" onclick="swap1()" style="cursor:pointer"/>	
						<img src="img/g3.png" name="pie" id="pie" onclick="swap2()" style="cursor:pointer"/>	
						<img src="img/g4.png" name="bar" id="bar" onclick="swap3()" style="cursor:pointer"/>	
						<img src="img/g5.png" name="splineArea" id="splineArea" onclick="swap4()" style="cursor:pointer"/>			
						</div><br><br><br>										
						<!-- Graph New -->
						<div id="chartContainerPie" style="width:100%; "></div>				
						<div id="chartContainerbar" style="width:100%; "></div>
						<div id="chartContainersplineArea" style="width:100%; "></div>
						<div id="chartContainerline" style="width:100%;" ></div>						
						<!-- end Graph New -->
					</div>

					<div class="tab-pane" id="tab_b" style="overflow: scroll;height: 534px;"> 			
						<div id="block1" style="background-color:#fff; padding:10px; margin-bottom:2px;">
							<div><font color="#F68972"><b>Executive:</b></font><div id="q1exec2" style="background-color:#fff;"></div></div>
							<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q1q2" style="background-color:#fff;"></div></div>			   	   
							<div id="page"><font color="#73cdd6"><b>feedback:</b></font><div id="q1f1" style="background-color:#fff;"></div></div>		   	   
						</div>				  
				  
						<div id="block2" style="background-color:#fff; padding:10px; margin-bottom:2px;">
							<div><font color="#F68972"><b>Executive:</b></font><div id="q2exec2" style="background-color:#fff;"></div> </div>
							<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q2q2" style="background-color:#fff;"></div></div>			  
							<div id="page"><font color="#73cdd6"><b>feedback:</b></font><div id="q2f1" style="background-color:#fff;"></div></div>			  
						</div>             
							
						<div id="block3" style="background-color:#fff; padding:10px; margin-bottom:2px;">
							<div><font color="#F68972"><b>Executive:</b></font><div id="q3exec2" style="background-color:#fff;"></div> </div>
							<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q3q2" style="background-color:#fff;"></div></div>			  
							<div id="page"><font color="#73cdd6"><b>feedback:</b></font><div id="q3f1" style="background-color:#fff;"></div></div>			  
						</div>     
														   
						<div id="block4" style="background-color:#fff; padding:10px; margin-bottom:2px;">
							<div><font color="#F68972"><b>Executive:</b></font><div id="q4exec2" style="background-color:#fff;"></div> </div>
							<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q4q2" style="background-color:#fff;"></div></div>			  
							<div id="page"><font color="#73cdd6"><b>feedback:</b></font><div id="q4f1" style="background-color:#fff;"></div></div>			  
						</div>                   
				
						<div id="block5" style="background-color:#fff; padding:10px; margin-bottom:2px;">
							<div><font color="#F68972"><b>Executive:</b></font><div id="q5exec2" style="background-color:#fff;"></div> </div>
							<div id="page"><font color="#73cdd6"><b>Customer:</b></font><div id="q5q2" style="background-color:#fff;"></div></div>			  
							<div id="page"><font color="#73cdd6"><b>feedback:</b></font><div id="q5f1" style="background-color:#fff;"></div></div>			  
						</div>           	
					</div>		

					<div class="tab-pane" id="tab_c" style="margin-top:2%;">
						<center>
                            <a href="/knowledgesynonyms.com/demo/easysim/zip/easySim-SCORM-Final.zip" download="SCORM">
                                <button type='button' class="btn" id='download' value='Download' style="background-color:#F68972; color:white">Publish as Zip</button></a>
						<button type="button" class="btn" style="background-color:#F68972; color:white">SCORM Publish</button></center>
					</div>
					</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>    
/* Firefox old*/
.blink {
    -moz-animation: blink normal 2s infinite ease-in-out; /* Firefox */
    -webkit-animation: blink normal 2s infinite ease-in-out; /* Webkit */
    -ms-animation: blink normal 2s infinite ease-in-out; /* IE */
    animation: blink normal 2s infinite ease-in-out; /* Opera and prob css3 final iteration */
}


@keyframes blink {
    0% { box-shadow: 0px 0px 20px 10px white; }
    50% { box-shadow: 0 0 0 0; }
    100% { box-shadow: 0px 0px 20px 10px white; }
}

.circle-icon {
    background: #F68972;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 45px;
    vertical-align: middle;
}
</style>



<script type="text/javascript"> 
    //Call the method on pageload
    $(window).load(function(){
      //Disply the modal popup
        $('#onloadpopup').modal('show');
    });
</script>
<div class="container-field">
	<div class="modal" id="onloadpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" style="margin-top: 9%;">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">What is Lorem Ipsum?</h4>
                </div>
                <div class="modal-body">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br><br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br><br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                </div>
            </div>
		</div>
	</div>
</div>

<!-- ----------------End New Code------------------ -->  

<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script> 
<script src="content/js/jquery.canvasjs.min.js"></script>	
<script src="content/js/popuponload.js"></script>	

<!--<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>-->    
</body>
</html> 

                  