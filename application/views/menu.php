<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<header>
    <div id="header">
        <div id="logo">
            <img src="<?php echo base_url()?>/css/images/newlogo.png">
        </div>
        <form  class=form-search method="post">
            <i class="fa fa-search"></i>
            <input class=form-input type="search" id="search" name="search" onkeyup="search_()">
        </form>
    </div>
</header>
<div id="nav">
    <nav>
        <label for="drop" class="toggle"><img src="https://img.icons8.com/material/24/000000/menu.png"></label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <li><a href="<?php echo base_url()?>index.php/Home">صفحه اصلی</a></li>
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-1" class="toggle">محصولات +</label>
                <a href="#" >محصولات</a>
                <input type="checkbox" id="drop-1"/>
                <ul>
                    <li><a href="<?php echo base_url()?>index.php/Products?type=1">حشره کش ها</a></li>
                    <li><a href="<?php echo base_url()?>index.php/Products?type=2">کنه کش ها</a></li>
                    <li><a href="<?php echo base_url()?>index.php/Products?type=3">قارچ کش ها</a></li>
                    <li><a href="<?php echo base_url()?>index.php/Products?type=4">علف کش ها</a></li>
                    <li><a href="<?php echo base_url()?>index.php/Products?type=5">روغن ها</a></li>
                </ul>

            </li>
            <li>

                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">خدمات +</label>
                <a href="#">پژوهش وتوسعه</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="<?php echo base_url()?>index.php/Articles?type=1">همایش ها</a></li>
                    <li><a href="<?php echo base_url()?>index.php/Articles?type=2">سمینار ها</a></li>
                    <li><a href="<?php echo base_url()?>index.php/Articles?type=3">مقالات</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url()?>index.php/Articles?type=4">اخبار کشاورزی</a></li>
            <!-- <li><a href="<?php echo base_url()?>index.php/Menu/news">اخبار کشاورزی</a></li> -->
            <li><a href="<?php echo base_url()?>index.php/Menu/contact_us"> تماس با ما</a></li>
        </ul>
    </nav>
</div>
