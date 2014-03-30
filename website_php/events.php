<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Events</title>

  <?php include("css_events.php"); ?>

  <link rel="stylesheet" type="text/css" media="all" href="events_css/styles.css">
  
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="events_js/scrollview.js"></script>
</head>
<style type="text/css" media="screen">
body {
  background:url(img/bg.jpg);
  background-repeat: repeat;
  max-height: 100%;
  max-width: 100%;
  margin-left: 15px; 
  margin-right: 15px;
}

h2 a {
  display: block;
  padding: 48px 0;
}

p a {
  display:block;
  padding: 36px 24px;
}

#nav-list-example {
  height: 132px;
  width: 700px;
  margin:50px 0;
}

#nav-list-example li {
  width:150px;
  height: 200px;
  float: left;
  margin-right: 24px;
  position: relative;
}



#nav-list-example li div {

  width: 165px;
  height: 150px;
  overflow: hidden;
  background:#FFFFCC;
  position:absolute;
  top: 2000;
  left: 100;
}

#nav-list-example li div.back {
  left: -555em;
  background:#996666;}
  </style>

  <body>

    <div id="topbar" class="navbar">
      <?php include("menubar.php");?>
    </div>

    <br/>
    <br/>


    <div id="w">

      <?php include("events_content.php"); ?>

    </div>
  </body>
  </html>