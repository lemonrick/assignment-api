<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class MiestaSeeder extends Seeder {

    public function _2023_04_08_203227_seed_miesta_up () {
        $events = [
            [5, 10],
            [10, 5]
        ];

        foreach ($events as $key => $value) {
            $event = new Event();
            $event->seatRowsCount = $value[0];
            $event->seatColumnsCount = $value[1];
            $event->save();
        }

        $reservations = [
            [1, 'Janko', 'Hraško', 'hrasko@test.sk', '421910123456', '14, 32'],
            [2, 'Denis', 'Novák', 'novak@test.sk', '421910654321', '33'],
        ];

        foreach ($reservations as $key => $value) {
            $reservation = new Reservation();
            $reservation->event_id = $value[0];
            $reservation->name = $value[1];
            $reservation->surname = $value[2];
            $reservation->email = $value[3];
            $reservation->phone = $value[4];
            $reservation->occupied = $value[5];
            $reservation->save();
        }

    }

    public function _2023_04_08_203227_seed_miesta_down () {
        //
    }
}
