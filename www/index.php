 <?php

// $connect = mysqli_connect(
//    'db',
//    'gerardo',
//    'password',
//    'php_docker'
// );

// if (!$connect) {
   // die("Connection failed: " . mysqli_connect_error());
// }

//  $table_name = "test_table";

//  $query = "SELECT * FROM $table_name";

//  if($response = mysqli_query($connect, $query)){
//     echo "<strong>$table_name: </strong>";
//     while ($row = mysqli_fetch_assoc($response)){
//         echo "<p>" . htmlspecialchars($row['title']) . "</p>";
//         echo "<p>" . htmlspecialchars($row['body']) . "</p>";
//         echo "<p>" . htmlspecialchars($row['date_created']) . "</p>";
//         echo "<hr>";
//     }
//     mysqli_free_result($response);
//  } else {
//     echo "Error: " . $query . "<br>" . mysqli_error($connect);
//  }

// mysqli_close($connect);
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Computacion en el servidor web</title>
   <link rel="stylesheet" href="css/styles.css">
</head>

<body>
   <?php include 'partials/navigation.php'; ?>
   <div class="container">
      <?php
      if (isset($_GET['content'])) {
         switch ($_GET['content']) {
            case 'control-structures':
               include 'partials/control-structures.php';
               break;
            case 'function':
               include 'partials/function.php';
               break;
            case 'array':
               include 'partials/array.php';
               break;
            default:
               include 'partials/home.php';
         }
      } else {
         // Si no se ha seleccionado ningún contenido, muestra la página de inicio o contenido por defecto
         include 'partials/home.php';
      }
      ?>
   </div>
   <?php include 'partials/footer.php'; ?>
</body>

</html>