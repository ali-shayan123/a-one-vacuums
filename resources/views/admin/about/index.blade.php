@extends('admin.master');
@section('content');

<div id="content" class="main-content">
    <style>
        div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
    </style>
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table style="width:100%" id="default-ordering" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Heading</th>
                                        <th>Span</th>
                                        <th>description</th>
                                        <th>Italic Description</th>
                                        <th>Why</th>
                                        <th>Why Span</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($about as $about1)                                   
                                    <tr>
                                        <td>{{$about1->id}}</td>
                                        <td>{{$about1->heading}}</td>
                                        <td>{{$about1->span}}</td>
                                        <td>{{$about1->description}}</td>
                                        <td>{{$about1->italic_desc}}</td>
                                        <td>{{$about1->why}}</td>
                                        <td>{{$about1->why_span}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        {{-- https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js --}}
        <script>
               $(document).ready(function() {
            $('#default-ordering').DataTable( {
                "scrollY": 200,
                "scrollX": true
            } );
        } );
        </script>
     
<!-- END PAGE LEVEL SCRIPTS -->
  <!-- BEGIN PAGE LEVEL STYLES -->
  <link rel="stylesheet" type="text/css" href="{{url('theme')}}/plugins/table/datatable/datatables.css">
  <link rel="stylesheet" type="text/css" href="{{url('theme')}}/plugins/table/datatable/dt-global_style.css">
  <!-- END PAGE LEVEL STYLES -->
@endsection
