<?php 
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
  <?php 
  $cartegory = new cartegory;
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartgory_name = $_POST['cartegory_name'];
    $insert_cartegory=$cartegory->insert_cartegory($cartegory_name);
  }
  var_dump($_POST);
  ?>
<div class="admin-content-right">
      <div class="admin-content-right-cartegory-add">
          <h1>Thêm Danh Mục</h1>
          <form action="" method="POST">
            <input type="cartgory_name" placeholder="Nhập tên danh mục">
            <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
  </section>
</body>
</html>