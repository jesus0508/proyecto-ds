<?php
interface ITrabajadorDAO {
    public function create($trabajador);
    public function update($trabajador);
    public function read($id);
    public function delete($id);
    public function readAll($id);
}