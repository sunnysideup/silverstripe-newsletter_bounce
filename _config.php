<?php

//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings
//===================---------------- START newsletter_bounce MODULE ----------------===================

//MUST SET, preferably in your own _config.php. This is deemed to move to a yml file.
//NewsletterBounceTask::setEmail("test@test.com"); // the username for your bounce-address
//NewsletterBounceTask::setPassword('testPassword'); // The password for your bounce-address
//// The novalidate-cert is needed to bypass unofficial certificates!
//NewsletterBounceTask::setServer("{mail.test.com:143/novalidate-cert}"); // must be a valid imap address, note
//NewsletterBounceTask::setErrorName("Content-Type"); // must be a valid imap address
//NewsletterBounceTask::setErrorValue("message/delivery-status"); // must be a valid imap address

//MAY SET
//NewsletterEmailBounceExtension::set_email("X-email");
//NewsletterEmailBounceExtension::set_header_name_member_id("X-memberid");
//NewsletterEmailBounceExtension::setBlacklistLimit(5);
// The diagnostic code defaults to 'Diagnostic-Code' to find the error.
//NewsletterEmailBounceExtension::setDiagnosticCode('Diagnostic-Code');
//===================---------------- END newsletter_bounce MODULE ----------------===================
