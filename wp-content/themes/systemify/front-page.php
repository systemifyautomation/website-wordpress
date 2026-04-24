<?php
/**
 * Front Page Template — Systemify Automation
 *
 * @package systemify
 */

get_header();
?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section id="hero" aria-label="<?php esc_attr_e( 'Hero', 'systemify' ); ?>">
	<div class="container">
		<div class="hero-inner">

			<div class="hero-content reveal">
				<div class="hero-badge">
					<span class="dot" aria-hidden="true"></span>
					<?php esc_html_e( 'AI Automation for Service Businesses', 'systemify' ); ?>
				</div>

				<h1 class="hero-title">
					<?php esc_html_e( 'Deliver Faster.', 'systemify' ); ?><br>
					<span class="highlight"><?php esc_html_e( 'Zero Admin', 'systemify' ); ?></span>
					<?php esc_html_e( ' Headache.', 'systemify' ); ?>
				</h1>

				<p class="hero-subtitle">
					<?php esc_html_e( 'Systemify Automation plugs AI-powered workflows into your service business so you close leads faster, onboard clients smoother, and reclaim hours every week.', 'systemify' ); ?>
				</p>

				<div class="hero-actions">
					<a href="#contact" class="btn btn-primary">
						<?php esc_html_e( '🚀 Book a Free Strategy Call', 'systemify' ); ?>
					</a>
					<a href="#how-it-works" class="btn btn-outline">
						<?php esc_html_e( 'See How It Works', 'systemify' ); ?>
					</a>
				</div>

				<div class="hero-social-proof">
					<div class="proof-avatars" aria-hidden="true">
						<div class="proof-avatar">SA</div>
						<div class="proof-avatar">MK</div>
						<div class="proof-avatar">JL</div>
						<div class="proof-avatar">+</div>
					</div>
					<p class="proof-text">
						<strong><?php esc_html_e( '50+ businesses', 'systemify' ); ?></strong>
						<?php esc_html_e( ' already automated with Systemify', 'systemify' ); ?>
					</p>
				</div>
			</div>

			<!-- Fake dashboard visual -->
			<div class="hero-visual reveal" aria-hidden="true">
				<div class="hero-dashboard">
					<div class="dash-header">
						<div class="dash-dots">
							<div class="dash-dot"></div>
							<div class="dash-dot"></div>
							<div class="dash-dot"></div>
						</div>
						<span class="dash-title">systemify-dashboard</span>
					</div>

					<div class="dash-metric-row">
						<div class="dash-metric">
							<div class="metric-label">Leads This Week</div>
							<div class="metric-value">47</div>
							<div class="metric-delta">↑ 28% vs last week</div>
						</div>
						<div class="dash-metric">
							<div class="metric-label">Hours Saved</div>
							<div class="metric-value">18h</div>
							<div class="metric-delta">↑ Auto-handled</div>
						</div>
					</div>

					<div class="dash-automation-item">
						<div class="auto-icon blue">⚡</div>
						<span class="auto-name">Lead Follow-up Sequence</span>
						<span class="auto-status running">Running</span>
					</div>
					<div class="dash-automation-item">
						<div class="auto-icon teal">📋</div>
						<span class="auto-name">Client Onboarding Flow</span>
						<span class="auto-status running">Running</span>
					</div>
					<div class="dash-automation-item">
						<div class="auto-icon green">📊</div>
						<span class="auto-name">Weekly Report Generator</span>
						<span class="auto-status queued">Queued</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ============================================================
     TRUSTED BY
     ============================================================ -->
<section id="trust" aria-label="<?php esc_attr_e( 'Trusted by', 'systemify' ); ?>">
	<div class="container trust-inner">
		<p class="trust-label"><?php esc_html_e( 'Trusted by service businesses across industries', 'systemify' ); ?></p>
		<div class="trust-logos" aria-label="<?php esc_attr_e( 'Partner logos', 'systemify' ); ?>">
			<span class="trust-logo">AgencyPro</span>
			<span class="trust-logo">LawFlowHQ</span>
			<span class="trust-logo">CoachStack</span>
			<span class="trust-logo">MedConnect</span>
			<span class="trust-logo">RealFunnel</span>
			<span class="trust-logo">FinAdvise</span>
		</div>
	</div>
</section>

<!-- ============================================================
     SERVICES
     ============================================================ -->
