<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Allows you to be able to generate labels.
 *
 * Class LabelInfo
 * @package ExtremeSa\Aramex\API\Classes
 */
class LabelInfo implements Normalize
{
    private $reportId;
    private $reportType;

    /**
     * @return int
     */
    public function getReportId(): int
    {
        return $this->reportId;
    }

    /**
     * The Template of the report to be generated.
     *
     * @param int $reportId
     * @return $this
     */
    public function setReportId(int $reportId): LabelInfo
    {
        $this->reportId = $reportId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReportType(): string
    {
        return $this->reportType;
    }

    /**
     * Either by URL or a streamed file (RPT). URL by Default
     * @param string $reportType : URL|RPT
     * @return $this
     */
    public function setReportType(string $reportType): LabelInfo
    {
        $this->reportType = $reportType;
        return $this;
    }

    public function normalize(): array
    {
        return [
            'ReportID' => $this->getReportId(),
            'ReportType' => $this->getReportType()
        ];
    }
}