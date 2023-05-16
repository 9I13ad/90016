<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donor Entity
 *
 * @property int $ID
 * @property string|null $Name
 * @property int|null $Age
 * @property string|null $MailingAddress
 * @property string|null $PhoneNumber
 * @property string|null $Email
 * @property string|null $PreferredModeOfCommunication
 * @property string|null $Nationality
 * @property string|null $ABN
 */
class Donor extends Entity
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
        'Name' => true,
        'Age' => true,
        'MailingAddress' => true,
        'PhoneNumber' => true,
        'Email' => true,
        'PreferredModeOfCommunication' => true,
        'Nationality' => true,
        'ABN' => true,
    ];
}
