<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 9.11.2018
 * Time: 14:07
 */
?>
<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.membaco.com" target="_blank">Memba Co. IT</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Sayfa <strong>{elapsed_time}</strong> saniyede yüklendi. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></span>
    </div>
</footer>

<?php
// Custom JS Files
if(isset($theme['assets']['footer']['js'])) {
    foreach($this->template->get_js('footer') as $js_file) {
        echo $js_file . "\n";
    }
}
?>
</body>
</html>