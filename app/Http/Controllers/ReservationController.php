<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationAddRequest;
use App\Reservation;
use App\ReservationService;
use App\Room;
use Exception;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    private ReservationService $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    /**
     * @param ReservationAddRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    function add(ReservationAddRequest $request): JsonResponse
    {
        $params = $request->validated();

        $room = new Room(
            type: $params['type'],
            count: $params['count']
        );

        $reservation = new Reservation(
            lastName: $params['lastName'],
            firstName: $params['firstName'],
            email: $params['email'],
            phone: $params['phone'],
            checkin: $params['checkin'],
            days: $params['days'],
            room: $room
        );

        $this->reservationService->add($reservation);

        return response()->json([
            'result' => 'success'
        ]);
    }

    public function getList(): JsonResponse
    {
        $reservation = array(
            'id' => 1,
            'lastName' => '丹波',
            'firstName' => '凛',
            'email' => 'rin.tamba@tam-bourine.co.jp',
            'phone' => '09011112222',
            'checkin' => '2021/11/27',
            'days' => 3,
            'room' => 1,
            'type' => 'double',
            'count' => 2
        );

        return response()->json(array($reservation));
    }
}
