<?php $this->load->view('account/Header'); ?>
<div id="error">
    <?php echo @$error ?>
    <!--    --><?php //echo validation_errors(); ?>
</div>
<div class="form">
    <div class="tab-group">
        <div id="logo"><a href="<?php echo base_url()?>index.php/Home"><img src="<?php echo base_url()?>/css/images/newlogo2.png"></a></div>
        <label for="signup_radio" class="tab">ثبت نام</label>
        <label for="login_radio" class="tab  active">ورود</label>
    </div>
    <div class="tab-content">
        <input type="radio" id="login_radio" name="login" checked="checked"/>
        <div id="login">
            <h3>مجددا خوش آمدید!</h3>
            <form action="<?php echo base_url() ?>index.php/account/Login/check_data" method="post">
                <div class="field-wrap">
                    <span class="star">*</span>
                    <input class="input" type="text" name="username" autocomplete="off" placeholder="نام کاربری"
                           value="<?php echo set_value('username') ?>"/>
                    <?php echo form_error('username'); ?>
                </div>
                <div class="field-wrap">
                    <span class="star">*</span>
                    <input class="input" type="password" name="password" autocomplete="off" placeholder="رمزعبور"
                           value="<?php echo set_value('password') ?>"/>
                    <?php echo form_error('password'); ?>
                </div>
                <button class="button button-block">ورود</button>
            </form>
        </div>
        <input type="radio" id="signup_radio"
               name="login" <?php if (@$login_content == 'signupform') echo 'checked="checked"'; ?>>
        <div id="signup">
            <h3>ثبت نام</h3>
            <form action="<?php echo base_url() ?>index.php/account/Login/register" method="post">
                <div class="field-wrap">
                    <span class="star">*</span>
                    <input class="input" type="text" name="signup_username" autocomplete="off" placeholder=" نام کاربری"
                           value="<?php echo set_value('signup_username') ?>"/>
                    <?php echo form_error('signup_username'); ?>
                </div>
                <div class="field-wrap">
                    <span class="star">*</span>
                    <input class="input" type="text" name="email" autocomplete="off" placeholder=" آدرس ایمیل"
                           value="<?php echo set_value('email') ?>"/>
                    <?php echo form_error('email'); ?>
                </div>
                <div class="field-wrap">
                    <span class="star">*</span>
                    <input class="input" type="password" name="signup_password" autocomplete="off"
                           placeholder=" رمز عبور" value="<?php echo set_value('signup_password') ?>"/>
                    <?php echo form_error('signup_password'); ?>
                </div>
                <div class="field-wrap">
                    <span class="star">*</span>
                    <input class="input" type="password" name="signup_rePassword" autocomplete="off"
                           placeholder=" تکرار رمز عبور " value="<?php echo set_value('signup_rePassword') ?>"/>
                    <?php echo form_error('signup_rePassword'); ?>
                </div>
                <div class="field-wrap">
                    <span class="star">*</span>
                    <input class="input" type="text" name="phone" autocomplete="off" maxlength="11" placeholder="تلفن"
                           value="<?php echo set_value('phone') ?>"/>
                    <?php echo form_error('phone'); ?>
                </div>
                <button type="submit" class="button button-block">ارسال</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('account/Footer'); ?>
