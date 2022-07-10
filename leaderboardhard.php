<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <style>
    @font-face {
      font-family: retroFont;
      src: url(PressStart2P-vaV7.ttf);
    }

    body {
      font-family: retroFont;
    }
  </style>
  <link rel="stylesheet" href="styleLeaderboard.css">
  <title>Leaderboard Easy</title>
</head>

<body>
  <pre>
  <?php
  if (isset($_SESSION["final_score"])) {
    //append playername and finalscore to easyscores.txt
    file_put_contents("hardscores.txt", "\n" . $_SESSION['player_name'] . "," . $_SESSION['final_score'], FILE_APPEND);
  }

  $data = fopen("hardscores.txt", "r");
  $scores = array();

  while (!feof($data)) {
    $line = fgets($data);
    $lineData = explode(",", $line);
    $scores[$lineData[0]] = $lineData[1];
  }

  asort($scores, SORT_NUMERIC);

  ?>
  </pre>

  <table>
    <tr>
      <caption>High Scores - Hard Level</caption>
      <th>Rank</th>
      <th>Name</th>
      <th>Score</th>
    </tr>
    <?php
    $rank = 1;
    foreach ($scores as $name => $score) {
      echo ("
          <tr>
            <td>$rank</td>
            <td>$name</td>
            <td>$score</td>
          </tr>
        ");
      $rank++;
      if ($rank > 10) {
        break;
      }
    }
    ?>
  </table>

  <div id="button" class="HomeButton">
    <table>
      <td style="color: white"><a href="index.php">Return Home</a> </td>
    </table>
  </div>

</body>

</html>