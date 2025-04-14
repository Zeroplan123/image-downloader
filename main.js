/**
 * Fungsi untuk menampilkan preview gambar
 * STRUKTUR KONTROL: Kondisional untuk memeriksa URL
 */
function previewImg(){
    // VARIABEL: Menyimpan elemen dan nilainya
    const url = document.getElementById("Url").value; // TIPE DATA: String
    const previewCon = document.getElementById("previewImg"); // TIPE DATA: Object
    const previewImg = document.getElementById("image-preview"); // TIPE DATA: Object

    // STRUKTUR KONTROL: Memeriksa apakah URL diisi
    if(url){ // OPERATOR: Evaluasi boolean dari string
        previewImg.src = url; // OPERATOR: Assignment (=)
        previewCon.style.display = "block"; // OPERATOR: Assignment untuk properti objek
    }
    else {
        alert("Masukkan URL terlebih dahulu.");
        previewCon.style.display = 'none';
    }
}

/**
 * Fungsi untuk konfirmasi download dan pengaturan nama file
 * STRUKTUR KONTROL: Kondisional untuk memvalidasi input
 */
function confrimDownload(){
    // VARIABEL: Menyimpan URL dari input
    const url = document.getElementById("Url").value; // TIPE DATA: String
    let filename = prompt("Masukkan nama file (tanpa ekstensi):"); // TIPE DATA: String

    // STRUKTUR KONTROL: Memastikan nama file diisi
    if(filename){ // OPERATOR: Evaluasi boolean dari string
        // Ambil ekstensi dari URL
        const extMatch = url.match(/\.(jpg|jpeg|png|gif|webp)(\?.*)?$/i); // TIPE DATA: Array atau null
        let ext = "jpg"; // TIPE DATA: String, nilai default

        // STRUKTUR KONTROL: Memeriksa apakah ekstensi ditemukan
        if (extMatch && extMatch[1]) { // OPERATOR: Logical AND (&&)
            ext = extMatch[1].toLowerCase();
        }

        // STRUKTUR KONTROL: Memeriksa apakah nama file sudah berisi ekstensi
        if (!filename.toLowerCase().endsWith("." + ext)) { // OPERATOR: Negasi (!) dan method chaining
            filename += "." + ext; // OPERATOR: Addition assignment (+=)
        }

        document.getElementById("custom-filename").value = filename;
        document.getElementById("download-form").submit();
    }
}
