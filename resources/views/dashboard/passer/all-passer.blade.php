@extends('dashboard.master')

@section('content')
   <div class="container">
                <div class="row">
                                <div class="col-lg-9 margin-tb">                                  
                                    <div class="pull-left" style="margin-top: 10px;">
                                        <a class="btn btn-primary" href=" {{ route('passer') }}"> Add Passer</a>
                                    </div>
                                </div>
                </div>
                @if(Session::has('success'))
                            <p class="alert alert-success"> {{ Session::get('success') }}</p>
                @endif
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Images</th>
                          
                            <th scope="col">Action</th>  



                           </tr>
                        </thead>
                        <tbody>
                           
                        @foreach (  $passers as $item)   
                           
                            <tr>
                                <th scope="row">{{ $item->id }} </th>
                                <td>  {{ $item-> title }} </td>

                            
                               
                               
                                <td> <img src="uploads/passerimg/{{$item->image }}" width="100px"> </td>
                                <td style="display: inline-flex;" >                                   
                                 <a class="btn btn-primary" href="{{ route('passer.edit',$item->id) }}">Edit</a>           
                                 <a href="{{ route('passer.delete',$item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')" >Delete </a>
                                 </td>


                           
                            </tr>

                            @endforeach   

                           
                            
                          
                        </tbody>
                        </table>

               
                </table>


   </div>



@endsection