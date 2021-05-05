<?php
Router::route("/", "IndexController@index");
Router::route("/login", "LoginController@login");

Router::execute($_SERVER['REQUEST_URI']);