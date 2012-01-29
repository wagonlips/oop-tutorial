<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>OOP in PHP</title> 
<?php include("class_lib.php"); ?> 
</head> 
<body> 
<?php 
  $stefan = new person("Stefan Mischook"); 
  $jimmy = new person("Nick Waddles"); 
  echo "Stefan's full name: " . $stefan->get_name() . "<br />"; 
  echo "Nick's full name: " . $jimmy->get_name() . "<br />";
?>
</body> 
</html
