<?php
namespace andruavm\subscribestr;
use andruavm\random\RandomSymbol;

if(file_exists('../vendor/autoload.php')){

    include_once '../vendor/autoload.php';
}

/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.07.2019
 * Time: 11:55
 */
class SubscribeStr
{
    /**
     * @param int $cnt - макс число символов в строке
     * @return string
     */
    public function subscribe(int $cnt = 1)
    {
        $rs = new RandomSymbol();
        $str = '';
        for ($i=0;$i<$cnt;++$i){

            $str .= $rs->getSymbol();
        }
        return $str;
    }
}
#echo  (new SubscribeStr())->subscribe(33);