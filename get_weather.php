<html>
<head>
    <meta charset="UTF-8">
	<title>수도권 날씨예보</title>
</head>
<style>
	
</style>
<body>

<?php
	
	
	if (empty($city)){
	$city="과천";
	echo "<h3>";
	echo $city;
	echo "의 날씨</h3>";
	
	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from weather where city='$city'";
	$result=mysqli_query($con, $sql);
	$city_name=mysqli_fetch_array($result);
	

	echo "최고 기온 {$city_name[2]}도<br>";
	echo "최저 기온 {$city_name[3]}도<br>";
	echo "비올 확률 {$city_name[4]}%<br>";
	echo "예상 강수량 {$city_name[5]}mm<br>";}
	
	
	else {
		$city = $_POST['city'];
	echo "<h3>";
	echo $city;
	echo "의 날씨</h3>";
	
	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from weather where city='$city'";
	$result=mysqli_query($con, $sql);
	$city_name=mysqli_fetch_array($result);
	

	echo "최고 기온 {$city_name[2]}도<br>";
	echo "최저 기온 {$city_name[3]}도<br>";
	echo "비올 확률 {$city_name[4]}%<br>";
	echo "예상 강수량 {$city_name[5]}mm<br>";}

		
	

?>
</body>
</html>