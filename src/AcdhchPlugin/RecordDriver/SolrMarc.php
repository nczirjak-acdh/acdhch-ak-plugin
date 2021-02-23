<?php

namespace AcdhchPlugin\RecordDriver;

class SolrMarc extends \AkSearch\RecordDriver\SolrMarc {

    public function __construct() {
        //$this->getSummarizedHoldings();
    }
    
    public function getThumbnail($size = 'small') {
        return 'https://arche.acdh.oeaw.ac.at/browser/themes/contrib/arche-theme/logo.svg';
    }

    /**
     * The holdings tab on the Record view
     * FE: http://127.0.0.1/vufind/Record/990003051340504498?lng=en
     */
    public function getSummarizedHoldings() {
        
        
    }

}
