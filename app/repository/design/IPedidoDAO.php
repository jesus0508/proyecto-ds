<?php
interface IPedidoDAO {
    public function create($pedido);
    public function read($id);
    public function update($pedido);
    public function delete($id);
    public function readAll();
}