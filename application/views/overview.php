

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
                    <div class="card-body">
                        <h5 class="mb-4">Total Post</h5>

                        <div class="chart card-body px-0 mb-4">
                            <canvas id="chart_topPosts"></canvas>
                        </div>
                        
                        <h5 class="mb-4">Total Cumulative Posts</h5>

                        <div class="row mb-4">
                            <div class="col-4 icon-cards-row">
                                <div class="glide__slide glide__slide--active">
                                    <div class="card">
                                        <div class="card-header pt-4">
                                            <div class="float-left float-none-xs">
                                                <div class="d-inline-block">
                                                    <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #95c940;">#cristiano</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <i class="iconsminds-posterous"></i>
                                                <p class="card-text mb-0">Total Post</p>
                                                <p class="lead text-center">16</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 icon-cards-row">
                                <div class="glide__slide glide__slide--active">
                                    <div class="card">
                                        <div class="card-header pt-4">
                                            <div class="float-left float-none-xs">
                                                <div class="d-inline-block">
                                                <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #094d38;">#messi</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <i class="iconsminds-posterous"></i>
                                                <p class="card-text mb-0">Total Post</p>
                                                <p class="lead text-center">16</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 icon-cards-row">
                                <div class="glide__slide glide__slide--active">
                                    <div class="card">
                                        <div class="card-header pt-4">
                                            <div class="float-left">
                                                <div class="d-inline-block">
                                                <span style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #4c1f8f;">#gonzales</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <i class="iconsminds-posterous"></i>
                                                <p class="card-text mb-0">Total Post</p>
                                                <p class="lead text-center">16</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 mb-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Total Engagement</h5>

                        <div class="chart card-body px-0 mb-4">
                            <canvas id="visitChart"></canvas>
                        </div>

                        <span class="mb-4" style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #95c940;">#cristiano</span>
                        <div class="row mb-4 mt-3">
                            <div class="col-4 icon-cards-row">
                                <div class="glide__slide glide__slide--active">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-bar-chart-4"></i>
                                            <p class="card-text mb-0">Cumulative Total Engagement</p>
                                            <p class="lead text-center">16</p>
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
                                            <p class="lead text-center">16</p>
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
                                            <p class="lead text-center">16</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="mb-4" style="padding: 0.6em 0.75em;font-size: 74%;color: #fff;border-radius: 0.25rem;background-color: #094d38;">#messi</span>
                        <div class="row mb-4 mt-3">
                            <div class="col-4 icon-cards-row">
                                <div class="glide__slide glide__slide--active">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-bar-chart-4"></i>
                                            <p class="card-text mb-0">Cumulative Total Engagement</p>
                                            <p class="lead text-center">16</p>
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
                                            <p class="lead text-center">16</p>
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
                                            <p class="lead text-center">16</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script> 
    function hexToRgbA(hex){
        var c;
        if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
            c= hex.substring(1).split('');
            if(c.length== 3){
                c= [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c= '0x'+c.join('');
            return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',0.5)';
        }
        throw new Error('Bad Hex');
    }

    const DATA_COUNT = 7;
    const NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100};

    // const labels = Utils.months({count: 7});
    const data = {
        labels: ['tes1', 'tes2'],
        datasets: [
            {
                label: 'Dataset 1',
                data: 45,
                borderColor: "#674589",
                backgroundColor: "#6745",
            },
            {
                label: 'Dataset 2',
                data: 89,
                borderColor: "#573825",
                backgroundColor: "#573825",
            }
        ]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Line Chart'
                }
            }
        },
    };

  const chart_topPosts = new Chart(
    document.getElementById('chart_topPosts'),
    config
  );

</script>