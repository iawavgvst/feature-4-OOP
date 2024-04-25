<?php

namespace App;

class PHPDeveloper extends Developer
{
    public string $name;
    public string $age;
    public string $position;

    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    public function getTaskAssessment(): int
    {
        return rand(1, 10);
    }
}