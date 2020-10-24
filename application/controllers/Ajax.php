<?php
class Ajax extends CI_Controller {

    public function processnames() {

        // make sure caller is an ajax request
        if ($this->input->is_ajax_request()){
        
            // validate your data!
            $fname = strip_tags(trim($this->input->post('fname')));
            $lname = strip_tags(trim($this->input->post('lname')));
    
            // use and/or process your data
            if(!empty($fname) && !empty($fname)){
                // output
                echo "okay";
            } else {
                // output
                echo "error";
            }
        } else {
            // silence is golden
            echo "";
        }
    }

    /*
     * This is a default method. If you don't use it, stub it to give an empty response
     */
    public function index() {
        // silence is golden
        echo "";
    }
}
