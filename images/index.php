<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si un fichier a été téléchargé
    if (empty($_FILES["file"]["tmp_name"])) {
        header("Location:index.php?message=er");
        exit();
    }

    // Obtenir le nom du fichier sans l'extension
    $file_basename = pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME);

    // Renommer le fichier en y ajoutant le nom de base et la date et l'heure
    $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    $new_file_name = $file_basename . '_' . date("Ymd_His") . '.' . $file_extension;

    // Vérifier l'extension du fichier (doit être PDF)
    if ($file_extension !== 'pdf') {
        header("Location:index.php?message=er");
        exit();
    }

    // Inclure les informations de connexion à votre base de données
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "informations";

    // Connexion à la base de données MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier si la connexion a réussi
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Échapper les données pour éviter les attaques d'injection SQL
    $new_file_name = $conn->real_escape_string($new_file_name);

    // Requête d'insertion dans la table "documents"
    $sql = "INSERT INTO image (libelle) VALUES ('$new_file_name')";

    if ($conn->query($sql) === TRUE) {
        // Déplacer le fichier vers le dossier "documents"
        $target_directory = "files/";
        $target_path = $target_directory . $new_file_name;
        if (!move_uploaded_file($_FILES["file"]["tmp_name"], $target_path)) {
            header("Location:index.php?message=er");
            exit();
        }
        //redirection
        header("Location:index.php?message=ok");
    } else {
        header("Location:index.php?message=no");
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <?php if (isset($_GET["message"])) {
            if ($_GET["message"] == "ok") {
                ?>
                <div class="alert success">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Done Successfully!
                </div>
                <?php
            } else {
                ?>
                <div class="alert fail">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Something went wrong!
                </div>
                <?php
            }
        } ?>

        <label for="images" class="drop-container" id="dropcontainer">
            <span class="drop-title">DROP YOUR "CV" HERE! (PDF)</span>
            
            <input type="file" name="file" id="images" accept="application/pdf" required>
        </label>
        <button type="submit" id="submitBtn">SEND</button>
        
    </form>
    <script src="script.js"></script>
</body>
</html>