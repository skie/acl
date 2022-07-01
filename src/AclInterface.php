<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Acl;

use Cake\Controller\Component;

/**
 * Access Control List interface.
 * Implementing classes are used by AclComponent to perform ACL checks in Cake.
 *
 */
interface AclInterface
{

    /**
     * Empty method to be overridden in subclasses
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string $action Action (defaults to *)
     * @return bool Success
     */
    public function check($aro, ?string $aco, string $action = "*"): bool;

    /**
     * Allow methods are used to grant an ARO access to an ACO.
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string|array $action Action (defaults to *)
     * @return bool Success
     */
    public function allow(string $aro, string $aco, $action = "*"): bool;

    /**
     * Deny methods are used to remove permission from an ARO to access an ACO.
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string $action Action (defaults to *)
     * @return bool Success
     */
    public function deny(string $aro, string $aco, string $action = "*"): bool;

    /**
     * Inherit methods modify the permission for an ARO to be that of its parent object.
     *
     * @param string $aro ARO The requesting object identifier.
     * @param string $aco ACO The controlled object identifier.
     * @param string $action Action (defaults to *)
     * @return bool Success
     */
    public function inherit(string $aro, string $aco, string $action = "*"): bool;

    /**
     * Initialization method for the Acl implementation
     *
     * @param Component $component Component instance.
     * @return void
     */
    public function initialize(Component $component);
}
