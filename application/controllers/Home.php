<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $data = [
            'page_title' => 'Gedem Trading PLC | Agricultural Inputs Supplier in Ethiopia',
            'page_description' => 'Gedem Trading PLC is a leading Ethiopian supplier of agricultural inputs including herbicides, fungicides, insecticides, vegetable seeds, field crop seeds, fertilizers, and crop protection products.',
            'page_keywords' => 'Gedem Trading PLC, Ethiopia agriculture, agricultural inputs, herbicides, fungicides, insecticides, fertilizers, vegetable seeds, crop protection, farm inputs, agricultural chemicals',
            'canonical_url' => 'https://gedemtrading.itd-technologies.com/'
        ];
        $this->load->view('index', $data);
    }

    public function about() {
        $data = [
            'page_title' => 'About Us | Gedem Trading PLC',
            'page_description' => 'Learn about Gedem Trading PLC, an Ethiopian agricultural input supplier committed to providing high-quality crop protection products, seeds, fertilizers, and technical support.',
            'page_keywords' => 'About Gedem Trading PLC, agricultural company Ethiopia, crop protection supplier, agricultural business, agricultural import and distribution',
            'canonical_url' => 'https://gedemtrading.itd-technologies.com/about'
        ];
        $this->load->view('about', $data);
    }

    public function partners() {
        $data = [
            'page_title' => 'Our Partners | Gedem Trading PLC',
            'page_description' => 'Gedem Trading PLC partners with international manufacturers, NGOs, government agencies, agricultural institutions, and commercial farms to improve agricultural productivity in Ethiopia.',
            'page_keywords' => 'Gedem partners, agricultural partners Ethiopia, international manufacturers, NGOs, government agriculture projects',
            'canonical_url' => 'https://gedemtrading.itd-technologies.com/partners'
        ];
        $this->load->view('partners', $data);
    }

    public function products() {
        $data = [
            'page_title' => 'Agricultural Products | Herbicides, Seeds & Fertilizers | Gedem Trading PLC',
            'page_description' => 'Browse Gedem Trading PLC agricultural products including herbicides, fungicides, insecticides, vegetable seeds, field crop seeds, fertilizers, and plant nutrition products.',
            'page_keywords' => 'herbicides Ethiopia, fungicides, insecticides, fertilizers, vegetable seeds, field crop seeds, plant nutrition, agricultural products Ethiopia',
            'canonical_url' => 'https://gedemtrading.itd-technologies.com/products'
        ];
        $this->load->view('products', $data);
    }

    public function services() {
        $data = [
            'page_title' => 'Agricultural Supply Services | Gedem Trading PLC',
            'page_description' => 'Gedem Trading PLC provides agricultural input importation, wholesale distribution, retail supply, government tenders, NGO procurement, logistics management, and technical support.',
            'page_keywords' => 'agricultural services Ethiopia, wholesale agricultural inputs, import agricultural products, government tenders, NGO procurement, technical support',
            'canonical_url' => 'https://gedemtrading.itd-technologies.com/services'
        ];
        $this->load->view('services', $data);
    }

    public function contact() {
        $data = [
            'page_title' => 'Contact Gedem Trading PLC | Agricultural Inputs Supplier',
            'page_description' => 'Contact Gedem Trading PLC in Addis Ababa, Ethiopia for agricultural inputs, crop protection products, fertilizers, seeds, quotations, and technical support.',
            'page_keywords' => 'Contact Gedem Trading PLC, agricultural supplier Ethiopia, Addis Ababa agricultural company, request quotation, farm inputs',
            'canonical_url' => 'https://gedemtrading.itd-technologies.com/contact'
        ];
        $this->load->view('contact', $data);
    }

}