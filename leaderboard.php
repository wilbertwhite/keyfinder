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

  print_r($scores);
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
      <td>Name 1</td>
      <td>Score 1</td>
    </tr>

    <tr>
      <td>2</td>
      <td>Name 2</td>
      <td>Score 2</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Name 3</td>
      <td>Score 3</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Name 4</td>
      <td>Score 4</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Name 5</td>
      <td>Score 5</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Name 6</td>
      <td>Score 6</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Name 7</td>
      <td>Score 7</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Name 8</td>
      <td>Score 8</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Name 9</td>
      <td>Score 9</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Name 10</td>
      <td>Score 10</td>
    </tr>
  </table>

  <div id="button" class="HomeButton">
    <table>
      <td style="color: white"><a href="">Return Home</a> </td>
    </table>
  </div>

</body>

</html>