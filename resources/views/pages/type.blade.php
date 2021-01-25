@extends('layout.base')



@section('contenu')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Form Elements</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Ajouter un utilisateur</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->


@include('layout.messages')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Ajouter un tyoe de docuemnt</h4>
                <p class="card-title-desc"></p>

                <form action="{{url('ajouterType')}}" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Type de document</label>
                        <div class="col-md-10">
                            <input class="form-control @error('typeDocument') is-invalid @enderror" name="typeDocument" type="text" value="{{old('typeDocument')}}" id="example-text-input">
                            @error('typeDocument')
                                <div class="error">{{ $message }}</div>
                             @enderror
                        </div>
                    </div>

                   
                   
           
                   
                   
                    <div class="mt-5">
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Ajouter</button>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection