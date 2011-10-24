<?php

namespace NineThousand\Bundle\DuplexiconBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 * @Gedmo\Loggable
 */
class Session
{

    public function __construct()
    {
        //$this->collection = new ArrayCollection();
    }

    /**
     * @var integer $id
     * set as the value of PHPSESSID
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
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
      * @ORM\OneToOne(targetEntity="SessionToken")
      */
    protected $token;

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
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
