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
  asort($scores);
  $lbName = array();
  $lbScore = array();
  foreach($scores as $x => $x_value) {
    array_push($lbName,$x);
    array_push($lbScore,$x_value);
  }
?>



  </pre>
  <table>
    <tr>
      <caption>High Score</caption>
      <th>Rank</th>
      <th>Name</th>
      <th>Score</th>
    </tr>
    <tr>
      <td>1</td>
      <td><?php echo $lbName[0]; ?></td>
      <td><?php echo $lbScore[0]; ?></td>
    </tr>

    <tr>
      <td>2</td>
      <td><?php echo $lbName[1]; ?></td>
      <td><?php echo $lbScore[1]; ?></td>
    </tr>
    <tr>
      <td>3</td>
      <td><?php echo $lbName[2]; ?></td>
      <td><?php echo $lbScore[2]; ?></td>
    </tr>
    <tr>
      <td>4</td>
      <td><?php echo $lbName[3]; ?></td>
      <td><?php echo $lbScore[3]; ?></td>
    </tr>
    <tr>
      <td>5</td>
      <td><?php echo $lbName[4]; ?></td>
      <td><?php echo $lbScore[4]; ?></td>
    </tr>
    <tr>
      <td>6</td>
      <td><?php echo $lbName[5]; ?></td>
      <td><?php echo $lbScore[5]; ?></td>
    </tr>
    <tr>
      <td>7</td>
      <td><?php echo $lbName[6]; ?></td>
      <td><?php echo $lbScore[6]; ?></td>
    </tr>
    <tr>
      <td>8</td>
      <td><?php echo $lbName[7]; ?></td>
      <td><?php echo $lbScore[7]; ?></td>
    </tr>
    <tr>
      <td>9</td>
      <td><?php echo $lbName[8]; ?></td>
      <td><?php echo $lbScore[8]; ?></td>
    </tr>
    <tr>
      <td>10</td>
      <td><?php echo $lbName[9]; ?></td>
      <td><?php echo $lbScore[9]; ?></td>
    </tr>
  </table>

  <div id="button" class="HomeButton">
    <table>
      <td style="color: white"><a href="">Return Home</a> </td>
    </table>
  </div>

</body>

</html>