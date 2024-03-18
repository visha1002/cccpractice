<?php

class Core_Model_Resource_Abstract
{
    protected $_tableName = null;
    protected $_primaryKey = null;
    public function __construct()
    {
        $this->init();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }

    public function getTableName()
    {
        return $this->_tableName;
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }

    public function load($id, $columns = null)
    {
        $sql = "SELECT * FROM {$this->_tableName}  
            where {$this->_primaryKey} = {$id} limit 1;";
        return $this->getAdapter()->fetchRow($sql);
    }

    public function save(Core_Model_Abstract $model)
    {
        $_data = $model->getData();
        // echo $product->getId();
        if (isset ($_data[$this->getPrimaryKey()]) && !empty ($_data[$this->getPrimaryKey()])) {
            unset($_data[$this->getPrimaryKey()]);
            $sql = $this->updateSql($this->getTableName(), $_data, [$this->getPrimaryKey() => $model->getId()]);
            $id = $this->getAdapter()->update($sql);
            // $product->setId($id);
            // echo $sql;
        } else {
            $sql = $this->insertSql($this->getTableName(), $_data);
            // echo $sql;
            $id = $this->getAdapter()->insert($sql);
            $model->setId($id);
            // echo $sql;
        }
    }

    public function delete(Core_Model_Abstract $model)
    {
        $sql = $this->deleteSql($this->getTableName(), [$this->getPrimaryKey() => $model->getId()]);
        // echo $sql;
        $this->getAdapter()->delete($sql);
    }

    public function insertSql($tablename, $data)
    {
        $columns = $values = [];
        foreach ($data as $field => $value) {
            $columns[] = "`{$field}`";
            $values[] = "'" . addslashes($value) . "'";
        }
        $columns = implode(", ", $columns);
        $values = implode(", ", $values);
        return "INSERT INTO {$tablename} ({$columns}) VALUES ({$values});";
    }

    public function updateSql($tablename, $data, $where)
    {
        $columns = $wherecondi = [];

        foreach ($data as $field => $value) {
            $columns[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        foreach ($where as $field => $value) {
            $wherecondi[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        $columns = implode(", ", $columns);
        $wherecondi = implode(", ", $wherecondi);

        return "UPDATE {$tablename} SET {$columns} WHERE {$wherecondi};";
    }

    public function deleteSql($tablename, $where)
    {
        $wherecondi = [];

        foreach ($where as $field => $value) {
            $wherecondi[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }

        $wherecondi = implode(", ", $wherecondi);

        return "DELETE FROM {$tablename} WHERE {$wherecondi};";
    }
}