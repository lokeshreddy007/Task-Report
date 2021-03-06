<?php


class Dbmodel  extends CI_Model{

     public function  registerdata($fname,$sname,$pass,$spass,$mail,$name,$code,$phone,$role){
        $sql="insert into register(`fname`, `sname`, `phonenumber`, `mname`, `mcode`, `role`, `pass`, `cpass`, `mail`)VALUES ('$fname','$sname','$phone','$name','$code','$role','$pass','$spass','$mail')";
        $this->db->query($sql);
    }

    public function admincode(){
        $query=$this->db->get('admin');
        return $query->result();
    }

    public function  managercode($mail,$pass){
        $this->db->where('name',$mail);
        $this->db->where('code',$pass);
        $query=$this->db->get('admin');
        return $query->result();
    }

    public function emploee(){
        $query=$this->db->get('register');
        return $query->result();
    }

    public function getreport(){
        $query=$this->db->get('report');
        return $query->result();
    }
    public function deleteemp($id){
        $this->db->where('id', $id);
        $this->db->delete('register');
     }

    public function  Employeecode($mail,$pass)        {
        $this->db->where('mail',$mail);
        $this->db->where('pass',$pass);
        $query=$this->db->get('register');
        return $query->result();
    }
	 public function insertdatamonth($emploeeuserid,$alldateslist){
        $len = count($alldateslist);
        for ($i=0;$i<$len;$i++){
           $time = strtotime($alldateslist[$i]);
			$hello = date('Y-m-d',$time);
            $sql="insert into report(`empid`, `date`, `strattime`, `breaks`, `endtime`, `rounding`, `total`, `custome`, `project`, `cat`, `workdetails`)VALUES ('$emploeeuserid','$hello','$stime','$breaks','$etime','$rounding','$total','$custome','$project','$cat','$work')";
            $this->db->query($sql);
        }
    }
    public function insertweekreport($emploeeuserid,$alldateslist){
        $len = count($alldateslist);
        for ($i=0;$i<$len;$i++){
			$time = strtotime($alldateslist[$i]);
			$hello = date('Y-m-d',$time);
			//echo $hello;
            //$sql="insert into report(`empid`, `date`, `strattime`, `breaks`, `endtime`, `rounding`, `total`, `custome`, `project`, `cat`, `workdetails`, `breake`)VALUES ('$emploeeuserid','$hello','$stime','$breaks','$etime','$rounding','$total','$custome','$project','$cat','$work','$breake')";
            $this->db->query($sql);
        }
    }

    public function insertdatareport($emploeeuserid,$date,$stime,$breaks,$breake,$etime,$rounding,$total,$custome,$project,$cat,$work){
        $sql="insert into report(`empid`, `date`, `strattime`, `breaks`, `endtime`, `rounding`, `total`, `custome`, `project`, `cat`, `workdetails`)VALUES ('$emploeeuserid','$date','$stime','$breaks','$etime','$rounding','$total','$custome','$project','$cat','$work')";
        $this->db->query($sql);
    }

    public function getreportbydates($empid,$fromdate,$enddate){
        $sql = "SELECT * FROM report WHERE date >= CAST('$fromdate' AS DATE) AND date <= CAST('$enddate' AS DATE) AND empid = '$empid' ORDER BY date ASC";
	   return $this->db->query($sql)->result();
    }

    public function  report($emploeeuserid){
        $sql = "SELECT MAX(date) as m FROM `report` WHERE empid = '$emploeeuserid' ";
        return $this->db->query($sql)->result();
    }

    public function getreportedit($emploeeuserid,$iddate) {
      $sql = "SELECT * FROM `report` WHERE empid = '$emploeeuserid' and date = '$iddate'";
      return $this->db->query($sql)->result();
    }

    public function updatedatareport($emploeeuserid,$stime,$breaks,$presntdata,$etime,$rounding,$total,$custome,$project,$cat,$work) {
// `empid`, `date`, `strattime`, `breaks`, `endtime`, `rounding`, `total`, `custome`, `project`, `cat`, `workdetails`, `day`
      $sql="UPDATE  `report` SET `empid`='$emploeeuserid',`date`='$presntdata',`strattime`='$stime',`breaks`='$breaks',`endtime`='$etime',`rounding`='$rounding',`total`='$total',`custome`='$custome',`project`='$project',`cat`='$cat',
      `workdetails`='$work' WHERE `empid`= '$emploeeuserid' and `date`= '$presntdata' ";
          $this->db->query($sql);
    }
    public function getdata() {
    $sql =   "SELECT * FROM `report` WHERE empid = 4 ";  
        return $this->db->query($sql)->result();
    }

}
