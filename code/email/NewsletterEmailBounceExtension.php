<?php

class NewsletterEmailBounceExtension extends Extension {

	private static $header_name_member_id = 'X-silverstripe-member-id';


	private static $header_name_to_email = 'X-silverstripe-to-email';

	function updateNewsletterEmail($me){
		$this->owner->addCustomHeader($this->config()->get("header_name_member_id"), "123");
		$this->owner->addCustomHeader($this->config()->get("header_name_to_email"), $this->owner->To());
		//From: "From Name" <from_name@ourdomain.com>
		$this->owner->addCustomHeader("Reply-To", Config::inst()->get("NewsletterBounceTask", "email"));
		$this->owner->addCustomHeader("Errors-To", Config::inst()->get("NewsletterBounceTask", "email"));
		$this->owner->addCustomHeader("Return-Path", Config::inst()->get("NewsletterBounceTask", "email"));
	}



}


