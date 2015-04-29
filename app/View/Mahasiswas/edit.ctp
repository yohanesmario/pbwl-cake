<?php
    echo $this->Form->create("Mahasiswa");
    echo $this->Form->input('id', array(
        "value" => $id,
        "type" => "hidden"
    ));
    echo $this->Form->input('nama', array(
        "value" => $nama
    ));
    echo $this->Form->input('npm', array(
        "value" => $npm
    ));
    echo $this->Form->end("save");
?>