<?php
/**
 * Created by PhpStorm.
 * User: универ
 * Date: 18.04.2019
 * Time: 17:07
 */

namespace App\Entity {

    use Doctrine\ORM\Mapping as ORM;

    class Owner
    {
        /**
         * @ORM\Id()
         * @ORM\GeneratedValue()
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $surname;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $name;

        /**
         * @ORM\Column(type="string", length=4)
         */
        private $sex;

        /**
         * @ORM\Column(type="integer")
         */
        private $age;

        /**
         * @ORM\Column(type="integer")
         */
        private $card_id;
    }
}