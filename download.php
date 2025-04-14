<?php
// download.php - File untuk memproses download gambar
if(isset($_POST["submit"])){ // STRUKTUR KONTROL: Memeriksa apakah form telah disubmit
    // VARIABEL: Menyimpan input dari form
    $url = $_POST["Url"]; // TIPE DATA: String
    $customName = trim($_POST["filename"]); // OPERATOR: Function trim() untuk menghilangkan whitespace
    
    // STRUKTUR KONTROL: Validasi URL
    if(empty($url)) { // OPERATOR: Function empty() untuk memeriksa apakah URL kosong
        displayErrorPage("URL tidak boleh kosong.");
        exit;
    }

    // VARIABEL: Mengambil nama file dari URL
    $filename = basename(parse_url($url, PHP_URL_PATH)); // TIPE DATA: String
    // VARIABEL: Mengambil data gambar dari URL
    $imagedata = @file_get_contents($url); // OPERATOR: @ untuk menekan error

    // STRUKTUR KONTROL: Memeriksa apakah data gambar berhasil diambil
    if($imagedata !== false){ // OPERATOR: Perbandingan tidak identik (!==)
        // VARIABEL: Memeriksa tipe MIME dari file
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->buffer($imagedata);
        // VARIABEL: Menentukan nama file akhir
        $finalName = $customName !== "" ? $customName : $filename; // OPERATOR: Ternary

        // Mengirim header untuk download
        header('Content-Description: File Transfer');
        header('Content-Type: ' . $mimeType); // OPERATOR: Concatenation (.)
        header('Content-Disposition: attachment; filename="' . $finalName . '"');
        header('Content-Length: ' . strlen($imagedata));
        echo $imagedata;
        exit;
    }
    else {
        displayErrorPage("Gagal mengunduh gambar. Pastikan URL valid dan bisa diakses.");
        exit;
    }
}
else {
    displayErrorPage("Metode tidak didukung.");
    exit;
}

?>