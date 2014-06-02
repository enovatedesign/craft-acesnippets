<?php
namespace Craft;

/**
 * Ace Snippets by Enovate Design
 *
 * @package   Ace Snippets
 * @author    Enovate Design
 * @copyright Copyright (c) 2014, Enovate Design
 * @link      http://www.enov8.co.uk
 * @license   GNU Public License (http://opensource.org/licenses/gpl-license.php)
 */

class AceSnippetsPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Ace Snippets');
    }

    public function getVersion()
    {
        return '0.1.0';
    }

    public function getDeveloper()
    {
        return 'Enovate Design';
    }

    public function getDeveloperUrl()
    {
        return 'http://www.enov8.co.uk';
    }

    public function hasCpSection()
    {
        return false;
    }
}