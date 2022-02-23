<?php
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 

    try {
        $link = mysqli_connect("mariadb", "admin", "rahasia", "sid");
    } catch (mysqli_sql_exception $e) { // Gagal terkoneksi, tampilan informasi penyebabnya
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit dan tutup koneksi
    }

    // Terkoneksi
    echo "Berhasil terkoneksi ke database! <br />";
    echo "Dengan Info sbb: " . mysqli_get_host_info($link) . PHP_EOL;

    mysqli_close($link); // Tutup koneksi ke database
?>
