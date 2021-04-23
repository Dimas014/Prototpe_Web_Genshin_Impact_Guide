<?php namespace App\Controllers;

class Page extends BaseController
{
	public function karakter()
	{
		echo view("karakter");
	}

    public function senjata()
	{
		echo view("senjata");
	}

    public function artifak()
	{
		echo view("artifak");
	}
    
	public function store()
	{
		echo view("store");
	}

    public function contact()
    {
        $data['name'] = "Traveller!";
        echo view("contact", $data);
    }
    
}