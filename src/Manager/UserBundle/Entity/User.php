<?php
/**
 * Created by PhpStorm.
 * User: BRPX0413
 * Date: 19/05/2017
 * Time: 11:39
 */

namespace Manager\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Table(name="manager_user")
 * @ORM\Entity(repositoryClass="Manager\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}