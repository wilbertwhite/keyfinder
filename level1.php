<?php
session_start();
if (!isset($_SESSION['counter'])) {
	$_SESSION['counter'] = 0;
}

$time_start = microtime(true);
if (!isset($_SESSION['time_start'])) {
	$_SESSION['time_start'] = $time_start;
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>KeyFinder LVL1</title>
	<link rel="stylesheet" href="prj_1stysheet.css">
</head>

<body>
	<div class=container>
		<img src="firstlevel.png">
		<form method="post">
			<input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
			<!---Fruits on table--->
			<input class="btn1" type="submit" name="button1" value="Button1" />
			<!---Mirror on wall--->
			<input class="btn2" type="submit" name="button2" value="Button2" />
			<!---Curtain on the far right--->
			<input class="btn3" type="submit" name="button3" value="Button3" />
			<!---Button for entire image--->
			<input class="btn13" type="submit" name="button13" value="Button13" />
		</form>
	</div>
	<div>
		<h1 class=leftsidepadding>Riddle:</h1>
		<?php
		$_SESSION['ongoing'] = true;
		if (!isset($_SESSION['num'])) {
			$_SESSION['num'] = rand(1, 3);
		} else {
			$num = $_SESSION['num'];
		}
		if (!isset($_SESSION['text'])) {
			if ($_SESSION['num'] == 1) {
				$_SESSION['text'] = "I am round and grow on trees. <br>
					I am red or green. <br>
					What am I?";
				echo "<h3 class=leftsidepadding>" . $_SESSION['text'] . "</h3>";
			} else if ($_SESSION['num'] == 2) {
				$_SESSION['text'] = "Look in my face and I am someone, <br>
					Look in my back I am no one.<br>
					What am I?";
				echo "<h3 class=leftsidepadding>" . $_SESSION['text'] . "</h3>";
			} else {
				$_SESSION['text'] = "I get hung but I’m not a piece of art<br>
					I’m found in a house but I’m not a picture frame<br>
					I’m made of fabric but I’m not a shirt<br>
					I block light but I’m not an eclipse<br>
					What am I?";
				echo "<h3 class=leftsidepadding>" . $_SESSION['text'] . "</h3>";
			}
		} else {
			$text = $_SESSION['text'];
			echo "<h3 class=leftsidepadding>" . $text . "</h3>";
		}

		if ($_SESSION['num'] == 1) {
			if (array_key_exists('button1', $_POST)) {
				$_SESSION['ongoing'] = false;
				button1();
			} else if (array_key_exists('button2', $_POST)) {
				button2();
			} else if (array_key_exists('button3', $_POST)) {
				button2();
			} else if (array_key_exists('button13', $_POST)) {
				button2();
			}
		} else if ($_SESSION['num'] == 2) {
			if (array_key_exists('button1', $_POST)) {
				button2();
			} else if (array_key_exists('button2', $_POST)) {
				$_SESSION['ongoing'] = false;
				button3();
			} else if (array_key_exists('button3', $_POST)) {
				button2();
			} else if (array_key_exists('button13', $_POST)) {
				button2();
			}
		} else if ($_SESSION['num'] == 3) {
			if (array_key_exists('button1', $_POST)) {
				button2();
			} else if (array_key_exists('button2', $_POST)) {
				button2();
			} else if (array_key_exists('button3', $_POST)) {
				$_SESSION['ongoing'] = false;
				button4();
			} else if (array_key_exists('button13', $_POST)) {
				button2();
			}
		}

		function button1()
		{
			echo "<h3 class=leftsidepadding>You found it!</h3>";
			$_SESSION['time_end'] = microtime(true);
		}
		function button2()
		{
			echo "<h3 class=leftsidepadding>Better luck next time!</h3>";
			++$_SESSION['counter'];
			$_SESSION['time_end'] = microtime(true);
		}
		function button3()
		{
			echo "<h3 class=leftsidepadding>So SMART!</h3>";
			$_SESSION['time_end'] = microtime(true);
		}
		function button4()
		{
			echo "<h3 class=leftsidepadding>You did it!</h3>";
			$_SESSION['time_end'] = microtime(true);
		}

		if (!isset($_SESSION['time_end'])) {
			$_SESSION['time_end'] = 0;
		} else {
			$_SESSION['time'] = (int)($_SESSION['time_end'] - $_SESSION['time_start']);
			echo "<h3 class=leftsidepadding>Score: " . ($_SESSION['time'] * 100) . "</h3>";
		}

		echo "<br><h5 class=leftsidepadding>Number of unsuccesful attempts: " . $_SESSION['counter'] . "</h5>";

		if ($_SESSION['ongoing'] == false) {
			if (isset($_SESSION['time'])) {
				$_SESSION['final_score'] = ($_SESSION['time'] + ($_SESSION['counter'] * 5)) * 100;
				echo "<h3 class=leftsidepadding>Final Score: " . $_SESSION['final_score'] . "</h3>";
			}
		}
		?>
	</div>
	<button type="button" class=HomeButton><a href="index.php">Home</a></button>
</body>

</html>