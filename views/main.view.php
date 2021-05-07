<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <title>TaskManager</title>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Задачник</a>
            <?php
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
                    <div class="col-6 form-group">
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
                <div>
                    <span>Сортировать по:</span>
                    <?php
                    include_once VIEW_PATH . "sort.layout.php";
                    ?>
                </div>
                <nav>
                    <ul class="mt-2 pagination">
<!--                        <li class="page-item"><a class="page-link text-light bg-dark" href="#">Назад</a></li>-->
                        <?php
                        include_once VIEW_PATH . "pagination.layout.php";
                        ?>
<!--                        <li class="page-item"><a class="page-link text-light bg-dark" href="#">Вперед</a></li>-->
                    </ul>
                </nav>
                <table class="table table-hover">
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
                    include_once VIEW_PATH . "table.layout.php";
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<footer class="pt-5 text-muted text-center text-small">
    <hr>
    <p class="mb-1">© 2021 какой то копирайт</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="https://github.com/rockmaks00/phptest">GitHub</a></li>
    </ul>
</footer>
<div class="modal" id="edit-modal" style="display: block;" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Изменить задачу</h5>
                <button type="button" class="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="edit-id">id</label>
                    <input class="form-control" id="id-email" name="id-email" type="text" disabled>
                </div>
                <div class="form-group">
                    <label for="edit-email">E-Mail</label>
                    <input class="form-control" id="edit-email" name="edit-email" type="email" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="edit-name">Имя</label>
                    <input class="form-control" id="edit-name" name="edit-username" type="text" placeholder="Алексей">
                </div>
                <div class="form-group">
                    <label for="edit-text">Описание задачи</label>
                    <textarea class="form-control" id="task-text" name="task-text" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark">Отмена</button>
                <button type="button" class="btn btn-success">Изменить</button>
            </div>
        </form>
    </div>
</div>
</body>
<script src="resources/js/main.js"></script>
</html>
