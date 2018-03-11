<?php
/**
 * Created by PhpStorm.
 * User: matia
 * Date: 11/03/2018
 * Time: 00:12
 */

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}