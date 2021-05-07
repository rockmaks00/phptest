function fill_edit(row) {
    let id = row.cells[0].innerText;
    let username = row.cells[1].innerText;
    let email = row.cells[2].innerText;
    let text = row.cells[3].innerText;
    document.getElementById('edit-modal').focus();
}

