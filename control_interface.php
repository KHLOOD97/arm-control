<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "controlinterface";

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db)

 }
 if(isset($_POST['control_interface']))
 $slider = $_POST['slider'];
 $sliderr= $_POST['sliderr'];
 $slider2 = $_POST['slider2'];
 $slider3 = $_POST['slider3'];
 $slider4 = $_POST['slider4'];
 $slider5 = $_POST['slider5'];

 $sql= "INSERT INTO control_interface(المحرك6,المحرك5،المحرك4،المحرك3،المحرك2،المحرك1)
 VALUES ('$slider','$sliderr','$slider2','$slider3','$slider4','$slider5')";
 $query = sql_query($conn,$sql);
     
 if(!$query){
        echo "Couldnt enter data";

    }
    else{
        echo "Data entered";
    }

}
include 'control_interface.php';




?>