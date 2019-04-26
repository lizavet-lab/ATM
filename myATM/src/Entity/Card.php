<?php
/**
 * Created by PhpStorm.
 * User: универ
 * Date: 18.04.2019
 * Time: 17:23
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Card
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $pin;
    /**
     * @ORM\Column(type="integer")
     */
    private $cvs;
    /**
     * @ORM\Column(type="integer")
     */
    private $owner;


}