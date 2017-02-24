<?php 
	session_start();
	$a=false; $b=false;
	
	if(isset($_POST['answer']))
	{
		if($_POST['answer']=="hitman" || $_POST['answer']=="code name 47")
		{
			$a=true;
			$_SESSION['a']=true;
		}	
		if($_POST['answer']=="scarface")
		{
			$b=true;
			$_SESSION['b']=true;
		}
		if($_POST['answer']=="al pacino")
		{
			header("location:successs.php");
		}
	}
	
	if(isset($_SESSION['a']))
	{
		$a=$_SESSION['a'];		
	}
	if(isset($_SESSION['b']))
	{
		$b=$_SESSION['b'];		
	}	
	
	$hint = array('1'=>'The Movie','2'=>'The Actor');
	

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Lost Mines - Treasure Hunting</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body>

<div class="navbar navbar-fixed-top alt" data-spy="affix" data-offset-top="1000">
  <div class="container">
    <div class="navbar-header">
      <a href="../" class="navbar-brand">Home</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="#sec1">Meet LostMines</a></li>
        <li><a href="#sec2">Rules</a></li>
        <li><a href="#sec3">Contact us</a></li>
      </ul>
    </div>
   </div>
</div>

<div class="blurb container">
    <div style="top-margin:400px;" class="row">
        <div class="col-md-12 text-center">
            <h2>Congratulations RJ</h2>
            <h3>Way to Go..</h3>
        </div>
    </div>
</div>        
        
        
        
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <ul class="list-inline">
          <li><i class="icon-facebook icon-2x"></i></li>
          <li><i class="icon-twitter icon-2x"></i></li>
          <li><i class="icon-google-plus icon-2x"></i></li>
          <li><i class="icon-pinterest icon-2x"></i></li>
        </ul>
        <hr>
        <p>Built with <i class="icon-heart-empty"></i> at <a href="http://www.lostmines.16mb.com">Lost Mines</a>.<br> &copy; 2015</p>
      </div>
    </div>
  </div>
</footer>

<ul class="nav pull-right scroll-down">
  <li><a href="#" title="Scroll down"><i class="icon-chevron-down icon-3x"></i></a></li>
</ul>
<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="icon-chevron-up icon-3x"></i></a></li>
</ul>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>