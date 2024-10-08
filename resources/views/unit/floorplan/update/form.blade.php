<div class="card">
    <div class="card-body">
        <h3 class="mb-1">Brochure Segment Update</h3>

        <div class="my-4">
            <form class="contact-form" action="{{ route('unit-floor-plan.update', ['unit_floor_plan' => $brochures->id])  }}" method="POST" enctype="multipart/form-data" id="dropzone"
            >
                @csrf
                @method('PATCH')

                <input name="floorplan_id" value="{{$brochures->id}}" hidden>
                <div class="flex-none w-100 my-4 ">
                    <a href="{{ route('unit-floor-plan.index') }}" class="btn btn-sm btn-outline-dark mt-3 my-auto">
                        <i class="bx bx-arrow-back"></i>
                        Back
                    </a>
                    <button
                        type="submit"
                        class="btn btn-sm btn-dark my-auto">
                        Submit to Draft
                    </button>
                </div>

                <div class="flex flex-wrap h-full my-auto" >


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @csrf

                    <div class="mb-3 mx-auto ">
                        <label class="form-label font-bold">REQUIREMENTS</label>
                        <table>
                            <tr>
                                <td style="width: 200px">Accepted File Type</td>
                                <td> : .pdf</td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Max File Size</td>
                                <td> : 50 Mb</td>
                            </tr>
                        </table>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="fallback w-full mx-auto mt-4 mb-0">
                                    <label class="form-label">
                                        Segment Name
                                    </label>
                                    <input
                                        type="text"
                                        id="segment_name"
                                        name="segment_name"
                                        placeholder="Riveira - Arabic"
                                        class="form-control @error('segment_name') border border-solid border-danger  @enderror"

                                        value="{{ $brochures->name }}"
                                    >
                                    <span class="text-muted font-size-10">Provide a name to refer the brochures you can use to link to any projects</span>
                                    @error('segment_name')
                                        <div class="text-danger font-size-10">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="fallback w-full mx-auto my-4">
                                    <label class="form-label">
                                        Multiple File Uploader
                                    </label>
                                    <input type="file" name="files[]" id="inputFile" multiple class="form-control p-1 @error('files') border border-solid border-danger  @enderror" accept="application/pdf">
                                    <span class="text-muted font-size-10">You may choose multiple files if you wish to upload.</span>
                                    @error('files')
                                        <div class="text-danger font-size-10">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="row p-4">
            @foreach($brochures_files as $data)
                <div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="inline-block align-baseline my-4 text-center">
                        <form action="{{ route('unit-floor-plan.destroy', ['unit_floor_plan' => $data->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-dark btn-sm">Delete</button>
                        </form>
                    </div>
                    <div class="">
                        <iframe src="{{ url('storage/units/floorplans/'.$data->unit_floorplan->id.'/'.$data->name) }}" width="" height="400">
                        </iframe>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="m-4">

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


