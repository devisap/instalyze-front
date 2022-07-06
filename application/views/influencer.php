

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
                                <div class="mb-2 mt-4">Date</div>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control text-center" value="<?= date('j F Y')?>" name="start" placeholder="Start" disabled>
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="pickerDate form-control text-center" name="end" placeholder="End">
                                </div>
                                <button class="btn btn-sm btn-primary btn-lg btn-shadow" style="float: right;">SEARCH</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="false">#cristiano</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="true">#messi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">#gonzales</a>
                                    </li>
                                </ul>          
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-12 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>List Influencer</h5>
                                <div class="chart card-body px-0 mb-4">
                                    <canvas id="visitChart"></canvas>
                                </div>
                                <table class="data-table tbl">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-right-1"></i></a>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-mail-forward"></i></a>
                                            </td>
                                            
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>2</td>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-right-1"></i></a>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-mail-forward"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>3</td>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-right-1"></i></a>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-mail-forward"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>4</td>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-right-1"></i></a>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-mail-forward"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>5</td>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-right-1"></i></a>
                                                <a href="#" class="text-primary" style="font-size: 18px;"><i class="iconsminds-mail-forward"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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