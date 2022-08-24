

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
            <div class="col-md-12 col-sm-12 mb-4">
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
                    <form action="<?= site_url('setdataset')?>" method="POST">
                        <div class="card-body collapse" id="collapseExample">
                            <div class="mb-2">Hashtag</div>
                            <input class="mb-4 form-control" type="text" name="hashtag">
                            <input class="mb-4" type="hidden" name="page" value="overview">
                            <button type="submit" class="btn btn-sm btn-primary btn-lg btn-shadow mt-4 mb-4" style="float: right;">SEARCH</button>
                        </div>
                    </form>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-2">Current Search</h5>
                        <div class="row mb-4">
                         <?php
                            $i = 1;
                            foreach ($hashtags as $hashtag) {
                                if($i == 5){
                                    echo '<div class="row mb-2">';
                                }
                        ?>                            
                            
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: <?= $hashtag['color']?>;">#<?= $hashtag['tag']?></span>
                                            
                                        </div>
                                        <br>
                                        <div class="mt-2">
                                            <i class="iconsminds-clock"></i>
                                            <?= date_format(date_create($hashtag['created_at']), 'd.m.Y - H:i')?>
                                            <br>
                                            <button onclick="deleteDataset('<?= $hashtag['idDataset']?>')" class="btn btn-danger btn-xs mt-2"> Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                                if($i == 5){
                                    echo '<div class="row mb-4">';
                                    $i = 0;
                                }
                                $i++;
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="chart card-body px-0 mb-4" style="height: 10%;">
                            <canvas id="chart_topPosts"></canvas>
                        </div>
                        
                        <h5 class="mb-4">Total Cumulative Posts</h5>

                        <div class="row mb-4">
                            <?php
                                foreach ($hashtags as $hashtag) {
                            ?>
                                <div class="col-4 icon-cards-row">
                                    <div class="glide__slide glide__slide--active">
                                        <div class="card">
                                            <div class="card-header pt-4">
                                                <div class="float-left float-none-xs">
                                                    <div class="d-inline-block">
                                                        <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: <?= $hashtag['color']?>;">#<?= $hashtag['tag']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <i class="iconsminds-posterous"></i>
                                                    <p class="card-text mb-0">Total Post</p>
                                                    <p class="lead text-center"><?= number_format($hashtag['totPost'])?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 mb-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Total Engagement</h5>

                        <div class="chart card-body px-0 mb-4">
                            <canvas id="chart_topEngagement"></canvas>
                        </div>
                        <?php
                            foreach ($hashtags as $hashtag) {
                        ?>
                            <span class="mb-4" style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: <?= $hashtag['color']?>;">#<?= $hashtag['tag']?></span>
                            <div class="row mb-4 mt-3">
                                <div class="col-4 icon-cards-row">
                                    <div class="glide__slide glide__slide--active">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-bar-chart-4"></i>
                                                <p class="card-text mb-0">Cumulative Total Engagement</p>
                                                <p class="lead text-center"><?= number_format($hashtag['totLike'] + $hashtag['totComment'])?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 icon-cards-row">
                                    <div class="glide__slide glide__slide--active">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-like"></i>
                                                <p class="card-text mb-0">Total Like</p>
                                                <p class="lead text-center"><?= number_format($hashtag['totLike'])?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 icon-cards-row">
                                    <div class="glide__slide glide__slide--active">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-speach-bubble-11"></i>
                                                <p class="card-text mb-0">Total Comment</p>
                                                <p class="lead text-center"><?= number_format($hashtag['totComment'])?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-5">Hashtag most used</h5>
                        <span class="mb-4" style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #95c940;">#cristiano</span>
                        <div class="mb-4 mt-4">
                            <p class="mb-2">#football
                                <span class="float-right text-muted">12/18</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="mb-2">#fun
                                <span class="float-right text-muted">12/18</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="mb-2">#business
                                <span class="float-right text-muted">12/18</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                        </div>
                        <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #094d38;">#messi</span>
                        <div class="mb-4 mt-4">
                            <p class="mb-2">#football
                                <span class="float-right text-muted">12/18</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="mb-2">#fun
                                <span class="float-right text-muted">12/18</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="mb-2">#business
                                <span class="float-right text-muted">12/18</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</main>
<div class="modal fade" id="mdlDelete" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlDeleteLabel">Delete Dataset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body text-center">
                <h6>Are you sure to delete this hashtag?</h6>
            </div>
            <div class="modal-footer">
                <form action="<?= site_url('deldataset')?>" method="post">
                    <input type="hidden" id="mdlDelete_id" name="idDataset">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button> 
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script> 
    function deleteDataset(idDataset){
        $('#mdlDelete_id').val(idDataset)
        $('#mdlDelete').modal('show')
    }
    function hexToRgbABg(hex){
        var c;
        if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
            c= hex.substring(1).split('');
            if(c.length== 3){
                c= [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c= '0x'+c.join('');
            return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',0.3)';
        }
        throw new Error('Bad Hex');
    }

    function hexToRgbA(hex){
        var c;
        if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
            c= hex.substring(1).split('');
            if(c.length== 3){
                c= [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c= '0x'+c.join('');
            return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',1)';
        }
        throw new Error('Bad Hex');
    }
    

    const data_topPosts = {
        labels: [
            <?php
                foreach ($hashtags as $hashtag) {
                    echo "'#".$hashtag['tag']."',";
                }    
            ?>
        ],
        datasets: [
            {
                label: 'Chart Post',
                data: [
                    <?php
                        foreach ($hashtags as $hashtag) {
                            echo $hashtag['totPost'].",";
                        }    
                    ?>  
                ],
                backgroundColor: [
                    <?php
                        foreach ($hashtags as $hashtag) {
                            echo "hexToRgbABg('".$hashtag['color']."'),";
                        }    
                    ?>  
                ],
                borderColor: [
                    <?php
                        foreach ($hashtags as $hashtag) {
                            echo "hexToRgbA('".$hashtag['color']."'),";
                        }    
                    ?>  
                ],
                borderWidth: 1
            }
        ]
    };
    const data_topEngagement = {
        labels: [
            <?php
                foreach ($hashtags as $hashtag) {
                    echo "'#".$hashtag['tag']."',";
                }    
            ?>
        ],
        datasets: [
            {
                label: 'Chart Engagement',
                data: [
                    <?php
                        foreach ($hashtags as $hashtag) {
                            echo ($hashtag['totLike'] + $hashtag['totComment']).",";
                        }    
                    ?>  
                ],
                backgroundColor: [
                    <?php
                        foreach ($hashtags as $hashtag) {
                            echo "hexToRgbABg('".$hashtag['color']."'),";
                        }    
                    ?>  
                ],
                borderColor: [
                    <?php
                        foreach ($hashtags as $hashtag) {
                            echo "hexToRgbA('".$hashtag['color']."'),";
                        }    
                    ?>  
                ],
                borderWidth: 1
            }
        ]
    };

    const config_topPosts = {
        type: 'bar',
        data: data_topPosts,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    
    const config_topEngagement = {
        type: 'bar',
        data: data_topEngagement,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };

    const chart_topPosts = new Chart(
        document.getElementById('chart_topPosts'),
        config_topPosts
    );

    const chart_topEngagement = new Chart(
        document.getElementById('chart_topEngagement'),
        config_topEngagement
    );

</script>