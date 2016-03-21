<?php
  // CSCI 4000
  // Dr. Leong Lee
  // Richard Davis
  // Assignment 1

  // get data from form via get
  $age = $_GET['age'];

  // decide ticket price based on age
  if ($age < 5) {
    $cost = 2.00;
  } elseif ($age >= 5 && $age <= 15) {
    $cost = 6.00;
  } else {
    $cost = 8.00;
  }
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
      <h3>This page will decide the cost of Richard's soccer ticket price based on his age.</h3>
      <ul>
        <li>Under age 5 (age &lt; 5) cost is $2.00</li>
        <li>Between ages 5 and 15 (5 &gt;= age &lt;= 15) cost is $6.00</li>
        <li>Older than 15 (age &gt; 15) cost is $8.00</li>
      </ul>
      <!-- displays age entered and the calculated ticket price -->
      <h4>Richard is <?php echo htmlspecialchars($age); ?> years old, and the cost of Richard's ticket is $<?php echo number_format($cost, 2); ?></h4>
      <a href="index.htm">Go back</a>
    </section>
  </body>
</html>
