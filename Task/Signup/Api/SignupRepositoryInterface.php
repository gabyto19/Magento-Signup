<?php

namespace Task\Signup\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Task\Signup\Api\Data\SignupInterface;



interface SignupRepositoryInterface
{

    public function save(SignupInterface  $signup);

    public function get($signupId);

    public function getList($searchCriteria);

    public function delete(SignupInterface $signup);

    public function deleteById($signupId);
}
