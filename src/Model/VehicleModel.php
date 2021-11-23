<?php

namespace App\Model;

class VehicleModel extends ModelBase
{
    protected $id;
    protected $gear_box;
    protected $fuel;
    protected $required_age;
    protected $daily_price;
    protected $number_seat;
    protected $number_door;
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
     * Get the value of gear_box
     */
    public function getGearBox()
    {
        return $this->gear_box;
    }

    /**
     * Set the value of gear_box
     *
     * @return  self
     */
    public function setGearBox($gear_box)
    {
        $this->gear_box = $gear_box;

        return $this;
    }

    /**
     * Get the value of fuel
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set the value of fuel
     *
     * @return  self
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

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
     * Get the value of number_seat
     */
    public function getNumberSeat()
    {
        return $this->number_seat;
    }

    /**
     * Set the value of number_seat
     *
     * @return  self
     */
    public function setNumberSeat($number_seat)
    {
        $this->number_seat = $number_seat;

        return $this;
    }

    /**
     * Get the value of number_door
     */
    public function getNumberDoor()
    {
        return $this->number_door;
    }

    /**
     * Set the value of number_door
     *
     * @return  self
     */
    public function setNumberDoor($number_door)
    {
        $this->number_door = $number_door;

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
