<?php

class Mahasiswa extends AppModel {
    public $validate = array(
        'npm' => array(
            'Unik' => array(
                'rule' => 'isUnique',
                'required' => true,
                'message' => "NPM sudah terpakai."
            ),
            'NotEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true
            )
        )
    );
}
    