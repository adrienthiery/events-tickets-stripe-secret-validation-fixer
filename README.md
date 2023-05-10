# events-tickets-stripe-secret-validation-fixer
A stupid simple plugin to fix an issue with https://wordpress.org/plugins/event-tickets/

The issue in question is that the webhook secret is not being validated following a javascript error descripted:
- https://wordpress.org/support/topic/changing-signing-secret-for-stripe-fails-silently-fix/
- https://wordpress.org/support/topic/webhooks-uncaught-in-promise-typeerror-tribe-ky-is-undefined/

Download the plugin as a zip, upload it to your site and activate it.

You'll find a new item in the admin menu called "Events stripe config fixer".

On this page, you'll find a form of which the value will be passed to `define( 'TEC_TC_STRIPE_SIGNING_SECRET', ...)` as specified as a fix [here](https://wordpress.org/support/topic/webhooks-not-validating/#post-16688895)
