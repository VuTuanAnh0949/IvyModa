<?php
  include "header.php";
  include "slider.php";
  include "class/cartegory_class.php";
?>
  <?php 
  $cartegory = new cartegory;
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name	 = $_POST['cartegory_name'];
    $insert_cartegory=$cartegory->insert_cartegory($cartegory_name);
  }
  ?>

<div class="admin-content-right">
<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
      <h1>Danh sách danh mục</h1>
      <table>
        <tr>
          <th>STT</th>
          <th>ID</th>
          <th>Danh Mục</th>
          <th>Tuỳ Biến</th>
        </tr>
        <tr>
          <td>1</td>
          <td>1</td>
          <td>Nam</td>
          <td> <a href="">Sửa</a>|<a href="">Xoá</a></td>
        </tr>
      </table>
     </div>
    
      </div>
  </section>
</body>
</html>
