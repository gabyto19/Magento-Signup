<?php

namespace Task\Signup\Model;

use Task\Signup\Api\Data\SignupInterface;
use Task\Signup\Api\SignupRepositoryInterface;
use Task\Signup\Model\ResourceModel\Signup;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Task\Signup\Model\ResourceModel\Index\CollectionFactory;
use Task\Signup\Model\IndexFactory;



class SignupRepository implements SignupRepositoryInterface
{
    protected $resource;

    protected $indexFactory;

    protected $searchResultsFactory;

    protected $SignUpCollectionFactory;

    public function __construct(Signup $resource, IndexFactory $indexFactory, SearchResultsInterface $searchResultsFactory, CollectionFactory $SignupCollectionFactory)
    {
        $this->resource=$resource;

        $this->indexFactory=$indexFactory;

        $this->searchResultsFactory = $searchResultsFactory;

        $this->SignupCollectionFactory = $SignupCollectionFactory;

    }

    public function save(SignupInterface $signup)
    {
        $this->resource->save($signup);
        return $signup;
    }

    public function get($signupId)
    {
        $signUp = $this->indexFactory->create();
        $this->resource->load($signUp ,$signupId);
        return $signUp;
    }

    public function getList($searchCriteria)
    {
        $searchResults = $this->searchResultsFactory;
        $searchResults->setSearchCriteria($searchCriteria);
        $collection = $this->SignupCollectionFactory->create();
        return $this->searchResultsFactory;

    }

    public function delete(SignupInterface $signup)
    {
        $this->resource->delete($signup);
    }

    public function deleteById($signupId)
    {
        $this->delete($this->get($signupId));
    }
}
