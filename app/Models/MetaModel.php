<?php

namespace App\Models;

use CodeIgniter\Model;

class MetaModel extends Model
{
	protected $table = 'meta';

    protected $allowedFields = ['settings', 'name', 'value'];

    public function GetMeta($name='', $type='')
    {

    	if ($name AND $type) {
    		
    	    $this->where("type ='". $type ."' AND name='". $name ."'");
    	    $data = $this->findAll();
            foreach ($data as $data) {

                return $data['value'];
            }


    	}else{
            if (ENVIRONMENT == 'development') {

                return "No data found";

            }
        }


    }
}
