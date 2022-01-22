<?php
class AJAXController
{
    protected $projects;

    public function __construct()
    {
        $this->projects = new Projects();
    }

    public function index()
    {
        if (isset($_POST['proj'])) {
            if ($_POST['proj'] == 'PHP Mini Framework') {
                $this->projects->phpmf();
            } 
            else if ($_POST['proj'] == 'Wholesale Ecommerce Site') {
                $this->projects->ecomm();
            } 
            else if ($_POST['proj'] == 'CRM Inventory Management Plugin') {
                $this->projects->inv();
            } 
            else if ($_POST['proj'] == 'South Dakota Area Obituaries') {
                $this->projects->obit();
            } 
            else {
                echo 'Invalid Project';
            }
        }
    }
}