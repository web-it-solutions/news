<?php

/*
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace GeorgRinger\News\Domain\Model\Dto;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * News Demand object which holds all information to get the correct
 * news records.
 */
class Search extends AbstractEntity
{
    /**
     * Basic search word
     *
     * @var string
     */
    protected $subject = '';

    /**
     * Search fields
     *
     * @var string
     */
    protected $fields = '';

    /**
     * Minimum date
     *
     * @var string
     */
    protected $minimumDate = '';

    /**
     * Maximum date
     *
     * @var string
     */
    protected $maximumDate = '';

    /**
     * Field using for date queries
     *
     * @var string
     */
    protected $dateField = '';

    /** @var bool */
    protected $splitSubjectWords = false;

    /**
     * Get the subject
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getFields(): string
    {
        return $this->fields;
    }

    public function setFields(string $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * @param string $maximumDate
     */
    public function setMaximumDate($maximumDate): void
    {
        $this->maximumDate = $maximumDate;
    }

    public function getMaximumDate(): string
    {
        return $this->maximumDate;
    }

    public function setMinimumDate(string $minimumDate): void
    {
        $this->minimumDate = $minimumDate;
    }

    public function getMinimumDate(): string
    {
        return $this->minimumDate;
    }

    /**
     * @param string $dateField
     */
    public function setDateField($dateField): void
    {
        $this->dateField = $dateField;
    }

    public function getDateField(): string
    {
        return $this->dateField;
    }

    public function isSplitSubjectWords(): bool
    {
        return $this->splitSubjectWords;
    }

    /**
     * @param bool $splitSubjectWords
     */
    public function setSplitSubjectWords($splitSubjectWords): void
    {
        $this->splitSubjectWords = $splitSubjectWords;
    }
}
