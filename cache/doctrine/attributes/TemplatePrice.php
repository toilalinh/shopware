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


namespace Shopware\Models\Attribute;
use Shopware\Components\Model\ModelEntity,
    Doctrine\ORM\Mapping AS ORM,
    Symfony\Component\Validator\Constraints as Assert,
    Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="s_article_configurator_template_prices_attributes")
 */
class TemplatePrice extends ModelEntity
{
    

    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
     protected $id;


    /**
     * @var integer $templatePriceId
     *
     * @ORM\Column(name="template_price_id", type="integer", nullable=true)
     */
     protected $templatePriceId;


    /**
     * @var \Shopware\Models\Article\Configurator\Template\Price
     *
     * @ORM\OneToOne(targetEntity="Shopware\Models\Article\Configurator\Template\Price", inversedBy="attribute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_price_id", referencedColumnName="id")
     * })
     */
    protected $templatePrice;
    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    

    public function getTemplatePriceId()
    {
        return $this->templatePriceId;
    }

    public function setTemplatePriceId($templatePriceId)
    {
        $this->templatePriceId = $templatePriceId;
        return $this;
    }
    

    public function getTemplatePrice()
    {
        return $this->templatePrice;
    }

    public function setTemplatePrice($templatePrice)
    {
        $this->templatePrice = $templatePrice;
        return $this;
    }
    
}