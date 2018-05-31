

    
         
        
    function reply_click(clicked_id)
    {
        
        
//Question 1
        
    if(clicked_id=="q1"){
    var page1a = document.getElementById("xval1").textContent;
    var page1q1 = document.getElementById("p1q1").textContent;
    var page1f1 = document.getElementById("feed1").textContent;
    var page1q1w = document.getElementById("q1a1w").textContent;
        document.getElementById("q1exec1").innerHTML = page1a;
        document.getElementById("q1exec2").innerHTML = page1a;
        document.getElementById("q1q1").innerHTML = page1q1;
        document.getElementById("q1q2").innerHTML = page1q1;
        document.getElementById("q1f1").innerHTML = page1f1;
        document.getElementById("q1a1w").innerHTML = page1q1w;
        mapvalues.push(page1q1w);
       // alert("mapvalues"+mapvalues);
        //alert("mapvaluesx"+mapvaluesx);
        }
        
    else if(clicked_id=="q2"){
    var page1b = document.getElementById("xval2").textContent;
    var page1q1 = document.getElementById("p1q1").textContent;
    var page1f1 = document.getElementById("feed2").textContent;
    var page1q2w = document.getElementById("q1a2w").textContent;
         document.getElementById("q1exec1").innerHTML = page1b;	
         document.getElementById("q1exec2").innerHTML = page1b;	
         document.getElementById("q1q1").innerHTML = page1q1;
         document.getElementById("q1q2").innerHTML = page1q1;
         document.getElementById("q1f1").innerHTML = page1f1;
         document.getElementById("q1a2w").innerHTML = page1q2w;
        mapvalues.push(page1q2w);
       //  alert("mapvalues>>>  "+mapvalues);
       //  alert("mapvaluesx>>>  "+mapvaluesx);
       
        }
    
    else if(clicked_id=="q3"){
    var page1c = document.getElementById("xval3").textContent;
    var page1q1 = document.getElementById("p1q1").textContent;
    var page1f1 = document.getElementById("feed3").textContent;
    var page1q3w = document.getElementById("q1a3w").textContent;
         document.getElementById("q1exec1").innerHTML = page1c;
         document.getElementById("q1exec2").innerHTML = page1c;
         document.getElementById("q1q1").innerHTML = page1q1;
         document.getElementById("q1q2").innerHTML = page1q1;		 
         document.getElementById("q1f1").innerHTML = page1f1;		 
         document.getElementById("q1a3w").innerHTML = page1q3w;
        mapvalues.push(page1q3w);
        //alert("mapvalues>>>  "+mapvalues);
        }
    
        
//Question 2
        
    else if(clicked_id=="q4"){
    var page1d = document.getElementById("xval4").textContent;
    var page1q2 = document.getElementById("p1q2").textContent;
    var page1f2 = document.getElementById("feed4").textContent;
    var page2q1w = document.getElementById("q2a1w").textContent;
         document.getElementById("q2exec1").innerHTML = page1d;
         document.getElementById("q2exec2").innerHTML = page1d;
         document.getElementById("q2q1").innerHTML = page1q2;
         document.getElementById("q2q2").innerHTML = page1q2;
         document.getElementById("q2f1").innerHTML = page1f2;
         document.getElementById("q2a1w").innerHTML = page2q1w;
         mapvalues.push(page2q1w);
        //alert("mapvalues>>>  "+mapvalues);
          //alert("mapvaluesx>>>  "+mapvaluesx);
        //alert(clicked_id+"  >> q4");
        }
        
    else if(clicked_id=="q5"){
    var page1e = document.getElementById("xval5").textContent;
    var page1q2 = document.getElementById("p1q2").textContent;
    var page1f2 = document.getElementById("feed5").textContent;
    var page2q2w = document.getElementById("q2a2w").textContent;
         document.getElementById("q2exec1").innerHTML = page1e;
         document.getElementById("q2exec2").innerHTML = page1e;
         document.getElementById("q2q1").innerHTML = page1q2;
         document.getElementById("q2q2").innerHTML = page1q2;
         document.getElementById("q2f1").innerHTML = page1f2;
         document.getElementById("q2a2w").innerHTML = page2q2w;
         mapvalues.push(page2q2w);
        //alert("mapvalues>>>  "+mapvalues);
        //alert("mapvaluesx>>>  "+mapvaluesx);
       // alert(clicked_id+"  >> q5");
        }
        
    else if(clicked_id=="q6"){
    var page1f = document.getElementById("xval6").textContent;
    var page1q2 = document.getElementById("p1q2").textContent;
    var page1f2 = document.getElementById("feed6").textContent;
    var page2q3w = document.getElementById("q2a3w").textContent;
        document.getElementById("q2exec1").innerHTML = page1f;
        document.getElementById("q2exec2").innerHTML = page1f;
        document.getElementById("q2q1").innerHTML = page1q2;
        document.getElementById("q2q2").innerHTML = page1q2;
        document.getElementById("q2f1").innerHTML = page1f2;
        document.getElementById("q2a3w").innerHTML = page2q3w;
        mapvalues.push(page2q3w);
        //alert("mapvalues>>>  "+mapvalues);
       }    
    
        
//Question 3
        
    else if(clicked_id=="q7"){
    var page1g = document.getElementById("xval7").textContent;
    var page1q3 = document.getElementById("p1q3").textContent;
    var page1f3 = document.getElementById("feed7").textContent;
    var page3q1w = document.getElementById("q3a1w").textContent;
         document.getElementById("q3exec1").innerHTML = page1g;
         document.getElementById("q3exec2").innerHTML = page1g;
         document.getElementById("q3q1").innerHTML = page1q3;
         document.getElementById("q3q2").innerHTML = page1q3;
         document.getElementById("q3f1").innerHTML = page1f3;
         document.getElementById("q3a1w").innerHTML = page3q1w;
         mapvalues.push(page3q1w);
         //alert("mapvalues>>>  "+mapvalues);
        
        }    
    
        
    else if(clicked_id=="q8"){
    var page1h = document.getElementById("xval8").textContent;
    var page1q3 = document.getElementById("p1q3").textContent;
    var page1f3 = document.getElementById("feed8").textContent;
    var page3q2w = document.getElementById("q3a2w").textContent;
         document.getElementById("q3exec1").innerHTML = page1h;
         document.getElementById("q3exec2").innerHTML = page1h;
         document.getElementById("q3q1").innerHTML = page1q3; 
         document.getElementById("q3q2").innerHTML = page1q3; 
         document.getElementById("q3f1").innerHTML = page1f3; 
         document.getElementById("q3a2w").innerHTML = page3q2w; 
         mapvalues.push(page3q2w);
         //alert("mapvalues>>>  "+mapvalues);
       
     }
        
        
    else if(clicked_id=="q9"){
    var page1i = document.getElementById("xval9").textContent;
    var page1q3 = document.getElementById("p1q3").textContent;
    var page1f3 = document.getElementById("feed9").textContent;
    var page3q3w = document.getElementById("q3a3w").textContent;
         document.getElementById("q3exec1").innerHTML = page1i;
         document.getElementById("q3exec2").innerHTML = page1i;
         document.getElementById("q3q1").innerHTML = page1q3; 
         document.getElementById("q3q2").innerHTML = page1q3;  
         document.getElementById("q3f1").innerHTML = page1f3;  
         document.getElementById("q3a3w").innerHTML = page3q3w; 
         mapvalues.push(page3q3w);
         //alert("mapvalues>>>  "+mapvalues);
      
     }
   
        
//Question 4
    else if(clicked_id=="q10"){
    var page1j = document.getElementById("xval10").textContent;
    var page1q4 = document.getElementById("p1q4").textContent;
    var page1f4 = document.getElementById("feed10").textContent;
    var page4q1w = document.getElementById("q4a1w").textContent;    
         document.getElementById("q4exec1").innerHTML = page1j;
         document.getElementById("q4exec2").innerHTML = page1j;
         document.getElementById("q4q1").innerHTML = page1q4;
         document.getElementById("q4q2").innerHTML = page1q4;
         document.getElementById("q4f1").innerHTML = page1f4;
         document.getElementById("q4a1w").innerHTML = page4q1w;
         mapvalues.push(page4q1w);
        //alert("mapvalues>>>  "+mapvalues);
        }    
    
        
    else if(clicked_id=="q11"){
    var page1k = document.getElementById("xval11").textContent;
    var page1q4 = document.getElementById("p1q4").textContent;
    var page1f4 = document.getElementById("feed11").textContent;
    var page4q2w = document.getElementById("q4a2w").textContent;    
         document.getElementById("q4exec1").innerHTML = page1k;
         document.getElementById("q4exec2").innerHTML = page1k;
         document.getElementById("q4q1").innerHTML = page1q4; 
         document.getElementById("q4q2").innerHTML = page1q4; 
         document.getElementById("q4f1").innerHTML = page1f4; 
         document.getElementById("q4a2w").innerHTML = page4q2w; 
        mapvalues.push(page4q2w);
        //alert("mapvalues>>>  "+mapvalues);
     }
        
        
    else if(clicked_id=="q12"){
    var page1l = document.getElementById("xval12").textContent;
    var page1q4 = document.getElementById("p1q4").textContent;
    var page1f4 = document.getElementById("feed12").textContent;
    var page4q3w = document.getElementById("q4a3w").textContent;    
         document.getElementById("q4exec1").innerHTML = page1l;
         document.getElementById("q4exec2").innerHTML = page1l;
         document.getElementById("q4q1").innerHTML = page1q4; 
         document.getElementById("q4q2").innerHTML = page1q4; 
         document.getElementById("q4f1").innerHTML = page1f4; 
         document.getElementById("q4a3w").innerHTML = page4q3w; 
        mapvalues.push(page4q3w);
        // alert("mapvalues>>>  "+mapvalues);
      
     }    

//Question 5
    
    else if(clicked_id=="q13"){
    var page1m = document.getElementById("xval13").textContent;
    var page1q5 = document.getElementById("p1q5").textContent;
    var page1f5 = document.getElementById("feed13").textContent;
    var page5q1w = document.getElementById("q5a1w").textContent;    
         document.getElementById("q5exec1").innerHTML = page1m;
         document.getElementById("q5exec2").innerHTML = page1m;
         document.getElementById("q5q1").innerHTML = page1q5;
         document.getElementById("q5q2").innerHTML = page1q5;
         document.getElementById("q5f1").innerHTML = page1f5;
         document.getElementById("q5a1w").innerHTML = page5q1w;
         mapvalues.push(page5q1w);
        // alert("mapvalues>>>  "+mapvalues);
        // alert("mapvaluesx - final 5>>>  "+mapvaluesx);
        }    
    
        
    else if(clicked_id=="q14"){
    var page1n = document.getElementById("xval14").textContent;
    var page1q5 = document.getElementById("p1q5").textContent;
    var page1f5 = document.getElementById("feed14").textContent;
    var page5q2w = document.getElementById("q5a2w").textContent;    
         document.getElementById("q5exec1").innerHTML = page1n;
         document.getElementById("q5exec2").innerHTML = page1n;
         document.getElementById("q5q1").innerHTML = page1q5; 
         document.getElementById("q5q2").innerHTML = page1q5; 
         document.getElementById("q5f1").innerHTML = page1f5; 
         document.getElementById("q5a2w").innerHTML = page5q2w; 
        mapvalues.push(page5q2w);
        //alert("mapvalues>>>  "+mapvalues);
        // alert("mapvaluesx - final 5>>>  "+mapvaluesx);
     }
        
        
    else if(clicked_id=="q15"){
    var page1o = document.getElementById("xval15").textContent;
    var page1q5 = document.getElementById("p1q5").textContent;
    var page1f5 = document.getElementById("feed15").textContent;
    var page5q3w = document.getElementById("q5a3w").textContent;
         document.getElementById("q5exec1").innerHTML = page1o;
         document.getElementById("q5exec2").innerHTML = page1o;
         document.getElementById("q5q1").innerHTML = page1q5; 
         document.getElementById("q5q2").innerHTML = page1q5; 
         document.getElementById("q5f1").innerHTML = page1f5; 
         document.getElementById("q5a3w").innerHTML = page5q3w; 
         mapvalues.push(page5q3w);
        // alert("mapvalues>>>  "+mapvalues);
        // alert("mapvaluesx - final 5>>>  "+mapvaluesx);
     }     
    }
	
	
	
