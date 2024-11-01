<?php

function walup_load_custom_templates() {
  if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Wallet Up Payment [Membership]
 * Template for WPForms.
 */
class WPForms_Template_wallet_up_payment_membership extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Wallet Up Payment [Membership]';

		// Template slug
		$this->slug = 'wallet_up_payment_membership';

		// Template description
		$this->description = 'Use this form to collect payments with all available method from Wallet Up. Such as Cash App, Venmo, Facebook Pay, Zelle, etc. in addition of Stripe or Paypal card fields.';

		// Template field and settings
		$this->data = array (
	'fields' => array (
		10 => array (
			'id' => '10',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#389462',
			'title' => 'Details About you',
			'nav_align' => 'left',
		),
		0 => array (
			'id' => '0',
			'type' => 'name',
			'label' => 'Registrant Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'What\'s your first name?',
			'first_default' => '{user_first_name}',
			'last_placeholder' => 'What\'s your last name?',
			'last_default' => '{user_last_name}',
			'label_hide' => '1',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Email',
			'description' => 'Your email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please type in your email address',
			'default_value' => '{user_email}',
			'label_hide' => '1',
		),
		9 => array (
			'id' => '9',
			'type' => 'pagebreak',
			'title' => 'Payment Details',
			'next' => 'Next Step',
			'prev_toggle' => '1',
			'prev' => 'Go Back',
		),
		3 => array (
			'id' => '3',
			'type' => 'payment-multiple',
			'label' => 'Is this a Renewal or Registration?',
			'choices' => array (
				1 => array (
					'label' => 'New Registration',
					'value' => '75.00',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				2 => array (
					'label' => 'Renewal Fee',
					'value' => '60.00',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
			),
			'choices_images_style' => 'modern',
			'choices_icons_color' => '#0399ed',
			'choices_icons_size' => 'large',
			'choices_icons_style' => 'default',
			'description' => 'Please select an option',
			'required' => '1',
			'css' => 'wpforms-one-half wpforms-first',
		),
		5 => array (
			'id' => '5',
			'type' => 'radio',
			'label' => 'How would you like to pay?',
			'choices' => array (
				4 => array (
					'label' => 'Cash App',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				5 => array (
					'label' => 'Venmo',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				6 => array (
					'label' => 'Zelle',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				7 => array (
					'label' => 'Facebook Pay',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				1 => array (
					'label' => 'PayPal.me',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				3 => array (
					'label' => 'Check ',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				2 => array (
					'label' => 'Debit/Credit card',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
			),
			'choices_images_style' => 'modern',
			'choices_icons_color' => '#0399ed',
			'choices_icons_size' => 'large',
			'choices_icons_style' => 'default',
			'required' => '1',
			'css' => 'wpforms-one-half',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '!e',
					),
				),
			),
		),
		13 => array (
			'id' => '13',
			'type' => 'hidden',
			'label' => 'Date of Payment',
			'label_disable' => '1',
			'default_value' => '{date format="m/d/Y"}',
		),
		15 => array (
			'id' => '15',
			'type' => 'html',
			'name' => 'Cash App Registration',
			'code' => '<h5><strong>IMPORTANT INSTRUCTIONS CASHAPP USERS:</strong></h5> <br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>Click on the QR Code</strong> or <strong>scan to pay with CASHAPP APP<br></strong> the AMOUNT of <strong>$75</strong> then return here to complete your process<br>

[cashapp amount="75" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '4',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		16 => array (
			'id' => '16',
			'type' => 'html',
			'name' => 'Cash App Renewal',
			'code' => '<h5><strong>IMPORTANT INSTRUCTIONS CASHAPP USERS:</strong></h5> <br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>Click on the QR Code</strong> or <strong>scan to pay with CASHAPP APP<br></strong> the AMOUNT of <strong>$60</strong> then return here to complete your process<br>

[cashapp amount="60" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '4',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		46 => array (
			'id' => '46',
			'type' => 'html',
			'name' => 'FaceBook Pay Registration',
			'code' => '<h5><strong>IMPORTANT INSTRUCTIONS FACEBOOK PAY USERS:</strong></h5> <br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>Click on the QR Code</strong> or <strong>scan to pay with FACEBOOK PAY<br></strong> the AMOUNT of <strong>$75</strong> then return here to complete your process<br>

[fbpay amount="75" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '7',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		47 => array (
			'id' => '47',
			'type' => 'html',
			'name' => 'FaceBook Pay Renewal',
			'code' => '<h5><strong>IMPORTANT INSTRUCTIONS FACEBOOK PAY USERS:</strong></h5> <br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>Click on the QR Code</strong> or <strong>scan to pay with FACEBOOK PAY<br></strong> the AMOUNT of <strong>$60</strong> then return here to complete your process<br>

[fbpay amount="60" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '7',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		18 => array (
			'id' => '18',
			'type' => 'html',
			'name' => 'Venmo Registration',
			'code' => '<strong>IMPORTANT VENMO USERS INSTRUCTIONS:</strong> <br><br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>click on this QR Code to pay online</strong><br> or <strong>scan this code with your PHONE CAMERA.</strong> Once the AMOUNT OF <strong>$75</strong> is paid come back to complete your process<br>

[venmo amount="75" scan="yes" note="Wallet UP Demo"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '5',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		17 => array (
			'id' => '17',
			'type' => 'html',
			'name' => 'Venmo Renewal',
			'code' => '<strong>IMPORTANT VENMO USERS INSTRUCTIONS:</strong> <br><br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>click on this QR Code to pay online</strong><br> or <strong>scan this code with your PHONE CAMERA.</strong> Once the AMOUNT OF <strong>$60</strong> is paid come back to complete your process<br>

[venmo amount="60" scan="yes" note="Wallet UP Demo"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '5',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		40 => array (
			'id' => '40',
			'type' => 'html',
			'name' => 'Paypal Registration',
			'code' => '<strong>IMPORTANT PAYPAL USERS INSTRUCTIONS:</strong> <br><br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>click on this QR Code to pay online</strong><br> or <strong>scan this code with your PHONE CAMERA.</strong> Once the AMOUNT OF <strong>$75</strong> is paid come back to complete your process<br>

[paypal amount="75" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '1',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		38 => array (
			'id' => '38',
			'type' => 'html',
			'name' => 'Paypal Renewal',
			'code' => '<strong>IMPORTANT PAYPAL USERS INSTRUCTIONS:</strong> <br><br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>click on this QR Code to pay online</strong><br> or <strong>scan this code with your PHONE CAMERA.</strong> Once the AMOUNT OF <strong>$60</strong> is paid come back to complete your process<br>

[paypal amount="60" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '1',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		42 => array (
			'id' => '42',
			'type' => 'html',
			'name' => 'Zelle Registration',
			'code' => '<h5><strong>IMPORTANT INSTRUCTIONS ZELLE USERS:</strong></h5> <br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>Click on the QR Code</strong> or <strong>scan to pay with Zelle APP<br> or your bank account (if already enrolled) </strong> the AMOUNT of <strong>$75</strong> then return here to complete your process<br>

[zelle amount="75" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '6',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		43 => array (
			'id' => '43',
			'type' => 'html',
			'name' => 'Zelle Renewal',
			'code' => '<h5><strong>IMPORTANT INSTRUCTIONS ZELLE USERS:</strong></h5> <br><h4><strong>DO NOT CLOSE THIS WINDOWS</strong></h4><br>
Please <strong>Click on the QR Code</strong> or <strong>scan to pay with Zelle APP<br>or your bank account (if already enrolled) </strong> the AMOUNT of <strong>$60</strong> then return here to complete your process<br>

[zelle amount="60" scan="yes"]',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '6',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		7 => array (
			'id' => '7',
			'type' => 'divider',
			'label' => 'New Registration Check',
			'description' => 'Please send your New Registration check(s) payable to {site_name} ($25.00 returned check fee)	<p><strong>
Our Address: P.O. BOX 4562 Hagerstown, MD 21742
</strong>',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '3',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		49 => array (
			'id' => '49',
			'type' => 'divider',
			'label' => 'Renewal Check',
			'description' => 'Please send your Renewal check(s) payable to {site_name} ($25.00 returned check fee)	<p><strong>
Our Address: P.O. BOX 4562 Hagerstown, MD 21742
</strong>',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '3',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		19 => array (
			'id' => '19',
			'type' => 'pagebreak',
			'title' => 'Processing',
			'next' => 'Continue',
			'prev_toggle' => '1',
			'prev' => 'Go Back',
		),
		24 => array (
			'id' => '24',
			'type' => 'divider',
			'label' => 'Take the stress and the guess off your shoulders',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '!e',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		23 => array (
			'id' => '23',
			'type' => 'radio',
			'label' => 'Do you want to make this a recurring renewal?',
			'choices' => array (
				1 => array (
					'label' => 'Yes I want to renew $60 per year',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				2 => array (
					'label' => 'No, I\'m not interested',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
			),
			'choices_images_style' => 'modern',
			'choices_icons_color' => '#0399ed',
			'choices_icons_size' => 'large',
			'choices_icons_style' => 'default',
			'required' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '1',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		30 => array (
			'id' => '30',
			'type' => 'radio',
			'label' => 'Do you want to make this a recurring renewal?',
			'choices' => array (
				1 => array (
					'label' => 'Yes I want to save time',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				2 => array (
					'label' => 'No, I\'m not interested',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
			),
			'choices_images_style' => 'modern',
			'choices_icons_color' => '#0399ed',
			'choices_icons_size' => 'large',
			'choices_icons_style' => 'default',
			'required' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		26 => array (
			'id' => '26',
			'type' => 'html',
			'code' => 'You Pay $75 today for first time. And $60 each year afterward. You can request cancellation at anytime.',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '23',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		4 => array (
			'id' => '4',
			'type' => 'payment-total',
			'label' => 'Your total today',
			'required' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				1 => array (
					0 => array (
						'field' => '3',
						'operator' => '!e',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '2',
					),
				),
				2 => array (
					0 => array (
						'field' => '3',
						'operator' => '!e',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '3',
					),
				),
			),
		),
		6 => array (
			'id' => '6',
			'type' => 'stripe-credit-card',
			'label' => 'Debit/Credit Card',
			'size' => 'medium',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		20 => array (
			'id' => '20',
			'type' => 'radio',
			'label' => 'Was your payment successful?',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
				2 => array (
					'label' => 'No',
					'icon' => 'face-smile',
					'icon_style' => 'regular',
				),
			),
			'choices_images_style' => 'modern',
			'choices_icons_color' => '#0399ed',
			'choices_icons_size' => 'large',
			'choices_icons_style' => 'default',
			'required' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '4',
					),
				),
				1 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '5',
					),
				),
				2 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '1',
					),
				),
				3 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '7',
					),
				),
				4 => array (
					0 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '6',
					),
				),
			),
		),
		21 => array (
			'id' => '21',
			'type' => 'text',
			'label' => 'What is your Cash App Username?',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'For example: $WalletUpLLC',
			'limit_enabled' => '1',
			'limit_count' => '25',
			'limit_mode' => 'characters',
			'map_position' => 'above',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '20',
						'operator' => '==',
						'value' => '1',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '4',
					),
				),
			),
		),
		48 => array (
			'id' => '48',
			'type' => 'text',
			'label' => 'What is your FaceBook Pay Username or ID? ',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'For example: WalupLLC or 100082575054653',
			'limit_enabled' => '1',
			'limit_count' => '25',
			'limit_mode' => 'characters',
			'map_position' => 'above',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '20',
						'operator' => '==',
						'value' => '1',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '7',
					),
				),
			),
		),
		22 => array (
			'id' => '22',
			'type' => 'text',
			'label' => 'What is your Venmo Username?',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'For example: WalletUp',
			'limit_enabled' => '1',
			'limit_count' => '25',
			'limit_mode' => 'characters',
			'map_position' => 'above',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '20',
						'operator' => '==',
						'value' => '1',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '5',
					),
				),
			),
		),
		41 => array (
			'id' => '41',
			'type' => 'text',
			'label' => 'What is your Paypal.me Username?',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'For example: WalletUp',
			'limit_enabled' => '1',
			'limit_count' => '25',
			'limit_mode' => 'characters',
			'map_position' => 'above',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '20',
						'operator' => '==',
						'value' => '1',
					),
					1 => array (
						'field' => '5',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		50 => array (
			'id' => '50',
			'type' => 'html',
			'name' => 'Oops!',
			'code' => '<h1>Sorry we can not process your request. Payment is required to complete your form.</h1>
<p></p></br>
<button type="submit" onClick="refreshPage()">Try Again</button>
<script>
function refreshPage(){
		window.location.reload();
}
</script>
',
			'label_disable' => '1',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '20',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		34 => array (
			'id' => '34',
			'type' => 'pagebreak',
			'title' => 'Finalizing',
			'next' => 'Continue',
			'prev_toggle' => '1',
			'prev' => 'Go Back',
		),
		36 => array (
			'id' => '36',
			'type' => 'entry-preview',
			'preview-notice-enable' => '1',
			'preview-notice' => '<strong>This is a preview of your submission. It has not been submitted yet!</strong>
Please take a moment to verify your information. You can also go back to make changes.',
			'style' => 'basic',
		),
		37 => array (
			'id' => '37',
			'type' => 'date-time',
			'label' => 'Payment Date',
			'format' => 'date',
			'required' => '1',
			'size' => 'medium',
			'date_type' => 'datepicker',
			'date_format' => 'm/d/Y',
			'date_limit_days_mon' => '1',
			'date_limit_days_tue' => '1',
			'date_limit_days_wed' => '1',
			'date_limit_days_thu' => '1',
			'date_limit_days_fri' => '1',
			'date_disable_past_dates' => '1',
			'time_interval' => '30',
			'time_format' => 'g:i A',
			'time_limit_hours_start_hour' => '09',
			'time_limit_hours_start_min' => '00',
			'time_limit_hours_start_ampm' => 'am',
			'time_limit_hours_end_hour' => '06',
			'time_limit_hours_end_min' => '00',
			'time_limit_hours_end_ampm' => 'pm',
		),
		11 => array (
			'id' => '11',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Go Back',
		),
	),
	'field_id' => 51,
	'settings' => array (
		'form_title' => 'Wallet Up Payment [Membership]',
		'form_desc' => 'Use this form to collect payments with all available method from Wallet Up. Such as Cash App, Venmo, Facebook Pay, Zelle, etc. in addition of Stripe or Paypal card fields.',
		'submit_text' => 'Proceed now',
		'submit_text_processing' => 'Sending your payment request...',
		'form_class' => 'walup_for_wpf_template',
		'ajax_submit' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			6 => array (
				'notification_name' => 'Stripe User Notification',
				'email' => '{field_id="1"}',
				'subject' => 'Successful Payment for your {field_id="3"}',
				'sender_name' => '{site_name}',
				'sender_address' => '{admin_email}',
				'message' => 'Thank you {field_id="0"}
Below a breakdown of your receipt,

{all_fields}

{site_name}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '2',
						),
					),
				),
				'stripe' => '1',
				'file_upload_attachment_fields' => array (
				),
				'entry_csv_attachment_entry_information' => array (
				),
				'entry_csv_attachment_file_name' => 'entry-details',
			),
			2 => array (
				'notification_name' => 'Stripe Admin Notification',
				'email' => '{admin_email}',
				'subject' => 'Successful Stripe Payment {field_id="8"} from {field_id="0"}',
				'sender_name' => '{site_name}',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}

Stripe Payment made on {entry_date format="d/m/Y"}
from user Ip {user_ip}
through {url_referer}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '2',
						),
					),
				),
				'stripe' => '1',
				'file_upload_attachment_fields' => array (
				),
				'entry_csv_attachment_entry_information' => array (
				),
				'entry_csv_attachment_file_name' => 'entry-details',
			),
			4 => array (
				'notification_name' => 'Wallet Up User Notification',
				'email' => '{field_id="1"}',
				'subject' => 'Your Payment is being verified for {field_id="8"}',
				'sender_name' => '{site_name}',
				'sender_address' => '{admin_email}',
				'message' => 'IMPORTANT NOTICE: YOUR PAYMENT VERIFICATION ID #{date format="Y"}{user_id}

WE ARE PROCESSING YOUR REQUEST.
You will be notified.

Here is a Breakdown:
{all_fields}


Thank you
{site_name}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
					),
					1 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '4',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					2 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '5',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					3 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '1',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					4 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '7',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					5 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '6',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'file_upload_attachment_fields' => array (
				),
				'entry_csv_attachment_entry_information' => array (
				),
				'entry_csv_attachment_file_name' => 'entry-details',
			),
			1 => array (
				'notification_name' => 'Admin Wallet Up Notification',
				'email' => '{admin_email}',
				'subject' => 'Payment Verification Needed for {field_id="8"} from {field_id="0"}',
				'sender_name' => '{field_id="0"}',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => 'IMPORTANT NOTICE: PAYMENT VERIFICATION NEEDED FOR USER ID #{date format="Y"}{user_id}

Here is a Breakdown:
{all_fields}

Paiement processing made on: {entry_date format="d/m/Y"}
from user Ip {user_ip}
through {url_referer}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
					),
					1 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '4',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					2 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '5',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					3 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '1',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					4 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '6',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					5 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '7',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'file_upload_attachment_fields' => array (
				),
				'entry_csv_attachment_entry_information' => array (
				),
				'entry_csv_attachment_file_name' => 'entry-details',
			),
		),
		'confirmations' => array (
			3 => array (
				'name' => 'Wallet Up Processing',
				'type' => 'message',
				'message' => '<p>Thank you {field_id="0"}. We have received your {field_id="5"} payment processing request.<br />Please Allow 1 to 2 Business Days for processing.</p>
<p>We will get back to you.<br />{site_name}</p>',
				'message_scroll' => '1',
				'page' => '907',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '4',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					1 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '5',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					2 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '1',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					3 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '6',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
					4 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '7',
						),
						1 => array (
							'field' => '20',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'message_entry_preview' => '1',
				'message_entry_preview_style' => 'table_compact',
			),
			2 => array (
				'name' => 'Check Processing',
				'type' => 'message',
				'message' => '<p>Thank you {field_id="0"}. We have received your submission. We will process your payment or reach back to you if it failed. <br />Please Allow 3 to 7 Business Days for processing after we received your check.</p>
<p>{site_name}</p>',
				'message_scroll' => '1',
				'page' => '907',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
					),
				),
				'message_entry_preview' => '1',
				'message_entry_preview_style' => 'compact',
			),
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you {field_id="0"} for your  {field_id="5"} payment!</p>
<p>{site_name}</p>',
				'message_scroll' => '1',
				'page' => '2865',
				'message_entry_preview' => '1',
				'message_entry_preview_style' => 'compact',
			),
		),
		'antispam' => '1',
		'recaptcha' => '1',
		'anti_spam' => array (
			'country_filter' => array (
				'action' => 'allow',
				'country_codes' => array (
				),
				'message' => 'Sorry, this form does not accept submissions from your country.',
			),
			'keyword_filter' => array (
				'message' => 'Sorry, your message can\'t be submitted because it contains prohibited words.',
			),
		),
		'post_submissions_type' => 'post',
		'post_submissions_status' => 'pending',
		'registration_role' => 'subscriber',
		'registration_activation_method' => 'user',
		'registration_email_user_activation_subject' => '{site_name} Activation Required',
		'registration_email_user_activation_message' => 'IMPORTANT: You must activate your account before you can log in.
Please visit the link below.

{url_user_activation}',
		'registration_hide_message' => 'Hi {user_first_name}, you’re already logged in. <a href="{url_logout}">Log out</a>.',
		'registration_email_admin_subject' => '{site_name} New User Registration',
		'registration_email_admin_message' => 'New user registration on your site {site_name}:

Username: {user_registration_login}
Email: {user_registration_email}',
		'registration_email_user_subject' => '{site_name} Your username and password info',
		'registration_email_user_message' => 'Username: {user_registration_login}
Password: {user_registration_password}
{url_login}

',
		'registration_email_user_after_activation_subject' => '{site_name} Your account was successfully activated',
		'registration_email_user_after_activation_message' => 'You can log in with your credentials now.

{url_login}',
		'form_pages_title' => 'Wallet Up Payment [Registration]',
		'form_pages_page_slug' => 'wallet-up-payment-registration',
		'form_pages_footer' => 'This content is neither created nor endorsed by WPForms.',
		'form_pages_color_scheme' => '#448ccb',
		'form_pages_style' => 'modern',
		'form_locker_verification_type' => 'password',
		'form_locker_age' => '18',
		'form_locker_age_criteria' => '>=',
		'form_locker_user_entry_email_duration' => 'day',
		'save_resume_link_text' => 'Save and Resume Later',
		'save_resume_disclaimer_message' => 'Heads up! Saving your progress now will store a copy of your entry on this server and the site owner may have access to it. For security reasons, sensitive information such as credit cards and mailing addresses, along with file uploads will have to be re-entered when you resume.',
		'save_resume_confirmation_message' => 'Your form entry has been saved and a unique link has been created which you can access to resume this form.

Enter your email address to receive the link via email. Alternatively, you can copy and save the link below.

Please note, this link should not be shared and will expire in 30 days, afterwards your form entry will be deleted.',
		'save_resume_enable_resume_link' => '1',
		'save_resume_enable_email_notification' => '1',
		'save_resume_email_notification_message' => 'Thank you for saving {form_name}. Click the link below to resume the form from any device.

{resume_link}

Remember, the link should not be shared and will expire in 30 days.',
		'save_resume_email_settings_message' => 'A link to resume this form has been sent to the email address provided.

Please remember, the link should not be shared and will expire in 30 days.',
		'form_tags' => array (
		),
	),
	'payments' => array (
		'stripe' => array (
			'enable' => '1',
			'payment_description' => 'TEST MODE',
			'receipt_email' => '1',
			'customer_email' => '',
			'conditional_logic' => '1',
			'conditional_type' => 'go',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '1',
						'operator' => '!e',
					),
				),
			),
			'recurring' => array (
				'name' => '',
				'period' => 'yearly',
				'email' => '',
			),
		),
		'paypal_commerce' => array (
			'name' => '',
			'billing_email' => '',
			'billing_address' => '',
			'shipping_address' => '',
			'payment_description' => '',
			'recurring' => array (
				0 => array (
					'pp_product_id' => '',
					'pp_plan_id' => '',
					'name' => 'Plan Name #1',
					'product_type' => 'digital',
					'recurring_times' => 'yearly',
					'total_cycles' => '0',
					'shipping_address' => '',
				),
			),
		),
		'paypal_standard' => array (
			'production_email' => '',
			'sandbox_email' => 'walup@walletup.app',
			'mode' => 'test',
			'transaction' => 'product',
			'cancel_url' => 'https://walletup.app/wallet-up/',
			'shipping' => '0',
		),
	),
	'meta' => array (
		'template' => 'wallet_up_payment_membership',
	),
);
	}
}
new WPForms_Template_wallet_up_payment_membership();
endif;
}
add_action( 'wpforms_loaded', 'walup_load_custom_templates' );
