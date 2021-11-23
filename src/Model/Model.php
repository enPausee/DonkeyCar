<?php

namespace App\Model;

class Model extends ModelBase
{
    protected $id;
    protected $name;
    protected $gear_box;
    protected $fuel;
    protected $number_seat;
    protected $number_door;
    protected $created_at;
    protected $updated_at;
    protected $deleted_at;

    public function __construct()
    {
        $this->table = 'model';
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of deleted_at
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Set the value of deleted_at
     *
     * @return  self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}