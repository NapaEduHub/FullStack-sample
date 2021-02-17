<?php

require_once 'AbstractFileSystemElement.php';

class Folder extends AbstractFileSystemElement
{
    public static function is($path)
    {
        return is_dir($path);
    }

    public function create()
    {
        $dirName = $this->path . '/' . $this->name;
        mkdir($dirName);
    }

    public function delete(bool $force = true)
    {
        $from = $this->path . '/' . $this->name;
        rmdir($from);
    }
}