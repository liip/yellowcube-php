<?php

namespace YellowCube;

class BARCustom
{

  /**
   * 
   * @var ControlReference $ControlReference
   */
  protected $ControlReference = null;

  /**
   * 
   * @var ArticleList $ArticleList
   */
  protected $ArticleList = null;

  /**
   * 
   * @param ControlReference $ControlReference
   * @param ArticleList $ArticleList
   */
  public function __construct($ControlReference = null, $ArticleList = null)
  {
    $this->ControlReference = $ControlReference;
    $this->ArticleList = $ArticleList;
  }

  /**
   * 
   * @return ControlReference
   */
  public function getControlReference()
  {
    return $this->ControlReference;
  }

  /**
   * 
   * @param ControlReference $ControlReference
   * @return \YellowCube\BAR
   */
  public function setControlReference($ControlReference)
  {
    $this->ControlReference = $ControlReference;
    return $this;
  }

  /**
   * 
   * @return ArticleList
   */
  public function getArticleList()
  {
    return $this->ArticleList;
  }

  /**
   * 
   * @param ArticleList $ArticleList
   * @return \YellowCube\BAR
   */
  public function setArticleList($ArticleList)
  {
    $this->ArticleList = $ArticleList;
    return $this;
  }

}
