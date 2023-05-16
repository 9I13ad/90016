<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aiditem Entity
 *
 * @property int $ID
 * @property string|null $ItemName
 * @property int|null $CategoryID
 * @property int|null $Quantity
 * @property \Cake\I18n\FrozenDate|null $ExpiryDate
 * @property string|null $Ingredients
 * @property string|null $AllergenInfo
 * @property string|null $ManufacturerBrand
 * @property string|null $ClothingSize
 * @property int|null $AidKitID
 */
class Aiditem extends Entity
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
        'ItemName' => true,
        'CategoryID' => true,
        'Quantity' => true,
        'ExpiryDate' => true,
        'Ingredients' => true,
        'AllergenInfo' => true,
        'ManufacturerBrand' => true,
        'ClothingSize' => true,
        'AidKitID' => true,
    ];
}
