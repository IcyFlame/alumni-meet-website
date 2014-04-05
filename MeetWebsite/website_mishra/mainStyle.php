<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/menubar.css">
<link rel="stylesheet" href="css/bootstrap_customisation.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/body_customise.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
<script src="js/jquery-2.1.0.min.js"></script>

<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<script>

</script>
<!--slippry -->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
$(window).load(function() {
document.getElementById("mainpage").style.display="none";
 var factor = 2;
window.setTimeout(start,1000);
function start(){

//$("#pageloaddiv").fadeOut(8000);
    $("#pageloaddiv1").animate({
        top: '-10%',
		left:'55%',
		height:"49%",
        width: "43%",
		
    },2000,'linear');
	 $("#pageloaddiv2").animate({
        top: '-10%',
		left:'-10%',
		height:"49%",
        width: "43%",
		
    },2000,'linear');
	document.getElementById("pageloaddiv1").setAttribute("style","z-index:1");
	document.getElementById("pageloaddiv2").setAttribute("style","z-index:1");
	}
	
	
	document.getElementById("mainpage").style.display="";
	
//document.getElementById("pageloaddiv").setAttribute("style","background-image:url('invi2.jpg')");

//document.getElementById("pageloaddiv").setAttribute("style","background-image:url('invi.jpg')");
});
</script>

<style type="text/css">

#pageloaddiv1{
position: fixed;
left: 0px;
top: 0px;
width: 100%;
height: 100%;
z-index: 1000;
background: url('invi2.jpg') no-repeat center center;
}
#pageloaddiv2{
position: fixed;
left: 0px;
top: 0px;
width: 100%;
height:100%;
z-index: 10000;
background: url('logo.jpg') no-repeat center center;
background-size:40%;
}
</style>

