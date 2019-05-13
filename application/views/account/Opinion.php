<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>اضافه کردن محصول جدید</title>
    <link href="<?php echo base_url() ?>/css/admin/opinion.css" rel="stylesheet">
</head>
<body>
<div id="opinion">
    <div id="accordion">
        <?php
        $i = 1;
        foreach ($h->result() as $row) {
            ?>
            <label for="title<?php echo $row->id ?>">
                <span>+ عنوان پیام<?php echo $i ?> : <?php echo $row->title ?></span>
                <span><?php echo $row->date ?></span>
            </label>
            <input type="checkbox" name="days" id="title<?php echo $row->id ?>"/>
            <div>
                <div>
                    <div></div>
                    <a onclick="return confirm('آیا از حذف این پیام اطمینان دارید؟')"
                       href="<?php echo base_url() ?>index.php/account/Opinion/delete?UserID=<?php echo $row->id ?>">
                         <i class="fa fa-trash" aria-hidden="true"></i>
                       </a>
                    <div>
                        نام:<?php echo $row->name ?>
                        <br>متن پیام:<?php echo $row->message ?>
                        <br>ایمیل:<?php echo $row->email ?>
                        <br>شرکت:<?php echo $row->company ?>
                    </div>
                </div>
            </div>
            <?php $i++;
        }
        ?>
    </div>
</div>
</body>
</html>
