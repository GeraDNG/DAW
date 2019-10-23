<?php

  $students = [
    ["name" => "Gerardo", "lastName" => "Naranjo"],
    ["name" => "Randy",   "lastName" => "Jiménez"],
    ["name" => "Lalo",    "lastName" => "Hernández"],
    ["name" => "Marco",   "lastName" => "García"],
  ];
  $students[0]["lastName"];

  $studentsAssociative = [
    "A01209499" => ["name" => "Gerardo", "lastName" => "Naranjo"],
    "A01371447" => ["name" => "Randy",   "lastName" => "Jiménez"],
    "A01324543" => ["name" => "Lalo",    "lastName" => "Hernández"],
    "A01700469" => ["name" => "Marco",   "lastName" => "García"],
  ];
  $studentsAssociative["A01209499"]["lastName"];

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Example 3 PHP</title>
  </head>
  <body>

    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>lastName</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($studentsAssociative as $key => $student) { ?>
          <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["lastName"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <br />

    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>lastName</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($studentsAssociative as $key => $student) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>" . $student["name"] . "</td>";
            echo "<td>" . $student["lastName"] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
