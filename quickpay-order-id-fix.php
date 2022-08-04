<?php
/**
 * QuickPay Order ID Fix
 *
 * @package       QPORDERFIX
 * @author        Henri Koivuneva
 * @license       gplv2
 * @version       1.0.6
 *
 * @wordpress-plugin
 * Plugin Name:   QuickPay Order ID Fix
 * Plugin URI:    https://koivuneva.net
 * Description:   Fixes WooCommerce QuickPay order_id validation error by tweaking order_id. 
 * Version:       1.0.6
 * Author:        Henri Koivuneva
 * Author URI:    https://koivuneva.net
 * Text Domain:   quickpay-order-id-fix
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with QuickPay Order ID Fix. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

function quickpay_change_order_number_for_api($order_number) {
	return 'Order-' . $order_number . '-QP-' . wp_rand( 0, 999 );
}

add_filter('woocommerce_quickpay_order_number_for_api', 'quickpay_change_order_number_for_api');
