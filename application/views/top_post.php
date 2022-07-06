

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
                            <div class="card-header" style="cursor: pointer;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="mt-3">Search Data</h5>
                                    </div>
                                    <div class="col">
                                        <i class="iconsminds-arrow-down-in-circle mt-3" style="float: right;font-size: 18px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body collapse" id="collapseExample">
                                <div class="mb-2">Hashtag</div>
                                <input class="mb-4" data-role="tagsinput" type="text">
                                <div class="mb-2 mt-4">Date</div>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control text-center" value="<?= date('j F Y')?>" name="start" placeholder="Start" disabled>
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="pickerDate form-control text-center" name="end" placeholder="End">
                                </div>
                                <button class="btn btn-sm btn-primary btn-lg btn-shadow" style="float: right;">SEARCH</button>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs justify-content-center" role="tablist">
                                    <?php
                                        $first = true;
                                        foreach ($hashtags as $hashtag) {
                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?= $first == true ? 'active' : ''?>" id="<?= $hashtag['tag']?>-tab" data-toggle="pill" href="#<?= $hashtag['tag']?>" role="tab" aria-controls="<?= $hashtag['tag']?>" aria-selected="true">#<?= $hashtag['tag']?></a>
                                        </li>
                                    <?php $first = false; }?>
                                </ul>          
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                        <?php
                            $first = true;
                            foreach ($hashtags as $hashtag) {
                        ?>
                            <div class="tab-pane fade show <?= $first == true ? 'active' : ''?>" id="<?= $hashtag['tag']?>" role="tabpanel" aria-labelledby="<?= $hashtag['tag']?>-tab">
                                <div class="row list disable-text-selection" data-check-all="checkAll">
                                    <?php
                                        foreach ($posts[$hashtag['tag']] as $post) {
                                    ?>
                                        <div class="col-xl-6 col-lg-6 col-12 col-sm-12 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row mb-3">
                                                        <a href="#">
                                                            <img src="http://127.0.0.1:5000/upload-profile/<?= $post->SHORTCODE_DD?>.jpg" alt="" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                                        </a>
                                                        <div class="pl-3">
                                                            <a href="https://instagram.com/<?= $post->USERNAME_DD?>" target="_blank">
                                                                <p class="font-weight-medium mb-0 "><?= $post->FULLNAME_DD?></p>
                                                                <p class="text-muted mb-0 text-small"><?= date_format(date_create($post->TAKENAT_DD), 'd.m.Y - H:i')?></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <?= $post->CAPTION_DD ?>
                                                    </div>
                                                    <a href="http://127.0.0.1:5000/upload-post/<?= $post->SHORTCODE_DD?>.jpg" class="lightbox mt-3">
                                                        <img class="img-fluid border-0 border-radius mb-3" src="http://127.0.0.1:5000/upload-post/<?= $post->SHORTCODE_DD?>.jpg">
                                                    </a>
                                                    <div>
                                                        <div class="post-icon mr-3 d-inline-block"><a href="#"><i class="iconsminds-like mr-1"></i></a> <span><?= number_format($post->COUNTLIKE_DD)?>
                                                                Likes</span></div>
                                                        <div class="post-icon d-inline-block"><i class="iconsminds-speach-bubble-11 mr-1"></i> <span><?= number_format($post->COUNTCOMMENT_DD)?>
                                                                Comments</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php $first = false; }?>
                    </div>
                </div>
                <!-- <div class="row list disable-text-selection" data-check-all="checkAll">
                    <?php
                        foreach ($posts as $post) {
                    ?>
                        <div class="col-xl-6 col-lg-6 col-12 col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row mb-3">
                                        <a href="#">
                                            <img src="http://127.0.0.1:5000/upload-profile/<?= $post->SHORTCODE_DD?>.jpg" alt="" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="pl-3">
                                            <a href="https://instagram.com/<?= $post->USERNAME_DD?>" target="_blank">
                                                <p class="font-weight-medium mb-0 "><?= $post->FULLNAME_DD?></p>
                                                <p class="text-muted mb-0 text-small"><?= date_format(date_create($post->TAKENAT_DD), 'd.m.Y - H:i')?></p>
                                            </a>
                                        </div>
                                        <div style="float: right;">tes</div>
                                    </div>
                                    <div class="mb-3">
                                        <?= $post->CAPTION_DD ?>
                                    </div>
                                    <a href="http://127.0.0.1:5000/upload-post/<?= $post->SHORTCODE_DD?>.jpg" class="lightbox mt-3">
                                        <img class="img-fluid border-0 border-radius mb-3" src="http://127.0.0.1:5000/upload-post/<?= $post->SHORTCODE_DD?>.jpg">
                                    </a>
                                    <div>
                                        <div class="post-icon mr-3 d-inline-block"><a href="#"><i class="iconsminds-like mr-1"></i></a> <span><?= number_format($post->COUNTLIKE_DD)?>
                                                Likes</span></div>
                                        <div class="post-icon d-inline-block"><i class="iconsminds-speach-bubble-11 mr-1"></i> <span><?= number_format($post->COUNTCOMMENT_DD)?>
                                                Comments</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php }?>
                        
                    ?>
                    


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
                </div> -->
            </div>
        </div>
    </div>
</main>
<script> 

</script>