<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This library class is used to get the Google Recaptcha response 
 * @package CodeIgniter
 * @author Harshana Jayarathna <harshanajayarathna@gmail.com>
 * @copyright (c) 2018, Harshana Jayarathna
 */
class Google_recaptcha {

    /**
     * This is the Google Recaptcha server side secret key
     * @var string 
     */
    public $secretkey;

    /**
     * This is the server IP
     * @var string
     */
    public $serverip;

    /**
     * This is the Google Recaptcha site verify url
     * @var string
     */
    public $siteverifyurl;

    /**
     * constructor
     * @param string $config
     */
    public function __construct()
    {        
        $this->secretkey = '6Ld-3GYUAAAAAKx3WI55WJ_8RChY2Wk7nowD7U_S';
        $this->serverip = $_SERVER['REMOTE_ADDR'];
        $this->siteverifyurl = 'https://www.google.com/recaptcha/api/siteverify';
    }
    
    
    /**
     * This function is used to submit reCAPTCHA server and get its response
     * @param string $captchainput
     * @return json array()
     */
    public function validate_google_recaptcha($captchainput)
    {
        // create a new cURL resource
        $ch = curl_init();
        
        // set URL and other appropriate options
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->siteverifyurl,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'secret' => $this->secretkey,
                'response' => $captchainput,
                'remoteip' => $this->serverip
            ],
            CURLOPT_RETURNTRANSFER => true
        ]);

        // grab URL and pass it to the browser
        $output = curl_exec($ch);
        
        // close cURL resource, and free up system resources
        curl_close($ch);
        
        // decode the response
        $json_response = json_decode($output);

        // return the decoded response
        return $json_response;
        
    }

}
