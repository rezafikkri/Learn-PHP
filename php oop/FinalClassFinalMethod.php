<?php

class SocialMedia
{
    public string $name;

    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

final class Facebook extends SocialMedia
{

    public function login(string $username, string $password): bool
    {
        return false;
    }
}

// error
// class FakeFacebook extends Facebook
// {
//
// }
