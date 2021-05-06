<?php
class LoginController extends Controller {
    public function __construct() {
        parent::__construct();
        require_once MODEL_PATH . 'UserModel.php';
        $this->model = new UserModel();
    }

    public function login(): bool
    {
        session_start();
        $email = $_POST["login-email"];
        $password = $_POST["login-pass"];
        //по хорошему надо хешировать
        $result = $this->model->login($email, $password);
        //по хорошему надо давать токен
        print_r($result["row"][0]);
        if(is_array($result)) {
//            $_SESSION["is_auth"] = True;
//            $_SESSION["name"] = $result["row"][1];
//            $_SESSION["is_admin"] = $result["row"][1];
            return True;
        }
        return False;
    }

    public function logout() {
        session_destroy();
        header("Location: /");
    }
}