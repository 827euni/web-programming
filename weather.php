<html>
<head>
    <meta charset="UTF-8">
	<title>수도권 날씨예보</title>

	
</head>

		
<body>
<?php
$city="과천";
?>

<h3>수도권 날씨예보</h3>
<?php
$city='과천';
?>
<form name="get" method="post" onload="form.submit()">

<select autofocus name="city" onload="this.form.submit()"; onchange="this.form.submit()">
<?php
$city = $_POST['city'];
?>
	<option value="과천" <?php if($city == '과천'){echo("selected");}?>>과천</option>
	<option value="서울" <?php if($city == '서울'){echo("selected");}?>>서울</option>
	<option value="성남" <?php if($city == '성남'){echo("selected");}?>>성남</option>
	<option value="수원" <?php if($city == '수원'){echo("selected");}?>>수원</option>
	<option value="용인" <?php if($city == '용인'){echo("selected");}?>>용인</option>
	<option value="인천" <?php if($city == '인천'){echo("selected");}?>>인천</option>
</select>
의 날씨는?

<?php include "get_weather.php";?>
</form>



		
	
	


</body>
</html>