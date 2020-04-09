<?php
    // 1. lakukan koneksi
    include('config.php');
    // 2. Menampung data dari form
    $nama_siswa = $_POST['nama_siswa'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $agama_siswa = $_POST['agama_siswa'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nama_ortu = $_POST['nama_ortu'];
    $agama_ortu = $_POST['agama_ortu'];
    $alamat_rumah = $_POST['alamat_rumah'];
    $no_telp = $_POST['no_telp'];
    
    // 3. Menjalankan perintah Insert Data
    $sql_insert="INSERT INTO ppdb VALUES ('','$nama_siswa','$tmpt_lahir', '$tgl_lahir', '$gender', '$agama_siswa', '$alamat_siswa', '$asal_sekolah', '$nama_ortu', '$agama_ortu', '$alamat_rumah', '$no_telp')";
    // 4. Menjalankan perintah
    mysqli_query($koneksi,$sql_insert)or die(mysqli_error($koneksi));
    echo '<script>
    alert("Data anda telah berhasil dikirim");
    location="infoppdb.html"
    </script>';
?>