<section id="services" class="section-pad" aria-labelledby="services-heading">
	<div class="container">
		<div class="section-header text-center reveal">
			<span class="section-label"><?php esc_html_e( 'What We Do', 'systemify' ); ?></span>
			<h2 id="services-heading"><?php esc_html_e( 'AI Automations Built for Service Leads', 'systemify' ); ?></h2>
			<p><?php esc_html_e( 'Every automation is designed around one goal: helping you close leads faster and deliver to clients without drowning in admin work.', 'systemify' ); ?></p>
		</div>

		<div class="services-grid">

			<article class="service-card reveal">
				<div class="service-icon" aria-hidden="true">🎯</div>
				<h3><?php esc_html_e( 'Lead Capture & Nurturing', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'Automatically capture, score, and follow up with every inbound lead — no manual chasing. AI-personalised sequences keep prospects warm until they\'re ready to buy.', 'systemify' ); ?></p>
				<span class="service-tag"><?php esc_html_e( 'CRM + AI', 'systemify' ); ?></span>
			</article>

			<article class="service-card reveal">
				<div class="service-icon" aria-hidden="true">🚀</div>
				<h3><?php esc_html_e( 'Client Onboarding Automation', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'From signed contract to first deliverable — automate proposals, contracts, intake forms, and welcome sequences so new clients feel taken care of instantly.', 'systemify' ); ?></p>
				<span class="service-tag"><?php esc_html_e( 'Onboarding', 'systemify' ); ?></span>
			</article>

			<article class="service-card reveal">
				<div class="service-icon" aria-hidden="true">🤖</div>
				<h3><?php esc_html_e( 'AI Workflow Builder', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'Custom Make.com / n8n / Zapier workflows powered by GPT-4. From data entry to email drafts to scheduling — your back-office runs on autopilot.', 'systemify' ); ?></p>
				<span class="service-tag"><?php esc_html_e( 'AI Workflows', 'systemify' ); ?></span>
			</article>

			<article class="service-card reveal">
				<div class="service-icon" aria-hidden="true">📊</div>
				<h3><?php esc_html_e( 'Reporting & Analytics', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'Auto-generated weekly and monthly reports delivered straight to your inbox. Know exactly what\'s working without digging through spreadsheets.', 'systemify' ); ?></p>
				<span class="service-tag"><?php esc_html_e( 'Analytics', 'systemify' ); ?></span>
			</article>

			<article class="service-card reveal">
				<div class="service-icon" aria-hidden="true">💬</div>
				<h3><?php esc_html_e( 'AI Chat & Support Bot', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'Deploy an AI assistant that handles FAQs, qualifies leads, books calls, and escalates to your team only when necessary — 24 / 7.', 'systemify' ); ?></p>
				<span class="service-tag"><?php esc_html_e( 'Chatbot', 'systemify' ); ?></span>
			</article>

			<article class="service-card reveal">
				<div class="service-icon" aria-hidden="true">🔗</div>
				<h3><?php esc_html_e( 'System Integrations', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'Connect your CRM, calendar, invoicing, Slack, email, and any other tool into a single automated ecosystem. We make your tools talk to each other.', 'systemify' ); ?></p>
				<span class="service-tag"><?php esc_html_e( 'Integrations', 'systemify' ); ?></span>
			</article>

		</div>
	</div>
</section>

<!-- ============================================================
     HOW IT WORKS
     ============================================================ -->
