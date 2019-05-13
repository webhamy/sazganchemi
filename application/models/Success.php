<link rel="stylesheet" href="<?php echo base_url() ?>css/success.css">
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Model
{
    public function insert_data()
    {
        if (isset( $_SESSION["UserInfo"]["user_name"])){
           $user_name=$_SESSION["UserInfo"]["user_name"];
        }
        else{
            $user_name='کاربر مهمان';
        }
        $sql = "insert into requests VALUES('','" .$user_name. "','" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['company'] . "','" . $_POST['title'] . "','" . $_POST['message'] . "','')";
        $query = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            echo '<div class="text">درخواست شما با موفقیت درج شد </div>';
        } else {
            echo '<div class="text">مشکلی پیش آمده، دوباره سعی کنید</div>';
        }
        echo '<script>setTimeout(function(){window.location="' . base_url() . 'index.php/home"},5000)</script>';
    }

    public function order_product()
    {
        foreach (@$_SESSION['card'] as $index => $row) {
            $sql = "insert into orders VALUES('','" . $_POST['date'] . "','" . $row['Name'] . "','" . $row['ID'] . "','" . $row['Price'] . "','" . $_POST['address'] . "','" . $_SESSION['UserInfo']['id'] . "','" . $_POST['phone'] . "')";
            $query = $this->db->query($sql);
        }
        if ($this->db->affected_rows() > 0) {
            echo '<div class="text">سفارش شما با موفقیت درج شد </div>';
        } else {
            echo '<div class="text">مشکلی پیش آمده، دوباره سعی کنید</div>';
        }
        echo '<script>setTimeout(function(){window.location="' . base_url() . 'index.php/home"},5000)</script>';
    }
}

?>
