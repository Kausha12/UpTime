<?php

class addMonitorController extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('upTimeRobotModel');
    }

    public function addMonitor()
    {
        $type=$this->input->post('newMonitorType');
        $user = $this->session->userdata('user_id');
        if($type == 1)
        {
            $data = array(
                'user_id' => $user,
                'monitor_type_id'=>$type,
                'friendlyname' => $this->input->post('newHTTPMonitorFriendlyName'),
                'url' => $this->input->post('newHTTPMonitorURL'),
                'interval'=>$this->input->post('newHTTPMonitorInterval'),
                'timeout'=>$this->input->post('newHTTPMonitorTimeout') 
            );  
        }

        elseif($type == 2)
        {
            $data = array(
                'user_id' => $user,
                'monitor_type_id'=>$type,
                'friendlyname' => $this->input->post('newHTTPMonitorFriendlyName'),
                'IP(or Host)' => $this->input->post('newKeywordMonitorURL'),
                'Keyword' => $this->input->post('newKeywordMonitorKeywordValue'),
                'case-insensitive' => $this->input->post('newKeywordCaseType'),
                'Alert When' => $this->input->post('newKeywordMonitorKeywordTypeL'),
                'interval'=>$this->input->post('newKeywordMonitorInterval'),
                'timeout'=>$this->input->post('newKeywordMonitorTimeout') 
            );  
        }
        elseif($type == 3)
        {
            $data = array(
                'user_id' => $user,
                'monitor_type_id'=>$type,
                'friendlyname' => $this->input->post('newPingMonitorFriendlyName'),
                'IP(or Host)' => $this->input->post('newPingMonitorURL'),
                'interval'=>$this->input->post('newPingMonitorInterval')
            );  
        }
        elseif($type == 4)
        {
            $data = array(
                'user_id' => $user,
                'monitor_type_id'=>$type,
                'friendlyname' => $this->input->post('newPortMonitorFriendlyName'),
                'url' => $this->input->post('newPortMonitorURL'),
                'port'=>$this->input->post('newPortMonitorPort'),
                'interval'=>$this->input->post('newPortMonitorTimeout'),
                'timeout'=>$this->input->post('newPortMonitorTimeout') 

            );  
        }
        else{
            echo "error";
        }
        
      
        // print_r($data);
        // exit;
        $result=$this->upTimeRobotModel->insertMoniter($data);
        if($result)
        {
            echo "inserted";
        }
        else{
            echo "error";
        }
        

    }

    // public function saveMonitorType()
    // {
        
    //     redirect('dashboardView');
        
    //     if($this->input->post('editMonitorType'))
    //     {

    //         $value['monitor_type'] = $this->input->post('monitor_type');
           
    //         $response = $this->upTimeRobotModel->saveMonitorType($value);

    //         if($response==true)
    //         {

    //             echo "Rules Define Successfully..!";

    //         }

    //         else
    //         {

    //             echo "Error Accured in Define the Rules..!";

    //         }

    //     }
    // }

    // public function addMonitor()
    // {
    //     if($this->input->post('createMonitorType'))
    //     {

    //         $value['friendlyname'] = $this->input->post('friendlyname');
    //         $value['url'] = $this->input->post('url');
    //         $value['interval'] = $this->input->post('interval');
    //         $value['timeout'] = $this->input->post('timeout');
    //         $value['SSL_error'] = $this->input->post('SSL_error');
    //         $value['SSL_expiry'] = $this->input->post('SSL_expiry');
           
    //         $response = $this->upTimeRobotModel->saveMonitorType($value);

    //         if($response==true)
    //         {

    //             echo "Rules Define Successfully..!";

    //         }

    //         else
    //         {

    //             echo "Error Accured in Define the Rules..!";

    //         }

    //     }
    // }
}