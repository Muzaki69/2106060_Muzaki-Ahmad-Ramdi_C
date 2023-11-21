<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panitia 17 Agustus</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <div class="container">
        <h2>LOMBA 17 AGUSTUS</h2>
        <form action="input.php" method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" name="nama" required>

            <label for="password">password:</label>
            <input type="password" id="password" name="password" required>

            <!-- <label for="jenis">jenis lomba</label> -->
            jenis lomba :
            <select id="jenis" name="jenis_lomba" required>
                <option value="tarik tambang">tarik tambang</option>
                <option value="balap karung">balap karung</option>
                <option value="panjat pinang">panjat pinang</option>
                <option value="makan kerupuk">makan kerupuk</option>
            </select>
            
            <label for="waktu">Waktu Lomba:</label>
            <input type="time" id="waktu" name="waktu" required>

            <label for="tanggalLomba">Tanggal Lomba</label>
            <input type="date" id="tanggalLomba" name="tanggalLomba" required>

         

            <input type="submit" value="Daftar" name="submit">
        </form>
    </div>
</body>

</html>