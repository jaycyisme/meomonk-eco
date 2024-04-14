<?php
    class Attribute  {
        private string $id;
        private string $name;

        public function __construct(string $id,string $name)
        {
            $this->id=$id;
            $this->name=$name;
            //echo "Đối tượng khởi tạo";
        }

        public function get_id():string{
            return $this->id;
        }
        public function get_name():string{
            return $this->name;
        }
    }

?>