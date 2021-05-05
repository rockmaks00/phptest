<?php
class Model {
    protected $db;

    public function __construct() {
        $this->db = DB::db_connect();
    }
}