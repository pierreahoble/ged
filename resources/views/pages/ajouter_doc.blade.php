@extends('layout.base')



@section('contenu')


   <!-- start page title -->
   <div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Ajouter un document</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Formulaire</a></li>
                    <li class="breadcrumb-item active">Bienvenue chez Ged</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

@include('layout.messages')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Remplissez les éléments du formulaire</h4>
                <form class="outer-repeater" action="{{url('ajouter')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="form-group">
                                <label for="formname">Référence du document :</label>
                                <input type="text" name="reference" class="form-control @error('reference') is-invalid @enderror"  placeholder="Entrer la référence du document..." required>
                                @error('reference')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="formname">Titre du document :</label>
                                <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" placeholder="Entrer le titre du document..." required>
                                @error('titre')
                                     <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="formemail">Type du document :</label>
                                <select name="type" class="form-control @error('document') is-invalid @enderror" required>
                                    <option value="">Choisir un type de document</option>
                                    @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->libelle}}</option>                                        
                                    @endforeach
                                </select>
                                @error('type')
                                     <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="formemail">Format du document :</label>
                                <select name="format" class="form-control @error('format') is-invalid @enderror" required>
                                    <option value="">Choisir un format de document</option>                                    
                                    <option value="image">Image</option>                                        
                                    <option value="Docuement Pdf">Docuement Pdf</option>                                        
                                    <option value="Docuement word">Docuement Word</option>                                        
                                    <option value="Docuement txt">Docuement Text</option>                                        
                                </select>
                                @error('type')
                                     <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="formemail" >Chosir le document :</label>
                                <input type="file" class="form-control @error('document') is-invalid @enderror" accept="pdf,word" name="document">
                                @error('document')
                                     <div class="error">{{ $message }}</div>
                                @enderror
                            </div>


                            

                           

                            <div class="form-group">
                                <label for="formmessage">Description du document :</label>
                                <textarea id="formmessage" class="form-control @error('description') is-invalid @enderror" rows="3" name="description" placeholder="Entrer la description du document"></textarea>
                                @error('description')
                                     <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
    
@endsection