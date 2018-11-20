<?php
interface IClienteDAO {
    public function create($cliente);
    public function read($id);
    public function update($cliente);
    public function delete($id);
    public function readAll();
}