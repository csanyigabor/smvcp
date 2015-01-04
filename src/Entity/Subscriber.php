<?php

namespace WND\SMVCP\Entity;

/**
 * Class Subscriber
 */
class Subscriber
{
    /**
     * @type int
     */
    protected $id;

    /**
     * @type string
     */
    protected $name;

    /**
     * @type string
     */
    protected $email;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return \WND\SMVCP\Entity\Subscriber
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     *
     * @return \WND\SMVCP\Entity\Subscriber
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
