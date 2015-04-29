<?php
    echo $this->Form->create("Mahasiswa");
    echo $this->Form->input('nama');
    echo $this->Form->input('npm');
    echo $this->Form->end("save");
?>