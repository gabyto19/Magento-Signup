<?php

namespace Task\Signup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Index extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'signup_table_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('signup_table', 'signup_id');
        $this->_useIsObjectNew = true;
    }
}
