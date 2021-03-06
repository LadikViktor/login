<?php

namespace Core;

use Core\Config;
use TexLab\MyDb\DB;
use TexLab\MyDb\DbEntity;


class Login
{
    private $table;

    public function __construct()
    {
        $this->table = new DbEntity(
            Config::MYSQL_TABLE,
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );
    }

    public function userCheck(string $login, string $password): bool
    {
        return !empty($this->table->runSQL(
            'SELECT*FROM form WHERE login="' . $login . '" AND password="' . $password . '"'
        ));
    }

    public function userCheck(string $login, string $password): bool
    {
        return !empty($this->table->runSQL(
            'SELECT*FROM form WHERE login="' . $login . '" AND password="' . $password . '"'
        ));
    }
}
