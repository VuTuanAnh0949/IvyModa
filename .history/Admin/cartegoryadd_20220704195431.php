<?php 
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php 
if(!isset($_GET['cartegory_id'])||$_GET['cartegory_id']==NULL){
  echo "<script>window.location='cartegoryadd.php'</script>";
}else{
  $cartegory_id =$_GET['cartegory_id'];
}
$get_cartegory=$cartegory->get_cartegory($cartegory_id);
if($get_cartegory){
  $result=$get_cartegory->fetch_assoc();
}
?>
  <?php 
  $cartegory = new cartegory;
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name	 = $_POST['cartegory_name'];
    $insert_cartegory=$cartegory->insert_cartegory($cartegory_name);
  }
  ?>
<div class="admin-content-right">
      <div class="admin-content-right-cartegory-add">
          <h1>Thêm Danh Mục</h1>
          <form action="" method="POST">
            <input required type="cartegory_name" placeholder="Nhập tên danh mục" value="<?php echo $result['cartegory_name'] ?>">
            <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
  </section>
</body>
</html>