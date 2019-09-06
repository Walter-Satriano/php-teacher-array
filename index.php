<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher&pm</title>
    <link rel="stylesheet" href="style.css">

    <!-- Utilizzare questo array: https://pastebin.com/CkX3680A
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
    e i PM in un rettangolo verde. -->

    <?php

      $db = [
        'teachers' => [
          [
            'name' => 'Michele',
            'lastname' => 'Papagni'
          ],
          [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
          ]
        ],

        'pm' => [
          [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
          ],
          [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
          ]
        ]
      ];

    ?>

  </head>
  <body>

    <div class="container">

      <div class="teachers">
        <?php

          foreach ($db as $type => $people) {

            if ($type == "teachers") {
              echo $type . "<br><br>";

              foreach ($people as $person) {

                $name = $person["name"];
                $lastname = $person["lastname"];

                echo $name . " " . $lastname . "<br>";
              }
            }
          }
        ?>
      </div>

      <div class="pm">
        <?php

          foreach ($db as $type => $people) {

            if ($type == "pm") {
              echo $type . "<br><br>";

              foreach ($people as $person) {

                $name = $person["name"];
                $lastname = $person["lastname"];

                echo $name . " " . $lastname . "<br>";
              }
            }
          }
        ?>
      </div>

    </div>
  </body>
</html>
