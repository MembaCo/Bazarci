<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 9.11.2018
 * Time: 12:24
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    // Page Title
    if(isset($theme['assets']['header']['title']))
        echo $this->tema->get_title() . "\n";

    // Meta Tags
    if(isset($theme['assets']['header']['meta'])) {
        foreach($this->tema->get_meta() as $meta_tag) {
            echo $meta_tag . "\n";
        }
    }

    // Custom CSS Files
    if(isset($theme['assets']['header']['css'])) {
        foreach($this->tema->get_css() as $css_file) {
            echo $css_file . "\n";
        }
    }

    // Custom JS Files
    if(isset($theme['assets']['header']['js'])) {
        foreach($this->tema->get_js('header') as $js_file) {
            echo $js_file . "\n";
        }
    }
    ?>


    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/public/themes/default/images/favicon.png" />
</head>
<body>