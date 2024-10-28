<!DOCTYPE html>
<html>
<body>
    <h2>MENGULANG DOLAR LEBIH TINGGI DARI RUPIAH</h2>

    <?php
    // Mengecek apakah ada data yang dikirimkan melalui metode GET
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
        echo "<h2>Data yang Dimasukkan:</h2>";
        for ($i = 1; $i <= $jumlah_input; $i++) { 
            $input_name = 'input' . $i;
            if (isset($_GET[$input_name])) {
                echo "Input $i: " . htmlspecialchars($_GET[$input_name]) . "<br>";
            }
        }
    }
    ?>
</body>
</html>
<?php
// Inisialisasi variabel $totaldolar lebih tinggi dari rupiah = 10;
$totalHariKerja = 10;
// Loop untuk menjalankan aktivitas selama 10 hari kerja
for ($dolarlebihtinggidarirupiah = 1; $dolarlebihtinggidarirupiah <= $dolarlebihtinggidarirupiah; $dolarlebihtinggidarirupiah++) {
echo "Dolar lebih tinggi dari rupiah ke-" . $dolarlebihtinggidarirupiah . "<br>"; }
// Output akhir
echo "Semua aktivitas telah selesai." ; 


?>
<p>
<a href="index perulangan .php">
      <button>Kembali ke Input</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>

<p><i><strong>By M.Afriansyah</strong>