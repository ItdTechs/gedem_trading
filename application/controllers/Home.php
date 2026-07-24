<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    private function seo($title, $description, $keywords, $path = '', $schema = 'WebPage')
    {
        return [
            'page_title'       => $title,
            'page_description' => $description,
            'page_keywords'    => $keywords,
            'canonical_url'    => base_url($path),
            'og_image'         => base_url('assets/img/og-image.jpg'),
            'schema_type'      => $schema,            
            'active_page'      => $path == '' ? 'home' : $path,
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'url'  => base_url()
                ]
            ]
        ];
    }

    public function index()
    {
        $data = $this->seo(
            'Gedem Trading PLC | Agricultural Inputs Supplier in Ethiopia',
            'Gedem Trading PLC is a trusted Ethiopian importer and distributor of premium agricultural inputs including herbicides, fungicides, insecticides, fertilizers, vegetable seeds, field crop seeds, crop protection products, and plant nutrition solutions. We proudly serve farmers, commercial farms, cooperatives, NGOs, agro-dealers, and government institutions across Ethiopia.',
            'Gedem Trading PLC, agricultural inputs Ethiopia, herbicides Ethiopia, fungicides, insecticides, fertilizers, vegetable seeds, crop protection products, agricultural chemicals, farm inputs, Ethiopia agriculture',
            '',
            'Organization'
        );

        $this->load->view('index', $data);
    }

    public function about()
    {
        $data = $this->seo(
            'About Gedem Trading PLC | Agricultural Inputs Company in Ethiopia',
            'Learn about Gedem Trading PLC, an Ethiopian agricultural trading company dedicated to improving agricultural productivity through high-quality crop protection products, premium seeds, fertilizers, sustainable farming solutions, and professional technical support.',
            'About Gedem Trading PLC, agricultural company Ethiopia, agricultural supplier, crop protection Ethiopia, agricultural distribution',
            'about',
            'AboutPage'
        );
        $data['breadcrumbs'][] = [
            'name' => 'About',
            'url' => base_url('about')
        ];
        $this->load->view('about', $data);
    }

    public function products()
    {
        $data = $this->seo(
            'Agricultural Products | Herbicides, Fertilizers & Seeds | Gedem Trading PLC',
            'Explore Gedem Trading PLC\'s complete range of agricultural products including herbicides, fungicides, insecticides, vegetable seeds, field crop seeds, fertilizers, agricultural chemicals, and plant nutrition products sourced from trusted international manufacturers.',
            'herbicides Ethiopia, fungicides Ethiopia, insecticides Ethiopia, fertilizers Ethiopia, vegetable seeds Ethiopia, crop protection products',
            'products',
            'CollectionPage'
        );
        $data['breadcrumbs'][] = [
            'name' => 'Products',
            'url' => base_url('products')
        ];
        $this->load->view('products', $data);
    }
   
    public function services()
    {
        $data = $this->seo(

            'Agricultural Services | Gedem Trading PLC',

            'Gedem Trading PLC offers agricultural input importation, wholesale distribution, retail supply, institutional procurement, government tenders, logistics management, and professional technical advisory services throughout Ethiopia.',

            'agricultural services Ethiopia, wholesale agricultural supplier, government tenders Ethiopia, NGO procurement, agricultural logistics',

            'services',

            'Service'
        );

        $data['breadcrumbs'][] = [
            'name' => 'Services',
            'url' => base_url('services')
        ];

        $this->load->view('services', $data);
    }

    public function partners()
    {
        $data = $this->seo(

            'Partners | Gedem Trading PLC',

            'Gedem Trading PLC partners with international manufacturers, NGOs, development organizations, agricultural institutions, commercial farms, and government agencies to deliver reliable agricultural solutions across Ethiopia.',

            'Gedem partners, agricultural partnerships Ethiopia, international manufacturers, NGOs Ethiopia, agricultural institutions',

            'partners',

            'WebPage'
        );

        $data['breadcrumbs'][] = [
            'name' => 'Partners',
            'url' => base_url('partners')
        ];

        $this->load->view('partners', $data);
    }

    public function contact()
    {
        $data = $this->seo(

            'Contact Gedem Trading PLC | Agricultural Inputs Supplier',

            'Contact Gedem Trading PLC in Addis Ababa for quotations, dealership opportunities, product information, technical support, or partnership inquiries. Our experienced team is ready to assist farmers, businesses, NGOs, and government institutions throughout Ethiopia.',

            'contact Gedem Trading PLC, agricultural supplier Ethiopia, Addis Ababa agricultural company, request quotation',

            'contact',

            'ContactPage'
        );

        $data['breadcrumbs'][] = [
            'name' => 'Contact',
            'url' => base_url('contact')
        ];

        $this->load->view('contact', $data);
    }
}