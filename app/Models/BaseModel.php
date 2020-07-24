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
            $this->is_active =1;
            $this->is_deleted =0;

            parent::save($options);
        }
        if ($this->forceDeleting) {
        
            $this->is_active =0;
            $this->is_deleted =1;

            parent::save($options);
        }

        return $saved;
    }
}