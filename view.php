<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'?>
    <title>View CSV Data</title>
    <style>
        /* Add CSS for horizontal scrolling */
        #tableContainer {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h2>CSV Data Viewer</h2>

    <input type="text" id="searchInputad" placeholder="Search...">
    <button onclick="searchTable()">Search</button>
    <br><br>

    <div id="tableContainer"> <!-- Add a container for horizontal scrolling -->
        <?php
        if (isset($_GET['file'])) {
            $csvFile = 'uploads/' . $_GET['file'];

            if (file_exists($csvFile)) {
                $csvData = array_map('str_getcsv', file($csvFile));

                echo '<table border="1" id="dataTable">';
                $isHeaderRow = true;
                foreach ($csvData as $row) {
                    echo '<tr>';
                    foreach ($row as $cell) {
                        if ($isHeaderRow) {
                            echo '<th>' . htmlspecialchars($cell) . '</th>';
                        } else {
                            // Check if the cell contains a URL and generate a clickable link
                            if (filter_var($cell, FILTER_VALIDATE_URL)) {
                                echo '<td><a href="' . htmlspecialchars($cell) . '" target="_blank">' . htmlspecialchars($cell) . '</a></td>';
                            } else {
                                echo '<td>' . htmlspecialchars($cell) . '</td>';
                            }
                        }
                    }
                    echo '</tr>';
                    $isHeaderRow = false;
                }
                echo '</table>';
            } else {
                echo 'CSV file not found.';
            }
        } else {
            echo 'CSV file parameter missing.';
        }
        ?>
    </div>

    <script>
    function searchTable() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("searchInputad");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            if (i === 0) {
                tr[i].style.display = "";
                continue;  // Skip header row
            }

            tr[i].style.display = "none";

            for (j = 0; j < tr[i].cells.length; j++) {
                td = tr[i].cells[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }
    </script>
</body>
</html>
