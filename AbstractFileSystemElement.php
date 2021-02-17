<?php

require_once 'FileSystemElement.php';

abstract class AbstractFileSystemElement implements FileSystemElement
{
    public $name;
    public $path;

    public function __construct($name, $path)
    {
        $this->name = $name;
        $this->path = $path;
    }

    public function copy(string $newPath)
    {
        $from = $this->path . '/' . $this->name;
        copy($from, $newPath);
    }

    public function move(string $newPath)
    {
        $from = $this->path . '/' . $this->name;
        rename($from, $newPath);
    }

    public function rename(string $newName)
    {
        $from = $this->path . '/' . $this->name;
        $to = $this->path . '/' . $newName;
        rename($from, $to);
    }

    public function info(): array
    {
        return [
            'name' => $this->name,
            'path' => $this->path,
        ];
    }
}