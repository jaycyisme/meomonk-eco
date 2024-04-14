<?php
include("../handle/Services/ProductAttributeServices.php");

class AttributeController
{
    private ProductAttributeServices $productAttributeServices;

    public function __construct()
    {
        $this -> productAttributeServices = new ProductAttributeServices(); // Khởi tạo đối tượng của lớp ProductAttributeServices
    }

    public function viewAttributes(): void
    {
        $this -> productAttributeServices -> view(); // Gọi phương thức view() của lớp ProductAttributeServices
    }
}

?>
