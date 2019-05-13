<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>

<div class="content">
    <div class="contact_row first_contact_row">
        <div class="contact_column shadow">
            <div class="icon_item_contact"><i class="icon fa-envelope-o" aria-hidden="true"></i></div>
            <div class="tit_item_contact">ایمیل های شرکت</div>
            <div>ایمیل:info@sazganchemi.com</div>
        </div>
        <div class="contact_column shadow">
            <div class="icon_item_contact"><i class="icon fa-phone" aria-hidden="true"></i></div>
            <div class="tit_item_contact">
                راه های ارتباطی
            </div>
            <div>
                تلفن:02188020311 ، 02188352938
                </br>
                فکس:02188352694
            </div>
        </div>
    </div>

    <div class="contact_row shadow second_contact_row">
        <div class="icon_item_contact"><i class="icon fa-map-marker" aria-hidden="true"></i></div>
        <div class="tit_item_contact">آدرس های شرکت</div>
        <div>
            نشانی:
            تهران يوسف آباد خيابان جهان آرا خيابان شهيد قهرمان دودانگه غربي (29) پلاك 48 طبقه اول واحد2
            </br>
            نشانی  کارخانه:  شهرک صنعتی اشتهارد
        </div>
    </div>

    <div class="contact_row shadow last_contact_row" >
        <div  class="icon_item_contact"><i class="icon fa-paper-plane" aria-hidden="true"></i></div>
        <div class="tit_item_contact">ارتباط با ما</div>
        <div class="comment">
            <form method="post" action="<?php echo base_url() ?>index.php/Check_data/index">
                <h4>  فرم همکاری با ما</h4>
                <div>
                    <input type="text" name="name" placeholder=" نام و نام خانوادگی *" id="name"
                           value="<?php if (isset($_POST['submit'])) echo set_value('name') ?>">
                    <div><?PHP if (isset($_POST['submit'])) echo form_error('name'); ?> </div>
                </div>
                <div>
                    <input type="text" name="email" placeholder=" ایمیل *"
                           value="<?php if (isset($_POST['submit'])) echo set_value('email') ?>">
                    <div><?PHP if (isset($_POST['submit'])) echo form_error('email'); ?> </div>
                </div>
                <div>
                    <input type="text" name="company" placeholder=" شرکت/سازمان *"
                           value="<?php if (isset($_POST['submit'])) echo set_value('company') ?>">
                    <div><?PHP if (isset($_POST['submit'])) echo form_error('company'); ?> </div>
                </div>
                <div>
                    <input type="text" name="title" placeholder=" عنوان پیام *"
                           value="<?php if (isset($_POST['submit'])) echo set_value('title') ?>">
                    <div><?PHP if (isset($_POST['submit'])) echo form_error('title'); ?> </div>
                </div>
                <div>
                    <input type="text" name="message" placeholder=" درخواست خود را شرح دهید *"
                           value="<?php if (isset($_POST['submit'])) echo set_value('message') ?>">
                    <div><?PHP if (isset($_POST['submit'])) echo form_error('message'); ?> </div>
                </div>
                <div>
                    <input type="submit" name="submit" value="ارسال پیام"/>
                </div>

            </form>
<!--            <div class="about_us">-->
<!--                <h4>  درباره ما</h4>-->
<!--                شركت سازگان شيمی فعاليت خـود را از سـال 1384 با فرمـولاسيون سموم دفع آفـات نباتی آغاز نمود. هدف اصلی شركت تلاش در جهت توليد سموم جديد و سازگار با محيط زيست بوده است. اگـر چـه رسيدن به اين هدف مشكلات زيادی را فـرا روی شركت قـرار داده است. از يك سو آشـنائی و استفاده از سمــوم پر مصرف فعلی كه به طور متـمـادی طی ساليان دور و نزديك عرضه گشته و از سوی ديگر دست يابی نه چندان آسان و كاربرد تخصصی، همراه با زمان مصــرف معين سمــوم جديد از جمله مشــكلات تهيه و عرضه اين سموم مي باشد. عليرغم مشكلات مزبور موفقيت در فرمولاسيون سم جديد كنسالت توانست ما را به بخشی از اهداف مورد نظر نزديك نمايد.-->
<!--            </div>-->
        </div>
    </div>
</div>


<?php $this->load->view('footer'); ?>
