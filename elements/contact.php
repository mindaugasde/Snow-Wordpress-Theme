<?php
$blog = get_field('s_cs_contact_page');
$form = get_field('s_cs_form');
$post_data = get_post($blog[0]);
global $post;
$post = $post_data;
setup_postdata($post);
?>
<div class="container" id="contact">
	<div class="nk-gap-5"></div>
	<div class="row vertical-gap">
			<div class="col-lg-5">
					<!-- START: Info -->
					<h2 class="display-4"><?php the_title(); ?>:</h2>
					<div class="nk-gap mnt-3"></div>

					<?php
					the_content();
					wp_reset_postdata();
					?>

					<ul class="nk-contact-info">
							<?php if($address = get_field_object('s_ms_address','option')): ?>
							<li>
									<strong><?php echo $address['label']; ?>:</strong> <?php echo $address['value']; ?></li>
							<?php endif; ?>
							<?php if($phone = get_field_object('s_ms_phone','option')):
							$phone_value = $phone['value'];
							$str_phone = str_replace(' ','',$phone_value);
							?>
							<li>
									<strong><?php echo $phone['label']; ?>:</strong> <a href="tel:<?php echo $str_phone; ?>"><?php echo $phone['value']; ?></a></li>
							<?php endif; ?>
							<?php if($email = get_field_object('s_ms_email','option')): ?>
							<li>
									<strong><?php echo $email['label']; ?>:</strong> <a href="mailto:<?php echo $email['value']; ?>"><?php echo $email['value']; ?></a></li>
							<?php endif; ?>
							<?php if($fax = get_field_object('s_ms_fax','option')):
							$fax_value = $fax['value'];
							$str_fax = str_replace(' ','',$fax_value);
							?>
							<li>
									<strong><?php echo $fax['label']; ?>:</strong> <a href="tel:<?php echo $str_fax; ?>"><?php echo $fax['value']; ?></a></li>
							<?php endif; ?>
					</ul>
					<!-- END: Info -->
			</div>
			<div class="col-lg-7">
					<!-- START: Form -->
					<?php
					$form_id = $form->ID;
					$form_title = $form->post_title;
					echo do_shortcode("[contact-form-7 id='$form_id' title='$form_title' html_class='nk-form nk-form-ajax']");
					?>
					<!-- END: Form -->
			</div>
	</div>
	<div class="nk-gap-5"></div>
</div>