<?php
namespace andruavm\subscribestr;
use andruavm\random\RandomSymbol;

include_once '../vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.07.2019
 * Time: 11:55
 */
class SubscribeStr
{

    public function subscribe()
    {
        $rs = new RandomSymbol();
        $str = '';
        for ($i=0;$i<32;++$i){

            $str .= $rs->getSymbol();
        }
        return $str;
    }
}
echo  (new SubscribeStr())->subscribe();