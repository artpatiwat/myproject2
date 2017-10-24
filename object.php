<?php
//--object.php
	class say
	{
		function say_hello()
		{
			echo "hello everybody";
		}
	}
$a = new say;	//--สร้างclassใหม่
$a->say_hello();	//--เรียกใช้งาน
?>