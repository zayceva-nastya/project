<?php

namespace Model;

use mysqli;
use TexLab\MyDB\DbEntity;

class UsersModel extends DbEntity
{
    public function __construct(string $tableName, mysqli $mysqli)
    {
        parent::__construct($tableName, $mysqli);
    }

    public function getUsersPage(int $page)
    {
        return $this
            ->reset()
            ->setSelect('`users`.`id`, `users`.`login`, `users`.`password`,  `group`.`name`, `users`.`FIO`')
            ->setFrom('`users`,`group`')
            ->setWhere('`users`.`group_id` = `group`.`id`')
            ->setOrderBy('`users`.`id`')
            ->getPage($page);
    }

    public function getGroupNames()
    {
        $data = $this->runSQL('SELECT `id`,`name` FROM `group`');
        $result = [];
        foreach ($data as $row) {
            $result[$row['id']] = $row['name'];
        }
        return $result;
    }

    public function getGroupIdByCode($cod)
    {
        return $this->runSQL("SELECT `id` FROM `group` where `cod` = '$cod'")[0]['id'];
    }
    
    public function getUsers()
    {
        $data = $this->runSQL('SELECT `id`,`login` FROM `users`');
        $result = [];
        foreach ($data as $row) {
            $result[$row['id']] = $row['login'];
        }
        return $result;
    }
}
