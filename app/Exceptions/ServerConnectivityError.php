<?php

namespace CodeIngniter\Exceptions;

use CodeIgniter\Exceptions\CriticalError ; 


class ServerConnectivityError extends EmergencyError {

    use CodeIgniter\Exceptions\DebugTraceableTrait ;
    
    protected $code = 3;

    public static function forFailConnection(int $error , string $connType){
        switch ($error){
            case DOCKER_FAIL_START:
                return new static("Server Docker Gagal Dijalankan");

            case DOCKER_UNRESPONSIVE:
                return new static("Server Docker tidak merespon");
            default : 
                return new static("Server Docker Error tidak diketahui");
        }
    }
}