<html>
<body>

Nome da faixa: <?php echo $_POST["nome"]; ?><br>
Data: <?php echo $_POST["data"]; ?><br>
Duração: <?php echo $_POST["duração"]; ?><br>
Comentario: <?php echo $_POST["observações"]; ?><br>



<?php
    $currentDir = getcwd();
    $uploadDirectory = "./media/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['mp3']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "File extension not allowed. Please upload mp3 file.";
        }

        if ($fileSize > 500000000) {
            $errors[] = "File size limit currently at 62,5Mb, sorry.";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }


?>


</body>
</html> 