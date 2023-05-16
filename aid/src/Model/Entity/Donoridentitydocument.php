<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donoridentitydocument Entity
 *
 * @property int $ID
 * @property int|null $DonorID
 * @property string|null $DocumentType
 * @property string|null $DocumentNumber
 * @property \Cake\I18n\FrozenDate|null $ExpiryDate
 */
class Donoridentitydocument extends Entity
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
        'DonorID' => true,
        'DocumentType' => true,
        'DocumentNumber' => true,
        'ExpiryDate' => true,
    ];
}
