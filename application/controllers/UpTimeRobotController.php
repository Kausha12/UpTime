<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UpTimeRobotController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('upTimeRobotModel');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('email');
        $this->load->helper('string');
        // $this->load->helper('url');
        //$this->load->model('UptimeRobotModel');
        $this->data['password_reset'] = $this->upTimeRobotModel->getAllUsers();
    }

    public function loginPage()
    {
        $this->load->view('UserView/HomePageLogin');
    }

    public function registerView()
    {
        $this->load->view('UserView/registrationForm');
    }

    public function forgotPasswordView()
    {
        $this->load->view('UserView/ForgotPassword');
    }

    public function dashboardView()
    {
        $this->load->view('UserView/dashboard');
    }

    public function forgotPassword()
    {
        $this->session->set_flashdata('reset_msg', '');
        $this->session->set_flashdata('msg', '');
        $email = $this->input->post('email');
        $findemail = $this->upTimeRobotModel->forgotpassword($email);

        $token = "";
        $token = random_string('alnum', 10);

        if (empty($findemail)) {
            //echo "<pre>";print_r($findemail);
            $this->session->set_flashdata('reset_msg', 'Email Not Found');
            $this->load->view('UserView/ForgotPassword');
        }
        else {
            $find = $this->upTimeRobotModel->findmail($email);
            $newToken['token'] = $token;

            if (empty($find)) {
                $newToken['email'] = $email;
                $this->db->insert('password_reset', $newToken);
            }
            else {
                $this->db->where('email', $email);
                $this->db->update('password_reset', $newToken);
            }

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'uptimerobot956@gmail.com', // change it to yours
                'smtp_pass' => 'Uptime@1234', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

            $this->email->initialize($config);
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('uptimerobot956@gmail.com'); // change it to yours

            $message = "http://localhost/UpTime/UpTimeRobotController/resetView/$token";

            $this->email->to($email); // change it to yours
            $this->email->subject('Password Reset Link');
            $this->email->message($message);

            if (!$this->email->send()) {
                $this->session->set_flashdata('reset_msg', 'Failed to send Reset Password link, please try again!');
                redirect('UpTimeRobotController/loginPage');
            }
            else {
                $this->session->set_flashdata('msg', 'Reset Password Link sent to your email!');
                redirect('UpTimeRobotController/loginPage');
            }
        }
    }


    public function resetView($token)
    {
        $this->load->view('UserView/ResetPasswordView', array("token" => $token));
    }

    public function Reset_Password()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[30]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('UserView/ResetPasswordView');
        }
        else {
            //$old_pass=$this->input->post('old_pass');
            $token = $this->input->post('token');
            $password = md5($this->input->post('password'));
            $findemail = $this->upTimeRobotModel->tokenmail($token);

            //$token=$this->input->post('token');
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'uptimerobot956@gmail.com', // change it to yours
                'smtp_pass' => 'Uptime@1234', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

            $this->email->initialize($config);
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('uptimerobot956@gmail.com'); // change it to yours

            $message = "http://localhost/UpTime/UpTimeRobotController/ResetEmailMessage";

            $this->email->to($findemail); // change it to yours
            $this->email->subject('Password Reset Done');
            $this->email->message($message);

            $this->upTimeRobotModel->changePassword($findemail, $password);


            if ($this->upTimeRobotModel->changePassword($token, $password)) {
                $this->session->set_flashdata("success_msg", "Your new password was set. You can login");
                redirect('UpTimeRobotController/loginPage');
            }
            else {
                $this->session->set_flashdata("error_msg", "We have failed updating your password");
                redirect('UpTimeRobotController/ResetPasswordView' . $token);
            }
            $this->load->view('UserView/HomePageLogin');
        }
    }

}