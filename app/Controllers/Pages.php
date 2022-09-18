<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      $data = [
         'title' => 'Home | WebRyrdlani',
         'tes' => ['satu', 'dua', 'tiga']
      ];
      return view('pages/home', $data);
    }

    public function about()
    {
      $data = [
         'title' => 'About Me'
      ];
      echo view('pages/about', $data);
    }

    public function contact() 
    {
      $data = [
        'title' => 'Contact Us',
        'alamat' => [
          [
            'tipe' => 'Rumah',
            'alamat' => 'Jl. abc No. 123',
            'kota' => 'Bandung'
          ],
          [
            'tipe' => 'kantor',
            'alamat' => 'Kp. Sukaresmi No.22',
            'kota' => 'Kota Cimahi'
          ]
        ]
      ];

      return view('pages/contact', $data);
    }
      
}
