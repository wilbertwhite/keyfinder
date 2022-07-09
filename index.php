<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <title>KeyFinder</title>
</head>

<body>
    <?php
    $_SESSION["player_name"] = $_POST["player_name"];
    ?>
    <div class="main-menu">
        <div>Logged in as: <?php echo $_SESSION["player_name"] ?></div>
        <h1>KeyFinder</h1>
        <h2>Find the key!</h2>
        <div>
            <div>Select a difficulty:</div>
            <div>
                <a href="#" style="text-decoration: none;">
                    <button>Easy</button>
                </a>
                <a href="#" style="text-decoration: none;">
                    <button>Medium</button>
                </a>
                <a href="#" style="text-decoration: none;">
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