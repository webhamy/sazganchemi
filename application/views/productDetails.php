<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>

    <div id="p_img" >
        <div ><img  src="<?php echo base_url() ?>/uploads/<?php echo $h->result()[0]->img_name ?>" ></div>
        <div >
            <h2><?php echo $h->result()[0]->name ?></h2>
            <p><?php echo $h->result()[0]->pub_name." ".$h->result()[0]->EC ?></p>
            <p><?php echo $h->result()[0]->product_title ?></p>
            <p>
              <strong>درجه سمیت:</strong>
              <?php echo $h->result()[0]->toxicity_degree ?></p>
            <p>
              <p>
                <strong>دوره کارنس:</strong>
                <?php echo $h->result()[0]->karens ?></p>
              <p>
              <strong>توضیحات:</strong>
              <?php echo $h->result()[0]->des ?>
            </p>
            <p>

              <?php if(!empty($h->result()[0]->how_work)) echo "<strong>نحوه اثر:</strong>".$h->result()[0]->how_work ?></p>
            </br>
        </div>
    </div>

    <div style="overflow-x:auto;width: 100%">
        <table class="product_table">
          <tr><td class="table_subject" colspan="6" >
              <h4>
براساس توصیه سازمان حفظ نباتات
</h4>

          </td></tr>

            <tr class="product_tr">
                <th >نام محصول</th>
                <th style="border-style: solid;border-width: 0 1px;border-color: white " >آفت هدف</th>
                <th >میزان مصرف</th>
            </tr>
            <?php foreach ($h->result() as $row) { ?>
            <tr class="producttr">
              <td><?php echo $row->target_product ?></td>
              <td><?php echo $row->target_pet ?></td>
              <td><?php echo $row->consumption ?></td>
            </tr>
          <?php }?>

        </table>
    </div>

<?php $this->load->view('footer'); ?>
