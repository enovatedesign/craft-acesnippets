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

class AceSnippets_AceSnippetFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Ace Snippet');
    }

    public function defineContentAttribute()
    {
        return array(AttributeType::Mixed, 'column' => ColumnType::Text);
    }

    public function getInputHtml($name, $value)
    {
        $id = craft()->templates->formatInputId($name);
        $namespacedId = craft()->templates->namespaceInputId($id);

        $settings = $this->getSettings();

        if ($this->isFresh())
        {
            $value = array(
                'mode' => $settings->defaultMode,
                'content' => "\r\n\r\n\r\n", // add some blank lines in so the editor looks better
            );
        }

        $editor = new AceSnippets_AceEditorModel();
        $editor->name       = $namespacedId;
        $editor->mode       = $value['mode'];
        $editor->content    = $value['content'];
        $editor->theme      = $settings->theme;

        return craft()->templates->render('acesnippets/_input', array(
            'name' => $name,
            'settings' => $settings,
            'editor' => $editor
        ));
    }

    public function getSettingsHtml()
    {
        $aceEditor = new AceSnippets_AceEditorModel();

        return craft()->templates->render('acesnippets/_settings', array(
            'settings'  => $this->getSettings(),
            'allModes'  => $aceEditor->getModes(),
            'allThemes' => $aceEditor->getThemes(),
        ));
    }

    public function defineSettings()
    {
        return array(
            'availableModes'    => array(AttributeType::Mixed,  'default' => array('css', 'html', 'javascript', 'php', 'twig', 'json', 'scss')),
            'defaultMode'       => array(AttributeType::String, 'default' => 'html'),
            'theme'             => array(AttributeType::String, 'default' => 'chrome'),
        );
    }
}