<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This is used for the crud operations with database table
 * @package CodeIgniter
 * @author Harshana Jayarathna <harshanajayarathna@gmail.com>
 * @copyright (c) 2018, Harshana Jayarathna
 */
class Guest_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     *
     * @var integer 
     */
    public $id;

    /**
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var string 
     */
    public $user_email;

    /**
     *
     * @var string 
     */
    public $user_address;

    /**
     *
     * @var string 
     */
    public $user_message;

    /**
     *
     * @var string 
     */
    public $user_ip;

    /**
     *
     * @var string 
     */
    public $user_os;

    /**
     *
     * @var string 
     */
    public $user_browser;

    /**
     * 
     * @return integer
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * 
     * @return string
     */
    function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * 
     * @return string
     */
    function getUser_email()
    {
        return $this->user_email;
    }

    /**
     * 
     * @return string
     */
    function getUser_address()
    {
        return $this->user_address;
    }

    /**
     * 
     * @return string
     */
    function getUser_message()
    {
        return $this->user_message;
    }

    /**
     * 
     * @return string
     */
    function getUser_ip() 
    {
        return $this->user_ip;
    }

    /**
     * 
     * @return string
     */
    function getUser_os()
    {
        return $this->user_os;
    }

    /**
     * 
     * @return string
     */
    function getUser_browser()
    {
        return $this->user_browser;
    }

    /**
     * 
     * @param integer $id
     */
    function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @param string $user_name
     */
    function setUser_name($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * 
     * @param string $user_email
     */
    function setUser_email($user_email)
    {
        $this->user_email = $user_email;
    }

    /**
     * 
     * @param string $user_address
     */
    function setUser_address($user_address)
    {
        $this->user_address = $user_address;
    }

    /**
     * 
     * @param string $user_message
     */
    function setUser_message($user_message)
    {
        $this->user_message = $user_message;
    }

    /**
     * 
     * @param string $user_ip
     */
    function setUser_ip($user_ip)
    {
        $this->user_ip = $user_ip;
    }

    /**
     * 
     * @param string $user_os
     */
    function setUser_os($user_os)
    {
        $this->user_os = $user_os;
    }

    /**
     * 
     * @param string $user_browser
     */
    function setUser_browser($user_browser) 
    {
        $this->user_browser = $user_browser;
    }

    /**
     * This used to get record count in guestbook table
     * @return integer
     */
    function get_row_count()
    {
        return $this->db->count_all("guestbook");
    }

    /**
     * This returns records from guestbook table
     * @return array()
     */
    function get_guest_book($limit, $offset)
    {

        $this->db->select('*');
        $this->db->from('guestbook');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * This function used to save the guest book records in guestbook table
     * @param object $guest_model
     * @return boolean
     */
    function save_guest_book($guest_model)
    {
        //start the transaction
        $this->db->trans_begin();
        // data save in db
        $this->db->insert('guestbook', $guest_model);
        //make transaction complete
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
            return FALSE;
        }
        else
        {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            return TRUE;
        }
    }

}

