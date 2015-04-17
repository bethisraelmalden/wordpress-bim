<?php
wp_enqueue_style('Calligraffitti', '//fonts.googleapis.com/css?family=Calligraffitti');
get_header();

$times = array('8:00pm', '8:30pm', '9:00pm', '9:30pm');?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<div class="background">
  <div id="flash" class="text-center alert hidden">
    <button type="button" class="close">&times;</button>
    <div class="msg"></div>
  </div>
  <div id="content" class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 text-center">
        <h1 class="mikvah-name">Mikvah Mayanei Tovah</h1>
        <p class="lead">The new mikvah in Malden is now open for business!</p>
        <p>
          <strong>Open <?php echo $times[0] . ' - ' . end($times)?>.<br />
          All visits by appointment 24 hours in advance.</strong>
        </p>
        <p>
          <a href="#make-appointment" class="btn btn-primary btn-lg"
             data-toggle="modal">Request Appointment</a>
        </p><p>
          <a href="mailto:mikvah@bethisraelmalden.org">mikvah@bethisraelmalden.org</a>
          <span>&bull; <a href="tel:+17813333202">781-333-3202</a> or
          <a href="tel:+17812331470">781-233-1470</a></span>
        </p>
      </div><div class="col-xs-12 col-sm-5">
        <hr class="visible-xs" />
        <div id="facts" class="center-block">
          <h3 class="text-center">What you need to know</h3>
          <dl class="center-block">
            <dt>Preparation</dt>
            <dd>
              <i class="glyphicon glyphicon-download"></i>
              <a href="http://bethisraelmalden.org/media/2014/mikvah/mikvah-prep.pdf" target="_blank">Download Preparation Sheet</a>
            </dd>

            <dt>Cost</dt>
            <dd>
              $25 per visit<br />
              $35 for special arrangements
            </dd>

            <dt>Address</dt>
            <dd>
              <i class="glyphicon glyphicon-map-marker"></i>
              <a href="#get-directions" data-toggle="modal">
                10 Dexter St, Malden MA 02148
              </a>
            </dd>

            <dt>Parking</dt>
            <dd>
              Far-side of the large parking lot on Dexter St, closest to the
              building.
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="padding: 2em; max-width: 50em">
    <div id="photo-gallery" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mikvah/waiting-room.jpg"></a>
          <div class="carousel-caption">
            <h3>Waiting Room</h3>
            <p>Welcome to Mikvah Mayanei Tovah.</p>
          </div>
        </div><div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mikvah/prep-room.jpg"></a>
          <div class="carousel-caption">
            <h3>Preparation Room</h3>
            <p>Featuring a jacuzzi tub and standing shower.</p>
          </div>
        </div><div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mikvah/handicap-prep-room.jpg"></a>
          <div class="carousel-caption">
            <h3>Handicap Preparation Room</h3>
            <p>Your comfort is our highest priority.</p>
          </div>
        </div><div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mikvah/mikvah-pool.jpg"></a>
          <div class="carousel-caption">
            <h3>Mikvah Pool</h3>
            <p>Our mikvah features Bor HaShakah, Bor HaZeriyah, Bor HaTachton.</p>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#photo-gallery" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a><a class="right carousel-control" href="#photo-gallery" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
</div>

<div id="make-appointment" class="modal fade">
  <form class="modal-dialog form-horizontal" action="/api/mikvah/appointment.php"
        method="POST" role="form">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Request an Appointment</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="appt-name" class="col-sm-4 control-label">Your Name</label>
          <div class="col-sm-8">
            <input type="text" id="appt-name" name="appt-name"
                   class="form-control" placeholder="Your Name" />
          </div>
        </div><div class="form-group">
          <label for="appt-email" class="col-sm-4 control-label">Your Email</label>
          <div class="col-sm-8">
            <input type="email" id="appt-email" name="appt-email"
                   class="form-control" placeholder="Email Address" />
          </div>
        </div><div class="form-group hidden">
          <label for="email" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-8">
            <input type="text" id="email" name="email" class="form-control"
                   value="" placeholder="Leave Blank" />
            <p class="help-block">Please leave this field blank.</p>
          </div>
        </div><div class="form-group">
          <label for="appt-phone" class="col-sm-4 control-label">
            Phone Number
          </label>
          <div class="col-sm-8">
            <input type="tel" id="appt-phone" name="appt-phone"
                   class="form-control" placeholder="Phone Number" />
          </div>
        </div><div class="form-group">
          <label for="appt-date" class="col-sm-4 control-label">
            Requested Date
          </label>
          <div class="col-sm-8">
            <input type="text" id="appt-date" name="appt-date"
                   class="form-control date" value="" />
          </div>
        </div><div class="form-group">
          <label for="appt-time" class="col-sm-4 control-label">
            Requested Time
          </label>
          <div class="col-sm-8">
            <?php foreach($times as $i => $time): ?>
            <label class="radio-inline">
              <input type="radio" <?php echo 0 == $i ? 'checked': ''?>
                     name="appt-time" value="<?php echo $time; ?>">
              <?php echo $time; ?>
            </label>
            <?php endforeach; ?>

            <p class="help-block">
              Please contact <a href="mailto:mikvah@bethisraelmalden.org">mikvah@bethisraelmalden.org</a>
              for other times.
            </p>
          </div>
        </div><div class="form-group">
          <div class="col-sm-8 col-sm-offset-4">
            <p class="help-block">
              Your appointment is <strong>not confirmed</strong> until a mikvah attendant contacts you
              to make final arrangements.
            </p><p class="help-block">
              If you need to talk to a mikvah attendent, you can call Tova Rabinowitz at
              <a href="tel:+17812231470">781-223-1470</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" data-loading-text="Requesting...">Request</button>
      </div>
    </div><!-- /.modal-content -->
  </form><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="get-directions" class="modal fade">
  <form class="modal-dialog form-horizontal" action="http://maps.google.com/maps"
        method="get" target="_blank" role="form">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Get Directions</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="saddr" class="col-sm-4 control-label">Your Address</label>
          <div class="col-sm-8">
            <input type="text" id="saddr" name="saddr" class="form-control"
                   placeholder="Your address" />
            <input type="hidden" name="daddr" value="10 Dexter St, Malden, MA 02148" />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Get Directions</button>
      </div>
    </div><!-- /.modal-content -->
  </form><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/mikvah']); });
</script>
<?php
get_footer();
