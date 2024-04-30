<?php

$badword = $_GET['badword'];
$paragphaffe = $_GET['userText'];
$paragphaffeleght = strlen($paragphaffe);
$paragphaffeCensured = str_replace($badword, '****', $paragphaffe )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $paragphaffe; ?> <?php echo $paragphaffeleght; ?> </h2>
    <h2><?php echo $paragphaffeCensured; ?> </h2>
</body>
</html>