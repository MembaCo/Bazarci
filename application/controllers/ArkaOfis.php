<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 9.11.2018
 * Time: 12:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class ArkaOfis
 */
class ArkaOfis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (defined('REQUEST') && REQUEST == "external") {
            return;
        }
        //$this->template->loadData("activeLink",
        //    array("anasayfa" => array("general" => 1)));
        $this->load->model("kullanici_model");
        $this->load->model("ana_model");

        // KULLANICI GİRİŞ YAPMAMIŞSA GİRİŞE YÖNLENDİR
        if(!$this->user->loggedin) {
            redirect(base_url("giris"));
        }
    }

    public function index()
    {
        $this->load->view('arkaofis/index');

     }
}