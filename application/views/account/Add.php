<script>
    function add() {
        var div1=document.createElement("DIV");
        var div2=document.createElement("DIV");
        var div3=document.createElement("DIV");
        var a = document.createElement("INPUT");
        var b = document.createElement("INPUT");
        var c = document.createElement("INPUT");
        a.setAttribute("name","target_product[]");
        b.setAttribute("name","target_pet[]");
        c.setAttribute("name","consumption[]");

        a.setAttribute("type", "text");
        b.setAttribute("type", "text");
        c.setAttribute("type", "text");
        div1.setAttribute("id", "div1");
        div2.setAttribute("id", "div2");
        div3.setAttribute("id", "div3");

        a.setAttribute("placeholder", "محصول هدف");
        b.setAttribute("placeholder", "آفت هدف");
        c.setAttribute("placeholder", "میزان مصرف");

        // var br= document.createElement("br");

        document.getElementById("addbox").appendChild(div1);
        document.getElementById("addbox").appendChild(div2);
        document.getElementById("addbox").appendChild(div3);
        div1.appendChild(a);
        div2.appendChild(b);
        div3.appendChild(c);

        // document.getElementById(inputs).appendChild(br);

    }
    function remove() {
            var input = document.getElementById("addbox");
            var count = document.getElementById("addbox").childElementCount;
            if (count >3) {
                input.removeChild(input.childNodes[count + 3]);
                input.removeChild(input.childNodes[count + 2]);
                input.removeChild(input.childNodes[count + 1]);
    }
    }
</script>
<div>
    <div class="errors"><?php echo validation_errors()
        ?>
        <?php if (isset($_POST['submit'])) echo $error ?>
    </div>
    <div id="container">
        <form action="<?php echo base_url() ?>index.php/account/Add/check_data" method="post"
              enctype="multipart/form-data">
            <div class="box">
                <div>
                    <input type="text" name="name" placeholder="نام محصول" value="<?php if (isset($_POST['submit'])) echo set_value('name') ?>">
                </div>
                <div>
                    <input type="text" name="pub_name" placeholder="نام لاتین" value="<?php if (isset($_POST['submit'])) echo set_value('pub_name') ?>">
                </div>
                <div >
                  <input type="text" name="EC" placeholder="EC" value="<?php if (isset($_POST['submit'])) echo set_value('EC') ?>">
                </div>
                <div>
                    <input type="text" name="product_title" placeholder="عنوان محصول" value="<?php if (isset($_POST['submit'])) echo set_value('product_title') ?>">
                </div>
                <div>
                    <select name="product_type" id="product_type" onchange="changeColor()">
                        <option selected disabled >نوع محصول </option>
                        <option <?php if (isset($_POST['submit']) && set_value('product_type')==1) echo 'selected' ?> value="1">حشره کش </option>
                        <option <?php if (isset($_POST['submit']) && set_value('product_type')==2) echo 'selected' ?> value="2">کنه کش</option>
                        <option <?php if (isset($_POST['submit']) && set_value('product_type')==3) echo 'selected' ?> value="3">قارچ کش</option>
                        <option <?php if (isset($_POST['submit']) && set_value('product_type')==4) echo 'selected' ?> value="4"> علف کش </option>
                        <option <?php if (isset($_POST['submit']) && set_value('product_type')==5) echo 'selected' ?> value="5"> روغن </option>
                    </select>

                </div>
                <div >
                  <input type="text" name="toxicity_degree" placeholder="درجه سمیت" value="<?php if (isset($_POST['submit'])) echo set_value('toxicity_degree') ?>">

                </div>
                <div >
                  <input type="text" name="how_work" placeholder="نحوه اثر" value="<?php if (isset($_POST['submit'])) echo set_value('how_work') ?>">
                </div>
                <div >
                  <input type="text" name="karens" placeholder="دوره کارنس" value="<?php if (isset($_POST['submit'])) echo set_value('karens') ?>">
                </div>
                <div>

                    <input id="color" type="color" name="color" value=" <?php if (isset($_POST['submit'])) echo set_value('color') ?>" />
                    <label id="colorlable" for="color"><span></span> <strong>انتخاب رنگ</strong></label>
                </div>
                <div >
                    <input type="file"  name="image" id="file-7" class="inputfile inputfile-6"/>
                    <label for="file-7"><span></span> <strong> انتخاب عکس</strong></label>

                </div>
            </div>
            <div class="actions">
                <span onclick="add()">+</span>
                <span onclick="remove()">-</span>
            </div>
            <div id="addbox" class="addbox box">

                <div>
                    <input type="text" name="target_product[]" placeholder="محصول هدف">
                </div>
                <div>
                    <input type="text" name="target_pet[]" placeholder="آفت هدف">

                </div>
                <div>
                    <input type="text" name="consumption[]" placeholder="میزان مصرف">
                </div>

            </div>

              <div style="width:100%;height:300px">
                  <textarea  style="height:300px"  name="des" placeholder="توضیحات"><?php if (isset($_POST['submit'])) echo set_value('des') ?></textarea>
              </div>

            <div style="width:100%;text-align: center;margin-top:10px"><input name="submit" type="submit" value="اضافه کردن"></div>
        </form>

    </div>
</div>
<script>
  function changeColor(){
    document.getElementById("product_type").style.color='black'
  }



    'use strict';
    ;(function (document, window, index) {
        var inputs = document.querySelectorAll('.inputfile');
        Array.prototype.forEach.call(inputs, function (input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;
            input.addEventListener('change',ox function (e)) {
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
    ////////////////////////////////////////////////////////////////////

</script>
