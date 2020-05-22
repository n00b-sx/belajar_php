<?php
// pengulangan
// for
// while
// do while
// foreach : pengulangan khusus array

// for ($i = 0; $i < 5; $i++) {
//   echo "Hello Wordl! <br>";
// }
// $i = 0;
// while ($a < 5) {
//   echo "Hello World! <br>";

//   $i++;
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <!-- pembuatan tabel pakai for -->
  <!-- <table border="1" cellpadding="10" cellspacing="0">
    <?php //for ($i = 1; $i <= 3; $i++) : 
    ?>
      <tr>
        <?php //for ($j = 1; $j <= 5; $j++) : 
        ?>
          <td><? //= $i, $j; 
              ?></td>
        <?php //endfor; 
        ?>
      </tr>
    <?php //endfor; 
    ?>
  </table> -->

  <!-- Membuat segitiga pakai for -->
  <?php
  $genap = 10;
  for ($i = 0; $i < $genap; $i++) {
    echo $i * 2 . ", ";
  }
  ?>



</body>

</html>