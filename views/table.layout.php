<?php
if (isset($page_data)) {
    $edit_script = $page_data["is_admin"] ? " ondblclick='fill_edit(this)'" : null;
    foreach ($page_data['tasks'] as $task) {
        $id = $task['id'];
        $username = $task['username'];
        $email = $task['email'];
        $text = $task['text'];
        $status = $task['status'] == "t";
        $changed = $task['changed'] == "t";
        $status_color = $status ? " class='table-info'" : null;
        $changed_color = $changed ? " class='table-primary'" : null;
        echo "<tr$status_color $edit_script><th scope='row'>$id</th><td>$username</td><td>$email</td><td$changed_color>$text</td></tr>";
    }
}