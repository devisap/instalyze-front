

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h1><?= $title?></h1>
                <!-- <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav> -->
                <div class="separator mb-5"></div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="mb-4">Search Data</h5>
                                <div class="mb-2">Hashtag</div>
                                <input class="mb-4" data-role="tagsinput" type="text">
                                <div class="mb-2 mt-4">Date</div>
                                <!-- <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="start" placeholder="Start">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="input-sm form-control" name="end" placeholder="End">
                                </div> -->
                                <div class="input-group">
                                    <input type="text" class="form-control text-center" value="<?= date('j F Y')?>" name="start" placeholder="Start" disabled>
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="pickerDate form-control text-center" name="end" placeholder="End">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="mb-4">Current Search</h5>
                                <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #95c940;">#cristiano</span>
                                <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #094d38;">#messi</span>
                                <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #4c1f8f;">#gonzales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list disable-text-selection" data-check-all="checkAll">
                    <div class="col-xl-6 col-lg-6 col-12 col-sm-12 mb-4">
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row mb-3">
                                    <a href="#">
                                        <img src="<?= site_url('assets')?>/img/profiles/l-1.jpg" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Podcasting operational change management inside of workflows to
                                    establish a framework. Taking seamless key performance indicators
                                    offline to maximise the long tail. Keeping your eye on the ball while
                                    performing a deep dive on the start-up mentality.
                                </p>
                                <a href="<?= site_url('assets')?>/img/details/5.jpg" class="lightbox">
                                    <img class="img-fluid border-0 border-radius mb-3" src="<?= site_url('assets')?>/img/details/5.jpg">
                                </a>
                                <div>
                                    <div class="post-icon mr-3 d-inline-block"><a href="#"><i class="iconsminds-like mr-1"></i></a> <span>211
                                            Likes</span></div>
                                    <div class="post-icon d-inline-block"><i class="iconsminds-speach-bubble-11 mr-1"></i> <span>2
                                            Comments</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row mb-3">
                                    <a href="#">
                                        <img src="<?= site_url('assets')?>/img/profiles/l-1.jpg" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Podcasting operational change management inside of workflows to
                                    establish a framework. Taking seamless key performance indicators
                                    offline to maximise the long tail. Keeping your eye on the ball while
                                    performing a deep dive on the start-up mentality.
                                </p>
                                <a href="<?= site_url('assets')?>/img/details/5.jpg" class="lightbox">
                                    <img class="img-fluid border-0 border-radius mb-3" src="<?= site_url('assets')?>/img/details/5.jpg">
                                </a>
                                <div>
                                    <div class="post-icon mr-3 d-inline-block"><a href="#"><i class="iconsminds-like mr-1"></i></a> <span>211
                                            Likes</span></div>
                                    <div class="post-icon d-inline-block"><i class="iconsminds-speach-bubble-11 mr-1"></i> <span>2
                                            Comments</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row mb-3">
                                    <a href="#">
                                        <img src="<?= site_url('assets')?>/img/profiles/l-1.jpg" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Podcasting operational change management inside of workflows to
                                    establish a framework. Taking seamless key performance indicators
                                    offline to maximise the long tail. Keeping your eye on the ball while
                                    performing a deep dive on the start-up mentality.
                                </p>
                                <a href="<?= site_url('assets')?>/img/details/5.jpg" class="lightbox">
                                    <img class="img-fluid border-0 border-radius mb-3" src="<?= site_url('assets')?>/img/details/5.jpg">
                                </a>
                                <div>
                                    <div class="post-icon mr-3 d-inline-block"><a href="#"><i class="iconsminds-like mr-1"></i></a> <span>211
                                            Likes</span></div>
                                    <div class="post-icon d-inline-block"><i class="iconsminds-speach-bubble-11 mr-1"></i> <span>2
                                            Comments</span></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <nav class="mt-4 mb-3">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item ">
                                    <a class="page-link first" href="#">
                                        <i class="simple-icon-control-start"></i>
                                    </a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link prev" href="#">
                                        <i class="simple-icon-arrow-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link next" href="#" aria-label="Next">
                                        <i class="simple-icon-arrow-right"></i>
                                    </a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link last" href="#">
                                        <i class="simple-icon-control-end"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</main>
<script> 

</script>