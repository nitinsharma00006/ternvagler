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
        return $data;
       }else{
           return $result;
       }
}
public function loginUser($userInputData){
    print_r($userInputData);

}

}

?>