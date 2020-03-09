<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/11/11
 * Time: 17:05
 */

namespace App\Model\Entity;


use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;

/**
 * Class Message
 * @since 2.0
 * @Entity(table="message",pool="db.pool")
*/

class Message extends Model
{
    /**
     * @Id(incrementing=true)
     *
     * @Column(name="id",prop="id")
     *
     * @var int
    */
    private $id;


    /**
     * @Column(name="name")
     *
     * @var string
    */
    private $name;
    /**
     * @Column(name="support_category")
     *
     * @var int
    */
    private $supportCategory;

    /**
     * @Column(name="content")
     *
     * @var string
    */
    private $content;
    /**
     * @return int
     */
    public function getSupportCategory():int {
        return $this->supportCategory;
    }
    /**
     * @param int $supportCategory
    */
    public function setSupportCategory(int $supportCategory):void {
        $this->supportCategory=$supportCategory;
    }
    /**
     * @return int
     */
    public function getId():int {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getContent():string {
        return $this->content;
    }
    /**
     * @param  string $content
     */
    public function setContent(string $content):void {
         $this->content=$content;
    }
    /**
     * @return string
     */
    public function getName():string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name):void {
        $this->name=$name;
    }
    /**
     * @param int $id
     */
    public function setId(int $id):void {
        $this->id=$id;
    }
}
