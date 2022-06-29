<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="<?= $sidebar == 'overview' ? 'active' : '' ; ?>">
                    <a href="<?= site_url('overview')?>">
                        <i class="iconsminds-pie-chart-3"></i>
                        <span>Overview</span>
                    </a>
                </li>
                <li class="<?= $sidebar == 'top-post' ? 'active' : '' ; ?>">
                    <a href="<?= site_url('top-post')?>">
                        <i class="iconsminds-trophy"></i> Top Posts
                    </a>
                </li>
                <li class="<?= $sidebar == 'influencer' ? 'active' : '' ; ?>">
                    <a href="<?= site_url('influencer')?>">
                        <i class="iconsminds-network"></i> Influencer
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>