<?php
	//--if03.php
	$name="admin";
	if($name=="manager")
	{
		echo"ยินดีต้อนรับผู้จัดการ";
	}elseif($name=="admin")
	{
		echo "ยินดีต้อนรับผู้ดูแลระบบ";
	}elseif($name=="webmaster")
	{
		echo "ยินดีต้อนรับผู้ดูแลเว็บไซต์";
	}else
	{
		echo "คุณคือผู้ใช้งาน";
	}	
?>