<?php 
// Session class
class Session{
  public static function init(){
    if (version_compare(phpversion(), '5.4.0', '<')){
          if (session_id() ==''){
              session_start();
          }
       }else{
         if (session_status()==PHP_SESSION_NONE){
              session_start();
         }
        }
      }
   public static function set($key, $val){
      $SESSION[$key]=Sval;
   }
   public static function get($key){
      if (isset($_SESSION[$key])){
       return $_SESSION[$key];
       }else{
       return false;
      }
}
?>