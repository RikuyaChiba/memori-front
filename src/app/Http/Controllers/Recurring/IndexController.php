<?php

namespace App\Http\Controllers\Recurring;

use App\Http\Controllers\Controller;
use App\Services\RecurringService;
use Illuminate\Support\Collection;

class IndexController extends Controller {

    /**
     * Display Index page of recurring
     * @param RecurringService $recurring_service
     * @return void
     */

     public function __invoke(RecurringService $recurring_service)
     {
        $data['title'] = 'Recurring list';
        $data['recurrings'] = $recurring_service->getRecurringList();
        return view('recurring.index')->with($data);
     }
}
