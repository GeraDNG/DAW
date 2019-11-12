<?php
function getProducts(){

    $data = [];
    $file = fopen("./products.txt", "r");

    if($file){

        while($line = fgetcsv($file)){
            $data[] = $line;
        }

        return $data;

    }
    else{
        return false;
    }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <pre>
        <?php
            var_dump(getProducts());
        ?>
        </pre>

    </body>
</html>
