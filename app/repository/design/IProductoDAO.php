<?php
interface IProductoDAO {
    public function create($producto);
    public function read($id);
    public function update($producto);
    public function delete($id);
    public function readAll();
}