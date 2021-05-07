<?php
function sort_link($text, $asc, $desc) {
    $sort = $_GET['sort'];
    $page = $_GET['page'] ? '&page=' . $_GET['page'] : null;
    if ($sort == $asc) {
        return "<a class='ms-2 link-secondary' href='?sort=$desc$page'>$text</a> ▲";
    }
    elseif ($sort == $desc) {
        return "<a class='ms-2 link-secondary' href='?sort=$asc$page'>$text</a> ▼";
    }
    else {
        return "<a class='ms-2 link-secondary' href='?sort=$asc$page'>$text</a>";
    }
}
echo sort_link('id', 'id_asc', 'id_desc');
echo sort_link('Имени', 'username_asc', 'username_desc');
echo sort_link('E-Mail', 'email_asc', 'email_desc');
echo sort_link('Статусу', 'status_asc', 'status_desc');