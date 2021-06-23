<?php
 
  
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "controlinterface";

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db)

 ?>  
 <?php
  
if (isset($_POST['SAVE'])) {
 
 $sql= "INSERT INTO controlـinterface(Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,run) VALUES ('".$_POST['slider']."','".$_POST['sliderr']."','".$_POST['slider2']."','".$_POST['slider3']."','".$_POST['slider4']."','".$_POST['slider5']."','1')";
 $result = $conn->query($sql);
     
}

 ?>