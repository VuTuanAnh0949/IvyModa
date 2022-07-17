<?php
  include "class/cartegory_class.php";
  $cartegory = new cartegory;
  if(!isset($_GET['cartegory_id'])||$_GET['cartegory_id']==NULL){
    echo "<script> window.location = 'cartegorylist.php'</script>";
  }else{
    $cartegory_id = $_GET['cartegory_id'];
  }
  $get_cartegory= $cartegory->get_cartegory($cartegory_id);
  if($get_cartegory){
    $result=$get_cartegory->fetch_assoc();
  }
?>