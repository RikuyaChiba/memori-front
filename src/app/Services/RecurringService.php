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

    /**
     * Save recurring request data sent from store form.
     */
    public function create($recurring_request): void
    {
        DB::table('recurrings')
            ->insert($recurring_request);
    }
}
