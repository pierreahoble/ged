@extends('layout.base')



@section('contenu')


   <!-- start page title -->
   <div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Modifier un document</h4>

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


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Remplissez les éléments du formulaire</h4>
                <form class="outer-repeater" action="{{url('modificationDocument')}}" method="POST"  enctype="multipart/form-data">
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                                <input type="hidden" name="id" value="{{$document->id}}">
                                @csrf
                                <div data-repeater-list="outer-group" class="outer">
                                    <div data-repeater-item class="outer">
                                        <div class="form-group">
                                            <label for="formname">Référence du document :</label>
                                            <input type="text" name="reference" class="form-control @error('reference') is-invalid @enderror"  placeholder="Entrer la référence du document..." required value="{{$document->numRef}}">
                                            @error('reference')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
            
                                        <div class="form-group">
                                            <label for="formname">Titre du document :</label>
                                            <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" placeholder="Entrer le titre du document..." required value="{{$document->titre}}">
                                            @error('titre')
                                                 <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
            
                                        <div class="form-group">
                                            <label for="formemail">Type du document :</label>
                                            <select name="type" class="form-control @error('type') is-invalid @enderror" required >
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
                                            <label for="formemail" >Chosir le document :</label>
                                            <input type="file" class="form-control @error('document') is-invalid @enderror" accept="pdf,word" name="document">
                                            @error('document')
                                                 <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>  
            
                                        <div class="form-group">
                                            <label for="formmessage">Description du document :</label>
                                            <textarea id="formmessage" class="form-control @error('description') is-invalid @enderror" rows="3" name="description" placeholder="Entrer la description du document">{{$document->description}}</textarea>
                                            @error('description')
                                                 <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
    
@endsection