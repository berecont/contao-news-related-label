<?php 

// contao/dca/tl_module.php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_module']['fields']['labelEmpty'] = [
    'label' => ['Hinweis überschreiben','Der Standardhinweis "Zurzeit sind keine Nachrichten vorhanden." wird bei leerer Ausgabe überschrieben.'],
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'maxlength' => 255],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => 'Es sind aktuell keine verwandten Einträge vorhanden.'],
];

PaletteManipulator::create()
    ->addField('labelEmpty', 'news_related_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('newslist', 'tl_module')
    ;
