<?php

declare(strict_types=1);

namespace Tests\Fixtures;

final class RegisterUser
{
    /** @var string */
    private $name;

    /** @var string */
    private $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }
}
