<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 10.11.2018
 * Time: 14:06
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Giris
 */
class Giris extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('tema');
        $this->tema->set_platform('public');
        $this->tema->set_theme('default');
    }

    public function index()
    {
        $data['content']	= 'Hello World !';

        $this->tema->set_title('Bazarci.com Giriş');

        $this->tema->set_css('style.css');
        $this->tema->set_css('vendors/iconfonts/simple-line-icon/css/simple-line-icons.css','header');
        $this->tema->set_css('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css','header');
        $this->tema->set_css('vendors/css/vendor.bundle.base.css','header');
        $this->tema->set_css('vendors/css/vendor.bundle.addons.css','header');

       // $this->tema->set_js('https://code.jquery.com/jquery-1.11.3.min.js','footer','remote');
      //  $this->tema->set_js('bootstrap.min.js','footer');
        $this->tema->set_meta('author','Memba Co.');
        $this->tema->set_layout('giris/index');
        $this->tema->render($data);
    }



//    public function __construct()
//    {
//        parent::__construct();
////        $this->load->model("Giris_Model");
////        $this->load->model("Kullanici_Model");
////        $this->load->model("Ana_Model");
////        $this->load->model("Kayit_Model");
//
//        // Kütüphaneyi sayfaya dahil ettik
//        $this->load->library('tema');
//    }
//
//    public function index()
//    {
//        //Tema Yükleme İşlemi
//        //$this->tema->TemaYukle("tema/ust");
//
//        //İçerik
//       $this->load->view('giris/index');
//
//
//    }
}