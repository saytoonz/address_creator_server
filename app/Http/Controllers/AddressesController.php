<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{

    public function store(Request $request)
    {

      try {
        $address =  Address::create($request->all());
         return [
             'error'=> false,
             'msg' => 'success',
             'data'=> $address,
         ];
      } catch (\Throwable $th) {
        return [
            'error'=> false,
            'msg' => 'an error occurred',
            'data'=> null,
        ];
      }
    }


    public function getAddresses()
    {
        try {
            $address =  Address::all();
             return [
                 'error'=> false,
                 'msg' => 'success',
                 'data'=> $address,
             ];
          } catch (\Throwable $th) {
            return [
                'error'=> false,
                'msg' => 'an error occurred',
                'data'=> null,
            ];
          }
    }
}
