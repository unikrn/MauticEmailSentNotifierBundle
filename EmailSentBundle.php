<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\EmailSentBundle;

use Mautic\PluginBundle\Bundle\PluginBundleBase;
use MauticPlugin\EmailSentBundle\Helper\EmailSentHelper;

class EmailSentBundle extends PluginBundleBase
{
    // Nothing more required

    public function boot()
    {
        parent::boot();

        EmailSentHelper::init($this->container->get('mautic.helper.integration'));
    }

}
