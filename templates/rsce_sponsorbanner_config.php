<?php
return array(
    'label' => array('Sponsorbanner', 'Mehrere Logos in Reihe darstellen'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_rsce_sponsorbanner',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'logos' => array(
            'inputType' => 'list',
            'label' => array('Logos', 'Rechts auf "Neues Element" klicken'),
            'fields' => array(
                'logo' => array(
                    'label' => array('Logo', 'Die Logo-Datei'),
                    'inputType' => 'fileTree',
                    'eval' => array('filesOnly' => true),
                )
            )
        )
    ),
);
