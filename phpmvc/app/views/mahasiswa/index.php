<div class="container">

<div class="row">
    <div class="col-6">
        <h3>Daftar mahasiswa</h3>
        <?php foreach($data['mhs'] as $mhs) : ?>
            <ul>
            <li><?= $mhs['nama']; ?></li>
            <li><?= $mhs['nrp']; ?></li>
            </ul>

            <?php endforeach; ?>
        
    </div>
</div>


</div>