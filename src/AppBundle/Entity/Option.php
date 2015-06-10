<?php
namespace AppBundle\Entity;

class Option
{
    /**
     * @var bool
     */
    private $enabled = true;

    /**
     * @var string
     */
    private $name;

    /**
     * @param $name
     */
    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}