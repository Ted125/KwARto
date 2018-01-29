<!doctype html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="my_file[]" multiple>
        <input type="submit" value="Upload">
    </form>
    <?php
    if (isset($_FILES['my_file'])) {
        $myFile = $_FILES['my_file'];
        $fileCount = count($myFile["name"]);

        for ($i = 0; $i < $fileCount; $i++) {
            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//')) {
                mkdir($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//', 0777, true);
            }

            $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//';
            $fileExtension = '.jpg';

            $furnImg = new furniture_image();
            $fiName = $furnImg->countAllImages($uploaddir);
            $uploadfile = $uploaddir . basename((string)$fiName) . $fileExtension;
            echo "THE FILE NAME WILL BE ".$fiName;

            if(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
                echo "Successfully uploaded ".$fiName."<br>";
            }
        }
    }
    ?>
</body>
</html>
