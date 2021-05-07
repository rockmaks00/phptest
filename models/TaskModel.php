<?php
class TaskModel extends Model {
    public function create_task($username, $email, $text) {
        $query = "INSERT INTO public.tasks (username, email, text) VALUES ($1, $2, $3);";
        $this->query($query, array($username, $email, $text));
    }
    public function edit_task($task_id, $new_text) {

    }
    public function mark_task($task_id, $new_status) {

    }

    public function tasks_count() {
        $query = "SELECT COUNT(*) FROM public.tasks";
        return $this->query($query)[0]["count"];
    }

    public function get_tasks($start, $count, $order_by = null) {
        if(empty($order_by)) {
            $order_by = "id DESC";
        }
        //почему то pg_query_params не работает с ORDER BY
        $query = "SELECT * FROM public.tasks ORDER BY $order_by LIMIT $count OFFSET $start;";
        return $this->query($query);
    }
}