<?php

class LoginUserController extends Controller{

    public $model;
    public $view;

    public function __construct()
    {
        $this->model = new ModelLoginUser();
        $this->view = new View();

    }
    public function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('login_go_view.php', 'template2_view.php', $data);

    }
}