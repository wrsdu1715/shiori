<?php

  class playgroundActions extends sfActions
  {
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
      // $this->forward('default', 'module');
      $this->testText = 'test';
      $this->schedule = TravelGuide::$SCHEDULE;
      
      if(strtotime(date('Y-m-d H:i')) < strtotime('2019-04-24 10:00')){
        $this->setTemplate('teaser');
      }
    }

    public function executeRoom(sfWebRequest $request)
    {
      $this->roomList = TravelGuide::$LOOMLIST;
    }

    public function executeSeat(sfWebRequest $request)
    {
      $this->seatList = TravelGuide::$SEATLIST;
    }

    public function executeBanquet(sfWebRequest $request)
    {
      $this->banquet = TravelGuide::$BANQUET;
      $this->joinTeam = TravelGuide::$JOINTEAM;
      $this->banquetList = TravelGuide::$BANQUETLIST;
    }
    public function executeNotice(sfWebRequest $request)
    {
      $this->notice = TravelGuide::$NOTICE;
    }

    public function executeContact(sfWebRequest $request)
    {
    }
  }
