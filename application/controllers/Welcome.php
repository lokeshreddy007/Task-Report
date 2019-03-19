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
	
    public function resetpassword() {
        $this->load->model('Dbmodel');
        $output = $this->Dbmodel->emploee();
        $data['output'] = $output;
        $this->load->view('resetpassword',$data);
    }
    
    public function dashboard() {
        $this->load->view('adminheader');
        $this->load->model('Dbmodel');
        $output = $this->Dbmodel->emploee();
        $data['output'] = $output;
        $this->load->view('dashboard',$data);
    }
	
	public function projects() {
        $this->load->view('adminheader');
        $this->load->model('Dbmodel');
        $output = $this->Dbmodel->emploee();
        $data['output'] = $output;
        $this->load->view('projects',$data);
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
		$this->session->unset_userdata('lastdate');
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
		$data['output'] = $rangereport;
		$this->load->view('rangeouput',$data);
	}
	public function createmonthtable(){
		$emploeeuserid = $_SESSION['emploeeuserid'];          
		$this->load->model('Dbmodel');
		$maxdata = $this->Dbmodel->report($emploeeuserid);
		$data['viewdata']=$maxdata; 
		$val = array();
			foreach ($data['viewdata'] as $item){
				array_push($val, $item->m);      
		    }
		$fin =  implode(" ",$val);
		$date2 = date('Y-m-d', strtotime('+1 month', strtotime($fin)));
		function dataRange($fin,$date2,$step='+1 day',$format='y-m-d'){
			$dates = array();
			$current = strtotime($fin);
			$last = strtotime($date2);
			while ($current <=$last){
				$dates[] = date($format,$current);
				$current = strtotime($step,$current);
			}
			return $dates;
		}
		$lastDayThisMonth = date("Y-m-t");
		if ($fin ==0){
			echo "Fin is zero ";
			$fin = date('y-m-d');
		}
		// echo $fin;
		// echo $lastDayThisMonth;
		$datetime1 = new DateTime($fin);
		$datetime2 = new DateTime($lastDayThisMonth);
		$interval = $datetime1->diff($datetime2);
		$diffdateval =  $interval->format('%R%a days');
		echo $interval->format('%R%a days');
		if ($diffdateval > 1){
			$alldateslist = dataRange($fin,$lastDayThisMonth);
		}
		// print_r($alldateslist);
		$this->session->unset_userdata('lastdate');
		$this->load->model('Dbmodel');
		$this->Dbmodel->insertdatamonth($emploeeuserid,$alldateslist);
		redirect(base_url() .'Welcome/employeereport?id='.$emploeeuserid);
		// $this->load->view('checking');
	}
	public function weekdays(){
		$this->load->view('employeeheader');
		$empid = $_SESSION['emploeeuserid'];    
		$monday = strtotime("last sunday");
		$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
		$sunday = strtotime(date("Y-m-d",$monday)." +6 days");
		$this_week_sd = date("Y-m-d",$monday);
		$this_week_ed = date("Y-m-d",$sunday);
		$this->session->unset_userdata('lastdate');
		$this->load->model('Dbmodel');
		$rangereport =  $this->Dbmodel->getreportbydates($empid,$this_week_sd,$this_week_ed);
		$data['output'] = $rangereport;
		$this->load->view('emploeereporthome',$data);

	}
	public function monthdays(){
		$this->load->view('employeeheader');
		$empid = $_SESSION['emploeeuserid'];  
		$query_date = date('y-m-d');
		// First day of the month.
		$this_week_sd =  date('Y-m-01', strtotime($query_date));
		// Last day of the month.
		$this_week_ed =  date('Y-m-t', strtotime($query_date));
		// $this->load->view('checking');
		$this->session->unset_userdata('lastdate');
		$this->load->model('Dbmodel');
		$rangereport =  $this->Dbmodel->getreportbydates($empid,$this_week_sd,$this_week_ed);
		$data['output'] = $rangereport;
		$this->load->view('emploeereporthome',$data);

	}
	public function weekdaysforincrement(){
		$this->load->view('employeeheader');
		$empid = $_SESSION['emploeeuserid'];
		$last = $_SESSION['lastdate']; 
		if (empty($last)){
			$NewDate = Date('y-m-d');
			$nextweekdatestart =  date('Y-m-d', strtotime("Sunday " .$NewDate));
			$end_date= date('Y-m-d', strtotime("saturday next week" .$NewDate));
			$this->session->set_userdata('lastdate',$end_date);
			echo $nextweekdatestart;
			echo "<br/>";
			echo $end_date;
		}else{	
			$NewDate = $last;
			$nextweekdatestart =  date('Y-m-d', strtotime("Sunday " .$NewDate));
			$end_date= date('Y-m-d', strtotime("saturday next week" .$NewDate));
			$this->session->set_userdata('lastdate',$end_date);
			echo $nextweekdatestart;
			echo "<br/>";
			echo $end_date;
		}
		// $this->load->view('checking');
		$this->load->model('Dbmodel');
		$rangereport =  $this->Dbmodel->getreportbydates($empid,$nextweekdatestart,$end_date);
		$data['output'] = $rangereport;
		$this->load->view('emploeereporthome',$data);

	}
	public function weekdaysfordecrement(){
		$this->load->view('employeeheader');
		$empid = $_SESSION['emploeeuserid'];
		$last = $_SESSION['lastdate']; 
			if (!empty($last)){
			$NewDate = $last;
			$nextweekdatestart =  date('Y-m-d', strtotime("last Sunday " .$NewDate));
			$end_date= date('Y-m-d', strtotime("saturday" .$nextweekdatestart));
			$this->session->set_userdata('lastdate',$nextweekdatestart);
			echo $nextweekdatestart;
			echo "<br/>";
			echo $end_date;
		}
		// $this->load->view('checking');
		$this->load->model('Dbmodel');
		$rangereport =  $this->Dbmodel->getreportbydates($empid,$nextweekdatestart,$end_date);
		$data['output'] = $rangereport;
		$this->load->view('emploeereporthome',$data);

	}
	
	public function ExportCSV() {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "filename_you_wish.csv";
        $query = "SELECT * FROM `report` WHERE empid = 4 ";
        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}

	public function getdatainajax() {
		$id = intval($_GET['id']);
		// echo $id;
		echo json_encode($id);
		$this->load->model('Dbmodel');
		$this->load->view('employeereport');
	}
	
	

}
