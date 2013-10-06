<?php

class NewsletterBounceTask extends BuildTask {

	private static $email = '';
		public static function set_email($s) {self::$email = $s;}
		public static function get_email() {return self::$email;}

	private static $password = '';
		public static function set_password($s) {self::$email = $s;}
		public static function get_password() {return self::$email;}

	protected $title = 'Mark bounced newsletter emails';

	protected $description = "Opens up a g-mail inbox and looks for .";


	function run($request) {
		$server = '{imap.gmail.com:993/imap/ssl}';
		$mailbox = imap_open($server, self::$email, self::$password);
		if($mailbox) {
			$emails = imap_search($mailbox, 'UNFLAGGED', SE_UID);
			if($emails) {
				foreach($emails as $emailID) {
					$bounce = false;
					$to = "";
					$headers = imap_body($mailbox, $emailID, FT_UID);
					$headers = explode("\n", $headers);
					foreach($headers as $header) {
						$header = explode(':', $header);
						if(count($header) == 2) {
							list($name, $value) = $header;
								if($name == "bounce") {
									$bounce = true;
								}
								if($name == "To") {
									$to = Convert::raw2sql($to);
								}
							}
						}
					}
					if($bounce && $to) {
						$member = DataObject::get_one("Member", "Email = '$to'");
						if($member) {
							$member->BlacklistedEmail = true;
							$member->write();

							$SQL_bounceTime = Convert::raw2sql("$date $time");

							$duplicateBounce = DataObject::get_one("Email_BounceRecord",
								"\"BounceEmail\" = '$to'");

							if(!$duplicateBounce) {
								$record = new Email_BounceRecord();
								$record->BounceEmail = $to;
								$record->BounceMessage = $error;
								$record->MemberID = $member->ID;
								$record->write();
							}
						}
					}
					if(1 == 1) {
						//imap_setflag_full($mailbox, $emailID, '\Seen', ST_UID);
					}
					if(1 == 1) {
						//imap_mail_move($mailbox, $emailID, '[Gmail]/Bin', CP_UID);
					}
					else {
						//imap_setflag_full($mailbox, $emailID, '\Flagged', ST_UID);
					}
				}
			}
			imap_close($mailbox);
		}
		else {
			user_error("Can not find mailbox", E_USER_NOTICE)
		}
	}



}

