<?php

namespace App\Models;

use CodeIgniter\Model;

class ThemeModel extends Model
{
	protected $table = 'theme';

    protected $allowedFields = ['settings', 'name', 'value'];

    public function GetTheme($name='')
    {

        if ($name) {
            
            $this->where("name='". $name ."'");
            
            return $this->findAll();
        }else{
            if (ENVIRONMENT == 'development') {

                return "No data found";

            }
        }

    }
}
