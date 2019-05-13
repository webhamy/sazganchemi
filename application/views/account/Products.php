<div id="cont">
  <ul class="menutop">
    <li><a href="<?php echo base_url()?>index.php/account/Products?type=1">حشره کش ها</a></li>
    <li><a href="<?php echo base_url()?>index.php/account/Products?type=2">کنه کش ها</a></li>
    <li><a href="<?php echo base_url()?>index.php/account/Products?type=3">قارچ کش ها</a></li>
    <li><a href="<?php echo base_url()?>index.php/account/Products?type=4">علف کش ها</a></li>
    <li><a href="<?php echo base_url()?>index.php/account/Products?type=5">روغن ها</a></li>
</ul>
<div>
  <?php
  foreach ($h->result() as $row) {
      ?>
      <div>
          <img src="<?php echo base_url() ?>/uploads/<?php echo $row->img_name; ?>">
          <span><?php echo $row->name; ?></span>
          <a onclick="return confirm('آیا از حذف این محصول اطمینان دارید؟')"
             href="<?php echo base_url() ?>index.php/account/Products/delete_data?UserID=<?php echo $row->id ?>">
              <i class="fa fa-trash" aria-hidden="true"></i>
          </a>
          <label for="input<?php echo $row->id ?>">جزییات محصول</label>
          <input type="checkbox" id="input<?php echo $row->id ?>">
          <div class="detail" >
              <ul>
                  <li><span>نوع سم:</span>
                      <?php
                      if($row->product_type==1) echo 'حشره کش' ;
                      if($row->product_type==2) echo 'کنه کش' ;
                      if($row->product_type==3) echo 'قارچ کش' ;
                      if($row->product_type==4) echo 'علف کش' ;
                      elseif($row->product_type==5) echo 'روغن' ;
                      ?>
                  </li>
                  <li><span>نام:</span> <?php echo $row->name ?></li>
                  <li><span>نام لاتین:</span> <?php echo $row->pub_name." ". $row->EC ?></p></li>
                  <li><p><?php echo $row->pub_name." ". $row->EC ?></p></li>
                  <li><span>نحوه اثر:</span> <?php echo $row->how_work ?></li>
                  <li>  <span>درجه سمیت:</span><?php echo $h->result()[0]->toxicity_degree ?></li>
                  <li><span>جزییات: </span><?php echo $row->des ?> </li>

              </ul>
          </div>
      </div>
      <?php ;
  }
  ?>
</div>
</div>
