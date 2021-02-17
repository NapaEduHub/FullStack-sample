<?php

require_once 'AbstractFileSystemElement.php';

class File extends AbstractFileSystemElement
{
    public static function exists($path)
    {
        return file_exists($path);
    }

    public static function delete_file(FileSystemElement $file)
    {
        return $file->delete();
    }

    public function create()
    {
        $fileName = $this->path . '/' . $this->name;
        $file = fopen($fileName, 'w');
        fclose($file);
    }

    public function delete(bool $force = true)
    {
        $from = $this->path . '/' . $this->name;
        unlink($from);
    }
}