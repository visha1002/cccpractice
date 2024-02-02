<?php
class Query_Builder
{
    public function insert($tablename,$data){
        $columns = $values = [];
        foreach ($data as $field => $value){
            $columns[] = "`{$field}`";
            $values[] = "'" . addslashes($value) . "'";
        }
        $columns = implode(", ",$columns);
        $values = implode(", ",$values);
        return "INSERT INTO {$tablename} ({$columns}) VALUES ({$values});";
    }

    public function update($tablename, $data, $where){
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

    public function delete($tablename, $where){
        $wherecondi = [];

        foreach ($where as $field => $value){
            $wherecondi[] = "`{$field}` = " . "'" . addslashes($value) . "'";
        }

        $wherecondi = implode(", ", $wherecondi);
        
        return "DELETE FROM {$tablename} WHERE {$wherecondi};";
    }

    public function select($tablename, $columns, $extra = [])
    {
        $sql = "SELECT {$columns} FROM {$tablename}";
        // check and manage if where is given in extra
        if (isset($extra['where']) && !empty($extra['where'])) {
            $where = [];
            foreach ($extra['where'] as $key => $value) {
                $where[] = "$key = '$value'";
            }
            $where = implode(" AND ", $where);
            $sql .= " WHERE {$where}";
        }

        // check and manage if order by is given in extra
        if (isset($extra["order_by"]) && !empty($extra["order_by"])) {
            $orderby = implode(", ", $extra["order_by"]);

            $sql .= " ORDER BY {$orderby}";
        }

        //check and manage if limit is given in extra
        if (isset($extra["limit"]) && !empty($extra["limit"])) {
            $sql .= " LIMIT {$extra["limit"]}";
        }

        return $sql;
    }
}
class Query_Executer extends Query_Builder
{
    public function Connection($servername, $user, $password, $database)
    {
        $connection = mysqli_connect($servername, $user, $password, $database);

        if ($connection) {
            return $connection;
        } else {
            return FALSE;
        }
    }

    public function fetch($connection, $query)
    {
        $data = [];
        $result = mysqli_query($connection, $query);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function query($connection, $que){
        $result = mysqli_query($connection, $que);
        if($result){
            return $result;
        }
        else{
            return FALSE;
        }
    }
}

?>