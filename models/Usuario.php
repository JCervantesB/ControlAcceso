<?php

namespace Model;

class Usuario extends ActiveRecord {
    // Base de datos

    protected static $tabla = 'sys_user';
    protected static $columnasDB = ['id', 'username', 'user_pwd', 'user_email', 'remark'];

    public $id;
    public $username;
    public $user_pwd;
    public $user_email;
    public $remark;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->username = $args['username'] ?? '';
        $this->user_pwd = $args['user_pwd'] ?? '';
        $this->user_email = $args['user_email'] ?? '';
        $this->remark = $args['remark'] ?? null;
    }
}