<?php

namespace App\Core;

use Exception;

class ValidPostData
{
    public function valid(string $content): void
    {
        if(empty($content)) {
            throw new Exception("Treść postu nie może być pusta");
        }
    }
}
