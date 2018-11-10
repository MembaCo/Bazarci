<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 8.11.2018
 * Time: 14:54
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class AnaSayfa
 */
class AnaSayfa extends CI_Controller
{

    public function index()
    {
        // Ana Sayfa View Yükleniyor
        $this->load->view('ana_sayfa');
    }
}