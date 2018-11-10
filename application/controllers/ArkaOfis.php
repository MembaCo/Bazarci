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

    public function index()
    {
        $this->load->view('arkaofis/index');

    }
}