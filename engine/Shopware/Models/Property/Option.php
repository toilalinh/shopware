<?php
/**
 * Shopware 4
 * Copyright © shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Models\Property;

use Shopware\Components\Model\ModelEntity,
    Doctrine\ORM\Mapping AS ORM,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * Shopware Article Model
 *
 * @ORM\Entity
 * @ORM\Table(name="s_filter_options")
 */
class Option extends ModelEntity
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var bool $filterable
     *
     * @ORM\Column(name="filterable", type="boolean")
     */
    private $filterable;

    /**
     * ManyToMany to Group (Inverse Side)
     *
     * @var Group[]Doctrine\Common\Collections\ArrayCollection $groups
     * @ORM\ManyToMany(targetEntity="Group")
     * @ORM\JoinTable(name="s_filter_relations",
     *      joinColumns={@ORM\JoinColumn(name="optionID", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="groupID", referencedColumnName="id")}
     *      )
     */
    private $groups;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $articles
     *
     * @ORM\OneToMany(targetEntity="Relation", mappedBy="option")
     */
    private $relations;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $values
     *
     * @ORM\OneToMany(targetEntity="Value", mappedBy="option", cascade={"remove"}))
     */
    protected $values;

    /**
     * Constructor of Mail
     */
    public function __construct()
    {
        $this->groups    = new ArrayCollection();
        $this->values    = new ArrayCollection();
        $this->relations = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Option
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set filterable
     *
     * @param bool $filterable
     * @return Option
     */
    public function setFilterable($filterable)
    {
        $this->filterable = (bool) $filterable;

        return $this;
    }

    /**
     * Get filterable
     *
     * @return bool
     */
    public function isFilterable()
    {
        return $this->filterable;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return \Shopware\Models\Property\Group[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getRelations()
    {
        return $this->relations;
    }

}
