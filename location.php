<html>
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
</style> 
	<link rel="stylesheet" href="../client/css.css">
<body>  
	<?php
$servername = '35.244.69.181';
$dbname = 'SEPMdb';
$dbUser = 'root';
$dbPass = null;
$db = new mysqli($servername, $dbUser, $dbPass, $dbname);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}     

$sql = "INSERT INTO locations (exhibitname, xcord, ycord, desc, min_duration)
VALUES ('$_POST[Exhibit_name]', '$_POST[x]', '$_POST[y]', '$_POST[Description]','$_POST[min_duration]')";
  
if ($db->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}

    
    
#$file = fopen('locations.csv','a+'); //"w"=overwrite
#fwrite($file, $_POST['Exhibit_name']);
#fwrite($file, ",");
#fwrite($file, $_POST["x"]); 
#fwrite($file, ",");
#fwrite($file, $_POST["x"]);
#fwrite($file, ",");
#fwrite($file, $_POST["Description"]);
#fwrite($file, ",");
#fwrite($file, $_POST["min_duration"].PHP_EOL);
#fclose($file);
?>
	<h1>The location has been registered!</h1>
	<p> <a href="http://titan.csit.rmit.edu.au/~s3722979/SEPM/">Click here</a> to return to main directory</p>
	
</body>
</html>