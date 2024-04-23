<?php

namespace Controller;
include("../Controller/AttributeController.php");
include("../Services/ProductAttributeServices.php");

class AttributeController
{
    private ProductAttributeController $productAttributeServices;

    public function __construct()
    {
        $this -> productAttributeServices = new ProductAttributeController(); // Khởi tạo đối tượng của lớp ProductAttributeServices
    }

    public function viewAttributes(): void
    {
        $this -> productAttributeServices -> viewAttributes(); // Gọi phương thức view() của lớp ProductAttributeServices
    }

    public function getAllAttributeValue(): void
    {
        $this -> productAttributeServices -> getAllAttributeValue();
    }

    public function getAllProductName(): void
    {
        $this -> productAttributeServices -> getAllProductName();
    }
}