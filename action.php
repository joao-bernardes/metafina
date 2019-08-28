<html>
<body>

<section>
    <table>
        <tr>
            <th>Nome da faixa:</th>
            <th>Data:</th>
            <th>Duração:</th>
            <th>Comentario:</th> 
        </tr>
        <tr>
            <td><?php echo $_POST["nome"]; ?></td>
            <td><?php echo $_POST["data"]; ?></td>
            <td><?php echo $_POST["duração"]; ?></td>
            <td><?php echo $_POST["observações"]; ?></td>
        </tr>
    </table>
<hr>
</section>


<?php
    $currentDir = getcwd();
    $uploadDirectory = "/media/";

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
                echo "The file " . basename($fileName, '.mp3') . " has been uploaded";  
                fopen(basename($fileName, '.mp3') .".csv","w");
                file_put_contents("./media/" . basename($fileName, '.mp3') .".csv", 
                        $_POST["nome"] . "," . $_POST["data"] . "," . $_POST["duração"] . "," . $_POST["observações"]);
                } else {
                    echo "An error occurred somewhere. Try again or contact the admin";
                } 
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    


?>


</body>
</html> 