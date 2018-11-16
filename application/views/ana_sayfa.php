<?php
/**
 * Created by Memba Co. Developer
 * User: Memba Co.
 * Date: 8.11.2018
 * Time: 14:10
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Bazarci.com Projesi</title>

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>
<body>

<div id="container">
    <h1>CodeIgniter Bazarci.com Projesine Hoş Geldiniz...</h1>

    <div id="body">


        <p>Ana Sayfamız Burası</p>
        <p><?php echo site_url("giris/cikis/" . $this->security->get_csrf_hash()) ?></p>
        <p>*-----*</p>
        <li><a href="<?php echo base_url() ?>"><?php echo lang("ctn_2") ?></a></li>
        <li><a href="<?php echo base_url('arkaofis/index') ?>"><?php echo lang("ctn_1") ?></a></li>
        <li><a href="<?php echo base_url('giris') ?>">Giriş</a></li>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>



