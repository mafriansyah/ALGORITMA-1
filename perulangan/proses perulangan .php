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
    <div class="welcome-message1"><h4>Di Program Project Perulangan Notasi Algoritma <h4></div>
    

<strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 

<form method="GET" action="output perulangan .php">

  <label for="Input Perulangan Rian">Input Perulangan Rian:</label>
  <input type="text" id="Input Perulangan Rian" name="IInput Perulangan Rian" required><br><br>
  
  
  <input type="submit" value="Hasil Input">
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









