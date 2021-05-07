<?php

const ROOT = "C:/OpenServer/domains/phptest";
const CONTROLLER_PATH = ROOT . "/controllers/";
const MODEL_PATH = ROOT . "/models/";
const VIEW_PATH = ROOT . "/views/";
const ROUTE_PATH = ROOT . "/routes/";
const TASKS_PER_PAGE = 3;
const SORT_LIST = array(
    "id_asc" => "id",
    "id_desc" => "id DESC",
    "username_asc" => "username",
    "username_desc" => "username DESC",
    "email_asc" => "email",
    "email_desc" => "email DESC",
    "status_asc" => "status",
    "status_desc" => "status DESC",
);

session_start();
require_once "db.php";
require_once MODEL_PATH . 'Model.php';
require_once VIEW_PATH . 'View.php';
require_once CONTROLLER_PATH . 'Controller.php';
require_once ROUTE_PATH . "Router.php";
require_once ROUTE_PATH . "web.php";