<?php

class Profile extends CI_Controller
{
    public function index()
    {
        $this->template->render('user/content/profile');
    }
}
