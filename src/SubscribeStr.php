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
    /**
     * Функция вернгёт строку состоящую с рандомных символов, длинною указанною в параметре
     * 
     * @param int $cnt - макс число символов в строке
     * @return string
     */
    public function subscribe(int $cnt = 1): string
    {
        $rs = new RandomSymbol();
        $str = '';
        for ($i=0;$i<$cnt;++$i){

            $str .= $rs->getSymbol();
        }
        return $str;
    }
}
