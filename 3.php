<!doctype html>
	<html>
	<head>
	</head>
	<body>
    <form method="post">
    <input type="number" name="number">
    <input type="submit" name="submit">
    </form>
    <?php
    	if(isset($_POST['submit']))
    	{
    		$number=$_POST['number'];
    		$n=$number;
    		$sum=0;
    		$rem=0;
    		while($n>0)
    		{
    			$rem=$n%10;
    			$sum=$sum+$rem;
    			$n=$n/10;
    		}
    		echo "Reverse of the given number is :".strrev($number);
    		echo "<br/>Sum of the given Number is :".$sum;
    	?>
    	<br/>
       	<?php
    		if($number==strrev($number))
    			echo "It is a Palindrome";
    		else
    			echo "Not Palindrome";
    	}
    ?>
	</body>
	</html>


