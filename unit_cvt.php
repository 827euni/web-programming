<html>
<head>
    <meta charset="UTF-8">
	<title>단위 변환기</title>
</head>
<style>
	table {border: 2px solid; 
			border-collapse : collapse;}
	td {border: solid 1px; text-align: center; padding-left:60px;padding-right:60px;}
	input[type=select]{
	width:16px}
</style>
<body>

<?php
	$number=$_POST["number"];
	$unit=$_POST["unit"];

		if ($unit=="미터(m)"){
		echo "<h3>단위 변환기 : $number 미터(m) </h3>";
		$m=$number;
		$in=round($number*39.370079,4);
		$ft=round($number*3.28084,4);
		$yd=round($number*1.093613,4);
			
		echo "<table>";
			echo "<tr>";
			echo "<td>$m 미터(m)</td>";
			echo "<td>$in 인치(in)</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>$ft 피트(ft)</td>";
			echo "<td>$yd 야드(yd)</td>";
			echo "</tr>";			
		echo "</table>";
		}
		
		else if ($unit=="인치(in)"){
		echo "<h3>단위 변환기 : $number 인치(in) </h3>";
		$m=round($number*0.0254,4);
		$in=round($number,4);
		$ft=round($number*0.083333,4);
		$yd=round($number*0.027778,4);
			
		echo "<table>";
			echo "<tr>";
			echo "<td>$m 미터(m)</td>";
			echo "<td>$in 인치(in)</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>$ft 피트(ft)</td>";
			echo "<td>$yd 야드(yd)</td>";
			echo "</tr>";			
		echo "</table>";
		}
		
		else if ($unit=="야드(yd)"){
		echo "<h3>단위 변환기 : $number 야드(yd) </h3>";
		$m=round($number*0.9144,4);
		$in=round($number*36,4);
		$ft=round($number*3,4);
		$yd=round($number,4);
			
		echo "<table>";
			echo "<tr>";
			echo "<td>$m 미터(m)</td>";
			echo "<td>$in 인치(in)</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>$ft 피트(ft)</td>";
			echo "<td>$yd 야드(yd)</td>";
			echo "</tr>";			
		echo "</table>";
		}
		
		else {
		echo "<h3>단위 변환기 : $number 피트(ft) </h3>";
		$m=round($number*0.3048,4);
		$in=round($number*12,4);
		$ft=round($number,4);
		$yd=round($number*0.333333,4);
			
		echo "<table>";
			echo "<tr>";
			echo "<td>$m 미터(m)</td>";
			echo "<td>$in 인치(in)</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>$ft 피트(ft)</td>";
			echo "<td>$yd 야드(yd)</td>";
			echo "</tr>";			
		echo "</table>";
		}
		
	

	?>
	
</body>
</html>