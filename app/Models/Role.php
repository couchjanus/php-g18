<?php
/**
 * class Role
 */

// require_once CORE.'/Model.php';
namespace App\Models;

use Core\Model;

class Role extends Model
{
    protected static $table = 'roles';
    protected static $primaryKey = 'id';
}
