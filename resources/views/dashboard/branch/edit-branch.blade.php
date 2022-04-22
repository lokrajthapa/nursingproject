@extends('dashboard.master')

@section('content')
<div>
    <div class="grid-form1">


        <a href="{{ url('/all-branch') }}" class="btn btn-primary float-end"> View All Child Page Contents </a>

        @if(Session::has('branch_updated'))
        <p class="alert alert-success"> {{ Session::get('childcontent_updated') }}</p>
        @endif
        <form class="form-horizontal" action="{{ route('branch.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $branch->id }}" />



            <div class="form-group">

            <div class="row">
                            <div class="col-sm-2 text-right">
                                <label for="Branch name">Branch name:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="branch_name" placeholder="Enter Branch Name" value="{{ $branch->branch_name }}">
                            </div>
             </div>



            </div>
            <div class="form-group">   

                <div class="row">
                    <div class="col-sm-2 text-right">
                        <label for="for Address"> Address: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="address" placeholder="Enter Address Branch" value="{{ $branch->address }}">
                    </div>
                </div>
            </div>  
            <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2 text-right">
                                <label for="Phone number"> Phone Number: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="phone_no" placeholder="Enter phone number" value="{{ $branch->Phone_no }}">
                            </div>
                        </div>



                    </div>
            <div class="form-group">

                <div class="row">
                    <div class="col-sm-2 text-right">
                        <label for="image">Image:</label>
                    </div>
                    <div class="col-sm-10">

                        <img src="../uploads/Branchimg/{{ $branch->image }}" height="100">
                        

                        <input style="margin-top: 10px;" type="file" onclick="previewFile(this)" name="image" placeholder="image">
                        <img id="previewImg" src="" alt="image" onerror='this.style.display = "none"'>

                    </div>
                </div>

            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2 text-right">
                        <label for="for description">Description: </label>
                    </div>
                    <div class="col-sm-10">
                        <textarea id="editor" name="text" class="col-sm-2 control-label hor-form" placeholder="Write here Description" value>

                        {{ $branch->description }}
                        </textarea>
                    </div>
                </div>

            </div>








            <div class="form-group">
                <div class="row">
                    <div class="col-sm-2 text-right"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div>

        <script src="{{ asset('ckeditor/ckeditor.js')}}"> </script>




        <script>
            let uri = "/storage/uploads/";
            class MyUploadAdapter {
                constructor(loader) {
                    // The file loader instance to use during the upload.
                    this.loader = loader;
                }

                // Starts the upload process.
                upload() {
                    return this.loader.file
                        .then(file => new Promise((resolve, reject) => {
                            this._initRequest();
                            this._initListeners(resolve, reject, file);
                            this._sendRequest(file);
                            // alert(file.name);
                        }));
                }

                // Aborts the upload process.
                abort() {
                    if (this.xhr) {
                        this.xhr.abort();
                    }
                }

                // Initializes the XMLHttpRequest object using the URL passed to the constructor.
                _initRequest() {
                    const xhr = this.xhr = new XMLHttpRequest();

                    // Note that your request may look different. It is up to you and your editor
                    // integration to choose the right communication channel. This example uses
                    // a POST request with JSON as a data structure but your configuration
                    // could be different.
                    xhr.open('POST', "{{ route('uploadbranch',['_token'=>csrf_token() ] ) }}", true);
                    xhr.responseType = 'json';
                }

                // Initializes XMLHttpRequest listeners.
                _initListeners(resolve, reject, file) {
                    const xhr = this.xhr;
                    const loader = this.loader;
                    const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                    xhr.addEventListener('error', () => reject(genericErrorText));
                    xhr.addEventListener('abort', () => reject());
                    xhr.addEventListener('load', () => {
                        const response = xhr.response;


                        ////alert(response.fileName);


                        // This example assumes the XHR server's "response" object will come with
                        // an "error" which has its own "message" that can be passed to reject()
                        // in the upload promise.
                        //
                        // Your integration may handle upload errors in a different way so make sure
                        // it is done properly. The reject() function must be called when the upload fails.
                        if (!response || response.error) {
                            return reject(response && response.error ? response.error.message : genericErrorText);
                        }

                        // If the upload is successful, resolve the upload promise with an object containing
                        // at least the "default" URL, pointing to the image on the server.
                        // This URL will be used to display the image in the content. Learn more in the
                        // UploadAdapter#upload documentation.


                        resolve({
                            default: uri + response.fileName

                        });
                    });

                    // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
                    // properties which are used e.g. to display the upload progress bar in the editor
                    // user interface.
                    if (xhr.upload) {
                        xhr.upload.addEventListener('progress', evt => {
                            if (evt.lengthComputable) {
                                loader.uploadTotal = evt.total;
                                loader.uploaded = evt.loaded;
                            }
                        });
                    }
                }

                // Prepares the data and sends the request.
                _sendRequest(file) {
                    // Prepare the form data.
                    const data = new FormData();
                    data.append('uploadbranch', file);

                    // Important note: This is the right place to implement security mechanisms
                    // like authentication and CSRF protection. For instance, you can use
                    // XMLHttpRequest.setRequestHeader() to set the request headers containing
                    // the CSRF token generated earlier by your application.

                    // Send the request.
                    this.xhr.send(data);
                }
            }

            // ...

            function MyCustomUploadAdapterPlugin(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                    // Configure the URL to the upload script in your back-end here!
                    return new MyUploadAdapter(loader);
                };
            }

            // ...

            ClassicEditor
                .create(document.querySelector('#editor'), {
                    extraPlugins: [MyCustomUploadAdapterPlugin],

                    // ...
                })
                .catch(error => {
                    console.log(error);
                });
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