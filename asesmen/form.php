<html>


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

            let stock = availableBooks[0].jumlah;
            if (parseInt(jumlah) > stock) {
                alert('Jumlah buku tidak tersedia.');
                return false;
            }

            alert('Silahkan ambil buku Anda.');
            return true;
        }
    </script>

</body>

</html>