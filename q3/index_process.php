<?php
  // CSCI 4000
  // Dr. Leong Lee
  // Richard Davis
  // Assignment 1

  // get data from form via get
  $power = $_GET['power_level'];

  // decide po's metric based on power level
  if ($power < 0) {
    $metric = "Po eats too much noodle";
  } elseif ($power >= 0 && $power <= 200) {
    $metric = "Po reaches the training hall";
  }  elseif ($power >= 201 && $power <= 400) {
    $metric = "Po reaches the student barracks";
  } elseif ($power >= 401 && $power <= 600) {
    $metric = "Po reaches the Peach Tree of Heavenly Wisdom";
  } elseif ($power >= 601 && $power <= 800) {
    $metric = "Po climbs the Wu Da Mountains";
  } elseif ($power >= 801 && $power <= 1000) {
    $metric = "Po trains at the Pool of Sacred Tears";
  } else {
    $metric = "Po defeats Tai Lung";
  }
?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>Richard Davis's Kung Fu Panda Po Power Level</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Richard Davis's Kung Fu Panda Po Power Level</h1>
    </header>
    <section>
      <h3>This page will prompt Richard Davis for Kung Fu Panda Po's power
          level (in number). The program will convert the given input into
          Po's power metric.</h3>
      <p>Less than 0: Po eats too much noodle</p>
      <p>0 to 200: Po reaches the training hall</p>
      <p>201 to 400: Po reaches the student barracks</p>
      <p>401 to 600: Po reaches the Peach Tree of Heavenly Wisdom</p>
      <p>601 to 800: Po climbs the Wu Da Mountains</p>
      <p>801 to 1000: Po trains at the Pool of Sacred Tears</p>
      <p>Greater than 1000: Po defeats Tai Lung</p>
      <!-- displays the entered power level and the corresponding metric -->
      <h4>Po's power level is <?php echo htmlspecialchars($power) ?>.</h4>
      <h4><?php echo htmlspecialchars($metric); ?>.</h4>
      <a href="index.htm">Go back</a>
    </section>
  </body>
</html>
