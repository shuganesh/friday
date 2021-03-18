<?php

namespace App\Models;

use CodeIgniter\Model;

class SiteModel extends Model
{
	protected $table = 'settings';

    protected $allowedFields = ['settings', 'name', 'value'];

    public function GetSite($name='')
    {

    	if ($name) {
    		
    	    $this->where("setting ='site' AND name='".$name."'");
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

    public function GetEmail($name='')
    {

        if ($name) {
            
            $this->where("setting ='email' AND name='".$name."'");
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
