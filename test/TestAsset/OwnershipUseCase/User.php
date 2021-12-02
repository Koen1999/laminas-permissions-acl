<?php

namespace LaminasTest\Permissions\Acl\TestAsset\OwnershipUseCase;

use Laminas\Permissions\Acl\ProprietaryInterface;
use Laminas\Permissions\Acl\Role\RoleInterface;

class User implements RoleInterface, ProprietaryInterface
{
    public $id;

    public $role = 'guest';

    public function getRoleId()
    {
        return $this->role;
    }

    public function getOwnerId()
    {
        return $this->id;
    }
}