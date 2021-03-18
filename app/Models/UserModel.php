<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'user';

    protected $allowedFields = ['username', 'email'];

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

    public function GetCount($conditions='')
    {

    	if ($conditions) {
    		
    		$this->where($conditions);
    	}

    	return$this->countAllResults();
    }

    public function Count()
    {

        return$this->countAllResults();
    }

    public function UserDetails($email='', $password="")
    {

        if ($email AND $password) {
            
            $this->where("username = '$email' AND password = '$password' AND typemem = '2' OR email = '$email' AND password = '$password' AND typemem = '2' ");

        }else{

            if (ENVIRONMENT == 'development') {

                return "Invalid Credentials";

            }
        }

        $data = $this->findAll();

        if ($data) {
            return $data[0];
        }else{
            return false;
        }
    }

    public function CountMonth($month)
    {
        $data = $this->findAll();
        $count = 0;

        if ($data) {
            foreach ($data as $data) {
                $m = date("m", strtotime($data['created_on']));

                if ($m == $month) {
                    $count++;
                }
            }
        }

        return $count;

    }

    public function countChart()
    {
        $january = 0;
        $february = 0;
        $march = 0;
        $april = 0;
        $may = 0;
        $june = 0;
        $july = 0;
        $august = 0;
        $september = 0;
        $october = 0;
        $november = 0;
        $december = 0;

        $data = $this->findAll();

        if ($data) {
            foreach ($data as $data) {
                $month = date("m", strtotime($data['created_on']));

                if ($month == 1) {
                    $january++;
                }

                if ($month == 2) {
                    $february++;
                }

                if ($month == 3) {
                    $march++;
                }

                if ($month == 4) {
                    $april++;
                }

                if ($month == 5) {
                    $may++;
                }

                if ($month == 6) {
                    $june++;
                }

                if ($month == 7) {
                    $july++;
                }

                if ($month == 8) {
                    $august++;
                }

                if ($month == 9) {
                    $september++;
                }

                if ($month == 10) {
                    $october++;
                }

                if ($month == 11) {
                    $november++;
                }

                if ($month == 12) {
                    $december++;
                }
            }
        }
        $data = array(
            $january,
            $february,
            $march,
            $april,
            $may,
            $june,
            $july,
            $august,
            $september,
            $october,
            $november,
            $december,
        );

        return json_encode($data);
    }
}
