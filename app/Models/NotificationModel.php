<?php

namespace App\Models;

use CodeIgniter\Model;

class NotificationModel extends Model
{
	protected $table = 'notification';

    protected $allowedFields = ['message'];

    public function Count($userId='') {

        if ($userId) {
            
            $this->where("user_id='".$userId."' AND status = '1'");

            return $this->countAllResults();

        }else{
            if (ENVIRONMENT == 'development') {

                return "Column name is needed";

            }
        }
    }
}
