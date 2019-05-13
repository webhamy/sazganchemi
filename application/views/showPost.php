<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>
<?php     foreach ($h->result() as $row) { ?>
<div class="pro_des_img">
    <img  src="<?php echo base_url()?>/uploads/<?php echo $row->post_img ?>" >
</div>


<div id="pro_info">
    <h3><?php echo $row->title; ?></h3>
</br>
    <p>
    <?php echo $row->post_content; ?>
    </p>
<?php } ?>
</div>
