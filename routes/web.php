<?php
Router::route("/", "IndexController@index");
Router::route("/login", "LoginController@login");
Router::route("/logout", "LoginController@logout");
Router::route("/create", "IndexController@create_task");
Router::route("/edit", "IndexController@edit_task");

Router::execute($_SERVER['REQUEST_URI']);