<?php 

interface GenericService{
    public function create($objeto);
    public function update($objeto);
    public function read($id);
    public function delete($id);
    public function readAll();
}