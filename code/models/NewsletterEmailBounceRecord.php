<?php

/**
 * Created by IntelliJ IDEA.
 * @author: Sphere
 * Date: 22-4-2015
 * Time: 14:58
 * @package Newsletter/Bounce
 *
 * @property String BounceEmail
 * @property String BounceMessage
 * @property SS_Datetime LastBounceTime
 * @property Integer RecipientID
 * @method Recipient Recipient
 */
class NewsletterEmailBounceRecord extends DataObject
{

    private static $db = array(
        'BounceEmail'    => 'Varchar(255)',
        'BounceMessage'  => 'Text',
        'LastBounceTime' => 'Datetime'
    );

    private static $has_one = array(
        'Recipient' => 'Recipient',
    );
}