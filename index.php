<?php

  require_once(__DIR__ . '/Stanza.php');

  $rooms = [
    [
      'roomNumber' => 101,
      'floor' => 1,
      'beds' => 1,
      'createdAt' => '01-01-2000',
      'updatedAt' => '10-10-2010'
    ],
    [
      'roomNumber' => 201,
      'floor' => 2,
      'beds' => 2,
      'createdAt' => '01-01-2000',
      'updatedAt' => '10-10-2010'
    ],
    [
      'roomNumber' => 301,
      'floor' => 3,
      'beds' => 3,
      'createdAt' => '01-01-2000',
      'updatedAt' => '10-10-2010'
    ],
  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php foreach ($rooms as $room) {
      $camera = new Stanza($room['roomNumber'], $room['floor'], $room['beds'], $room['createdAt'], $room['updatedAt']);
    ?>
    <ul>
      <li>Numero stanza : <?php echo $camera->getRoomNumber() ?></li>
      <li>Piano : <?php echo $camera->getFloor() ?></li>
      <li>Letti : <?php echo $camera->getBeds() ?></li>
      <li>Creata il : <?php echo $camera->created_at ?></li>
      <li>Aggiornata il : <?php echo $camera->updated_at ?></li>
    </ul>
    <?php } ?>

  </body>
</html>
