<?php

  class Stanza {
    protected $room_number;

    protected $floor;

    protected $beds;

    public $created_at;

    public $updated_at;

    public function __construct($_room_number, $_floor, $_beds, $_created_at, $_updated_at) {
      $this->setRoomNumber($_room_number);
      $this->setFloor($_floor);
      $this->setBeds($_beds);
      $this->created_at = $_created_at;
      $this->updated_at = $_updated_at;

    }

    public function setRoomNumber($room_number) {
      if (is_int($room_number)) {
        $this->room_number = $room_number;
      }
    }

    public function getRoomNumber() {
      return $this->room_number;
    }

    public function setFloor($floor) {
      if (is_int($floor)) {
        $this->floor = $floor;
      }
    }

    public function getFloor() {
      return $this->floor;
    }

    public function setBeds($beds) {
      if (is_int($beds)) {
        $this->beds = $beds;
      }
    }

    public function getBeds() {
      return $this->beds;
    }

  }

?>
