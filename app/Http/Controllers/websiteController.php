<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\checkWeb;

class websiteController extends Controller
{
    //for list all website
    public function index(){
        $service = new checkWeb();
        $service->checking();
        $dataWeb = DB::table("web")->get()->toArray();
        $dataArray =[];
        foreach ($dataWeb as $data){
            $dataArray []= [
                "id" =>$data->id,
                "name" => $data->name,
                "url" => $data->url,
                "status" => $data->status,
                "createdBy" =>$data->created_by,
                "createdAt" =>$data->created_at,
            ];
        }
        return view("main",compact("dataArray"));
    }

    public function addWeb(){
        return view("addWebsite");
    }
    public function store(){

//        Token CSRF => AodOg05v0vlV3Hknppb6laspQeHhdCnKIDPQ2Sgn
            $webName  = $_POST['webName'];
            $webUrl  = $_POST['webUrl'];
            $createdBy  = $_POST['createdBy'];
            $status  = $_POST['statusWeb'];
        $data=[
            "webName" => $webName,
            "webUrl" => $webUrl,
            "createdBy" => $createdBy,
            "status" => $status,
        ];

        $result = DB::table("web")->insert();
//        return json_encode($data,128);
    }
}
