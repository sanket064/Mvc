<?php

Abstract Class Controller {
  var $mainbody;

  abstract public function main (); // forcing child controllers to include main method
  
  public function loadView($viewName) {
    ob_start();
    include("views/$viewName".".php");
    $html = ob_get_contents();
    ob_clean();
    return $html;
  }
}
?>