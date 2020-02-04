<?php

namespace RKW\RkwTags\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class Taggable
 *
 * @author Christian Dilger <c.dilger@addorange.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_RkwTags
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Taggable extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * sysCategory
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    protected $sysCategory = null;

    /**
     * Adds a SysCategory
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Category $sysCategory
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $sysCategory
     */
    public function addSysCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $sysCategory)
    {
        $this->sysCategory->attach($sysCategory);
    }

    /**
     * Removes a SysCategory
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Category $sysCategory
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $sysCategory
     */
    public function removeSysCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $sysCategory)
    {
        $this->sysCategory->detach($sysCategory);
    }

    /**
     * Returns the sysCategory
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $sysCategory
     */
    public function getSysCategory()
    {
        return $this->sysCategory;
    }

    /**
     * Sets the sysCategory
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $sysCategory
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $sysCategory
     */
    public function setSysCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sysCategory)
    {
        $this->sysCategory = $sysCategory;
    }

}
