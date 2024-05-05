<?php 
get_header();
$args = array (
  'post_type'              => 'country',
  'post_status'            => 'publish',
  'order'                  => 'ASC',
  'posts_per_page'         => -1,
  );

$country = new WP_Query($args);
?>
<h1 style="text-align: center;">Contact Form</h1>
<!-- <input type="hidden" value="" id="country_id" name="country_value"> -->
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form id="ContactForm" method="post">
  <div class="form-row">
    <div class="form-group col-md-6" >
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name">
    </div>
    <div class="form-group col-md-6">
        <label for="Last-Name">Last Name</label>
        <input type="text" class="form-control" name="last_name" id="last_name">
    </div>
    <div class="form-group col-md-6">
      <label for="contact_no">Contact No.</label>
      <input type="Text" class="form-control" name="contact_no" id="contact_no">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCountry">Country</label>
      <select id="country" name="country" class="form-control">
        <option value="" selected>Choose...</option>
        <?php 
          while ( $country->have_posts() ) {
              $country->the_post();
              ?>
          <option value="<?php echo get_the_id(); ?>"><?php the_title(); ?></option>
              <?php
          } wp_reset_postdata(); 
        ?>
      </select>
    </div>
    <div class="form-group col-md-4" id>
      <label for="inputState">State</label>
      <select id="state" name="state" class="form-control">
        <!-- <option value="" selected>Choose...</option> -->
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <select id="city" name="city" class="form-control">
        <!-- <option value="" selected>Choose...</option> -->
      </select>
    </div>
  
    <input type="submit" value="Submit" id="submit" class="btn btn-primary">
    <div class="alert-message"></div>
    <input type="hidden" id="action" name="action" value="custom_contact_from">
  </div>
</form>
</div>
</div>

<?php 
get_footer()

?>