<?php

class upTimeRobotModel extends CI_Model
{
	public function checkuser($user)
	{
		$query=$this->db->get_where('users', array('email'=>$user['email']));
		return $query->result_array();

	}
 
	public function insertRegister($user)
	{
		//print_r($user);exit;
		$this->db->insert('users', $user);
		return $this->db->insert_id(); //insert_id() will only return an ID of an insert().
	}

    public function userValid($user)
	{
		
		$this->db->select('*');
		$condition=array('email'=>$user['email'],'password'=>$user['password']);
		$this->db->where($condition);
		$query=$this->db->get('users');
		$result=$query->row_array();
		return $result;
	}

	public function saveMonitorType($value)
	{
		$this->db->insert('monitor_type',$value);
		return true;
	}
	
	public function getAllUsers(){
		$query = $this->db->get('users');
		return $query->result(); 
	}

	public function insert($user){
		$this->db->insert('password_reset', $user);
		return $this->db->insert_id(); //insert_id() will only return an ID of an insert().
	}

	public function Forgotpassword($email)
	{

		$this->db->select('email');
		$this->db->where(['email' => $email]);
		$query=$this->db->get('users');
		$result=$query->row_array();
		return $result;
		  
	}

	public function tokenmail($token)
	{
		$this->db->select('email');
		$this->db->where('token',$token);
		$this->db->from('password_reset');
		$query = $this->db->get();
		return $query->row_array();
	}
	public function findmail($email)
	{
		$this->db->where(['email' => $email]);
		$query=$this->db->get('password_reset');
		return $query->result_array();
	}

	function changePassword($email,$password)
	{
		$this->db->set('password',$password); 
		$this->db->where(array('email'=> $email['email']));
		$this->db->update('users');
		return true;
	}
	public function insertMoniter($data)
	{
		$this->db->insert('monitors',$data);
		
		return true;
	}

}