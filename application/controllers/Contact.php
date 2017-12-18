<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './application/third_party/PHPMailer-master/src/Exception.php';
require './application/third_party/PHPMailer-master/src/PHPMailer.php';
require './application/third_party/PHPMailer-master/src/SMTP.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author Nguyen Ruy
 */
class Contact extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'cookie'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('admin/contact_model');
    }

    public function index() {

        $this->_loadFrontendHeader('contact');
        $this->load->view('frontend/contact/index');
        $this->_loadFrontendFooter();
    }

    public function testemail() {
        try {
            $mail = new PHPMailer();


            $mail->SMTPDebug = 3;
            $mail->IsSMTP();
            $mail->Mailer = 'smtp';
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->Username = 'thuynn1709@gmail.com';
            $mail->Password = 'Thuynn123!@#';

            $mail->IsHTML(true); // if you are going to send HTML formatted emails
            $mail->SingleTo = true;
            $mail->From = "dienchuot@yahoo.com";
            $mail->FromName = "Mailer";
            $mail->AddAddress("thuynn1709@gmail.com", "Ngoc THuy");   //mail to to
            $mail->Subject = "PHPMailer Test Subject via mail(), basic";
            $mail->AltBody = "To view the message, please use an HTML compatible email vie  wer!";
            $mail->MsgHTML("Your html message");

            if (!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "Message sent!";
            }
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function register_contact() {
        if ($_POST) {

            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[1]');

            #Kiểm tra điều kiện validate
            if ($this->form_validation->run() == TRUE) {

                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $name = $this->input->post('name');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');

                $insert_array = array(
                    'email' => $email,
                    'phone' => $phone,
                    'name' => $name,
                    'subject' => $subject,
                    'message' => $message,
                    'status' => 0,
                    'created' => now()
                );

                try {
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $this->email->initialize($config);
                    $this->email->from($email, $name);
                    $this->email->to('thuynn1709@gmail.com');
                    $this->email->subject($subject);
                    $this->email->message($message);
                    //Send mail 
                    $this->email->send();

                    $this->contact_model->insert($insert_array);
                    $array = array('msg' => 'success');
                    echo json_encode($array);
                    die;
                } catch (Exception $e) {
                    $array = array('msg' => 'error');
                    echo json_encode($array);
                    die;
                }
            } else {
                $array = array('msg' => 'error');
                echo json_encode($array);
                die;
            }
        }
        $array = array('msg' => 'error');
        echo json_encode($array);
        die;
    }

}
