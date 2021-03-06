<?php

namespace App\Http\Controllers\Api;

use App\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class MenuController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * get list menu
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
            $groupId = 1;
            $data = $this->makeData(Menu::all()->where('group_id',$groupId));
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

            $menu = Menu::find($id);
            $result['data']     = [
                'parent_id'         => $menu->parent_id,
                'name'              => $menu->name,
                'link_api'          => $menu->link_api
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
    private function makeData($menus){
        if (count($menus) == 0 )
            return ;
        $data = [];
        foreach ($menus as $key=>$menu){

            $data[$key]['parent_id']= $menu->parent_id;
            $data[$key]['name'] = $menu->name;
            $data[$key]['link_api'] = $menu->link_api;
        }
        return $data;
    }
}
