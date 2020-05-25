<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Relawan extends REST_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Relawan_model','relawan');
    }

    public function index_get() 
    {
        $id = $this->get('id');
        if ( $id === null ) {
            $relawan = $this->relawan->getRelawan();
        } else {
            $relawan = $this->relawan->getRelawan($id);

        }

        
        if ($relawan) {
            $this->response([
                'status' => true,
                'data' => $relawan
            ], REST_Controller::HTTP_OK); 
        }
            else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        var_dump($relawan);
    }

}