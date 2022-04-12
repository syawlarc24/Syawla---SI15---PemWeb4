<?php
class Buah{
    //buat property
    public $name;
    protected $color;
    private $berat;

    //buat method untuk mencetak si color dan berat.
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->berat = $b;
    }
}
//cetak object
$pisang = new Buah();
echo $pisang->name = 'Pisang';
echo"<br>";
echo $pisang->set_color('kuning');
echo"<br>";
echo $pisang->set_berat(20).'kg';
?>