<?php
include("Connect.php");
include("ProductAttribute.php");

class AttributeServices{
    private $list;
    private int $n;
    private $db;
    public function __construct(){
        $this->list=array();
        $this->db=new access_db("meomonk");
        $this->n=0;
    }
    public function view()
    {

        $tablename="attribute";
        $this->list=$this->db->_viewTable($tablename);
        var_dump($this->list);

    }
    public function add(Mathang $h)
    {
    }
    public function edit(Mathang $h)
    {

    }
    public function del(string $masp)
    {

    }
    public function search(string $masp)
    {

    }
    public function search_query(string $query)
    {

    }

    public function getAllAttributeNames() {
        $sql = "SELECT name FROM attribute";
        return $this->db->_viewTable($sql); // Trả về kết quả của câu truy vấn
    }




}
?>