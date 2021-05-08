<?php
class IndexController extends Controller {
    private string $template = "main.view.php";

    public function __construct() {
        parent::__construct();
        require_once MODEL_PATH . 'TaskModel.php';
        $this->model = new TaskModel();
    }

    public function index() {
        $tasks_count = $this->model->tasks_count();
        $pages_count = ceil($tasks_count / TASKS_PER_PAGE);
        $current_page = $_GET['page'];
        if(empty($current_page) || $current_page < 1 || $current_page > $pages_count) {
            $current_page = 1;
        }
        $start = ($current_page - 1) * TASKS_PER_PAGE;
        $page_data = array(
            "pages_count" => $pages_count,
            "tasks" => $this->model->get_tasks($start, TASKS_PER_PAGE, SORT_LIST[$_GET['sort']]),
            "is_admin" => $_SESSION["is_admin"]
        );
        $this->view->render($this->template, $page_data);
    }

    public function create_task() {
        $username = $_GET["task-username"];
        $email = $_GET["task-email"];
        $text = $_GET["task-text"];
        $this->model->create_task($username, $email, $text);
        header("Location: /");
    }

    public function edit_task() {
        if($_SESSION["is_admin"]) {
            $id = $_POST["edit-id"];
            $text = $_POST["edit-text"];
            print_r($_POST);
            $this->model->edit_task($id, $text);
        }
    }
}