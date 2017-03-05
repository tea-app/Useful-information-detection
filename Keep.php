<?php
class Keep
{
  private static $instance;

  private $attributes;

  private function __construct()
  {
  }

  public static function shared()
  {
    if (! self::$instance) {
      self::$instance = new static;
    }

    return self::$instance;
  }

  public function get($key)
  {
    return isset($this->attributes[$key]) ? $this->attributes[$key] : null;
  }

  public function set($key, $value)
  {
    $this->attributes[$key] = $value;
  }
}
