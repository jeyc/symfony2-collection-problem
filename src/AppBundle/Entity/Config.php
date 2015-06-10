<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Config
{
    /**
     * @var ArrayCollection|Option[]
     */
    private $options;

    function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|Option[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param Option $option
     */
    public function addOption(Option $option)
    {
        $this->options[] = $option;
    }

    /**
     * @param Option $option
     */
    public function removeOption(Option $option)
    {
        $this->options->removeElement($option);
    }
}