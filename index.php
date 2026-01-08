<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous"
    >
    <style>
    .profile-img{
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
    }
    </style>

</head>

<body class="isi">

    <nav class="navbar navbar-expand-lg sticky-top isi bg-light text-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-dark isi" href="#">My Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link isi" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link isi" href="#profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link isi" href="#schedule">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link isi" href="#article">Article</a></li>
                    <li class="nav-item"><a class="nav-link isi" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link isi" href="#kontak">Contact</a></li>
                    <li class="nav-item"><a class="nav-link isi" href="login.php">Login</a></li>
                </ul>
                <div class="d-flex gap-2">
                    <button id="darkButton" type="button" class="btn btn-dark btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286"/>
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                        </svg>                
                    </button>
                    <button id="lightButton" type="button" class="btn btn-light btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                        </svg>                
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="my-4 isi">
        
        <!-- hero begin -->
        <section id="hero" class="p-5 bg-success">
            <div class="container">
                <div class="d-sm-flex flex-sm-row-reverse align-item-center">
                    <img src="Knights_Templar.jpg" class="img-fluid" width="300">
                    <div>
                        <h1 class="fw-bold display-4 text-dark">
                            My Daily Journal
                        </h1>
                        <h5 class="lead display-6 text-dark">
                            Learn from yesterday, live for today, hope for tomorrow. The important thing is to never stop questioning.
                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- profile begin -->
        <section id="profile" class="bg-light isi">
            <div class="container my-5">
                <h3 class="text-center mb-3">Profil Mahasiswa</h3>
                <div class="profile-card">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-3 mb-md-0">
                            <img src="Profile.jpg" class="profile-img">
                        </div>
                        <div class="col-md-7 profile-content">
                            <h5 class="fw-semibold text-center">Muhammad Yunus Alfian</h5>
                            <table class="table table-borderless mb-0 table-light isi">
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">NIM</td>
                                        <td>: A11.2024.15809</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Program Studi</td>
                                        <td>: Teknik Informatika</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Email</td>
                                        <td>: 111202415809@mhs.dinus.ac.id</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Telepon</td>
                                        <td>: +62 812 2781 9963</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Alamat</td>
                                        <td>: Jl. Imam Bonjol, Semarang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile end -->

        <!-- schedule begin -->
        <section id="schedule" class="text-center py-5">
            <div class="container">
            <h3 class="mb-3">Jadwal Kuliah & Kegiatan Mahasiswa</h3>
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-start">
                    <div class="col">
                        <div class="card border-primary h-100">
                            <h6 class="card-header text-white bg-primary">Senin</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>12:30 - 15:00</b><br>
                                    Logika Informatika <br>
                                    Ruang H.5.3 <br><br>
                                    <b>16:20 - 18:00</b><br>
                                    Pendidikan Kewarganegaraan <br>
                                    Kulino<br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-success h-100">
                            <h6 class="card-header text-white bg-success">Selasa</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>07:00 - 09:30</b><br>
                                    Sistem Operasi <br>
                                    Ruang H.5.7 <br><br>
                                    <b>12:30 - 14:10</b><br>
                                    Thecnopreneurship <br>
                                    Kulino <br><br>
                                    <b>15:30 - 18:00</b><br>
                                    Rekayasa Perangkat Lunak <br>
                                    Ruang H.3.1 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-danger h-100">
                            <h6 class="card-header text-white bg-danger">Rabu</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>12:30 - 14:10</b><br>
                                    Basis Data <br>
                                    Ruang D.2.K 
                                    <br><br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-warning h-100">
                            <h6 class="card-header text-white bg-warning">Kamis</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>08:40 - 10:20</b><br>
                                    Pemprograman Berbasis Web <br>
                                    Ruang D.2.J <br><br>
                                    <b>15:30 - 18:00</b><br>
                                    Probabilitas dan Statistik <br>
                                    Ruang H.3.1<br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-info h-100">
                            <h6 class="card-header text-white bg-info">Jumat</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>08:40 - 10:20</b><br>
                                    Basis Data <br>
                                    Ruang H.5.6 <br><br>
                                    <br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-secondary h-100">
                            <h6 class="card-header text-white bg-secondary">Sabtu</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>Tidak ada jadwal</b>
                                    <br><br><br><br><br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-dark h-100">
                            <h6 class="card-header text-white bg-dark">Minggu</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>Tidak ada jadwal</b>
                                    <br><br><br><br><br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- schedule end -->

        <!-- article begin -->
        <section id="article" class="text-center p-5">
        <div class="container">
            <h3 class="text-center mb-3">Article</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>
                <div class="col">
                <div class="card h-100">
                    <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                    <h5 class="card-title"><?= $row["judul"]?></h5>
                    <p class="card-text">
                        <?= $row["isi"]?>
                    </p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">
                        <?= $row["tanggal"]?>
                    </small>
                    </div>
                </div>
                </div>
                <?php
            }
            ?> 
            </div>
        </div>
        </section>
        <!-- article end -->
        
        <!-- gallery begin -->
        <section id="gallery" class="mt-4">
            <div class="container">
                <h3 class="mb-3 text-center">Gallery</h3>
                <div class="row g-3">
                    <?php
                    $folder = "gallery/"; 

                    $files = glob($folder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

                    if(count($files) > 0){
                        foreach($files as $image){
                            ?>
                            <div class="col-4 col-md-2">
                                <img src="<?php echo $image; ?>" class="img-fluid rounded" alt="Gallery Image">
                            </div>
                            <?php
                        }
                    } else {
                        echo '<div class="col-12 text-center text-muted">Belum ada gambar di galeri.</div>';
                    }
                    ?>
                </div>
            </div>
        </section>        
        <!-- gallery end -->

        <!-- contact begin -->
        <section id="kontak" class="mt-5">
            <div class="container">
                <h3 class="mb-3 text-center">Contact</h3>
                <div class="card p-4 isi">
                    <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Nomor Kontak:</label>
                        <input type="tel" class="form-control" id="telepon" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan:</label>
                        <textarea id="pesan" class="form-control" rows="3"></textarea>
                    </div>
        
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact end -->
            
    </main>

    <footer class="bg-secondary text-center p-5">
        <div>
            <a href="https://www.youtube.com/@YunusAlvian"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                </svg>
            </a>
            <a href="https://www.instagram.com/yunusssnn/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>      
            </a>
        </div>
        <div>
            Muhammad Yunus Alfian - A11.2024.15809
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"
    ></script>

    <script type="text/javascript">
        document.getElementById("darkButton").onclick = function () {
            const collection = document.getElementsByClassName("isi");
            for (let i = 0; i < collection.length; i++){
                collection[i].classList.remove("bg-light");
                collection[i].classList.remove("table-light");
                collection[i].classList.remove("text-dark");
                collection[i].classList.add("bg-dark");
                collection[i].classList.add("table-dark");
                collection[i].classList.add("text-white");
            }
        };

        document.getElementById("lightButton").onclick = function () {
            const collection = document.getElementsByClassName("isi");
            for (let i = 0; i < collection.length; i++){
                collection[i].classList.remove("bg-dark");
                collection[i].classList.remove("table-dark");
                collection[i].classList.remove("text-white");
                collection[i].classList.add("bg-light");
                collection[i].classList.add("table-light");
                collection[i].classList.add("text-dark");
            }
        };

    </script>
</body>
</html>