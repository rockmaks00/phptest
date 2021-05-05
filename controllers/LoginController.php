<?php
class LoginController extends Controller {
    private string $template = "login.view.php";

    public function __construct() {
        parent::__construct();
        $this->model = new UserModel();
    }

    public function index() {
        $this->view->render($this->template);
    }
}