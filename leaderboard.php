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
  <title>Leaderboard</title>
</head>

<body>
  <pre>
  <?php
  $data = fopen("scores.txt", "r");
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
      <caption>High Scores</caption>
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
      <td style="color: white"><a href="">Return Home</a> </td>
    </table>
  </div>

</body>

</html>