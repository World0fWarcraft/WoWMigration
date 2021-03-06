<?php
/**
 * @author Amin Mahmoudi (MasterkinG)
 * @copyright	Copyright (c) 2019 - 2022, MsaterkinG32 Team, Inc. (https://masterking32.com)
 * @link	https://masterking32.com
 * @Description : It's not masterking32 framework !
 **/

require_once './application/loader.php';
user::login_required_redirect();
$current_user = user::get_user_by_id($_SESSION["loginid"]);
migration::new_migration_request($_SESSION["loginid"]);
$user_requests = migration::get_requests_by_userid($_SESSION["loginid"]);
require_once base_path.'template/tpl/panel.php';