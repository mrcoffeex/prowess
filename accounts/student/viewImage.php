<?php  

    $image = $_GET['image'];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Image</title>
</head>
<body>
    <div>
        <img src="../../imagebank/<?= $image ?>" alt="">
    </div>
</body>
</html>