<?php
//--footer.php
	class footer
	{
		function show_footer()
		{
			echo "<FONT SIZE=5><center><hr>มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ (Rajamangala University of Technology Suvarnabhumi.)<br> 
				เลขที่ 60 หมู่ 3 ถ.สายเอเซีย (กรุงเทพฯ - นครสวรรค์ ) ต.หันตรา อ.พระนครศรีอยุธยา จ.พระนครศรีอยุธยา 13000<br>
				โทรศัพท์ : 035-709101 ถึง 103 แฟกซ์ : 035 709 105";
		}
	}
$a = new footer;	//--สร้างclassใหม่
$a->show_footer();	//--เรียกใช้งาน

