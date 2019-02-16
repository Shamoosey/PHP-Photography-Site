var street = 'primary_street';
var table = document.getElementById('thead');

function fetchClosedStreets() {
  let commonName = document.getElementById('searchBox').value;
    if(commonName.trim() != ""){
      const apiUrl = 'https://data.winnipeg.ca/resource/h367-iifg.json?' +
                      `$where=lower(primary_street) LIKE lower('%${commonName}%')` +
                      '&$order=date_closed_from DESC' +
                      '&$limit=100'; 
      const encodedURL = encodeURI(apiUrl);
      fetch(encodedURL)
      .then(responce => responce.json())
      .then(function(data) {
        if (data.length == 0){
          clearResults();
          document.getElementById('noResults').innerHTML = 'No results found for "' + commonName + '"';
        } else {
          clearResults();
          displayData(data);
        }
      });
    }
}

function displayData(data){
  var table = document.getElementById("tbody");
  thead.style.visibility = "visible";
  for(let i = 0; i < data.length; i++) {
    var row = document.getElementById(data[i].lane_closure_id);
    if(row == null){
  
      let row = document.createElement("tr");

      let id = document.createElement("td");
      id.innerHTML = data[i].lane_closure_id;
      id.id = data[i].lane_closure_id;
  
      let boundarie = document.createElement("td");
      boundarie.innerHTML = data[i].boundaries;
  
      let primary_street = document.createElement("td");
      primary_street.innerHTML = data[i].primary_street;
  
      let cross_street = document.createElement("td");
      cross_street.innerHTML = data[i].cross_street;
  
      let date_closed_from = document.createElement("td");
      date_closed_from.innerHTML =  data[i].date_closed_from.substring(0, 10);
  
      let date_closed_to = document.createElement("td");
      date_closed_to.innerHTML = data[i].date_closed_to.substring(0, 10);
  
      let direction = document.createElement("td");
      direction.innerHTML = data[i].direction;
      
      row.appendChild(id);
      row.appendChild(boundarie);
      row.appendChild(primary_street);
      row.appendChild(cross_street);
      row.appendChild(date_closed_from);
      row.appendChild(date_closed_to);
      row.appendChild(direction);
      table.appendChild(row);
    }
  }
}

function clearResults(){
  document.getElementById('noResults').innerHTML = "";
  document.getElementById("tbody").innerHTML = "";
  thead.style.visibility = "hidden";
}

function load(){
  thead.style.visibility = "hidden";
  document.getElementById('clearbtn').addEventListener('click', function(){
    clearResults();
    document.getElementById('searchBox').value = "";
  });
  document.getElementById('searchbtn').addEventListener('click', fetchClosedStreets);
  document.getElementById('homebtn').addEventListener('click', function(){
    window.location = ("../index.php")
  });
}

document.addEventListener('DOMContentLoaded', load);