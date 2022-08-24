

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
                <div class="row list disable-text-selection" data-check-all="checkAll">
                    <div class="col-xl-12 col-lg-12 col-12 col-sm-12 mb-4">
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
                                <button class="btn btn-sm btn-primary btn-lg btn-shadow mt-4" style="float: right;">SEARCH</button>
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
                    </div>
                    <div class="col-xl-12 col-lg-12 col-12 col-sm-12 mb-4">
                        <div class="tab-content" id="pills-tabContent">
                            <?php
                                $first = true;
                                foreach ($hashtags as $hashtag) {
                            ?>
                            <div class="tab-pane fade show <?= $first == true ? 'active' : ''?>" id="<?= $hashtag['tag']?>" role="tabpanel" aria-labelledby="<?= $hashtag['tag']?>-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>List Influencer</h5>
                                        <div style="text-align: center;" class="chart card-body px-0 mb-4">
                                            <img src="http://127.0.0.1:5000/upload-graph/<?= $hashtag['idDataset']?>.png" alt="">
                                        </div>
                                        <table class="data-table tbl">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Accuracy</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $no = 1;
                                                foreach ($influencers[$hashtag['tag']] as $influencer) {
                                            ?>
                                                <tr role="row" class="odd">
                                                    <td><?= $no++?></td>
                                                    <td><?= $influencer->USERNAME_INFLUENCER?></td>
                                                    <td><?= $influencer->ACCURACY_INFLUENCER?></td>
                                                    <td>
                                                        <a target="_blank" href="https://instagram.com/<?= $influencer->USERNAME_INFLUENCER?>" class="text-primary" style="font-size: 18px;"><i class="iconsminds-right-1"></i></a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php $first = false; }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script> 
    $('.tbl').DataTable({
        'ordering': false,
        'searching': false,
        'paging': false,
        'bInfo': false
    });
</script>