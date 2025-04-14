<?php 
// STATEMENT INCLUDE: Memasukkan file header ke dalam halaman
include 'header.php'; 

// Mengatur timezone ke WIB (Western Indonesia Time)
date_default_timezone_set('Asia/Jakarta');

// VARIABEL: Menyimpan waktu saat ini
$currentDateTime = date('d-m-Y H:i:s'); // TIPE DATA: String
?>

    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Image Downloader</h1>
        
        <!-- STRUKTUR: Menampilkan tanggal dan waktu saat ini -->
        <div class="text-center mb-4 text-gray-600">
            <p>Waktu saat ini:</p>
            <p><?php echo $currentDateTime; ?></p>
        </div>
        
        <form id="download-form" action="download.php" method="post" class="space-y-4">
          
                <div class="space-y-2">
                    <label for="Url" class="block text-sm font-medium text-gray-700">Masukkan URL Gambar:</label>
                    <input type="url" name="Url" id="Url" placeholder="https://example.com/image.jpg" required autocomplete="off"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        <input type="hidden" name="filename" id="custom-filename">
                </div>
                
                <div class="flex space-x-3">
                    <button type="button" onclick="previewImg()" 
                            class="w-1/2 bg-secondary hover:bg-gray-700 text-white py-2 px-4 rounded-md transition duration-300 font-medium">
                        Preview
                    </button>
                    <button type="submit" name="submit" onclick="confrimDownload()"
                            class="w-1/2 bg-primary hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-300 font-medium">
                        Download
                    </button>
                </div>
        </form>

        <div id="previewImg" class="mt-8 hidden">
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Preview</h2>
            <div class="border border-gray-200 rounded-lg p-2 bg-gray-50">
                <img id="image-preview" src="" alt="Preview gambar" class="w-full rounded max-h-80 object-contain mx-auto">
            </div>
        </div>
    </div>

<?php 
// STATEMENT INCLUDE: Memasukkan file footer ke dalam halaman
include 'footer.php'; 
?>