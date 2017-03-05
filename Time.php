<?php

date_default_timezone_set('Asia/Tokyo');
class Time {
  private static $instance;

  public static function now()
  {
    return date('H:i:s',strtotime("now"));
  }

}
