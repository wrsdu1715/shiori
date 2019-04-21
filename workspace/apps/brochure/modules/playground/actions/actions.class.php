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
      $this->banquet = TravelGuide::$BANQUET;
      $this->schedule = TravelGuide::$SCHEDULE;
      $this->joinTeam = TravelGuide::$JOINTEAM;
      $this->notice = TravelGuide::$NOTICE;
      $this->banquetList = TravelGuide::$BANQUETLIST;
    }

    public function executeRoom(sfWebRequest $request)
    {
      $this->roomList = TravelGuide::$LOOMLIST;
    }

    public function executeSeat(sfWebRequest $request)
    {
      $this->seatList = TravelGuide::$SEATLIST;
    }
  }
