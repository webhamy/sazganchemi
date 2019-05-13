<input type="radio" id="signup_radio" name="login">
<div id="signup">
    <h1>ثبت نام</h1>
    <form action="<?php echo base_url() ?>index.php/account/Login/register" method="post">
        <div class="field-wrap">
            <label class="star">
                <span class="req">*</span>
            </label>
            <input class="input" type="text" name="username" required autocomplete="off" placeholder=" نام کاربری"/>
        </div>
        <div class="field-wrap">
            <label class="star">
                <span class="req">*</span>
            </label>
            <input class="input" type="text" name="email" required autocomplete="off" placeholder=" آدرس ایمیل"/>
        </div>
        <div class="field-wrap">
            <label class="star">
                <span class="req">*</span>
            </label>
            <input class="input" type="password" name="password" required autocomplete="off" placeholder=" رمز عبور"/>
        </div>
        <div class="field-wrap">
            <label class="star">
                <span class="req">*</span>
            </label>
            <input class="input" type="password" name="repassword" required autocomplete="off"
                   placeholder=" تکرار رمز عبور "/>
        </div>
        <div class="field-wrap">
            <label class="star">
                <span class="req">*</span>
            </label>
            <input class="input" type="text" name="phone" required autocomplete="off" placeholder=" تلفن"/>
        </div>
        <button type="submit" class="button button-block">ارسال</button>
    </form>
</div>