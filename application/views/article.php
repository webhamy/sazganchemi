<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>
<div class="content">
  <div class="Slogan third-section" style="height: auto;">
  <span>
    <?php
    if($type==1) echo "همایش ها";
    elseif($type==2) echo "سمینار ها";
    elseif($type==3) echo "مقالات";
    elseif($type==4) echo "اخبار کشاورزی";
      elseif($type==5) echo "اخبار محصولات";
    ?>
   </span>
  </div>
    <div class="article_row">
        <?php

        foreach ($h->result() as $row) {
        ?>
      <div class="article_column">
          <div class="card">
              <img src="<?php echo base_url()?>/uploads/<?php echo $row->post_img?>" alt="Avatar" style="width:100%;height: 220px">
              <div class="container">
                  <h3><?php echo $row->id;?></h3>
                  <h6><?php echo $row->post_modified?></h6>
                  <p>
                      <?php
                      $small=substr($row->post_content, 0, 120);
                      echo $small.'...';
                      ?>
                  </p>
              </div>
              <a href="<?php echo base_url()?>index.php/Articles?pId=<?php echo $row->id ?>">بیشتر</a>
          </div>
      </div>
        <?php } ?>
</div>

</div>

<?php $this->load->view('footer'); ?>
