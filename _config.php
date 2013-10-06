<?php




Object::add_extension('NewsletterEmail', 'NewsletterEmailBounceExtension');

//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings
//===================---------------- START newsletter_bounce MODULE ----------------===================

//MUST SET
//NewsletterBounceTask::set_email("test@gmail.com");
//NewsletterBounceTask::set_password("pissword");

//MAY SET
//NewsletterBounceTask::set_email("X-bla");
//NewsletterEmailBounceExtension::set_header_name_member_id("X-foo");
//===================---------------- END newsletter_bounce MODULE ----------------===================
