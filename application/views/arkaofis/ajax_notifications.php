<?php if($notifications->num_rows() > 0) : ?>
    <?php foreach($notifications->result() as $r) : ?>
<a class="dropdown-item preview-item">
    <div class="preview-thumbnail">
        <div class="preview-icon bg-success">
            <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->avatar ?>" class="user-icon">
        </div>
    </div>
    <div class="preview-item-content">
        <h6 class="preview-subject font-weight-normal text-dark mb-1">
            @<?php echo $r->username ?>
            <?php echo $r->message ?></h6>
        <p class="font-weight-light small-text mb-0">
            <?php echo $this->common->get_time_string_simple($this->common->convert_simple_time($r->timestamp)) ?>
        </p>
    </div>
</a>
    <?php endforeach; ?>
<?php else : ?>
    <div class="notification-box-bit animation-fade clearfix">
        <p><?php echo lang("ctn_411") ?></p>
    </div>
<?php endif; ?>