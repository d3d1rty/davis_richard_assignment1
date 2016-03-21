<?php
  // get data from from via post
  $v_type = $_POST['vehicle_type'];
  $color = $_POST['color'];
  $year = $_POST['year'];
  $make = $_POST['make'];
  $model = $_POST['model'];
?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>Richard Davis's Vehicle Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Richard Davis's Vehicle</h1>
    </header>
    <section>
      <h3>This page displays information of Richard Davis's dream 
      vehicle</h3>
      <ul>
        <li>
          <span class="items">Vehicle Type:</span>
          <span  class="values"><?php echo htmlspecialchars($v_type); ?></span>
          <br>
        </li>
        <li>
          <span class="items">Color:</span>
          <span class="values"><?php echo htmlspecialchars($color); ?></span>
          <br>
        </li>
        <li>
          <span class="items">Year:</span>
          <span class="values"><?php echo htmlspecialchars($year); ?></span>
          <br>
        </li>
        <li>
          <span class="items">Make:</span>
          <span class="values"><?php echo htmlspecialchars($make); ?></span>
          <br>
        </li>
        <li>
          <span class="items">Model:</span>
          <span class="values"><?php echo htmlspecialchars($model); ?></span>
          <br>
        </li>
      </ul>
      <a href="index.htm">Go back</a>
    </section>
  </body>
</html>
