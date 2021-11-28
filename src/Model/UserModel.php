<?php

namespace App\Model;

use App\Model\ModelBase;

class UserModel extends ModelBase
{
  protected $id;
  protected $first_name;
  protected $last_name;
  protected $phone;
  protected $email;
  protected $password;
  protected $role;
  protected $birth_date;
  protected $image;
  protected $created_at;
  protected $updated_at;
  protected $deleted_at;

  public function __construct()
  {
    $this->table = 'user';
  }

  /**
   * retrieve a user from his email
   *
   * @param string $email
   */
  public function findOneByEmail(string $email)
  {
    return $this->myQuery("SELECT * FROM {$this->table} WHERE email = ?", [$email])->fetch();
  }

  /**
   * retrieve a user from his id
   *
   * @param int $id
   */
  function findOneById($id)
  {
    return $this->myQuery("SELECT * FROM {$this->table} WHERE id = ?", [$id])->fetch();
  }

  /**
   * Create session'user
   */
  public function setSession()
  {
    $_SESSION['user'] = [
      'id' => $this->id,
      'email' => $this->email,
      'fullName' => $this->first_name . ' ' . $this->last_name
    ];
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
   * Get the value of first_name
   */
  public function getFirst_name()
  {
    return $this->first_name;
  }

  /**
   * Set the value of first_name
   *
   * @return  self
   */
  public function setFirst_name($first_name)
  {
    $this->first_name = $first_name;

    return $this;
  }

  /**
   * Get the value of last_name
   */
  public function getLast_name()
  {
    return $this->last_name;
  }

  /**
   * Set the value of last_name
   *
   * @return  self
   */
  public function setLast_name($last_name)
  {
    $this->last_name = $last_name;

    return $this;
  }

  /**
   * Get the value of phone
   */
  public function getPhone()
  {
    return $this->phone;
  }

  /**
   * Set the value of phone
   *
   * @return  self
   */
  public function setPhone($phone)
  {
    $this->phone = $phone;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of role
   */
  public function getRole()
  {
    return $this->role;
  }

  /**
   * Set the value of role
   *
   * @return  self
   */
  public function setRole($role)
  {
    $this->role = $role;

    return $this;
  }

  /**
   * Get the value of birth_date
   */
  public function getBirth_date()
  {
    return $this->birth_date;
  }

  /**
   * Set the value of birth_date
   *
   * @return  self
   */
  public function setBirth_date($birth_date)
  {
    $this->birth_date = $birth_date;

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
}
