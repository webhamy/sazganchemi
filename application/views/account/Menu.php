
<aside class="sidebar">
    <ul>
        <?php if (@$_SESSION["UserInfo"]['user_type'] == '0') { ?>
          <li>
              <a href="<?php echo base_url() ?>index.php/account/Graph">
                  <div><i class="fa fa-area-chart" aria-hidden="true"></i></div>
                  <span>آمار</span>
              </a>
          </li>
            <li>
                <a href="<?php echo base_url() ?>index.php/account/Add">
                    <div><i class="fa fa-plus-square-o" aria-hidden="true"></i></div>
                    <span>فرم اضافه کردن محصول</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>index.php/account/Articles">
                    <div ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                    <span>فرم اضافه کردن پست</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>index.php/account/Products">
                    <div ><i class="fa fa-list-alt" aria-hidden="true"></i></div>
                    <span>لیست محصولات موجود</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>index.php/account/Users">
                    <div><i class="fa fa-users" aria-hidden="true"></i></div>
                    <span>لیست کاربران</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>index.php/account/Show_articles">
                    <div ><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                    <span>لیست مقالات</span>
                </a>
            </li>
        <?php } ?>
        <!-- <li>
            <a href="<?php echo base_url() ?>index.php/account/Orders">
                <div ><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <span>لیست سفارشات</span>
            </a>
        </li> -->
        <li>
            <a href="<?php echo base_url() ?>index.php/account/Opinion">
                <div><i class="fa fa-comments" aria-hidden="true"></i></div>
                <span> پیام کاربران</span>
            </a>
        </li>
    </ul>
</aside>
