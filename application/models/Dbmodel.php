<?php


class Dbmodel  extends CI_Model{
    

     public function  registerdata($fname,$sname,$pass,$spass,$mail,$name,$code,$phone,$role)
     {
             $sql="insert into register(`fname`, `sname`, `phonenumber`, `mname`, `mcode`, `role`, `pass`, `cpass`, `mail`)VALUES ('$fname','$sname','$phone','$name','$code','$role','$pass','$spass','$mail')";
                $this->db->query($sql);
 
    }
    public function admincode(){
     $query=$this->db->get('admin');
     return $query->result();
    }
    public function  managercode($name,$code)
            
    {
                $this->db->where('name',$name);
                $this->db->where('code',$code);
                $query=$this->db->get('admin');
                return $query->result();
                
    }
    public function emploee(){
     $query=$this->db->get('register');
     return $query->result();
    }
    function deleteemp($id){
     $this->db->where('id', $id);
     $this->db->delete('register');
     }
     public function  Employeecode($mail,$pass)
            
    {
                $this->db->where('mail',$mail);
                $this->db->where('pass',$pass);
                $query=$this->db->get('register');
                return $query->result();
                
    }


    public function insertdatareport($date,$stime,$break,$etime,$rounding,$total,$custome,$project,$cat,$work){                                          
     $sql="insert into report(`empid`, `date`, `strattime`, `break`, `endtime`, `rounding`, `total`, `custome`, `project`, `cat`, `workdetails`)VALUES ('3','$date','$stime','$break','$etime','$rounding','$total','$custome','$project','$cat','$work')";
     $this->db->query($sql);  
    }

}


    