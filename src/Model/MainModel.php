<?php

namespace App\Model;

class MainModel extends ModelBase
{
  /**
   * Select a random picture
   *
   * @return void
   */
    public static function getRandomPicture()
    {
        $pictures = glob('./picture/vehicle/*.{jpg,png,gif}', GLOB_BRACE);
        $randomPicture = $pictures[array_rand($pictures)];
        return $randomPicture;
    }
}
