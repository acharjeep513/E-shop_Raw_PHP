<?php
require_once "DB.php";

class DBorder
{
    private $table = "products";

    public function addOrder($id)
    {

        $sql="SELECT * FROM $this->table where id=:id";
        $stmt=DB::prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
}