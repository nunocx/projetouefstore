<?php
/**
 *
 */
class ErroAtualizacaoException extends Exception {

    public function __contruct($message, $codigo = 0)
    {
        parent::__construct($message,$codigo);
    }
}
?>