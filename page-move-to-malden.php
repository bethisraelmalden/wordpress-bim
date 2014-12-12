<?php
wp_enqueue_style('Calligraffitti', '//fonts.googleapis.com/css?family=Calligraffitti');
wp_enqueue_style('Cabin', '//fonts.googleapis.com/css?family=Cabin');
get_header(); ?>
<div id="content" class="container">
  <h1 class="lead">Your kids will love growing up here!</h1>
  <div class="col-sm-8">
    <div class="feature">
      <h2>
        Family Comes First.
        <span class="text-muted">Be a part of ours.</span>
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/move/girl.jpg"
           class="pull-right img-thumbnail" />
      <p>
        Raising your family in a Torah-true environment is important to you,
        and it's important to us, too. Our home buyer's incentive program,
        tuition and camp subsidies, and school bus, are all here to help you
        settle down and raise your kids in the kind of Torah-true environment
        you want. Find out why Malden was voted Best City to (2009, 2011) by
        Newsweek Magazine.
      </p>
    </div>
    <hr />
    <div class="feature">
      <h2>
        Full service amenities,
        <span class="text-muted">small community feel.</span>
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/move/mikvah-pool.jpg"
           class="pull-left img-thumbnail" />
      <p>
        You have needs, too, and we do our best to help you meet them. With our
        brand new mikvah (with heated floors!) and an expanded eruv, as well as
        a variety of daily and weekly classes, we’re not just here for your
        kids - we’re here for you, too.
      </p>
    </div>
    <hr />
    <div class="feature">
      <h2>We're convenient <span class="text-muted">and engaging.</span></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/move/ice-cream.jpg"
           class="pull-right img-thumbnail" />
      <p>
        Want to go our for ice cream? Try to new JP Licks at nearby
        Assembly Row. Checking out all that downtown Boston has to offer?
        Hop on the Orange Line at Malden Center for a  quick 10 minute ride.
        With the nearby parks, museums, and zoo, you can relax and enjoy your
        family time.
      </p>
    </div>

  </div><div class="col-sm-4">
    <h2>Schedule a Visit</h2>
    <p>
      We know that choosing a community takes a lot of research.
      Come for a visit and see how you and your family would fit in.
    </p>
    <form id="visit" class="form-horizontal" method="POST"
          data-gdocs="https://docs.google.com/forms/d/1KcXHa-VWdtXs4y-k-KSz7fXS1YFmEVa01HLyJjrknA4/formResponse">
      <div class="hidden alert alert-success">
        Thank you for submitting your request.
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-2 ">Name</label>
        <div class="col-sm-10">
          <input id="name" type="text" placeholder="Name" class="form-control"
                 data-gdocs="entry.465352079" />
        </div>
      </div>
      <div class="form-group">
        <label for="contact" class="col-sm-2 ">Contact</label>
        <div class="col-sm-10">
          <input id="contact" type="text" placeholder="Phone/Email"
                 class="form-control"
                 data-gdocs="entry.1358191719" />
          <p class="help-block">What's the best way to contact you?</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-lg btn-primary"
                  data-submit-text="Submitting...">Schedule</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/move']); });
</script>
<?php
get_footer();
