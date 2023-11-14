<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log; // send notifications via slack or any other means
use Illuminate\Support\Str;

use App\Models\Broker;


class BrokerController extends Controller
{

    private $uploadPath = "uploads/construction/";





    function __construct()
    {
         $this->middleware('permission:project-list|project-create|project-edit|project-delete', ['only' => ['index','show']]);
         $this->middleware('permission:project-create', ['only' => ['create','store']]);
         $this->middleware('permission:project-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }


    public function index() {

        $resource = Broker::select('id', 'status', 'company_name', 'state', 'authorized_p_name', 'authorized_p_contact' )->orderBy('id', 'Desc');


        if($resource->get()->isEmpty()) {
            $this->data['resource_status'] = 'No broker registrations found. You can launch a new project above to start-off';

        } else {
            $this->data['resource'] = $resource->get();

        }

        return view('broker', $this->data);
    }

    public function show($id) {
        $resource = Broker::find($id);

        dd($resource);
    }
}
