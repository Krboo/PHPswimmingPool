<?php
class Jaime {
  public function sleepWith ( $sexpartner ) {
    $class = get_class( $sexpartner );
    if ($class == "Tyrion")
      print("Not even if I'm drunk !" . PHP_EOL);
    else if ($class == "Sansa")
      print("Let's do this." . PHP_EOL);
    else if ($class == "Cersei")
      print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);}
}
