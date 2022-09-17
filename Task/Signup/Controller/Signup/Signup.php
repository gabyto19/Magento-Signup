<?php

namespace Task\Signup\Controller\Signup;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Signup implements HttpGetActionInterface
{
    protected PageFactory $pageFactory;

    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(
        PageFactory $pageFactory
    )
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * @return Page|ResultInterface
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}