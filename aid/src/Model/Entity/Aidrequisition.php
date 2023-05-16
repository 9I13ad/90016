<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aidrequisition Entity
 *
 * @property int $ID
 * @property int|null $RecipientID
 * @property int|null $AidKitID
 * @property int|null $AidItemID
 * @property int|null $RequestedQuantity
 * @property string|null $Notes
 */
class Aidrequisition extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'RecipientID' => true,
        'AidKitID' => true,
        'AidItemID' => true,
        'RequestedQuantity' => true,
        'Notes' => true,
    ];
}
