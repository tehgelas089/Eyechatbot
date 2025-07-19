<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="lagi.css">
  <title>Eye chatbot</title>
  <link rel="website icon" type="png" href="palestina.png">
</head>

<body>
  <nav>
    <div class="logo"><img src="palestina.png"></div>
    <div class="conten">𝔼𝕪𝕖 Chatbot </div>
    <div class="links">
      <a href="#Home">Home</a>
      <a href="#Skil">Skill</a>
      <a href="#Kunjungan">Buku tamu</a>
      <a href="#Contak">Kontak</a>
      <a class="Ai" href="chat.html">Chat Ai</a>
    </div>
  </nav>

  <marquee><i>Free Palestine</i></marquee>
  <br>

  <div class="aboutme" id="Home">
    <div class="info">
      <a href="chat.html">

        <img src="open me.jpeg">
      </a>
      <p class="data">Nama: <br>
        versi: </p>
      <p class="fill">Eye chatbot<br> 0.1 beta </p>
    </div>
  </div>
  <br>

  <h1 id="Skil">Kabar Palestina</h1>
  <br>
  <div class="skil">
    <div class="colom">
      <img src="p1.jpg" class="free">
      <p class="news">Setidaknya 55.362 warga Palestina tewas akibat genosida Israel di Jalur Gaza </p>
      <br>
      <a class="klik" href="https://www.aa.com.tr/id/dunia/jumlah-korban-tewas-di-gaza-capai-55400-jiwa-saat-genosida-israel-berlanjut/3599970">Read More</a>
    </div>
    <div class="colom">
      <img src="p2.jpg" class="free">
      <p class="news">warga Palestina yang kelaparan ditembaki,
        <br>bahkan dengan menggunakan senapan mesin,
        meski mereka tidak menimbulkan ancaman.
      </p>
      <br>
      <a class="klik" href="https://www.bbc.com/indonesia/articles/c98jd40nl6no">Read More</a>
    </div>
    <div class="colom">
      <img src="p3.jpg" class="free">
      <p class="news">Serangan Israel: 6 Pesepakbola Palestina Tewas dalam 15 Hari</p>
      <br>
      <a class="klik" href="https://www.cnnindonesia.com/olahraga/20250717111841-142-1251682/serangan-israel-6-pesepakbola-palestina-tewas-dalam-15-hari">Read More</a>
    </div>
  </div>

  <center>
    <br><br>
    <div class=" mode" id="Kunjungan">


      <h1>Buku Tamu </h1>
      <br>
      <a class="controli" href="tambah.php">+ Beri Jejak digital</a><br><br>

      <table border="1" cellpadding="8">
        <tr>
          <th>No</th>
          <th>Nama user</th>
          <th>Alamat</th>
          <th>Rating 1-10</th>
          <th>Aksi</th>
        </tr>
  </center>
  <?php
  $no = 1;
  $result = mysqli_query($conn, "SELECT * FROM aset");
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['Nama_barang']; ?></td>
      <td><?= $row['harga']; ?></td>
      <td><?= $row['stok']; ?></td>
      <td>
        <a class="controlu" href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a class="control" href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
      </td>
    </tr>
  <?php } ?>
  </table>
  </div>

  <br>
  <br>
  <br>
  <br>
  <!-- <div class="contact" id="Contak">
    <h2>Kontak </h2>
    <input type="text" placeholder="Nama" class="form-input">
    <input type="password" placeholder="Password" class="form-input">
    <textarea placeholder="Masukan pesan" class="form-textarea"></textarea>

    <a class="button" href="fake.html">Kirim</a>
  </div> -->

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#06923E" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,154.7C384,139,480,85,576,96C672,107,768,181,864,186.7C960,192,1056,128,1152,122.7C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  </svg>

</body>

</html>