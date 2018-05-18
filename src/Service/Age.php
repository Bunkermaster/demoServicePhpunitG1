<?php

namespace App\Service;

/**
 * Class Age
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package App\Service
 */
class Age
{
    public function get(\DateTime $date)
    {
        $now = new \DateTime();

        return $now->diff($date)->y;
    }

}