<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PayController;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Room $room = null)
    {
        $bookedDates = $this->getBookedDates();

        return view('reservations.create', [
            'chosen_room' => $room,
            'rooms' => Room::select('id', 'name', 'price_night as price')->get(),
            'bookedDates' => $bookedDates
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'room_id' => 'required|integer|exists:\App\Models\Room,id',
            'start_date' => 'required|string|after_or_equal:today',
            'end_date' => 'required|string|after:start_date',
            'persons' => 'required|integer|min:1|max:10'
        ]);

        $attributes = [
            'start_date' => new DateTime($validated['start_date']),
            'end_date' => new DateTime($validated['end_date']),
            'user_id' => Auth::user()->id
        ];

        // Get total price
        $nights = date_diff(
            date_create($request['start_date']),
            date_create($request['end_date'])
        )->format('%a');

        $priceNight = Room::findOrFail($request['room_id'])->value('price_night');
        $attributes['price_total'] = $nights * $priceNight;

        // Placeholder for payment system
        $attributes['is_payed'] = 0;

        // validate request

        $reservation = new Reservation($attributes);
        $reservation->save();

        $reservation->room()->attach($request['room_id'], ['unit_price' => $priceNight, 'vat' => 0, 'quantity' => $nights]);

        // PayController::preparePayment($reservation);
        // return redirect(route('reservations.show', ['reservation' => $reservation]));
        return redirect("/pay/$reservation->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('admin.reservations-show', ['reservation' => Reservation::findOrFail($reservation->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.reservations-edit', ['reservation' => Reservation::findOrFail($reservation->id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        // validate request
        // save update to db
        // return message
        return 'Reservering informatie is aangepast';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        Reservation::destroy($reservation);
        return redirect('admin.dashboard');
    }

    protected function getBookedDates()
    {
        $reservations = Reservation::where('end_date', '>', date('Y-m-d'))->get();

        $bookedDates = [];

        foreach ($reservations as $reservation) {
            $begin = new DateTime($reservation->start_date);
            $end = new DateTime($reservation->end_date);

            $bookedDates[$reservation->room[0]->id][] = ['from' => $begin->format('d-m-Y'), 'to' => $end->format('d-m-Y')];
        }

        return $bookedDates;
    }
}
