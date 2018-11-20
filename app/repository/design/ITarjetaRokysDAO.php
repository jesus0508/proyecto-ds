<?php
interface ITarjetaRokysDAO {
    public function create($tarjeta_rokys);
    public function read($id);
    public function update($tarjeta_rokys);
    public function delete($id);
    public function readAll();
}