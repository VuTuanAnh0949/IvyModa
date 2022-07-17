<?php
  include "header.php";
  include "slider.php";
  include "class/cartegory_class.php";
?>
<?php 
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $cartgory_name = $_POST['cartgory_name'];
  $insert_cartegory = $cartegory->insert_cartegory($cartgory_name);
}
?>

<div class="admin-content-right">
      <div class="admin-content-right-cartegory-add">
          <h1>Thêm Danh Mục</h1>
          <form action="" method="POST">
            <select name="" id="">
              <option value="#">Chọn Danh Mục</option>
            </select>
            <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
  </section>
</body>
</html>
