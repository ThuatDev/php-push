<?php
namespace Database;

use Database\Database;

class Business extends Database {

    protected $table;
    protected $field = '*';
    protected $primary = 'id';

    public function get($condition=''){
        $sql = "SELECT $this->field FROM $this->table";

        if (!empty($condition)){
            $sql.=' WHERE '.$condition;
        }


        $data = $this->getRaw($sql);

        return $data;
    }

    public function first($condition=''){
        $sql = "SELECT $this->field FROM $this->table";

        if (!empty($condition)){
            $sql.=' WHERE '.$condition;
        }

        $data = $this->firstRaw($sql);

        return $data;
    }

    public function find($id){

        $condition = $this->primary.' = '.$id;
        return $this->first($condition);

    }

    public function insert($data){
        return $this->insertData($this->table, $data);
    }

    public function update($data, $condition){
        return $this->updateData($this->table, $data, $condition);
    }

    public function delete($condition){
        return $this->deleteData($this->table, $condition);
    }
}










