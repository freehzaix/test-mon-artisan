<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test programmation Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 500px;">
            <div class="carousel-item active">
                <img src="./images/s1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/s2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/s3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulaire de déclaration de sinistre</h5>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('sinistrePost') }}" method="post">
                    @csrf
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="assurance" class="form-label">Assurance <b style="color: red;">*</b></label>
                                    <select class="form-select" id="assurance" name="assurance_id" aria-label="Default select example">
                                        <option>Sélectionnez l'assurance</option>
                                        @foreach ($assurances as $item)
                                            <option value="{{ $item->id }}"> {{ $item->assurance }} </option>
                                        @endforeach
                                      </select>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="numero_police" class="form-label">Numéro de police <b style="color: red;">*</b></label>
                                    <input type="text" id="numero_police" name="numero_police" class="form-control" placeholder="Veuillez saisir le numéro">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom et prénom <b style="color: red;">*</b></label>
                                    <input type="text" id="nom" name="nom_prenom" class="form-control" placeholder="Veuillez saisir votre nom et prénom">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="contact1" class="form-label">Contact 1 <b style="color: red;">*</b></label>
                                    <input type="text" id="contact1" name="contact1" class="form-control" placeholder="Veuillez saisir votre numéro de téléphone principal">
                                  </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="contact2" class="form-label">Contact 2</label>
                                    <input type="text" id="contact2" name="contact2" class="form-control" placeholder="Veuillez saisir votre numéro de téléphone secondaire">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="lieu" class="form-label">Lieu <b style="color: red;">*</b></label>
                                    <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Veuillez renseigner le lieu">
                                  </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nature_intervention" class="form-label">Nature d'intervention <b style="color: red;">*</b></label>
                                    <select class="form-select" id="nature_intervention" name="nature_intervention_id" aria-label="Default select example">
                                        <option>Sélectionnez la nature</option>
                                        @foreach ($natureInterventions as $item)
                                            <option value="{{ $item->id }}"> {{ $item->nature_intervention }} </option>
                                        @endforeach
                                      </select>
                                  </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="date_sinistre" class="form-label">Date de sinistre</label>
                                    <input type="date" id="date_sinistre" name="date_sinistre" class="form-control" placeholder="Veuillez saisir la date">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"> 
                                    <label for="details">Détails <b style="color: red;">*</b></label>
                                    <textarea class="form-control" name="details" placeholder="Détails" id="details" style="height: 100px"></textarea>
                                  </div>
                            </div>
                        </div>
                    </p>
                    <button class="btn btn-primary">Soumettre le formulaire</button>
                </form>
            </div>
        </div>
        <br /> <br />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
