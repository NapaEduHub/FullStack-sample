<?php
// glob("*"); // File listing

class MyFileManager
{
    public function list($dir = '*')
    {
        return glob($dir == '*' ? $dir : $dir . '/*');
    }

    public function copy($path, $newPath)
    {
        copy($path, $newPath);
    }

    public function createFile($fileName)
    {
        $file = fopen($fileName, 'w');
        fclose($file);
    }

    public function createDir($newFolder, $path = '.')
    {
        mkdir($path . '/' . $newFolder);
    }
}

$fm = new MyFileManager();

$fm->createDir('logs', 'db');
//$fm->copy('log.txt', time() . '-log.txt');
$fm->createFile('newfile.txt');

echo '<pre>';
print_r($fm->list());




//class File {}
//class Folder {}


/*$fm->list('a/folder');
$fm->copy('a/some.txt', 'b/another_folder');
$fm->move('a/some.txt', 'b/another_folder');
$fm->createFile('path/to/folder', 'newFile.txt');
$fm->createDir('path/to/folder', 'newDir');
$fm->remove('path/to/file');
$fm->rename('path/to/a/some.txt', 'another.txt');*/