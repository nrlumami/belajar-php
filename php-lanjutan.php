<?php

// $nama = "Sri";

/*
echo $nama;
echo "<br>";
echo $nama;
echo "<br>";
echo $nama;
echo "<br>";
echo $nama;
echo "<br>";
echo $nama;
*/

// perulangan for
/*
$no = 10;
for ($i=0; $i<$no; $i++){
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

// perulangan while
/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."</br>";
    $i++;
}
*/

// perulangan do while
/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."</br>";
    $i++;
} while ($i < $no)
*/

// array
/*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');
foreach($data as $value){
    echo $value."</br>";
}
*/

// percabangan
/*
if ($nama == "Ketut"){
    echo $nama." berasal dari Bali";
}else if ($nama == "Sri") {
    echo $nama." berasal dari Jawa dan Yogyakarta";
}else {
    echo $nama." berasal dari mana ya?";
}
*/

/*
switch ($nama){
    case "Ketut";
        $pesan = $nama." berasal dari Bali";
    break;
    case "Sri";
        $pesan = $nama." berasal dari Jawa dan Yogyakarta";
    break;
    default;
        $pesan = $nama." berasal dari mana ya?";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nurulUmami-PHP2</title>
</head>
<body>
    <h1>Input Nama dan Ulangi</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if (!empty($_POST['submit'])) {
            switch($_POST['nama']) {
                case "Ketut";
                    $pesan = $_POST['nama']." berasal dari Bali";
                break;
                case "Sri";
                    $pesan = $_POST['nama']." berasal dari Jawa dan Yogyakarta";
                break;
                default;
                    $pesan = $_POST['nama']." berasal dari mana ya?";
                }        
                for ($i=0;$i<$_POST['no'];$i++) {
                    echo $pesan."<br>";
                }
    
        } else {
            echo "Anda belum input nama dan jumlah.";
        }
    ?>

</body>
</html>