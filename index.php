<?php get_header(); ?>
<div class="main">
    <p>Adote um animalzinho, eles trazem alegria. Veja os melhores momentos:</p>
    <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/doga1.jpeg' ?>" class="d-block w-100" alt="doga1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/doga2.jpeg' ?>" class="d-block w-100" alt="doga2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/doga3.jpeg' ?>" class="d-block w-100" alt="doga3">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/dogas1.jpeg' ?>" class="d-block w-100" alt="dogas1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/dogas2.jpeg' ?>" class="d-block w-100" alt="dogas2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/rolica1.jpeg' ?>" class="d-block w-100" alt="rolica1">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<?php get_footer(  ); ?>