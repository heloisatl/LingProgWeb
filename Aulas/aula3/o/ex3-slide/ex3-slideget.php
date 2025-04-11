<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    
        $cor = $_GET['cor'];
    ?>

</head>



<body style="background-color:<?php echo $cor ?>"> 
    
</body>

    
</html>


<!-- Ouuuu -->

<?php
if(isset($_GET['cor'])){


$cor = $_GET['cor'];

echo "<body style='backgruond-color: " . $cor . ";'>";
echo "<\body>";
} else{
    echo "Informe o parâmetro 'cor'!";
}
