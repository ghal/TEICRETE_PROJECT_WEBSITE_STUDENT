<html>
<head>
</head>
<body>

<?php

$m=$_POST["req0"];

$n=$_POST["input1"];

$con=mysql_connect("localhost","root","");
// Check connection


$result = mysql_query($con,"SELECT * FROM contacts WHERE $n ='$m'");

while($row = mysql_fetch_array($result))
  {
  echo $row['id'] ." ". $row['name']." ".$row['surname']." ".$row['phone']." ". $row['email'];
  echo "<br>";
  }
echo $result;
?> 
</body>
</html>