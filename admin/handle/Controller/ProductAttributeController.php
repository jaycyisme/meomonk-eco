<?php
//include("../Database/connection.php"); // Import file access_db.php để sử dụng class access_db

class AttributeController {
    private $db;

    public function __construct() {
        $this->db = new connection("meomonk"); // Khởi tạo đối tượng của lớp access_db với tên database là 'meomonk'
    }

    public function viewAttributes() {
        $attributes = $this->db->_viewTable("attribute"); // Lấy danh sách các thuộc tính từ bảng Attribute

        if (!empty($attributes)) { // Kiểm tra nếu danh sách không rỗng
            foreach ($attributes as $attribute) { // Duyệt qua từng dòng trong danh sách
                echo "<tr>";
                echo "<td>".$attribute['Name']."</td>";
                echo "<td>".$attribute['Value']."</td>";
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
            // Hiển thị thông báo nếu không có thuộc tính nào trong cơ sở dữ liệu
            echo "<tr><td colspan='3'>Không có thuộc tính nào trong cơ sở dữ liệu.</td></tr>";
        }
    }
}
?>
