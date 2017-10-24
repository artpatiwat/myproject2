<?php
 //--switch01.php
	$username="manager";
	switch($username)
	{
	case "manager":
		echo "ยินดีต้อนรับคุณคือผู้จัดการ";
		break;
	case "admin":
		echo "ยินดีต้อนรับคุณคือผู้ดูแลระบบ";
		break;
	case "webmaster":
		echo "ยินดีต้อนรับผู้ดูแลเว็บไซต์";
		break;
	default:
		echo"ยินดีต้อนรับคุณค่ือผู้ใช้งาน";
	}
?>