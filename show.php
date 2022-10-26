<?php
require 'dbconfig.php';
$siswa = query("SELECT * FROM siswa");
?>
<table border ="1" cellpadding ="9" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <?php $i = 1; ?>
    <?php foreach( $siswa as $row) :?>
    </tr>
    <td><?= $i; ?></td>
    <td><?= $row["nama"];?></td>
        <td><?= $row["kelas"];?></td>

    
    <?php $i++?>
    <?php endforeach;?>
