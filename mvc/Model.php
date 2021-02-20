<?php

class Model
{
    private string $name = '';
//    private string $db = 'db.json';
    private string $db = 'db.txt';

    public function get($type = '')
    {
        if ($type == 'users') {
            $data = file_get_contents($this->db);
            return $data;
        } else if ($type == '' && $this->name != '') {
            return $this->name;
        } else {
            return null;
        }
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function save()
    {
        if ($this->name != '') {
            $new_data = $this->name."\n";
            file_put_contents($this->db, $new_data, FILE_APPEND);
            return true;
        }
        return false;
    }
}