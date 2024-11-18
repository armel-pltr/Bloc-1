<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de tableau HTML</title>

</head>
<body>

    <h1>Générateur de tableau HTML</h1>
    <form id="tableForm">
        <label for="rows">Nombre de lignes :</label>
        <input type="number" id="rows" name="rows" min="1" required>
        <br><br>
        <label for="columns">Nombre de colonnes :</label>
        <input type="number" id="columns" name="columns" min="1" required>
        <br><br>
        <button type="button" onclick="generateTable()">Générer le tableau</button>
    </form>

    <div id="tableContainer"></div>

    <h3>Code HTML généré :</h3>
    <textarea id="htmlCode" readonly></textarea>

    <script>
        function generateTable() {
            const rows = document.getElementById('rows').value;
            const columns = document.getElementById('columns').value;

            if (rows <= 0 || columns <= 0) {
                alert("Veuillez entrer des valeurs valides pour les lignes et les colonnes.");
                return;
            }

            let tableHTML = "<table>\n";

            for (let i = 0; i < rows; i++) {
                tableHTML += "  <tr>\n";
                for (let j = 0; j < columns; j++) {
                    tableHTML += `    <td>Ligne ${i + 1}, Colonne ${j + 1}</td>\n`;
                }
                tableHTML += "  </tr>\n";
            }

            tableHTML += "</table>";

            document.getElementById('tableContainer').innerHTML = tableHTML;

            document.getElementById('htmlCode').value = tableHTML;
        }
    </script>

</body>
</html>
