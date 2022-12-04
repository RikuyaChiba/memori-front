<?php

namespace App\Http\Controllers\Recurring;

use App\Http\Controllers\Controller;

class StoreController extends Controller {

    /**
     * Display store page of recurring
     *
     * @return void
     */
    public function __invoke()
    {
        $data['title'] = 'Save contents you learned';
        return view('recurring.store')->with($data);
    }
}
