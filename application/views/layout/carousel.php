<div class="carousel slide" id="carousel-example-generic">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>


    <!--(.carousel-inner>.item*3>img[src=http://lorempixel.com/1170/300 alt=Image]+.carousel-caption{This is a caption $})-->
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo base_url(); ?>public/images/slide1.jpg">
            <div class="carousel-caption">Panama todo incluido</div>
        </div>
        <div class="item">
            <img src="<?php echo base_url(); ?>public/images/slide2.jpg">
            <div class="carousel-caption">Amazonas todo incluido</div>
        </div>
        <div class="item">
            <img src="<?php echo base_url(); ?>public/images/slide3.jpg">
            <div class="carousel-caption">San Andres Islas todo incluido</div>
        </div>
        <div class="item">
            <img src="<?php echo base_url(); ?>public/images/slide4.jpg">
            <div class="carousel-caption">Tus 15 años en buque</div>
        </div>
    </div>
    

    <!--(a[href=#carousel-example-generic data-slide=prev].left.carousel-control>span.icon-prev^a[href=#carousel-example-generic data-slide=next].right.carousel-control>span.icon-next)-->
    <a href="#carousel-example-generic" data-slide="prev" class="left carousel-control">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel-example-generic" data-slide="next" class="right carousel-control">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>