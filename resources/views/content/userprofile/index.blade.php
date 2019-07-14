@extends('layouts.default')

@section('content')

    <div class="card">

        <div class="card-header">
            {{ __('User Profile') }}
        </div>

        <div class="card-body">

            <div class="form-group row">
                <label for="subsidiary_id" class="col-sm-3 col-form-label">Subsidiary</label>
                <div class="col-sm-9">
                    <select id='sel_subsid'
                            name='sel_subsid'>

                        Hier weitermachen
                        {{$users_subsidiary_id = $subsidiaries}}

                        @foreach($subsidiaries as $subsidiary)

                            <option class="dropdown-content-samsa"
                                    value='{{ $subsidiary->id }}'>

                                {{ $subsidiary->description }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <label for="department_id" class="col-sm-3 col-form-label">Department</label>
                <div class="col-sm-9">
                    <select id='sel_depid'
                            name='sel_depid'>

                        @foreach($departments as $department)

                            <option class="dropdown-content-samsa"
                                    value='{{ $department->id }}'

                                    @if ($user_department_id == $department->id)
                                    selected
                                    @endif
                            >
                                {{ $department->description }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <label for="department_id" class="col-sm-3 col-form-label">Daily Working Hours</label>
                <div class="col-sm-9">

                    <input id="daily_working_hours"
                           type="double"
                           name="daily_working_hours"
                           value='{{ $workinghours }}'>


                </div>

                <div id="getRequestData">

                </div>

            </div>
        </div>


        <button type="button"
                id="save-resource"
                class="button-samsa">
            {{ __('Save Changes') }}
        </button>

        <script>

            $(document).ready(function () {

                $('#save-resource').click(function () {

                    var wkh = $('#daily_working_hours').val();

                    alert( "Handler for .click() called." );
                    console.log(wkh);

                    $.post('save-userprofile', {workinghours: wkh})


                })


            });

        </script>


    </div>


@endsection



{{--    $( "#save-resource" ).click(function() {
    $.ajax({
        url: '{{ Request::url() }}/save-userprofile',
    type: 'POST',
    data: {
    "workinghours": "2.2",
    "userssubsidiary":"1"
    },
    success: function (result) {
    swal("Saved", "This resource was added to your list of saved resources", "success")
    },
    error: function (result) {
    swal(({
    title: "Oops",
    text: "We ran into an issue trying to save this resource",
    icon: "error",
    button: "Dismiss",
    }))
    }
    });
    });--}}
