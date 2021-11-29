<?php

namespace App\Model;

class OrderModel extends ModelBase
{
    protected $id;
    protected $start_location;
    protected $end_location;
    protected $price;

    public function __construct()
    {
        $this->table = 'order';
    }

    public function getAllProperties()
    {
        if (!isset($_SESSION['user']['id'])) {
            return [];
        } else {
            return $this->myQuery(
                "
        SELECT o.id, o.start_location, o.end_location, o.price, o.created_at, v.image, b.name AS marque, m.name AS model, c.name AS category FROM `{$this->table}` AS o
        LEFT JOIN vehicle AS v ON v.id = o.vehicle_id
        LEFT JOIN brand AS b ON v.brand_id = b.id
        LEFT JOIN model AS m ON v.model_id = m.id
        LEFT JOIN category AS c ON v.category_id = c.id
        WHERE o.user_id = {$_SESSION['user']['id']}
        "
            )->fetchAll();
        }
    }

    public function deleteOrder($id)
    {
        if (!isset($_SESSION['user']['id'])) {
            return [];
        } else {

            //Suppression d'une ligne à l'aide d'une instruction préparée
            $sql = $this->myQuery(
                "
              DELETE FROM `{$this->table}` WHERE `order`.`id` = $id
              "
            );

            //Exécuter notre instruction DELETE
            $res = $sql->execute();

            return $res;
        }
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
     * Get the value of start_location
     */
    public function getStartLocation()
    {
        return $this->start_location;
    }

    /**
     * Set the value of start_location
     *
     * @return  self
     */
    public function setStartLocation($start_location)
    {
        $this->start_location = $start_location;

        return $this;
    }

    /**
     * Get the value of end_location
     */
    public function getEndLocation()
    {
        return $this->end_location;
    }

    /**
     * Set the value of end_location
     *
     * @return  self
     */
    public function setEndLocation($end_location)
    {
        $this->end_location = $end_location;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}