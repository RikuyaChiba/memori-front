<?php

namespace App\Services;

use Illuminate\Support\Collection;
use DB;

class RecurringService {

    /**
     * get all recurring records
     * @return Collection
     */
    public function getRecurringList(): Collection
    {
        return DB::table('recurrings')
            ->get();
    }

    /**
     * get recurring records by recurring status
     * @return Collection
     */
    public function getRecurringListByStatus(int $status): Collection
    {
        return DB::table('recurrings')
            ->where('status', '=', $status)
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
