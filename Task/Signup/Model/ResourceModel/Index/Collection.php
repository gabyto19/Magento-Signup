<?php

namespace Task\Signup\Model\ResourceModel\Index;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Task\Signup\Model\Index as Model;
use Task\Signup\Model\ResourceModel\Index as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'signup_table_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
