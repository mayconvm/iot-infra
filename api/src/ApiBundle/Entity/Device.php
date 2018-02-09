<?php

namespace ApiBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ApiResource
 * @ORM\Table(name="device", indexes={@ORM\Index(name="fk_config", columns={"id_config"})})
 * @ORM\Entity
 */
class Device
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
     * @ORM\Column(name="token", type="string", length=1000, nullable=false)
     */
    private $token;

    /**
     * @var \ApiBundle\Entity\Config
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Config")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_config", referencedColumnName="id")
     * })
     */
    private $idConfig;



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
     * Set token
     *
     * @param string $token
     *
     * @return Device
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set idConfig
     *
     * @param \ApiBundle\Entity\Config $idConfig
     *
     * @return Device
     */
    public function setIdConfig(\ApiBundle\Entity\Config $idConfig = null)
    {
        $this->idConfig = $idConfig;

        return $this;
    }

    /**
     * Get idConfig
     *
     * @return \ApiBundle\Entity\Config
     */
    public function getIdConfig()
    {
        return $this->idConfig;
    }
}
