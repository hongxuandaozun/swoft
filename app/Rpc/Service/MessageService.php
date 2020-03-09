<?php
namespace App\Rpc\Service;


use App\Model\Entity\Message;
use App\Rpc\Lib\MessageInterface;
use Swoft\Co;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Rpc\Server\Annotation\Mapping\Service;
/**
 * Class MessageService
 *
 * @since 2.0
 *
 * @Service(version="1.0")
*/
class MessageService implements MessageInterface
{
    /**
     * @param int $user
     * @param string $message
     * @param int $sid
     * @RequestMapping("MessageService")
     * @return bool
    */
    public  function send(int $user, string $message ,int $sid): bool
    {

        Co::create(function ()use($sid,$message,$user){
            $message=Message::find($sid);
            if($message->getSupportCategory()==11){

            }
        });

        return true;
    }
    public function _add(){
        $message= Message::new();
        $message->setName('test');
        $message->setContent('{$order->number}digege');
        $message->setSupportCategory(11);
        $message->save();
        $id=$message->getId();
    }
    public function _find($sid){
        $message=Message::find($sid);
        $message->delete();
    }
}
