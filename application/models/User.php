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
    $dbPassword = NULL;
    $response['status'] = 404;
    $SQL = 'select id,password from users where email="'.$email.'"';
    $query = $this->db->query($SQL);
    foreach($query->result_array() as $row){
        $dbPassword = $row['password'];
        $id = $row['id'];
    }
    if($dbPassword != NULL){
        if($dbPassword == $password){
            // Status = 200 Means SuccessFull Login
            $response['status'] = 200;
            $response['id'] = $id;
            return $response;
        }else{
            // Status = 405 Means Password Mismatch
            $response['status'] = 405;
            return $response;
        }
    }else{
        // Status = 404 Means User Not Exist
        return $response;
    }
}

}

?>