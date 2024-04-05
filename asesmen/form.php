

<html>
//Buatlah tampilan website sederhana yang memuat foto anda serta nama, nim dan kelas anda.
Di bawah profil anda, buatlah
a. 1 textfield dengan id jumlah
b. 1 select option yang terdiri dari 3 pilihan yaitu sherlock, lupin dan aladin
c. 1 tombol

<head>
    <title>Form Cari Data Buku</title>
</head>

<body>
    <h1>PROFIL</h1>
    <img src="mikail.jpg" width="200" height="200">
    <h2>NAMA: M.MIKAIL GABRIL <br> 6701223002 <br> 46-02 </h2>
    <h3><b>Cari Data Buku</b></h3>
    <form action="form.php" method="POST" onsubmit="return validateForm()">
       
        <tr>
            <td>Jumlah Buku</td>
            <td>:</td>
            <td><input type="number" name="jumlah" id="jumlah" min="1" /></td>
            <br />
        </tr>
        <tr>
            <input type="radio" id="buku" name="buku" value="sherlock">
              <label for="sherlock">Sherlock</label><br>
              <input type="radio" id="buku" name="buku" value="lupin">
              <label for="lupin">Lupin</label><br>
              <input type="radio" id="buku" name="buku" value="aladdin">
              <label for="aladdin">Aladdin</label>
            <br />
        </tr>
        <td>
//Jika jumlah tidak kosong, lakukan pencarian array di atas. Jika pilihan buku tidak ditemukan, tampilkan alert bahwa buku tidak ditemukan
//Jika buku yang dipilih ditemukan dalam array, cek apakah jumlah yang diinputkan lebih banyak dari jumlah buku dalam array. Jika jumlah dari textfield lebih banyak dari array, tampilkan alert bahwa jumlah buku tidak tersedia.
//Jika Jumlah yang diinputkan sama atau kurang dari stock jumlah yang ada di array, tampilkan “silahkan ambil buku anda”

            <input type="submit" name="search" value="search" />
        </td>
    </form>

<script>
    let buku = [{
            "nama": "sherlock",
            "jumlah": 2
        },
        {
            "nama": "lupin",
            "jumlah": 2
        },
        {
            "nama": "aladdin",
            "jumlah": 2
        },
    ]
     //Buatlah fungsi dengan javascript untuk mengambil jumlah dan select option yang dipilih
    function validateForm() {
            let jumlah = document.getElementById('jumlah').value;
            let selectedBook = document.querySelector('input[name="buku"]:checked').value;

            if (jumlah.trim() === '') {
                alert('Jumlah buku tidak boleh kosong.');
                return false;
            }
            
            let bookFound = false;
            let availableBooks = buku.filter(book => book.nama === selectedBook);
            if (availableBooks.length === 0) {
                alert('Buku tidak ditemukan.');
                return false;
            }
        }
    
</script>

</body>

</html>