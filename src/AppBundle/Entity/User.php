<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="User")
 * @ORM\Entity(repositoryClass='AppBundle\Repository\UserRepository)
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idUser;

    /**
     * @ORM\Column(name="username", type="string", length=25, nullable=false)
     */
    private $username;

    /**
     * @ORM\Column(name="password", type="string", length=60, nullable=false)
     */
    private $password;

  /**
   * @ORRM\Column(name="email", type="string", length=60, unique=true)
   */
    private $email;

    /**
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
    return $this->password;
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
    return $this->username;
  }

  /**
   *
   */
  public function eraseCredentials()
  {
    // TODO: Implement eraseCredentials() method.
  }

  public function serialize()
  {
    return serialize(array(
      $this->idUser,
      $this->username,
      $this->password
    ));
  }

  public function unserialize($serialized)
  {
    list(
      $this->idUser,
      $this->username,
      $this->password
      )= unserialize($serialized);
  }


}

