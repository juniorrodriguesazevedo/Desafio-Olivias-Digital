<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class LogMessageService 
{
    public static function log($req, $level, $exception = null)
    {
        $message = '';
        $user = $req->name;
        $getRote = $req->server('HTTP_REFERER');
        $getMethod = $req->server('REQUEST_METHOD');

        switch ($level) {
            case 'info':
                $message = "O usuário {$user} fez uma requisição do tipo {$getMethod} na rota {$getRote}";
                break;
            case 'error':
                $message = "Ocorreu um erro com o usuário {$user} ao fazer uma requisição do tipo {$getMethod} na rota {$getRote}. Descrição do erro: {$exception->getMessage()}";
                break;
        }

        return Log::channel('main')->$level($message);
    }
}
