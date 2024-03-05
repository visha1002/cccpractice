<?php

class Core_Model_Resource_Collection_Abstract
{
    protected $_resource = null;

    protected $_model = null;
    protected $_select = [];
    protected $_isLoaded = false;
    protected $_data = [];
    public function getData()
    {
        if (!$this->_isLoaded) {
            $this->load();
        }
        return $this->_data;
        // print_r($this->_data);
    }
    public function setResource(Core_Model_Resource_Abstract $resource)
    {
        $this->_resource = $resource;
        // echo "<pre>";
        // print_r($this);
        return $this;
    }

    public function setModelClass($modelClass)
    {
        $this->_model = $modelClass;
    }
    public function select()
    {
        // echo $this->_resource->getTableName(); --> catalog_product
        // print_r("SELECT * from {$this->_resource->getTableName()};"); --> select * from catalog_product
        $this->_select['from'] = ($this->_resource)->getTableName();
        // print_r($this->_select);  --> Array ( [from] => catalog_product )
        return $this;
    }

    public function addFieldToFilter($column, $filter)
    {
        $this->_select['where'][$column][] = $filter;
        // echo "<pre>";
        // print_r($this->_select);
        return $this;
    }

    public function where($sql)
    {
        $whereCond = [];
        foreach ($this->_select['where'] as $_field => $_filters) {
            foreach ($_filters as $_value) {
                if (!is_array($_value)) {
                    $_value = ['eq' => $_value];
                }
                // print_r($_value);
                foreach ($_value as $_k => $_v) {
                    switch ($_k) {
                        case 'gt':
                            $whereCond[] = "`$_field` > '{$_v}' ";
                            break;
                        case 'like':
                            $whereCond[] = "`$_field` LIKE '{$_v}' ";
                            break;
                        case 'in':
                            $whereCond[] = "`$_field` IN ( '{$_v}' ) ";
                            break;
                        case 'eq':
                            $whereCond[] = "`$_field` = '{$_v}' ";
                            break;
                        case 'between':
                            $whereCond[] = "`$_field` BETWEEN '{$_v}' ";
                            break;
                        case 'not':
                            $whereCond[] = "NOT `$_field` = '{$_v}' ";
                    }
                }
            }
        }
        $whereCond = implode(" AND ", $whereCond);
        $sql .= "WHERE $whereCond ";
        return $sql;
    }

    public function addFieldToGroupBy($columns)
    {
        $group = explode(",", $columns);
        $this->_select['groupby'][] = $group;
        // echo "<pre>";
        // print_r($this->_select);
        return $this;
    }

    public function groupBy($sql)
    {
        $groupBy = [];
        foreach ($this->_select['groupby'] as $columns) {
            foreach ($columns as $column) {
                $groupBy[] = $column;
            }
        }
        $groupBy = implode(",", $groupBy);
        $sql .= "GROUP BY $groupBy ";
        return $sql;
    }

    public function addFieldToOrderBy($columns, $type)
    {
        $order = explode(',', $columns);
        $this->_select['orderby'][] = $order;
        $this->_select['type'] = $type;
        // echo "<pre>";
        // print_r($this->_select);
        return $this;
    }

    public function orderBy($sql)
    {
        $orderBy = [];
        foreach ($this->_select['orderby'] as $columns) {
            // print_r($columns);
            foreach ($columns as $column) {
                $orderBy[] = $column;
            }
        }
        $orderBy = implode(",", $orderBy);
        $sql .= "ORDER BY $orderBy {$this->_select['type']} ";
        // print_r($sql);
        return $sql;
    }

    public function limit($number)
    {
        $this->_select['limit'][] = $number;
        return $this;
    }

    public function load()
    {
        $sql = "SELECT * FROM {$this->_select['from']} ";
        // echo $sql;

        if (isset($this->_select['where']) && count($this->_select['where'])) {
            $sql = $this->where($sql);
        }

        if (isset($this->_select['groupby']) && count($this->_select['groupby'])) {
            $sql = $this->groupBy($sql);
        }

        if (isset($this->_select['orderby']) && count($this->_select['orderby'])) {
            $sql = $this->orderBy($sql);
        }

        if (isset($this->_select['limit']) && count($this->_select['limit'])) {
            $sql .= "LIMIT {$this->_select['limit'][0]}";
        }
        // echo $sql;
        // die;
        $result = $this->_resource->getAdapter()->fetchAll($sql);
        // echo "<pre>";
        // print_r($result); // data in array
        foreach ($result as $row) {
            $this->_data[] = Mage::getModel($this->_model)->setData($row);
        }
        //print_r($this->_data); --> data in array
        $this->_isLoaded = true;
        return $this;
    }
}