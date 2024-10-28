<!DOCTYPE html>

<html>

<head>

    <title>HARI KERJA</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase"> <?php echo $_GET['nama'] ?> </strong>di Program Project Percabangan Notasi Algoritma </h4>
    <p>Anda Login Sebagai : <?php if ($_GET) {
                                echo $_GET['nama'];
                                echo '  Dengan Email: ' . $_GET['email'];
                                $_GET['status'] = 'aktif';
                            }

                            ?></p>

    <form action="output percabangan .php" method="post">
        <html>

        <head>
            <title>Menentukan Tahun Kabisat</title>
        </head>

        <body>
            <h2>Masukkan Nilai Inputan</h2>
            <form action="output percabangan .php" method="post">
            <label for="Input tahun kabisat">Input tahun kabisat:</label>
  <Input type="text" id="Input tahun kabisat" name="Input tahun kabisat" required><br><br>

  
                <input type="submit" value="Input">
            </form>
        </body>

        </html>