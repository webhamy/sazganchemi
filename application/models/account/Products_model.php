<link rel="stylesheet" href="<?php echo base_url() ?>css/success.css">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model
{

    public function insert_data()
    {
        $sql = "insert into products VALUES('','" . $_POST['name'] . "','" . $_POST['toxicity_degree'] . "','" . $_POST['how_work'] . "','" . $_POST['karens'] . "','" . $_POST['EC'] . "','" . $_POST['product_type'] . "','" . $_POST['pub_name'] . "','" . $_POST['product_title'] . "','" . $_POST['des'] . "','" . $_FILES['image']['name'] . "','" . $_POST['color'] . "')";
        $query = $this->db->query($sql);
        $id=$this->db->insert_id();
        for($i=0;$i< sizeof($_POST['target_product']);$i++){
          $sql2 = "insert into sub_products VALUES('',$id,'" . $_POST['target_product'][$i] . "','" . $_POST['target_pet'][$i] . "','" . $_POST['consumption'][$i] . "')";
          $query2 = $this->db->query($sql2);
        }
        if ($this->db->affected_rows() > 0) {
            echo '<div class="text">درخواست شما با موفقیت درج شد </div>';
        } else {
            echo '<div class="text">مشکلی پیش آمده، دوباره سعی کنید</div>';
        }
        echo '<script>setTimeout(function(){window.location="' . base_url() . 'index.php/account/Add"},5000)</script>';

    }
}

?>
