<?php declare(strict_types=1);
/**
 * Class MessageInterface
 *
 * @since 2.0
 *
 * @Bean(name="messageServer")
*/
namespace App\Rpc\Lib;


interface MessageInterface
{
    /**
     * @param int $user
     * @param string $message
     * @param int $type
     *
     * @return bool
    */
    public  function send(int $user,string $message,int $type):bool ;
}
