

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
    <form action="form.php" method="POST">
        <tr>
            <td>Jumlah Buku</td>
            <td>:</td>
            <td><input type="number" name="jumlah" id="jumlah" min="1" /></td>
            <br />
        </tr>
        <tr>
            <input type="radio" id="sherlock" name="buku" value="Sherlock">
              <label for="html">Sherlock</label><br>
              <input type="radio" id="lupin" name="buku" value="Lupin">
              <label for="lupin">Lupin</label><br>
              <input type="radio" id="aladdin" name="buku" value="Aladdin">
              <label for="aladdin">Aladdin</label>
            <br />
        </tr>
        <td>
            <input type="submit" name="search" value="search" />
        </td>
    </form>



</body>

</html>