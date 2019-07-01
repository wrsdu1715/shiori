<?php
  class TravelGuide{

    public static $RELEASE = array(
      'fast'    =>  '2019-04-22 10:00',
      'second'  =>  '2019-04-22 10:00',
    );

    public static $SCHEDULE_DAY = array(
      '2019-04-04',
      '2019-04-05',
    );

    //スケジュール
    public  static $SCHEDULE = array(
      array(
        'title' => '【午前】各エリア出発',
        'areaList' => array(
          array(
            'secondTitle' => '▫️関東(ひかり503号)',
            'detail' => array(
              '7:33 東京駅(出発)',
              '7:50 品川駅(出発)',
              '7:51 新横浜(出発)',
              '9:44 米原駅(到着)',
            )
          ),
          array(
            'secondTitle' => '▫️大阪(ひかり541号)',
            'detail' => array(
              '9:16 新大阪駅(出発)',
              '9:52 米原駅(到着)',
            )
          ),
        ),
      ),
      array(
        'title' => '【午前】米原駅集合',
        'areaList' => array(
          array(
            'secondTitle' => '9:55 米原駅東口バス乗り場集合',
          ),
        ),
        'btn' => 'GoogleMapはこちら',
      ),
      array(
        'title' => '移動だよー(20分くらい)',
      ),
    );

    //部屋割り
    public static $ROOMLIST = array(
      array(
        "number" => "601",
        "members" => array(
          "小野寺　こここ",
          "津田　亮"
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
