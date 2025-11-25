<html><head></head><body>
<?php  
 $myfile = fopen("myfile.txt", "r") or 
  die("Unable to open file!");  
 while(!feof($myfile)) {  
 echo fgets($myfile) . "<br>";  
 }  
 fclose($myfile);  
?>  
</body></html>  