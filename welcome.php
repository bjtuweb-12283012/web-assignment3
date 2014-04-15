<html>
  	<head>
      <meta charset="utf-8">
      <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">
  	</head>
  	<body>
<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("blog2", $con);
  $result = mysql_query("SELECT * FROM users");
  $logflag=false;
  while($row = mysql_fetch_array($result))
  	{
		if ($row['username'] == $_POST["name"]  &&   $row['paw'] == $_POST["password"])
			$logflag = true;
	}
		if ($logflag==true)
		{
			echo "welcom"."  ". $_POST["name"];

			$vname=$_POST["name"];
			echo "<script language='javascript'>alert('$vname');</script>";
		}
		else {
			echo "error,请重新输入";
			
			
		}
  	
  	?>
 	
  	<div class="demo-type-example">
            <h1><span class="demo-heading-note">亲，</span>恭喜登陆成功啦</h1>
          </div>
  	</body>
  	</html>