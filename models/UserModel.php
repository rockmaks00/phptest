<?php
class UserModel extends Model {
    public function login($email, $password)
    {
        $query = "SELECT (name, is_admin) FROM public.users WHERE email=$1 AND password=$2;";
        return $this->query($query, array($email, $password));
    }
}