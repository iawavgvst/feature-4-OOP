<?php

namespace App;

class ProjectManager implements ManagerInterface
{
    public const TIME_COST = 10;

    public function getTaskAssessment(int $hours): float|int
    {
        return $hours * self::TIME_COST;
    }
}