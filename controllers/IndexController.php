<?php
class IndexController extends Controller {
    public function __construct() {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index() {

    }
}