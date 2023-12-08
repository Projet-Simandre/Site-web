// Spécifiez l'URL du fichier JSON à récupérer
var requestURL = "/script/values.json";

// Créez un nouvel objet XMLHttpRequest
var request = new XMLHttpRequest();

// Configurez la requête pour obtenir des données à partir de l'URL spécifié
request.open("GET", requestURL);

// Définissez le type de réponse comme JSON
request.responseType = "json";

// Envoyez la requête au serveur
request.send();

// Définissez une fonction de rappel à exécuter lorsque la requête est terminée
request.onload = function () {
    // Analysez la réponse JSON
    var superHeroes = request.response;
    populateHeader(superHeroes);
    // Appelez la fonction populateHeader avec les données JSON obtenues
    function populateHeader(jsonObj) {
  
      console.log(jsonObj);
        // // Obtenez le dernier ensemble d'éléments des données JSON
        var lastSet = jsonObj.items[jsonObj.items.length - 1];
    console.log(lastSet);
        // // Obtenez la dernière pièce de données du dernier ensemble
         var lastData = lastSet[lastSet.length - 1];
         var lastData_2 = lastSet[lastSet.length - 2];
         var lastData_3 = lastSet[lastSet.length - 3];
      console.log(lastData);
        // // Journalisez le dernier ensemble et la dernière donnée dans la console
        
    
        // // Sélectionnez tous les éléments avec la classe "value-text"
        var section = document.querySelectorAll(".value-text");
        count =0;
        // // Mettez à jour le contenu texte de chaque élément avec la propriété 'qualite' de lastData
        section.forEach(function(element) {
            
            
            // Analysez le contenu de l'élément en un entier et mettez à jour la variable 'n'
            

            if(count ==0) {
              n = parseInt(lastData.temperature);
              n_2 = parseInt(lastData_2.temperature);
              n_3 = parseInt(lastData_3.temperature);

              n_all = (n+n_2+n_3)/3;
            
              var gauge2 = Gauge(
                document.getElementById("gauge_temp"),
                {
                    min: -50,
                    max: 100,
                    dialStartAngle: 180,
                    dialEndAngle: 0,
                    // Définissez la valeur initiale de la jauge sur la valeur actuelle de 'n'
                    value: n_all,
                    viewBox: "0 0 100 57",
            
                    // Définissez une fonction de couleur en fonction de la valeur de la jauge
                    color: function(value) {
                        if (value >= 20) {
                            return "#d21404";
                        } else if (value >= 10) {
                            return "#03c04a";
                        } else if (value >= 0) {
                            return "#82eefd";
                        } else if (value >= -20) {
                            return "#0492c2";
                        } else {
                            return "#0000ff";
                        }
                    }
                }
            );
              count++;
            }

            if(count ==1) {
              n = parseInt(lastData.humidite);
              n_2 = parseInt(lastData_2.humidite);
              n_3 = parseInt(lastData_3.humidite);
              n_all = (n+n_2+n_3)/3;
              var gauge2 = Gauge(
                document.getElementById("gauge_hum"),
                {
                    min: -50,
                    max: 100,
                    dialStartAngle: 180,
                    dialEndAngle: 0,
                    // Définissez la valeur initiale de la jauge sur la valeur actuelle de 'n'
                    value: n_all,
                    viewBox: "0 0 100 57",
            
                    // Définissez une fonction de couleur en fonction de la valeur de la jauge
                    color: function(value) {
                        if (value >= 20) {
                            return "#d21404";
                        } else if (value >= 10) {
                            return "#03c04a";
                        } else if (value >= 0) {
                            return "#82eefd";
                        } else if (value >= -20) {
                            return "#0492c2";
                        } else {
                            return "#0000ff";
                        }
                    }
                }
            );
              count++;
            }
    
            if(count ==2) {
              n = parseInt(lastData.qualite);
              n_2 = parseInt(lastData_2.qualite);
              n_3 = parseInt(lastData_3.qualite);
              n_all = (n+n_2+n_3)/3;
              var gauge2 = Gauge(
                document.getElementById("gauge_air"),
                {
                    min: -50,
                    max: 100,
                    dialStartAngle: 180,
                    dialEndAngle: 0,
                    // Définissez la valeur initiale de la jauge sur la valeur actuelle de 'n'
                    value: n_all,
                    viewBox: "0 0 100 57",
            
                    // Définissez une fonction de couleur en fonction de la valeur de la jauge
                    color: function(value) {
                        if (value >= 20) {
                            return "#d21404";
                        } else if (value >= 10) {
                            return "#03c04a";
                        } else if (value >= 0) {
                            return "#82eefd";
                        } else if (value >= -20) {
                            return "#0492c2";
                        } else {
                            return "#0000ff";
                        }
                    }
                }
            );
              count++;
            }
            // Journalisez la valeur mise à jour de 'n' dans la console
            console.log(n);
         
          
        });
    
    }
  };

// Initialisez une variable 'n' avec une valeur par défaut de 0
var n = 0;

// Journalisez la valeur initiale de 'n' dans la console
console.log(n);

// Définissez une fonction pour remplir les éléments d'en-tête avec des données du JSON


// Créez une jauge en utilisant la bibliothèque Gauge, en définissant les paramètres initiaux
