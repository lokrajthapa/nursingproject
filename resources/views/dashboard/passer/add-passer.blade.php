@extends('dashboard.master')

@section('content')
<div>
    <div class="grid-form1">

        <a href="{{ url('/all-passer') }}" class="btn btn-primary float-end"> View all Passer </a>

        @if(Session::has('passer_added'))
        <p class="alert alert-success"> {{ Session::get('passer_added') }}</p>
        @endif
        <form class="form-horizontal" action="{{ route('passer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2 text-right">
                        <label for="for description" >Name </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="col-xs-4" id="name" name="title" placeholder="Enter Passer Name" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-sm-2 text-right">
                    <label for="exampleInputFile">Upload Photo:</label>
                    </div>
                    <div class="col-sm-10">
                    <input type="file"  name="image" placeholder="image" onchange="previewFile(this)" onclick="alert('image file must be height:250px and width:250px')"  >

                    </div>
                </div>

            </div>


        
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2 text-right"></div>
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
                </div>
                
            </div>
        </form>
    </div>
    <div>

        <script src="{{ asset('ckeditor/ckeditor.js')}}"> </script>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <script>
            function hideImg() {
                document.getElementById("previewImg")
                    .style.display = "none";
            }
        </script>

        <script>
            function previewFile(input) {
                var file = $("input[type=file]").get(0).files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function() {
                        $('#previewImg').attr("src", reader.result);

                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

 @endsection