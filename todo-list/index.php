<?php
include 'db.connexion.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma liste</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body>
    <div class="container">
        <h1>Ma liste</h1>
        <div class="todo">
            <form action="data.php" method="get" class="form_todo">
                <input type="text" id="todo-data" name="todo-data" />
                <input type="hidden" name="action" value="add" />
            </form>
            <table class="result">
                <?php
                $req = mysqli_query($conn, 'SELECT * FROM todolist ORDER BY todo;');

                while ($row = mysqli_fetch_object($req)) {
                    echo '<tr>';
                    echo '<td><p>' . $row->todo . ' </p></td>';
                    echo '<td><a class="edit" href="edit.php?id=' . $row->id . '">Modifier</a></td>';
                    echo '<td><a class="delete" href="data.php?action=delete&id=' . $row->id . '">Supprimer</a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>