# quickpay-order-id-fix
Fixes WooCommerce QuickPay order_id validation error by tweaking order_id. 

Based on https://quickpay.net/integrations/woocommerce/

Install the ZIP from WP-Admin -> Plugins -> Add new.

Orders shown to QuickPay in the following format: Order-ID-QP-XYZ
* ID = Order number from WooCommerce
* XYZ = Random number between 0-999
