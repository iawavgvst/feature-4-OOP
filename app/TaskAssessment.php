<?php

namespace App;

class TaskAssessment
{
    /**
     * @throws \Exception
     */
    public static function getRatingFromDeveloper(string $language): string
    {
        switch ($language) {
            case 'php':
                $phpDeveloper = new PHPDeveloper('Arthur', 28, 'Middle');
                return $phpDeveloper->getTaskAssessment();
            case 'java':
                $javaDeveloper = new JavaDeveloper('Artem', 32, 'Team Lead');
                return $javaDeveloper->getTaskAssessment();
            case 'sql':
                $sqlDeveloper = new SQLDeveloper();
                $sqlDeveloper->setName('Eva') . $sqlDeveloper->setAge(26) . $sqlDeveloper->setPosition('Senior');
                return $sqlDeveloper->getTaskAssessment();
            case 'python':
                $pythonDeveloper = new PythonDeveloper();
                $pythonDeveloper->setName('Liz') . $pythonDeveloper->setAge(22) . $pythonDeveloper->setPosition('Junior');
                return $pythonDeveloper->getTaskAssessment();
            default:
                throw new \Exception('Неверный язык прог-я');
        }
        //вообще, судя по заданию, возвращать должен объект "разработчик" в каждом кейсе, но мне phpstorm выдает ошибку
        //как будет правильнее? потому что если писать ретурн, то мне шторм также выдает ошибку при наличии break (мол, его не надо)
    }

    public static function getTotalRaiting(string $language): int|string //я тут не особо поняла насчет аргумента, но вроде так
    {
        try {
            $projectManager = new ProjectManager();
            return $projectManager->getTaskAssessment(self::getRatingFromDeveloper($language));
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
         //это же верно? нужно было писать "php"?
    }
}