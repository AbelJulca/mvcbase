<?php
class Deudor extends Controller
{
    function __construct()
    {
        parent::__construct();

        Session::init();
        $slogged = Session::get('loggedIn');

        if ($slogged == false) {
            Session::destroy();
            header('location: ../index');
            exit;
        }
        $this->view->js = array("deudor/js/script-deudor.js");
    }

    public function index()
    {        
        $this->view->render('deudor/index');       
    }
}
