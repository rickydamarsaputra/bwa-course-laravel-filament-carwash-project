<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\CarService;
use App\Models\CarStore;
use App\Models\City;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $services = CarService::with(['storeServices'])->get();

        return view('front.index', compact('cities', 'services'));
    }

    public function search(Request $request)
    {
        $cityId = $request->input('city_id');
        $serviceTypeId = $request->input('service_type');

        $carService = CarService::where('id', $serviceTypeId)->first();
        if (!$carService) {
            return redirect()->back()->with('error', 'Service type not found.');
        }

        $stores = CarStore::whereHas('storeServices', function ($query) use ($carService) {
            $query->where('car_service_id', $carService->id);
        })->where('city_id', $cityId)->get();

        $city = City::find($cityId);
        session()->put('serviceTypeId', $request->input('service_type'));

        return view('front.stores', [
            'stores' => $stores,
            'carService' => $carService,
            'cityName' => $city ? $city->name : 'Unknow City',
        ]);
    }

    public function details(CarStore $carStore)
    {
        $serviceTypeId = session()->get('serviceTypeId');
        $carService = CarService::where('id', $serviceTypeId)->first();

        return view('front.details', compact('carStore', 'carService'));
    }

    public function booking(CarStore $carStore)
    {
        session()->put('carStoreId', $carStore->id);

        $serviceTypeId = session()->get('serviceTypeId');
        $service = CarService::where('id', $serviceTypeId)->first();

        return view('front.booking', compact('carStore', 'service'));
    }

    public function booking_store(StoreBookingRequest $request)
    {
        $customerName = $request->input('name');
        $customerPhoneNumber = $request->input('phone_number');
        $customerTimeAt = $request->input('time_at');

        session()->put('customerName', $customerName);
        session()->put('customerPhoneNumber', $customerPhoneNumber);
        session()->put('customerTimeAt', $customerTimeAt);

        $serviceTypeId = session()->get('serviceTypeId');
        $carStoreId = session()->get('carStoreId');

        return redirect()->route('front.booking.payment', [$carStoreId, $serviceTypeId]);
    }

    public function booking_payment(CarStore $carStore, CarService $carService)
    {
        session()->put('totalAmount', $carService->price);
        return view('front.payment', compact('carStore', 'carService'));
    }
}
