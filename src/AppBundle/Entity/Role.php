<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="Role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=false)
     */
    private $title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="roleRole")
     */
    private $userUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }

  /**
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getUserUser()
  {
    return $this->userUser;
  }

  /**
   * @param \Doctrine\Common\Collections\Collection $userUser
   */
  public function setUserUser($userUser)
  {
    $this->userUser = $userUser;
  }



}

