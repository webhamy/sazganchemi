
<div class="picture bg"></div>
  <div class="content" >
    <div class="Slogan first-section">
        <span>
            کیفیت:هزینه کمتر و محصول بیشتر

        </span>
    </div>
      <div style="width: 100%;padding:0 50px">
          <div class="rio-promos">
              <img  style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/01.jpg " />
              <img style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/02.jpg " />
              <img style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/03.jpg " />
              <img style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/04.jpg " />
              <img style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/05.jpg " />
              <img style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/06.jpg " />
              <img style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/07.jpg " />
              <img style="height: 270px" src="<?php echo base_url() ?>/css/images/sliders/08.jpg " />
              <!--            <img style="height: 270px" src="--><?php //echo base_url() ?><!--/css/images/sliders/09.jpg " />-->
              <!--            <img style="height: 270px" src="--><?php //echo base_url() ?><!--/css/images/sliders/10.jpg " />-->
              <!--            <img style="height: 270px" src="--><?php //echo base_url() ?><!--/css/images/sliders/11.jpg " />-->
              <!--            <img style="height: 270px" src="--><?php //echo base_url() ?><!--/css/images/sliders/12.jpg " />-->
          </div>
      </div>

      <div class="Slogan second-section">
          <span>
              درباره ما
          </span>
      </div>
      <div class="about_des">
          شركت سازگان شيمی فعاليت خـود را از سـال 1384 با فرمـولاسيون سموم دفع آفـات نباتی آغاز نمود. هدف اصلی شركت تلاش در جهت توليد سموم جديد و سازگار با محيط زيست بوده است. اگـر چـه رسيدن به اين هدف مشكلات زيادی را فـرا روی شركت قـرار داده است. از يك سو آشـنائی و استفاده از سمــوم پر مصرف فعلی كه به طور متـمـادی طی ساليان دور و نزديك عرضه گشته و از سوی ديگر دست يابی نه چندان آسان و كاربرد تخصصی، همراه با زمان مصــرف معين سمــوم جديد از جمله مشــكلات تهيه و عرضه اين سموم مي باشد. عليرغم مشكلات مزبور موفقيت در فرمولاسيون سم جديد كنسالت توانست ما را به بخشی از اهداف مورد نظر نزديك نمايد.

      </div>
      <div style="width: 80%;padding:0 10px;">

      </div>
      <div class="slideshow-container"  style="height: 290px;background-color: blue;width: 300px;margin: -10px auto 10px auto;">
          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="<?php echo  base_url() ?>/css/images/sliders/ax1.jpg" style="width:100%">
<!--              <div class="text">Caption Text</div>-->
          </div>

          <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="<?php echo  base_url() ?>/css/images/sliders/ax2.jpg" style="width:100%">
<!--              <div class="text">Caption Two</div>-->
          </div>

          <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="<?php echo  base_url() ?>/css/images/sliders/ax3.jpg" style="width:100%">
<!--              <div class="text">Caption Three</div>-->
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
<!--      <div style="text-align:center">-->
<!--          <span class="dot" onclick="currentSlide(1)"></span>-->
<!--          <span class="dot" onclick="currentSlide(2)"></span>-->
<!--          <span class="dot" onclick="currentSlide(3)"></span>-->
<!--      </div>-->

      <div class="Slogan third-section" style="height: auto;">
      <span>
          با مصرف بهینه ضمن کنترل آفات در حفظ محیط زیست بکوشیم.
      </span>
      </div>
      <div class="sazcont">

          <div>
              <div class="products_news" >
                <ul>
                    <li style="text-align:center">آخرین اخبار محصولات</li>
                    <?php   foreach ($h->result() as $row) {?>
                   <li><a href="<?php echo base_url()?>index.php/Articles?pId=<?php echo $row->id ?>"><?php echo $row->title ?></a></li>
                 <?php }?>
                 <li><a style="text-align: left;padding-left: 15px;" href="<?php echo base_url()?>index.php/Articles?type=5">بیشتر...</a></li>
                </ul>

              </div>
          </div>

        <div class="links">
            <ul>
                <li>پیوند ها</li>
                <li><a href="https://www.maj.ir">وزارت جهاد کشاورزی</a></li>
                <li><a href="http://ppo.ir">سازمان حفظ نباتات</a></li>
                <li><a href="https://khabarfarsi.com/">خبرگزاری کشاورزی ایران</a></li>
                <li><a href="http://mimt.gov.ir/">وزارت صنعت،معدن و تجارت</a></li>
                <li><a href="http://jaenph.areo.ir/">موسسه بررسی آفات</a></li>
                <li><a href="https://www.irimo.ir/far/index.php">سایت هواشناسی</a></li>
            </ul>
        </div>
    </div>
    <div class="pics">
      <div class="bg"></div>
      <div class="bg"></div>
      <div class="bg"></div>
      <div class="bg"></div>
    </div>
  </div>
