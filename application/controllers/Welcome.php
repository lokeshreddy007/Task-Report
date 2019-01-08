<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function employeeregister(){
		$this->load->model('Dbmodel');
		$output = $this->Dbmodel->admincode();
      	$data['output'] = $output;
		$this->load->view('employeeregister',$data);
	}
	public function adminlogin(){

		$this->load->view('adminlogin');
	}


	public function insertregister()
    {
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
		  
		  public function loginCheckAdmin(){
      
			$name= $this->input->post('name');
			$code=$this->input->post('code'); 
			$this->load->model('Dbmodel');
			$managerData=$this->Dbmodel->managercode($name,$code);
			if(empty($managerData)){
			  echo "inside not value";
			  $this->session->set_flashdata('managerlogin','Please Login with Valid username and password ');
			  redirect(base_url() . 'Welcome/adminlogin');  
			}
			else{
			  $output =  $this->Dbmodel->admincode();
			  $data['viewdata']=$output; 
			  foreach($data['viewdata'] as $item){
									   
				if($item->name ==$name && $item->code ==$code){
				  
				  $this->session->set_userdata('sales','1');
				redirect(base_url() . 'Welcome/adminhome'); 
				  
				}
			  }
			}
		  }
		  public function adminhome(){
			  $this->load->view('adminheader');
			  $this->load->model('Dbmodel');
			  $output = $this->Dbmodel->emploee();
      			$data['output'] = $output;
			  $this->load->view('adminhome',$data);
		  }
		  public function deleteemp()
		  {
		   $id = intval($_GET['id']);
	  
			   $this->load->model('Dbmodel');
			   $files= $this->Dbmodel->deleteemp($id);
				 redirect(base_url() . 'Welcome/adminhome');
		  
		  }

		  public function loginCheckEmployee(){
      
			$mail= $this->input->post('email');
			$pass=$this->input->post('pass'); 
			$this->load->model('Dbmodel');
			$managerData=$this->Dbmodel->Employeecode($mail,$pass);
			if(empty($managerData)){
			  echo "inside not value";
			  $this->session->set_flashdata('managerlogin','Please Login with Valid username and password ');
			  redirect(base_url());  
			}
			else{
			  $output =  $this->Dbmodel->emploee();
			  $data['viewdata']=$output; 
			  foreach($data['viewdata'] as $item){
									   
				if($item->mail ==$mail && $item->pass ==$pass){
				  
				  $this->session->set_userdata('userid',$item->id);
				redirect(base_url() . 'Welcome/employeehome'); 
				  
				}
			  }
			}
		  }
		  public function employeehome(){
			$this->load->view('employeeheader');
			  $this->load->view('employeehome');

		  }
		  public function insertreport(){

			$date= $this->input->post('date');
			$stime=$this->input->post('stime');
			$break=$this->input->post('break');
			$etime=$this->input->post('etime');
			$rounding= $this->input->post('rounding');
			 $total=$this->input->post('total');
			$custome=$this->input->post('custome');
			 $project=$this->input->post('project');
			 $cat=$this->input->post('cat');
			 $work=$this->input->post('work');
			 $this->load->model('Dbmodel');
	 
				 $this->Dbmodel->insertdatareport($date,$stime,$break,$etime,$rounding,$total,$custome,$project,$cat,$work);
				  $this->session->set_flashdata('Created','Account has been Created');
				  redirect(base_url() .'Welcome/employeeregister');
					 

		  }

















}
