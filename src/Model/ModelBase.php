<?php

namespace App\Model;

use App\Core\Db;
use PDOException;

class ModelBase extends Db
{
  protected $table;

  private $db;

  public function findAll()
  {
    $query = $this->myQuery('SELECT * FROM ' . $this->table);
    return $query->fetchAll();
  }

  public function findBy(array $criteria)
  {
    $champs = [];
    $valeurs = [];

    // We loop to explode the table
    foreach ($criteria as $champ => $valeur) {
      $champs[] = "$champ = ?";
      $valeurs[] = $valeur;
    }
    $liste_champs = implode(' AND ', $champs);

    return $this->myQuery('SELECT * FROM ' . $this->table . ' WHERE ' . $liste_champs, $valeurs)->fetchAll();
  }

  public function find(int $id)
  {
    return $this->myQuery("SELECT * FROM  {$this->table}  WHERE id = $id")->fetch();
  }

  public function create()
  {
    $champs = [];
    $interrogations = [];
    $valeurs = [];

    // We loop to explode the table
    foreach ($this as $champ => $valeur) {
      if ($valeur !== null && $champ != 'db' && $champ != 'table') {
        $champs[] = $champ;
        $interrogations[] = "?";
        $valeurs[] = $valeur;
      }
    }
    $liste_champs = implode(', ', $champs);
    $liste_interrogations = implode(', ', $interrogations);

    $this->myQuery('INSERT INTO ' . $this->table . ' (' . $liste_champs . ') VALUES (' . $liste_interrogations . ')', $valeurs);
    return Db::getInstance()->lastInsertId();
  }

  public function hydrate($datas)
  {
    foreach ($datas as $key => $value) {
      $setter = 'set' . ucfirst($key);

      if (method_exists($this, $setter)) {
        $this->$setter($value);
      }
    }
    return $this;
  }

  public function update(int $id, $model)
  {
    $champs = [];
    $valeurs = [];

    // We loop to explode the table
    foreach ($model as $champ => $valeur) {
      if ($valeur !== null && $champ != 'db' && $champ != 'table') {
        $champs[] = "$champ = ?";
        $valeurs[] = $valeur;
      }
    }
    $valeurs[] = $id;

    $liste_champs = implode(', ', $champs);

    $upd = $this->myQuery('UPDATE ' . $this->table . ' SET ' . $liste_champs . ' WHERE id = ?', $valeurs);
    return $upd->rowCount();
  }

  public function delete(int $id)
  {
    $del = $this->myQuery("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    return $del->rowCount();
  }

  protected function myQuery(string $sql, array $attributs = null)
  {
    $this->db = Db::getInstance();

    if ($attributs !== null) {
      // prepared request
      try {
        $query = $this->db->prepare($sql);
        $query->execute($attributs);
        return $query;
      } catch (\PDOException $e) {
        var_dump($e->getMessage());
      }
    } else {
      // simple request
      try {
        return $this->db->query($sql);
      } catch (PDOException $e) {
        var_dump($e->getMessage());
      }
    }
  }
}
