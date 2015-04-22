<?php

/**
 * Created by IntelliJ IDEA.
 * @author: Sphere
 * Date: 22-4-2015
 * Time: 15:11
 * @package Newsletter/Bounce
 *
 * It seems, extending Admins this way doesn't work. So this needs some help.
 *
 */
class BounceNewsletterAdminExtension extends DataExtension
{

    private static $managed_models = array(
        'NewsletterEmailBounceRecord',
    );
}