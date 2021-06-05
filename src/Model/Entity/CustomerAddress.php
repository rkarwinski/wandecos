<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerAddress Entity
 *
 * @property int $id
 * @property int $id_customer
 * @property string|null $city
 * @property int|null $number
 * @property string|null $street
 * @property string|null $zip_code
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $complement
 */
class CustomerAddress extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_customer' => true,
        'city' => true,
        'number' => true,
        'street' => true,
        'zip_code' => true,
        'created' => true,
        'complement' => true,
    ];
}
