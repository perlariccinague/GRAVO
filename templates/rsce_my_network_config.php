<?php
return array(
    'label' => array('Network', 'Meine Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'text' => array(
            'label' => array('Title', 'Beschreibung...'),
            'inputType' => 'text',
        ),
        'description' => array(
            'label' => array('Teaser', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'button' => array(
            'label' => array('Button', 'Beschreibung...'),
            /*'eval' => array('rte' => 'tinyMCE'),*/
            'inputType' => 'text',
        ),
        'url' => array(
            'label' => array('Link', 'Beschreibung...'),
            'inputType' => 'url'
        ),
    ),
);