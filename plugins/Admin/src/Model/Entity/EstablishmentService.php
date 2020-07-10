<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstablishmentService Entity
 *
 * @property int $id
 * @property string|null $uuid
 * @property int $establishment_id
 * @property int $service_id
 * @property float $price
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Admin\Model\Entity\Establishment $establishment
 * @property \Admin\Model\Entity\Service $service
 */
class EstablishmentService extends Entity
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
        'uuid' => true,
        'establishment_id' => true,
        'service_id' => true,
        'price' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'establishment' => true,
        'service' => true,
    ];
}
