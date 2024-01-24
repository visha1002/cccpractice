<?php
    function insert($tablename, $data){
        $columns = $values = [];
        foreach ($data as $field => $value){
            $columns[] = "`{$field}`";
            $values[] = "'" . addslashes($value) . "'";
        }
        $columns = implode(", ",$columns);
        $values = implode(", ",$values);
        return "INSERT INTO {$tablename} ({$columns}) VALUES ({$values});";
    }

    function update($tablename, $data, $where){
        $columns = $wherecon = [];

        foreach ($data as $field => $value){
            $columns[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }

        foreach ($where as $field => $value){
            $wherecon[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        $columns = implode(", ", $columns);
        $wherecon = implode(", ", $wherecon);
         
        return "UPDATE {$tablename} SET {$columns} WHERE {$wherecon}";
    }

    function delete($tablename, $where){
        $wherecon = [];

        foreach ($where as $field => $value){
            $wherecon[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        $wherecon = implode($wherecon);

        return "DELETE FROM {$tablename} WHERE {$wherecon};";
    }
?>