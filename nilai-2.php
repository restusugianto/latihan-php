<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <label for="">Masukan Nilai : </label>
    <input type="text" name="nilai" require>

    <button type="submit" >input</button>
    </form>

    <h2>Nilai anda :
    <?php
     
    $ngambil = $_POST['nilai'] ?? '';
    echo $ngambil;
    if($ngambil == null){
        echo "Belum ada nilai";
    } else {


    if ($ngambil >= 60) {
        echo "   Lulus";}
        else {echo "  Tidak Lulus";

    }

}

    ?>

    </h2>
    
</body>
</html>