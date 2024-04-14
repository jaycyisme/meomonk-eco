<?php

class ProductAttributeServices
{
    private array $list;
    private int $n;
    private connection $db;

    public function __construct()
    {
        $this -> list = array();
        $this -> db = new connection("meomonk");
        $this -> n = 0;
    }

    public function view()
    {
        $sql = "SELECT Product.Name AS ProductName, Attribute.Name AS AttributeName, Attribute.Value AS AttributeValue
            FROM ProductAttribute
            INNER JOIN Attribute ON ProductAttribute.AttributeID = Attribute.Id
            INNER JOIN Product ON ProductAttribute.ProductID = Product.Id";
        $result = $this -> db -> _search_query($sql);

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

}