
    <?php echo $this-> extends("layout\layout_utama") ?> 
    <?php echo $this->section("konten_utama")?>
    <h1><?php echo $judul_halaman ?></h1>
    <?php echo view_cell("\App\Libraries\Lib_halaman::info",['kategori'=>'Fantasi','ditulis'=>'Refan']) ?>
    <div><?php echo $isi_halaman ?></div>
    <div>
        <ul>
            <?php 
            foreach($Knight as $k => $v){
                echo "<li>$v</li>"; 

            }
            ?>
        </ul>
    </div>
    <?php echo $this->endSection() ?>
