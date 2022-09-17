<?php

namespace Task\Signup\Ui\DataProvider\Signup\Listing;

use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

class Collection extends SearchResult
{
    protected function initSelect()
    {
        $this->addFilterToMap('id','main_table.id');
        $this->addFilterToMap('name','main_table.name');
        $this->addFilterToMap('date','main_table.date');
        parent::_initSelect();
    }

}
