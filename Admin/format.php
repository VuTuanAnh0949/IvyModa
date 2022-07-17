<?php 
//Format class
class Format{ 
   public function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));   // Hàm strtotime() giúp chúng ta dễ dàng chuyển thời gian theo định dạng tiếng anh thành timestamp.
  }
  public function textShorten($text,$limit=400){
    $text =$text." ";
    $text = substr($$text,0,$limit);
    $text = substr($text,0,strrpos($text, ' '));
    $text = $text."......";
    return $text;
  }
  public function validation($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  public function title(){
    $path=  $_SERVER['SCRIPT_FILENAME'];
    $title =  basename ($path, '.php');
    if($title == 'index'){
     $title =  'home';
    }elseif ($title == 'contact'){
    $title ='contact';
  } 
  return $title = ucfirst($title);
 }
}
?>