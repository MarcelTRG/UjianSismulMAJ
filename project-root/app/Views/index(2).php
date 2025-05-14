
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum IFLAB Sistem Simulasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="header-content">
            <div class="top-left">
                <span class="head-text">Website Portofolio <span class="highlight">Marcel A Jufai</span></span>    
            </div>
        
            <div class="top-right">
                <ul class="menu">
                    <li class="links">
                        <a href="./#main" class="text-links">Home</a>
                    </li>

                    <li class="links">
                        <a href="./#about" id="soundlink" class="text-links">About</a>
                    </li>
                    <li class="links">

                        <a href="./#project" id="soundlink" class="text-links">project</a>
                    </li>
                    <li class="links">

                        <a href="./#contact" id="soundlink" class="text-links">Contact</a>
                    </li>
                </ul>
            </div>    
        </div>
    </header>

    <section id="main" class="main">
        <div class="main-container">
            <h1 class="intro">Halo! Saya Marcel Adila Jufai</h1>
            <p class="subintro">Programmer dengan beberapa pengalaman pemograman. Saat ini masih berkuliah di Universitas Gunadarma</p>
            <div class="button-main">
                <a href="./#project" id="soundlink" class="button">project saya</a>
            </div>

            <div class="player">
                <p>Putar saya untuk <span class="highlight">MENEMANI ANDA</span> hehe</p>
                <audio controls>
                    <source src="audios/King Gnu - TWILIGHT!!!.mp3" type="audio/mpeg">
                    Browser Anda tidak mendukung tag audio.
                </audio>

                <p>Special Thanks to <span class="highlight">King Gnu - TWILIGHT</span></p>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="about-container">
            <span class="title">About Me</span>

            <span class="subtitle">
                Dibawah ini saya akan memberikan beberapa informasi mengenai diri saya sendiri
            </span>

            <div class="about-content">
                <div class="content-main">
                    <span class="heading3">Kenali saya!</span>

                    <div class="content-main-detail">
                        <p class="about-paragraph">
                            Saya adalah mahasiswa dari 
                            <strong>Fakultas Teknologi Industri Gunadarma</strong>
                            . Jurusan saya adalah 
                            <strong>Teknik Informatika</strong>
                            . Saya menciptakan website ini untuk menyelesaikan tugas akhir dari praktikum sistem simulasi 
                        </p>
                        <p class="about-paragraph">
                            Selama saya menjadi mahasiswa gunadarma, saya telah menyelesaikan berbagai
                            macma projek. Baik dari website yang terhubung ke Database. Menciptakan model
                            Model Machine Learning dan mengimplentasikannya ke aplikasi android dan berbagai
                            keahlian lainnya
                        </p>
                        <p class="about-paragraph">
                            Saya yakin saya dapat memberikan kontribusi, belajar dan berkembang lebih jauh lagi.
                            Apabila anda membutuhkan seseorang dengan skill saya. Jangan ragu untuk mengkontak saya
                        </p>
                    </div>

                </div>

                <div class="content-skill">
                    <span class="heading3">Keahlian yang saya miliki</span>

                    <div class="skills">
                        <div class="skill-details">HTML</div>
                        <div class="skill-details">Python</div>
                        <div class="skill-details">JavaScript</div>
                        <div class="skill-details">MySQL</div>
                        <div class="skill-details">React</div>
                        <div class="skill-details">TensorFlow</div>
                        <div class="skill-details">PHP</div>
                        <div class="skill-details">Git</div>
                        <div class="skill-details">GitHub</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project" class="project">
        <div class="project-container">
            <span class="title"> Projek saya</span>

            <span class="subtitle">
                Dibawah ini, saya telah berikan beberapa penjelasan singkat dari projek yang sudah saya kerjakan
            </span>

            <div class="project-content">
                <div class="project-slider">
                    <div class="slider" id="track">
                        <div class="slide-group">
                            <div class="image-content">
                                <video width="500" height="315" controls loop>
                                    <source src="<?php echo base_url('video\Knowy.mp4'); ?>" type="video/mp4">
                                    Browser Anda tidak mendukung tag video.
                                </video>
                            </div>

                            <div class="text-description">
                                <span class="text-description-content">
                                    Aplikasi Knowy adalah aplikasi berbasis Machine Learning yang dapat membantu
                                    anda dalam mencari tahu minat dan bakat yang anda miliki. Aplikasi ini membantu
                                    anda dalam menemukan profesi pekerjaan yang cocok sesuai minat dan bakat anda melalui
                                    OCEAN Test dan Aptitude Test
                                </span>
                            </div>
                        </div>
                        
                        <div class="slide-group">
                            <div class="image-content">
                                <img src="Images\KazumiStore.png" alt="image/png">
                            </div>

                            <div class="text-description">
                                <span class="text-description-content">
                                    Sebuah website managemen stok barang yang dibuat khusus untuk toko online
                                    Shopee Kazumi Store. Website ini dapat membantu user dalam mengatur stok 
                                    barang jualan. Lengkap dengan informasi barang masuk dan keluar, 
                                    total stok yang ada dan keamanan akun
                                </span>
                            </div>
                        </div>

                        <div class="slide-group">
                            <div class="image-content">
                                <img src="Images\JavaProgram.png" alt="image/png">
                            </div>

                            <div class="text-description">
                                <span class="text-description-content">
                                    Aplikasi Java yang dapat menciptakan file reports. Aplikasi
                                    ini sederhananya digunakan untuk menyimpan informasi dari mahasiswa.
                                    Kemudian menciptakan file reports yang dapat diunduh langsung oleh user
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="button-slider">
                    <button class="buttonleft" id="prvbtn"><span class="butt"><</span></button>

                    <button class="buttonright" id="nxtbtn"><span class="butt">></span></button>
                </div>
            </div>
        </div>

        <script src="index(2).js"></script>
    </section>

    <section id="contact" class="contact">
        <div class="contact-container">
            <span class="title">Contact Me Below</span>

            <button class="press" id="showup">Contact Me</button>

            <div class="hidden-box" id="div-hide">
                <marquee class="marquee" behavior="scroll" direction="left">
                    You just got rickrolled, take the L Ha HA Ha
                </marquee>

                <div class="embedcontain">
                    <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/xvFZjo5PgG0?si=MYIFVyP-g-Ll7qq0" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <script src="hide.js"></script>
        
    </section>

</body>
</html>