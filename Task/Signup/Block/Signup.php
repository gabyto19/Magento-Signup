<?php

namespace Task\Signup\Block;

use Magento\Framework\View\Element\Template;
use Task\Signup\Model\PostFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\Phrase;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;

class Signup extends Template
{
    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */

    /**
     * Construct
     *
     * @param Template $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = [])
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    /**
     * Get form action URL for POST booking request
     *
     * @return string
     */
    public function getFormAction()
    {
        // companymodule is given in routes.xml
        // controller_name is folder name inside controller folder
        // action is php file name inside above controller_name folder

        return 'http://local.new-project.com/signup/signup/save';
        // here controller_name is index, action is booking
    }
    /**
    * @return AbstractDb|AbstractCollection|null
    */

    /**
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return (bool)$this->scopeConfig->getValue('customer/startup/sign_up_toggle', ScopeInterface::SCOPE_STORE);
    }
}
