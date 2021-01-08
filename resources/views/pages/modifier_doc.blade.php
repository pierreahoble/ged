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
                <form class="outer-repeater" enctype="multipart/form-data">
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="form-group">
                                <label for="formname">Titre du document :</label>
                                <input type="text" class="form-control" id="formname" placeholder="Entrer le titre du document...">
                            </div>

                            <div class="form-group">
                                <label for="formemail">Type du document :</label>
                                <input type="text" class="form-control" id="formemail" placeholder="Entrer le type du document...">
                            </div>

                            <div class="form-group">
                                <label for="formemail">Chosir le document :</label>
                                <input type="file" class="form-control" accept="pdf,word">
                            </div>


                            

                           

                            <div class="form-group">
                                <label for="formmessage">Description du document :</label>
                                <textarea id="formmessage" class="form-control" rows="3" placeholder="Entrer la description du document"></textarea>
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