<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDebug/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2015 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDebug\Options;

/**
 * WebinoDebug module options
 */
class ModuleOptions extends DebuggerOptions
{

    /**
     * @var array|null
     */
    protected $templateMap;

    /**
     * @return array
     */
    public function getTemplateMap()
    {
        if (null === $this->templateMap) {
            $this->setTemplateMap(['error/index' => __DIR__ . '/../../../view/error/index.phtml']);
        }
        return $this->templateMap;
    }

    /**
     * Configure view templates
     *
     * @param array|null $templateMap Empty array to disable, null for default
     * @return self
     */
    public function setTemplateMap(array $templateMap = null)
    {
        $this->templateMap = $templateMap;
        return $this;
    }
}
