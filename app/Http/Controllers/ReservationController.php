<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationAddRequest;
use App\Reservation;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    /**
     * @param ReservationAddRequest $request
     * @return JsonResponse
     */
    function add(ReservationAddRequest $request): JsonResponse
    {
        $params = $request->validated();
        $reservation = new Reservation(
            lastName: $params['lastName'],
            firstName: $params['firstName'],
            email: $params['email'],
            phone: $params['phone'],
            checkin: $params['checkin'],
            days: $params['days']
        );

        // TODO: Model に Add

        return response()->json([
            'result' => 'success'
        ]);
    }
}
