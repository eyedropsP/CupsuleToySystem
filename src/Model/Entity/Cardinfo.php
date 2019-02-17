<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cardinfo Entity
 *
 * @property int $cardNo
 * @property string|null $cardName
 * @property int|null $cardAttribute
 * @property int|null $cardRarity
 */
class Cardinfo extends Entity
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
        'cardName' => true,
        'cardAttribute' => true,
        'cardAttributeStr' => true,
        'cardRarity' => true,
        'cardRarityStr' => true
    ];
}
