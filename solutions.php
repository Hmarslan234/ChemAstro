<html>
<body>
<form action="" method="post">
First Value:
<input type="text" name="no1"><br>
Second Value :
<input type="text" name="no2"><br>
<input type="submit" name="submit" value="SUM "><br>
</form>
</body>
</html>
<?php
$sum="";
if(isset($_POST['submit']))
{
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$sum=$no1+$no2;
	
}
?>
Result:<input type="text" value="<?php echo $sum; ?>">