<?php
class KeepTime
{
  private static $array;

  private function __construct()
  {
  }

  public static function set($key, $time)
  {
    self::$array[$key] = $time;
  }
  public static function get($key)
  {
    return self::$array[$key];
  }
}
