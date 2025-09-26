<?php
return array(
    'label' => array('PDF-Reader', 'Ein PDF-Dokument innerhalb der Webseite darstellen'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_rsce_pdf-reader',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'pdf' => array(
            'label' => array('PDF-Datei', 'Die PDF-Datei im Dateisystem'),
            'inputType' => 'fileTree',
            'eval' => array('filesOnly' => true)
        )
    ),
);
