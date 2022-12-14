<?php

namespace Task\Signup\Controller\Signup;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;

class Save extends Action
{
    protected $resultPageFactory;
    protected $extensionFactory;
   /**
    * Booking action
    *
    * @return void
    */
   public function __construct(
       Context $context,
       \Task\Signup\Model\IndexFactory $indexFactory,
       PageFactory $resultPageFactory
   )
   {
       $this->indexFactory = $indexFactory;
       $this->resultPageFactory = $resultPageFactory;
       parent::__construct($context);
   }

    public function execute()
   {
       try {
           $data = (array)$this->getRequest()->getPost();
           if ($data) {
               $model = $this->indexFactory->create();
               $model->setData($data)->save();
               $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
           }
       } catch (\Exception $e) {
           $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
       }
       $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
       $resultRedirect->setUrl($this->_redirect->getRefererUrl());
       return $resultRedirect;

   }
}
