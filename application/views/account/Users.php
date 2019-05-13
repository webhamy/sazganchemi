<div id="orders">
    <div>
        <table>
            <tr>
                <th>-</th>
                <th>نام کاربری</th>
                <th>رمز عبور</th>
                <th>ایمیل</th>
                <th>شماره تماس</th>
                <th></th>
            </tr>
            <?php
            $i = 1;
            foreach ($h->result() as $row) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row->user_name ?></td>
                    <td><?php echo $row->password ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->phone ?></td>
                    <td>
                        <!-- <a href="<?php echo base_url() ?>index.php/account/Orders?UserID=<?php echo $row->id ?>">سفارش
                            ها</a> -->
                        <a href="<?php echo base_url() ?>index.php/account/Opinion?UserID=<?php echo $row->id ?>">پیام
                            ها</a>
                        <a onclick="return confirm('آیا از حذف این کاربر اطمینان دارید؟')"
                           href="<?php echo base_url() ?>index.php/account/Users/delete?UserID=<?php echo $row->id ?>">حذف </a>
                    </td>
                </tr>
                <?php $i++;
            }
            ?>
        </table>
    </div>
</div>
