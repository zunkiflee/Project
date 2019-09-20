<?php 

//รับข้อมูลจากเครื่องออกบัตรคิวจากนั้นเว็บเซิร์ฟเวอร์ทำการตรวจสอบแผนกที่มีค่าลำดับคิวที่มากที่สุด 
//จากนั้นทำการบวกหนึ่งของค่าลำดับคิว และส่งค่าลำดับคิวกลับไปยังเครื่องออกบัตรคิว

include ('config.php');
$id = $_GET['dp'];
$sql = "SELECT  MAX(qa) as c FROM qe_queue WHERE dp_id = $id ";
$result = $conn->query($sql);
//echo $sql;
if($result->num_rows > 0) {
   
   $row = $result->fetch_assoc();
    if(isset($row["c"])){ 
    	$n = $row["c"]+1;
    	echo $n;
    }
    else
    	echo "1";
   
} 
$conn->close();

 ?>