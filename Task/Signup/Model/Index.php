<?php

namespace Task\Signup\Model;

use Magento\Framework\Model\AbstractModel;
use Task\Signup\Model\ResourceModel\Index as ResourceModel;

class Index extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'signup_table_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
