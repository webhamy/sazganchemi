<link rel="stylesheet" href="<?php echo base_url() ?>css/success.css">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model
{

    public function insert_data()
    {
        require('jdf.php');
        $date=jdate( 'Y/n/j , H:i:s' );
        $sql = "insert into posts VALUES('','" . $_POST['title'] . "','" . $_POST['post_type'] . "','" . $_POST['hide_text']. "','" . $date. "','" . $_FILES['post_image']['name'] . "')";
        $query = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            echo '<div class="text">درخواست شما با موفقیت درج شد </div>';
        } else {
            echo '<div class="text">مشکلی پیش آمده، دوباره سعی کنید</div>';
        }
        echo '<script>setTimeout(function(){window.location="' . base_url() . 'index.php/account/Articles"},5000)</script>';

    }
}

?>
