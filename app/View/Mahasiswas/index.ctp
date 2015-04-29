<?php
    
    echo $this->Html->link("[Add New Mahasiswa]", "/mahasiswas/add");
    echo "<br /><br />";
    
    foreach ($data as $key => $value) {
        echo "Nama: " . $value['Mahasiswa']['nama'] . "<br />";
        echo "NPM: " . $value['Mahasiswa']['npm'] . "<br />";
        echo $this->Html->link("[view]", "/mahasiswas/view/".$value['Mahasiswa']['npm']);
        echo $this->Html->link("[edit]", "/mahasiswas/edit/".$value['Mahasiswa']['npm']);
        echo $this->Html->link("[delete]", "/mahasiswas/delete/".$value['Mahasiswa']['id']);
        echo "<br /><br />";
    }