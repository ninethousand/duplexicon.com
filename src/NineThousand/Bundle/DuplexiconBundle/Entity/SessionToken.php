<?php

namespace NineThousand\Bundle\DuplexiconBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * SessionToken
 *
 * @ORM\Table(name="session_token")
 * @ORM\Entity
 * @Gedmo\Loggable
 */
class SessionToken
{

    public function __construct()
    {
        //$this->collection = new ArrayCollection();
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="date")
     */
    protected $created;

    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @var datetime $updated
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $updated;

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @var boolean $isAuthenticated
     *
     * @ORM\Column(type="boolean")
     */
    protected $isAuthenticated = false;

    public function getisAuthenticated()
    {
        return $this->isAuthenticated;
    }

    public function setisAuthenticated($isAuthenticated)
    {
        $this->isActive = $isAuthenticated;
        return $this;
    }

    /**
     * @var boolean $isActive
     *
     * @ORM\Column(type="boolean")
     */
    protected $isActive = true;

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * convert entity to a json string
     */
    public function toJson()
    {
        return json_encode((array) $this);
    }

    /**
     * convert entity to an array object
     */
    public function toObj()
    {
        return new \ArrayObject((array) $this);
    }

}
