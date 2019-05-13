<input type="radio" id="login_radio" name="login" checked="checked">
<div id="login">
    <h1>مجددا خوش آمدید!</h1>

    <form action="<?php echo base_url() ?>index.php/account/Login/check_data" method="post">
        <div class="field-wrap">
            <label class="star">
                <span class="req">*</span>
            </label>
            <input class="input" type="text" name="username" required autocomplete="off"  placeholder="&nbsp; نام کاربری"/>
        </div>
        <div class="field-wrap">
            <label class="star">
                <span class="req">*</span>
            </label>
            <input class="input"  type="password" name="password" required autocomplete="off" placeholder=" &nbsp;رمزعبور"/>
        </div>
        <p class="forgot"><a href="#">رمزتان را فراموش کردید؟</a></p>
        <button class="button button-block">ورود</button>
    </form>
</div>