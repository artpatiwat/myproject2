<?php
	//--MYGPA.php\
	define ("NEW_LINE","<br>");
	echo"ปฏิวัติ มันจีน <br>Webprogramming".NEW_LINE;
	$score="75";
	if($score>=80)
	{
		echo"Grade A";
	}elseif($score>=75)
	{
		echo "Grade B+";
	}elseif($score>=70)
	{
		echo "Grade B";
	}elseif($score>=65)
	{
		echo "Grade C+";
	}elseif($score>=60)
	{
		echo "Grade C";
	}elseif($score>=55)
	{
		echo "Grade D+";
	}elseif($score>=50)
	{
		echo "Grade D";
	}else
	{
		echo "Grade F";
	}
	
		
?>