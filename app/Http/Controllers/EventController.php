<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventController extends Controller {

    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request) {
        $events = Event::query()
            ->select(
                'events.id as id',
                'events.seatRowsCount as seatRowsCount',
                'events.seatColumnsCount as seatColumnsCount',
            )
            ->get();

        foreach ($events as $event) {
            $reservations = Reservation::query()
                ->select('occupied')
                ->where('event_id', '=', $event->id)
                ->get();
            $vysledok = '';
            foreach ($reservations as $reservation) {
                $vysledok .= $reservation->occupied . ',';
            }
            $vysledok2 = array_filter(explode( ',', $vysledok ));
            $event->occupied = $vysledok2;
        }

        return response()->json($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return response('',400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        return response('',400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return response('',400);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        return response('',400);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        return response('',400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        return response('',400);
    }

}
