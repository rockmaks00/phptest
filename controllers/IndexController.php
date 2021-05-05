<?php
class IndexController extends Controller {
    private string $template = "main.view.php";

    public function __construct() {
        parent::__construct();
        $this->model = new Model();
    }

    public function index() {
        $this->view->render($this->template);
    }
}