<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/** access library REST_Controller, remember is library is a REST Server resource*/
require APPPATH . 'libraries/REST_Controller.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Api extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_eloquent');
		$this->load->model('Role_eloquent');
		$this->load->model('Roleuser_eloquent');


    }

    public function index_get()
    {
        $id = $this->input->get('id');

        if(!empty($id)) {
            $data = User_eloquent::getUser($id);
            if($data) {
                $res['error'] = false;
                $res['message'] = 'success get data by id';
                $res['data'] = $data;    
                
            }else {
                $res['error'] = true;
                $res['message'] = 'failed get data';
            }
        }else{
            $data = User_eloquent::getUsersRoles();
            if($data) {
                $res['error'] = false;
                $res['message'] = 'success get all data';
                $res['data'] = $data;

            } else {
                $res['error'] = true;
                $res['message'] = 'failed get data';
            }
        }
        
        $this->response($res, 200);        
    }
}
