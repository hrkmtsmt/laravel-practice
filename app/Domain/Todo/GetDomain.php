<?php
    declare(strict_types=1);

    namespace App\Domain\Todo;

    class GetDomain
    {
        public function get()
        {
            return [
                'title' => 'Hello World'
            ];
        }
    }
?>