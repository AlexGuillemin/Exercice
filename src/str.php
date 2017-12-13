<?php
namespace Strings;
class Str
{
    private $string;

    public  static  function on($string)
    {
        return new self($string);
    }
    public function __construct(string $string)
    {
        return $this-> string = $string;
    }
    public function ucwords()
    {
        $this->string= ucwords($this->string);
        return $this;
    }
    public function replace($search, $replace)
    {
        $this->string = str_replace($search, $replace, $this->string);
        return $this;
    }
    public function __toString()
    {
        return $this->string;
    }
    public function lcfirst()
    {
        $this->string= lcfirst($this->string);
        return $this;
    }

}
