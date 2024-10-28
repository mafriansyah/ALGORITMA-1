<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>


<body>

    <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> 
   
    
                <?php

                if ($_GET) {
                    echo $_GET['nama'];
                    echo '  Dengan Email: ' . $_GET['email'];
                    $_GET['status'] = 'aktif';
                }

                ?>



    </body>
</table>


    <div class="login-container">
        
    <div class="welcome-message2">Selamat Datang Rian</div>
    <div class="welcome-message1"><h4>Di Program Project Perurutan Notasi Algoritma Volume Kubus<h4></div>
    

    <form method="POST" action="output perurutan .php">
        <br>
        <label for="Masukkan Nilai s">Masukkan Nilai s:</label>
        <input type="text" id="Masukkan Nilai s" name="Masukkan Nilai s" required>
            </br>
        <br>
        <label for="Masukkan Nilai s">Masukkan Nilai s:</label>
        <input type="Masukkan Nilai s" id="Masukkan Nilai s" name="Masukkan Nilai s" required>
            </br>
            <br>
        <label for="Masukkan Nilai s">Masukkan Nilai s:</label>
        <input type="Masukkan Nilai s" id="Masukkan Nilai s" name="Masukkan Nilai s" required>
            </br>
        <input type="submit" value="Login">
    </form>
</div>


</head>
</body>

</html>
