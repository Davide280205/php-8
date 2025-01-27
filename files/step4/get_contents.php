<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>

    <?php
    
        echo nl2br(file_get_contents('C:/private/sonnet.txt'));

        echo $sonnet[0];
        
    ?>
    
</body>
</html>