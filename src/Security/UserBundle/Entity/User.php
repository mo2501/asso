<?php
/**
 * Created by PhpStorm.
 * User: BRPX0413
 * Date: 22/05/2017
 * Time: 10:27
 */

namespace Security\UserBundle;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package Security\UserBundle
 * @ORM\Entity
 * @ORM\Table(name="asso_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}