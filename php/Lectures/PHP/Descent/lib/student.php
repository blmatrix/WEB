<?php
  final class Student extends Human {
    private $hasMoney, $university, $studies, $debts;

    function __construct(
      $eyes,
      $legs,
      $language,
      $hasMoney,
      $university,
      $studies,
      $debts) {
        parent::__construct($eyes, $legs, $language);
        $this->hasMoney = $hasMoney;
        $this->university = $university;
        $this->studies = $studies;
        $this->debts = $debts;
    }

    function get_description() {
      $moneyText = "neturintis pinigu";
      if($this->hasMoney) {
        $moneyText = "turintis pinigu";
      }

      return
        "Studentas su ".parent::get_eyes()." akimis ir ".parent::get_legs()." kojomis ir ".$moneyText." bei kalbantis ";
        parent::get_language();
    }
  }

 ?>
