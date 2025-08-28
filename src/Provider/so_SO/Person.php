<?php

namespace SomaliFaker\Provider\so_SO;

class Person extends \Faker\Provider\Base
{
    protected static $names = array(
        'Abroone', 'Absame', 'Abtidoon', 'Adooneebe', 'Afgab', 'Allaalle', 'Amare', 'Amaanle', 'Araarsame', 'Arbe',
        'Awsame', 'Ayaanle', 'Ayaansame', 'Ayaxoow', 'Aye', 'Aroow', 'Awgab', 'Baalow', 'Baashe/Bashi', 'Baandee',
        'Bacalwaan', 'Badhiidh', 'Bahdoon', 'Barkhad', 'Barre', 'Barsame', 'Baxnaan', 'Beyle', 'Biixi', 'Bile',
        'Bisinle', 'Bisle', 'Bookh', 'Boorle', 'Bootaan', 'Boqorre', 'Bulxan', 'Budul', 'Buraale', 'Batax', 'Buux',
        'Babow', 'Baraxow', 'Caateye', 'Cabbane', 'Cabsiiye', 'Caddaawe', 'Cadoosh', 'Caaggane', 'Calas', 'Calasoow',
        'Careys', 'Carre', 'Cartan', 'Carraale', 'Casoowe', 'Catoosh', 'Casood', 'Cawaale', 'Cawad', 'Caweys',
        'Cawke', 'Cawil', 'Cawl', 'Caydiid', 'Caynaan', 'Caynaanshe', 'Celeeye', 'Cige', 'Cigaal', 'Cigalle',
        'Ciid', 'Ciiltire', 'Ciise', 'Cilmi', 'Cokiye', 'Colaad', 'Coldiid', 'Coldoon', 'Cosoble', 'Culusow',
        'Daaliy', 'Dalal', 'Dalmar', 'Damal', 'Dawaale', 'Deeq', 'Deheeye', 'Dhakak', 'Dharaar', 'Dhabar', 'Dhamac',
        'Dheeg', 'Dhiblaawe', 'Dhinbiil', 'Dhooddi', 'Dhuule', 'Dhuux', 'Dabaal', 'Dhuxul', 'Dicin', 'Didar',
        'Digaale', 'Diirrane', 'Diiriye', 'Dillaal', 'Dirir', 'Dubbad', 'Dubbe', 'Ducaale', 'Duddub', 'Dugsiiye',
        'Erasto', 'Elmi', 'Egal', 'Ereg', 'Eymooy', 'Faaydle', 'Faarax', 'Farxaan', 'Foodle', 'Foos', 'Foosi',
        'Gaafane', 'Gaarane', 'Gabeyre', 'Gaboose', 'Gaboobe', 'Gabyow', 'Gacayte', 'Gadiid', 'Gafle', 'Galaal',
        'Galab', 'Galayax', 'Galbeyte', 'Gallad', 'Gamadiid', 'Gamiye', 'Garaad', 'Garre', 'Geeddi', 'Geeddow',
        'Geeldoon', 'Geelle', 'Geeljire', 'Geesaale', 'Geesi', 'Gobdoon', 'Godane', 'Goodh', 'Garaase', 'Guhaad',
        'Gurey', 'Gurmad', 'Gurxan', 'Guuldoon', 'Guuleed', 'Guutaale', 'Guure', 'Habbane', 'Hagoogane', 'Halas',
        'Hanad', 'Haybe', 'Harti', 'Hiirane', 'Hiirad', 'Hiraab', 'Hidan', 'Hirre', 'Hufane', 'Hurre', 'Huruuse',
        'Iidle', 'Ilays', 'Irbad', 'Jaajuumow', 'Jaamac', 'Jabane', 'Jaalle', 'Jawaan', 'Jannagale', 'Jayte',
        'Jiilaal', 'Jimcaale', 'Jowhar', 'Jaahurow', 'Jaahuur', 'Kofarey', 'Kaahin', 'Kaahiye', 'Kaariye',
        'Kaarshe', 'Kediye', 'Kamas', 'Karbaashe', 'Kartiile', 'Kawaaliye', 'Kayd', 'Keenadiid', 'Keynaan',
        'Keyse', 'Khayre', 'Kiile', 'Koombe', 'Kooshin', 'Koosafaare', 'Kuluc', 'Kunciil', 'Lediye', 'Liibaan',
        'Lo\'doon', 'Looyaan', 'Maacis', 'Maax', 'Maawel', 'Macalin', 'Madoobe', 'Magan', 'Malow', 'Mataan',
        'Maxabe', 'Maydhane', 'Maydhalaalis', 'Maygaag', 'Mayow', 'Migil', 'Miicaad', 'Miiggane', 'Mire',
        'Mooge', 'Naalleeye', 'Nabaddoon', 'Nageeye', 'Nasiiye', 'Nasteex', 'Naardiid', 'Obsiiye', 'Odawaa',
        'Odey', 'Olol', 'Oogle', 'Qaad-diid', 'Qaar', 'Qawrax', 'Qamaan', 'Qabille', 'Qalinle', 'Qaloon',
        'Qarshe', 'Qorane', 'Qarshiile', 'Qayaad', 'Qaybdiid', 'Raage', 'Rays', 'Riyaale', 'Rooble', 'Rirashe',
        'Sade', 'Sahal', 'Samaale', 'Samaane', 'Samadoon', 'Samafale', 'Samagalle', 'Samakaab', 'Samatalis',
        'Samatar', 'Samawade', 'Saxardiid', 'Seed', 'Sharmaarke', 'Sharmooge', 'Shidane', 'Shide', 'Shirdoon',
        'Shire', 'Shirshore', 'Shirwac', 'Siyaad', 'Sooyaan', 'Sooraan', 'Suban', 'Suubbane', 'Sugaal', 'Suge',
        'Sugulle', 'Suudi', 'Tabale', 'Tadalesh', 'Talasame', 'Tanade', 'Taraar', 'Tubeec', 'Tukaale', 'Tosane',
        'Ubaxle', 'Ugaas', 'Ugaar', 'Uurays', 'Waabberi', 'Waaheen', 'Waare', 'Waaruf', 'Waasuge', 'Wacays',
        'Waraabe', 'Wardheere', 'Warfaa', 'Warmooge', 'Warsame', 'Warqayrle', 'Weheliye', 'Xaad', 'Xaashi',
        'Xaayow', 'Xabbad', 'Xalane', 'Xandulle', 'Xarbi', 'Xareed', 'Xawaadle', 'Xayd', 'Xildiid', 'Xiirey',
        'Xirsi', 'Xoosh', 'Xujaale', 'Xumadiid', 'Yaabe', 'Yabaal', 'Yabarow', 'Yalaxoow', 'Absan', 'Abyan',
        'Almas', 'Aragsan', 'Ardo', 'Astur', 'Ashkira', 'Axado', 'Ayaan', 'Baarlin', 'Bacado', 'Barkhado', 'Barni',
        'Barwaaqo', 'Batuulo', 'Baxsan', 'Beydan', 'Bilan', 'Biliiso', 'Bishaaro', 'Bullo', 'Buuxo', 'Caanood',
        'Cajabo', 'Calaso', 'Cambaro', 'Carfoon', 'Carraweelo', 'Carro', 'Caweys', 'Cawo', 'Cawrala', 'Cazuura',
        'Ceebla', 'Cibaado', 'Cosob', 'Cudbi', 'Culus', 'Cureeji', 'Cilmi', 'Dalays', 'Deeqa', 'Deggan', 'Degmo',
        'Dhalac', 'Dheeman', 'Dhibla', 'Dhiimo', 'Dhudhi', 'Dhuuxo', 'Ebyan', 'Edna', 'Emiira', 'Elmi', 'Faduun',
        'Falis', 'Filsan', 'Faroow', 'Fardowsa', 'Foosiya', 'Farax', 'Farxiya', 'Farxad', 'Foodle', 'Fayruz',
        'Gaasira', 'Gallado', 'Gargaaro', 'Habboon', 'Hadliya', 'Halgan', 'Haweeyo', 'Hibaaq', 'Hodan',
        'Hodman', 'Hoodo', 'Idil', 'Ifraah', 'Idman', 'Iftin', 'Iglan', 'Ilwaad', 'Ilays', 'Isniino', 'Jamaad',
        'Jarmaad', 'Jiijo', 'Jookha', 'Kaaha', 'Karur', 'Kiin', 'Kinsiy', 'Koos', 'Kulan', 'Ladan', 'Laqanyo',
        'Libin', 'Liin', 'Lula', 'Luul', 'Maane', 'Maandeeq', 'Maida', 'Magool', 'Mahado', 'Malabo', 'Malyuun',
        'Mayran', 'Melaaneey', 'Milgo', 'Mudan', 'Mullaaxo', 'Mulki', 'Muxubbo', 'Negaad', 'Naruuro', 'Nashaad',
        'Nasteexo', 'Nuurto', 'Nahlaa', 'Nakhaa', 'Naju', 'Nayruus', 'Qalanjo', 'Qaliya', 'Qamaasho', 'Qaayaweyn',
        'Qarad', 'Qumman', 'Raalliya', 'Rooda', 'Ruun', 'Rahma', 'Saada', 'Saado', 'Sabaad', 'Saharla', 'Saluugla',
        'Sareedo', 'Saxarla', 'Shacni', 'Shaqlan', 'Sagal', 'Shuun', 'Shankaroon', 'Siman', 'Siraad', 'Sohane',
        'Sowoydo', 'Suubban', 'Salma', 'Sabirin', 'Sumeyo', 'Samawada', 'Samira', 'Sucaado', 'sucuudo',
        'Taliso', 'Tanaad', 'Tawllan', 'Timiro', 'Tisa', 'Toolmoon', 'Toosan', 'Tusmo', 'Tasnim', 'Ubax',
        'Ugaaso', 'Ugbaad', 'Yurub', 'Yuusur', 'Yusra', 'Waris', 'Warsan', 'Wiilo', 'Xaadsan', 'Xaali', 'Xabado',
        'Xaddiyo', 'Xalan', 'Xaliimo', 'Xareedo', 'Xiddigo'
    );

    /**
     * @example 'Ayaanle'
     */
    public function firstName()
    {
        return static::randomElement(static::$names);
    }

    /**
     * @example 'Hassan'
     */
    public function lastName()
    {
        return static::randomElement(static::$names);
    }

    /**
     * @example 'Ayaanle Hassan'
     */
    public function name()
    {
        return $this->generator->firstName() . ' ' . $this->generator->lastName();
    }
}
