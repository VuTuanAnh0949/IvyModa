<?php 
include "header.php";
include "slider.php";
include "product_class.php"
?>
<style>
/* ------------------------Product----------------------- */
.admin-content-right-product-add h1{
  margin-bottom: 20px;
}
.admin-content-right-product-add input,select{
  width: 200px;
  height: 30px;
  display: block;
  margin: 6px 0 12px;
  padding-left: 12px;
}
.admin-content-right-product-add textarea{
  display: block;
  height: 200px;
  width: 500px;
  margin-bottom: 12px;
  padding: 12px;
}
.admin-content-right-product-add button{
  display: block;
  margin-top: 10px;
  height: 30px;
  width: 100px;
  cursor: pointer;
  background-color: brown;
  border: none;
  color: white;
  transition: all 0.3s ease;
}
.admin-content-right-product-add button:hover{
  background-color: transparent;
  border: 1px solid brown;
  color: brown;
}
</style>

<div class="admin-content-right">
<div class="admin-content-right-product-add">
          <h1>Thêm Sản Phẩmc</h1>
          <form action="" method="POST" enctype="multipart/form-data">   <!-- enctype="multipart/form-data đưa dữ liệu lên csdl -->
            <label for="">Nhập tên sản phẩm <span style="color:red;">*</span></label>
            <input required type="text">  <!-- required Bắt phải nhập data, không nhận dữ liệu rác -->
            <label for="">Chọn Danh Mục<span style="color:red;">*</span></label>
            <select name="" id="">
                <option value="#">--Chọn--</option>
            </select>
            <label for="">Chọn Loại Sản Phẩm<span style="color:red;">*</span></label>
            <select name="" id="">
            <label for="">Chọn Loại Sản Phẩm<span style="color:red;">*</span></label>
              <option value="#">--Chọn--</option>
          </select>
          <label for="">Giá sản phẩm<span style="color:red;">*</span></label>
          <input required type="text">
          <label for="">Giá khuyến mãi<span style="color:red;">*</span></label>
          <input required type="text">
          <label for="">Mô tả sản phẩm<span style="color:red;">*</span></label>
          <textarea name="" id="" cols="30" rows="10"></textarea>
          <label for="">Ảnh sản phẩm<span style="color:red;">*</span></label>
          <input required type="file">
          <label for="">Ảnh mô tả<span style="color:red;">*</span></label>
          <input required multiple type="file">
          <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
  </section>
</body>
</html>