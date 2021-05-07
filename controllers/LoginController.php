<?php
class LoginController extends Controller {
    public function __construct() {
        parent::__construct();
        require_once MODEL_PATH . 'UserModel.php';
        $this->model = new UserModel();
    }

    public function login()
    {
        $email = $_POST["login-email"];
        $password = $_POST["login-pass"];
        //по хорошему надо хешировать
        $result = $this->model->login($email, $password);
        //по хорошему надо давать токен
        if(is_array($result)) {
            $is_admin = $result[0]["is_admin"] == "t";
            $_SESSION["username"] = $result[0]["name"];
            $_SESSION["is_admin"] = $is_admin;
        }
        header("Location: /");
    }

    public function logout() {
        session_destroy();
        header("Location: /");
    }
}