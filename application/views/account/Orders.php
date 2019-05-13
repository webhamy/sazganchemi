<div id="orders">
    <div>
        <table>
            <tr>
                <th>-</th>
                <th>نام محصول</th>
                <th>تاریخ سفارش</th>
                <!--                <th>تعداد</th>-->
                <!--                <th>قیمت واحد</th>-->
                <th>قیمت</th>
                <th>آدرس</th>
                <th></th>
            </tr>
            <?php
            $i = 1;
            foreach ($b->result() as $row) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row->p_name ?></td>
                    <td><?php echo $row->date ?></td>
                    <!--                    <td>--><?php //echo $row->number ?><!--</td>-->
                    <td><?php echo $row->price ?></td>
                    <!--                    <td>--><?php //echo ($row->price) * 5 ?><!--</td>-->
                    <td><?php echo $row->address ?></td>
                    <td><?php if (@$_SESSION["UserInfo"]['user_type'] == '0') { ?>
                            <a href="<?php echo base_url() ?>index.php/account/Users?UserID=<?php echo $row->UserId ?>">مشخصات
                                کاربر</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php $i++;
            }
            ?>
        </table>
    </div>
</div>
