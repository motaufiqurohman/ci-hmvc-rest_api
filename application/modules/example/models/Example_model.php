<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example_model extends CI_Model
{
    public function getMessage()
    {
        return 'Example model';
    }
}