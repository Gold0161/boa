<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function index()
    {
        
    }

	//
	// ─── CAPTCHA ────────────────────────────────────────────────────────────────────
	//

		
	public function new_captcha()
	{
		$this->session->set_userdata('captcha_status', '');
		echo new_captcha_fn();
	}


	public function check_captcha()
	{
		$captcha = $this->input->post('captcha');
		$stored_captcha = $this->session->userdata('captcha');
		// $submitted_captcha = $this->input->post('captcha');
		// $this->input->post();
		// echo "stored_captcha: $stored_captcha\n";
		// echo "submitted_captcha: $captcha\n";

		if ($this->session->has_userdata('captcha')) {
			if ( strtolower($captcha) === strtolower($stored_captcha)) {
				$this->session->set_userdata('captcha_status', 'passed');
				exit('true');
			}
		}
		exit( 'false');
	}


}

/* End of file Api.php */
