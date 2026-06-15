<!DOCTYPE html>
<nav>

<a href="index.html">Tentang Saya</a> |
<a href="kalkulator.html">Kalkulator Nilai</a> |
<a href="matkul.php">Info Mata Kuliah</a>

</nav>

<hr>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Informasi Mata Kuliah</title>
</head>
<body>

<h2>Informasi Mata Kuliah Laboratorium</h2>

<p><b>Nama :</b> Aulia Rosida</p>
<p><b>NIM :</b> 202432110</p>

<hr>

<form method="POST">

<label>Nama Mata Kuliah :</label>
<br><br>

<input
    type="text"
    name="matkul"
    placeholder="Contoh: Pemrograman Web"
    required
>

<button type="submit">
    Cari
</button>

</form>

<br>

<?php

if(isset($_POST['matkul'])){

    $input = strtolower(trim($_POST['matkul']));

    if($input == "data warehouse"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>

            <p><b>Mata Kuliah :</b> Data Warehouse</p>

            <p><b>Kode Mata Kuliah :</b> DW101</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Mata kuliah yang mempelajari konsep penyimpanan,
            integrasi, dan pengolahan data dalam skala besar
            untuk kebutuhan analisis bisnis.</p>
        </fieldset>
        ";
    }

    elseif($input == "data mining"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>

            <p><b>Mata Kuliah :</b> Data Mining</p>

            <p><b>Kode Mata Kuliah :</b> DM102</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Mempelajari teknik menemukan pola dan
            pengetahuan dari kumpulan data yang besar.</p>
        </fieldset>
        ";
    }

    elseif($input == "pengantar big data"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>

            <p><b>Mata Kuliah :</b> Pengantar Big Data</p>

            <p><b>Kode Mata Kuliah :</b> BD103</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Membahas konsep dasar big data,
            karakteristik, serta penerapannya
            dalam berbagai bidang.</p>
        </fieldset>
        ";
    }

    elseif($input == "pemrograman mobile"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Information Retrieval Laboratory</p>

            <p><b>Mata Kuliah :</b> Pemrograman Mobile</p>

            <p><b>Kode Mata Kuliah :</b> PM104</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Mempelajari pembuatan aplikasi
            berbasis Android maupun platform mobile lainnya.</p>
        </fieldset>
        ";
    }

    elseif($input == "pemrograman visual"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>

            <p><b>Mata Kuliah :</b> Pemrograman Visual</p>

            <p><b>Kode Mata Kuliah :</b> PV201</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Mempelajari pengembangan aplikasi
            desktop dengan antarmuka visual.</p>
        </fieldset>
        ";
    }

    elseif($input == "rekayasa perangkat lunak"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>

            <p><b>Mata Kuliah :</b> Rekayasa Perangkat Lunak</p>

            <p><b>Kode Mata Kuliah :</b> RPL202</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Membahas proses perancangan,
            pengembangan, pengujian,
            dan pemeliharaan perangkat lunak.</p>
        </fieldset>
        ";
    }

    elseif($input == "pemrograman web"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>

            <p><b>Mata Kuliah :</b> Pemrograman Web</p>

            <p><b>Kode Mata Kuliah :</b> PW203</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Mempelajari pembuatan website menggunakan
            HTML, CSS, JavaScript, PHP dan database.</p>
        </fieldset>
        ";
    }

    elseif($input == "basis data"){

        echo "
        <fieldset>
            <legend>Informasi Mata Kuliah</legend>

            <p><b>Laboratorium :</b> Software Engineering Laboratory</p>

            <p><b>Mata Kuliah :</b> Basis Data</p>

            <p><b>Kode Mata Kuliah :</b> BD204</p>

            <p><b>Jumlah SKS :</b> 3 SKS</p>

            <p><b>Deskripsi :</b>
            Mempelajari konsep database,
            perancangan tabel, relasi,
            serta pengelolaan data.</p>
        </fieldset>
        ";
    }

    else{

        echo "<h3>Mata kuliah \"$input\" tidak ditemukan.</h3>";
    }
}
?>

</body>
</html>
