<?php
include "header.php";   //Câu lệnh include(hoặc require)lấy tất cả văn bản/mã/thẻ trong file được chỉ định và sao chép nó vào file đã sử dụng câu lệnh include.
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  //$_SERVER['REQUEST_METHOD'] trả về phương thức nào truy vấn đến Server như POST, GET, HEAD, PUT
  $cartegory_name = $_POST['cartegory_name'];
  $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}

?>
<div class="admin-content-right">
  <div class="admin-content-right-cartegory-add">
    <h1>Thêm Danh Mục</h1>
    <form action="" method="POST">
      <input name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
      <button type="submit">Thêm</button>
    </form>
  </div>
</div>
</section>
</body>

</html>