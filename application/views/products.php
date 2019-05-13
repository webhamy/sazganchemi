<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>

<div class="content">
  <div class="Slogan third-section" style="height: auto;">
  <span>
    <?php
    if($type==1) echo "حشره کش ها";
    elseif($type==2) echo "کنه کش ها";
    elseif($type==3) echo "قارچ کش ها";
    elseif($type==4) echo "علف کش ها";
    elseif($type==5) echo "روغن ها";
    ?>
   </span>
  </div>
    <?php

    foreach ($h->result() as $row) {
    ?>
  <div class="pro_item">
    <div class="pro_pic">
      <img src="<?php echo base_url()?>/uploads/<?php echo $row->img_name?>"/>
    </div>
    <p><?php echo $row->pub_name ?></p>
    <p>SAZGAN CHEMI</p>
    <br>
    <p><?php echo $row->name ?></p>
    <div class="pro_des">
      <p><?php echo $row->pub_name." ". $row->EC ?></p>
      <!-- <p><?php echo $row->product_title ?></p> -->
        <p>
          <?php $small=mb_substr($row->des, 0, 150,"utf-8");
        echo $small.'...';
        ?>
      </p>
      <a style="border-bottom: 50px solid <?php echo $row->color?> " href="<?php echo base_url()?>index.php/Products?pId=<?php echo $row->id?>">
<span>بیشتر</span>
      </a>

    </div>
  </div>
    <?php } ?>
</div>
<?php $this->load->view('footer'); ?>
