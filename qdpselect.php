<?php 

//รับข้อมูลจากเครื่องเรียกบริการ แผนกที่ 1 หรือ 2 เมื่อมีการกดปุ่มเรียกบริการ
//เว็บเซิร์ฟเวอร์ทำการเลือกค่าลำดับคิวที่น้อยที่สุดและค่าสถานะ (Status) เท่ากับ 0 
//จากนั้นทำการปรับ (Update) ค่าสถานะของแผนกและลำดับคิวจาก 0 เป็น 1 และบันทึกไปยังฐานข้อมูล

include ('config.php');
$id = $_GET['dp'];
$sql = "SELECT  MIN(qa) as c FROM qe_queue WHERE dp_id = $id and status =0";
//echo $sql;
$result = $conn->query($sql);
if($result->num_rows > 0) {
   
   $row = $result->fetch_assoc();
    if(isset($row["c"])){ 
    	$n = $row["c"];
    	echo $n;
    	$sql = "update qe_queue set status = 1 WHERE dp_id = $id AND qa= $n";
    	if($conn->query($sql)===true)
    		echo "\n update OK";
    	else 
    		echo "error";
    }
    else
    	echo 0;
   
} 
$conn->close();

 ?>