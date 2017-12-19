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
        $this-> string = $string;
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
        return $this->toString();
    }
    public function lcfirst()
    {
        $this->string= lcfirst($this->string);
        return $this;
    }
    public function toString()
    {
        return $this->string;
    }
    public  function strtoLower(){
        $str = strtolower($this->string);
        return new self($str);
    }
    public function checkIf($string)
    {
        return new self($string);
    }
    public function camelCase()
    {
        if (preg_match("/[-,_,]+/", $this->string) === 1){
            return $this
                ->strtolower()
                ->replace('_', ' ')
                ->replace('_', ' ')
                ->ucwords()
                ->replace(' ', '')
                ->lcfirst();

        }
        else{
            return $this;
        }

    }
    public static function __callStatic($name, $arguments)
    {
        $method = (string) Str::on($name)->replace('to', '')->lcfirst();
        return (string) Str::on($arguments[0])->{$method}();
    }

    public function snakeCase()
    {
        if (preg_match("/[-,_, ]+/", $this->string) === 1){
            return $this
                ->replace('-', ' ')
                ->ucwords()
                ->replace(' ', '_')
                ->strtoLower();
    }else{
            $pattern ="/(.)(?=[A-Z]/";
            $this->string = preg_replace($pattern,'$1_', $this->string);
            return $this ->strtolower();
        }
    }
    public function __get($name)
    {
        $method = (string) Str::on($name)->lcfirst();
        $str = $this->{$method}()->toString();
        return $str;
    }
    public function __invoke()
    {
        $str = $this->toString();
        return $str;
    }
}
