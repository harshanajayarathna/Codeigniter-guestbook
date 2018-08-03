<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * This class used for the guest book
 * @package CodeIgniter
 * @author Harshana Jayarathna <harshanajayarathna@gmail.com>
 * @copyright (c) 2018, Harshana Jayarathna 
 */
class Guest extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        
        // load libraries, helpers, models
        $this->load->library(array('form_validation', 'pagination', 'user_agent'));
        $this->load->model('Guest_model');
        $this->load->helper('string'); 
        //$this->config->load('custom_config');
        //$this->CI =& get_instance();
        $this->load->config('google_recaptcha');
        
        $this->load->library('google_recaptcha');
    }

    /**
     * This is index function, used to get records and load guest book page
     * @param integer $offset
     */
    public function index($offset=0) 
    {
        // create guest book object
        $guestbook_model = new Guest_model();
        
        // get record count in guestbook table
        $num_rows = $guestbook_model->get_row_count();
        
        // configure pagination library
        $config['base_url'] = base_url().'guest/index/';
        $config['total_rows'] = $num_rows;
        $config['per_page'] = 5;
        $config['num_links'] = $num_rows;
        
        $config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close'] 	= '</ul></nav></div>';
        $config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] 	= '</span></li>';
        $config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] 	= '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] 	= '</span></li>';
        $config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] 	= '</span></li>';

        // initialize pagination
        $this->pagination->initialize($config); 
        
        // create pagination links
        $data['Links'] = $this->pagination->create_links();

        // get records according to per page and pagination
        $data['guestbooks'] = $guestbook_model->get_guest_book($config['per_page'],$offset);
        
        $this->load->view('guest', $data);
    }
    
    /**
     * This is use to save the guest book record
     */
    public function save()
    {        
        // Validate user inputs         
        $this->form_validation->set_rules('username', 'User Name', 'trim|required');
        $this->form_validation->set_rules('useremail', 'User Email ', 'trim|required|valid_email');
        $this->form_validation->set_rules('useraddress', 'User Address', 'trim|required');
        $this->form_validation->set_rules('usermessage', 'User Message', 'trim|required');                
        $this->form_validation->set_rules('recaptcha','recaptcha','trim|required|callback_validate_recaptcha');
             
        if ($this->form_validation->run() == FALSE) 
        {
            $errors = validation_errors();
            echo json_encode(['error' => $errors]);
        } else 
        {
            // create guest book object
            $guestbook_model = new Guest_model();
            
            $browser = '';
            $platform = '';
            $user_ip = '';
            // if agent is browser
            if ($this->agent->is_browser())
            {
                // get user's browser name and version
                $browser = $this->agent->browser().' '.$this->agent->version();
            }
            
            // get user's platform (operating system)
            $platform = $this->agent->platform();
            
            // get user's IP address
            $user_ip = $this->input->ip_address();
                        
            $guestbook_model->setUser_name(trim($this->input->post('username', TRUE)));
            $guestbook_model->setUser_email(trim($this->input->post('useremail', TRUE)));
            $guestbook_model->setUser_address(trim($this->input->post('useraddress', TRUE)));
            $guestbook_model->setUser_message(trim($this->input->post('usermessage', TRUE)));
            $guestbook_model->setUser_ip($user_ip);
            $guestbook_model->setUser_os($platform);
            $guestbook_model->setUser_browser($browser);
           
            // save data database
            $status = $guestbook_model->save_guest_book($guestbook_model);

            //...save values to database 
            if ($status == TRUE) 
            {
                echo json_encode(['success' => 'Record added successfully.']);
            } 
            else
            {
                echo json_encode(['error' => 'Record not added successfully.']);
            }
        }
    }
    
    
    function validate_recaptcha($str)        
    {        
        if(empty(trim($this->input->post('recaptcha', TRUE))))
        {
          $this->form_validation->set_message('validate_recaptcha', 'The {field} field is required.');
          return FALSE;
        }
        else
        {                                    
            $captchainput = trim($this->input->post('recaptcha', TRUE));
            
            // create Google recaptcha object
            $google_recaptcha = new Google_recaptcha();
            
            $json_response = $google_recaptcha->validate_google_recaptcha($captchainput );
            
            if(!$json_response->success)
            {
                $this->form_validation->set_message('validate_recaptcha', 'The {field} field is telling me that you are a robot. Shall we give it another try?');
                return FALSE;                
            }
            else
            {
               return TRUE; 
            }          
        }        

    }

}