var mapvalues= [];
function graphcreate() {
var dataPoints = [];

var chartPie = new CanvasJS.Chart("chartContainerPie",
{ 
	title:{
	  	text:	"Easy SIM Pie Graph"
  	},
	data: [
	{
		type: "pie",
		//indexLabel: "{label} : #percent%",
	   //	toolTipContent : "{label}: {y} ",
		toolTipContent : "{y} ",
		dataPoints: dataPoints
	}					
	]
});    


var chartbar = new CanvasJS.Chart("chartContainerbar",
{ 
	title:{
	  	text:	"Easy SIM bar Graph"
  	},
	data: [
	{
		type: "bar",
		//indexLabel: "{label} : #percent%",
	   //	toolTipContent : "{label}: {y} ",
		toolTipContent : "{y} ",
		dataPoints: dataPoints
	}					
	]
});    



var chartsplineArea = new CanvasJS.Chart("chartContainersplineArea",
{ 
	title:{
	  	text:	"Easy SIM splineArea Graph"
  	},
	data: [
	{
		type: "splineArea",
		//indexLabel: "{label} : #percent%",
	   //	toolTipContent : "{label}: {y} ",
		toolTipContent : "{y}" ,markerColor: "#F68972", lineColor: "#000", markerType: "circle",
		dataPoints: dataPoints
	}					
	]
});    

var chartline = new CanvasJS.Chart("chartContainerline",
{ 
	title:{
	  	text:	"Easy SIM line Graph"
  	},
	data: [
	{
		type: "line",
		//indexLabel: "{label} : #percent%",
	   //	toolTipContent : "{label}: {y} ",
		toolTipContent : "{y}" ,markerColor: "#F68972", lineColor: "#000", markerType: "circle",
		dataPoints: dataPoints
	}					
	]
});
    
$.get("qbank.xml", function (data) {
    
   var y, y2, y3, y4, y5;
    [y, y2, y3, y4, y5] = mapvalues;
	$(data).find("question").each(function () {
        var $dataPoint = $(this);
		var label = $dataPoint.find("").text();
        //var y = $dataPoint.find("y").text();
          dataPoints.push({ label: label, y: parseFloat(y) });
          dataPoints.push({ label: label, y: parseFloat(y2) });
          dataPoints.push({ label: label, y: parseFloat(y3) });
          dataPoints.push({ label: label, y: parseFloat(y4) });
          dataPoints.push({ label: label, y: parseFloat(y5) });
        return false;
        
  	});
   	chartPie.render();
   	chartbar.render();
   	chartsplineArea.render();
   	chartline.render();	
    
});

}
 	
	