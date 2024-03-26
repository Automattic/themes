<?php
/**
 * Title: Portfolio
 * Slug: portia/text-portfolio
 * Categories: text
 * Viewport width: 1824
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}},"dimensions":{"minHeight":""},"position":{"type":""}},"layout":{"type":"constrained"},"metadata":{"name":"Portfolio"}} -->

<div class="wp-block-group alignwide" id="portfolio" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"840px","justifyContent":"left"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->

			<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Portfolio', 'portia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Legal scholarship and our intellectual legacy', 'portia' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"396px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Our firm&rsquo;s engagement in legal scholarship demonstrates our dedication to advancing the law and supporting the legal community. Our research papers, focusing on critical issues and trends, not only highlight our expertise but also contribute to the ongoing development of legal practices. This scholarly work underpins our intellectual legacy and our commitment to positively impact legal understanding and innovation.', 'portia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-column">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
						<div class="wp-block-group" style="min-height:100%">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="wp-block-group">
								<!-- wp:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size"><em><?php echo esc_html__( 'Family Law', 'portia' ); ?></em></p>
								<!-- /wp:paragraph -->

								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
								<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Adapting Family Law to Modern Challenges: A Path Forward (May 2022)', 'portia' ); ?></h3>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:group -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html__( 'This paper provides an in-depth analysis of how family law has evolved to address contemporary issues such as same-sex marriage, surrogacy, and digital privacy. It outlines significant legislative changes and court decisions that have shaped family law practice. By examining these trends, the paper offers insights into future legal challenges and proposes strategies for legal practitioners to better serve their clients in this dynamic area of law.', 'portia' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><a href="#"><?php echo esc_html__( 'Read more &rarr;', 'portia' ); ?> </a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
						<div class="wp-block-group" style="min-height:100%">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="wp-block-group">
								<!-- wp:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size"><em><?php echo esc_html__( 'Wills, Trusts, & Probate', 'portia' ); ?></em></p>
								<!-- /wp:paragraph -->

								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
								<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'The Future of Estate Planning: Integrating Digital Assets into Wills and Trusts (August 2021)', 'portia' ); ?></h3>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:group -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html__( 'Addressing the critical intersection of digital innovation and estate planning, this paper explores the incorporation of digital assets into wills and trusts. It reviews existing legal frameworks, identifies gaps, and proposes forward-thinking solutions to ensure comprehensive estate management, emphasizing the importance of adapting to the digital age.', 'portia' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><a href="#"><?php echo esc_html__( 'Read more &rarr;', 'portia' ); ?></a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
