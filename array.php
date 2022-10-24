<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uts Bagus ik2d</title>
    <style>
.content-table tbody tr:nth-of-type(even) {
 background-color: red; 
}
.content-table tbody tr:nth-of-type(odd) {
  background-color: green; 
 }
</style>
</head>
<body>
<?php
    $mahasiswa = array(
        'id'=> array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23),
        'nama'=>array('	Ade Prasetyo','Afifah Naura Kamilia','Agustinus Ricad Simbolon',
                        'Annisa Aisyah Amini Nur Rohmah','Azyumi Azra','Bagus Muhammad Wijaksono',
                        'Dewi Maharani','Dwi Krisnandi','Faris Adhi Laksana Yusuf','Febrian Giovanni',
                        'Ferina Ayu Fella Puspita','Kanya Audy Prahmadyta','Maulana Arya Yoga Juliansyah',
                        'Muhammad Naufal Yesha Rendra','Nabilla Syaharani Putri S','Nandya Nurmala','Putri Ayu Widyaningrum',
                        'Raihana Khalika Putri','Salma Afdhila Khalda','Syalita Widyandini','Vannisa Ardiani','Yudha Zaniargo'
                    ),
        'nim'=>array('3.34.21.3.01','3.34.21.3.02','3.34.21.3.03','3.34.21.3.04','3.34.21.3.05','3.34.21.3.06'
        ,'3.34.21.3.07','3.34.21.3.08','3.34.21.3.09','3.34.21.3.10','3.34.21.3.11','3.34.21.3.12',
        '3.34.21.3.14','3.34.21.3.15','3.34.21.3.16','3.34.21.3.17','3.34.21.3.19','3.34.21.3.20','3.34.21.3.22','3.34.21.3.23','3.34.21.3.24','3.34.21.3.25'),
        
    );
?>
<table class="content-table"border="1">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>NIM</th>
    </tr>
<?php
    for($i=0;$i<22;$i++)
    {
?>

    <tr>
    <td><?php echo $mahasiswa['id'][$i];?></td>
    <td><?php echo $mahasiswa['nama'][$i];?></td>
    <td><?php echo $mahasiswa['nim'][$i];?></td>
    </tr>

    <?php
    }
    ?>
</table> 
</body>
</html>