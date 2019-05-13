
<div>
    <div id="container">
        <form action="<?php echo base_url() ?>index.php/account/Articles/check_data" method="post"
              enctype="multipart/form-data">
              <div class="box">

            <div>
                <input type="text" name="title" placeholder="عنوان پست"
                       value="<?php if (isset($_POST['submit'])) echo set_value('title') ?>">
                <div><?php if (isset($_POST["submit"])) echo form_error('title'); ?></div>
            </div>
            <div>
                <select id="post_type" name="post_type" onchange="changeColor()">
                  <option selected disabled >نوع پست</option>
                  <option <?php if (isset($_POST['submit']) && set_value('post_type')==1) echo 'selected' ?> value="1">مقاله</option>
                  <option <?php if (isset($_POST['submit']) && set_value('post_type')==2) echo 'selected' ?> value="2">همایش</option>
                  <option <?php if (isset($_POST['submit']) && set_value('post_type')==3) echo 'selected' ?> value="3">سمینار</option>
                  <option <?php if (isset($_POST['submit']) && set_value('post_type')===4) echo 'selected' ?> value="4"> اخبار </option>
                  <option <?php if (isset($_POST['submit']) && set_value('post_type')===5) echo 'selected' ?> value="5"> اخبار محصولات </option>
                </select>
                <div><?php if (isset($_POST["submit"])) echo form_error('post_type'); ?></div>
            </div>
            <div>
                <input type="file" name="post_image" id="file-7" class="inputfile inputfile-6"/>
                <label for="file-7"><span></span> <strong> انتخاب ‌عکس</strong></label>
                <div>

                </div>
            </div>
          </div>
            <div id="editor" style="width: 100%;min-height: 400px;height: auto" >
                <div id='edit' class="content">
                    <?php if (isset($_POST['submit'])) echo htmlspecialchars_decode(set_value('hide_text'))?>
                </div>
                <?php if (isset($_POST["submit"])) echo form_error('post_type'); ?>
            </div>

            <input type="hidden" id="hide_text" name="hide_text">
            <div style="width:100%;margin: 10px auto 0 auto;float: none"><input name="submit" type="submit" value="اضافه کردن" onclick="save()"></div>
        </form>
    </div>
</div>
<script>
    function changeColor(){
        document.getElementById("post_type").style.color='black'
    }
    function save(){
        var second = document.querySelector(".fr-element").innerHTML;
       document.getElementById('hide_text').value=second;
    }
    $(function(){
        $('#edit').froalaEditor()
    });
    'use strict';
    ;(function (document, window, index) {
        var inputs = document.querySelectorAll('.inputfile');
        Array.prototype.forEach.call(inputs, function (input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;
            input.addEventListener('change', function (e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
//                    document.getElementById('file-7').value = fileName;
                else
                    label.innerHTML = labelVal;
            });
            // Firefox bug fix
            input.addEventListener('focus', function () {
                input.classList.add('has-focus');
            });
            input.addEventListener('blur', function () {
                input.classList.remove('has-focus');
            });
        });
    }(document, window, 0));
</script>
