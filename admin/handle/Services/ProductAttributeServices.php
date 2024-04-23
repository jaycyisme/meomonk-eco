<?php
namespace Services;
use Database\connection;

include("../Models/ProductAttribute.php");

class ProductAttributeServices
{
    private $list;
    private $n;
    private $db;

    public function __construct()
    {
        $this->list = array();
        $this->db = new connection("meomonk");
        $this->n = 0;
    }

    public function view(): void
    {
        $sql = "SELECT Product.Name AS ProductName, Attribute.Name AS AttributeName, Attribute.Value AS AttributeValue
            FROM ProductAttribute
            INNER JOIN Attribute ON ProductAttribute.AttributeID = Attribute.Id
            INNER JOIN Product ON ProductAttribute.ProductID = Product.Id";
        $result = $this->db->_search_query($sql);

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['ProductName'] . "</td>";
                echo "<td>" . $row['AttributeName'] . "</td>";
                echo "<td>" . $row['AttributeValue'] . "</td>";
                // Thêm các nút chỉnh sửa và xóa thuộc tính
                echo "<td>
                    <ul>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"ri-pencil-line\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalToggle\">
                                <i class=\"ri-delete-bin-line\"></i>
                            </a>
                        </li>
                    </ul>
                </td>";
                echo "</tr>";
            }
        } else {
            // Hiển thị thông báo nếu không có dữ liệu
            echo "<tr><td colspan='4'>Không có dữ liệu nào.</td></tr>";
        }
    }

    public function getAllAttributeValues(): void
    {
        $sql = "SELECT DISTINCT Value FROM Attribute";
        $result = $this->db->_search_query($sql);
        $attributeValues = array();
        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<option>" . $row['Value'] . "</option>";
            }
        } else {
            // Hiển thị thông báo nếu không có dữ liệu
            echo "<option>Không có dữ liệu nào.</option>";
        }
    }

    public function getAllProductName(): void
    {
        $sql = "SELECT DISTINCT Name FROM Product";
        $result = $this->db->_search_query($sql);
        $productName = array();
        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<option>" . $row['Name'] . "</option>";
            }
        } else {// Hiển thị thông báo nếu không có dữ liệu
            echo "<option>Không có dữ liệu nào.</option>";
        }
    }
}