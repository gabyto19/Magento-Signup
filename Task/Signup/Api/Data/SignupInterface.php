<?php

namespace Task\Signup\Api\Data;

interface SignupInterface
{

    const NAME = "name";
    const DATE = "date";

    /**
     * @return mixed
     */
    public  function getId();

    /**
     * @param $name
     * @return mixed
     */
    public function setname(string $name);

    /**
     * @return mixed
     */
    public function getname();

    /**
     * @param $date
     * @return mixed
     */
    public function setDate(string $date);

    /**
     * @return mixed
     */
    public function getDate();
}
