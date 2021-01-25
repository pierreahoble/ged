@extends('layout.base')

@section('style')
 <!-- DataTables -->
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/as.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

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
                        @foreach ($documents as $document)
                            
                        <tr>
                            <td>{{$document->numRef}}</td>
                            <td>{{$document->titre}}</td>
                            <td>{{$document->Type->libelle}}</td>
                           
                            <td>
                                <a type="button" href="{{url('modifier_'.$document->id)}}" class="btn btn-info btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil" style="color: white"></i></a>
                                <a type="button" href="{{url($document->nomDocument)}}#toolbar=0" class="btn btn-primary btn-rounded waves-effect waves-light" target="_blanc"><i class="mdi mdi-eye" style="color: white"></i></a>
                                <a type="button" data-id="{{$document->id}}" class="valider btn btn-danger btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center"><i class="mdi mdi-delete-circle" style="color: white"></i></a>
                            </td>
                           
                        </tr>
                        @endforeach
                       
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->


    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title mt-0">Supprimer un fichier</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Etes-vous sûre de vouloire supprimer ce fichier ?.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    

    
@endsection


@section('script')
<!-- Required datatable js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/as.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/as.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/as.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/as.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/js/datatable.js')}}"></script>
{{-- <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script> --}}

<script>
    $('.valider').each(function(){
        $(this).click(function(){
            var id =$(this).data('id')
            var lien = 'supprimer_'+id
            $('#envoyer').attr("href",lien)
          console.log(id);
        })
    })
</script>

    
@endsection