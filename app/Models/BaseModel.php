<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


class BaseModel extends Eloquent
{
    public function save(array $options = [])
    {
        $saved = parent::save($options);

        if ($this->wasRecentlyCreated) {
            $this->updated_at = null;

 

            parent::save($options);
        }
       

        return $saved;
    }
}