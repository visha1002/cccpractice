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
        $columns = $wherecondi = [];

        foreach ($data as $field => $value){
            $columns[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        foreach ($where as $field => $value){
            $wherecondi[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }
        $columns = implode(", ",$columns);
        $wherecondi = implode(", ", $wherecondi);

        return "UPDATE {$tablename} SET {$columns} WHERE {$wherecondi};";
    }

    function delete($tablename, $where){
        $wherecondi = [];

        foreach ($where as $field => $value){
            $wherecondi[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }

        $wherecondi = implode(", ", $wherecondi);
        
        return "DELETE FROM {$tablename} WHERE {$wherecondi};";
    }

    function select($tablename, $var, $extra){
        return "SELECT {$var} FROM {$tablename} {$extra};";
    }
?>