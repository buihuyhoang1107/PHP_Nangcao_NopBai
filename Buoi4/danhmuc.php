<?php

    class DanhMuc{
        private $ten;
        private $duongdan;
        private $danhmuccha;
        private $anhhienthi;
        private $mota;

        public function InThongTin($ten, $duongdan,$danhmuccha, $anhhienthi, $mota){
            echo 'Tên: '.$ten;
            echo '</br>';
            echo 'Đường dẫn: '.$duongdan;
            echo '</br>';
            echo 'Danh mục cha: '.$danhmuccha;
            echo '</br>';
            echo 'Ảnh hiển thị: '.$anhhienthi;
            echo '</br>';
            echo 'Mô ta: '.$mota;
        }
    }

    $baiviet1 = new DanhMuc();
    $baiviet1->InThongTin("Web5ngay","web5ngay.com","Nơi này là cha","Đây là ảnh", "Làm việc ..... bằng cả năng lượng, tinh thần của bản thân");
?>