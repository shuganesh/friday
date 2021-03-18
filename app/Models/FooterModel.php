<?php

namespace App\Models;

use CodeIgniter\Model;

class FooterModel extends Model
{
	protected $table = 'footer';

    protected $allowedFields = ['settings', 'name', 'value'];

    public function Getfooter($name='', $type='') {

        if ($name AND $type) {
            
            $this->where("type ='" . $type . "' AND name='".$name."'");

            $data = $this->findAll();
            foreach ($data as $data) {

                return $data['value'];
            }


        }else{
            if (ENVIRONMENT == 'development') {

                return "Column name is needed";

            }
        }
    }
}
