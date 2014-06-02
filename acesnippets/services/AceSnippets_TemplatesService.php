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

class AceSnippets_TemplatesService extends BaseApplicationComponent
{

    public function render($name, $variables=array())
    {
        $originalTemplatesPath = craft()->path->getTemplatesPath();
        craft()->path->setTemplatesPath( craft()->path->getPluginsPath() . '/acesnippets/templates/' );
        $template = craft()->templates->render($name, $variables);
        craft()->path->setTemplatesPath($originalTemplatesPath);
        return TemplateHelper::getRaw($template);
    }

}