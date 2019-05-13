<?php $this->load->view('account/Header'); ?>
    <div>
        <div class="header">
            <div class="toggle-btn"><label for="checkboxMneu"><i class="fas fa-bars" aria-hidden="true"></i></label></div>
            <div id="logo2"><a href="<?php echo base_url()?>index.php/Home"><img src="<?php echo base_url()?>/css/images/logo2.png"></a></div>
            <div class="logout">
              <label  onclick="show_message()">
              <i class="fa fa-user" aria-hidden="true"></i>
               </label>
              <div id="message">
                  <div></div>
                  <div>آیا برای خروج اطمینان دارید؟</div>
                  <div><a href="<?php echo base_url() ?>index.php/account/Login/log_out">بله</a></div>
                  <div onclick="hide_message()">خیر</div>
              </div>
              <div id="name" style="color: white"><?php echo $_SESSION["UserInfo"]["user_name"] ?></div>
            </div>

        </div>
        <div class="body">
          <input id="checkboxMneu" type="checkbox"/>
            <?php $this->load->view('account/Menu'); ?>
            <?php
            $this->load->view('account/' . $content);
            ?>
        </div>
    </div>
<?php $this->load->view('account/Footer'); ?>
