<?php

/**
 * Class NewsletterEmailBounceExtension
 * @package Newsletter/Bounce
 */
class NewsletterEmailBounceExtension extends Extension
{

    /**
     * @var string
     */
    private static $header_name_member_id = 'X-silverstripe-member-id';


    /**
     * @var string
     */
    private static $header_name_to_email = 'X-silverstripe-to-email';

    /**
     * @param $me
     */
    function updateNewsletterEmail($me)
    {
        $this->owner->addCustomHeader(Config::inst()->get("NewsletterEmailBounceExtension", "header_name_member_id"), "123");
        $this->owner->addCustomHeader(Config::inst()->get("NewsletterEmailBounceExtension", "header_name_to_email"), $this->owner->To());
        //From: "From Name" <from_name@ourdomain.com>
        $this->owner->addCustomHeader("Reply-To", Config::inst()->get("NewsletterBounceTask", "email"));
        $this->owner->addCustomHeader("Errors-To", Config::inst()->get("NewsletterBounceTask", "email"));
        $this->owner->addCustomHeader("Return-Path", Config::inst()->get("NewsletterBounceTask", "email"));
    }


}


