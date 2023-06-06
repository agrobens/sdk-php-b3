<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace B3\Core;

/**
 * Description of B3Token
 *
 * @author weslley
 */
class B3Token {
    public $access_token;
    public $token_type;
    public $expires_in;
    public $expires;
    public $scope;
    
    public function __construct($stringJson = '') {
        $json = @json_decode($stringJson);
        if($json){
            foreach($json as $key => $value){
                $this->$key = $value;
            }
        }
    }
    
    public function getAccess_token() {
        return $this->access_token;
    }

    public function getToken_type() {
        return $this->token_type;
    }

    public function getExpires_in() {
        return $this->expires_in;
    }

    public function getExpires() {
        return $this->expires;
    }

    public function getScope() {
        return $this->scope;
    }

    public function setAccess_token($access_token) {
        $this->access_token = $access_token;
        return $this;
    }

    public function setToken_type($token_type) {
        $this->token_type = $token_type;
        return $this;
    }

    public function setExpires_in($expires_in) {
        $this->expires_in = $expires_in;
        return $this;
    }

    public function setExpires($expires) {
        $this->expires = $expires;
        return $this;
    }

    public function setScope($scope) {
        $this->scope = $scope;
        return $this;
    }
}