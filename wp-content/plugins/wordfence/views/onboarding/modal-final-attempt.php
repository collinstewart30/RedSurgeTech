<?php
if (!defined('WORDFENCE_VERSION')) { exit; }
/**
 * Presents the final onboarding attempt modal.
 */
?>
<div class="wf-modal" id="wf-onboarding-final-attempt">
	<div class="wf-modal-header">
		<div class="wf-modal-header-content">
			<div class="wf-modal-title"><?php esc_html_e('Please Complete Wordfence Installation', 'wordfence'); ?></div>
		</div>
		<div class="wf-modal-header-action">
			<div class="wf-padding-add-left-small wf-modal-header-action-close"><a href="<?php echo esc_attr(network_admin_url('admin.php?page=Wordfence')); ?>"><i class="wf-fa wf-fa-times-circle" aria-hidden="true"></i></a></div>
		</div>
	</div>
	<div class="wf-modal-content">
		<div id="wf-onboarding-final-attempt-1" class="wf-onboarding-modal-content"<?php if (wfConfig::get('onboardingAttempt3') == wfOnboardingController::ONBOARDING_THIRD_EMAILS) { echo ' style="display: none;"'; } ?>>
			<h3><?php esc_html_e('Please tell us where Wordfence should send you security alerts for your website:', 'wordfence'); ?></h3>
			<input type="text" id="wf-onboarding-alerts" placeholder="you@example.com" value="<?php echo esc_attr(implode(',', wfConfig::getAlertEmails())); ?>">
			<p id="wf-onboarding-alerts-disclaimer"><?php esc_html_e('We do not use this email address for any other purpose unless you opt-in to receive other mailings. You can turn off alerts in the options.', 'wordfence'); ?></p>
			<div id="wf-onboarding-subscribe">
				<label for="wf-onboarding-email-list"><?php esc_html_e('Would you also like to join our WordPress security mailing list to receive WordPress security alerts and Wordfence news?', 'wordfence'); ?></label>
				<div id="wf-onboarding-subscribe-controls">
					<ul id="wf-onboarding-email-list" class="wf-switch">
						<li data-option-value="1"><?php esc_html_e('Yes', 'wordfence'); ?></li>
						<li data-option-value="0"><?php esc_html_e('No', 'wordfence'); ?></li>
					</ul>
					<p><?php esc_html_e('(Choose One)', 'wordfence'); ?></p>
				</div>
			</div>
		</div>
		<div id="wf-onboarding-final-attempt-2" class="wf-onboarding-modal-content"<?php if (wfConfig::get('onboardingAttempt3') != wfOnboardingController::ONBOARDING_THIRD_EMAILS) { echo ' style="display: none;"'; } ?>>
			<h3><?php esc_html_e('Activate Premium', 'wordfence'); ?></h3>
			<p><?php esc_html_e('Enter your premium license key to enable real-time protection for your website.', 'wordfence'); ?></p>
			<div id="wf-onboarding-license-status" style="display: none;"></div>
			<div id="wf-onboarding-license"><input type="text" placeholder="<?php esc_html_e('Enter Premium Key', 'wordfence'); ?>"><a href="#" class="wf-onboarding-btn wf-onboarding-btn-primary wf-disabled" id="wf-onboarding-license-install" role="button"><?php esc_html_e('Install', 'wordfence'); ?></a></div>
			<div id="wf-onboarding-or"><span>or</span></div>
			<p id="wf-onboarding-premium-cta"><?php esc_html_e('If you don\'t have one, you can purchase one now.', 'wordfence'); ?></p>
			<div id="wf-onboarding-license-footer">
				<ul>
					<li><a href="https://www.wordfence.com/gnl1onboardingFinalGet/wordfence-signup/#premium-order-form" class="wf-onboarding-btn wf-onboarding-btn-primary" id="wf-onboarding-get" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Upgrade to Premium', 'wordfence'); ?><span class="screen-reader-text"> (<?php esc_html_e('opens in new tab', 'wordfence') ?>)</span></a></li>
					<li><a href="https://www.wordfence.com/gnl1onboardingFinalLearn/wordfence-signup/" class="wf-onboarding-btn wf-onboarding-btn-default" id="wf-onboarding-learn" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Learn More', 'wordfence'); ?><span class="screen-reader-text"> (<?php esc_html_e('opens in new tab', 'wordfence') ?>)</span></a></li>
					<li><a href="#" id="wf-onboarding-no-thanks" role="button"><?php esc_html_e('No Thanks', 'wordfence'); ?></a></li>
				</ul>
			</div>
			<div id="wf-onboarding-license-finished" style="display: none;">
				<ul>
					<li><a href="<?php echo esc_attr(network_admin_url('admin.php?page=Wordfence')); ?>" class="wf-onboarding-btn wf-onboarding-btn-primary"><?php esc_html_e('Close', 'wordfence'); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wf-modal-footer"<?php if (wfConfig::get('onboardingAttempt3') == wfOnboardingController::ONBOARDING_THIRD_EMAILS) { echo ' style="display: none;"'; } ?>>
		<ul class="wf-flex-horizontal wf-full-width wf-flex-align-right">
			<li class="wf-padding-add-right">
				<input type="checkbox" class="wf-option-checkbox wf-small" id="wf-onboarding-agree"> <label for="wf-onboarding-agree"><?php echo wp_kses(__('I have read and agree to the <a href="https://www.wordfence.com/license-terms-and-conditions/" target="_blank" rel="noopener noreferrer">Wordfence License Terms and Conditions<span class="screen-reader-text"> (opens in new tab)</span></a>, the <a href="https://www.wordfence.com/services-subscription-agreement" rel="noopener noreferrer" target="_blank">Services Subscription Agreement<span class="screen-reader-text"> (opens in new tab)</span></a>, and <a href="https://www.wordfence.com/terms-of-service/" target="_blank" rel="noopener noreferrer">Terms of Service<span class="screen-reader-text"> (opens in new tab)</span></a>, and have read and acknowledge the <a href="https://www.wordfence.com/privacy-policy/" target="_blank" rel="noopener noreferrer">Wordfence Privacy Policy<span class="screen-reader-text"> (opens in new tab)</span></a>.', 'wordfence'), array('a'=>array('href'=>array(), 'target'=>array(), 'rel'=>array()), 'span'=>array('class'=>array()))); ?></label>
			</li>
			<li><a href="#" class="wf-onboarding-btn wf-onboarding-btn-primary wf-disabled" id="wf-onboarding-continue" role="button"><?php esc_html_e('Continue', 'wordfence'); ?></a></li>
		</ul>
	</div>
</div>