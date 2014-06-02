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

class AceSnippets_AceEditorModel extends BaseModel
{
    private $_modes;
    private $_themes;

    /**
     * Returns an array of all the supported modes.
     *
     * @return array
     */
    public function getModes()
    {
        if (!isset($this->_modes))
        {
            $this->_modes = array('abap' => 'ABAP', 'actionscript' => 'ActionScript', 'ada' =>'ADA',
                'apache_conf' => 'Apache Conf', 'asciidoc' => 'AsciiDoc', 'assembly_x86' => 'Assembly x86',
                'autohotkey' => 'AutoHotKey', 'batchfile' => 'BatchFile', 'c9search', 'C9Search',
                'c_cpp' => 'C/C++', 'cirru' => 'Cirru', 'clojure' => 'Clojure', 'cobol' => 'Cobol',
                'coffee' => 'CoffeeScript', 'coldfusion' => 'ColdFusion', 'csharp' => 'C#', 'css' =>'CSS',
                'curly' => 'Curly', 'd' => 'D', 'dart' => 'Dart', 'diff' => 'Diff', 'dot' => 'Dot',
                'erlang' => 'Erlang', 'ejs' => 'EJS', 'forth' => 'Forth', 'ftl' => 'FreeMarker',
                'gherkin' => 'Gherkin', 'glsl' => 'Glsl', 'golang' => 'Go', 'groovy' => 'Groovy',
                'haml' => 'HAML', 'handlebars' => 'Handlebars', 'haskell' => 'Haskell', 'haxe' => 'haXe',
                'html' => 'HTML', 'html_ruby' => 'HTML (Ruby)', 'ini' => 'INI', 'jack' => 'Jack',
                'jade' => 'Jade', 'java' => 'Java', 'javascript' => 'JavaScript', 'json' => 'JSON',
                'jsoniq' => 'JSONiq', 'jsp' => 'JSP', 'jsx' => 'JSX', 'julia' => 'Julia',
                'latex' => 'LaTeX', 'less' => 'LESS', 'liquid' => 'Liquid', 'lisp' => 'Lisp',
                'livescript' => 'LiveScript', 'logiql' => 'LogiQL', 'lsl' => 'LSL', 'lua' => 'Lua',
                'luapage' => 'LuaPage', 'lucene' => 'Lucene', 'makefile' => 'Makefile',
                'matlab' => 'MATLAB', 'markdown' => 'Markdown', 'mel' => 'MEL', 'mysql' => 'MySQL',
                'mushcode' => 'MUSHCode', 'nix' => 'Nix', 'objectivec' => 'Objective-C', 'ocaml' => 'OCaml',
                'pascal' =>'Pascal', 'perl' =>'Perl', 'pgsql' => 'pgSQL', 'php' =>'PHP',
                'powershell' => 'Powershell', 'prolog' => 'Prolog', 'properties' => 'Properties',
                'protobuf' => 'Protobuf', 'python' => 'Python', 'r' =>'R', 'rdoc' => 'RDoc',
                'rhtml' => 'RHTML', 'ruby' => 'Ruby', 'rust' => 'Rust', 'sass' => 'SASS', 'scad' => 'SCAD',
                'scala' => 'Scala', 'smarty' => 'Smarty', 'scheme' => 'Scheme', 'scss' => 'SCSS',
                'sh' =>'SH', 'sjs' => 'SJS', 'space' => 'Space', 'snippets' => 'snippets',
                'soy_template' =>  'Soy Template', 'sql' => 'SQL', 'stylus' => 'Stylus', 'svg' => 'SVG',
                'tcl' => 'Tcl', 'tex' => 'Tex', 'text' => 'Text', 'textile' => 'Textile', 'toml' => 'Toml',
                'twig' => 'Twig', 'typescript' => 'Typescript', 'vbscript' => 'VBScript',
                'velocity' => 'Velocity', 'verilog' => 'Verilog', 'xml' => 'XML', 'xquery' => 'XQuery',
                'yaml' => 'YAML'
            );
        }

        return $this->_modes;
    }


    /**
     * Returns an array of all the supported themes.
     *
     * @return array
     */
    public function getThemes()
    {
        if (!isset($this->_themes))
        {
            $this->_themes = array('ambiance' => Craft::t('Ambiance'), 'chaos' => Craft::t('Chaos'),
                'chrome' => Craft::t('Chrome'), 'clouds_midnight' => Craft::t('Clouds Midnight'),
                'clouds' => Craft::t('Clouds'), 'cobalt' => Craft::t('Cobalt'),
                'crimson_editor' => Craft::t('Crimson Editor'), 'dawn' => Craft::t('Dawn'),
                'dreamweaver' => Craft::t('Dreamweaver'), 'eclipse' => Craft::t('Eclipse'),
                'github' => Craft::t('Github'), 'idle_fingers' => Craft::t('Idle Fingers'),
                'katzenmilch' => Craft::t('Katzenmilch'), 'kr_theme' => Craft::t('kR'),
                'kuroir' => Craft::t('Kuroir'), 'merbivore_soft' => Craft::t('Merbivore Soft'),
                'merbivore' => Craft::t('Merbivore'), 'mono_industrial' => Craft::t('Mono Industrial'),
                'monokai' => Craft::t('Monokai'), 'pastel_on_dark' => Craft::t('Pastel on Dark'),
                'solarized_dark' => Craft::t('Solarized Dark'),
                'solarized_light' => Craft::t('Solarized Light'), 'terminal' => Craft::t('Terminal'),
                'textmate' => Craft::t('Textmate'),
                'tomorrow_night_blue' => Craft::t('Tomorrow Night Blue'),
                'tomorrow_night_bright' => Craft::t('Tomorrow Night Bright'),
                'tomorrow_night_eighties' => Craft::t('Tomorrow Night Eighties'),
                'tomorrow_night' => Craft::t('Tomorrow Night'), 'tomorrow' => Craft::t('Tomorrow'),
                'twilight' => Craft::t('Twilight'), 'vibrant_ink' => Craft::t('Vibrant Ink'),
                'xcode' => Craft::t('Xcode')
            );
        }

        return $this->_themes;
    }

    protected function defineAttributes()
    {
        return array(
            'name'      => AttributeType::String,
            'content'   => AttributeType::String,
            'readOnly'  => array(AttributeType::Bool, 'default' => false),
            'mode'      => array(AttributeType::Enum, 'values' => array_keys($this->getModes())),
            'theme'     => array(AttributeType::Enum, 'values' => array_keys($this->getThemes())),
        );
    }
}