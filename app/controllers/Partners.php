<?php


class Partners extends Controller
{

    /**
     * Partners constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Partner');
    }

    public function index(){
        // echo 'index method is loaded<br>';
        $partners = $this->pagesModel->getPatners();
        $data = array(
            'title' => 'Koostööparterid',
            'partners' => $partners
        );
        $this->view('partners/index', $data);
    }
}