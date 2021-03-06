<?php
session_start();

if (!isset($_SESSION["player_name"])) {
    $_SESSION["player_name"] = $_POST["player_name"];
}
if (isset($_SESSION["counter"])) {
    unset($_SESSION["counter"]);
    unset($_SESSION["time_start"]);
    unset($_SESSION["time_end"]);
    unset($_SESSION["num"]);
    unset($_SESSION["text"]);
    unset($_SESSION["ongoing"]);
    unset($_SESSION["time"]);
    unset($_SESSION["final_score"]);
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <title>KeyFinder</title>
</head>

<body>
    <div class="main-menu">
        <div>Logged in as: <?php echo $_SESSION["player_name"] ?></div>
        <h1>KeyFinder</h1>
        <h2>Find the key!</h2>
        <div>
            <div>Select a difficulty:</div>
            <div>
                <a href="level1.php" style="text-decoration: none;">
                    <button>Easy</button>
                </a>
                <a href="level2.php" style="text-decoration: none;">
                    <button>Medium</button>
                </a>
                <a href="level3.php" style="text-decoration: none;">
                    <button>Hard</button>
                </a>
            </div>
        </div>
    </div>
    <div>
        <form method="post" action="logout.php">
            <input type="submit" name="logout" value="Log Out" />
        </form>
    </div>
</body>

</html>