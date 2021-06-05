<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $id_customer
 * @property int $id_address
 * @property float|null $total
 * @property float|null $products_value
 * @property float|null $delivery_value
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $delivery_time
 * @property \Cake\I18n\FrozenTime|null $delivery_forecast
 * @property int|null $delivered
 * @property string|null $note
 * @property float|null $discount
 *
 * @property \App\Model\Entity\Product[] $products
 */
class Order extends Entity
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
        'id_address' => true,
        'total' => true,
        'products_value' => true,
        'delivery_value' => true,
        'created' => true,
        'delivery_time' => true,
        'delivery_forecast' => true,
        'delivered' => true,
        'note' => true,
        'discount' => true,
        'products' => true,
    ];
}
