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

class AceSnippetsService extends BaseApplicationComponent
{

    public function renderEditor($content, $mode = null, $theme = null, $readOnly = false)
    {
        if (!$theme)
        {
            $theme = $settings->defaultTheme;
        }

        $editor             = new AceSnippets_AceEditorModel();
        $editor->name       = 'acesnippet-'.md5($content.$mode.$theme.$readOnly);
        $editor->content    = $content;
        $editor->mode       = $mode;
        $editor->theme      = $theme;
        $editor->readOnly   = $readOnly;

        return craft()->aceSnippets_templates->render('_editor', array(
            'editor' => $editor
        ));
    }

}