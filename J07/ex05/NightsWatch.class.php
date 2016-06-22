<?php

class NightsWatch implements IFighter {
  private $_fight;
  public function recruit( $action) {
    if (method_exists( $action, 'fight'))
      $_fight = $action->fight() . PHP_EOL;
  }
  public function fight() {
    print($_fight);
  }
}
?>
