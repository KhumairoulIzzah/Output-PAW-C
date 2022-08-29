<html>

<body align="center">
    <h3>Welcome Everyone!!!</h3> <br><br><br><br><br>
    <script>
        var nama = prompt("Masukkan Nama Anda: ");
        var nim = prompt("Masukkan NIM Anda: ");
        document.write("Hallo " + nama + " selamat datang <br>");
        document.write("NIM kamu " + nim)
    </script>

    <body>

</html>
<br>
<?php
    for ($i=1; $i < 5 ; $i++){
        echo("<br> nomor ini ".$i." adalah contoh iterasi php");
    }
?>
<br>
<br>
<?php
    echo("x atau urutan 1 merupakan variabel string yang berisi nama <br> y atau urutan 2 merupakan variabel string yang berisi institusi <br><br>");
    $x = "Khumairoul Izzah";
    $y = 'Teknik Informatika';
    echo $x;
    echo "<br>";
    echo $y;
    echo("<br><br> Nama saya ".$x.". Prodi saya ".$y);
?>
<br>
<br>
<?php
    $nim = 210411100023;
    $name = "Khumairoul Izzah";
    var_dump($nim);
    var_dump($name);
?>
<br>
<br>
<?php
    $panggilan =array("Izzah","kakak","baby","sayang","Iing");
    $jumlah = count($panggilan);
    for($iterasi=1; $iterasi<$jumlah; $iterasi++)
    print("\$panggilan[$iterasi] : $panggilan[$iterasi] <br>\n");
?>
<style>
    body {
        background-color: rgb(250, 147, 95);
        color: rgb(123, 51, 0);
        font-family: Footlight MT Light;
    }
</style>