/* -------   main.js */






<!-------------------------------show hide(graph)------------------------------>	 
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



 <!-------------------------------show hide(graph)------------------------------>	
 
  <!-------------------------------open(tooltip)------------------------------>	
    $(document).ready(function(){
        $(".tip").tooltip({
            placement:"right"
        });                                                  
    });
 <!-------------------------------close(tooltip)------------------------------>
 
 <!-------------------------------show hide(option)------------------------------>	   
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
<!-------------------------------show hide(option)------------------------------>	

<!-------------------------------show hide(page)------------------------------>		

$(document).ready(function(){
    $(".showpage1").click(function(){
        $("#page1").hide();        
    });
    $(".showpage1").click(function(){
        $("#page2").show();
    });
});


$(document).ready(function(){
    $(".showpage2").click(function(){
        $("#page2").hide();
    });
    $(".showpage2").click(function(){
        $("#page3").show();
    });
});


$(document).ready(function(){
    $(".showpage3").click(function(){
        $("#page3").hide();
    });
    $(".showpage3").click(function(){
        $("#page4").show();
    });
});


$(document).ready(function(){
    $(".showpage4").click(function(){
        $("#page4").hide();
    });
    $(".showpage4").click(function(){
        $("#page5").show();
    });
});
    
<!-------------------------------show hide(page)------------------------------>	
    
    
<!-------------------------------responses(page)------------------------------>		
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
    
<!-------------------------------responses(page)------------------------------>	    
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







