<?php

namespace App\Model;

class VehicleModel extends ModelBase
{
    protected $id;
    protected $required_age;
    protected $daily_price;
    protected $image;

    public function __construct()
    {
        $this->table = 'vehicle';
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of required_age
     */
    public function getRequiredAge()
    {
        return $this->required_age;
    }

    /**
     * Set the value of required_age
     *
     * @return  self
     */
    public function setRequiredAge($required_age)
    {
        $this->required_age = $required_age;

        return $this;
    }

    /**
     * Get the value of daily_price
     */
    public function getDailyPrice()
    {
        return $this->daily_price;
    }

    /**
     * Set the value of daily_price
     *
     * @return  self
     */
    public function setDailyPrice($daily_price)
    {
        $this->daily_price = $daily_price;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}