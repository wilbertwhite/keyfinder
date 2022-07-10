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
<title>KeyFinder LVL2</title>
<link rel="stylesheet" href="prj_1stysheet.css">
</head>
<body>
    <div class=container>
        <img class=lvl2 src="secondlevel.png">
        <form method="post">
			<!---Flower vase far left--->
            <input class="btn4" type="submit" name="button4"
                   value="Button1" />
			<!---Glove on lower floor shelf on right--->
            <input class="btn5" type="submit" name="button5"
                   value="Button5" />
			<!---Eletrical box bottom floor--->
            <input class="btn6" type="submit" name="button6"
                   value="Button6" />
			<!---speaker in bookshelf top floor--->
            <input class="btn7" type="submit" name="button7"
                   value="Button7" />
				   <!---Button for entire image--->
            <input class="btn13" type="submit" name="button13"
                   value="Button13" />
        </form>
    </div>
    <div>
        <h1 class=leftsidepadding>Riddle:</h1>
        <?php
		if(!isset($_SESSION['num']))
		{ 
			$_SESSION['num'] = rand(1, 4);
		}
		else
		{
			$num = $_SESSION['num'];
		}
		if($_SESSION['num'] == 1)
			{
				$_SESSION['text'] = "I’m made of glass but I don’t have people drinking out of me<br>
					I come in different shapes but I’m not a car<br>
					I have water put in me but I’m not a bath<br>
					I’m often seen on Valentine’s Day but I’m not a box of chocolates<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
			else if($_SESSION['num'] == 2)
			{
				$_SESSION['text'] = "Thieves who break into people’s homes<br>
					Don’t ever want to leave a trace,<br>
					So they might wear these on their hands,<br>
					So prints aren’t left for a police case,<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
			else if($_SESSION['num'] == 3)
			{
				$_SESSION['text'] = "I go out when a flash strikes, <br>
					and you have to visit me to get back on.<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
			else 
			{
				$_SESSION['text'] = "I am on when people party <br>
					and the neighbors hate me in the middle of the night.<br>
					What am I?";
				echo "<h3 class=leftsidepadding>".$_SESSION['text'] ."</h3>" ;
			}
		}
		else
		{
			$text = $_SESSION['text'];
			echo "<h3 class=leftsidepadding>".$text ."</h3>" ;
		}
		
		if($_SESSION['num'] == 1)
		{
			if(array_key_exists('button4', $_POST)) 
			{
				button1();
			}
			else if(array_key_exists('button5', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button6', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button7', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button13', $_POST))
			{
				button2();
			}
		}
		else if($_SESSION['num'] == 2)
		{
			if(array_key_exists('button4', $_POST)) 
			{
				button2();
			}
			else if(array_key_exists('button5', $_POST))
			{
				button3();
			}
			else if(array_key_exists('button6', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button7', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button13', $_POST))
			{
				button2();
			}
		}
		else if($_SESSION['num'] == 3)
		{
			if(array_key_exists('button4', $_POST)) 
			{
				button2();
			}
			else if(array_key_exists('button5', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button6', $_POST))
			{
				button4();
			}
			else if(array_key_exists('button7', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button13', $_POST))
			{
				button2();
			}
		}
		else if($_SESSION['num'] == 4)
		{
			if(array_key_exists('button4', $_POST)) 
			{
				button2();
			}
			else if(array_key_exists('button5', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button6', $_POST))
			{
				button2();
			}
			else if(array_key_exists('button7', $_POST))
			{
				button5();
			}
			else if(array_key_exists('button13', $_POST))
			{
				button2();
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