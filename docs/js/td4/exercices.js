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

document.getElementById("addButton").addEventListener("click", addItemToList);

//Exercice 3






