<?php
Router::route("/", "IndexController@index");
Router::route("/login", "LoginController@login");
Router::route("/create", "IndexController@create_task");

Router::execute($_SERVER['REQUEST_URI']);