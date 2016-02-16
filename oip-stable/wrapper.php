<?php
	if(is_page(332)){
		if ( is_user_logged_in() ) {
			if(get_user_role_wp() == 'author'){
				header("Location: ?page_id=264");
			}
			else{
				header("Location: ?page_id=259");
			}
		}
		else{
			header("Location: ?page_id=259");
		}
	}
	function get_user_role_wp() {
		global $current_user;

		$user_roles = $current_user->roles;
		$user_role = array_shift($user_roles);

		return $user_role;
	}

	
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php wp_title(''); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap.min.css">
	<!--<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/B_ss.png"/>-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	
	<?php
	
		
		
	?>
	
	<style>
		
		<?php if( get_option('the_custom_header_color') !== '' ): ?>
			.main-gradient{
				background: <?php echo get_option('the_custom_header_color'); ?> !important;
			}
		<?php else: ?>
			.main-gradient{
				background: <?php echo get_option('the_head_color'); ?> !important;
			}
		<?php endif; ?>
		
		<?php echo get_option('custom_css'); ?>
		
		.menu ul ul.sub-menu {
		    color: #FFF;
		    border-width: 1px 1px 0px;
		    border-style: solid;
		    border-color: <?php echo get_option('the_head_color'); ?> <?php echo get_option('the_head_color'); ?> #CCC !important;
		    -moz-border-top-colors: none;
		    -moz-border-right-colors: none;
		    -moz-border-bottom-colors: none;
		    -moz-border-left-colors: none;
		    border-image: none;
		    background: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		#main a, #u_0_0, a {
			color: <?php echo get_option('the_footer_color'); ?>;	
		}
		
		.nav li a, #map-link, .social-icons span   {
		    color: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		.top-slider-title {
			border-color: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		.custom-bg{
			background-color: <?php echo get_option('the_head_color'); ?>;	
		}
		
		.button-header, .next.page-numbers, .prev.page-numbers {
	    	background: <?php echo get_option('the_footer_color'); ?> none repeat scroll 0% 0% !important;
	    	color: #fff !important;
	    }
	    
	    h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .custom-color{
		    color: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		hr.custom-color{
			border-color: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		.custom-border-color{
			border-color: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		h3.gform_title, .fa, .politis nav li a:hover {
			 color: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		input[type="submit"]{
			background: <?php echo get_option('the_head_color'); ?> none repeat scroll 0% 0% !important;
			border: 1px solid <?php echo get_option('the_head_color'); ?> !important;
		}
		
		#the-title{
			color: #fff !important;
		}
		
		.politis nav li a .fa {
			color: <?php echo get_option('the_head_color'); ?> !important;
		}
		
		.text-info {
		    border-top: 2px solid <?php echo get_option('the_head_color'); ?> !important;
		    border-bottom: 2px solid <?php echo get_option('the_head_color'); ?> !important;
		}
	</style>


	<?php wp_head(); ?>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/bootstrap.min.js"></script>

	<script type="text/javascript">
		
		$('#myTabs a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
		
		/*jQuery(document).ready(function($){
			
			jQuery("form").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/There was a problem with your submission. Errors have been highlighted below./g,"Προέκυψε πρόβλημα με την υποβολή. Τα λάθη έχουν επισημανθεί παρακάτω."));
			});
			
			jQuery(".ginput_container").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Please enter a value between /g,"Παρακαλώ εισάγετε τιμή μεταξύ των "));
			    jQuery(this).html(jQuery(this).html().replace(/and/g,"και"));
			});
			jQuery(".wrapper").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Navigation/g,"Πλοήγηση"));
			});
			jQuery(".ginput_container").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/of/g,"από"));
			    jQuery(this).html(jQuery(this).html().replace(/max characters/g,"χαρακτήρες"));
			});
			jQuery(".widget_ideas-info").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/ago/g,"πριν"));
			});
			jQuery(".notice").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/You are now logged out./g,"Έχετε αποσυνδεθεί επιτυχώς."));
			    jQuery(this).html(jQuery(this).html().replace(/The username field is empty./g,"Το πεδίο όνομα χρήστη είναι κενό."));
			    jQuery(this).html(jQuery(this).html().replace(/The password field is empty./g,"Το πεδίο κωδικού πρόσβασης είναι κενό."));
			    jQuery(this).html(jQuery(this).html().replace(/Your profile has been updated./g,"Το προφίλ σας ενημερώθηκε."));
			});
			jQuery("#register").click(function(){
				jQuery("p").children().each(function() {
				    jQuery(this).html(jQuery(this).html().replace(/This field is required./g,"Το πεδίο είναι υποχρεωτικό."));
				});
			});
			jQuery("div.section-head").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/result(s) matching/g,"αποτελέσματα που να ταιριάζουν στο"));
			});
			
			jQuery(".widget-head").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Quick Info/g,"Πληροφορίες"));
			    jQuery(this).html(jQuery(this).html().replace(/Voters/g,"Υποστηρικτές"));
			    jQuery(this).html(jQuery(this).html().replace(/Recent Ideas/g,"Τελευταίες Καταχωρήσεις"));
			});
			jQuery(".widget-content ul li").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/ago/g,"πριν"));
			});
			
			jQuery(".review-content").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Official Response/g,"Απάντηση καταχωρητή"));
			});
			
			jQuery(".listing-tags").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Tags: /g,"Ετικέτες: "));
			});
			
			jQuery(".widget_votes-count").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/No votes from anyone yet./g,"Κανένας δεν έχει βαθμολογήσει ακόμη. "));
			});
			
			jQuery(".widget-content").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Διαχειριστείτε σχόλια/g,"Σχόλια "));
			});
			
			jQuery(".section-head").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Ιδέες & Προτάσεις - Ιδέα/g, "Ιδέες πολιτών"));
			});
			
			jQuery(".shtml_wpf_ref").css("visibility", "hidden");
			
			jQuery(".form_saved_message").children().each(function() {
			    jQuery(this).html(jQuery(this).html().replace(/Please use the following link to return to your form from any computer. /g,"Παρακαλούμε χρησιμοποιήστε τον παρακάτω σύνδεσμο για να επιστρέψετε στη φόρμα σας από οποιονδήποτε υπολογιστή."));
			    jQuery(this).html(jQuery(this).html().replace(/Please use the following link to return to your form from any computer. /g,"Ο σύνδεσμος θα λήξει μετά από 30 ημέρες. Εισάγετε το email σας για να στείλετε τον σύνδεσμο με email."));
			});
	
		}); */
		
		jQuery.noConflict();

	</script>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js?ver=3.6.2pre"></script>
	<![endif]-->
	
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/sss.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/sss.css" type="text/css" media="all">
	
	
</head>

<body <?php body_class(); ?>>
	
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=205969699452649";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="outer-wrapper">

	<?php appthemes_before(); ?>

	<?php appthemes_before_header(); ?>
	<?php get_header( app_template_base() ); ?>
	<?php appthemes_after_header(); ?>
	<div id="main" class="wrapper clear">
		
		<?php if ( !is_front_page() ) : ?>
			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>
		<?php endif; ?>
		
		<?php if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && ( is_page_template('page-politis.php') || is_page_template('page-foreas.php') ) ):
			
			echo "<p id='post-added'>Thank you for your submission!<br> The content has been promoted to administration team! 
					<br><br><a href='http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]."'>Add new content</a> | <a href='".site_url()."'>Return to home</a></p>"; ?>
					
					<?php if( is_page_template("page-politis.php") ): ?>
					
					<br><br><br><br><center><img src="<?php echo get_template_directory_uri(); ?>/images/components/idea_l.png"/></center>
					<br><br>
					<?php $all = array( 'post_type' => 'idea', 'posts_per_page' => 5, 'post_status' => 'publish', 'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'idea', ), ), );	?>
					
					<?php else: ?>
					
						<br><br><br><br><center><img src="<?php echo get_template_directory_uri(); ?>/images/blob_protasis.png"/></center>
						<br><br>
						<?php $all = array( 'post_type' => 'idea', 'posts_per_page' => 5, 'post_status' => 'publish', 'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'suggestion', ), ), );	?>
						
					<?php endif; ?>
					
					<?php $loop = new WP_Query( $all );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						  
						 <article id="post-<?php the_ID(); ?>" <?php post_class( array( 'listing', 'box-shadow', 'drop-shadow', 'lifted' ) ); ?> itemscope itemtype="http://schema.org/Offer">

							<div class="listing-count fl">
								<ul>
									<li class="stats"><span class="listing-counter-votes">0</span>Votes</li>
									<li><span class="listing-counter-responses">0</span>Responses</li>
								</ul>
									</div><!-- /.listing-count -->
						
							<div class="listing-info-container clear">
						
								<div class="listing-info clear">
						
									<h2 itemprop="name"><a href="<?php the_permalink(); ?>" rel="bookmark">
										<?php 
											  echo $label_image;
											  if(has_term('idea', 'idea_type')){ echo "<img class='circled' src='".get_template_directory_uri()."/images/idea.png'> <b>Ιδέα</b>: "; }
											  elseif(has_term('suggestion', 'idea_type')){ echo "<img class='circled' src='".get_template_directory_uri()."/images/protasi.png'> <b>Πρόταση</b>: "; }
											  the_title(); ?>
									</a></h2>									
									
									<div class="idea-content" itemprop="description">
										<p class="excerpt">
											<?php the_excerpt(); ?>
										</p>
									</div>

									<div class="listing-category">
										<span class="category" itemprop="category"><?php the_idea_category(); ?></span> <span class="status <?php the_idea_status_slug(); ?>" itemprop="availability"><?php the_idea_status(); ?></span>
									</div><!-- /.listing-category -->
						
									<?php if ( is_singular( IDEAX_PTYPE ) ) { ?>
										<div class="listing-tags">
											<span class="tags"><?php the_idea_tags(); ?></span>
										</div><!-- /.listing-tags -->
						
										<div class="listing-actions">
											<?php the_idea_edit_link(); ?>
										</div><!-- /.listing-actions -->
									<?php } ?>
						
									
								</div><!-- /.listing-info -->
						
								<div class="listing-meta-wrap">
									<div class="listing-meta">
										<!--<span class="listing-author-avatar"><?php //the_author_gravatar(); ?></span>
										<span class="listing-author-username"><?php //the_idea_author(); ?></span>-->
										<span class="listing-comment-count" title="<?php esc_attr_e( 'Total Comments', APP_TD ); ?>"><?php the_idea_comments_count(); ?></span>
										<span style="display: none"><?php $pidstr = the_ID(); ?></span>
										<span class="listing-stars"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></span>
										<span class="listing-date"><?php the_idea_time(); ?></span>
									</div><!-- /.listing-meta-wrap -->
								</div><!-- /.listing-meta -->
								
								<ul class="all-response-listings">
									<?php wp_list_comments( array( 'type' => 'comment', 'callback' => 'ideax_comments') ); ?>
								</ul>
						
							</div><!-- /.listing-info-container -->
						
						</article>
						  
					<?php	endwhile;
						wp_reset_postdata();
					?>
					
					<?php if( is_page_template("page-politis.php") ): ?><a class="right blue-black" href="<?php echo home_url("/all-ideas"); ?>">All ideas ></a><?php else: ?> <a class="right blue-black" href="<?php echo home_url("/all-suggestions"); ?>">All suggestions ></a> <?php endif; ?>
							

		<?php endif; //forma politi-forea

		global $post;
		$this_page_id = get_query_var('page_id');
		//echo $post->ID;
		$the_pagee = $post->ID;
		
		$my_id = get_option('page_on_front');
		$post_id_8 = get_post($my_id);
		$content = $post_id_8->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		

		if ( is_front_page() ) {

		?>

			<div class="top-info">
				
				<h1 class="slider-title custom-color custom-border-color">Join the dialog</h1>
				
					<?php 
						
						$args = array( 'hide_empty' => 0, 'parent' => 0 );

						$challenges = get_terms( 'Challenges', $args );
						if ( ! empty( $challenges ) && ! is_wp_error( $challenges ) ):
						
						if( count($challenges) == 1) echo "<style> .sssnext, .sssprev { display: none !important; } </style>";
					?>
				
							<div class="challenge-slider">
								
								<?php foreach ( $challenges as $challenge ): ?>
									
									<div>
										<a href="<?php echo site_url("/challenges/"); ?>?c=<?php echo $challenge->term_id; ?>">
											
											<span class="top-slider-title">
												<?php if( get_field('status', "Challenges_".$challenge->term_id) == 'on' ): echo "Ongoing: "; else: echo "Finished: "; endif; ?>
												#<?php echo $challenge->name; ?>
											</span>

											<?php $parent = false; if($challenge->parent != '0'){ $parent = true;
												
												$parent = get_term( $challenge->parent, 'Challenges');
												
												echo '<span class="has-parent-category custom-bg">Belongs to: '.$parent->name.'</span>';
												
											}?>
											
											<?php if( get_field('status ', "Challenges_".$challenge->term_id) == 'on' ): ?>
											
												<?php if(!$parent): ?>
												
													<span class="caption status-on master"> <i class="fa fa-cubes"></i> Challenge: ongoing</span>
													
												
												<?php else: ?>	
												
													<span class="caption status-on"> <i class="fa fa-cube"></i> Sub-Challenge: ongoing</span>
												
												<?php endif; ?>
												
											<?php else: ?>
											
												<?php if(!$parent): ?>
												
													<span class="caption status-on"> <i class="fa fa-cubes"></i> Finished</span>
												
												<?php else: ?>	
												
													<span class="caption status-on"> <i class="fa fa-cube"></i> Sub-Challenge: Finished </span>
												
												<?php endif; ?>
												
											<?php endif; ?>
											
											<?php if( get_field('the_img', "Challenges_".$challenge->term_id) != "" ): ?>
											
												<div class="slider-img" style=" background: url(<?php echo get_field('the_img', "Challenges_".$challenge->term_id); ?>);"></div>
												
											<?php else: ?>
											
												<img class="slider-img" src="<?php echo get_option('front_image_add'); ?>" />
											
											<?php endif; ?>
											
											<?php if(!$parent): ?>
											
												<div class="master-challenge-child-count-slider custom-bg">
													
													<?php $mychildren = get_term_children( $challenge->term_id, 'Challenges' ); echo count($mychildren); ?>
													<i class="fa fa-cube"></i>
													
												</div>
											
											<?php endif; ?>
											
											
										</a>
										
										<a class="call-to-action-challenge custom-bg" 
										   href="<?php echo site_url("/challenges/"); ?>?c=<?php echo $challenge->term_id; ?>">
											<i class="fa fa-cubes"></i>
											Participate
										</a>
										
									</div>
									
									
									
								<?php endforeach; ?>
								
							</div>
							
							
					<?php endif; //if has terms inside ?>
				
			</div>
			
	</div><!-- wrapper -->
			
	<div id="how" class="full-gray">
		
		<div class="home-buttons-container">
			
			<h4 class="custom-color">How it works</h4>
			
			<div class="circle-guide">
				
				<a href="<?php echo site_url("/archive") ?>">
				<div id="ideas-sugg-item" class="home-box">
					<h4 class="gray">Ideas & suggestions</h4>
					
				</div></a>
				
				<a href="<?php echo site_url("/archive/?sort=comments") ?>">
				<div id="comments-item" class="home-box">
					<h4 class="gray">Comments</h4>
				</div></a>
				
				<a href="<?php echo site_url("/archive/?sort=rating") ?>">
				<div id="rating-item" class="home-box">
					<h4 class="gray">Ratings</h4>
				</div></a>

				<div id="politic-item" class="home-box">
					<h4 class="gray">Final Reports</h4>
					<p>& Engagement</p>
				</div>
				
			</div>
			
			<div class="row hr-above">
					
					<div class="col-md-12">

						<a id="add-new" href="<?php echo site_url(); ?>/new/" class="btn-action general custom-bg"> Send your ideas and suggestions</a>
						
					</div>
  
			</div>
			
		</div>
		
	</div>
			
	<div class="container clear">
			

		<?php }  if( !is_home() ){ 
			load_template( app_template_path() ); 
			 } ?>
		 
		
	</div><!-- /.wrapper -->
	
	<?php if( is_front_page() ): ?>
	
	<div class="full-white">
		
		<div class="row container centered">
			
			<center><h4 class="custom-color"> Platform's Participational Content </h4>
				
				<?php if(get_option('demo') == 'demo'): ?>
					<p class="caution"><i class="fa fa-info-circle fa-3x"></i>Το περιεχόμενο είναι δοκιμαστικό με στόχο την παρουσίαση των δυνατοτήτων της πλατφόρμας.</p>
				<?php endif; ?>
				
			</center>
			
			
			
			<ul id="myTabs" class="nav nav-tabs" role="tablist">
			    <li role="presentation" id="idea-tab" class="active"><a id="idea-btn" class="tab-action" href="#ideas-pane" aria-controls="ideas-pane" role="tab" data-toggle="tab">Ideas</a></li>
			    <li role="presentation" id="sugg-tab"><a id="sugg-btn" class="tab-action" href="#sugg-pane" aria-controls="sugg-pane" role="tab" data-toggle="tab">Suggestions</a></li>
			    
			</ul>
			
			<a id="map-link" href="<?php echo home_url("/map"); ?>">On the map > </a>
			
			<div class="tab-content">
				
				<div role="tabpanel" class="tab-pane fade in active" id="ideas-pane" aria-labelledBy="idea-btn">
			
					<div class="col-md-3">
						
						<img id="ideas_blob" src="<?php echo get_template_directory_uri();?>/images/blob_ideas.png" /> <br><br>
						<a class="ideas-bg padding" href="<?php echo site_url("/all-ideas"); ?>">All ideas</a>
						<br><br>
			
					</div>
					
					<div class="col-md-9">
		
						<?php 
						
							$ideas_args = array( 'post_type' => 'idea', 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish', 'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'idea', ), ), );	
							$loopIdeas = get_posts( $ideas_args );
							if($loopIdeas):
							foreach ( $loopIdeas as $post ) : setup_postdata( $post ); ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'listing', 'box-shadow', 'drop-shadow', 'lifted', 'ideaa' ) ); ?> itemscope itemtype="http://schema.org/Offer">
								
									<div class="listing-count fl">
										<ul>
											<li class="stats"><span class="listing-counter-votes"><?php the_votes(); ?></span><?php echo _n( 'Vote', 'Votes', get_the_votes(), APP_TD ); ?></li>
											<li><span class="listing-counter-responses"><?php the_responses(); ?></span><?php echo _n( 'Response', 'Responses', get_the_responses(), APP_TD ); ?></li>
										</ul>
										<?php if ( is_singular( IDEAX_PTYPE ) ) echo ideax_vote_arrows(); ?>
									</div><!-- /.listing-count -->
								
									<div class="listing-info-container clear">
								
										<div class="listing-info clear">
											
											<div class="social-icons">
												<a href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink(); ?>" class="twitter-share-button">
													<i class="fa fa-twitter"></i>
												</a>
												
												<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="facebook-share-button">
													<i class="fa fa-facebook"></i>
												</a>
												
												<span>share this</span>
											</div>
								
											<?php appthemes_before_post_title( IDEAX_PTYPE ); ?>
								
											<?php if ( is_singular( IDEAX_PTYPE ) ) : ?>
												<h2 itemprop="name"><strong>Ιδέα:</strong> <?php the_title(); ?></h2>
											<?php else: ?>
												<h2 itemprop="name"><a href="<?php the_permalink(); ?>" rel="bookmark"><strong>Idea:</strong> <?php the_title(); ?></a></h2>
											<?php endif; ?>
								
											<?php appthemes_after_post_title( IDEAX_PTYPE ); ?>
								
											<div class="idea-content" itemprop="description">
												<?php if ( is_singular( IDEAX_PTYPE ) ) : ?>
													<?php the_content(); ?>
												<?php else : ?>
													<p class="excerpt"><?php strip_tags( the_excerpt() ); ?> (<a href="<?php the_permalink(); ?>" class="view-more-link">περισσότερα</a>) </p>
												<?php endif; ?> 
												
											</div>
								
											<?php if ( 'publish' != get_post_status() ) { ?>
												<div class="pending-review"><?php _e( 'Pending Review', APP_TD ); ?></div>
											<?php } ?>
											
											
											<?php if( count(wp_get_object_terms( $post->ID, 'Challenges')) > 0 ): 
													$term = wp_get_object_terms( $post->ID, 'Challenges'); ?>
											
												<a class="challenge-show-box custom-bg" href="<?php echo site_url("/challenges/?c=").$term[0]->term_id; ?>">
													<i class="fa fa-cubes"></i> <?php echo $term[0]->name; ?>
												</a>
												
											<?php else: ?>
											
												<a class="challenge-show-box custom-bg" href="<?php echo site_url("/archive"); ?>">
													Generic Deliberation
												</a>
											
											<?php endif; ?>
												
											<div class="listing-category">
												<span class="category" itemprop="category"><?php the_idea_category(); ?></span> <span class="status <?php the_idea_status_slug(); ?>" itemprop="availability"><?php the_idea_status(); ?></span> <span class="listing-stars"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></span>
											</div><!-- /.listing-category -->
								
											<?php if ( is_singular( IDEAX_PTYPE ) ) { ?>
												<div class="listing-tags">
													<span class="tags"><?php the_idea_tags(); ?></span>
												</div><!-- /.listing-tags -->
								
												<div class="listing-actions">
													<?php the_idea_edit_link(); ?>
												</div><!-- /.listing-actions -->
											<?php } ?>
								
										</div><!-- /.listing-info -->
								
									</div><!-- /.listing-info-container -->
								
								</article>
		
							<?php
								  
							endforeach; 
							else:?>
							
								<h3>There is no idea submitted...</h3>
								<h1 class="idea-color big">Take the advance and submit one!</h1>
								<a id="politis-btn" href="<?php echo site_url(); ?>/politis/" class="btn-action"><i class="fa fa-user"></i> Submit an idea</a>
							
							<?php endif;
							wp_reset_postdata();
							
							?>						
						
					</div>
				
				</div><!--tab-pane-->
				
				<div role="tabpanel" class="tab-pane fade" id="sugg-pane" aria-labelledBy="sugg-btn">
					
					<div class="col-md-3">
						
						<img id="protasi_blob" src="<?php echo get_template_directory_uri();?>/images/blob_protasis.png" />
						<h2 id="protaseis-label">SUGGESTIONS</h2>
						<a class="sugg-bg padding" href="<?php echo site_url("/all-suggestions"); ?>">All suggestions</a>
			
					</div>
					
					<div class="col-md-9">
							
							<?php
							$ideas_args = array( 'post_type' => 'idea', 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish', 'tax_query' => array( array( 'taxonomy' => 'idea_type', 'field' => 'slug', 'terms' => 'suggestion', ), ), );	
							$loopIdeas = get_posts( $ideas_args );
							if($loopIdeas):
							foreach ( $loopIdeas as $post ) : setup_postdata( $post ); ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'listing', 'box-shadow', 'drop-shadow', 'lifted', 'protasi' ) ); ?> itemscope itemtype="http://schema.org/Offer">
								
									<div class="listing-count fl">
										<ul>
											<li class="stats"><span class="listing-counter-votes"><?php the_votes(); ?></span><?php echo _n( 'Vote', 'Votes', get_the_votes(), APP_TD ); ?></li>
											<li><span class="listing-counter-responses"><?php the_responses(); ?></span><?php echo _n( 'Response', 'Responses', get_the_responses(), APP_TD ); ?></li>
										</ul>
										<?php if ( is_singular( IDEAX_PTYPE ) ) echo ideax_vote_arrows(); ?>
									</div><!-- /.listing-count -->
								
									<div class="listing-info-container clear">
								
										<div class="listing-info clear type-protasi">
											
											<div class="social-icons">
												<a href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink(); ?>" class="twitter-share-button">
													<i class="fa fa-twitter"></i>
												</a>
												
												<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="facebook-share-button">
													<i class="fa fa-facebook"></i>
												</a>
												
												<span>share this</span>
											</div>
								
											<?php appthemes_before_post_title( IDEAX_PTYPE ); ?>
								
											<?php if ( is_singular( IDEAX_PTYPE ) ) : ?>
												<h2 itemprop="name"><strong>Πρόταση:</strong> <?php the_title(); ?></h2>
											<?php else: ?>
												<h2 itemprop="name"><a href="<?php the_permalink(); ?>" rel="bookmark"><strong>Suggestion:</strong> <?php the_title(); ?></a></h2>
											<?php endif; ?>
								
											<?php appthemes_after_post_title( IDEAX_PTYPE ); ?>
								
											<div class="idea-content" itemprop="description">
												<?php if ( is_singular( IDEAX_PTYPE ) ) : ?>
													<?php the_content(); ?>
												<?php else : ?>
													<p class="excerpt"><?php strip_tags( the_excerpt() ); ?></p>
												<?php endif; ?>
											</div>
								
											<?php if ( 'publish' != get_post_status() ) { ?>
												<div class="pending-review"><?php _e( 'Pending Review', APP_TD ); ?></div>
											<?php } ?>
								
								
											<div class="listing-category">
												<span class="category" itemprop="category"><?php the_idea_category(); ?></span> <span class="status <?php the_idea_status_slug(); ?>" itemprop="availability"><?php the_idea_status(); ?></span> <span class="listing-stars"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></span>
											</div><!-- /.listing-category -->
								
											<?php if ( is_singular( IDEAX_PTYPE ) ) { ?>
												<div class="listing-tags">
													<span class="tags"><?php the_idea_tags(); ?></span>
												</div><!-- /.listing-tags -->
								
												<div class="listing-actions">
													<?php the_idea_edit_link(); ?>
												</div><!-- /.listing-actions -->
											<?php } ?>
								
										</div><!-- /.listing-info -->
								
									</div><!-- /.listing-info-container -->
								
								</article>
		
							<?php
								  
							endforeach; 
							else: ?>
							
								<h3>The is no submitted suggestion...</h3>
								<h1 class="sugg-color big">Take the advance and submit one!</h1>
								<a id="foreas-btn" href="<?php echo site_url(); ?>/foreas/" class="btn-action"><i class="fa fa-building-o"></i> Submit a suggestion</a>
							
							<?php endif;
							wp_reset_postdata();
							
						?>
						
						
					</div>
					
				</div><!--tab-pane-->
			
			</div> <!--tab-contnent-->
			
		</div>
				
	</div>
		
			<div class="container clear bottom-gap">
			
			<div class="row"> 
				
				
				<?php 
					
					if( get_option('facebook_page_url') != '' ){ $social = true; } else{ $social = false; }
					
					if( $content != '' ): ?>
				
				<div class="col-md-<?php if($social){ echo "6"; } else{ echo "12"; } ?>">
					
					<h4 class="gray">What is?</h4>
					
					<div id="what-is" class="content-wrapper">
						<?php echo apply_filters( 'the_content', $content ); ?>
					</div>
					
					
				</div>
				
				<?php endif; if( $social ): ?>
				
				<div class="col-md-6">
					
					
					<h4 class="gray">Chat on social media</h4>
					
					<div class="fb-page" data-href="<?php echo esc_attr( get_option('facebook_page_url') ); ?>" data-width="500" data-height="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
					
				</div>
				
				<?php endif; ?>
				
			</div>
			
		</div>
		
		<?php endif; ?>
	
	<script type="text/javascript">
		
		<?php if(! is_front_page()): ?>
		
			//jQuery(document).ready(function(a){a(".kk-star-ratings").kkstarratings()});
		
		<?php endif; ?>
		
		jQuery(window).ready(function($){
			
			$('.breadcrumbs > span:nth-child(1)').remove();
			$('.breadcrumbs span a:contains("Blog")').remove();
		});
		
		function openComments(el){
			var cid = "'." + el.getAttribute('data-comment') + "'";
			var comments = eval(cid);
			jQuery(comments).fadeToggle();
			
			if( jQuery(el).text().substr(0, 4) === ("Απόκ") ){
				jQuery(el).text("Εμφάνιση σχολίων");
			}
			
			else{
				jQuery(el).text("Απόκρυψη σχολίων");
			}
		}
		
		function openCommentForm(el){
			var cid = "'." + el.getAttribute('data-comment-form') + "'";
			var commentsForm = eval(cid);
			jQuery(commentsForm).fadeToggle();
			
			if( jQuery(el).hasClass("open") ){
				jQuery(el).removeClass("open");
			}
			
			else{
				jQuery(el).addClass("open");
			}
		}
		
	</script>
	

	<?php appthemes_before_footer(); ?>
	<?php get_footer( app_template_base() ); ?>
	<?php appthemes_after_footer(); ?>

	<?php appthemes_after(); ?>

	<?php wp_footer();?>
	
	<script type="text/javascript">
		
		<?php if(is_front_page()): ?>
		
		jQuery(function($) {
			
			$('.challenge-slider').sss({
				slideShow : true, // Set to false to prevent SSS from automatically animating.
				startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
				transition : 400, // Length (in milliseconds) of the fade transition.
				speed : 5500, // Slideshow speed in milliseconds.
				showNav : true // Set to false to hide navigation arrows.
			});
	
			
		});
		
		<?php endif; ?>
		
	</script>

</body>
</html>
