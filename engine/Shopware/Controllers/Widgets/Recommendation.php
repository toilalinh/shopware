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

/**
 * Shopware Application
 */
class Shopware_Controllers_Widgets_Recommendation extends Enlight_Controller_Action
{
    /** @var Shopware_Components_Config */
    protected $config;

    /** @var sArticles */
    protected $articleModule;

    /** @var sMarketing */
    protected $marketingModule;

    /**
     *
     */
    public function init()
    {
        $this->config = Shopware()->Config();
        $this->articleModule = Shopware()->Modules()->Articles();
        $this->marketingModule = Shopware()->Modules()->Marketing();
    }

    /**
     * Show similar viewed articles
     */
    public function viewedAction()
    {
        $articleId = (int) $this->Request()->getParam('articleId');
        $maxPages = (int) $this->config->get('similarViewedMaxPages', 10);
        $perPage = (int) $this->config->get('similarViewedPerPage', 4);

        $this->marketingModule->sBlacklist[] = $articleId;
        $articles = $this->marketingModule->sGetSimilaryShownArticles($articleId, $maxPages * $perPage);

        foreach ($articles as $article) {
            $article = $this->articleModule->sGetPromotionById('fix', 0, (int) $article['id']);
            if (!empty($article['articleName'])) {
                $result[] = $article;
            }
        }

        $this->View()->maxPages = $maxPages;
        $this->View()->perPage = $perPage;
        $this->View()->viewedArticles = $result;
    }

    /**
     * Show also bought articles
     */
    public function boughtAction()
    {
        $articleId = (int) $this->Request()->getParam('articleId');
        $maxPages = (int) $this->config->get('alsoBoughtMaxPages', 10);
        $perPage = (int) $this->config->get('alsoBoughtPerPage', 4);

        $this->marketingModule->sBlacklist[] = $articleId;
        $articles = $this->marketingModule->sGetAlsoBoughtArticles($articleId, $maxPages  *$perPage);

        foreach ($articles as $article) {
            $article = $this->articleModule->sGetPromotionById('fix', 0, (int) $article['id']);
            if (!empty($article['articleName'])) {
                $result[] = $article;
            }
        }

        $this->View()->maxPages = $maxPages;
        $this->View()->perPage = $perPage;
        $this->View()->boughtArticles = $result;
    }
}
