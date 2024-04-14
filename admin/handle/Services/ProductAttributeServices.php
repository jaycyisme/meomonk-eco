<?php

    class ProductAttributeServices {
        private $list;
        private $n;
        private $db;

        public function __construct(){
            $this->list=array();
            $this->db=new connection("meomonk");
            $this->n=0;
        }

        public function view()
        {
            $this->list = $this->db->_viewTable("attribute");


            // Kiểm tra nếu danh sách không rỗng
            if (!empty($this->list)) {
                // Duyệt qua từng dòng trong danh sách và hiển thị thông tin người dùng
                foreach ($this->list as $row) {

                }
            } else {
                // Hiển thị thông báo nếu không có người dùng nào trong cơ sở dữ liệu
                echo "<tr><td colspan='5'>Không có người dùng nào trong cơ sở dữ liệu.</td></tr>";
            }
        }
    }