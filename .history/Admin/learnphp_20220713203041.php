<?php 
echo "<h3>Ví dụ hằng số PHP __LINE__</h3>";
echo "Bạn đang ở dòng số " . __LINE__ . "<br><br>";
echo "<h3>Ví dụ hằng số PHP __FILE__</h3>";
echo __FILE__ . "<br><br>";
echo "<h3>Ví dụ hằng số PHP __DIR__</h3>";
echo __DIR__ . "<br><br>";
echo dirname(__FILE__) . "<br><br>";
function test_function(){
  echo 'Hi';
}
test_function();
echo  __FUNCTION__ . "<br><br>";// trả về blank

echo "<h3>Ví dụ hằng số PHP __CLASS__</h3>";
?>