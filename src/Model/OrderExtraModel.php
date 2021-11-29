<?php

namespace App\Model;

class OrderExtraModel extends ModelBase
{
  protected $orders_id;
  protected $extra_id;
  protected $quantity;

  public function __construct()
  {
    $this->table = 'order_extra';
  }

  /**
   * Get the value of orders_id
   */
  public function getOrders_id()
  {
    return $this->orders_id;
  }

  /**
   * Set the value of orders_id
   *
   * @return  self
   */
  public function setOrders_id($orders_id)
  {
    $this->orders_id = $orders_id;

    return $this;
  }

  /**
   * Get the value of extra_id
   */
  public function getExtra_id()
  {
    return $this->extra_id;
  }

  /**
   * Set the value of extra_id
   *
   * @return  self
   */
  public function setExtra_id($extra_id)
  {
    $this->extra_id = $extra_id;

    return $this;
  }

  /**
   * Get the value of quantity
   */
  public function getQuantity()
  {
    return $this->quantity;
  }

  /**
   * Set the value of quantity
   *
   * @return  self
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;

    return $this;
  }
}
