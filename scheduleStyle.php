/*==================FIXES=====================*/
header, footer, aside, nav, section, article, hgroup, div{
display:block;
}
/* change box sizing model to force width and height measure to include padding and border (learn more at: http://paulirish.com/2012/box-sizing-border-box-ftw/ and at: http://html5please.com/ ) Note: breaks min-height, max-height in Firefox. */

* { 
  -moz-box-sizing: border-box; /* Firexfox */
	-webkit-box-sizing: border-box; /* Safari/Chrome/iOS/Android */
	box-sizing: border-box; /* IE */
}

/* clear class prevents parents with floating children from collapsing */

.clear:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
/*==================END FIXES=====================*/
body{  width: 100%; height: 100%; margin: 0 ; padding: 0;}

.header h1, h2{
margin: 0 auto;
color:blue;
text-align: center;
}

h3{
text-align:center;
background-color: white;
}

h4{
color:grey;
font-size: 15 px;
display: inline;
}

h5{
color:black;
font-size: 13 px;
display: inline;
padding-bottom:3px;


}

#allDays{
/*background-color: #207178;*/
/*width:14%;*/
float:left;


}

.title{
background-color:grey;
}

.day{
background-color:red;
display:block;
}



.Monday{
background-color: #003056;
color:#E5E5E5;
width:14%;
float:left;
height:300px;
}

.Tuesday{
background-color: #174C4F;
color:#E5E5E5;
width:14%;
float:left;
height:300px;
}
.wednesday{
background-color: #207178;
color:#E5E5E5;
width:14%;
float:left;
height:300px;
}
.thursday{
background-color: #FF9666;
width:14%;
float:left;
height:300px;
}

.friday{
background-color: #FFE184;
width:14%;
float:left;
height:300px;

}

.saturday{
background-color: #F5E9BE;
width:14%;
float:left;
height:300px;
}
.sunday{
background-color: #67617A;
width:14%;
float:left;
height:300px;
}
*/
