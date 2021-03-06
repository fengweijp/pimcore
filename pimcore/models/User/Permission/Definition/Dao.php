<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    User
 * @copyright  Copyright (c) 2009-2016 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Model\User\Permission\Definition;

use Pimcore\Model;

class Dao extends Model\Dao\AbstractDao
{

    /**
     *
     */
    public function save()
    {
        try {
            $this->db->insert("users_permission_definitions", [
                "key" => $this->model->getKey()
            ]);
        } catch (\Exception $e) {
            \Logger::warn($e);
        }
    }
}
