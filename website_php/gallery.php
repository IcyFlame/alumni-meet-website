<!DOCTYPE html>
<html>
<head>

	<title>12th Alumni Meet</title>

    <?php include("mainStyle.php");?>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width">
    <title>Gallery</title>

    <?php include("style_gallery.php"); ?>

</head>
<body style="margin: 0px; padding: 0px; font-family:Arial, Verdana;background-color:#fff;" background="bg.jpg">

    <div id="topbar" class="hero-unit">

        <?php include("menubar.php"); ?>

    </div>
    <br>

    <div class="col-md-2"></div>

    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->

    <div class="col-md-8">

        <?php include("gallery_jssor_slider.php"); ?>
        
    </div>


    <div class="col-md-2" style="background:; float:left; text-align:center; z-index:500">

        <?php include("socialIcons.php"); ?>

    </div>		

</div>
</body>
</html>