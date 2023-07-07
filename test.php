<?php
class Test{
  public function __construct(){}
  public function displ(){
    phpinfo();
  }
}
?>
<?php
$exec = new Test();
$exec->displ();
?>