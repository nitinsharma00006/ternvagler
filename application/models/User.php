<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

public function registerUser($userdata){
    $result = $this->db->insert('users',$userdata);
    if(!$result){
        $error = $this->db->error();
        $data['err_code'] = $error['code'];
        $data['err_msg'] = $error['message'];
        if($data['err_code'] == 1062){
            // Status = 404 Email ID Already Exist
            $response['status'] = 404;
             return $response;
        }  
       }else{
        //    Status = 200 Means Register Successfull
            $response['status'] = 200;
            return $response;
       }
}
public function loginUser($email , $password){
    $response = $this->db->select('*')
                        -> from ('users')
                        -> where ('email',$email)
                        -> get();
    echo $response;

}

}

?>