<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ShowcaseAd extends \Google\AdsApi\AdWords\v201705\cm\Ad
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $headline
     */
    protected $headline = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\Image $collapsedImage
     */
    protected $collapsedImage = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\Image $expandedImage
     */
    protected $expandedImage = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201705\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201705\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201705\cm\UrlData[] $urlData
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param string $name
     * @param string $headline
     * @param string $description
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $collapsedImage
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $expandedImage
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, array $urlData = null, $type = null, $devicePreference = null, $AdType = null, $name = null, $headline = null, $description = null, $collapsedImage = null, $expandedImage = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $urlData, $type, $devicePreference, $AdType);
      $this->name = $name;
      $this->headline = $headline;
      $this->description = $description;
      $this->collapsedImage = $collapsedImage;
      $this->expandedImage = $expandedImage;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201705\cm\ShowcaseAd
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
      return $this->headline;
    }

    /**
     * @param string $headline
     * @return \Google\AdsApi\AdWords\v201705\cm\ShowcaseAd
     */
    public function setHeadline($headline)
    {
      $this->headline = $headline;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdWords\v201705\cm\ShowcaseAd
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\Image
     */
    public function getCollapsedImage()
    {
      return $this->collapsedImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $collapsedImage
     * @return \Google\AdsApi\AdWords\v201705\cm\ShowcaseAd
     */
    public function setCollapsedImage($collapsedImage)
    {
      $this->collapsedImage = $collapsedImage;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\Image
     */
    public function getExpandedImage()
    {
      return $this->expandedImage;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\Image $expandedImage
     * @return \Google\AdsApi\AdWords\v201705\cm\ShowcaseAd
     */
    public function setExpandedImage($expandedImage)
    {
      $this->expandedImage = $expandedImage;
      return $this;
    }

}
