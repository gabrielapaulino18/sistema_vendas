<?php

interface baseDAO {
    public function getByID($id);
    public function getAll();
    public function create($entity);
    public function update($entity);
    public function delete($id);
}


?>