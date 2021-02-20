<?php

class Controller {
    public function run()
    {
        $action = $_GET['action'] ?? null;
        if ($action == 'users') {
            $model = new Model();
            $data = $model->get('users');
        } else if($action == 'new') {
            $model = new Model();
            $model->setName($_GET['name']);
            $model->save();
            $data = $model->get();
        }

        $view = new View($data);
        $view->out();
    }
}