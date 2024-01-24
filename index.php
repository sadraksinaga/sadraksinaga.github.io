<?php include_once("inc_header.php")?>
        <!-- untuk home -->
        <section id="home">
            <img src="<?php echo ambil_gambar('8')?>"/>
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan(8) ?></p>
                <h2><?php echo ambil_judul(8) ?></h2>
                <?php echo maximum_kata(ambil_isi(8),30) ?>
                <p><a href="<?php echo buat_link_halaman(8)?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="features">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan(11) ?></p>
                <h2><?php echo ambil_judul(11) ?></h2>
                <?php echo maximum_kata(ambil_isi(11),30) ?>
                <p><a href="<?php echo buat_link_halaman(11)?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="<?php echo ambil_gambar('11')?>"/>
        </section>

        <!-- untuk tutors -->
        <section id="authors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi"></p>
                    <h2>By Kelompok 6</h2>
                    <p>-----------------------------</p>
                </div>

                <div class="tutor-list">
                    <?php 
                    $sql1  = "select * from tutors order by id desc";
                    $q1    = mysqli_query($koneksi,$sql1);
                    while($r1 = mysqli_fetch_array($q1)){
                         ?>
                         <div class="kartu-tutor">
                            <a href="<?php echo buat_link_tutors($r1['id'])?>">
                        <img src="<?php echo url_dasar()."/gambar/".tutors_foto($r1['id'])?>" />
                        <p><?php echo $r1['nama']?></p>
                        </a>
                    </div>
                         <?php
                    
                    }
                    ?>
                    
                    
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi"></p>
                    <h2>Universitas Katolik Santo Thomas</h2>
                    <h3>Fakultas Ilmu Komputer</h3>
                    <p></p>
                </div>

                <div class="partner-list">
                    <?php
                    $sql1  ="select * from partners order by id asc";
                    $q1    = mysqli_query($koneksi,$sql1);
                    while ($r1 = mysqli_fetch_assoc($q1)){
                        ?>
                        <div class="kartu-partner">
                            <a href="<?php echo buat_link_partners($r1['id'])?>">
                        <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>
                        </a>
                    </div>
                        <?php
                    } 
                    ?>
                    
                    
                </div>
            </div>
        </section>
<?php include_once("inc_footer.php")?>