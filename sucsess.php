
<?php
//$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;
$con = mysql_connect("localhost","root","");
if(!$con)
{
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("blog2", $con);
$sql="INSERT INTO Users (username,paw)
VALUES
('$_POST[name]','$_POST[password]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "";
mysql_close($con);
?>
<html>
<head>
      <meta charset="utf-8">
      <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    </head>
<body>
<script language="javascript">alert(Welcome <?php echo $_POST["name"] ?>)</script>!<br/>
<div class="demo-type-example">
            <center><h1><span class="demo-heading-note">亲，</span>恭喜注册成功啦</h1></center>
          </div>
          <center><a href="index1.html">logout</a></center>

</body>
</html>
