<div id="graph">
    <div>
        <div>
            <i class="fa fa-users" aria-hidden="true"></i>
            <span><?php echo $h['user']; ?></span>
        </div>
        <div class="chart">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
        </div>
    </div>
    <div>
        <div>
            <i class="fas fa-coins"></i>
            <span><?php echo($h['sum'][0]['sum']); ?></span>
        </div>
        <div class="chart" ><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
    </div>
    <div>
        <div>
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span><?php echo $h['order']; ?></span>
        </div>
        <div class="chart"><i class="fa fa-line-chart" aria-hidden="true"></i>
        </div>
    </div>
</div>
