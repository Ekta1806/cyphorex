<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Car;
use Datatables;
use Redirect;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Vehicle::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('name', '<a href="{{ route("vehical_cat",["id"=>$id]) }}" >{{$name}}</a>')
                    ->rawColumns(['name'])
                    ->make(true);
        }
      
        return view('users');
    }
    public function vehicleCat($id){
        $veh = Vehicle::where('id','=',$id)->select('id','name')->first();
        $car = Car::find($id);
        return view('cars',compact('veh','car'));
    }

    public function bookingFormSubmit(Request $req,$id){
        $req->validate([
            'name'=>'required',
            'book_date' => 'required',
            'booking_for' => 'required',
        ]);
        $car = Car::find($id);
        if($car->status == "Booked"){
            return redirect::back()->with('error', 'Already Booked Choose Another one Please');
        }else{
            $data= Car::find($req->id);
            $data->status = "Booked";
            $date = str_replace('/', '-', $req->book_date);
            $newDate = date("Y-m-d", strtotime($date));
            $data->book_date=$newDate;
            $data->booking_for= $req->booking_for;
            $data->name=$req->name;
            $data->save();
            return redirect::back()->with('success', 'Your Car Booked Successfully...');             
        }

    }
    public function bookingForm($id){
        $car = Car::find($id);
        return view("bookingForm",compact("car"));
    }

    public function addcategorySubmit(Request $req){
         $req->validate([
            'name'=>'required',
        ]);
        $data = New Vehicle();
        $data->name=$req->name;
        $data->save();
         return redirect::back()->with('success', 'Vehical Added SuccessFully.....');
    }

    public function addsubcategorySubmit(Request $req){
         $req->validate([
            'car_name'=>'required',
            'vehicle_id' => 'required',
        ]);
        $data = New Car();
        $data->car_name = $req->car_name;
        $data->vehicle_id = $req->vehicle_id;
        $data->name="";
        $data->save();
         return redirect::back()->with('success', 'Car Added SuccessFully.....');
    }
}
