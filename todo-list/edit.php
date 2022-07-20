<?php
include 'db.connexion.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit.php</title>
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
</head>

<body>
    <div class="container">
        <h1>Modifier</h1>
        <div class="todo-edit">
            <?php
            $req = mysqli_query($conn, 'SELECT * FROM todolist WHERE id=' . $_GET['id']);

            while ($row = mysqli_fetch_object($req)) {

                echo '<form action="data.php" method="get" class="form-edit">';
                echo '<input type="text" id="edit" name="edit" value="' . $row->todo . '">';
                echo '<input type="hidden" name="action" value="update" >';
                echo '<input type="hidden" name="id" value="' . $_GET['id'] . '">';
                echo '</form>';
            }

            ?>
        </div>
    </div>
</body>

</html>