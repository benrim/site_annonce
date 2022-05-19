@extends('layouts.app')


@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="{{asset('assets/img/img1.png')}}" alt="">
                    
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Déposez gratuitement votre annonce</h6>
                    <h1 class="mb-4">BIENVENUE SUR FORSA </h1>
                    <p class="mb-4">FORSA site des petites annonces. Trouvez des annonces à vendre et à louer plus facile et moins cher.Nos annonces et toutes les annonces en Tunisie</p>
                    <div class="d-flex align-items-center pt-2">
                    <div  style="width: 100%; max-width: 600px;">
                       <div class="input-group">
                          <input type="text" class="form-control " style="padding: 30px;" placeholder="Recherche annonce">
                           <div class="input-group-append">
                             <button class="btn btn-primary px-3">Rechercher</button>
                           </div>
                       </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
    
    <!-- Quote Request Start -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Forsa</h6>
                <h1 class="mb-4">Top Catégories</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-car text-dark pr-3" ></i>
                        <h6 class="text-white font-weight-medium m-0">auto</h6>
                    </div>
                    <p>Dénichez votre voiture d'occasion au meilleur prix et assurez-vous de faire le bon choix.</p>
                    <a class="border-bottom text-decoration-none" href="">voir</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-home text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">immobilier</h6>
                    </div>
                    <p>Trouvez le bien qui vous ressemble au meilleur prix et assurez-vous de faire le bon choix!</p>
                    <a class="border-bottom text-decoration-none" href="">voir</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class=" fa fa-2x fa-solid fa-couch text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">meubles</h6>
                    </div>
                    <p>Il est temps de donner une seconde vie à vos biens au meilleur prix et assurez-vous de faire le bon choix!</p>
                    <a class="border-bottom text-decoration-none" href="">voir</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-solid fa-paw text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">animaux</h6>
                    </div>
                    <p>votre compagnon de vie vous attend ici au meilleur prix et assurez-vous de faire le bon choix.</p>
                    <a class="border-bottom text-decoration-none" href="">voir</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container pt-md-5 pb-md-5">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img class="img-fluid w-100" src="{{asset('assets/img/img2.png')}}" alt="">
                </div>
                <div class="col-lg-8 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">DEPOSEZ VOTRE ANNONCE GRATUITEMENT !</h6>
                    <h1 class="mb-4">Plus de 13 000 Membres NOUS SUIVENT !</h1>
                    <p class="mb-4">Quelques photos, une bonne description et le prix de votre choix, c'est tout ce que vous avez à faire pour commencer !</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Faire des économies</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Echanger plus facilement entre particuliers</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 service client</h6></li>
                    </ul>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">commencer</a>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">s'inscrire</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
   
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Affichez les dernières annonces, les annonces populaires ou de façon aléatoire.</h6>
                <h1 class="mb-4">Nos annonces</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/maison.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Villa Elward</h5>
                                <span>250.000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="text-light" href="#">voir détails</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/salon2.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Sallon colorée</h5>
                                <span>10000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="text-light" href="#">voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/meuble.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">chambre enfant</h5>
                                <span>50000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                             <a class="text-light" href="#">voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/vehicule.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Fiat</h5>
                                <span>210000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                              <a class="text-light" href="#">voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/maison2.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">koukh</h5>
                                <span>500000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                              <a class="text-light" href="#">voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/vehicule2.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Fiat 10</h5>
                                <span>220000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                              <a class="text-light" href="#">voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/garderobe.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Garde_robe</h5>
                                <span>20000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                              <a class="text-light" href="#">voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="{{asset('assets/img/salon1.jpg')}}" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">sallon confort</h5>
                                <span>30000 DT</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="text-light" href="#">voir détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">TÉMOIGNAGE</h6>
                <h1 class="mb-4">Nos clients disent</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{asset('assets/img/testimonial-1.jpg')}}" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{asset('assets/img/testimonial-2.jpg')}}" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{asset('assets/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{asset('assets/img/testimonial-4.jpg')}}" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    
    <!-- Blog End -->
    <section class="locations section-pad border-bottom">
        <div class="section-heading-v1"><div class="container pt-5 pb-5">
        <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Annonces gratuites en Tunisie classées par ville</h6>
                <h1 class="mb-4">Les annonces par lieu</h1>
            </div>
        </div>
        
    
<div class="location-content-v2"><div class="container"><div class="row"><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Sfax "> Sfax </a></h5><p> 23&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=All"> All </a></h5><p> 58&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=El Haouaria"> El Haouaria </a></h5><p> 9&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=M'saken "> M'saken </a></h5><p> 6&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Bizerte"> Bizerte </a></h5><p> 13&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Nabeul"> Nabeul </a></h5><p> 25&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Monastir"> Monastir </a></h5><p> 9&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Mareth "> Mareth </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Kairouan"> Kairouan </a></h5><p> 7&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Mornag"> Mornag </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=La Marsa "> La Marsa </a></h5><p> 35&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Tunis "> Tunis </a></h5><p> 205&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ariana"> Ariana </a></h5><p> 130&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=El Mourouj"> El Mourouj </a></h5><p> 23&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Bou Mhel el-Bassatine"> Bou Mhel el-Bassatine </a></h5><p> 18&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Kerkennah "> Kerkennah </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Radès"> Radès </a></h5><p> 13&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Carthage "> Carthage </a></h5><p> 17&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Kélibia"> Kélibia </a></h5><p> 31&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ezzahra"> Ezzahra </a></h5><p> 10&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=La Soukra"> La Soukra </a></h5><p> 33&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Sahline Moôtmar"> Sahline Moôtmar </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Hammamet"> Hammamet </a></h5><p> 53&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Mateur"> Mateur </a></h5><p> 2&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Sousse "> Sousse </a></h5><p> 27&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Sidi Thabet"> Sidi Thabet </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Mahdia"> Mahdia </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Gremda "> Gremda </a></h5><p> 19&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Le Bardo "> Le Bardo </a></h5><p> 44&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Le Kram "> Le Kram </a></h5><p> 6&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Raoued"> Raoued </a></h5><p> 18&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Jemmal "> Jemmal </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=La Manouba"> La Manouba </a></h5><p> 10&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=La Goulette "> La Goulette </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ben Arous"> Ben Arous </a></h5><p> 35&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Lamta"> Lamta </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Mornaguia "> Mornaguia </a></h5><p> 7&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Dar Allouch "> Dar Allouch </a></h5><p> 6&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Kerkouane "> Kerkouane </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Oued Ellil"> Oued Ellil </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=El Hencha "> El Hencha </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Hammam Sousse "> Hammam Sousse </a></h5><p> 13&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ghardimaou"> Ghardimaou </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ouerdanine"> Ouerdanine </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Tebourba"> Tebourba </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Sahloul"> Sahloul </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Medjez el-Bab"> Medjez el-Bab </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Grombalia"> Grombalia </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Skanes"> Skanes </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Menzel Bourguiba"> Menzel Bourguiba </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Menzel Temime"> Menzel Temime </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Takelsa"> Takelsa </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Béni Khiar"> Béni Khiar </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Korba"> Korba </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Chihia "> Chihia </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Akouda"> Akouda </a></h5><p> 2&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Kalaa Seghira "> Kalaa Seghira </a></h5><p> 2&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Den Den"> Den Den </a></h5><p> 9&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Hammam El Guezaz"> Hammam El Guezaz </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Djedeida"> Djedeida </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Hammam Chott"> Hammam Chott </a></h5><p> 16&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Kalaât el-Andalous"> Kalaât el-Andalous </a></h5><p> 4&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Djerba"> Djerba </a></h5><p> 7&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Béja"> Béja </a></h5><p> 7&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Hergla "> Hergla </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Sidi Hassine "> Sidi Hassine </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Bou Argoub"> Bou Argoub </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=El Battan"> El Battan </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ras Jebel"> Ras Jebel </a></h5><p> 2&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Douar Hicher"> Douar Hicher </a></h5><p> 2&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Borj El Amri"> Borj El Amri </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Hammam Lif"> Hammam Lif </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Gafsa"> Gafsa </a></h5><p> 3&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Mohamedia-Fouchana"> Mohamedia-Fouchana </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ksour Essef"> Ksour Essef </a></h5><p> 5&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Ksibet Thrayet "> Ksibet Thrayet </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Soliman"> Soliman </a></h5><p> 2&nbsp;
 Annonces postées</p></div></div><div class="col-sm-3 col-md-3 col-lg-2 col-xs-6 match-height" style="height: 125.4px;"><div class="location text-center border-bottom"><h5> <a href="https://www.forsa.tn/villes/?location=Chatt Meriem"> Chatt Meriem </a></h5><p> 1&nbsp;
 Annonces postées</p></div></div></div></div></div></section>
@endsection
