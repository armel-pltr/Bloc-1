<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de tableau HTML avec fusion de cellules</title>

</head>
<body>

    <h1>Générateur de tableau HTML avec fusion de cellules</h1>
    <form id="tableForm">
        <label for="rows">Nombre de lignes :</label>
        <input type="number" id="rows" name="rows" min="1" required>
        <br><br>
        <label for="columns">Nombre de colonnes :</label>
        <input type="number" id="columns" name="columns" min="1" required>
        <br><br>
        <button type="button" onclick="generateTable()">Générer le tableau</button>
    </form>

    <div class="fusion-section">
        <h3>Fusion de cellules</h3>
        <label for="mergeRow">Ligne de la cellule à fusionner :</label>
        <input type="number" id="mergeRow" min="1">
        <br><br>
        <label for="mergeCol">Colonne de la cellule à fusionner :</label>
        <input type="number" id="mergeCol" min="1">
        <br><br>
        <label for="mergeDirection">Direction de la fusion :</label>
        <select id="mergeDirection">
            <option value="horizontal">Horizontalement</option>
            <option value="vertical">Verticalement</option>
        </select>
        <br><br>
        <label for="mergeSpan">Nombre de cellules à fusionner :</label>
        <input type="number" id="mergeSpan" min="2">
        <br><br>
        <button type="button" onclick="mergeCells()">Fusionner</button>
    </div>

    <div id="tableContainer"></div>

    <h3>Code HTML généré :</h3>
    <textarea id="htmlCode" readonly></textarea>

    <script>
        let currentTable = [];

        function generateTable() {
            const rows = parseInt(document.getElementById('rows').value);
            const columns = parseInt(document.getElementById('columns').value);

            if (rows <= 0 || columns <= 0) {
                alert("Veuillez entrer des valeurs valides pour les lignes et les colonnes.");
                return;
            }

            currentTable = Array.from({ length: rows }, () => Array(columns).fill(''));

            let tableHTML = "<table>\n";

            for (let i = 0; i < rows; i++) {
                tableHTML += "  <tr>\n";
                for (let j = 0; j < columns; j++) {
                    tableHTML += `    <td id="cell-${i}-${j}">Cellule ${i + 1}, ${j + 1}</td>\n`;
                }
                tableHTML += "  </tr>\n";
            }

            tableHTML += "</table>";


            document.getElementById('tableContainer').innerHTML = tableHTML;

            document.getElementById('htmlCode').value = tableHTML;
        }

        function mergeCells() {
            const mergeRow = parseInt(document.getElementById('mergeRow').value) - 1;
            const mergeCol = parseInt(document.getElementById('mergeCol').value) - 1;
            const mergeDirection = document.getElementById('mergeDirection').value;
            const mergeSpan = parseInt(document.getElementById('mergeSpan').value);

            if (!currentTable.length || !currentTable[0].length) {
                alert("Veuillez générer un tableau avant de fusionner des cellules.");
                return;
            }

            if (
                mergeRow < 0 || mergeRow >= currentTable.length ||
                mergeCol < 0 || mergeCol >= currentTable[0].length
            ) {
                alert("Coordonnées de cellule invalides.");
                return;
            }

            if (mergeSpan <= 1) {
                alert("Le nombre de cellules à fusionner doit être supérieur à 1.");
                return;
            }

            let tableHTML = "<table>\n";

            for (let i = 0; i < currentTable.length; i++) {
                tableHTML += "  <tr>\n";
                for (let j = 0; j < currentTable[i].length; j++) {
                    
                    if (currentTable[i][j] === 'merged') continue;

                    if (i === mergeRow && j === mergeCol) {
                        if (mergeDirection === 'horizontal') {
                            if (mergeCol + mergeSpan > currentTable[i].length) {
                                alert("Fusion horizontale dépasse les limites du tableau.");
                                return;
                            }
                            tableHTML += `    <td colspan="${mergeSpan}">Cellule fusionnée</td>\n`;
                            for (let k = 0; k < mergeSpan; k++) {
                                if (k > 0) currentTable[i][mergeCol + k] = 'merged';
                            }
                        } else if (mergeDirection === 'vertical') {
                            if (mergeRow + mergeSpan > currentTable.length) {
                                alert("Fusion verticale dépasse les limites du tableau.");
                                return;
                            }
                            tableHTML += `    <td rowspan="${mergeSpan}">Cellule fusionnée</td>\n`;
                            for (let k = 0; k < mergeSpan; k++) {
                                if (k > 0) currentTable[mergeRow + k][j] = 'merged';
                            }
                        }
                    } else {
                        tableHTML += `    <td id="cell-${i}-${j}">Cellule ${i + 1}, ${j + 1}</td>\n`;
                    }
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
