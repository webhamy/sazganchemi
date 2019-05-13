
<div id="cont">
  <ul class="menutop">
  <li><a href="<?php echo base_url()?>index.php/account/Show_articles?type=1">همایش ها</a></li>
  <li><a href="<?php echo base_url()?>index.php/account/Show_articles?type=2">سمینار ها</a></li>
  <li><a href="<?php echo base_url()?>index.php/account/Show_articles?type=3">مقالات</a></li>
  <li><a href="<?php echo base_url()?>index.php/account/Show_articles?type=4">اخبار کشاورزی</a></li>
  <li><a href="<?php echo base_url()?>index.php/account/Show_articles?type=5">اخبار محصولات</a></li>
</ul>
    <?php
    foreach ($h->result() as $row) {
        ?>
        <div>
            <img src="<?php echo base_url() ?>/uploads/<?php echo $row->post_img; ?>">
            <span><?php echo $row->title; ?></span>
            <span>تاریخ ایجاد:<?php echo $row->post_modified; ?></span>
            <a onclick="return confirm('آیا از حذف این مقاله اطمینان دارید؟')"
               href="<?php echo base_url() ?>index.php/account/Show_articles/delete_data?ID=<?php echo $row->id ?>">
                  <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
<!--            <label for="input--><?php //echo $row->id ?><!--">جزییات محصول</label>-->
<!--            <input type="checkbox" id="input--><?php //echo $row->id ?><!--">-->
<!--            <div class="detail">-->
<!--                <ul>-->
<!--                    <li><span>نوع سم:</span> --><?php //echo $row->type ?><!--</li>-->
<!--                    <li><span> نام تجاری:</span> --><?php //echo $row->com_name ?><!--</li>-->
<!--                    <li><span>نام عمومی:</span> --><?php //echo $row->pub_name ?><!--</li>-->
<!--                    <li><span>ماده موثره:</span> --><?php //echo $row->effective_material ?><!--</li>-->
<!--                    <li><span>کلاس خطر:</span> --><?php //echo $row->hazard_class ?><!--</li>-->
<!--                    <li><span>درجه سمیت خوراکی:</span> --><?php //echo $row->toxicity_degree ?><!--</li>-->
<!--                    <li><span>پادزهر: </span>--><?php //echo $row->antitoxin ?><!-- </li>-->
<!--                    <li><span>جزییات: </span>--><?php //echo $row->des ?><!-- </li>-->
<!--                    <li><span>قیمت: </span>--><?php //echo $row->price ?><!--</li>-->
<!---->
<!--                </ul>-->
<!--            </div>-->
        </div>
        <?php ;
    }
    ?>
</div>
