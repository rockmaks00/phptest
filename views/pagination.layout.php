<?php
if (isset($page_data)) {
    $sort = $_GET['sort'] ? '&sort=' . $_GET['sort'] : null;
    for($i = 1; $i < $page_data["pages_count"] + 1; $i++)
        echo "<li class='page-item'><a class='page-link text-light bg-dark' href='?page=$i$sort'>$i</a></li>";
}