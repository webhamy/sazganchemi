<link rel="stylesheet" href="<?php echo base_url() ?>css/success.css">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_model extends CI_Model
{

    public function delete_data($id)
    {
        $sql = "delete from requests where id=" . $id;
        $query = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            echo '<div class="text">رکورد مورد نظر با موفقیت حذف شد </div>';
        } else {
            echo '<div class="text">مشکلی پیش آمده، دوباره سعی کنید</div>';
        }
        echo '<script>setTimeout(function(){window.location=a' . base_url() . 'ccountn"},5000)</script>';
    }
}

?>
