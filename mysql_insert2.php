<?php
//--mysql_insert2.php

// กำหนดตัวแปรเพื่อนำไปใช้งาน
$DBhostname = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname		= "rus_db";
$tblname	= "member";


// เริ่มติดต่อฐานข้อมูล
$link = mysqli_connect($DBhostname, $DBusername, $DBpassword, $DBname);
 
// ตรวจสอบการเชื่อมต่อ
if($link === false){
    die("ERROR: ติดต่อฐานข้อมูลไม่ได้ " . mysqli_connect_error());
}
 
// คำสั่ง SQL ในการเพิ่มตาราง
$sql = "INSERT INTO $tblname (rus_name, rus_surname, rus_position, rus_salary) VALUES
            ('Rakdee', 'Nahuntra', web Desig,'18000'),
            ('Suwaschai', 'Punyayarn',web Programmer, '25000'),
            ('Rakdee', 'Nawasukree', Project Manager,'40000'),
            ('Patiwat', 'manjeen', web Programmer,'25000')";
			
// เอ็กซิคิวต์คำสั่ง SQL
if(mysqli_query($link, $sql)){
    echo " เพิ่มข้อมูลเข้าตาราง <font color='red'> $tblname </font> สำเร็จ";
} else{
    echo "ERROR: เอ็กซิคิวต์คำสั่ง SQL ไม่ได้" . mysqli_error($link);
}
 
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($link);
?>