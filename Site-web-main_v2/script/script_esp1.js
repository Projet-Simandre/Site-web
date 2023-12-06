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

        // // Obtenez le dernier ensemble d'éléments des données JSON
        var lastSet = jsonObj.items[jsonObj.items.length - 1];
        console.log(lastSet.length);
        // // Obtenez la dernière pièce de données du dernier ensemble
        var lastData_3 = lastSet[0];
        temperature = lastData_3["temperature"]
        // // Journalisez le dernier ensemble et la dernière donnée dans la console
        temperature = parseInt(temperature);

        humidite = lastData_3["humidite"]
        // // Journalisez le dernier ensemble et la dernière donnée dans la console
        humidite = parseInt(humidite);

        air = lastData_3["qualite"]
        // // Journalisez le dernier ensemble et la dernière donnée dans la console
        air = parseInt(air);
        // // Sélectionnez tous les éléments avec la classe "value-text"
        
        // // Mettez à jour le contenu texte de chaque élément avec la propriété 'qualite' de lastData

        for(let i =0; i<lastSet.length;i++) {
            var all_esp = lastSet[i]; // Recupère toute le dernier tableau concernant les esp
            temperature = parseInt(all_esp["temperature"]); // t'as capté
            humidite = parseInt(all_esp["humidite"]);
            air = parseInt(all_esp["qualite"]);

            var get_id_temp = "gauge_esp_" + parseInt(i)+"_temp";
            console.log(get_id_temp); // Ca recrée les ids
            var get_id_humi = "gauge_esp_" + parseInt(i)+"_hum";
            console.log(get_id_humi);
            var get_id_air = "gauge_esp_" + parseInt(i)+"_air";
            console.log(get_id_air);

            let sasa = document.getElementById("auto_remplissage");
            let div_row = document.createElement("div");
            sasa.append(div_row);
            div_row.classList.add("row");
            div_row.classList.add("m-4");
            div_row.classList.add("s-20");

            var div_col = document.createElement("div");
            div_row.append(div_col);
            div_col.classList.add("col-lg");

            var p = document.createElement("p");
            p.textContent= "ESP-" + parseInt(i);
            div_col.append(p);

            var div_flex = document.createElement("div");
            div_col.append(div_flex);
            div_flex.classList.add("d-flex");
            div_flex.classList.add("justify-content-around");
            div_flex.classList.add("flex-wrap");
             

            var div_no_cl = document.createElement("div");
            div_flex.append(div_no_cl);
            
            var div_gauge = document.createElement("div");
            div_no_cl.append(div_gauge);
            div_no_cl.classList.add("gauge-container");
            div_no_cl.classList.add("two");
            div_no_cl.classList.add("w100");
            div_no_cl.setAttribute("id", get_id_temp);
            
            var p2 = document.createElement("p");
            div_no_cl.append(p2);
            p2.classList.add("text-center");
            p2.textContent = "Temperature";



            var esp1_temp = Gauge(
                document.getElementById(get_id_temp),
                {
                    min: -50,
                    max: 100,
                    dialStartAngle: 180,
                    dialEndAngle: 0,
                    // Définissez la valeur initiale de la jauge sur la valeur actuelle de 'n'
                    value: temperature,
                    viewBox: "0 0 100 57",

                    // Définissez une fonction de couleur en fonction de la valeur de la jauge
                    color: function (value) {
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
            var esp1_hum = Gauge(
                document.getElementById(get_id_humi),
                {
                    min: 0,
                    max: 100,
                    dialStartAngle: 180,
                    dialEndAngle: 0,
                    // Définissez la valeur initiale de la jauge sur la valeur actuelle de 'n'
                    value: humidite,
                    viewBox: "0 0 100 57",

                    // Définissez une fonction de couleur en fonction de la valeur de la jauge
                    color: function (value) {
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

            var esp1_air = Gauge(
                document.getElementById(get_id_air),
                {
                    min: -50,
                    max: 100,
                    dialStartAngle: 180,
                    dialEndAngle: 0,
                    // Définissez la valeur initiale de la jauge sur la valeur actuelle de 'n'
                    value: air,
                    viewBox: "0 0 100 57",

                    // Définissez une fonction de couleur en fonction de la valeur de la jauge
                    color: function (value) {
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



        }

        }
            

        
        // Analysez le contenu de l'élément en un entier et mettez à jour la variable 'n'

        
        }
        // Journalisez la valeur mise à jour de 'n' dans la console

// Définissez une fonction pour remplir les éléments d'en-tête avec des données du JSON


// Créez une jauge en utilisant la bibliothèque Gauge, en définissant les paramètres initiaux
