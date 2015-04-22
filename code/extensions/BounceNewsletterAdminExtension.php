<?php

/**
 * Created by IntelliJ IDEA.
 * @author: Sphere
 * Date: 22-4-2015
 * Time: 15:11
 * @package Newsletter/Bounce
 *
 */
class BounceNewsletterAdminExtension extends DataExtension
{

    private static $managed_models = array(
        'NewsletterEmailBounceRecord',
    );
}