<section id="how-it-works" class="section-pad" aria-labelledby="hiw-heading">
	<div class="container">
		<div class="section-header text-center reveal">
			<span class="section-label"><?php esc_html_e( 'Process', 'systemify' ); ?></span>
			<h2 id="hiw-heading"><?php esc_html_e( 'Up & Running in 3 Steps', 'systemify' ); ?></h2>
			<p><?php esc_html_e( 'No long onboarding cycles. We map, build, and launch your automations in days, not months.', 'systemify' ); ?></p>
		</div>

		<div class="steps-grid">
			<div class="step-item reveal">
				<div class="step-number" aria-hidden="true">1</div>
				<h3><?php esc_html_e( 'Discovery Call', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'We map your current workflow, identify the biggest bottlenecks, and design an automation roadmap tailored to your business.', 'systemify' ); ?></p>
			</div>
			<div class="step-item reveal">
				<div class="step-number" aria-hidden="true">2</div>
				<h3><?php esc_html_e( 'Build & Integrate', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'Our team builds and connects the automations to your existing tools. You review and approve before anything goes live.', 'systemify' ); ?></p>
			</div>
			<div class="step-item reveal">
				<div class="step-number" aria-hidden="true">3</div>
				<h3><?php esc_html_e( 'Launch & Optimise', 'systemify' ); ?></h3>
				<p><?php esc_html_e( 'We go live, monitor performance, and keep optimising. Monthly check-ins ensure your system grows with your business.', 'systemify' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- ============================================================
     RESULTS / STATS
     ============================================================ -->
<section id="results" class="section-pad" aria-labelledby="results-heading">
	<div class="container results-inner">
		<div class="section-header text-center reveal">
			<span class="section-label" style="color:var(--color-accent);background:rgba(0,212,170,.12);"><?php esc_html_e( 'Results', 'systemify' ); ?></span>
			<h2 id="results-heading" style="color:var(--color-white);"><?php esc_html_e( 'Numbers That Speak for Themselves', 'systemify' ); ?></h2>
			<p style="color:rgba(255,255,255,.55);"><?php esc_html_e( 'Average results across our client portfolio within the first 90 days.', 'systemify' ); ?></p>
		</div>

		<div class="stats-grid">
			<div class="stat-item reveal">
				<div class="stat-number">3×</div>
				<div class="stat-label"><?php esc_html_e( 'Faster Lead Response', 'systemify' ); ?></div>
			</div>
			<div class="stat-item reveal">
				<div class="stat-number">18h</div>
				<div class="stat-label"><?php esc_html_e( 'Admin Hours Saved / Week', 'systemify' ); ?></div>
			</div>
			<div class="stat-item reveal">
				<div class="stat-number">40%</div>
				<div class="stat-label"><?php esc_html_e( 'Higher Conversion Rate', 'systemify' ); ?></div>
			</div>
			<div class="stat-item reveal">
				<div class="stat-number">50+</div>
				<div class="stat-label"><?php esc_html_e( 'Businesses Automated', 'systemify' ); ?></div>
			</div>
		</div>
	</div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section id="testimonials" class="section-pad" aria-labelledby="testimonials-heading">
	<div class="container">
		<div class="section-header text-center reveal">
			<span class="section-label"><?php esc_html_e( 'Testimonials', 'systemify' ); ?></span>
			<h2 id="testimonials-heading"><?php esc_html_e( 'What Our Clients Say', 'systemify' ); ?></h2>
		</div>

		<div class="testimonials-grid">

			<div class="testimonial-card reveal">
				<div class="testimonial-stars" aria-label="<?php esc_attr_e( '5 stars', 'systemify' ); ?>">★★★★★</div>
				<p class="testimonial-text">&ldquo;<?php esc_html_e( 'Systemify completely transformed how we handle new leads. We used to lose deals because follow-up was manual and slow. Now it\'s instant — and we\'ve seen a 35% uptick in closes.', 'systemify' ); ?>&rdquo;</p>
				<div class="testimonial-author">
					<div class="author-avatar" aria-hidden="true">SA</div>
					<div>
						<div class="author-name"><?php esc_html_e( 'Sophie A.', 'systemify' ); ?></div>
						<div class="author-role"><?php esc_html_e( 'Founder, Digital Marketing Agency', 'systemify' ); ?></div>
					</div>
				</div>
			</div>

			<div class="testimonial-card reveal">
				<div class="testimonial-stars" aria-label="<?php esc_attr_e( '5 stars', 'systemify' ); ?>">★★★★★</div>
				<p class="testimonial-text">&ldquo;<?php esc_html_e( 'The onboarding automation alone saved us 10 hours a week. Clients get a seamless experience from day one, and my team can focus on actual work instead of admin.', 'systemify' ); ?>&rdquo;</p>
				<div class="testimonial-author">
					<div class="author-avatar" aria-hidden="true">MK</div>
					<div>
						<div class="author-name"><?php esc_html_e( 'Marcus K.', 'systemify' ); ?></div>
						<div class="author-role"><?php esc_html_e( 'CEO, SaaS Consulting Firm', 'systemify' ); ?></div>
					</div>
				</div>
			</div>

			<div class="testimonial-card reveal">
				<div class="testimonial-stars" aria-label="<?php esc_attr_e( '5 stars', 'systemify' ); ?>">★★★★★</div>
				<p class="testimonial-text">&ldquo;<?php esc_html_e( 'Working with a team that understands both tech and business strategy is rare. Systemify delivered fast, communicated clearly, and the ROI was clear within 3 weeks.', 'systemify' ); ?>&rdquo;</p>
				<div class="testimonial-author">
					<div class="author-avatar" aria-hidden="true">JL</div>
					<div>
						<div class="author-name"><?php esc_html_e( 'Jamila L.', 'systemify' ); ?></div>
						<div class="author-role"><?php esc_html_e( 'Operations Lead, Law Practice', 'systemify' ); ?></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ============================================================
     ABOUT
     ============================================================ -->
<section id="about" class="section-pad" aria-labelledby="about-heading">
	<div class="container">
		<div class="about-inner">

			<div class="about-visual reveal">
				<div class="about-card">
					<div class="about-founder-icon" aria-hidden="true">👨‍💻</div>
					<h3><?php esc_html_e( 'Built by a Moroccan Engineer', 'systemify' ); ?> <span class="about-flag" aria-label="Moroccan flag">🇲🇦</span></h3>
					<p class="role"><?php esc_html_e( 'AI Automation Engineer & Founder', 'systemify' ); ?></p>
					<p>
						<?php esc_html_e( 'Systemify Automation was born out of a frustration familiar to every service business owner: brilliant talent buried under emails, admin, and repetitive tasks. Our founder combined deep engineering expertise with an operator\'s perspective to build automations that actually solve real business problems.', 'systemify' ); ?>
					</p>
					<div class="about-skills">
						<span class="skill-tag">Make.com</span>
						<span class="skill-tag">n8n</span>
						<span class="skill-tag">GPT-4</span>
						<span class="skill-tag">Zapier</span>
						<span class="skill-tag">GoHighLevel</span>
						<span class="skill-tag">HubSpot</span>
						<span class="skill-tag">Airtable</span>
						<span class="skill-tag">Notion</span>
					</div>
				</div>
			</div>

			<div class="about-content reveal">
				<span class="section-label"><?php esc_html_e( 'Our Mission', 'systemify' ); ?></span>
				<h2 id="about-heading"><?php esc_html_e( 'We Help Service Businesses Run Like Tech Companies', 'systemify' ); ?></h2>
				<p>
					<?php esc_html_e( 'Most service businesses are leaving revenue on the table — not because they lack talent, but because manual admin slows everything down. We change that.', 'systemify' ); ?>
				</p>
				<p>
					<?php esc_html_e( 'Systemify plugs AI-powered automation into your existing tools, eliminating the repetitive tasks that eat your hours and frustrate your team. The result? You deliver faster, impress clients, and grow without hiring extra admin staff.', 'systemify' ); ?>
				</p>

				<ul class="about-list">
					<li class="about-list-item">
						<div class="about-list-icon" aria-hidden="true">✓</div>
						<span class="about-list-text"><?php esc_html_e( 'Built specifically for lead-based service businesses (agencies, coaches, consultants, law firms, and more)', 'systemify' ); ?></span>
					</li>
					<li class="about-list-item">
						<div class="about-list-icon" aria-hidden="true">✓</div>
						<span class="about-list-text"><?php esc_html_e( 'No-code and AI-powered — we work with your existing tools, not against them', 'systemify' ); ?></span>
					</li>
					<li class="about-list-item">
						<div class="about-list-icon" aria-hidden="true">✓</div>
						<span class="about-list-text"><?php esc_html_e( 'Fast turnaround — most workflows go live in under 2 weeks', 'systemify' ); ?></span>
					</li>
					<li class="about-list-item">
						<div class="about-list-icon" aria-hidden="true">✓</div>
						<span class="about-list-text"><?php esc_html_e( 'Ongoing support and optimisation to keep your systems running at peak performance', 'systemify' ); ?></span>
					</li>
				</ul>

				<a href="#contact" class="btn btn-ghost mt-lg"><?php esc_html_e( 'Start Your Automation Journey →', 'systemify' ); ?></a>
			</div>

		</div>
	</div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<section id="cta" class="section-pad" aria-labelledby="cta-heading">
	<div class="container">
		<div class="cta-inner reveal">
			<h2 id="cta-heading"><?php esc_html_e( 'Ready to Stop Doing Admin and Start Closing Deals?', 'systemify' ); ?></h2>
			<p><?php esc_html_e( 'Book a free 30-minute strategy call. We\'ll map out exactly which automations will move the needle most for your business — no fluff, no sales pitch.', 'systemify' ); ?></p>
			<div class="cta-actions">
				<a href="#contact" class="btn btn-accent"><?php esc_html_e( '🚀 Book Free Strategy Call', 'systemify' ); ?></a>
				<a href="#services" class="btn btn-outline"><?php esc_html_e( 'Explore Services', 'systemify' ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- ============================================================
     CONTACT
     ============================================================ -->
<section id="contact" class="section-pad" aria-labelledby="contact-heading">
	<div class="container">
		<div class="contact-inner">

			<div class="contact-info reveal">
				<span class="section-label"><?php esc_html_e( 'Get In Touch', 'systemify' ); ?></span>
				<h2 id="contact-heading"><?php esc_html_e( 'Let\'s Build Your Automation System', 'systemify' ); ?></h2>
				<p><?php esc_html_e( 'Fill in the form and we\'ll get back to you within 24 hours to schedule your free strategy call.', 'systemify' ); ?></p>

				<div class="contact-items">
					<div class="contact-item">
						<div class="contact-item-icon" aria-hidden="true">📧</div>
						<div>
							<div class="contact-item-label"><?php esc_html_e( 'Email Us', 'systemify' ); ?></div>
							<div class="contact-item-value">
								<a href="mailto:hello@systemifyautomation.com">hello@systemifyautomation.com</a>
							</div>
						</div>
					</div>
					<div class="contact-item">
						<div class="contact-item-icon" aria-hidden="true">💼</div>
						<div>
							<div class="contact-item-label"><?php esc_html_e( 'LinkedIn', 'systemify' ); ?></div>
							<div class="contact-item-value">
								<a href="https://linkedin.com/company/systemifyautomation" target="_blank" rel="noopener noreferrer">linkedin.com/company/systemifyautomation</a>
							</div>
						</div>
					</div>
					<div class="contact-item">
						<div class="contact-item-icon" aria-hidden="true">📍</div>
						<div>
							<div class="contact-item-label"><?php esc_html_e( 'Based In', 'systemify' ); ?></div>
							<div class="contact-item-value"><?php esc_html_e( 'Morocco 🇲🇦 — Working Globally', 'systemify' ); ?></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Contact form -->
			<div class="contact-form reveal" role="form" aria-labelledby="contact-heading">
				<form id="systemify-contact-form" novalidate>
					<?php wp_nonce_field( 'systemify_nonce', 'systemify_nonce_field' ); ?>

					<div class="form-row">
						<div class="form-group">
							<label for="contact-name"><?php esc_html_e( 'Full Name *', 'systemify' ); ?></label>
							<input type="text" id="contact-name" name="name" placeholder="<?php esc_attr_e( 'Your name', 'systemify' ); ?>" required autocomplete="name">
						</div>
						<div class="form-group">
							<label for="contact-email"><?php esc_html_e( 'Email Address *', 'systemify' ); ?></label>
							<input type="email" id="contact-email" name="email" placeholder="<?php esc_attr_e( 'you@company.com', 'systemify' ); ?>" required autocomplete="email">
						</div>
					</div>

					<div class="form-group">
						<label for="contact-company"><?php esc_html_e( 'Company / Business Name', 'systemify' ); ?></label>
						<input type="text" id="contact-company" name="company" placeholder="<?php esc_attr_e( 'Your company name', 'systemify' ); ?>" autocomplete="organization">
					</div>

					<div class="form-group">
						<label for="contact-service"><?php esc_html_e( 'What are you interested in?', 'systemify' ); ?></label>
						<select id="contact-service" name="service">
							<option value=""><?php esc_html_e( 'Select a service', 'systemify' ); ?></option>
							<option value="lead-capture"><?php esc_html_e( 'Lead Capture & Nurturing', 'systemify' ); ?></option>
							<option value="onboarding"><?php esc_html_e( 'Client Onboarding Automation', 'systemify' ); ?></option>
							<option value="ai-workflows"><?php esc_html_e( 'AI Workflow Builder', 'systemify' ); ?></option>
							<option value="reporting"><?php esc_html_e( 'Reporting & Analytics', 'systemify' ); ?></option>
							<option value="chatbot"><?php esc_html_e( 'AI Chat & Support Bot', 'systemify' ); ?></option>
							<option value="integrations"><?php esc_html_e( 'System Integrations', 'systemify' ); ?></option>
							<option value="full-audit"><?php esc_html_e( 'Full Business Automation Audit', 'systemify' ); ?></option>
						</select>
					</div>

					<div class="form-group">
						<label for="contact-message"><?php esc_html_e( 'Tell us about your business *', 'systemify' ); ?></label>
						<textarea id="contact-message" name="message" placeholder="<?php esc_attr_e( 'Briefly describe your business and the biggest admin/workflow challenge you face...', 'systemify' ); ?>" required></textarea>
					</div>

					<div id="form-feedback" role="alert" aria-live="polite" hidden></div>

					<button type="submit" class="btn btn-primary form-submit">
						<?php esc_html_e( 'Send Message →', 'systemify' ); ?>
					</button>
				</form>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
