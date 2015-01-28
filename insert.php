<?php
	$con = mysqli_connect('localhost', 'root', '1234', 'test1');
	$name=$_POST["name"];
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$message=$_POST["message"];
	var_dump($_POST);

	if(mysqli_connect_errno())
	{
		echo "Connection attempt unsuccessful!!!";
	}
	else
	{

		mysqli_query($con,"INSERT INTO `test1`.`message1` (`name`, `email`, `subject`, `message`) VALUES ('vai', 'abcabc', 'abc', 'abc');");

		$res=mysqli_query($con,"SELECT * FROM message1");
		echo "hello<br>";
		while($arr=mysqli_fetch_assoc($res))
		{
			$l=$arr["link"];
			echo $arr["description"];
			echo '<div id="link"><a href="$l">'.$l."</a>";
			echo '<div id="by">By: '.$arr["username"];
			echo '<div id="time">'.$arr["time"];
		}

	}
?>