function fill_edit(row) {
    let id = row.cells[0].innerText;
    let text = row.cells[3].innerText;
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-text').value = text;
    document.getElementById('edit-modal').style = "display: block;";
}

function hide_edit() {
    document.getElementById('edit-modal').style = "display: none;";
}
