<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	

	public function index() {
       $data = [
            'page_title' => '',
            'page_description' => '',
            'page_keywords' => '',
            'canonical_url' => 'https://gedemtradingplc.com/'
        ];
        $this->load->view('index', $data);
    }
	
	public function about() {
        $data = [
            'page_title' => '',
            'page_description' => '',
            'page_keywords' => '',
            'canonical_url' => 'https://gedemtradingplc.com/about'
        ];
        $this->load->view('about', $data);
    }   

    public function partners() {
        $data = [
            'page_title' => '',
            'page_description' => '',
            'page_keywords' => '',
            'canonical_url' => 'https://gedemtradingplc.com/partners'
        ];
        $this->load->view('partners', $data);
    }   

    public function products() {
        $data = [
            'page_title' => '',
            'page_description' => '',
            'page_keywords' => '',
            'canonical_url' => 'https://gedemtradingplc.com/products'
        ];
        $this->load->view('products', $data);
    }   

    public function services() {
        $data = [
            'page_title' => '',
            'page_description' => '',
            'page_keywords' => '',
            'canonical_url' => 'https://gedemtradingplc.com/services'
        ];
        $this->load->view('services', $data);
    }   

     public function contact() {
        $data = [
            'page_title' => '',
            'page_description' => '',
            'page_keywords' => '',
            'canonical_url' => 'https://gedemtradingplc.com/contact'
        ];
        $this->load->view('contact', $data);
    }
	
}
