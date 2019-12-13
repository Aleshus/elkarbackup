<?php

namespace Binovo\ElkarBackupBundle\Form\Model;
 
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Validator\Constraints as Assert;
 
class ChangePasswordModel
{
    /**
     * @SecurityAssert\UserPassword(
     *     message = "Wrong value for your current password"
     * )
     */
    protected $oldPassword;
    
    /**
     * @Assert\NotBlank(
     *     message = "Empty password not allowed"
     * )
     * @Assert\Length(min="2", max="100")
     * @var string
     */
    protected $password;
             
    function getOldPassword() {
        return $this->oldPassword;
    }
 
    function getPassword() {
        return $this->password;
    }
 
    function setOldPassword($oldPassword) {
        $this->oldPassword = $oldPassword;
        return $this;
    }
 
    function setPassword($password) {
        $this->password = $password;
        return $this;
    }
}