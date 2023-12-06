
var requestURL = "/script/values.json";
var request = new XMLHttpRequest();
request.open("GET", requestURL);
request.responseType = "json";
request.send();

request.onload = function () {
    var superHeroes = request.response;
    populateHeader(superHeroes);
};

function populateHeader(jsonObj) {
    var lastSet = jsonObj.items[jsonObj.items.length - 1];
    var lastData = lastSet[lastSet.length - 1];

    let count = 0;
    
    var section = document.querySelectorAll(".value-text");
// Modifiez le texte de chaque élément avec la nouvelle valeur
section.forEach(function(element) {
    
  });
  
   
}
