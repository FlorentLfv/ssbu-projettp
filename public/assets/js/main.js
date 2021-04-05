// on déclare la variable zipCodeInput avec l'élément de la vue ayant l'id zipCode
let zipCodeInput = document.querySelector('#zipCode');
// on déclare la variable cityInput avec l'élément de la vue ayant l'id city
let cityInput = document.querySelector('#city');

let url = 'http://ssbu/ajax&action=getZipCode';

//Etape 1 : On instancie un objet xhr (permet de faire un appel asynchrone)
let xhr = new XMLHttpRequest();

// on ajoute un event listener à zipCodeInput quand la touche est relachée pour retourner le code postal
zipCodeInput.addEventListener('keyup', (e) => {
    let zipCode = e.currentTarget.value;
    // si le nombre de caractères entré est strictement égal à 5
    if (zipCode.length === 5) {

        //Déclaration d'une variable data qui contient un paramètre zipCode et la valeur du champ zipCode
        let data = 'zipCode=' + zipCode;

        //Etape 2 : Initialisation de la requête à l'aide de la méthode open de l'objet xhr. 
        //open(méthode, url de destination)
        xhr.open('POST', url);
        //On définit le format dans lequel le serveur doit nous renvoyer la réponse (cf. json_encode($result); du fichier ajax.php)
        xhr.responseType = 'json';
        //On définit le type du contenu des données envoyées
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        //Etape 3 : Envoi de la requête avec data en paramètre
        xhr.send(data);
    }
});

//Etape 4 : Traitement de la réponse serveur
//Déclaration d'une fonction au changement d'état de l'objet xhr
xhr.onreadystatechange = function () {
    //Si l'opération est complète (4 = état 'done') et que la requête est un succès (code http 200 = 'OK')
    if (this.readyState == 4 && this.status == 200) {
        //on remplace la valeur de cityInput par une chaîne vide
        cityInput.innerHTML = '';
        //on fait un foreach pour récupérer l'id de la ville et son nom
        this.response.forEach(cityInfo => {
            //on définit la variable option qui va créer une option dans le select en HTML
            let option = document.createElement('option');
            //chaque option aura pour valeur l'id du tableau cityInfo
            option.value = cityInfo.idCity;
            //chaque option aura pour texte le nom de la ville du tableau cityInfo
            option.textContent = cityInfo.cityName;
            //on crée chaque option du select
            cityInput.appendChild(option);
        });
        //Si success est vrai on affiche un message pour dire que le mail est libre sinon un message pour dire qu'il n'est pas libre
        //this.response.success correspond à $result = array('success' => $success, 'message' => $msg);

    } else if (this.readyState == 4) {
        //Sinon si l'opération est complète (readyState == 4) mais qu'elle n'est pas un succès (code http != 200) on affiche un alert d'erreur
        alert('Erreur');
    }
}