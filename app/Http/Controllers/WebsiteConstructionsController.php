<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteConstruction;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log; // send notifications via slack or any other means
use Illuminate\Support\Str;
use Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf;

class WebsiteConstructionsController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:construction-list|construction-create|construction-edit|construction-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:construction-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:construction-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:construction-delete', ['only' => ['destroy']]);
    // }

    public function index()
    {
        $this->data['resources'] = $resources = WebsiteConstruction::where('status', '1')->get();
        return view('constructions', $this->data);
    }

    
    public function create()
    {
        return view('website.constructions.create.index');
    }

    
    public function store(Request $request)
    {
        $bool=0;


        if($bool==0)
        {
            $resource = new WebsiteNew();
            $resource->status = '1';
            $resource->slug_link = Str::slug($request->title);
            
            $resource->title = $request->title;
            $resource->title_ar = $request->title_ar;

            $resource->description = $request->description;
            $resource->description_ar = $request->description_ar;

            $resource->meta_title = $request->meta_title;
            $resource->meta_title_ar = $request->meta_title_ar;

            $resource->meta_description = $request->meta_description;
            $resource->meta_description_ar = $request->meta_description_ar;

            $resource->meta_keywords = $request->meta_keywords;
            $resource->meta_keywords_ar = $request->meta_keywords_ar;

            $resource->map_image = $request->map_image;
            $resource->save();

            $resource_id = $resource->id;

            if($request->hasfile('header_images'))
            {
                $files = [];

                foreach($request->file('header_images') as $key => $image)
                {
                    $image_name = $image->hashName();
                    $image->storeAs('website-news/'.$resource_id.'/header_image/', $image_name, 'public'); //nonsecured storage - has public access
                    $resource_segment_file = WebsiteNew::find($resource_id);
                    $resource_segment_file->header_image = $image_name;
                    $resource_segment_file->save();
                }
            }


            if($request->hasfile('thumbnails'))
            {
                $files = [];

                foreach($request->file('thumbnails') as $key => $image)
                {
                    $image_name = $image->hashName();
                    $image->storeAs('website-news/'.$resource_id.'/thumbnail/', $image_name, 'public'); //nonsecured storage - has public access
                    $resource_segment_file = WebsiteNew::find($resource_id);
                    $resource_segment_file->thumbnail = $image_name;
                    $resource_segment_file->save();

                }
            }


            if($request->hasfile('map_image'))
            {
                $files = [];

                foreach($request->file('map_image') as $key => $image)
                {
                    $image_name = $image->hashName();
                    $image->storeAs('website-news/'.$resource_id.'/map/', $image_name, 'public'); //nonsecured storage - has public access
                    $resource_segment_file = WebsiteNew::find($resource_id);
                    $resource_segment_file->thumbnail = $image_name;
                    $resource_segment_file->save();
                }
            }


            try {
                if($request->hasfile('files'))
                {
                    $files = [];

                    foreach($request->file('files') as $key => $image)
                    {
                        $image_name = $image->hashName();
                        $image->storeAs('website-news/'.$resource_id.'/images/', $image_name, 'public'); //nonsecured storage - has public access
                        $resource_segment_file = new WebsiteNewImage();
                        $resource_segment_file->news_id = $resource_id;
                        $resource_segment_file->name = $image_name;
                        $resource_segment_file->save();

                    }
                }
            } catch (\Exception $e) {
                return Redirect::back()->withErrors(['message', $e->getMessage() ]);
            }


            return $this->index();
        }
        else
        {   dd('fail');
            return Redirect::back()->withErrors('Record is already Exist');
        }
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
