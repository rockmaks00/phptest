<?php
if(isset($_SESSION["username"])) {
    $un = $_SESSION["username"];
    echo <<<EOT
<form class="d-flex" action="/logout">
    <span class='navbar-text'>
        Вы вошли как <span class='text-light'>$un</span>
    </span>
    <button class="ms-2 btn btn-outline-light" type="submit">Выйти</button>
</form>
EOT;
}
else
    echo <<<EOT
<form class="d-flex"  action="/login" method="post">
    <input class="form-control me-2" type="email" placeholder="E-Mail" name="login-email">
    <input class="form-control me-2" type="password" placeholder="Пароль" name="login-pass">
    <button class="btn btn-outline-light" type="submit">Войти</button>
</form>
EOT;
