<?php
return array(
    'label' => array('Partner', 'Meine Beschreibung...'),
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
        'image' => array(
            'label' => array('Bild', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'description' => array(
            'label' => array('Teaser', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
        'xCoords' => array(
            'label' => array('Geolocation X'),
            'inputType' => 'text',
        ),
        'yCoords' => array(
            'label' => array('Geolocation Y'),
            'inputType' => 'text',
        ),
    ),
);




