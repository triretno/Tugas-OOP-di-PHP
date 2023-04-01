<?php
    class product {
        //properties
        public $name;
        public $price;
        public $discount;
    
        //methods
        function setName($name) {
            $this->name = $name;
        }
        function getName() {
            return $this->name;
        }

        function setPrice($price) {
            $this->price = $price;
        }
        function getPrice() {
            return $this->price;
        }

        function setDiscount($discount) {
            $this->discount = $discount;
        }
        function getDiscount() {
            return $this->discount;
        }
    }


    class CDMusic {
        //properties
        public $artist;
        public $genre;
        
        //methods
        function __construct($name = "nama", $price = "harga", $discount = "diskon") {
        }
        function setArtist($artist) {
            $this->artist = $artist;
        }
        function getArtist() {
            return $this->artist;
        }

        function setGenre($genre) {
            $this->genre = $genre;
        }
        function getGenre() {
            return $this->genre;
        }
        function setPrice($price) {
            $this->price = $price;
        }
        function getPrice() {
            $harga = $this->price;
            $ppn = ($this->price*(10/100));
            $discount = ($this->price*(5/100));
            return($harga + $ppn) - $discount;
        }
        function setDiscount($discount) {
            $this->discount = $discount;
        }
    }


    class CDRack {
        //properties
        public $capacity;
        public $model;

        //methods
        function setCapacity($capacity) {
            $this->capacity = $capacity;
        }
        function getCapacity() {
            return $this->capacity;
        }
        function setModel($model) {
            $this->model = $model;
        }
        function getModel() {
            return $this->model;
        }
        function getPrice() {
            $harga = $this->price;
            $ppn2 = ($this->price*(15/100));
            return($harga + $ppn2);
        }
    }

    $buy = new product();
    $buy_cdm = new CDMusic();
    $buy_cdr = new CDRack();

    $buy->setName("Ready To Be");
    $buy->setPrice(350000);
    $buy->setDiscount("Discount : <br> > CDMusic = 15% <br> > CDRack = Tidak ada diskon");
    
    echo "Album : ".$buy->getName();
    echo "<br>";
    echo "Harga : ".$buy->getPrice();
    echo "<br>";
    echo $buy->getDiscount();
    echo "<br><hr>";

    $buy_cdm->setArtist("Twice");
    $buy_cdm->setGenre("KPOP");
    $buy_cdm->setPrice(350000);
    $buy_cdm->setDiscount("5%");

    echo "Selamat pagi, berikut adalah rincian pembelian CDMusic anda : <br>";
    echo "Album : ".$buy->getName()."<br>";
    echo "Artist : ".$buy_cdm->getArtist()."<br>";
    echo "Genre : ".$buy_cdm->getGenre()."<br>";
    echo "Total Harga : Rp".$buy_cdm->getPrice()."<br>";
    echo "Total harga diatas sudah termasuk PPN 10% dan discount 5%";
?>
