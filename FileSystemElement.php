<?php


interface FileSystemElement
{
    public function copy(string $newPath);

    public function move(string $newPath);

    public function rename(string $newName);

    public function create();

    public function delete(bool $force);

    public function info() : array;
}