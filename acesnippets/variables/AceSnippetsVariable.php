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

class AceSnippetsVariable
{
    public function field($field, $theme = null, $readOnly = true)
    {
        return craft()->aceSnippets->renderEditor($field['content'], $field['mode'], $theme, $readOnly);
    }

    public function string($content, $mode = null, $theme = null, $readOnly = true)
    {
        return craft()->aceSnippets->renderEditor($content, $mode, $theme, $readOnly);
    }
}