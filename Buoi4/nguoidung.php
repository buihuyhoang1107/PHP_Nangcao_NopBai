<?php
    class Nguoidung{
        private $ten;
        private $email;
        private $matkhau;
        private $anhdaidien;

        
        public function Inthongtin($ten, $email,$matkhau,$anhdaidien){
            echo 'Tên: '.$ten;
            echo '</br>';
            echo 'Email: '.$email;
            echo '</br>';
            echo 'Mật khẩu: '.$matkhau;
            echo '</br>';
            echo 'Ảnh đại diện: '.$anhdaidien;
        }
    }
    $baiviet1 = new Nguoidung();
    $baiviet1->InThongTin("Web5ngay","web5ngay@yahoo.com","123456", "chỗ này lưu ảnh đại diện");

?>