<?php

declare(strict_types=1);

namespace App\Entity;

use Illuminate\Contracts\Auth\Authenticatable;
use phpseclib3\Common\Functions\Strings;

class User implements Authenticatable //Authenticatable 유저토근 ?
{

    private $id;
    private $apiToken;
    private $name;
    private $email;
    private $password;

    public function __construct(
        string $id,
        string $apiToken,
        string $name,
        string $email,
        string $password = ''
    ){
        $this->id = $id;
        $this->apiToken = $apiToken;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName():string
    {
        return $this->name;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    public function getAuthIdentifierName():string
    {
        return 'user_id';
    }

    public function getAuthIdentifier():string
    {
        return $this->id;
    }

    public function getAuthPassword():string
    {
        return $this->password;
    }

    public function getRememberToken():string
    {
        return '';
    }

    public function setRememberToken($value)
    {

    }

    public function getRememberTokenName():string
    {
        return '';
    }
}
