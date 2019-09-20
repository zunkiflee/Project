<?php 

//รับข้อมูลจากเครื่องออกบัตรคิว เพื่อนำค่าแผนกและลำดับคิวทำการบันทึกค่าไปยังฐานข้อมูลที่เว็บเซิร์ฟเวอร์

include ('config.php');
$dp = $_GET['dp'];
$qa = $_GET['qa'];
$sql = "INSERT INTO qe_queue (qa, dp_id) VALUES ($qa ,$dp )";

if ($conn->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "E";
}

$conn->close();

 ?>