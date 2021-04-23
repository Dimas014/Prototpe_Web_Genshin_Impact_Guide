<?php
class Crud extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database();
		$this->load->model('Crud_model');
	}
	public function view()
	{
		$this->load->view('view');
	}
	
	public function viewajax()
	{
				$data=$this->Crud_model->display_records();
				$i=1;
				foreach($data as $row)
				{
					  echo "<tr>";
					  echo "<td>".$i."</td>";
					  echo "<td>".$row->name."</td>";
					  echo "<td>".$row->email."</td>";
					  echo "<td>".$row->phone."</td>";
					  echo "<td>".$row->city."</td>";
					  echo "</tr>";
					  $i++;
				}
	}
}