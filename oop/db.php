<?php


class DB
{
    public $mysqli;

    public function __construct($host, $user, $password, $database)
    {
        $this->mysqli = mysqli_connect($host, $user, $password, $database);
    }

    public function select($table, $fields = [], $where = [], $limit = '0,10')
    {
        $sql = 'SELECT ';
        if (is_array($fields) && count($fields)) {
            $f = implode(',', $fields);
            $sql .= trim($f, ',');
        } elseif (is_string($fields)) {
            $sql .= trim($fields, ',');
        } else {
            $sql .= '*';
        }
        $sql .= ' FROM ' . $table . ' ';
        $whereCount = count($where);
        if ($whereCount > 0) {
            $sql .= 'WHERE ';
            $whereSql = '';
            foreach ($where as $key => $value) {
                $whereSql .= $key . "='" . $value . "' AND";
            }
            $sql .= preg_replace('/AND$/s', '', $whereSql);
        }
        $sql .= ' LIMIT ' . $limit;

//        echo $sql;

        $query = mysqli_query($this->mysqli, $sql);
        return mysqli_fetch_all($query);
    }

    public function __destruct()
    {
        mysqli_close($this->mysqli);
    }
}

$db = new DB("localhost", "napa", "napa", "napa");

echo "<pre>";
print_r(
    $db->select('users', ['username', 'id'], ['id' => 5])
);

