<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();

    ?>


<section class="banner" style="background-image: url('<?php echo get_field('banner_background_image')['url'];?>')">
  <div class="container">
    <p class="baseline"><?php the_field("banner_baseline")?></p>
    <h1 class="title"><?php the_field("banner_title_brown")?><br /><span class="title title-highlight"><?php the_field("banner_title_green")?></span></h1>
    <a href="#" class="button-1"><?php the_field("banner_register_link")?></a>
  </div>
</section>

<section class="conference">
  <div class="container">
    <h1 class="title separator title-spacing"><?php the_field("conference_title")?></h1>
    <p class="desc"><?php the_field("conference_content")?></p>
</section>

<section class="program">
  <div class="program-background" style="background-image: url('<?php echo get_field('program_background_image_top')['url'];?>')"></div>
  <div class="program-wrapper container" style="background-image: url('<?php echo get_field('program_background_image_bottom')['url'];?>')">
    <h1 class="title separator title-spacing"><?php the_field("program_title")?></h1>
    <div class="program-subtitle-wrapper">
      <div class="program-subtitle-left">
        <h2 class="subtitle"><?php the_field("program_subtitle_left")?></h2>
      </div>
      <div class="program-subtitle-right">
        <h2 class="subtitle"><?php the_field("program_subtitle_right")?></>
      </div>   
    </div>
    <div class="program-content">
      <div class="program-content-left">
        <?php
        $program_left=get_field("program_content_left");
        foreach($program_left as $line){
        ?>
        <p class="program-desc"><span class="program-desc program-hour"><?php echo $line["program_hour_left"]?></span><?php echo $line["program_hour_desc_left"] ?></p>
        <?php } ?>
      </div>
      <div class="program-content-right">
        <?php
        $program_right=get_field("program_content_right");
        foreach($program_right as $line){
        ?>
        <p class="program-desc"><span class="program-desc program-hour" ><?php echo $line["program_hour_right"]?></span><?php echo $line["program_hour_desc_right"] ?></p>
        <?php } ?>
      </div>
    </div>
    <a href="#" class="button-1"><?php the_field("program_register_link")?></a>
  </div>
</section>

<section class="speakers">
  <div class="container">
      <h1 class="title separator title-spacing"><?php the_field("speakers_title")?></h1>
      <p class="desc"><?php the_field("speakers_baseline")?></p>
      <div class="speakers-content-wrapper">
      <?php
        $speakers=get_field("speakers_content");
        foreach($speakers as $line){
      ?>
        <div class="speakers-content">
          <div class="speakers-image" style="background-image: url('<?php echo $line['speakers-content-image']['url']?>')"></div>
          <p class="speakers-title"><?php echo $line["speakers-content-title"]?></P>
          <p class="speakers-desc"><?php echo $line["speakers-content-desc"]?></P>
          <div class="speakers-button-wrapper">
            <a href="#" class="speakers-button"><?php echo $line["speakers-content-link"]?></a>
          </div>
        </div>
      <?php } ?>
  </div>
</section>

<section class="informations">
  <div class="container">
    <h1 class="title separator title-spacing"><?php the_field("informations_title")?></h1>
  </div>
  <div class="informations-background" style="background-image: url('<?php echo get_field('informations_background_image')['url'];?>')">
    <div class="informations-container">
      <div class="informations-wrapper">
          <div class="location-wrapper">
          <i class="fas fa-map-marker-alt"></i> 
          <div class="location-text">
              <p><?php the_field("informations_location_content")?></P>
            </div>
          </div>
          <div class="date-wrapper">
          <i class="far fa-clock"></i>
            <div class="date-text">
              <p><?php the_field("informations_date_content")?></P>
            </div>
          </div>
          <div class="dinner-wrapper">
            <i class="fas fa-utensils"></i>
            <div class="dinner-text">
              <p><?php the_field("informations_dinner_content")?></P>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="videos">
  <div class="container">
    <h1 class="title separator title-spacing"><?php the_field("videos_title")?></h1>
  </div>
  <div class="container videos-wrapper">
    <?php
      $main_videos=get_field("videos_main_content");
      foreach($main_videos as $line){
    ?>
    <div class="main-videos-background" style="background-image: url('<?php echo $line['videos_main_content_background_image']['url']?>')">
      <div class="main-videos-content">
        <i class="fas fa-play-circle"></i>
        <p class="main-videos-title"><?php echo $line["videos_main_content_title"]?></p>
        <p class="main-videos-desc"><?php echo $line["videos_main_content_desc"]?></p>
      </div> 
    </div>
    <?php } ?>
  </div>
  <div class="container videos-wrapper">
    <?php
      $secondary_videos=get_field("videos_secondary_content");
      foreach($secondary_videos as $line){
    ?>
    <div class="secondary-videos-wrapper">
      <div class="secondary-videos-player" style="background-image: url('<?php echo $line['videos_secondary_content_background_image']['url']?>')">
        <i class="fas fa-play-circle"></i>
      </div>
      <div class="secondary-videos-content">
          <p class="secondary-videos-title"><?php echo $line["videos_secondary_content_title"]?></p>
          <p class="secondary-videos-desc"><?php echo $line["videos_secondary_content_desc"]?></p>
      </div> 
    </div>
    <?php } ?>
  </div>
</section>

<section class="actus">
  <div class="container">
    <h1 class="title separator title-spacing"><?php the_field("actus_title")?></h1>
    <div class="actus-articles-wrapper">
      <?php
        $actus=get_field("actus_articles");
        foreach($actus as $line){
      ?>
      <div class="actus-articles">
        <div class="actus-image" style="background-image: url('<?php echo $line['actus_articles_background_image']['url']?>')"></div>
        <div class="actus-content">
          <p class="actus-title"><?php echo $line["actus_articles_title"]?></p>
          <p class="actus-desc"><?php echo $line["actus_articles_desc"]?></p>
          <div class="actus-button-wrapper">
            <a href="#" class="actus-button"><?php echo $line["actus_articles_link"]?></a>
          </div>
          <p class="actus-date"><?php echo $line["actus_articles_date"]?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="downloads">
  <div class="container downloads-wrapper">
    <?php
      $downloads=get_field("downloads_content");
      foreach($downloads as $line){
    ?>
    <div class="downloads-border">
      <div class="downloads-background" style="background-image: url('<?php echo $line['downloads_content_background_image']['url']?>')">
        <i class="fas fa-angle-double-down"></i>
        <p class="downloads-title"><?php echo $line["downloads_content_title"]?></p>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
    <?php
  }
}
?>


<?php get_footer(); ?>
