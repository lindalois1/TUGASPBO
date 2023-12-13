<?php

namespace App\Models;

use App\Core\Model;

class Film extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_Film";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
          // Check if 'id_film' is set in the $_POST array
          if (isset($_POST['id_film'])) {
              $id_film = $_POST['id_film'];
          } else {
              // Handle the case where 'id_film' is not set, perhaps by setting a default value or showing an error message.
              // For example, you might set $id_film = null; or display an error message.
              // It depends on your application's requirements.
              // Here, I'm setting $id_film to null as an example.
              $id_film = null;
          }
      
          $nama_film = $_POST['nama_film'];
          $tahun = $_POST['tahun'];
      
          $sql = "INSERT INTO tb_Film (id_film, nama_film, tahun) VALUES (:id_film, :nama_film, :tahun)";
          $stmt = $this->db->prepare($sql);
      
          // Bind parameters
          $stmt->bindParam(":id_film", $id_film);
          $stmt->bindParam(":nama_film", $nama_film);
          $stmt->bindParam(":tahun", $tahun);
      
          // Execute the query
          $stmt->execute();
      }
      

      public function edit($id)
      {
            $query = "SELECT * FROM tb_Film WHERE id_film=:id_film";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_film", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $id_film= $_POST['id_film'];
            $nama_film = $_POST['nama_film'];
            $tahun = $_POST['tahun'];
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_Film
                  SET nama_film=:nama_film, tahun=:tahun
                  WHERE id_film=:id_film";
            } else {
                  $sql = "UPDATE tb_Film
                  SET nama_film=:nama_film, tahun=:tahun
                  WHERE id_film=:id_film";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_film", $id_film);
            $stmt->bindParam(":nama_film", $nama_film);
            $stmt->bindParam(":tahun", $tahun);
            $stmt->bindParam(":id_film", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_Film WHERE id_film=:id_film";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_film", $id);
            $stmt->execute();
      }
}
