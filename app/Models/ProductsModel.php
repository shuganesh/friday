<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
	protected $table = 'products';

    protected $allowedFields = ['settings', 'name', 'value'];

    public function GetRows($conditions='', $limit="", $order='', $order_by='')
    {

    	if ($conditions) {
    		
    		$this->where($conditions);
    	}

    	if ($order) {
    		if ($order_by) {

    			$this->orderBy($order, $order_by);
    		}
    		else{

				if (ENVIRONMENT == 'development') {

					return "Order by is needed";

				}
			}
    	}

    	if ($limit) {
    		
    		return $this->findAll($limit);

    	}else{

    		return$this->findAll();

    	}
    }

    public function GetRow($conditions='', $column="", $order='', $order_by='')
    {

    	if ($conditions) {
    		
    		$this->where($conditions);
    	}

    	if ($order) {
    		if ($order_by) {

    			$this->orderBy($order, $order_by);
    		}
    		else{

				if (ENVIRONMENT == 'development') {

					return "Order by is needed";

				}
			}
    	}
    		
    	$data = $this->findAll(1);

    	foreach ($data as $data) {
    		return $data[$column];
    	}
    }

    public function Count($name='')
    {

    	return $this->countAllResults();


    }
    
}
