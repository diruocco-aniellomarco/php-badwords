<?php 
$paragrafo = $_POST['paragraph'];
$censura = $_POST['censure'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Il paragrafo è: "<?php echo $paragrafo ?>"
        
        ed è lungo: <?php echo strlen($paragrafo) ?> 
    </p>

    <!-- <p>
        La parola da censurare è: <?php echo $censura ?>
    </p> -->

    <p> Il paragrafo censurato è: "<?php echo str_replace($censura,'***', $paragrafo ) ?>" </p>
</body>
</html>