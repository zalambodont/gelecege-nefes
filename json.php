<?php
header("Content-Type: application/json; charset=UTF-8");
$array = array(
	'top' => array(1 => '34', 2 => '35', 3 => '06', 4 => '53', 5 => '01'),
	'places' => array(
		'01' => array(
			'name' => 'Adana',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'02' => array(
			'name' => 'Adıyaman',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'03' => array(
			'name' => 'Afyon',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'04' => array(
			'name' => 'Ağrı',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'05' => array(
			'name' => 'Amasya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'06' => array(
			'name' => 'Ankara',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'07' => array(
			'name' => 'Antalya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'08' => array(
			'name' => 'Artvin',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'09' => array(
			'name' => 'Aydın',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'10' => array(
			'name' => 'Balıkesir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'11' => array(
			'name' => 'Bilecik',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'12' => array(
			'name' => 'Bingöl',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'13' => array(
			'name' => 'Bitlis',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'14' => array(
			'name' => 'Bolu',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'15' => array(
			'name' => 'Burdur',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'16' => array(
			'name' => 'Bursa',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'17' => array(
			'name' => 'Çanakkale',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'18' => array(
			'name' => 'Çankırı',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'19' => array(
			'name' => 'Çorum',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'20' => array(
			'name' => 'Denizli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'21' => array(
			'name' => 'Diyarbakır',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'22' => array(
			'name' => 'Edirne',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'23' => array(
			'name' => 'Elazığ',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'24' => array(
			'name' => 'Erzincan',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'25' => array(
			'name' => 'Erzurum',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'26' => array(
			'name' => 'Eskişehir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'27' => array(
			'name' => 'Gaziantep',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'28' => array(
			'name' => 'Giresun',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'29' => array(
			'name' => 'Gümüşhane',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'30' => array(
			'name' => 'Hakkari',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'31' => array(
			'name' => 'Hatay',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'32' => array(
			'name' => 'Isparta',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'33' => array(
			'name' => 'Mersin',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'34' => array(
			'name' => 'İstanbul',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'35' => array(
			'name' => 'İzmir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'36' => array(
			'name' => 'Kars',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'37' => array(
			'name' => 'Kastamonu',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'38' => array(
			'name' => 'Kayseri',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'39' => array(
			'name' => 'Kırklareli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'40' => array(
			'name' => 'Kırşehir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'41' => array(
			'name' => 'Kocaeli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'42' => array(
			'name' => 'Konya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'43' => array(
			'name' => 'Kütahya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'44' => array(
			'name' => 'Malatya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'45' => array(
			'name' => 'Manisa',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'46' => array(
			'name' => 'Kahramanmaraş',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'47' => array(
			'name' => 'Mardin',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'48' => array(
			'name' => 'Muğla',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'49' => array(
			'name' => 'Muş',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'50' => array(
			'name' => 'Nevşehir',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'51' => array(
			'name' => 'Niğde',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'52' => array(
			'name' => 'Ordu',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'53' => array(
			'name' => 'Rize',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'54' => array(
			'name' => 'Sakarya',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'55' => array(
			'name' => 'Samsun',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'56' => array(
			'name' => 'Siirt',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'57' => array(
			'name' => 'Sinop',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'58' => array(
			'name' => 'Sivas',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'59' => array(
			'name' => 'Tekirdağ',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'60' => array(
			'name' => 'Tokat',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'61' => array(
			'name' => 'Trabzon',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'62' => array(
			'name' => 'Tunceli',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'63' => array(
			'name' => 'Şanlıurfa',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'64' => array(
			'name' => 'Uşak',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'65' => array(
			'name' => 'Van',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'66' => array(
			'name' => 'Yozgat',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'67' => array(
			'name' => 'Zonguldak',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'68' => array(
			'name' => 'Aksaray',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'69' => array(
			'name' => 'Bayburt',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'70' => array(
			'name' => 'Karaman',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'71' => array(
			'name' => 'Kırıkkale',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'72' => array(
			'name' => 'Batman',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'73' => array(
			'name' => 'Şırnak',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'74' => array(
			'name' => 'Bartın',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'75' => array(
			'name' => 'Ardahan',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'76' => array(
			'name' => 'Iğdır',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'77' => array(
			'name' => 'Yalova',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'78' => array(
			'name' => 'Karabük',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'79' => array(
			'name' => 'Kilis',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'80' => array(
			'name' => 'Osmaniye',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'81' => array(
			'name' => 'Düzce',
			'target' => 1000,
			'completed' => 500,
			'percent' => 50
		),
		'100' => array(
			'name' => 'Türkiye',
			'target' => 81000,
			'completed' => 40500,
			'percent' => 50
		)
	)
);
// echo(json_encode($array, JSON_FORCE_OBJECT));
?>
{
    "top": {
        "1": "34",
        "2": "35",
        "3": "06",
        "4": "53",
        "5": "03"
    },
    "places": {
        "01": {
            "name": "Adana",
            "target": 1000,
            "completed": 500,
            "percent": 50
        },
        "02": {
            "name": "Ad\u0131yaman",
            "target": 1000,
            "completed": 500,
            "percent": 2
        },
        "03": {
            "name": "Afyonkarahisar",
            "target": 1000,
            "completed": 500,
            "percent": 60
        },
        "04": {
            "name": "A\u011fr\u0131",
            "target": 1000,
            "completed": 500,
            "percent": 4
        },
        "05": {
            "name": "Amasya",
            "target": 1000,
            "completed": 500,
            "percent": 5
        },
        "06": {
            "name": "Ankara",
            "target": 1000,
            "completed": 500,
            "percent": 80
        },
        "07": {
            "name": "Antalya",
            "target": 1000,
            "completed": 500,
            "percent": 7
        },
        "08": {
            "name": "Artvin",
            "target": 1000,
            "completed": 500,
            "percent": 8
        },
        "09": {
            "name": "Ayd\u0131n",
            "target": 1000,
            "completed": 500,
            "percent": 9
        },
        "10": {
            "name": "Bal\u0131kesir",
            "target": 1000,
            "completed": 500,
            "percent": 10
        },
        "11": {
            "name": "Bilecik",
            "target": 1000,
            "completed": 500,
            "percent": 11
        },
        "12": {
            "name": "Bing\u00f6l",
            "target": 1000,
            "completed": 500,
            "percent": 12
        },
        "13": {
            "name": "Bitlis",
            "target": 1000,
            "completed": 500,
            "percent": 13
        },
        "14": {
            "name": "Bolu",
            "target": 1000,
            "completed": 500,
            "percent": 14
        },
        "15": {
            "name": "Burdur",
            "target": 1000,
            "completed": 500,
            "percent": 15
        },
        "16": {
            "name": "Bursa",
            "target": 1000,
            "completed": 500,
            "percent": 16
        },
        "17": {
            "name": "\u00c7anakkale",
            "target": 1000,
            "completed": 500,
            "percent": 17
        },
        "18": {
            "name": "\u00c7ank\u0131r\u0131",
            "target": 1000,
            "completed": 500,
            "percent": 18
        },
        "19": {
            "name": "\u00c7orum",
            "target": 1000,
            "completed": 500,
            "percent": 19
        },
        "20": {
            "name": "Denizli",
            "target": 1000,
            "completed": 500,
            "percent": 20
        },
        "21": {
            "name": "Diyarbak\u0131r",
            "target": 1000,
            "completed": 500,
            "percent": 21
        },
        "22": {
            "name": "Edirne",
            "target": 1000,
            "completed": 500,
            "percent": 100
        },
        "23": {
            "name": "Elaz\u0131\u011f",
            "target": 1000,
            "completed": 500,
            "percent": 23
        },
        "24": {
            "name": "Erzincan",
            "target": 1000,
            "completed": 500,
            "percent": 24
        },
        "25": {
            "name": "Erzurum",
            "target": 1000,
            "completed": 500,
            "percent": 25
        },
        "26": {
            "name": "Eski\u015fehir",
            "target": 1000,
            "completed": 500,
            "percent": 26
        },
        "27": {
            "name": "Gaziantep",
            "target": 1000,
            "completed": 500,
            "percent": 27
        },
        "28": {
            "name": "Giresun",
            "target": 1000,
            "completed": 500,
            "percent": 28
        },
        "29": {
            "name": "G\u00fcm\u00fc\u015fhane",
            "target": 1000,
            "completed": 500,
            "percent": 29
        },
        "30": {
            "name": "Hakkari",
            "target": 1000,
            "completed": 500,
            "percent": 30
        },
        "31": {
            "name": "Hatay",
            "target": 1000,
            "completed": 500,
            "percent": 31
        },
        "32": {
            "name": "Isparta",
            "target": 1000,
            "completed": 500,
            "percent": 32
        },
        "33": {
            "name": "Mersin",
            "target": 1000,
            "completed": 500,
            "percent": 33
        },
        "34": {
            "name": "\u0130stanbul",
            "target": 1000,
            "completed": 500,
            "percent": 100
        },
        "35": {
            "name": "\u0130zmir",
            "target": 1000,
            "completed": 500,
            "percent": 90
        },
        "36": {
            "name": "Kars",
            "target": 1000,
            "completed": 500,
            "percent": 56
        },
        "37": {
            "name": "Kastamonu",
            "target": 1000,
            "completed": 500,
            "percent": 37
        },
        "38": {
            "name": "Kayseri",
            "target": 1000,
            "completed": 500,
            "percent": 38
        },
        "39": {
            "name": "K\u0131rklareli",
            "target": 1000,
            "completed": 500,
            "percent": 39
        },
        "40": {
            "name": "K\u0131r\u015fehir",
            "target": 1000,
            "completed": 500,
            "percent": 40
        },
        "41": {
            "name": "Kocaeli",
            "target": 1000,
            "completed": 500,
            "percent": 41
        },
        "42": {
            "name": "Konya",
            "target": 1000,
            "completed": 500,
            "percent": 42
        },
        "43": {
            "name": "K\u00fctahya",
            "target": 1000,
            "completed": 500,
            "percent": 43
        },
        "44": {
            "name": "Malatya",
            "target": 1000,
            "completed": 500,
            "percent": 44
        },
        "45": {
            "name": "Manisa",
            "target": 1000,
            "completed": 500,
            "percent": 45
        },
        "46": {
            "name": "Kahramanmara\u015f",
            "target": 1000,
            "completed": 500,
            "percent": 46
        },
        "47": {
            "name": "Mardin",
            "target": 1000,
            "completed": 500,
            "percent": 47
        },
        "48": {
            "name": "Mu\u011fla",
            "target": 1000,
            "completed": 500,
            "percent": 48
        },
        "49": {
            "name": "Mu\u015f",
            "target": 1000,
            "completed": 500,
            "percent": 49
        },
        "50": {
            "name": "Nev\u015fehir",
            "target": 1000,
            "completed": 500,
            "percent": 50
        },
        "51": {
            "name": "Ni\u011fde",
            "target": 1000,
            "completed": 500,
            "percent": 51
        },
        "52": {
            "name": "Ordu",
            "target": 1000,
            "completed": 500,
            "percent": 52
        },
        "53": {
            "name": "Rize",
            "target": 1000,
            "completed": 500,
            "percent": 70
        },
        "54": {
            "name": "Sakarya",
            "target": 1000,
            "completed": 500,
            "percent": 54
        },
        "55": {
            "name": "Samsun",
            "target": 1000,
            "completed": 500,
            "percent": 55
        },
        "56": {
            "name": "Siirt",
            "target": 1000,
            "completed": 500,
            "percent": 56
        },
        "57": {
            "name": "Sinop",
            "target": 1000,
            "completed": 500,
            "percent": 57
        },
        "58": {
            "name": "Sivas",
            "target": 1000,
            "completed": 500,
            "percent": 58
        },
        "59": {
            "name": "Tekirda\u011f",
            "target": 1000,
            "completed": 500,
            "percent": 59
        },
        "60": {
            "name": "Tokat",
            "target": 1000,
            "completed": 500,
            "percent": 60
        },
        "61": {
            "name": "Trabzon",
            "target": 1000,
            "completed": 500,
            "percent": 61
        },
        "62": {
            "name": "Tunceli",
            "target": 1000,
            "completed": 500,
            "percent": 62
        },
        "63": {
            "name": "\u015eanl\u0131urfa",
            "target": 1000,
            "completed": 500,
            "percent": 63
        },
        "64": {
            "name": "U\u015fak",
            "target": 1000,
            "completed": 500,
            "percent": 64
        },
        "65": {
            "name": "Van",
            "target": 1000,
            "completed": 500,
            "percent": 65
        },
        "66": {
            "name": "Yozgat",
            "target": 1000,
            "completed": 500,
            "percent": 66
        },
        "67": {
            "name": "Zonguldak",
            "target": 1000,
            "completed": 500,
            "percent": 67
        },
        "68": {
            "name": "Aksaray",
            "target": 1000,
            "completed": 500,
            "percent": 68
        },
        "69": {
            "name": "Bayburt",
            "target": 1000,
            "completed": 500,
            "percent": 69
        },
        "70": {
            "name": "Karaman",
            "target": 1000,
            "completed": 500,
            "percent": 75
        },
        "71": {
            "name": "K\u0131r\u0131kkale",
            "target": 1000,
            "completed": 500,
            "percent": 80
        },
        "72": {
            "name": "Batman",
            "target": 1000,
            "completed": 500,
            "percent": 81
        },
        "73": {
            "name": "\u015e\u0131rnak",
            "target": 1000,
            "completed": 500,
            "percent": 82
        },
        "74": {
            "name": "Bart\u0131n",
            "target": 1000,
            "completed": 500,
            "percent": 83
        },
        "75": {
            "name": "Ardahan",
            "target": 1000,
            "completed": 500,
            "percent": 84
        },
        "76": {
            "name": "I\u011fd\u0131r",
            "target": 1000,
            "completed": 500,
            "percent": 90
        },
        "77": {
            "name": "Yalova",
            "target": 1000,
            "completed": 500,
            "percent": 91
        },
        "78": {
            "name": "Karab\u00fck",
            "target": 1000,
            "completed": 500,
            "percent": 92
        },
        "79": {
            "name": "Kilis",
            "target": 1000,
            "completed": 500,
            "percent": 93
        },
        "80": {
            "name": "Osmaniye",
            "target": 1000,
            "completed": 500,
            "percent": 94
        },
        "81": {
            "name": "D\u00fczce",
            "target": 1000,
            "completed": 500,
            "percent": 100
        },
        "100": {
            "name": "T\u00fcrkiye",
            "target": 81000,
            "completed": 40500,
            "percent": 60
        }
    }
}