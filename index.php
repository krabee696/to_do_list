<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Список дел</h1>
        <form action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Ввод задачи" class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
        </form>
    </div>

    <?php
    require 'configdb.php';
    $query = $pdo -> query('SELECT * FROM `tasks` ORDER BY `id` DESC');
    echo '<ul>';
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>X</button></a></li>';
    }

    echo '</ul>';
    ?>
</body>

</html>