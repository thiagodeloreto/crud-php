<?php

function printMessage($message) {
    if ($message=='success-create')
        return '<span class="text-success">Usuário criado com sucesso!</span>';
    if ($message=='error-create')
        return '<span class="text-error">Erro ao registrar usuário!</span>';

    if ($message=='success-remove')
        return '<span class="text-success">Usuário deletado com sucesso!</span>';
    if ($message=='error-remove')
        return '<span class="text-error">Erro ao remover usuário!</span>';

    if ($message=='success-update')
        return '<span class="text-success">Usuário atualizado com sucesso!</span>';
    if ($message=='error-update')
        return '<span class="text-error">Erro ao atualizar usuário!</span>';
}