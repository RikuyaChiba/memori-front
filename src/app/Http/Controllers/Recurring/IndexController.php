<?php

namespace App\Http\Controllers\Recurring;

use App\Http\Controllers\Controller;
use App\Services\RecurringService;

class IndexController extends Controller {

    /**
     * Display Index page of recurring
     * @param RecurringService $recurring_service
     * @return void
     */

     public function __invoke(RecurringService $recurring_service)
     {
        $data['title'] = 'Recurring list';
        // Get Recurring status
        $recurring_status = $this->getRecurringStatus();
        // Get Recurring Data by Status
        $data['recurrings'] = $this->getRecurringDataByStatus($recurring_service, $recurring_status);

        return view('recurring.index')->with($data);
    }

    private function getRecurringStatus(): array
    {
        return [
            'first_day' => config('constants.recurring.status.first_day'),
            'one_day'   => config('constants.recurring.status.one_day_recurring'),
            'three_day' => config('constants.recurring.status.three_day_recurring'),
            'one_week'  => config('constants.recurring.status.one_week_recurring'),
            'two_week'  => config('constants.recurring.status.two_week_recurring'),
            'one_month' => config('constants.recurring.status.one_month_recurring')
        ];
    }

    private function getRecurringDataByStatus(RecurringService $recurring_service, array $recurring_status): array
    {
        $one_day_recurring   = $recurring_service->getRecurringListByStatus($recurring_status['first_day']);
        $three_day_recurring = $recurring_service->getRecurringListByStatus($recurring_status['one_day']);
        $one_week_recurring  = $recurring_service->getRecurringListByStatus($recurring_status['three_day']);
        $two_week_recurring  = $recurring_service->getRecurringListByStatus($recurring_status['one_week']);
        $one_month_recurring = $recurring_service->getRecurringListByStatus($recurring_status['two_week']);
        $one_month_recurring = $recurring_service->getRecurringListByStatus($recurring_status['one_month']);

        $recurring_data = [
           'first_day' => $one_day_recurring,
           'one_day'   => $three_day_recurring,
           'three_day' => $one_week_recurring,
           'one_week'  => $two_week_recurring,
           'two_week'  => $one_month_recurring,
           'one_month' => $one_month_recurring
        ];

        return $recurring_data;
    }
}
