<?php
/**
 * Created by PhpStorm.
 * User: универ
 * Date: 18.04.2019
 * Time: 17:32
 */

namespace App\Entity;


class Camera
{
    /**
     * @ORM\Column(type="integer")
     */

    private $bounds = ['50' => 100, '100' => 327, '200' =>152, '500'=>209, '1000'=>835, '2000'=>55, '5000'=>651];
    

}