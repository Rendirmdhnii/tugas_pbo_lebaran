<?php require_once 'User.php'; ?> 
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas PBO Lebaran - Vokasi UB</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; display: flex; justify-content: center; padding: 50px; }
        .card { background: white; width: 400px; padding: 30px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #1a1a1a; margin-bottom: 25px; }
        label { font-size: 14px; font-weight: 600; color: #444; }
        input, select { width: 100%; padding: 12px; margin: 8px 0 20px 0; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
        button { width: 100%; background: #007bff; color: white; border: none; padding: 12px; border-radius: 25px; font-weight: bold; cursor: pointer; transition: 0.2s; }
        button:hover { background: #0056b3; }
        .result { margin-top: 25px; padding: 15px; background: #f1f8ff; border-left: 4px solid #007bff; border-radius: 8px; line-height: 1.6; }
    </style>
</head>
<body>

<div class="card">
    <h2>Tugas PBO Lebaran - Kelompok 1</h2> 
    
     
    <form method="POST">
        <label>Nama Depan & Belakang</label>
        <div style="display: flex; gap: 10px;">
            <input type="text" name="fname" placeholder="Nama Depan" required>
            <input type="text" name="lname" placeholder="Nama Belakang" required>
        </div>

        <label>NIM</label>
        <input type="text" name="nim" placeholder="Contoh: 253140707111xxx" required>

        <label>Kelas</label>
        <input type="text" name="kelas" placeholder="Contoh: T2F" required>

        <label>Program Studi</label>
        <select name="prodi" required>
            <option value="">-- Pilih Prodi --</option>
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Administrasi Bisnis">Administrasi Bisnis</option>
            <option value="Perbankan">Perbankan</option>
            <option value="Manajemen Perhotelan">Manajemen Perhotelan</option>
        </select>

        <button type="submit" name="submit">Tampilkan Data</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // data dijupuk nak class pengguna e iki 
        $mhs = new Pengguna(
            $_POST['fname'], 
            $_POST['lname'], 
            $_POST['nim'], 
            $_POST['kelas'], 
            $_POST['prodi']
        );
        
        // gawe nampilno hasil imputan
        echo $mhs->getInfoAkademik();
    }
    ?>
</div>

</body>
</html>
