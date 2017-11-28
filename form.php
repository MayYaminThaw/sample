<?php 

	if($_POST['submit'])
	{
		$char=$_POST['char'];
		

		$marr=array(၀,၁,၂,၃,၄,၅,၆,၇,၈,၉);

		$arr=str_split($char);

		for($a=0;$a<count($arr);$a++)
		{
			$str.=$marr[$arr[$a]];
		}
		print $str;
		
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sample Form</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="POST">
		Char
		<input type="text" name="char">
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>