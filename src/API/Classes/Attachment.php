<?php


namespace ExtremeSa\Aramex\API\Classes;

use ExtremeSa\Aramex\API\Interfaces\Normalize;

/**
 * Attachment is a complex element, consisting of three child elements (File Name, File Extension and File Contents).
 * These apply to every element that is defined by the Data Type “Attachment“.
 *
 * Class Attachment
 * @package ExtremeSa\Aramex\API\Classes
 */
class Attachment implements Normalize
{
    private $fileName;
    private $fileExtension;
    private $fileContent;

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * The file name without its extension.
     * @param string $fileName
     * @return $this
     */
    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * The extension of the file. Our system accepts any extension
     * @param string $fileExtension
     * @return $this
     */
    public function setFileExtension(string $fileExtension)
    {
        $this->fileExtension = $fileExtension;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * Contents of the file.
     * @param $fileContent
     * @return $this
     */
    public function setFileContent(string $fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }

    /**
     * @return array
     */
    public function normalize(): array
    {
        return [
            'FileName' => $this->getFileName(),
            'FileExtension' => $this->getFileExtension(),
            'FileContent' => $this->getFileContent()
        ];
    }
}