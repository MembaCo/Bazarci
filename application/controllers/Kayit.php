<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 10.11.2018
 * Time: 14:46
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Kayit
 */
class Kayit extends CI_Controller
{

    public function index()
    {
        $this->load->view('kayit');

    }
}