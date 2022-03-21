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
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'monitor_type_id'=>$this->input->post('newMonitorType'),
            'friendlyname' => $this->input->post('newHTTPMonitorFriendlyName'),
            'url' => $this->input->post('newHTTPMonitorURL')
        );
        echo "<pre>";
        print_r($data);
        exit;
        $result=$this->upTimeRobotModel->insertMoniter($data);
    }

    public function saveMonitorType()
    {
        
        redirect('dashboardView');
        
        if($this->input->post('editMonitorType'))
        {

            $value['monitor_type'] = $this->input->post('monitor_type');
           
            $response = $this->upTimeRobotModel->saveMonitorType($value);

            if($response==true)
            {

                echo "Rules Define Successfully..!";

            }

            else
            {

                echo "Error Accured in Define the Rules..!";

            }

        }
    }

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