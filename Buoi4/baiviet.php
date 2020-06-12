<?php

    class BaiViet{
        private $tieude;
        private $duongdan;
        private $mota;
        private $noidung;

        public function InThongTin($tieude, $duongdan,$mota, $noidung){
            echo 'Tiêu đề: '.$tieude;
            echo '</br>';
            echo 'Đường dẫn: '.$duongdan;
            echo '</br>';
            echo 'Mô tả: '.$mota;
            echo '</br>';
            echo 'Nội dung: '.$noidung;
        }
    }

    $baiviet1 = new BaiViet();
    $baiviet1->InThongTin("Web5ngay","web5ngay.com","Nơi chỉa sẻ kinh nghiệm kinh doanh", "Làm việc ..... bằng cả năng lượng, tinh thần của bản thân");
?>