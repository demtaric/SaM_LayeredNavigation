<?php

class SaM_LayeredNavigation_Model_Adminhtml_System_Config_Source_Type
{
    public function toOptionArray()
    {
        $position = array(
            array('value' => 'default', 'label' => 'Default'),
            array('value' => 'select', 'label' => 'Select'),
        );

        return $position;
    }
}