<div class="container">
    <div class="float-right">
        <a href="#modalForm" data-toggle="modal" data-href="{{url('Projects/create')}}"
           class="btn btn-primary">New</a>
    </div>
    <h1 style="font-size: 1.3rem">Project List (Laravel CRUD, Search, Sort - Modal Form)</h1>
    <hr/>
    <div class="row">
        <div class="col-sm-5 form-group">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('Projects')}}?search='+this.value)"
                       placeholder="Search Number or Description" name="search"
                       type="text" id="search_number"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-warning"
                            onclick="ajaxLoad('{{url('Projects')}}?search='+$('#search').val())"
                    >
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered bg-light">
        <thead class="bg-dark" style="color: white">
        <tr>
            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('Projects?field=project_number&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Projectnumber
                </a>
                {{request()->session()->get('field')=='project_number'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}

            </th>
            <th style="vertical-align: middle">

                <a href="javascript:ajaxLoad('{{url('Projects?field=description&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Description
                </a>
                {{request()->session()->get('field')=='description'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}


            </th>
            <th style="vertical-align: middle">
                -<a href="javascript:ajaxLoad('{{url('Projects?field=structure_element_type&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Element Type
                </a>
                {{request()->session()->get('field')=='structure_element_type'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}


            </th>
            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('projects?field=country_of_execution&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Country of Execution
                </a>
                {{request()->session()->get('field')=='country_of_execution'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}


            </th>
            <th style="vertical-align: middle">
                Status
            </th>
            <th style="vertical-align: middle">
                Responsible
            </th>

            <th width="130px" style="vertical-align: middle">Action</th>
        </tr>
        </thead>
        <tbody>
        @php
            //$i=1;
        @endphp
        @foreach($structure_elements as $structure_element)
            <tr>
                <th style="vertical-align: middle;text-align: center">{{ $structure_element->id}}</th>
                <td style="vertical-align: middle">{{ $structure_element->project_number }}</td>
                <td style="vertical-align: middle">{{ $structure_element->description }}</td>

                <td style="vertical-align: middle">{{ $structure_element->structure_element_type->description}}</td>

                <td style="vertical-align: middle">{{ $structure_element->country_of_execution->description}}</td>
                <td style="vertical-align: middle">{{ $structure_element->max_status}}</td>
                <td style="vertical-align: middle">{{ $structure_element->responsible}}</td>
                <td style="vertical-align: middle" align="center">
                    <a class="btn btn-primary btn-sm" title="Edit" href="#modalForm" data-toggle="modal"
                       data-href="{{url('Projects/update/'.$structure_element->id)}}">
                        Edit</a>
                    <input type="hidden" name="_method" value="delete"/>
                    <a class="btn btn-danger btn-sm" title="Delete" data-toggle="modal"
                       href="#modalDelete"
                       data-id="{{$structure_element->id}}"
                       data-token="{{csrf_token()}}">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <nav>
        <ul class="pagination justify-content-end">
            {{$structure_elements->links('vendor.pagination.bootstrap-4')}}
        </ul>
    </nav>
</div>