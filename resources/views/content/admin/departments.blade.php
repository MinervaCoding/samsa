@extends('content.admin.index')

@section('test')


<div class="row">

    <div class="col-md-12">

        <h5 align="left">Add Data</h5>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>

        @endif

<!--     php

        if(\Session::has('success')){
            $message = Session::get('success');
            echo "<script type='text/javascript'>alert('$message');</script>";

        }; end php

-->

        <form method="post" action="{{url('department')}}">

            {{csrf_field()}}

            <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="description"/>
            </div>

            <div class="form-group">
                <input type="text" name="costcenter_number" class="form-control" placeholder="costcenter_number"/>
            </div>

            <div class="form-group">
                <select id='subsidiary_id' name='subsidiary_id'>
                    @foreach($subsidiaries as $subsidiary)
                        <option class="dropdown-content" value='{{ $subsidiary->id }}'>{{ $subsidiary->description }}</option>
                    @endforeach
                </select>
            </div>




            <div class="form-group">
                <input  type="submit"
                        class="btn btn-primary"
                        value="Create">

            </div>

        </form>

    </div>


</div>

    @endsection

