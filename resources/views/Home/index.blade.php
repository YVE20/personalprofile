@extends('layouts.app',['title' => 'Home'])
@section('content')
<div class="container-fluid">
    <div id="about" class="row about-section">
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Who am I ?</h3>
            <span class="line mb-5"></span>
            <h5 class="mb-3">A Web Developer Located In Our Lovely Earth</h5>
            <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.sit amet, Qui deserunt consequatur fugit repellendusillo voluptas?</p>
            <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button>
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Personal Info</h3>
            <span class="line mb-5"></span>
            <ul class="mt40 info list-unstyled">
                <li><span>Birthdate</span> : 28/12/2000</li>
                <li><span>Email</span> : euaggeliony28@gmail.com</li>
                <li><span>Phone</span> : + (62) 813-4774-8346</li>
                <li><span>Skype</span> : Yearico Vio Euaggelion </li>
                <li><span>Address</span> :  Salatiga </li>
            </ul>
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">My Expertise</h3>
            <span class="line mb-5"></span>
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>Web Development</h6>
                    <p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6> Communication </h6>
                    <p class="subtitle">voluptate commodi illo voluptatib.</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Resume Section-->
<section class="section" id="resume">
    <div class="container">
        <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Expertise</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="title text-danger">2022 - Present</h6>
                        <P> Back end | Indomaret Group </P>
                        <P class="subtitle"> Management Development Program Specialist. Being back end developer for KlikIndomaret Application using RestfulAPI </P>
                        <hr>
                        <h6 class="title text-danger">2020 - Present </h6>
                        <P> Fullstack Website Developer | Web Development </P>
                        <P class="subtitle"> Freelance of BMC (Bless Me Cosmetic), PDAM and Church Profile </P>
                        <hr>
                        <h6 class="title text-danger">2018 - 2021 </h6>
                        <P> Assistant Lecturer | SWCU <br>(Satya Wacana Christian University) </P>
                        <P class="subtitle">
                            <ul>
                                <li> Assistant Lecturer of Human and Computer Interaction </li>
                                <li> Assistant Lecturer of Operating System </li>
                                <li> Assistant Lecturer of Statistics and Probability </li>
                                <li> Assistant Lecturer of Introduction of Information Technology </li>
                                <li> Assistant Lecturer of Mathematics </li>
                                <li> Assistant Lecturer of Network Technology </li>
                                <li> Assistant Lecturer of Network Computer </li>
                            </ul>
                        </P>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Education</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="title text-danger"> 2022 - Present</h6>
                        <P> M.Cs Magister of Computer Science </P>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error corrupti recusandae obcaecati odit repellat ducimus cum, minus tempora aperiam at.</P>
                        <hr>
                        <h6 class="title text-danger"> 2018 - 2022</h6>
                        <P> B.E Computer Engineering </P>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, id officiis quas placeat quia voluptas dolorum rem animi nostrum quae.aliquid repudiandae saepe!.</P>
                        <hr>
                        <h6 class="title text-danger">2015 - 2018</h6>
                        <P> Vocational School Degree | Computer and Network Engineering </P>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</P>            
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Skills</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">
                       <h6> HTML5 &amp; CSS3</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>JavaScript</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>PHP</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>SQL</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6> C# </h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6> Framework <br> <i> (Laravel, CodeIgniter,ASP.NET, ASP.NET Core) </i> </h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Languages</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">
                       <h6> Indonesian </h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6> English </h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6> Hakka (Indonesia Chinesse Version) </h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-dark text-center">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-lg-3">
                <div class="row ">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">500</h1>
                        <p class="text-light mb-1">Hours Worked</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">4</h1>
                        <p class="text-light mb-1">Project Finished</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">4</h1>
                        <p class="text-light mb-1">Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">350</h1>
                        <p class="text-light mb-1">Coffee Drinked</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="service">
    <div class="container">
        <h2 class="mb-5 pb-4"><span class="text-danger">My</span> Services</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                    <div class="card-header has-icon">
                        <i class="ti-vector text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Planning</h5>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                    <div class="card-header has-icon">
                        <i class="ti-write text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Arrange</h5>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                    <div class="card-header has-icon">
                        <i class="ti-package text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">ERD</h5>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                   <div class="card-header has-icon">
                        <i class="ti-map-alt text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Mockup</h5>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                   <div class="card-header has-icon">
                        <i class="ti-bar-chart text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Developing</h5>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5">
                   <div class="card-header has-icon">
                        <i class="ti-support text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Maintenance</h5>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-dark py-5">
    <div class="container text-center">
        <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
        <button class="btn bg-primary w-lg" >Hire me</button>
    </div>
</section>
<!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        New
                    </a>
                    <a href="#" data-filter=".advertising">
                        Advertising
                    </a>
                    <a href="#" data-filter=".branding">
                        Branding
                    </a>
                    <a href="#" data-filter=".web">
                        Web
                    </a>
                </div>
                <div class="portfolio-container"> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/web-1.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/web-1.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>   
                        </div>             
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/web-2.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/web-2.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title"> Bless Me Cosmetic </h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> 
                        </div>                         
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/advertising-2.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/advertising-2.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">PDAM</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>    
                        </div>              
                    </div> 
                    <div class="col-md-6 col-lg-4 web">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/web-4.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/web-4.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>

                    <div class="col-md-6 col-lg-4 advertising"> 
                        <div class="portfolio-item">
                            <img src="<?= asset('img/advertising-1.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/advertising-1.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/web-3.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                           <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/web-3.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/advertising-3.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                           <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/advertising-3.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 advertising new"> 
                        <div class="portfolio-item">
                            <img src="<?= asset('img/advertising-4.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/advertising-4.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                                
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/branding-1.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/branding-1.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/branding-2.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/branding-2.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/branding-3.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/branding-3.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                    
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/branding-4.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/branding-4.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                      
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="<?= asset('img/branding-5.jpg') ?>" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                            <div class="content-holder">
                                <a class="img-popup" href="<?= asset('img/branding-5.jpg') ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                   
                    </div>
                </div> 
            </div>  
        </div>            
    </section>
    <!-- End of portfolio section -->

    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row">
                @foreach($artikel as $ar)
                    @php $split = explode('-',$ar->tanggal_terbit)  @endphp
                    <div class="blog-card">
                        <div class="img-holder">
                            <img src="<?= asset('img/blog1.jpg') ?>" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="content-holder">
                            <h6 class="title">{{$ar->judul}} </h6>
                            <p class="post-details">
                                <a href="#">By: Admin  </a>
                                <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                                <a href="#"><i class="ti-comment"></i> 123</a>
                            </p>
                            <p> <?= $ar->isi ?> </p>
                            <a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                            <p class="post-details"> Posted in : {{$split[2].'-'.$split[1].'-'.$split[0]}} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>
                        <form action="{{url('/sendMessage')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input  class="form-control" type="text" name="name" placeholder="Name *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message *" rows="7" required></textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="form-control btn btn-primary" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted"> + (62) 813-4774-8346</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted"> Salatiga .</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted"> euaggeliony28@gmail.com </span></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush