//Exercice 1

function change() {
    var colors = ["pink", "green", "blue", "red", "black"];
    var randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.body.style.background = randomColor;
}

//Exercice 2

const addItemToList = () => {
    const inputValue = document.getElementById("elementInput").value.trim();

    // Vérifier si l'input n'est pas vide
    if (inputValue) {
        // Créer un nouvel élément de liste et l'ajouter à la liste
        document.getElementById("elementList").innerHTML += `<li>${inputValue}</li>`;
        
        // Réinitialiser la zone de texte
        document.getElementById("elementInput").value = "";
    } else {
        alert("Veuillez saisir un élément avant d'ajouter.");
    }
};
document.getElementById("addButton") && document.getElementById("addButton").addEventListener("click", addItemToList);


//Exercice 3

// Fonction pour calculer la somme
function calculateSum() {
    // Récupérer les valeurs des champs de texte
    const number1 = parseFloat(document.getElementById('number1').value);
    const number2 = parseFloat(document.getElementById('number2').value);
    
    // Calculer la somme
    const sum = number1 + number2;
    
    // Afficher le résultat
    document.getElementById('result').innerText = `La somme est : ${sum}`;
}

// Ajouter un événement au bouton
document.getElementById('calculateButton') && document.getElementById('calculateButton').addEventListener('click', calculateSum);


//Exercice 4

document.getElementById("addButton") && document.getElementById("addButton").addEventListener("click", addItemToList);


document.getElementById('calculateButton') && document.getElementById('calculateButton').addEventListener('click', function() {
    const select = document.getElementById('menuselect');
    const imageDisplay = document.getElementById('imageDisplay');
    const selectedValue = select.value;

    // Mettre à jour la source de l'image et l'afficher
    imageDisplay.src = selectedValue;
    imageDisplay.style.display = 'block'; // Afficher l'image
});


// Exercice 5 

document.getElementById("addButton") && document.getElementById("addButton").addEventListener("click", addItemToList);


 // Sélectionner l'élément
 const monElement = document.getElementById('monElement');

 // Ajouter l'événement mouseover
 monElement.addEventListener('mouseover', function() {
     alert('Vous avez survolé l\'élément !');
 });


// Exercice 6

document.getElementById("addButton") && document.getElementById("addButton").addEventListener("click", addItemToList);


function updateClock() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    const timeString = `${hours}:${minutes}:${seconds}`;
    document.getElementById('clock').textContent = timeString;
}

setInterval(updateClock, 1000);
updateClock(); // Appel initial pour ne pas attendre 1 seconde

