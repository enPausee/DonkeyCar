<?php

namespace App\Model;

use App\Model\ModelBase;

class VehicleModel extends ModelBase
{
    protected $id;
    protected $required_age;
    protected $daily_price;
    protected $image;
    protected $created_at;
    protected $updated_at;
    protected $deleted_at;
    protected $brand_id;
    protected $model_id;
    protected $category_id;
  
    public function __construct()
    {
        $this->table = 'vehicle';
    }

    public function getAllProperties()
    {
        return $this->myQuery("
        SELECT v.required_age, v.daily_price, v.image,v.created_at, b.name AS marque,m.name AS model,c.name AS category FROM {$this->table} AS v 
        LEFT JOIN brand AS b ON v.brand_id=b.id
        LEFT JOIN model AS m ON v.model_id=m.id
        LEFT JOIN category AS c ON v.category_id=c.id"
        )->fetchAll();

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

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of deleted_at
     */ 
    public function getDeleted_at()
    {
        return $this->deleted_at;
    }

    /**
     * Set the value of deleted_at
     *
     * @return  self
     */ 
    public function setDeleted_at($deleted_at)
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }

    /**
     * Get the value of brand_id
     */ 
    public function getBrand_id()
    {
        return $this->brand_id;
    }

    /**
     * Set the value of brand_id
     *
     * @return  self
     */ 
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    /**
     * Get the value of model_id
     */ 
    public function getModel_id()
    {
        return $this->model_id;
    }

    /**
     * Set the value of model_id
     *
     * @return  self
     */ 
    public function setModel_id($model_id)
    {
        $this->model_id = $model_id;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}