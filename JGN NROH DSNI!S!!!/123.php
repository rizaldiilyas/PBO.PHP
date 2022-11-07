<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Data siswa

    <?php
       $koneksi = new PDO("mysql:host=localhost;dbname=belajar_db", "root", "");
       $nik = $_GET['nik'];

       echo $nik;

       $query = $koneksi->query("select * from tbkaryawan where nik=$nik");
       $data = $query->fetchAll();

       foreach ($data as $data){
        echo "<p>.$data[nama].</p>";
       }
       ?>
       
       <button><a href="tampil data.php">balik</a></button>
</body>
</html>
