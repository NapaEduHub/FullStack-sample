<?php
// glob("*"); // File listing

class FileManager {}

$fm = new FileManager();

$fm->list('a/folder');
$fm->copy('a/some.txt', 'b/another_folder');
$fm->move('a/some.txt', 'b/another_folder');
$fm->createFile('path/to/folder', 'newFile.txt');
$fm->createDir('path/to/folder', 'newDir');
$fm->remove('path/to/file');
$fm->move('path/to/a/some.txt', 'another.txt');

class File {}
class Folder {}