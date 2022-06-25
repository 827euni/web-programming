<head>
    <meta charset="UTF-8">
</head>
<style>
	table {border: 3px solid black; 
			border-collapse : collapse;}
	td {border: solid 1px gray; text-align: center; padding-left:15px;padding-right:15px;padding-top:5px; padding-bottom:5px; }
	span {color:red;font-weight:bold;}
	a {background:yellow; color:blue; font-weight:bold;}
</style>
<h2>3-6-9 테이블</h2>
<table>
<?php
	for ($a = -10; $a<=980;){

		$a=$a+10;
		
		echo "<tr>";
		for ($b=0; $b<=9; $b++){
			$c=$a+$b;
			$k=$c/10;
			$g=$k/10;
			if ($c%3==0){
				echo "<td style='background-color:cyan;'><span>$c</span></td>";
			}			
			elseif(($c%10==3) ||($c%10==6)||($c%10==9)){
					echo "<td style='background-color:yellow;'><a>$c</a></td>";
					}
			elseif(($k%10==3) ||($k%10==6)||($k%10==9)){
					echo "<td style='background-color:yellow;'><a>$c</a></td>";
					}
			elseif (($g%10==3) ||($g%10==6)||($g%10==9)){
					echo "<td style='background-color:yellow;'><a>$c</a></td>";
					}	
			else
					echo "<td>$c</td>";
						

			}
	echo "</tr>";
	}
	

?>
</table>
	