<?php
/* Template Name: contact */ 

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="container">
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form id="contactForm" action="javascript:void();" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com"><input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden"
                                name="to" value="email@mywebsite.com">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="modal-successfail"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6" id="modal-message">
                                    <fieldset>
                                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                    </fieldset>
                                    <div class="form-group has-feedback"><label for="modal_from_name">Name</label><input class="form-control" type="text" id="modal_from_name" tabindex="-1" name="from_name" required="" placeholder="Full Name"></div>
                                    <div class="form-group has-feedback"><label for="modal_from_email">Email</label><input class="form-control" type="email" id="modal_from_email" name="from_email" required="" placeholder="Email Address"></div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback"><label for="modal_from_phone">Phone</label><input class="form-control" type="text" id="modal_from_phone" name="from_phone" placeholder="Primary Phone"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="modal_calltime">Best Time to Call</label><select class="form-control" id="modal_calltime" name="Call Time"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="modal_comments">Comments</label><textarea class="form-control" id="modal_comments" name="Comments" placeholder="Enter comments here" rows="5"></textarea></div>
                                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                                    </fieldset>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="static-map"><a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Washington Monument"></a></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                            </fieldset>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@address.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                                            </fieldset>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr.</span></div>
                                            <div><span>Daytona Beach, FL 81500</span></div>
                                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form id="contactForm" action="javascript:void();" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com"><input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden" name="to"
                value="email@mywebsite.com">
            <div class="form-row">
                <div class="col-md-6">
                    <div id="successfail"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6" id="message">
                    <fieldset>
                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                    </fieldset>
                    <div class="form-group has-feedback"><label for="from_name">Name</label><input class="form-control" type="text" id="from_name" tabindex="-1" name="from_name" required="" placeholder="Full Name"></div>
                    <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control" type="email" id="from_email" name="from_email" required="" placeholder="Email Address"></div>
                    <div class="form-row">
                        <div class="col-sm-6" style="width: 450px;">
                            <div class="form-group has-feedback"><label for="from_phone">Phone</label><input class="form-control" type="text" id="from_phone" name="from_phone" placeholder="Primary Phone"></div>
                        </div>
                    </div>
                    <div class="form-group"><label for="comments">Comments</label><textarea class="form-control" id="comments" name="Comments" placeholder="Enter comments here" rows="5"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                    <hr>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                    </fieldset>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="static-map"><a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Washington Monument"></a></div>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                            </fieldset>
                            <div><span><strong>Name</strong></span></div>
                            <div><span>bybakery@gmail.com</span></div>
                            <div><span>www.bybakery.com</span></div>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                            </fieldset>
                            <div><span><strong>Office Name</strong></span></div>
                            <div><span>55 Icannot Dr.</span></div>
                            <div><span>Daytona Beach, FL 81500</span></div>
                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_sidebar();
get_footer();
