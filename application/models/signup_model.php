<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_Model extends CI_Model
{
    public function index($fname, $lname, $emailid, $birthday, $password)
    {
        $data = array(
            'FirstName' => $fname,
            'LastName' => $lname,
            'Email' => $emailid,
            'Birthday' => $birthday,
            'Password' => $password
        );
        $query = $this->db->insert('users', $data);
        if ($query) {
            $this->session->set_flashdata('success', 'Registration successfull, Now you can login.');
            redirect('signin');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
            redirect('signup');
        }
    }
}
