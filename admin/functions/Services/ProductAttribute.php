<?php
    class ProductAttribute  {
        private int $id;
        private string $name;

        public function __construct(int $id,string $name)
        {
            $this->id=$id;
            $this->name=$name;
            //echo "Đối tượng khởi tạo";
        }

        public function get_id():int{
            return $this->id;
        }
        public function get_name():string{
            return $this->name;
        }
    }

?>