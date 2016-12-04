<?php

namespace Phisch90\OAuth\Server\Token;

use Phisch90\OAuth\Server\Entity\AccessTokenEntity;

interface Token
{
    /**
     * @param AccessTokenEntity $accessToken
     * @return string
     */
    public function generate(AccessTokenEntity $accessToken);

    /**
     * @return string
     */
    public function getType();
}