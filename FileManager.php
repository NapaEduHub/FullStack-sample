<?php
require_once 'File.php';
require_once 'Folder.php';
require_once 'Sample.php';

class FileManager
{
    use Sample;

    public $current_path = './';
    public static $version = '1.0.0';

    public function __construct(string $path)
    {
        $this->changePath($path);
    }

    public function changePath(string $path)
    {
        if (Folder::is($path)) {
            $this->current_path = $path;
        }
    }

    public function list()
    {
        $list = [];
        $elements = glob(rtrim($this->current_path, '/') . '/*');
        usort($elements, function ($a, $b) {
            $aIsDir = Folder::is($a);
            $bIsDir = Folder::is($b);
            if ($aIsDir === $bIsDir)
                return strnatcasecmp($a, $b);
            elseif ($aIsDir && !$bIsDir)
                return -1;
            elseif (!$aIsDir && $bIsDir)
                return 1;
        });
        foreach ($elements as $element) {
            $info = pathinfo(realpath($element));
            if (is_dir($element)) {
                $newElement = new Folder($info['basename'], $info['dirname']);
            } else {
                $newElement = new File($info['basename'], $info['dirname']);
            }
            $list[] = $newElement;
        }

        return $list;
    }

}


if ($_GET['action'] == 'delete' && isset($_GET['path']) && isset($_GET['name'])) {
    $filename = $_GET['path'] . '/' . $_GET['name'];
    if (File::exists($filename)) {
        if (Folder::is($filename)) {
            $elem = new Folder($_GET['name'], $_GET['path']);
        } else {
            $elem = new File($_GET['name'], $_GET['path']);
        }
        $elem->delete();
    }
//    header('Location: ?');
    exit();
}


$fm = new FileManager('./');
//$fm->changePath('db');

foreach ($fm->list() as $item) {
    echo $item->name;
    echo ' <a href="?action=delete&path=' . $item->path . '&name=' . $item->name . '">x</a>';
    echo '<br/>';
}

FileManager::$version = '2.0.1';

echo FileManager::$version;


