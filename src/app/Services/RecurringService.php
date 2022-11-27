<?php

namespace App\Services;

use Illuminate\Support\Collection;
use DB;

class RecurringService {

    /**
     * get all recurring record
     * @return Collection
     */
    public function getRecurringList(): Collection
    {
        return DB::table('recurrings')
            ->get();
    }
}
