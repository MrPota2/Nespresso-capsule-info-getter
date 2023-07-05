function filter() {
  let value = document.getElementById("searchInput").value.toUperCase();
  var table = document.getElementById("Navn");
  var rows = table.getElementsByTagName("tr");

  for (let i = 0; i < rows.length; i++) {
    let columns = rows[i].getElementsByTagName("td");
    let match = false;

    for (let j = 0; j < columns.length; j++) {
      let language = columns[j].textContent.toUpperCase();

      if (language.indexOf(value) > -1) {
        match = true;
        break;
      }
    }

    rows[i].style.display = match ? "" : "none";
  }
}

document.getElementById("searchInput").addEventListener("keyup", filter);

