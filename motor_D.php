<?php
$conn = new mysqli('localhost','root','','DBMotor');
 
if (isset($_POST['save_o'])){

    $sql = "INSERT INTO `T_motor` (Motor_1, Motor_2, Motor_3, Motor_4, Motor_5, Motor_6) VALUES ('".$_POST['Motor_1']."','".$_POST['Motor_2']."','".$_POST['Motor_3']."','".$_POST['Motor_4']."','".$_POST['Motor_5']."','".$_POST['Motor_6']."')";
       $result = $conn->query($sql);

}
if (isset($_POST['On_m'])){
    
    $sql = "INSERT INTO `T_motor` (On_m) VALUES (1)";
      $result = $conn->query($sql);
}
?>