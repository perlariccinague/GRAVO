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
        'rigging' => array(
            'inputType' => 'checkbox',
            'options' => array(
                '1' => 'test',
                '2' => 'test1',
            )
        ),
       'filter' => array(
            'inputType' => 'list',
            'fields' => array(
                'description3' => array(
                    'label' => array('Branche / Geschäftsfeld'),
                    'inputType' => 'group',
                ),
                'konservierungstoffe' => array(
                    'label' => array('Forschung und Entwicklung'),
                    'inputType' => 'checkbox',
                    /*'eval' => array('tl_class' => 'm12'),*/
                ),
                'farbstoff' => array(
                    'label' => array('Aus- und Weiterbildung'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'suessungsmittel' => array(
                    'label' => array('Komponenten- und Systemhersteller'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'antioxidationsmittel' => array(
                    'label' => array('Industriedruck'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'schwefelstoffe' => array(
                    'label' => array('Oberflächentechnik (Laser, Beschichtung, Folierung, etc.)'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'support' => array(
                    'label' => array('Bündnis-Support'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'description1' => array(
                    'label' => array('Auszeichnungen (vegetarisch etc)'),
                    'inputType' => 'group',
                ),
                'vegetarisch' => array(
                    'label' => array('vegetarisch'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'vegan' => array(
                    'label' => array('vegan'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'laktosefrei' => array(
                    'label' => array('laktosefrei'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
                'glutenfrei' => array(
                    'label' => array('glutenfrei'),
                    'inputType' => 'checkbox',
                    'eval' => array('tl_class' => 'm12'),
                ),
            ),
        ),
    ),
);




