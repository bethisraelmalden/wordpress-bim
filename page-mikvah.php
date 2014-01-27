<?php 
wp_enqueue_style('Calligraffitti', '//fonts.googleapis.com/css?family=Calligraffitti');
get_header(); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<div class="background">
  <div id="content" class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 text-center">
        <h1 class="mikvah-name">Mikvah Mayanei Tovah</h1>
        <p class="lead">The new mikvah in Malden is now open for business!</p>
        <p><strong>All visits by appointment only.</strong></p>
        <p>
          <a href="#make-appointment" class="btn btn-primary btn-lg"
             data-toggle="modal">Request Appointment</a>
        </p><p>
          <a href="mailto:mikvah@bethisraelmalden.org">mikvah@bethisraelmalden.org</a>
          <span class="hidden">&bull; <a href="tel:+17813333202">781-333-3202</a></span>
        </p>
      </div><div class="col-xs-12 col-sm-5">
        <hr class="visible-xs" />
        <div id="facts" class="center-block">
          <h3 class="text-center">What you need to know</h3>
          <dl class="center-block">
            <dt>Cost</dt>
            <dd>$25 per visit</dd>

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
</div>

<div id="make-appointment" class="modal fade">
  <form class="modal-dialog form-horizontal" action="<?php echo get_template_directory_uri(); ?>/php/mikvah/appointment.php"
        method="post" role="form">
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
          <label for="appt-email" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-8">
            <input type="email" id="appt-email" name="appt-email"
                   class="form-control" placeholder="Email Address" />
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
        </div><div class="form-group hidden">
          <label for="email" class="col-sm-4 control-label">Leave Blank</label>
          <div class="col-sm-8">
            <input type="email" id="email" name="email" class="form-control" />
          </div>
        </div<div class="form-group">
          <p class="help-block text-center">
            A mikvah attendant will contact you to make final arrangements.
          </p>
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
