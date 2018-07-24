<?php
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$emp = array("/E741", "/E941", "/E712","/E134", "/E333", "/E131","/E118","/E213","/E130", "/E148");
$x=array();
$y=array();
$r=array();
$arrlength=count($emp);
$co=0;
$as=0;
for($a=0;$a<$arrlength;$a++) {
$asg = $firebase->get(DEFAULT_PATH.'/employeedata'.$emp[$a].'/assigned');
$com = $firebase->get(DEFAULT_PATH.'/employeedata'.$emp[$a].'/completed');
$ra= $firebase->get(DEFAULT_PATH.'/employeedata'.$emp[$a].'/rating');
array_push($x,$asg);
array_push($y,$com);
array_push($r,$ra);
$co=$co+$com;
$as=$as+$asg;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Tracker</title>
	<meta charset="utf-8">
	<link rel="icon" size="32x32" href="Logo.png">
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
		background: #43423e;
	}
		#one{
		background: #74b9ff;
	}
	#num{
		font-size: 40px;
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
		<a href="mainpage.php"><div class="col-md-4 box"><div class="cont"><center>Tracker</center></div></div></a>
		<a href="statistics.php"><div class="col-md-4 box" id="one"><div class="cont"><center>Statistics</center></div></div></a>
	</div>
</div>
<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<center><h3>No.Of.Tasks Allocated : </h3><br><p id="num"><?php echo $as; ?></p></center>
		</div>
		<div class="col-md-4">
			<center><h3>No.Of.Tasks Completed : </h3><br><p id="num"><?php echo $co; ?></p><br><a href="ratingupdate.php"><button  class="btn btn-default">Calculate Rating</button></a></center>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<th>S.No</th>
					<th>Id</th>
					<th>Name</th>
					<th>Allocated tasks</th>
					<th>Completed tasks</th>
					<th>Ratings</th>
				</tr>
				<tr>
					<td>1</td>
					<td><?php echo $emp[0]; ?></td>
					<td>Aswin Udhayakumar</td>
					<td><?php echo $x[0]; ?></td>
					<td><?php echo $y[0]; ?></td>
					<td><?php echo round($r[0],2); ?>/10</td>
				</tr>
				<tr>
					<td>2</td>
					<td><?php echo $emp[1]; ?></td>
					<td>Sachin</td>
					<td><?php echo $x[1]; ?></td>
					<td><?php echo $y[1]; ?></td>
					<td><?php echo round($r[1],2); ?>/10</td>
				</tr>
				<tr>
					<td>3</td>
					<td><?php echo $emp[2]; ?></td>
					<td>Sam</td>
					<td><?php echo $x[2]; ?></td>
					<td><?php echo $y[2]; ?></td>
					<td><?php echo round($r[2],2); ?>/10</td>
				</tr>
				<tr>
					<td>4</td>
					<td><?php echo $emp[3]; ?></td>
					<td>Aarish</td>
					<td><?php echo $x[3]; ?></td>
					<td><?php echo $y[3]; ?></td>
					<td><?php echo round($r[3],2); ?>/10</td>
				</tr>
				<tr>
					<td>5</td>
					<td><?php echo $emp[4]; ?></td>
					<td>Kannan</td>
					<td><?php echo $x[4]; ?></td>
					<td><?php echo $y[4]; ?></td>
					<td><?php echo round($r[4],2); ?>/10</td>
				</tr>
				<tr>
					<td>6</td>
					<td><?php echo $emp[5]; ?></td>
					<td>Prakash</td>
					<td><?php echo $x[5]; ?></td>
					<td><?php echo $y[5]; ?></td>
					<td><?php echo round($r[5],2); ?>/10</td>
				</tr>
				<tr>
					<td>7</td>
					<td><?php echo $emp[6]; ?></td>
					<td>Kavin</td>
					<td><?php echo $x[6]; ?></td>
					<td><?php echo $y[6]; ?></td>
					<td><?php echo round($r[6],2); ?>/10</td>
				</tr>
				<tr>
					<td>8</td>
					<td><?php echo $emp[7]; ?></td>
					<td>Jeeva</td>
					<td><?php echo $x[7]; ?></td>
					<td><?php echo $y[7]; ?></td>
					<td><?php echo round($r[7],2); ?>/10</td>
				</tr>
				<tr>
					<td>9</td>
					<td><?php echo $emp[8]; ?></td>
					<td>Akilesh</td>
					<td><?php echo $x[8]; ?></td>
					<td><?php echo $y[8]; ?></td>
					<td><?php echo round($r[8],2); ?>/10</td>
				</tr>
				<tr>
					<td>10</td>
					<td><?php echo $emp[9]; ?></td>
					<td>Gopi</td>
					<td><?php echo $x[9]; ?></td>
					<td><?php echo $y[9]; ?></td>
					<td><?php echo round($r[9],2); ?>/10</td>
				</tr>																
			</table>
		</div>
	</div>
</div>

</body>
</html>