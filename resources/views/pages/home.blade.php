@extends('layout.base')

@section('style')
 <!-- DataTables -->
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

 <!-- Responsive datatable examples -->
 <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    
@endsection



@section('contenu')


<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Liste des documents</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Bienvenu chez GED</li>
                </ol>
            </div>

        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

              

                <table id="datatable" class="datatable table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Numéro de référence</th>
                            <th>Titre du documents</th>
                            <th>type de document</th>
                          
                            <th>Actions</th>
                           
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                           
                            <td>63</td>
                            <td><button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button></td>
                           
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                          
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                          
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                           
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>23</td>
                            <td><button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button></td>
                          
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>30</td>
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button></td>
                           
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            
                            <td>
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"> <i class="mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="mdi mdi-delete-circle"></i></button></td>
                            
                        </tr>
                       
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->


    

    
@endsection


@section('script')
<!-- Required datatable js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/js/datatable.js')}}"></script>
{{-- <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script> --}}

    
@endsection