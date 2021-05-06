<?php
class IndexController extends Controller {
    private string $template = "main.view.php";

    public function __construct() {
        parent::__construct();
        require_once MODEL_PATH . 'TaskModel.php';
        $this->model = new TaskModel();
    }

    public function index() {
        $this->view->render($this->template);
    }

    public function create_task() {
        $this->model->create_task($_GET["task-username"], $_GET["task-email"], $_GET["task-text"]);
        header("Location: /");
    }
}