<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ketahui Dirimu - Kemampuan Berpikir Komputasi</title>
  <?php include 'assets/include/head.php'; ?>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>

<body class="patternbg">
  <?php include 'assets/include/navbar.php'; ?>
  <div class="container">
    <div class="row">
      <?php include 'assets/include/questionNavigation.php'; ?>

      <div class="col-lg-8 my-4">
        <form id="cttest" action="result.php" method="POST">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-baslangic" role="tabpanel"
              aria-labelledby="list-baslangic-list">

              <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Selamat datang!</h4>
                <p>Sebelum memulai, kami mohon untuk melengkapi informasi publik anda. Tenang saja, seluruh data ini
                  digunakan semata mata untuk penelitian serta menjamin privasi anda.</p>
                <hr>
                <p class="mb-0">Untuk melihat skor Berpikir Komputasi, Anda perlu mengisi <strong>semua kolom
                    sepenuhnya</strong>.</p>
                <hr>
                <p class="mb-0">Untuk masalah atau pertanyaan apa pun, Anda dapat mengirim email ke
                  <strong>learningcenter@um.ac.id</strong>.
                </p>
              </div>

              <div class="card panel-primary">
                <div class="card-header">
                  Profil
                </div>
                <div class="card-body">

                  <div class="form-group">
                    <label for="inputCity">Nomor Induk Mahasiswa</label>
                    <input type="text" class="form-control text-uppercase" id="adsoyad" name="adsoyad" maxlength="30"
                      data-uyari="Profile: Nickname" required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-3" style="display:none;">
                      <label for="okulno">Nomor Sekolah</label>
                      <input type="text" class="form-control" id="okulno" name="okulno" value="<?= rand(10, 999) ?>"
                        maxlength="8" data-uyari="Profile: School Number" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="okultip">Jenis Sekolah</label>
                      <select id="okultip" name="okultip" class="form-control" data-uyari="Profile: School Type"
                        required>
                        <option value="1" selected>Lewati bidang ini</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="cinsiyet">Jenis Kelamin</label>
                      <select id="cinsiyet" name="cinsiyet" class="form-control" data-uyari="Profile: Gender" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">Wanita</option>
                        <option value="2">Pria</option>
                        <option value="3">Lainnya</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="sinif">Angkatan</label>
                      <select id="sinif" name="sinif" class="form-control" data-uyari="Profile: Grade" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru1" data-action="nav"
                    data-controls="soru1">Selanjutnya</a>
                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="list-soru1" role="tabpanel" aria-labelledby="list-soru1-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Pola Pengakuan</span> <span
                    class="badge badge-secondary p-2">Dekomposisi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Anjing Aneh</h5>
                  <p class="card-text">Dalam sebuah klinik hewan, terdapat beberapa anjing yang berperilaku aneh.
                    Tandailah anjing tersebut untuk dirawat. Indetifikasi anjing yang aneh berdasarkan kolom (vertikal)
                  </p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru1.png" class="img-fluid"></p>

                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="satir1">Baris ke-1</label>
                      <select id="satir1" name="s1_c1" class="form-control" data-uyari="Weird Dog: 1. Row" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="satir2">Baris ke-2</label>
                      <select id="satir2" name="s1_c2" class="form-control" data-uyari="Weird Dog: 2. Row" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="satir3">Baris ke-3</label>
                      <select id="satir3" name="s1_c3" class="form-control" data-uyari="Weird Dog: 3. Row" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="satir4">Baris ke-4</label>
                      <select id="satir4" name="s1_c4" class="form-control" data-uyari="Weird Dog: 4. Row" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-baslangic" data-action="nav"
                    data-controls="baslangic">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru2" data-action="nav"
                    data-controls="soru2">Selanjutnya</a>
                </div>
              </div>


            </div>
            <div class="tab-pane fade" id="list-soru2" role="tabpanel" aria-labelledby="list-soru2-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Berpikir Kreatif</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span> <span
                    class="badge badge-secondary p-2">Generalisasi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Teks Terenkripsi</h5>
                  <p class="card-text">Terdapat sebuah pesan rahasia yang disampaikan oleh tukang kebun. Beliau
                    memberikan petunjuk dasar untuk memecahkan pesan yang ia berikan. Pecahkan pesan tersebut. Kamu
                    dapat berinteraksi dengan lembar petunjuk untuk memudahkan dalam memecahkan pesan tersebut. </p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru2.png" class="img-fluid"></p>

                  <div class="card">
                    <div class="card-body">
                      <div class="card-title">Kunci</div>
                      <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="anahtarKutu" id="key1" ondrop="drop(event)" ondragover="allowDrop(event)">1
                            </div>
                            <div class="anahtarKutu" id="key2" ondrop="drop(event)" ondragover="allowDrop(event)">2
                            </div>
                            <div class="anahtarKutu" id="key3" ondrop="drop(event)" ondragover="allowDrop(event)">3
                            </div>
                            <div class="anahtarKutu" id="key4" ondrop="drop(event)" ondragover="allowDrop(event)">4
                            </div>
                            <div class="anahtarKutu" id="key5" ondrop="drop(event)" ondragover="allowDrop(event)">5
                            </div>
                            <div class="anahtarKutu" id="key6" ondrop="drop(event)" ondragover="allowDrop(event)">6
                            </div>
                            <div class="anahtarKutu" id="key7" ondrop="drop(event)" ondragover="allowDrop(event)">7
                            </div>
                            <div class="anahtarKutu" id="key8" ondrop="drop(event)" ondragover="allowDrop(event)">8
                            </div>
                            <div class="anahtarKutu" id="key9" ondrop="drop(event)" ondragover="allowDrop(event)">9
                            </div>
                            <div class="anahtarKutu" id="key10" ondrop="drop(event)" ondragover="allowDrop(event)">10
                            </div>
                            <div class="anahtarKutu" id="key11" ondrop="drop(event)" ondragover="allowDrop(event)">11
                            </div>
                            <div class="anahtarKutu" id="key12" ondrop="drop(event)" ondragover="allowDrop(event)">12
                            </div>
                            <div class="anahtarKutu" id="key13" ondrop="drop(event)" ondragover="allowDrop(event)">13
                            </div>
                            <div class="anahtarKutu" id="key14" ondrop="drop(event)" ondragover="allowDrop(event)">14
                            </div>
                            <div class="anahtarKutu" id="key15" ondrop="drop(event)" ondragover="allowDrop(event)">15
                            </div>
                            <div class="anahtarKutu" id="key16" ondrop="drop(event)" ondragover="allowDrop(event)">16
                            </div>
                            <div class="anahtarKutu" id="key17" ondrop="drop(event)" ondragover="allowDrop(event)">17
                            </div>
                            <div class="anahtarKutu" id="key18" ondrop="drop(event)" ondragover="allowDrop(event)">18
                            </div>
                            <div class="anahtarKutu" id="key19" ondrop="drop(event)" ondragover="allowDrop(event)">19
                            </div>
                            <div class="anahtarKutu" id="key20" ondrop="drop(event)" ondragover="allowDrop(event)">20
                            </div>
                            <div class="anahtarKutu" id="key21" ondrop="drop(event)" ondragover="allowDrop(event)">21
                            </div>
                            <div class="anahtarKutu" id="key22" ondrop="drop(event)" ondragover="allowDrop(event)">22
                            </div>
                            <div class="anahtarKutu" id="key23" ondrop="drop(event)" ondragover="allowDrop(event)">23
                            </div>
                            <div class="anahtarKutu" id="key24" ondrop="drop(event)" ondragover="allowDrop(event)">24
                            </div>
                            <div class="anahtarKutu" id="key25" ondrop="drop(event)" ondragover="allowDrop(event)">25
                            </div>
                            <div class="anahtarKutu" id="key26" ondrop="drop(event)" ondragover="allowDrop(event)">26
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="alfabeKutu" id="abc1" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba1" draggable="true" ondragstart="drag(event)">A</span></div>
                            <div class="alfabeKutu" id="abc2" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba2" draggable="true" ondragstart="drag(event)">B</span></div>
                            <div class="alfabeKutu" id="abc3" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba3" draggable="true" ondragstart="drag(event)">C</span></div>
                            <div class="alfabeKutu" id="abc4" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba4" draggable="true" ondragstart="drag(event)">D</span></div>
                            <div class="alfabeKutu" id="abc5" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba5" draggable="true" ondragstart="drag(event)">E</span></div>
                            <div class="alfabeKutu" id="abc6" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba6" draggable="true" ondragstart="drag(event)">F</span></div>
                            <div class="alfabeKutu" id="abc7" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba7" draggable="true" ondragstart="drag(event)">G</span></div>
                            <div class="alfabeKutu" id="abc8" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba8" draggable="true" ondragstart="drag(event)">H</span></div>
                            <div class="alfabeKutu" id="abc9" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba9" draggable="true" ondragstart="drag(event)">I</span></div>
                            <div class="alfabeKutu" id="abc10" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba10" draggable="true" ondragstart="drag(event)">J</span></div>
                            <div class="alfabeKutu" id="abc11" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba11" draggable="true" ondragstart="drag(event)">K</span></div>
                            <div class="alfabeKutu" id="abc12" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba12" draggable="true" ondragstart="drag(event)">L</span></div>
                            <div class="alfabeKutu" id="abc13" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba13" draggable="true" ondragstart="drag(event)">M</span></div>
                            <div class="alfabeKutu" id="abc14" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba14" draggable="true" ondragstart="drag(event)">N</span></div>
                            <div class="alfabeKutu" id="abc15" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba15" draggable="true" ondragstart="drag(event)">O</span></div>
                            <div class="alfabeKutu" id="abc16" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba16" draggable="true" ondragstart="drag(event)">P</span></div>
                            <div class="alfabeKutu" id="abc17" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba17" draggable="true" ondragstart="drag(event)">Q</span></div>
                            <div class="alfabeKutu" id="abc18" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba18" draggable="true" ondragstart="drag(event)">R</span></div>
                            <div class="alfabeKutu" id="abc19" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba19" draggable="true" ondragstart="drag(event)">S</span></div>
                            <div class="alfabeKutu" id="abc20" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba20" draggable="true" ondragstart="drag(event)">T</span></div>
                            <div class="alfabeKutu" id="abc21" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba21" draggable="true" ondragstart="drag(event)">U</span></div>
                            <div class="alfabeKutu" id="abc22" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba22" draggable="true" ondragstart="drag(event)">V</span></div>
                            <div class="alfabeKutu" id="abc23" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba23" draggable="true" ondragstart="drag(event)">W</span></div>
                            <div class="alfabeKutu" id="abc24" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba24" draggable="true" ondragstart="drag(event)">X</span></div>
                            <div class="alfabeKutu" id="abc25" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba25" draggable="true" ondragstart="drag(event)">Y</span></div>
                            <div class="alfabeKutu" id="abc26" ondrop="drop(event)" ondragover="allowDrop(event)"><span
                                id="cba26" draggable="true" ondragstart="drag(event)">Z</span></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>



                  <p class="card-text">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="sifrelimesaj">Pesan Terenkripsi</label>
                      <input type="text" name="s2_c1" class="form-control text-uppercase" id="sifrelimesaj"
                        maxlength="30" data-uyari="Encrypted Message" required>
                    </div>
                  </div>
                  </p>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru1" data-action="nav"
                    data-controls="soru1">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru3" data-action="nav"
                    data-controls="soru3">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru3" role="tabpanel" aria-labelledby="list-soru3-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Berpikir Kreatif</span> <span
                    class="badge badge-secondary p-2">Pemikiran Algoritmik</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Pemandu Wisata</h5>
                  <p class="card-text">Anda sedang berlibur dengan keluarga besar di akhir tahun. Sebagai seseorang yang
                    telah tinggal di kota malang, anda diminta untuk menjadi tour guide. Terdapat beragam destinasi
                    wisata yang menarik untuk dikunjungi. </p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru3.png" class="img-fluid"></p>

                  <!-- Buraya gelsin sortable -->
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <h5>Locations</h5>
                        <ul id="turRehberi1" class="list-group">
                          <li class="list-group-item list-group-item-action" data-mekan="0">Hotel</li>
                          <li class="list-group-item list-group-item-action" data-mekan="1">Taman</li>
                          <li class="list-group-item list-group-item-action" data-mekan="2">Akuarium</li>
                          <li class="list-group-item list-group-item-action" data-mekan="3">Pantai</li>
                          <li class="list-group-item list-group-item-action" data-mekan="4">Galeri Seni</li>
                          <li class="list-group-item list-group-item-action" data-mekan="5">Museum Sains</li>
                          <li class="list-group-item list-group-item-action" data-mekan="6">Universitas</li>
                          <li class="list-group-item list-group-item-action" data-mekan="7">Pabrik</li>
                          <li class="list-group-item list-group-item-action" data-mekan="8">Kastil</li>
                          <li class="list-group-item list-group-item-action" data-mekan="9">Jembatan</li>
                        </ul>
                      </div>
                      <div class="col">
                        <h5>Route</h5>
                        <ul id="turRehberi2" class="list-group" style="height:550px;">
                          <li class="list-group-item list-group-item-action" data-mekan="0">Hotel</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <input type="text" name="s3_c1" id="rota" class="d-none" data-uyari="Tour Guide" required>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru2" data-action="nav"
                    data-controls="soru2">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru4" data-action="nav"
                    data-controls="soru4">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru4" role="tabpanel" aria-labelledby="list-soru4-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Berpikir Algoritma</span> <span
                    class="badge badge-secondary p-2">Evaluation</span></div>
                <div class="card-body">
                  <h5 class="card-title">Sensor Suhu</h5>
                  <p class="card-text">Seorang pemrogram komputer mengukur nilai suhu dengan sensor suhu yang
                    ditempatkan pada titik-titik yang berbeda pada besi logam. Untuk melakukan pengukuran ini, ia
                    memasukkan kode yang telah ditulis sebelumnya ke dalam sirkuit yang dapat diprogram. Pada opsi
                    manakah output dari kode tersebut diberikan dengan benar?</p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru4.png" class="img-fluid"></p>

                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">Kode yang ditulis oleh pemrogram:</h6>
                      <kbd>LOOP FOREVER</kbd>:<br>
                      val1 = <kbd>BACA</kbd>(1) <br>
                      val2 = <kbd>BACA</kbd>(2)<br>
                      val3 = <kbd>BACA</kbd>(3)<br>
                      val4 = <kbd>BACA</kbd>(4)<br>
                      val5 = <kbd>BACA</kbd>(5)<br>
                      <kbd>TULIS</kbd> 1, val1, waktu<br>
                      <kbd>TULIS</kbd> 2, val2, wakty<br>
                      <kbd>TULIS</kbd> 3, val3, waktu<br>
                      <kbd>TULIS</kbd> 4, val4, waktu<br>
                      <kbd>TULIS</kbd> 5, val5, waktu<br>
                      <kbd>TUNGGU</kbd> 20 detik
                    </div>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <div class="input-group">
                          <div class="input-group">
                            <div class="input-group-prepend marginRight">
                              <div class="input-group-text">
                                <input type="radio" name="s4_c1" id="s4_c1" value="1" data-uyari="Temperature Sensor"
                                  required>
                              </div>
                            </div>
                            <samp>
                              1, 28.2, 10:20:00<br>
                              1, 28.6, 10:20:20<br>
                              1, 32.1, 10:20:40<br>
                              1, 34.3, 10:21:00<br>
                              1, 33.8, 10:21:00<br>
                              1, 36.7, 10:22:00<br>
                              1, 37.9, 10:22:20<br>
                              ...
                            </samp>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="input-group">
                          <div class="input-group">
                            <div class="input-group-prepend marginRight">
                              <div class="input-group-text">
                                <input type="radio" name="s4_c1" id="s4_c2" value="2" data-uyari="Temperature Sensor">
                              </div>
                            </div>
                            <samp>
                              1, 28.2, 10:20:00<br>
                              2, 28.6, 10:20:20<br>
                              3, 29.1, 10:20:40<br>
                              4, 30.3, 10:21:00<br>
                              5, 30.9, 10:21:20<br>
                              1, 31.6, 10:21:40<br>
                              2, 32.3, 10:22:00<br>
                              ...
                            </samp>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="padding-top:10px;">
                      <div class="col">
                        <div class="input-group">
                          <div class="input-group">
                            <div class="input-group-prepend marginRight">
                              <div class="input-group-text">
                                <input type="radio" name="s4_c1" id="s4_c3" value="3" data-uyari="Temperature Sensor">
                              </div>
                            </div>
                            <samp>
                              1, 28.2, 10:20:00<br>
                              2, 28.6, 10:20:00<br>
                              3, 29.1, 10:20:00<br>
                              4, 30.3, 10:20:00<br>
                              5, 30.9, 10:20:00<br>
                              1, 31.6, 10:20:20<br>
                              2, 32.3, 10:20:20<br>
                              ...
                            </samp>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="input-group">
                          <div class="input-group">
                            <div class="input-group-prepend marginRight">
                              <div class="input-group-text">
                                <input type="radio" name="s4_c1" id="s4_c4" value="4" data-uyari="Temperature Sensor">
                              </div>
                            </div>
                            <samp>
                              1, 30.2, 10:20:00<br>
                              2, 29.6, 10:20:00<br>
                              3, 28.1, 10:20:00<br>
                              4, 31.3, 10:20:00<br>
                              5, 35.9, 10:20:00<br>
                              1, 31.6, 10:20:10<br>
                              2, 32.3, 10:20:10<br>
                              ...
                            </samp>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru3" data-action="nav"
                    data-controls="soru3">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru5" data-action="nav"
                    data-controls="soru5">Selanjutnya</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-soru5" role="tabpanel" aria-labelledby="list-soru5-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Pemecahan Masalah</span> <span
                    class="badge badge-secondary p-2">Pemikiran Algoritmik</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Tim Insinyur</h5>
                  <p class="card-text">Sekelompok insinyur telah mengembangkan kendaraan yang dikendalikan dari jarak
                    jauh. Tetapi mereka salah memprogram rute kendaraan yang dikendalikan dari jarak jauh. Anda perlu
                    mengurutkan ulang rute sehingga kendaraan yang dikendalikan dari jarak jauh mencapai tujuannya.</p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru5.png" class="img-fluid"></p>

                  <!-- Buraya gelsin sortable -->
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <h5>Rota</h5>
                        <ul id="muhendis" class="list-group">
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Selatan
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Barat
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">Utara
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Selatan
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Barat
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Selatan
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Barat
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">Utara
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Selatan
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Timur
                          </li>
                          <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Barat
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <input type="text" name="s5_c1" id="muhcevap" data-uyari="Engineer Team" class="d-none" required>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru4" data-action="nav"
                    data-controls="soru4">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru6" data-action="nav"
                    data-controls="soru6">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru6" role="tabpanel" aria-labelledby="list-soru6-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Pemikiran Algoritmik</span> <span
                    class="badge badge-secondary p-2">Abstraksi</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span> <span
                    class="badge badge-secondary p-2">Generalisasi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Labirin Permen</h5>
                  <p class="card-text">Robot diprogram untuk mengumpulkan permen sebanyak mungkin. Robot mengumpulkan
                    permen saat melewati setiap sel. Setiap sel memiliki 0, 1, 2, dan 3 permen. Robot hanya bisa
                    bergerak ke atas dan ke kanan. Berapa banyak permen yang paling banyak dikumpulkan oleh robot
                    tersebut?</p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru6.png" class="img-fluid"></p>

                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="seker">Jumlah Permen</label>
                      <select id="seker" name="s6_c1" class="form-control" data-uyari="Candy Count" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">10 Permen</option>
                        <option value="5">11 Permen</option>
                        <option value="2">12 Permen</option>
                        <option value="3">14 Permen</option>
                        <option value="4">16 Permen</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru5" data-action="nav"
                    data-controls="soru5">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru7" data-action="nav"
                    data-controls="soru7">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru7" role="tabpanel" aria-labelledby="list-soru7-list">
              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Berpikir Kritis</span> <span
                    class="badge badge-secondary p-2">Abstraksi</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span> <span
                    class="badge badge-secondary p-2">Dekomposisi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Nomor Tersembunyi</h5>
                  <p class="card-text">Seorang pemrogram komputer ingin menampilkan angka digital menggunakan 7 LED.
                    Setiap bagian LED diberi label seperti yang ditunjukkan dalam gambar (A, B, C, D, E, F dan G).
                    Bagian LED mana yang harus dinyalakan oleh pemrogram untuk menulis angka <kbd>6813</kbd>? Contohnya,
                    angka 103 ditunjukkan dalam gambar.</p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru7.png" class="img-fluid"></p>

                  <table class="table table-hover text-center table-bordered" id="sayibul">
                    <thead>
                      <tr>

                        <th scope="col">A</th>
                        <th scope="col">B</th>
                        <th scope="col">C</th>
                        <th scope="col">D</th>
                        <th scope="col">E</th>
                        <th scope="col">F</th>
                        <th scope="col">G</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td id="soru_a1" data-sayibul="0"></td>
                        <td id="soru_b1" data-sayibul="0"></td>
                        <td id="soru_c1" data-sayibul="0"></td>
                        <td id="soru_d1" data-sayibul="0"></td>
                        <td id="soru_e1" data-sayibul="0"></td>
                        <td id="soru_f1" data-sayibul="0"></td>
                        <td id="soru_g1" data-sayibul="0"></td>
                      </tr>
                      <tr>

                        <td id="soru_a2" data-sayibul="0"></td>
                        <td id="soru_b2" data-sayibul="0"></td>
                        <td id="soru_c2" data-sayibul="0"></td>
                        <td id="soru_d2" data-sayibul="0"></td>
                        <td id="soru_e2" data-sayibul="0"></td>
                        <td id="soru_f2" data-sayibul="0"></td>
                        <td id="soru_g2" data-sayibul="0"></td>
                      </tr>
                      <tr>

                        <td id="soru_a3" data-sayibul="0"></td>
                        <td id="soru_b3" data-sayibul="0"></td>
                        <td id="soru_c3" data-sayibul="0"></td>
                        <td id="soru_d3" data-sayibul="0"></td>
                        <td id="soru_e3" data-sayibul="0"></td>
                        <td id="soru_f3" data-sayibul="0"></td>
                        <td id="soru_g3" data-sayibul="0"></td>
                      </tr>
                      <tr>

                        <td id="soru_a4" data-sayibul="0"></td>
                        <td id="soru_b4" data-sayibul="0"></td>
                        <td id="soru_c4" data-sayibul="0"></td>
                        <td id="soru_d4" data-sayibul="0"></td>
                        <td id="soru_e4" data-sayibul="0"></td>
                        <td id="soru_f4" data-sayibul="0"></td>
                        <td id="soru_g4" data-sayibul="0"></td>
                      </tr>
                    </tbody>
                  </table>
                  <input type="hidden" name="s_a1" id="s_a1" value="0">
                  <input type="hidden" name="s_b1" id="s_b1" value="0">
                  <input type="hidden" name="s_c1" id="s_c1" value="0">
                  <input type="hidden" name="s_d1" id="s_d1" value="0">
                  <input type="hidden" name="s_e1" id="s_e1" value="0">
                  <input type="hidden" name="s_f1" id="s_f1" value="0">
                  <input type="hidden" name="s_g1" id="s_g1" value="0">
                  <input type="hidden" name="s_a2" id="s_a2" value="0">
                  <input type="hidden" name="s_b2" id="s_b2" value="0">
                  <input type="hidden" name="s_c2" id="s_c2" value="0">
                  <input type="hidden" name="s_d2" id="s_d2" value="0">
                  <input type="hidden" name="s_e2" id="s_e2" value="0">
                  <input type="hidden" name="s_f2" id="s_f2" value="0">
                  <input type="hidden" name="s_g2" id="s_g2" value="0">
                  <input type="hidden" name="s_a3" id="s_a3" value="0">
                  <input type="hidden" name="s_b3" id="s_b3" value="0">
                  <input type="hidden" name="s_c3" id="s_c3" value="0">
                  <input type="hidden" name="s_d3" id="s_d3" value="0">
                  <input type="hidden" name="s_e3" id="s_e3" value="0">
                  <input type="hidden" name="s_f3" id="s_f3" value="0">
                  <input type="hidden" name="s_g3" id="s_g3" value="0">
                  <input type="hidden" name="s_a4" id="s_a4" value="0">
                  <input type="hidden" name="s_b4" id="s_b4" value="0">
                  <input type="hidden" name="s_c4" id="s_c4" value="0">
                  <input type="hidden" name="s_d4" id="s_d4" value="0">
                  <input type="hidden" name="s_e4" id="s_e4" value="0">
                  <input type="hidden" name="s_f4" id="s_f4" value="0">
                  <input type="hidden" name="s_g4" id="s_g4" value="0">

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru6" data-action="nav"
                    data-controls="soru6">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru8" data-action="nav"
                    data-controls="soru8">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru8" role="tabpanel" aria-labelledby="list-soru8-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Pemikiran Algoritmik</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span> <span
                    class="badge badge-secondary p-2">Generalisasi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Surat Sandi</h5>
                  <p class="card-text">Seorang tukang pos akan mengantarkan surat di dalam tasnya sesuai dengan
                    orientasi kotak-kotak tersebut. Untuk mengantarkan surat tersebut, ia harus membalikkan kotak-kotak
                    tersebut sesuai dengan kode yang ditulis oleh programmer. Di manakah titik pengiriman surat
                    tersebut?</p>

                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">Kode yang ditulis oleh pemrogram:</h6>
                      <kbd>JIKA</kbd> Kotak_Warna = Hijau:<br>
                      <kbd>BERBELOK</kbd> Kotak 90°<br>
                      <kbd>JIKA</kbd> Kotak_Warna = Merah:<br>
                      <kbd>BERBELOK</kbd> Kotak 270°<br>
                      <kbd>JIKA</kbd> Kotak_Warna= Biru:<br>
                      <kbd>BERBELOK</kbd> Kotak 180°<br>
                      <kbd>JIKA BUKAN:</kbd><br>
                      <kbd>JANGAN BERBELOK</kbd>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-body" id="kutular">
                      <h6 class="card-subtitle mb-2 text-muted">Kotak (Klik diatasnya):</h6>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-warning"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-success"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-warning"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-warning"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-danger"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-danger"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-primary"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                      <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-primary"
                        data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    </div>
                  </div>

                  <br>
                  <p class="card-text text-center"><img src="assets/img/soru/soru8.png" class="img-fluid"></p>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="mektup">Titik Pengiriman</label>
                      <select id="mektup" name="s8_c1" class="form-control" data-uyari="Delivery Point" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">1. Titik Pengiriman</option>
                        <option value="2">2. Titik Pengiriman</option>
                        <option value="3">3. Titik Pengiriman</option>
                        <option value="4">4. Titik Pengiriman</option>
                        <option value="5">5. Titik Pengiriman</option>
                        <option value="6">6. Titik Pengiriman</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru7" data-action="nav"
                    data-controls="soru7">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru9" data-action="nav"
                    data-controls="soru9">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru9" role="tabpanel" aria-labelledby="list-soru9-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Pemecahan Masalah</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span> <span
                    class="badge badge-secondary p-2">Generalisasi</span></div>
                <div class="card-body">
                  <h5 class="card-title">Peneliti Ikan</h5>
                  <p class="card-text">Sekelompok ilmuwan mempelajari populasi ikan di berbagai daerah. Jawablah
                    pertanyaan-pertanyaan sesuai dengan data yang dip</p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Tahun</th>
                          <th scope="col">Jenis</th>
                          <th scope="col">Populasi</th>
                          <th scope="col">Permukaan Air (m)</th>
                          <th scope="col">Wilayah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>2010</th>
                          <td>Kacang</td>
                          <td>6.000</td>
                          <td>50</td>
                          <td>Aegean</td>
                        </tr>
                        <tr>
                          <th>2017</th>
                          <td>Ikan Anchovy</td>
                          <td>10.150</td>
                          <td>88</td>
                          <td>Laut Euxine</td>
                        </tr>
                        <tr>
                          <th>2017</th>
                          <td>Ikan Anchovy</td>
                          <td>7.350</td>
                          <td>65</td>
                          <td>Marmara</td>
                        </tr>
                        <tr>
                          <th>2019</th>
                          <td>Gray Mullet</td>
                          <td>2.350</td>
                          <td>38</td>
                          <td>Mediterania</td>
                        </tr>
                        <tr>
                          <th>2014</th>
                          <td>Bas Laut</td>
                          <td>8.430</td>
                          <td>63</td>
                          <td>Marmara</td>
                        </tr>
                        <tr>
                          <th>2009</th>
                          <td>Makarel</td>
                          <td>1.430</td>
                          <td>113</td>
                          <td>Laut Euxine</td>
                        </tr>
                        <tr>
                          <th>2011</th>
                          <td>Kacang</td>
                          <td>13.692</td>
                          <td>130</td>
                          <td>Mediterania</td>
                        </tr>
                        <tr>
                          <th>2018</th>
                          <td>Gray Mullet</td>
                          <td>6.350</td>
                          <td>74</td>
                          <td>Aegean</td>
                        </tr>
                        <tr>
                          <th>2016</th>
                          <td>Makarel</td>
                          <td>420</td>
                          <td>122</td>
                          <td>Marmara</td>
                        </tr>
                        <tr>
                          <th>2012</th>
                          <td>Gray Mullet</td>
                          <td>5.150</td>
                          <td>69</td>
                          <td>Aegean</td>
                        </tr>
                        <tr>
                          <th>2020</th>
                          <td>Bass Laut</td>
                          <td>2.150</td>
                          <td>47</td>
                          <td>Laut Euxine</td>
                        </tr>
                        <tr>
                          <th>2013</th>
                          <td>Ikan Kapur Sirih</td>
                          <td>9.850</td>
                          <td>83</td>
                          <td>Laut Euxine</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="balik_s1">Pada tahun berapa data pertama kali diperoleh?</label>
                      <select id="balik_s1" name="s9_c1" class="form-control" data-uyari="Fish Research 1" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">2005</option>
                        <option value="2">2008</option>
                        <option value="3">2010</option>
                        <option value="4">2009</option>
                        <option value="5">2011</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="balik_s4">Wilayah mana yang memiliki lebih banyak spesies ikan?</label>
                      <select id="balik_s4" name="s9_c4" class="form-control" data-uyari="Fish Research 2" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">Laut Euxine</option>
                        <option value="2">Aegean</option>
                        <option value="3">Marmara</option>
                        <option value="4">Mediterania</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="balik_s3">Ikan mana yang akan memiliki populasi tertinggi antara tahun 2016 dan
                        2020?</label>
                      <select id="balik_s3" name="s9_c3" class="form-control" data-uyari="Fish Research 3" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">Kacang</option>
                        <option value="2">Anchovy</option>
                        <option value="3">Makarel</option>
                        <option value="4">Ikan Kapur Sirih</option>
                        <option value="5">Bass Laut</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="balik_s2">Di maa wilayah dengan ketinggian air terendah antara tahun
                        2017-2019?</label>
                      <select id="balik_s2" name="s9_c2" class="form-control" data-uyari="Fish Research 4" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="1">Laut Euxine</option>
                        <option value="2">Aegean</option>
                        <option value="3">Marmara</option>
                        <option value="4">Mediterania</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru8" data-action="nav"
                    data-controls="soru8">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru10" data-action="nav"
                    data-controls="soru10">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru10" role="tabpanel" aria-labelledby="list-soru10-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Dekomposisi</span> <span
                    class="badge badge-secondary p-2">Abstraksi</span> <span class="badge badge-secondary p-2">Pemikiran
                    Algoritmik</span></div>
                <div class="card-body">
                  <h5 class="card-title">Lima Tongkat</h5>
                  <p class="card-text">Emre memiliki lima batang kayu. Dia memperoleh bentuk pertama dengan lima batang.
                    Kemudian Ayşe memindahkan satu batang dan memperoleh bentuk kedua. Pada langkah terakhir, Elif juga
                    memindahkan satu tongkat. Dalam hal ini, bentuk mana yang tidak dapat diperoleh Elif?</p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru9.png" class="img-fluid"></p>

                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="soru9">Nomor Bentuk</label>
                      <select id="soru9" name="s10_c1" class="form-control" data-uyari="Five Number" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru9" data-action="nav"
                    data-controls="soru9">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru11" data-action="nav"
                    data-controls="soru11">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru11" role="tabpanel" aria-labelledby="list-soru11-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Abstraksi</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span> <span class="badge badge-secondary p-2">Pemikiran
                    Algoritmik</span></div>
                <div class="card-body">
                  <h5 class="card-title">Cuci Mobil</h5>
                  <p class="card-text">Tiga mobil dapat dicuci secara bersamaan di tempat pencucian mobil. Lima mobil
                    datang ke tempat cuci mobil ini dan setiap mobil diberi nomor dari 1 sampai 5. Mobil-mobil dibawa ke
                    area pencucian dari yang terkecil hingga terbesar sesuai dengan nomor yang mereka miliki. Setelah
                    proses pencucian mobil selesai, nomor-nomor tersebut dibalik dan mobil-mobil tersebut keluar dari
                    area pencucian dengan urutan sesuai dengan nomor yang mereka miliki.<br><br>Berdasarkan hal ini,
                    bagaimana urutan pengiriman mobil? Anda dapat mengubah Pesanan Pengiriman dengan menarik dan
                    melepas.
                    <!-- Bir oto kuaförde aynı anda 3 araç yıkanabilmektedir. Aynı anda beş otomobil gelmiş ve her bir otomobil geliş sırasına göre 1'den 5'e kadar numaralandırılmıştır. <u>Otomobiller, geliş sırasına göre yıkama alanına alınmıştır.</u> Otomobiller teslimat alanına geçişi sırasında geliş sırasının tam tersi şeklinde numaraları yer değiştirmiştir.<br><br>Buna göre otomobiller hangi teslimat sırasına göre teslimat alanından çıkış yapmalıdır? Teslimat Sırasını sürükle-bırak yöntemiyle değiştirebilirsin.-->
                  </p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru10.png" class="img-fluid"></p>

                  <!-- Buraya gelsin sortable -->
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <h5>Pesanan P</h5>
                        <ul id="otoKuafor" class="list-group">
                          <li class="list-group-item list-group-item-action bg-dark text-white" data-arac="1">Mobil
                            Hitam</li>
                          <li class="list-group-item list-group-item-action bg-danger text-white" data-arac="2">Mobil
                            Merah</li>
                          <li class="list-group-item list-group-item-action bg-success text-white" data-arac="3">Mobil
                            Hijau</li>
                          <li class="list-group-item list-group-item-action bg-warning" data-arac="4">Mobil Kuning</li>
                          <li class="list-group-item list-group-item-action bg-primary text-white" data-arac="5">Mobil
                            Biru</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <input type="text" name="s11_c1" id="otocevap" data-uyari="Car Wash" class="d-none" required>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru10" data-action="nav"
                    data-controls="soru10">Langkah Sebelumnya</a>
                  <a class="btn btn-primary" data-toggle="list" href="#list-soru12" data-action="nav"
                    data-controls="soru12">Selanjutnya</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="list-soru12" role="tabpanel" aria-labelledby="list-soru12-list">

              <div class="card">
                <div class="card-header"><span class="badge badge-primary p-2">Abstraksi</span> <span
                    class="badge badge-secondary p-2">Evaluasi</span> <span class="badge badge-secondary p-2">Pemikiran
                    Algoritmik</span></div>
                <div class="card-body">
                  <h5 class="card-title">Klub Buku</h5>
                  <p class="card-text">Hubungan antara 7 siswa dalam sebuah klub buku ditunjukkan dalam
                    grafik.Berdasarkan grafik ini, nama dan usia para siswa dapat diketahui. Klub buku memiliki beberapa
                    aturan:</p>
                  <p class="card-text">Jika Anda belum membaca buku tersebut, bacalah ketika Anda mendapatkannya dan
                    kemudian berikan kepada teman termuda yang belum membacanya. Jika semua teman Anda telah membaca
                    buku tersebut, Anda harus memberikannya kepada teman yang pertama kali memberikannya kepada Anda.
                    Misalnya, Emre berteman dengan Ayşe, Özgen dan Elif dan teman bungsu Emre adalah Ayşe.</p>
                  <p class="card-text">Karena Emre adalah orang pertama yang membaca buku ini, siapakah orang terakhir
                    yang membaca buku ini? (Tidak ada yang pernah membaca buku ini sebelumnya)</p>
                  <p class="card-text text-center"><img src="assets/img/soru/soru11.png" class="img-fluid"></p>

                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="soru12">Orang Terakhir yang Membaca Buku Ini</label>
                      <select id="soru12" name="s12_c1" class="form-control" data-uyari="Book Club" required>
                        <option value="0" selected disabled>Pilih</option>
                        <option value="2">Ayşe</option>
                        <option value="6">Özgen</option>
                        <option value="3">Beril</option>
                        <option value="4">Murat</option>
                        <option value="7">Elif</option>
                        <option value="5">Ali</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-muted text-right">
                  <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru11" data-action="nav"
                    data-controls="soru11">Langkah Sebelumnya</a>
                  <input class="btn btn-success" type="submit" id="submit" value="Finish">

                </div>
              </div>

            </div>

          </div>


        </form>
      </div>
    </div>
  </div>

  <?php include 'assets/include/footer.php'; ?>

  <!-- alert modal -->
  <!-- Modal -->
  <div class="modal fade" id="controlModal" tabindex="-1" role="dialog" aria-labelledby="controlModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="controlModalLongTitle">Peringatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            Harap lengkapi semua kolom isian dengan lengkap.
          </div>
          <div id="gereklialanlar"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Oke</button>
        </div>
      </div>
    </div>
  </div>
  <!-- alert modal -->
  <?php include 'assets/include/script.php'; ?>
  <script>

    $('#submit').on('click', function () {
      var valid = true,
        message = '';

      $("form input, form select").each(function () {
        //var $this = $(this).find(':input');
        var $this = $(this);
        //|| ($this.attr('type')=='radio' && !$this.is(':checked'))
        if (!$this.val() || ($this.attr('type') == 'radio' && !$("input[name=" + $this.attr('name') + "]").is(':checked'))) {

          var inputName = $this.attr('data-uyari');
          valid = false;
          message += '<li>' + inputName + '</li>';

        }
      });

      if (!valid) {
        $('#gereklialanlar').html('<ul>' + message + '</ul>');
        $('#controlModal').modal('show');
      }
    });

    $('a[data-action=nav]').on('click', function () {
      let element = $(this).attr('data-controls');
      $('.list-group a.active').removeClass('active');
      $('a[aria-controls=' + element + ']').addClass('active');
      let thiss = $(this);
      setTimeout(function () {
        thiss.removeClass('active');
      }, 1);
    });

    // Drag-Drop-List1
    Sortable.create(turRehberi1, {
      group: {
        name: 'shared',
        pull: 'clone'
      },
      animation: 150,
      onEnd: function (evt) {
        var li;
        var guzergah = new Array();
        $('#turRehberi2 li').each(function () {
          li = $(this).data('mekan');
          guzergah.push(li);
        });
        $("#rota").val(guzergah);

      },
    });
    Sortable.create(turRehberi2, {
      group: 'shared',
      animation: 150,
      onEnd: function (evt) {
        var li;
        var guzergah = new Array();
        $('#turRehberi2 li').each(function () {
          li = $(this).data('mekan');
          guzergah.push(li);
        });
        $("#rota").val(guzergah);


      },
    });

    Sortable.create(muhendis, {
      animation: 150,
      onEnd: function (evt) {
        var yeniLi;
        var muhcvp = new Array();
        $('#muhendis li').each(function () {
          yeniLi = $(this).data('muh');
          muhcvp.push(yeniLi);
        });
        $("#muhcevap").val(muhcvp);

      },
    });

    Sortable.create(otoKuafor, {
      animation: 150,
      onEnd: function (evt) {
        var yeniLi;
        var otocvp = new Array();
        $('#otoKuafor li').each(function () {
          yeniLi = $(this).data('arac');
          otocvp.push(yeniLi);
        });
        $("#otocevap").val(otocvp);

      },
    });


    $('#sayibul td').on('click', function () {
      if ($(this).attr('data-sayibul') == 0) {
        $(this).css('background-color', 'red');
        $(this).attr('data-sayibul', '1');
        $('#s_' + $(this).attr('id').split('_')[1]).val('1');
      } else {
        $(this).css('background-color', 'white');
        $(this).attr('data-sayibul', '0');
        $('#s_' + $(this).attr('id').split('_')[1]).val('0');
      }
    });

    $('#kutular .sKutu').on('click', function () {
      var derecesi = $(this).data('derece');
      var yeniderece = derecesi + 90;
      $(this).css({ 'transition-duration': '500ms', 'transform': 'rotate(' + yeniderece + 'deg)' });
      $(this).data('derece', yeniderece);
    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });

    //kriptolu metin
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
    }

  </script>
</body>

</html>
