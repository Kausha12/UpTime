<?php
class registerController extends CI_Controller
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

        $this->data['users'] = $this->upTimeRobotModel->getallusers();
    }

    public function loginView()
    {
        $this->session->set_flashdata('notfound', '');
        $this->load->view('UserView/HomePageLogin', $this->data);
    }
    public function registerview()
    {
        $this->session->set_flashdata('exist', '');
        $this->load->view('UserView/register');
    }

    public function insertRegister()
    {
        if ($this->input->post('Register')) {
            $this->form_validation->set_rules('full_name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'e-mail', 'valid_email|required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[30]');
            $this->form_validation->set_rules('confirmPassword', 'Confirm password', 'required|matches[password]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('UserView/register');
            }
            else {
                //echo "Hello Siddhi";exit;
                //get user inputs


                $user = array(
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                );
                $check = $this->upTimeRobotModel->checkuser($user);
                if (empty($check)) {
                    $this->upTimeRobotModel->insertRegister($user);
                    $this->send_mail();

                    redirect('registerController/loginView', $this->user);
                }
                else {
                    $this->session->set_flashdata('userexist', 'Email already exist!');
                    $this->load->view('UserView/register');
                }
            //$this->send_mail();
            }
        }

    //redirect('LoginController/checkUser',$data);
    //$this->load->view('login',$data);     	
    }


    public function send_mail()
    {
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
        $messagedata = array(
            'full_name' => $this->input->post('full_name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->email->to($messagedata['email']); // change it to yours
        $this->email->subject('Email Sent');
        $body = $this->load->view('UserView/message.php', $messagedata, TRUE);
        $this->email->message($body);
        if ($this->email->send()) {
            //  $this->theme->load_view('UserView/Registration');
            //redirect('registerPage');
            echo '<p style="color:green;">Email sent.</p>';
        }
        else {
            show_error($this->email->print_debugger());
        }
    }

    public function userAuthentication()
    {

        if ($this->input->post('Login')) 
        {
            $this->form_validation->set_rules('userEmail', 'e-mail', 'valid_email|required');
            $this->form_validation->set_rules('userPassword', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) 
            {
                $this->load->view('UserView/HomePageLogin');
            }
            else 
            {
                $data = array(
                    'email' => $this->input->post('userEmail'),
                    'password' => md5($this->input->post('userPassword'))
                );

                $result = $this->upTimeRobotModel->userValid($data);
                if ($result) 
                {
                    if($result['is_admin'] == 1)
                    {
                        $register_data = array(
                            'user_id' => $result['id'],
                            'email' => $result['email'],
                            'password' => $result['password'],
                            'status' => 'logged in'
                        );
                        $this->session->set_userdata($register_data);
                        $this->theme->load_view('AdminView/mainPage');
                    }
                    else
                    {
                        $register_data = array(
                            'user_id' => $result['id'],
                            'email' => $result['email'],
                            'password' => $result['password'],
                            'status' => 'logged in'
                        );
                        $this->session->set_userdata($register_data);
                        $this->load->view('UserView/dashboard');
                    }
                }
                else 
                {
                    $this->session->set_flashdata('notfound', 'Invalid Login Credential');
                    $this->load->view('UserView/HomePageLogin', $this->data);
                }
            }
        }
    }

    public function valid_password($password = '')
    {
        $password = trim($password);

        $lower = '/[a-z]/';
        $upper = '/[A-Z]/';
        $numb = '/[0-9]/';
        $special = '/[!@#$%&()\-_=+{};:,<.>~]/';

        if (empty($password)) {
            $this->form_validation->set_message('valid_password', 'The {field} field is required.');

            return FALSE;
        }

        if (preg_match_all($lower, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'Please use at least one Lowercase letter.');

            return FALSE;
        }

        if (preg_match_all($upper, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'Please use at least one Uppercase letter.');

            return FALSE;
        }

        if (preg_match_all($numb, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'Please use at least one Number.');

            return FALSE;
        }

        if (preg_match_all($special, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'Please use at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>ยง~'));

            return FALSE;
        }

        if (strlen($password) < 12) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least 12 characters in length.');

            return FALSE;
        }

        return TRUE;
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect('registercontroller/loginView');
    }


}