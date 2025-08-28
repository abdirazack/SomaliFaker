<?php

namespace SomaliFaker\Provider\so_SO;

class Address extends \Faker\Provider\Base
{
    protected static $cities = array(
        'Aadan Yabaal', 'Hanan nagamous', 'Abaareey', 'Abudwak', 'Adado', 'Adaleafuen', 'Derri', 'Bargaal', 'Jacar',
        'Afgooye', 'Afmadow', 'Arar Lugole', 'Baidoa', 'Bajela', 'Balcad', 'Ballidagaruen', 'Balli Dhiddin',
        'Bandar Beyla', 'Bandiiradley', 'Barawa', 'Bardera', 'Beeli Wacatay', 'Beledhawo', 'bacaadwayn',
        'bashbash', 'Buloburde', 'Buqdaaqable', 'Berhani', 'Beyra', 'Bibi', 'Bu\'aale', 'Bur Saalax',
        'Buulo burte', 'Buulo Xaaji', 'Boorama', 'Burane', 'Burco', 'Burgaban', 'Burtinle', 'Buulo Togoro',
        'Buurdhuubo', 'Buurhakaba', 'Ceeldheer', 'Cadale', 'Cabdullekudaad', 'Ceel-Baraf', 'Caadley', 'Cadaley',
        'Ceel-Aweyn', 'Ceel Huur', 'Ceelbuur', 'Ceel Cali', 'Ceelmakoile', 'Colgula', 'Daharro', 'Dalweyn',
        'Dangorayo', 'Dhalwo', 'Dhamasa', 'Dharoor', 'Dhuusamarreeb', 'Diinsoor', 'Dinowda', 'Docol', 'Doolow',
        'Duulin Maaxato', 'Eyl', 'Fafahdun', 'Galaangale', 'Galcad', 'Galhareeri', 'Galinsoor', 'Galkayo',
        'Garacad', 'Garbahaarreey', 'Garoowe', 'Gashanle', 'Gawaan', 'Geerisa Awdal', 'Godinlabe', 'Godobjiran',
        'Goldogob', 'Goroyo-Cawl', 'Gowlallo', 'Gulane', 'Guriel', 'Guud Cad', 'Habo', 'Hafun', 'Hansholey',
        'Harardhere', 'Hareeri', 'Heded', 'Heraale', 'Hilmo', 'Hiloaxmadey', 'Hobyo', 'Hudur', 'Hoosingo',
        'Iskushuban', 'Jalalaqsi', 'Jamaame', 'Jana Cabdalle', 'Jariban', 'Jilib', 'Jowhar', 'Jidlabe',
        'Jiifyarey', 'Jilyaale', 'Karin', 'Kulanxagay', 'Kismayo', 'Laag', 'Lanwaley', 'Laas Dawaco', 'Luuq',
        'Leego', 'Mahadaay Weyn', 'Maraay Suuley', 'Mareergur', 'marwa foto weyn', 'Mareeg', 'Maxamedbuurfuule',
        'Merca', 'Messego Waay', 'Mogadishu', 'Mohamed Haji', 'Mubaarak', 'Qandala', 'Qardho', 'Qarxis',
        'Qaan Dhoole', 'Qansahdhere', 'Qarhis', 'Qoryoley', 'Qori lugud', 'Quraciitallal', 'Rako Raaxo',
        'Ras Kamboni', 'Rigomane', 'Raage Ceelle', 'Ruun Nirgood', 'Saacow', 'Shadia dhimo', 'Shalamboot',
        'Saylac', 'Sheerbi', 'Tadba', 'Taleex', 'Tile', 'Turdho', 'Ufeyn', 'Wabho', 'Waiye', 'Wajid',
        'Warsheikh', 'Weeraar', 'Wisil', 'Wobxo', 'Wanlawein', 'Xaafun', 'Xabaalo Barbar', 'Xerojaale', 'Xiddo',
        'Yake, Somalia'
    );

    protected static $districts = array(
        'Borama District', 'Zeila District', 'Lughaya District', 'Baki District', 'El Barde District',
        'Hudur District', 'Tiyeglow District', 'Wajid District', 'Rabdhure District', 'Abdiaziz District',
        'Bondhere District', 'Daynile District', 'Dharkenley District', 'Hamar Jajab District',
        'Hamar Weyne District', 'Hodan District', 'Hawle Wadag District', 'Huriwa District', 'Karan District',
        'Shibis District', 'Shangani District', 'Waberi District', 'Wadajir District', 'Wardhigley District',
        'Yaqshid District', 'Kaxda District', 'Bayla District', 'Bosaso District', 'Alula District',
        'Iskushuban District', 'Qandala District', 'Qardho District', 'Baidoa District', 'Burhakaba District',
        'Dinsoor District', 'Qasahdhere District', 'Abudwaq District', 'Adado District', 'Dhusa Mareb District',
        'El Buur District', 'El Dher District', 'Bardhere District', 'Beled Hawo District', 'El Wak District',
        'Dolow District', 'Garbaharey District', 'Luuq District', 'Beledweyne District', 'Buloburde District',
        'Jalalaqsi District', 'Mataban District', 'Mahas District', 'Farlibax District', 'Moqokori District',
        'Halgan District', 'Afmadow District', 'Badhadhe District', 'Jamame District', 'Kismayo District',
        'Afgooye District', 'Barawa District', 'Kurtunwarey District', 'Merca District', 'Qoriyoley District',
        'Sablale District', 'Wanlaweyn District', 'Bu\'ale District', 'Jilib District', 'Sakow District',
        'Adale District', 'Adan Yabal District', 'Balad District', 'Jowhar District', 'Mahaday District',
        'Runirgod District', 'Warsheikh District', 'Galkayo District', 'Galdogob District', 'Harardhere District',
        'Hobyo District', 'Jariban District', 'Garowe District', 'Burtinle District', 'Eyl District',
        'Dangorayo District', 'Godobjiran District', 'Erigavo District', 'Badhan District', 'Dhahar District',
        'Laascaanood District', 'Hudun District', 'Taleex District', 'Burao District', 'Oodweyne District',
        'Buhoodle District', 'Sheikh District', 'Hargeisa District', 'Berbera District', 'Gabiley District'
    );

    public function city()
    {
        return static::randomElement(static::$cities);
    }

    public function district()
    {
        return static::randomElement(static::$districts);
    }

    public function streetName()
    {
        return "Wadada " . $this->generator->firstName();
    }

    public function address()
    {
        return "123 " . $this->generator->streetName() . ", " . $this->generator->district() . ", " . $this->generator->city();
    }
}
