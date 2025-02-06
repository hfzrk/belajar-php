<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="judul">Pendaftaran Siswa Baru</h1>
<form class="form-container" method="post" action="output.php">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" >
    </div>
    <div class="form-group">
        <label for="panggilan">Nama Panggilan</label>
        <input type="text" id="panggilan" name="panggilan" >
    </div>
    <div class="form-group">
        <label for="tempat">Tempat Lahir</label>
        <input type="text" id="tempat" name="tempat">
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <div class="tanggal-group">
            <label>
                <select name="tanggal">
                    <?php
        for ($tanggal = 1;
             $tanggal <= 31;
             $tanggal++) {
          echo "<option value=\"$tanggal\">$tanggal</option>";
                    }
                    ?>
                </select>
            </label>
            <label for="bulan">
                <select id="bulan" name="bulan">
                    <option selected>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>
            </label>
            <label for="tahun">
                <select name="tahun">
                    <?php
                    for ($tahun = 1970;
                         $tahun <= 1987;
                         $tahun++) {
                        echo "<option value=\"$tahun\">$tahun</option>";
                    }
                    ?>
                </select>
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat Rumah</label>
        <input type="text" id="alamat" name="alamat" >
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
    </div>
    <div class="form-group tanggal-group">
        <label>
            <input type="radio" name="gender" value="laki-laki">
            Laki-laki
        </label>
        <label>
            <input type="radio" name="gender" value="perempuan" checked>
            Perempuan
        </label>
    </div>
    <div class="form-group">
        <label for="sekolah">Asal Sekolah</label>
        <input type="text" id="sekolah" name="sekolah" >
    </div>
    <div class="form-group">
        <label for="nilai">Nilai UAN</label>
        <input type="text" id="nilai" name="nilai" >
    </div>
    <div class="form-group">
        <button type="submit">Simpan</button>
    </div>
</form>
</body>
</html>