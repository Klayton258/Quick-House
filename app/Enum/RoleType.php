<?php

namespace App\Enum;


enum RoleType:string {

    case SUPER_ADMIN = 'super admin';
    case MANAGER = 'manager';
    case HOUSE_MANAGER = 'house editor';
    case CLIENT = 'user';

    function roles() : Array{

        return match($this){

            self::SUPER_ADMIN =>[
                'super_users',
                'create_users',
                'manage_users',
                'delete_users',
                'add_houses',
                'delete_houses',
                'edit_houses',
            ],

            self::MANAGER => [
                'add_houses',
                'edit_houses',
                'view_clients',
                'edit_clients',
            ],

            self::HOUSE_MANAGER =>[
                'add_houses',
                'edit_houses',
            ],

            self::CLIENT =>[
                'client'
            ]
        };

    }
}


