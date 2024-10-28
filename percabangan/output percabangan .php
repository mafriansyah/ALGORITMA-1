<div class="login-container">
<h2> Selamat Rian Kamu Berhasil Login</h2>

<div class="login-container2">
<?php
// Meminta input tahun dari pengguna
$tahun1=2024 ;
$tahun2=2023 ;
// Percabangan untuk menentukan apakah tahun kabisat atau bukan
if (($tahun1 % 4 == 0 && $tahun1 % 100 != 0) || ($tahun1 % 400 == 0)) {
    echo "$tahun1 adalah tahun kabisat.\n";
} else {
    echo "$tahun1 bukan tahun kabisat.\n";
}
echo "<br>";
// Percabangan untuk menentukan apakah tahun kabisat atau bukan
if (($tahun2 % 4 == 0 && $tahun2 % 100 != 0) || ($tahun2 % 400 == 0)) {
    echo "$tahun2 adalah tahun kabisat.\n";
} else {
    echo "$tahun2 bukan tahun kabisat.\n";
}
?>

<p>
<a href="index percabangan .php">
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
<br><br><strong>By M.Afriansyah</strong=";
