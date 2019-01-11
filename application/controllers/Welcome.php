<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$this->load->view('welcome_message');
	}
	
	public function employeeregister() {
        $this->load->view('adminheader');
		$this->load->model('Dbmodel');
		$output = $this->Dbmodel->admincode();
      	$data['output'] = $output;
		$this->load->view('employeeregister',$data);
	}
	
	public function adminlogin() {
		$this->load->view('adminlogin');
	}

	public function insertregister() {
		$fname= $this->input->post('fname');
		$sname=$this->input->post('sname');
		$pass=$this->input->post('passwordone');
		$spass=$this->input->post('passwordtwo');
		$mail= $this->input->post('mail');
		$name=$this->input->post('name');
		$code=$this->input->post('code');
		$phone=$this->input->post('phone');
		$role=$this->input->post('role');
		$this->load->model('Dbmodel');
		$this->Dbmodel->registerdata($fname,$sname,$pass,$spass,$mail,$name,$code,$phone,$role);
		$this->session->set_flashdata('Created','Account has been Created');
		redirect(base_url() .'Welcome/employeeregister');
	}

	public function loginCheckAdmin() {
		$name= $this->input->post('name');
		$code=$this->input->post('code'); 
		$this->load->model('Dbmodel');
		$managerData=$this->Dbmodel->managercode($name,$code);
		if (empty($managerData)) {
			echo "inside not value";
			$this->session->set_flashdata('managerlogin','Please Login with Valid username and password ');
			redirect(base_url() . 'Welcome/adminlogin');  
		}
	}
	
	public function adminhome() {
		$this->load->view('adminheader');
		$this->load->model('Dbmodel');
		$output = $this->Dbmodel->emploee();
		$data['output'] = $output;
		$this->load->view('adminhome',$data);
	}
	
	public function deleteemp() {
		$id = intval($_GET['id']);
		$this->load->model('Dbmodel');
		$files= $this->Dbmodel->deleteemp($id);
		redirect(base_url() . 'Welcome/adminhome');
	}
	
	public function loginCheckEmployee() {
		$mail= $this->input->post('email');
		$pass=$this->input->post('pass'); 
		$this->load->model('Dbmodel');
		$EmployeeData=$this->Dbmodel->Employeecode($mail,$pass);
		$managerData=$this->Dbmodel->managercode($mail,$pass);
		if (!empty($EmployeeData)) {
			$emp = 1;
		}
		if (!empty($managerData)) {
			$man = 1;
		}
		if ($emp == 1) {
			if (!empty($EmployeeData)) {
				$output =  $this->Dbmodel->emploee();
				$data['viewdata']=$output; 
				foreach ($data['viewdata'] as $item) {
					if ($item->mail ==$mail && $item->pass ==$pass) {
						$this->session->set_userdata('emploeeuserid',$item->id);
            $this->session->set_userdata('emploeeusername',$item->fname);
            $output =  $this->Dbmodel->getreport();
		        $data['viewdata']=$output; 
						redirect(base_url() . 'Welcome/employeereport?id='.$item->id,$data); 
					}
				}
			}
		}
		elseif ($man == 1) {
			$output =  $this->Dbmodel->admincode();
			$data['viewdata']=$output; 
			foreach($data['viewdata'] as $item){
				if($item->name ==$mail && $item->code ==$pass){
					$this->session->set_userdata('adminuserid','helloadmin');
					redirect(base_url() . 'Welcome/adminhome'); 
				}
			}
		}
		else {
			echo "inside not value";
			$this->session->set_flashdata('managerlogin','Please Login with Valid username and password ');
			redirect(base_url());  
		}
	}
	
	public function employeehome() {
		$this->load->view('employeeheader');
		$this->load->view('employeehome');
	}
	
	public function insertreport() {
		$emploeeuserid = $_SESSION['emploeeuserid'];  
		$date= $this->input->post('fromdata');
		$time = strtotime($date);
		$date = date('Y-m-d',$time);
		$stime=$this->input->post('stime');
		$breaks=$this->input->post('breakstart');
		$breake=$this->input->post('breakend');
		$etime=$this->input->post('etime');
		$rounding= $this->input->post('rounding');
		$total=$this->input->post('total');
		$custome=$this->input->post('custome');
		$project=$this->input->post('project');
		$cat=$this->input->post('cat');
		$work=$this->input->post('work');
		$this->load->model('Dbmodel');
		$this->Dbmodel->insertdatareport($emploeeuserid,$date,$stime,$breaks,$breake,$etime,$rounding,$total,$custome,$project,$cat,$work);
		$this->session->set_flashdata('Created','Report has submitted');
		redirect(base_url() .'Welcome/employeereport?id='.$emploeeuserid);			 
	}
	
	public function employeereport() {
		$this->load->view('employeeheader');
		$this->load->model('Dbmodel');
		$output =  $this->Dbmodel->getreport();
		$data['viewdata']=$output; 
		$this->load->view('employeereport',$data);
	}
	
	public function userLogout() {
		$this->session->unset_userdata('emploeeuserid');
		$this->session->unset_userdata('adminuserid');
		$this->session->unset_userdata('emploeeusername');
		$this->session->set_flashdata('userlogin','Successfully Logged out ');
		redirect(base_url());  
	}
	
	public function showinfo() {
		$this->load->view('adminheader');
		$this->load->model('Dbmodel');
		$output = $this->Dbmodel->getreport();
		$employeename = $this->Dbmodel->emploee();
		$data['employeename'] = $employeename;
		$data['output'] = $output;
		$this->load->view('showinfo',$data);				 		 
	}

	public function getreportbydates()
	{
		$this->load->view('adminheader');
		$empid= $this->input->post('id');
		$fromdate=$this->input->post('fromdate');
		$time = strtotime($fromdate);
		$fromdate = date('Y-m-d',$time);
		$enddate=$this->input->post('enddate');
		$time = strtotime($enddate);
		$enddate = date('Y-m-d',$time);
		$this->load->model('Dbmodel');
		$rangereport =  $this->Dbmodel->getreportbydates($empid,$fromdate,$enddate);
		//print_r($rangereport);
		$data['output'] = $rangereport;
		$this->load->view('rangeouput',$data);
	}
}
