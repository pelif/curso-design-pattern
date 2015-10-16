<?php
namespace padroes\basicos\appregistry;

class SessionsSystem
{
    public static function registerSessions(DadosUser $dadosUser)
    {
        $dadosUser->atribuiSession();
        Registry::getInstance()->set('dados_user', $dadosUser);
    }

    public function recoverySessions() {
        //return Registry::getInstance()->get('dados_user');
        print "executanto " . __METHOD__ . " ";
    }

}
