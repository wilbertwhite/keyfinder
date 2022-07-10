<?php
session_start();
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

$time_start = microtime(true);
if(!isset($_SESSION['time_start']))
{
	$_SESSION['time_start'] = $time_start;
}		
?>
<!DOCTYPE html>
<html>
<head>
<title>KeyFinder LVL3</title>
<link rel="stylesheet" href="prj_1stysheet.css">
</head>
<body>
	<div class=container>
		<img src="thirdlevel.png">
		<form method="post">
			<!---nightstand top floor next to bed--->
			<input class="btn8" type="submit" name="button8"
				   value="Button8" />
			<!---Speaker on top bookshelf--->
			<input class="btn9" type="submit" name="button9"
				   value="Button9" />
			<!---coffe mug far left--->
			<input class="btn10" type="submit" name="button10"
				   value="Button10" />
			<!---Washing machine on bottom floor--->
			<input class="btn11" type="submit" name="button11"
				   value="Button11" />
			<!---Laundry basket on bottom floor--->
			<input class="btn12" type="submit" name="button12"
				   value="Button12" />
		</form>
	</div>
    <div>
        <h1 class=leftsidepadding>Riddle:</h1>
        <?php
		if(!isset($_SESSION['num']))
		{ 
			$_SESSION['num'] = rand(1, 5);
		}
		else
		{
			$num = $_SESSION['num'];
		}
		if(!isset($_SESSION['text']))
		{
			if($_SESSION['num'] == 1)
			{
				$_SESSION['text'] = "I stay near your dreams.<br>
					Keep the light near when you need it.<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
			else if($_SESSION['num'] == 2)
			{
				$_SESSION['text'] = "There are two of me here<br>
					and people love listening to me<br>
					I hate the public,<br>
					and prefer to be alone with you.<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
			else if($_SESSION['num'] == 3)
			{
				$_SESSION['text'] = "I can be roasted but I’m not a turkey<br>
					I can be ground but I’m not pepper<br>
					I can be pressed but I’m not a button<br>
					I can be brewed but I’m not beer<br>
					I’m a bean but I’m not magic<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
			else if($_SESSION['num'] == 4)
			{
				$_SESSION['text'] = "You put dry things<br>
					and the exit out wet.<br>					
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
			else 
			{
				$_SESSION['text'] = "You discard things made of fabric into me<br>
					and I am hidden from view as well.<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
		}
		else
		{
			$text = $_SESSION['text'];
			echo "<h1 class=leftsidepadding>".$text ."</h1>" ;
		}
		
		if($_SESSION['num'] == 1)
		{
			if(array_key_exists('button8', $_POST)) 
			{
				button1();
			}
			else if(array_key_exists('button9', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button10', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button11', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button12', $_POST))
			{
				button2();
			}
		}
		else if($_SESSION['num'] == 2)
		{
			if(array_key_exists('button8', $_POST)) 
			{
				button2();
			}
			else if(array_key_exists('button9', $_POST))
			{
				button3();
			}
			else if(array_key_exists('button10', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button11', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button12', $_POST))
			{
				button2();
			}
		}
		else if($_SESSION['num'] == 3)
		{
			if(array_key_exists('button8', $_POST)) 
			{
				button2();
			}
			else if(array_key_exists('button9', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button10', $_POST))
			{
				button4();
			}
			else if(array_key_exists('button11', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button12', $_POST))
			{
				button2();
			}
		}
		else if($_SESSION['num'] == 4)
		{
			if(array_key_exists('button8', $_POST)) 
			{
				button2();
			}
			else if(array_key_exists('button9', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button10', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button11', $_POST))
			{
				button5();
			}
			else if(array_key_exists('button12', $_POST))
			{
				button2();
			}
		}
		else
		{
			if(array_key_exists('button8', $_POST)) 
			{
				button2();
			}
			else if(array_key_exists('button9', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button10', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button11', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button12', $_POST))
			{
				button6();
			}
		}
		
		function button1() {
			echo "<h3 class=leftsidepadding>You found it!</h3>";
			$_SESSION['time_end'] = microtime(true);
		}
		function button2() {
			echo "<h3 class=leftsidepadding>Better luck next time!</h3>";
			++$_SESSION['counter'];
			$_SESSION['time_end'] = microtime(true);
		}
		function button3() {
			echo "<h3 class=leftsidepadding>So SMART!</h3>";
			$_SESSION['time_end'] = microtime(true);		
		}	
		function button4() {
			echo "<h3 class=leftsidepadding>You did it!</h3>";
			$_SESSION['time_end'] = microtime(true);
		}
		function button5() {
			echo "<h3 class=leftsidepadding>Such talent!</h3>";
			$_SESSION['time_end'] = microtime(true);
		}
		function button6() {
			echo "<h3 class=leftsidepadding>Amazing!</h3>";
			$_SESSION['time_end'] = microtime(true);
		}
		
		if(!isset($_SESSION['time_end']))
		{
			$_SESSION['time_end'] = 0;
		}
		else
		{
			$_SESSION['time'] = (int)($_SESSION['time_end'] - $_SESSION['time_start']);
			echo "<h3 class=leftsidepadding>Score: ".($_SESSION['time']*100). "</h3>";
		}
		
		echo "<br><h5 class=leftsidepadding>Number of unsuccesful attempts: ".$_SESSION['counter']."</h5>";
		
		if(isset($_SESSION['time']))
		{
			$_SESSION['final_score']= ($_SESSION['time']+($_SESSION['counter']*5))*100;
			echo "<h3 class=leftsidepadding>Final Score: ".$_SESSION['final_score']. "</h3>";
		}
        ?>
    </div>
	<button type="button" class=HomeButton onclick="alert('Home')">Home</button>
</body>
</html>