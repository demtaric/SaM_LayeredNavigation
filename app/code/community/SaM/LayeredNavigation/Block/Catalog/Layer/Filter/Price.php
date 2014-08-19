<?php

class SaM_LayeredNavigation_Block_Catalog_Layer_Filter_Price extends Mage_Catalog_Block_Layer_Filter_Price
{
    /**
     * Initialize Price filter module
     *
     */
    public function __construct()
    {
        Mage_Core_Block_Template::__construct();
        $this->setTemplate('sam_layerednavigation/catalog/layer/filter.phtml');

        $this->_filterModelName = 'catalog/layer_filter_price';
    }
}