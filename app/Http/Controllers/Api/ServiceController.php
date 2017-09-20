<?php

namespace App\Http\Controllers\api;

use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * get list service
     *
     * @return array
     */
    public function index(){
        $result = [
            'code'      => 500,
            'mesenger'  =>'GET_ERROR',
            'data'      =>[
            ]
        ];

        try{
            $data = $this->makeData(Service::all()->where('status',1));
            $result['data']     = $data;
            $result['code']     = 200;
            $result['mesenger'] = 'GET_SUCCESS';

        }catch (\Exception $e){

        }


        return response()->json([
            $result
        ]);
    }


    /**
     * get detail service
     *
     * @return array
     */
    public function detail($id = null){
        $result = [
            'code'      => 500,
            'mesenger'  =>'GET_ERROR',
            'data'      =>[
            ]
        ];

        try{

            $service = Service::find($id);
            $result['data']     = [
                'id'        => $service->id,
                'name'      => $service->name,
                'price'     => $service->price,
                'unit'      => $service->unit,
            ];
            $result['code']     = 200;
            $result['mesenger'] = 'GET_SUCCESS';

        }catch (\Exception $e){

        }


        return response()->json([
            $result
        ]);
    }




    /*
     *
     *
     */
    private function makeData($services){
        if (count($services) == 0 )
            return ;
        $data = [];
        foreach ($services as $key=>$service){

            $data[$key]['id']       = $service->id;
            $data[$key]['name']     = $service->name;
            $data[$key]['price']    = $service->price;
            $data[$key]['unit']     = $service->unit;
        }
        return $data;
    }
}
