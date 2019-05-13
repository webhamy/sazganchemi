<div style="color: #4dbd74;padding: 50px ;box-sizing: border-box;font-size: 1em;text-align: center">
    <?php print_r(@$_SESSION["UserInfo"]['user_name']); ?>
    خوش آمدید!!
    </br>
    شما با موفقیت وارد پنل <?php echo (@$_SESSION["UserInfo"]['user_type'] == '0') ? 'مدیریت' : 'کاربری' ?> شدید
    </br>
</div>
