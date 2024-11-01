<?php

/**
 * Conditionally proceed if payment is made with wallet up
 */
add_action( 'wp_head', function () { ?>

    <style>

    /* CSS hide submit button on page load */
    .walup_for_wpf_template .wpforms-submit-container .wpforms-submit {
            visibility:hidden;
        }

    .walup_for_wpf_template .wpforms-submit-container .wpforms-submit.show-submit {
            visibility:visible;
        }

    </style>

<?php } );

// Conditional logic for Submit button
function walup_wpf_dev_form_redirect() {
    ?>
    <script>
        jQuery(function($){


            // Wallet Up WPForms Template
            $('.walup_for_wpf_template form.wpforms-form').click(function(){
             var selectedval = document.querySelector('input[name="wpforms[fields][20]"]:checked').value;
                if(selectedval == 'No'){
                    window.location = '/walup_exit';
                }
					else{
                    $('.wpforms-submit').addClass('show-submit');
            }

            });
        });
    </script>
    <?php
}
add_action( 'wpforms_wp_footer_end', 'walup_wpf_dev_form_redirect', 10 );
