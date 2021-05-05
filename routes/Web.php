<?php
Router::route("/", function () { echo "main"; });
Router::route("/login", function () { echo "login"; });

Router::execute($_SERVER['REQUEST_URI']);