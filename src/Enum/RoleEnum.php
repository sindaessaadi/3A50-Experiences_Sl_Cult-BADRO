<?php

namespace App\Enum;

class RoleEnum
{
    const ETUDIANT = 'Etudiant';
    const INSTITUTION = 'Institution';
    const ADMIN = 'Admin';

    public static function getRoles(): array
    {
        return [
            self::ETUDIANT,
            self::INSTITUTION,
            self::ADMIN,
        ];
    }
}