<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csvFile'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES['csvFile']['name']);
    
    if (move_uploaded_file($_FILES['csvFile']['tmp_name'], $targetFile)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
}
?>
