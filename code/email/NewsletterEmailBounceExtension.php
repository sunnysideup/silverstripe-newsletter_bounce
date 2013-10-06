<?php

class NewsletterEmailBounceExtension extends Extension {

	private static $header_name_member_id = 'X-silverstripe-member-id';
		public static function set_header_name_member_id($s) {self::$header_name_member_id = $s;}
		public static function get_header_name_member_id() {return self::$header_name_member_id;}

	private static $header_name_to_email = 'X-silverstripe-to-email';

	function updateNewsletterEmail($me){
		$this->owner->addCustomHeader(self::$header_name_member_id, "123");
		$this->owner->addCustomHeader(self::$header_name_to_email, $this->owner->To());
	}



}


