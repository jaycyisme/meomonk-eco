<?php
namespace Controller;
use Services\ProductAttributeServices;

include("../handle/Services/ProductAttributeServices.php");

class ProductAttributeController
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
