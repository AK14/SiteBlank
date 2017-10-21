<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Role", inversedBy="userUser")
     * @ORM\JoinTable(name="user_has_role",
     *   joinColumns={
     *     @ORM\JoinColumn(name="User_id_user", referencedColumnName="id_user")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Role_id_role", referencedColumnName="id_role")
     *   }
     * )
     */
    private $roleRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roleRole = new \Doctrine\Common\Collections\ArrayCollection();
    }

  /**
   *
   */
  public function getRoles()
  {
    return [
      'ROLE_USER'
    ];
  }

  /**
   *
   */
  public function getPassword()
  {
    // TODO: Implement getPassword() method.
  }

  /**
   *
   */
  public function getSalt()
  {
    // TODO: Implement getSalt() method.
  }

  /**
   *
   */
  public function getUsername()
  {
    // TODO: Implement getUsername() method.
  }

  /**
   *
   */
  public function eraseCredentials()
  {
    // TODO: Implement eraseCredentials() method.
  }


}

