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
            <form class="d-flex" method="post">
                <input class="form-control me-2" type="email" placeholder="E-Mail" name="login-email">
                <input class="form-control me-2" type="password" placeholder="Пароль" name="login-pass">
                <button class="btn btn-outline-light" type="submit">Войти</button>
            </form>
        </div>
    </nav>
</header>
<main">
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
                        <input class="form-control" id="task-name" name="task-name" type="text" placeholder="Алексей">
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link text-light bg-dark" href="#">Назад</a></li>
                        <li class="page-item"><a class="page-link text-light bg-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-light bg-dark" href="#">Вперед</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</main>
<footer>

</footer>
</body>
</html>
