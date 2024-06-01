@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="accordionFAQ">
                    <!-- Question 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="badge badge-primary">Q1</span> Qu'est-ce que Laravel?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                            <div class="card-body">
                                Laravel est un framework PHP open-source utilisé pour le développement d'applications web. Il offre une syntaxe élégante et expressive qui permet aux développeurs de créer des applications de manière rapide et efficace.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="badge badge-primary">Q2</span> Comment puis-je installer Laravel?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                            <div class="card-body">
                                Vous pouvez installer Laravel en utilisant Composer, un gestionnaire de dépendances pour PHP. Tout d'abord, assurez-vous d'avoir Composer installé sur votre système, puis exécutez la commande composer create-project --prefer-dist laravel/laravel nom-de-votre-projet dans votre terminal pour créer un nouveau projet Laravel.
                            </div>
                        </div>
                    </div>

                    <!-- Ajoutez d'autres questions et réponses ici -->

                </div>
            </div>
        </div>
    </div>

    


    <footer class="footer fixed-bottom py-3 bg-dark text-white">
    <div class="container text-center">
        <span class="text-muted">© 2024 Votre Nom d'Entreprise. Tous droits réservés.</span>
    </div>
</footer>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.collapse').on('shown.bs.collapse', function(){
                $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");
            }).on('hidden.bs.collapse', function(){
                $(this).parent().find(".fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");
            });
        });
    </script>
@endsection