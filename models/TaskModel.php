<?php
class TaskModel extends Model {
    public function create_task($username, $email, $text) {
        $query = "INSERT INTO public.tasks (username, email, text) VALUES ($1, $2, $3);";
        pg_query_params($this->db, $query, array($username, $email, $text));
    }
    public function edit_task($task_id, $new_text) {

    }
    public function mark_task($task_id, $new_status) {

    }
}