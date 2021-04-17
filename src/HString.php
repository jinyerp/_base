<?
namespace Hojin\Base;

class HString
{
    private $str;
    public function __construct($str)
    {
        $this->str = $str;
    }

    public function split($token=";")
    {
        return explode($token, $this->str);
    }
}