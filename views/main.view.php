<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Задачник</a>
            <?php
                if(isset($_SESSION["is_auth"])) {
                    print_r($_SESSION);
                    echo "<span class='navbar-text'>Вы вошли как <span class='text-light'></span></span>";
                }
                else
                    include_once VIEW_PATH . "login.layout.php";
            ?>
        </div>
    </nav>
</header>
<main>
    <form class="container" action="/create" method="get">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="row mt-3">
                    <div class="col-6 form-group">
                        <label for="task-email">E-Mail</label>
                        <input class="form-control" id="task-email" name="task-email" type="email" placeholder="example@gmail.com">
                    </div>
                    <div class="col-6">
                        <label for="task-name">Имя</label>
                        <input class="form-control" id="task-name" name="task-username" type="text" placeholder="Алексей">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="task-text">Описание задачи</label>
                        <textarea class="form-control" id="task-text" name="task-text" rows="3"></textarea>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark">Создать</button>
                    </div>
                    <hr class="mt-3">
                </div>
            </div>
        </div>
    </form>
    <section class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <nav>
                    <ul class="pagination">
<!--                        <li class="page-item"><a class="page-link text-light bg-dark" href="#">Назад</a></li>-->
                        <?php
                            for($i = 1; $i < $page_data["pages_count"] + 1; $i++)
                                echo "<li class='page-item'><a class='page-link text-light bg-dark' href='/?page=$i'>$i</a></li>";
                        ?>
<!--                        <li class="page-item"><a class="page-link text-light bg-dark" href="#">Вперед</a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Текст</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($page_data["tasks"] as $task) {
                            $id = $task['id'];
                            $username = $task['username'];
                            $email = $task['email'];
                            $text = $task['text'];
                            //$
                            echo "<tr><th scope='row'>$id</th><td>$username</td><td>$email</td><td>$text</td></tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<footer>

</footer>
</body>
</html>
