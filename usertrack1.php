<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$emp = array("/E741", "/E941", "/E712","/E134", "/E333", "/E131","/E118","/E213","/E130", "/E148");
$x1=array();
$arrlength=count($emp);
for($a=0;$a<$arrlength;$a++) {
$asg1= $firebase->get(DEFAULT_PATH.'/employeedata'.$emp[$a].'/status');
array_push($x1,$asg1);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Tracker</title>
	<link rel="icon" size="32x32" href="Logo.png">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
    <style type="text/css">
        .navbar{
    	border-radius: 0%;
    }
   	#temp{
	height: 100%;
	width: 100%;
	background: #464f52;
	color: white;
	font-size:20px;
	}
	.box{
		background:  #464f52;
	}
	.cont{
		padding-top: 20px;
		padding-bottom: 20px;
		color: white;
	}
	.box:hover{
		background:#43423e;
	}
		#one{
		background: #74b9ff;
	}
	.list{
		padding-left: 30px;
	}
	#im{
		height: 40px;
		width: 40px;
		border-radius: 50%;
	}
		table{
		font-size: 15px;
	}
	.ico{
		position: relative;
		top: -5px;
	}
	#head{
		position: relative;
		top: 5px;
	}
	a{
		text-decoration : none;
		color: black;
	}
	a:hover{
		text-decoration : none;
		color: black;
	}
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse" style="background: #2d3436;">
  <div class="container-fluid menu">
   
     <div class="navbar-header menu">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main">
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        </button>
               <a class="navbar-brand" href="#" >
        	<table class="ico">
        		<col width="50">
        		<col width="200">
        		<tr>
        			<td><img src="Logo.png" width="35px" height="35px"></td>
        			<td id="head"><p style="font-size: 20px;">Employee Tracker<p></td>
        		</tr>		
        	</table>
       	</a>
     </div>  	
     
     <div class="collapse navbar-collapse menu" id="main">
        <ul class="nav navbar-nav menu">
        	<li id="cxcx" >Employee Tracker</li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
        </ul>

     </div>
  </div>
	
</nav>

<div class="container">
	<div class="row topnav col-md-12">
		<a href="calender.html"><div class="col-md-4 box" ><div class="cont"><center>Calender</center></div></div></a>
		<a href="initiallocation.php"><div class="col-md-4 box" id="one"><div class="cont"><center>Tracker</center></div></div></a>
		<a href="statistics.php"><div class="col-md-4 box" ><div class="cont"><center>Statistics</center></div></div></a>
	</div>
</div>

<br>

<div class="container-fluid">
	<form action="assignp.php" method="post">
	<div class="row">
		<div class="col-md-2">
			<input type="text" placeholder="Search" class="form-control">
		</div>
		<div class="col-md-3">
			<input type="text" placeholder="Employee name" class="form-control" name="ename">
		</div>
		<div class="col-md-3">
			<input type="text" placeholder="Customer location" class="form-control" name="task">
		</div>
		<div class="col-md-3">
			<input type="submit" class="btn btn-success" value="assign">
		</div>
	</div>
    </form>
</div>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2" style="overflow:scroll;height:500px">
			<form action="usertrack.php" method="post"><div class="list"><a href="usertrack.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E741" value="Aswin"> <img src="<?php echo $x1[0]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack1.php" method="post"><div class="list"><a href="usertrack.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E941" value="David"> <img src="<?php echo $x1[1]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack2.php" method="post"><div class="list"><a href="e3.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E712" value="Javagal"> <img src="<?php echo $x1[2]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack3.php" method="post"><div class="list"><a href="e4.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E134" value="Kannan"> <img src="<?php echo $x1[3]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack4.php" method="post"><div class="list"><a href="e5.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E333" value="Ajay"> <img src="<?php echo $x1[4]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack5.php" method="post"><div class="list"><a href="e6.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E131" value="Rangith"> <img src="<?php echo $x1[5]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack6.php" method="post"><div class="list"><a href="e7.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E118" value="Aarish"> <img src="<?php echo $x1[6]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack7.php" method="post"><div class="list"><a href="e8.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E213" value="Kavin"> <img src="<?php echo $x1[7]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack8.php" method="post"><div class="list"><a href="e9.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E148" value="Pavin"> <img src="<?php echo $x1[8]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
			<form action="usertrack9.php" method="post"><div class="list"><a href="e10.php"><img src="pp.jpg" id="im"> &nbsp <input type="submit" class="btn btn-primary" name="E130" value="Sachin"> <img src="<?php echo $x1[9]; ?>.png" height="40px" width="40px"></a></div></form><hr/>
		</div>

		<div class="col-md-10 map">
			<iframe src="usertrackpath.php" height="500px" width="100%"></iframe>
		</div>
	</div>
</div>


</body>
</html>