<?php
    declare(strict_types=1);

    namespace App\Domain\Users;

    class GetDomain
    {
        public function get()
        {
            return [
                'users' => [
                    'name' => 'J Dilla'
                ]
            ];
        }
    }
?>