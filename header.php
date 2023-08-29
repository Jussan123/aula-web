<?php
if (isset($titulo)) {
} else {
    $titulo = 'Meu site feliz.';
}

//$titulo = isset($titulo) ? $titulo : "Meu site feliz.";
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $titulo ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="dist/bundle.js"></script>
</head>

<body>
    <?php
    include __DIR__ . '/menu.php';
    ?>
</body>