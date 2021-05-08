<?php
if($_SESSION["is_admin"]) {
    echo <<<EOT
<div class="modal" id="edit-modal" style="display: none;" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="/edit" method="post">
            <div class="modal-header">
                <h5 class="modal-title">Изменить задачу</h5>
                <button type="button" class="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="edit-id">id</label>
                    <input class="form-control" id="edit-id" name="edit-id" type="text" readonly>
                </div>
                <div class="form-group">
                    <label for="edit-text">Описание задачи</label>
                    <textarea class="form-control" id="edit-text" name="edit-text" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="hide_edit()" class="btn btn-dark">Отмена</button>
                <button type="submit" class="btn btn-success">Изменить</button>
            </div>
        </form>
    </div>
</div>
EOT;
}