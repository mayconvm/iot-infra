<?php

namespace ApiBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 * 
 * @ApiResource
 * @ORM\Table(name="config")
 * @ORM\Entity
 */
class Config
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * 
     * @Assert\NotBlank
     * @ORM\Column(name="mqqt_host", type="string", length=1000, nullable=true)
     */
    private $mqqtHost;

    /**
     * @var string
     *
     * @ORM\Column(name="mqqt_user", type="string", length=1000, nullable=true)
     */
    private $mqqtUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mqqt_pass", type="string", length=1000, nullable=true)
     */
    private $mqqtPass;

    /**
     * @var string
     *
     * @ORM\Column(name="mqqt_protocol", type="string", length=100, nullable=true)
     */
    private $mqqtProtocol;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mqqtHost
     *
     * @param string $mqqtHost
     *
     * @return Config
     */
    public function setMqqtHost($mqqtHost)
    {
        $this->mqqtHost = $mqqtHost;

        return $this;
    }

    /**
     * Get mqqtHost
     *
     * @return string
     */
    public function getMqqtHost()
    {
        return $this->mqqtHost;
    }

    /**
     * Set mqqtUser
     *
     * @param string $mqqtUser
     *
     * @return Config
     */
    public function setMqqtUser($mqqtUser)
    {
        $this->mqqtUser = $mqqtUser;

        return $this;
    }

    /**
     * Get mqqtUser
     *
     * @return string
     */
    public function getMqqtUser()
    {
        return $this->mqqtUser;
    }

    /**
     * Set mqqtPass
     *
     * @param string $mqqtPass
     *
     * @return Config
     */
    public function setMqqtPass($mqqtPass)
    {
        $this->mqqtPass = $mqqtPass;

        return $this;
    }

    /**
     * Get mqqtPass
     *
     * @return string
     */
    public function getMqqtPass()
    {
        return $this->mqqtPass;
    }

    /**
     * Set mqqtProtocol
     *
     * @param string $mqqtProtocol
     *
     * @return Config
     */
    public function setMqqtProtocol($mqqtProtocol)
    {
        $this->mqqtProtocol = $mqqtProtocol;

        return $this;
    }

    /**
     * Get mqqtProtocol
     *
     * @return string
     */
    public function getMqqtProtocol()
    {
        return $this->mqqtProtocol;
    }
}
