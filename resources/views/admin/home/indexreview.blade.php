@extends('admin.master');
@section('content');

<div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="default-ordering" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="dt-no-sorting text-center">Action</th>
                                        <th>Id</th>
                                        <th>our_clients</th>
                                        <th>tagline</th>
                                        <th>Image</th>
                                        <th>name</th>
                                        <th>description</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($review as $review1)                                   
                                    <tr>
                                        <td class="text-center"><button class="btn btn-primary btn-sm" onclick="location.href='{{ url('/home/editreview/'.$review1->id)}}'">Edit</button></td>
                                        <td>{{$review1->id}}</td>
                                        <td>{{$review1->our_clients}}</td>
                                        <td>{{$review1->tagline}}</td>
                                        <td><img src="{{ url('uploads/review').'/'.$review1->image}}" style="height: 72px;"></td>
                                        <td>{{$review1->name}}</td>
                                        <td>{{$review1->description }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>

@endsection
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('theme')}}/plugins/table/datatable/datatables.js"></script>
<script>        
    $('#default-ordering').DataTable( {
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
           "sLengthMenu": "Results :  _MENU_",
        },
        "order": [[ 3, "desc" ]],
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7,
        drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered'); }
    } );
</script>
<!-- END PAGE LEVEL SCRIPTS -->
  <!-- BEGIN PAGE LEVEL STYLES -->
  <link rel="stylesheet" type="text/css" href="{{url('theme')}}/plugins/table/datatable/datatables.css">
  <link rel="stylesheet" type="text/css" href="{{url('theme')}}/plugins/table/datatable/dt-global_style.css">
  <!-- END PAGE LEVEL STYLES -->