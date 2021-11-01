<?php 
namespace App\Controllers;

class Filter extends \CodeIgniter\Controller
{
    public function index()
    {
        $parser = \Config\Services::parser();
       
        $data = [
                    'page_title' => 'my filters page',
                    'page_heading' => 'my filter headings',
                    'date' => '26-10-2021',
                    'price' => '1000'
                ];                
        return $parser->setData($data)->render('filters');

    }
}

