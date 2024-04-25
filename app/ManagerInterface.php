<?php

namespace App;

interface ManagerInterface
{
    public function getTaskAssessment(int $hours): float|int;
}