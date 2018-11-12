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

        $this->tema->set_title('Simple Template Library');

        $this->tema->set_css('style.css','header');
        $this->tema->set_css('vendors/iconfonts/simple-line-icon/css/simple-line-icons.css','header');
        $this->tema->set_css('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css','header');
        $this->tema->set_css('vendors/css/vendor.bundle.base.css','header');
        $this->tema->set_css('vendors/css/vendor.bundle.addons.css','header');

        // $this->tema->set_js('https://code.jquery.com/jquery-1.11.3.min.js','footer','remote');
        //  $this->tema->set_js('bootstrap.min.js','footer');
        $this->tema->set_meta('author','Turan Karatuğ');
        $this->tema->set_layout('kayit/index');
        $this->tema->render($data);
    }

}