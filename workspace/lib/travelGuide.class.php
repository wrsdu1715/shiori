<?php
  class TravelGuide{

    public static $RELEASE = '2019-04-22 10:00';

    public static $SCHEDULE_DAY = array(
      '2019-04-04',
      '2019-04-05',
    );

    //スケジュール
    public  static $SCHEDULE = array(
      array(
        "title" => "【午前】各エリア出発",
        "areaList" => array(
          array(
            "secondTitle" => "▫️関東(ひかり503号)",
            "detail" => array(
              "7:33 東京駅(出発)",
              "7:50 品川駅(出発)"
            )
          ),
        ),
        "btn" => "",
      ),
      array(
        "title" => "【午前】各エリア出発",
        "areaList" => array(
          array(
            "secondTitle" => "▫️関東(ひかり503号)",
            "detail" => array(
              "7:33 東京駅(出発)",
              "7:50 品川駅(出発)"
            )
          ),
        ),
        "btn" => "a",
      ),
      array(
        "title" => "【午前】各エリア出発",
        "areaList" => array(
          array(
            "secondTitle" => "▫️関東(ひかり503号)",
            "detail"      => array(
              "7:33 東京駅(出発)",
              "7:50 品川駅(出発)"
            )
          ),
        ),
        "btn" => "a",
      ),
      array(
        "title" => "【午前】各エリア出発",
        "areaList" => array(
          array(
            "secondTitle" => "▫️関東(ひかり503号)",
            "detail" => array(
              "7:33 東京駅(出発)",
              "7:50 品川駅(出発)"
            )
          ),
        ),
        "btn" => "a",
      ),
      array(
        "title" => "【午前】各エリア出発",
        "areaList" => array(
          array(
            "secondTitle" => "▫️関東(ひかり503号)",
            "detail" => array(
              "7:33 東京駅(出発)",
              "7:50 品川駅(出発)"
            )
          ),
        ),
        "btn" => "a",
      ),
    );

    //部屋割り
    public static $ROOMLIST = array(
      array(
        "number" => "601",
        "members" => array(
          "tuda",
          "ryo"
        )
      ),
      array(
        "number" => "602",
        "members" => array(
          "tsuda",
          "ryo",
          "hoge"
        )
      ),
      array(
        "number" => "603",
        "members" => array(
          "tsuda",
          "ryo",
          "hoge"
        )
      ),
    );

    //バス割り
    public static $SEATLIST = array(
      "A" => array(
        "役員陣",
        "第１マーケティング部",
        "第２マーケティング部"
      ),
      "B" => array(
        "HIMARI事業部",
        "技術開発部",
        "事業企画部"
      )
    );

    //余興参加チーム
    public static $JOINTEAM = array(
      "hoge",
      "hogehoge",
      "hogehogehoge"
    );

    //宴会時間
    public static $BANQUET = array(
      "time" => "17:50",
      "place" => "旅館2F「比良の間」"
    );

    //宴会座席
    public static $BANQUETLIST = array(
      "A" => array(
        "津田 亮",
        "津田だ りょうう"
      ),
      "B" => array(
        "津田 量",
        "ああ あああ",
        "いい いい",
        "うう うううう"
      ),
      "C" => array(
        "津田 量",
        "ああ あああ",
        "いい いい",
        "うう うううう"
      ),
      "D" => array(
        "津田 量",
        "ああ あああ",
        "いい いい",
        "うう うううう"
      )
    );

    //お知らせ
    public static $NOTICE = array(
      '4/16(金)' => "hogehogehogehogehogehogehogehogehogehogehogehogehogehog",
      '4/15(金)' => "hogehogehogehogehogehogehogehogehogehogehogehogehogehog"
    );
  }
?>
