<?php

namespace App\Http\Controllers\Recurring;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecurringRequest;
use App\Services\RecurringService;

class CreateController extends Controller {

    /**
     * Save recurring request
     * @return void
     */
    public function __invoke(RecurringRequest $recurring_request, RecurringService $recurring_service)
    {
        $this->createRecurring($recurring_request, $recurring_service);
        return redirect()->route('recurring_index');
    }

    private function createRecurring($recurring_request, $recurring_service)
    {
        $recurring_service->create([
            'name' => $recurring_request->name,
            'status' => config('constants.recurring.status.first_day')
        ]);
    }
}
