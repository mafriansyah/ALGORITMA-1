<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    

<body>

    <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 
   
    
               

</head>
<body>
<div class="login-container">
        
    <div class="welcome-message2">Selamat Datang Rian</div>
    <div class="welcome-message1"><h4>Di Program Project Perulangan Notasi Algoritma M.Afriansyah<h4></div>
    

<strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 

<form method="GET" action="output perulangan .php">

  <label for="Input Perulangan Rian">Input Perulangan Rian:</label>
  <input type="text" id="Input Perulangan Rian" name="IInput Perulangan Rian" required><br><br>
  
  
</form>

<body>
<form method="POST" action="output perulangan .php">
        <label for="jumlah">Pilih berapa kali akan diulang:</label><br><br>
        <select id="jumlah" name="jumlah" min="1" required>
            <!-- Loop jumlah 1 sampai 200 -->
            <!-- Kamu juga bisa menggunakan script untuk mengisi jumlah secara otomatis -->
            <option value=""> --- Pilih Jumlah ---</option>
            <!-- Pilihan jumlah dari 1 hingga 200 -->
            <script>
                for (let i = 1; i <= 200; i++) {
                    document.write('<option value="' + i + '">' + i + '</option>');
                }
            </script>

    
            </script><br><br>
        </select>
        <input type="submit" value="Proses ->">
    </form>


</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$InputHariKerja = [
    'Input Perulangan Rian' => 'M.Afriansyah',     

];
}