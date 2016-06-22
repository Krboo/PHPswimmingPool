<?php
class Tyrion {
  public function sleepWith ( $sexpartner ) {
    $class = get_class( $sexpartner );
    if ($class == "Jaime")
      print("Not even if I'm drunk !" . PHP_EOL);
    else if ($class == "Sansa")
      print("Let's do this." . PHP_EOL);
    else if ($class == "Cersei")
      print("Not even if I'm drunk !" . PHP_EOL);}
}
