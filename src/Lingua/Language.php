<?php

namespace Lingua;

/**
 * This class allows you to retrieve a language array containing:
 * - The language's code
 * - The language's name
 * - The language's native name
 */
class Language {

    protected $languages = [

        'ab' => [
            'name' => 'Abkhaz',
            'nativeName' => 'Аԥсуа бызшәа'
        ],
        'aa' => [
            'name' => 'Afar',
            'nativeName' => 'Afaraf'
        ],
        'af' => [
            'name' => 'Afrikaans',
            'nativeName' => 'Afrikaans'
        ],
        'ak' => [
            'name' => 'Akan',
            'nativeName' => 'Akan'
        ],
        'sq' => [
            'name' => 'Albanian',
            'nativeName' => 'Shqip'
        ],
        'am' => [
            'name' => 'Amharic',
            'nativeName' => 'አማርኛ'
        ],
        'ar' => [
            'name' => 'Arabic',
            'nativeName' => 'العربية'
        ],
        'an' => [
            'name' => 'Aragonese',
            'nativeName' => 'Aragonés'
        ],
        'hy' => [
            'name' => 'Armenian',
            'nativeName' => 'Հայերեն'
        ],
        'as' => [
            'name' => 'Assamese',
            'nativeName' => 'অসমীয়া'
        ],
        'av' => [
            'name' => 'Avaric',
            'nativeName' => 'магӀарул мацӀ'
        ],
        'ae' => [
            'name' => 'Avestan',
            'nativeName' => 'avesta'
        ],
        'ay' => [
            'name' => 'Aymara',
            'nativeName' => 'aymar aru'
        ],
        'az' => [
            'name' => 'Azerbaijani',
            'nativeName' => 'azərbaycan dili'
        ],
        'bm' => [
            'name' => 'Bambara',
            'nativeName' => 'bamanankan'
        ],
        'ba' => [
            'name' => 'Bashkir',
            'nativeName' => 'башҡорт теле'
        ],
        'eu' => [
            'name' => 'Basque',
            'nativeName' => 'Euskara'
        ],
        'be' => [
            'name' => 'Belarusian',
            'nativeName' => 'Беларуская'
        ],
        'bn' => [
            'name' => 'Bengali',
            'nativeName' => 'বাংলা'
        ],
        'bh' => [
            'name' => 'Bihari',
            'nativeName' => 'भोजपुरी'
        ],
        'bi' => [
            'name' => 'Bislama',
            'nativeName' => 'Bislama'
        ],
        'bs' => [
            'name' => 'Bosnian',
            'nativeName' => 'Bosanski jezik'
        ],
        'br' => [
            'name' => 'Breton',
            'nativeName' => 'Brezhoneg'
        ],
        'bg' => [
            'name' => 'Bulgarian',
            'nativeName' => 'български език'
        ],
        'my' => [
            'name' => 'Burmese',
            'nativeName' => 'ဗမာစာ'
        ],
        'ca' => [
            'name' => 'Catalan',
            'nativeName' => 'Català'
        ],
        'ch' => [
            'name' => 'Chamorro',
            'nativeName' => 'Chamoru'
        ],
        'ce' => [
            'name' => 'Chechen',
            'nativeName' => 'нохчийн мотт'
        ],
        'ny' => [
            'name' => 'Chichewa',
            'nativeName' => 'ChiCheŵa'
        ],
        'zh' => [
            'name' => 'Chinese',
            'nativeName' => '中文'
        ],
        'cv' => [
            'name' => 'Chuvash',
            'nativeName' => 'чӑваш чӗлхи'
        ],
        'kw' => [
            'name' => 'Cornish',
            'nativeName' => 'Kernewek'
        ],
        'co' => [
            'name' => 'Corsican',
            'nativeName' => 'Corsu'
        ],
        'cr' => [
            'name' => 'Cree',
            'nativeName' => 'ᓀᐦᐃᔭᐍᐏᐣ'
        ],
        'hr' => [
            'name' => 'Croatian',
            'nativeName' => 'Hrvatski'
        ],
        'cs' => [
            'name' => 'Czech',
            'nativeName' => 'čeština'
        ],
        'da' => [
            'name' => 'Danish',
            'nativeName' => 'Dansk'
        ],
        'dv' => [
            'name' => 'Maldivian',
            'nativeName' => 'Dihevi'
        ],
        'nl' => [
            'name' => 'Dutch',
            'nativeName' => 'Nederlands'
        ],
        'en' => [
            'name' => 'English',
            'nativeName' => 'English'
        ],
        'eo' => [
            'name' => 'Esperanto',
            'nativeName' => 'Esperanto'
        ],
        'et' => [
            'name' => 'Estonian',
            'nativeName' => 'Eesti'
        ],
        'ee' => [
            'name' => 'Ewe',
            'nativeName' => 'Eʋegbe'
        ],
        'fo' => [
            'name' => 'Faroese',
            'nativeName' => 'Føroyskt'
        ],
        'fj' => [
            'name' => 'Fijian',
            'nativeName' => 'vosa Vakaviti'
        ],
        'fi' => [
            'name' => 'Finnish',
            'nativeName' => 'Suomi'
        ],
        'fr' => [
            'name' => 'French',
            'nativeName' => 'Français'
        ],
        'ff' => [
            'name' => 'Fula',
            'nativeName' => 'Fulfulde'
        ],
        'gl' => [
            'name' => 'Galician',
            'nativeName' => 'Galego'
        ],
        'ka' => [
            'name' => 'Georgian',
            'nativeName' => 'ქართული'
        ],
        'de' => [
            'name' => 'German',
            'nativeName' => 'Deutsch'
        ],
        'el' => [
            'name' => 'Greek',
            'nativeName' => 'Ελληνικά'
        ],
        'gn' => [
            'name' => 'Guaraní',
            'nativeName' => 'Avañeẽ'
        ],
        'gu' => [
            'name' => 'Gujarati',
            'nativeName' => 'ગુજરાતી'
        ],
        'ht' => [
            'name' => 'Haitian Creole',
            'nativeName' => 'Kreyòl'
        ],
        'ha' => [
            'name' => 'Hausa',
            'nativeName' => 'Hausa, هَوُسَ'
        ],
        'he' => [
            'name' => 'Hebrew',
            'nativeName' => 'עברית'
        ],
        'hz' => [
            'name' => 'Herero',
            'nativeName' => 'Otjiherero'
        ],
        'hi' => [
            'name' => 'Hindi',
            'nativeName' => 'हिन्दी'
        ],
        'ho' => [
            'name' => 'Hiri Motu',
            'nativeName' => 'Hiri Motu'
        ],
        'hu' => [
            'name' => 'Hungarian',
            'nativeName' => 'Magyar'
        ],
        'ia' => [
            'name' => 'Interlingua',
            'nativeName' => 'Interlingua'
        ],
        'id' => [
            'name' => 'Indonesian',
            'nativeName' => 'Bahasa Indonesia'
        ],
        'ie' => [
            'name' => 'Interlingue',
            'nativeName' => 'Interlingue'
        ],
        'ga' => [
            'name' => 'Irish',
            'nativeName' => 'Gaeilge'
        ],
        'ig' => [
            'name' => 'Igbo',
            'nativeName' => 'Asụsụ Igbo'
        ],
        'ik' => [
            'name' => 'Inupiaq',
            'nativeName' => 'Iñupiatun'
        ],
        'io' => [
            'name' => 'Ido',
            'nativeName' => 'Ido'
        ],
        'is' => [
            'name' => 'Icelandic',
            'nativeName' => 'Íslenska'
        ],
        'it' => [
            'name' => 'Italian',
            'nativeName' => 'Italiano'
        ],
        'iu' => [
            'name' => 'Inuktitut',
            'nativeName' => 'ᐃᓄᒃᑎᑐᑦ'
        ],
        'ja' => [
            'name' => 'Japanese',
            'nativeName' => '日本語'
        ],
        'jv' => [
            'name' => 'Javanese',
            'nativeName' => 'basa Jawa'
        ],
        'kl' => [
            'name' => 'Greenlandic',
            'nativeName' => 'Kalaallisut'
        ],
        'kn' => [
            'name' => 'Kannada',
            'nativeName' => 'ಕನ್ನಡ'
        ],
        'kr' => [
            'name' => 'Kanuri',
            'nativeName' => 'Kanuri'
        ],
        'ks' => [
            'name' => 'Kashmiri',
            'nativeName' => 'कॉशुर'
        ],
        'kk' => [
            'name' => 'Kazakh',
            'nativeName' => 'Қазақ тілі'
        ],
        'km' => [
            'name' => 'Khmer',
            'nativeName' => 'ភាសាខ្មែរ'
        ],
        'ki' => [
            'name' => 'Kikuyu',
            'nativeName' => 'Gĩkũyũ'
        ],
        'rw' => [
            'name' => 'Kinyarwanda',
            'nativeName' => 'Ikinyarwanda'
        ],
        'ky' => [
            'name' => 'Kyrgyz',
            'nativeName' => 'Кыргызча'
        ],
        'kv' => [
            'name' => 'Komi',
            'nativeName' => 'коми кыв'
        ],
        'kg' => [
            'name' => 'Kongo',
            'nativeName' => 'KiKongo'
        ],
        'ko' => [
            'name' => 'Korean',
            'nativeName' => '한국어'
        ],
        'ku' => [
            'name' => 'Kurdish',
            'nativeName' => 'کوردی'
        ],
        'kj' => [
            'name' => 'Kwanyama',
            'nativeName' => 'Oshikwanyama'
        ],
        'la' => [
            'name' => 'Latin',
            'nativeName' => 'Lingua latina'
        ],
        'lb' => [
            'name' => 'Luxembourgish',
            'nativeName' => 'Lëtzebuergesch'
        ],
        'lg' => [
            'name' => 'Luganda',
            'nativeName' => 'Luganda'
        ],
        'li' => [
            'name' => 'Limburgish',
            'nativeName' => 'Limburgs'
        ],
        'ln' => [
            'name' => 'Lingala',
            'nativeName' => 'Lingála'
        ],
        'lo' => [
            'name' => 'Lao',
            'nativeName' => 'ພາສາລາວ'
        ],
        'lt' => [
            'name' => 'Lithuanian',
            'nativeName' => 'lietuvių kalba'
        ],
        'lu' => [
            'name' => 'Luba-Katanga',
            'nativeName' => 'Tshiluba'
        ],
        'lv' => [
            'name' => 'Latvian',
            'nativeName' => 'Latviešu valoda'
        ],
        'gv' => [
            'name' => 'Manx',
            'nativeName' => 'Gaelg'
        ],
        'mk' => [
            'name' => 'Macedonian',
            'nativeName' => 'македонски јазик'
        ],
        'mg' => [
            'name' => 'Malagasy',
            'nativeName' => 'Malagasy fiteny'
        ],
        'ms' => [
            'name' => 'Malay',
            'nativeName' => 'بهاس ملايو'
        ],
        'ml' => [
            'name' => 'Malayalam',
            'nativeName' => 'മലയാളം'
        ],
        'mt' => [
            'name' => 'Maltese',
            'nativeName' => 'Malti'
        ],
        'mi' => [
            'name' => 'Māori',
            'nativeName' => 'te reo Māori'
        ],
        'mr' => [
            'name' => 'Marathi',
            'nativeName' => 'मराठी'
        ],
        'mh' => [
            'name' => 'Marshallese',
            'nativeName' => 'Kajin M̧ajeļ'
        ],
        'mn' => [
            'name' => 'Mongolian',
            'nativeName' => 'монгол'
        ],
        'na' => [
            'name' => 'Nauru',
            'nativeName' => 'Ekakairũ Naoero'
        ],
        'nv' => [
            'name' => 'Navajo',
            'nativeName' => 'Diné bizaad'
        ],
        'nb' => [
            'name' => 'Norwegian Bokmål',
            'nativeName' => 'Norsk bokmål'
        ],
        'nd' => [
            'name' => 'North Ndebele',
            'nativeName' => 'isiNdebele'
        ],
        'ne' => [
            'name' => 'Nepali',
            'nativeName' => 'नेपाली'
        ],
        'ng' => [
            'name' => 'Ndonga',
            'nativeName' => 'Owambo'
        ],
        'nn' => [
            'name' => 'Norwegian Nynorsk',
            'nativeName' => 'Norsk Nynorsk'
        ],
        'no' => [
            'name' => 'Norwegian',
            'nativeName' => 'Norsk'
        ],
        'ii' => [
            'name' => 'Nuosu',
            'nativeName' => 'ꆈꌠ꒿'
        ],
        'nr' => [
            'name' => 'South Ndebele',
            'nativeName' => 'isiNdebele'
        ],
        'oc' => [
            'name' => 'Occitan',
            'nativeName' => 'Occitan'
        ],
        'oj' => [
            'name' => 'Ojibwe',
            'nativeName' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ'
        ],
        'cu' => [
            'name' => 'Old Church Slavonic',
            'nativeName' => 'ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ'
        ],
        'om' => [
            'name' => 'Oromo',
            'nativeName' => 'Afaan Oromoo'
        ],
        'or' => [
            'name' => 'Oriya',
            'nativeName' => 'ଓଡ଼ିଆ'
        ],
        'os' => [
            'name' => 'Ossetian',
            'nativeName' => 'ирон æвзаг'
        ],
        'pa' => [
            'name' => 'Punjabi',
            'nativeName' => 'ਪੰਜਾਬੀ'
        ],
        'pi' => [
            'name' => 'Pāli',
            'nativeName' => 'पाऴि'
        ],
        'fa' => [
            'name' => 'Persian',
            'nativeName' => 'فارسی'
        ],
        'pl' => [
            'name' => 'Polish',
            'nativeName' => 'Polski'
        ],
        'ps' => [
            'name' => 'Pashto',
            'nativeName' => 'پښتو'
        ],
        'pt' => [
            'name' => 'Portuguese',
            'nativeName' => 'Português'
        ],
        'qu' => [
            'name' => 'Quechua',
            'nativeName' => 'Runa simi'
        ],
        'rm' => [
            'name' => 'Romansh',
            'nativeName' => 'Rumantsch grischun'
        ],
        'rn' => [
            'name' => 'Rundi',
            'nativeName' => 'Ikirundi'
        ],
        'ro' => [
            'name' => 'Romanian',
            'nativeName' => 'Limba română'
        ],
        'ru' => [
            'name' => 'Russian',
            'nativeName' => 'русский язык'
        ],
        'sa' => [
            'name' => 'Sanskrit',
            'nativeName' => 'संस्कृतम्'
        ],
        'sc' => [
            'name' => 'Sardinian',
            'nativeName' => 'sardu'
        ],
        'sd' => [
            'name' => 'Sindhi',
            'nativeName' => 'سنڌي'
        ],
        'se' => [
            'name' => 'Northern Sami',
            'nativeName' => 'Davvisámegiella'
        ],
        'sm' => [
            'name' => 'Samoan',
            'nativeName' => 'Gagana faa Samoa'
        ],
        'sg' => [
            'name' => 'Sango',
            'nativeName' => 'Yângâ tî sängö'
        ],
        'sr' => [
            'name' => 'Serbian',
            'nativeName' => 'Cрпски језик'
        ],
        'gd' => [
            'name' => 'Gaelic',
            'nativeName' => 'Gàidhlig'
        ],
        'sn' => [
            'name' => 'Shona',
            'nativeName' => 'chiShona'
        ],
        'si' => [
            'name' => 'Sinhalese',
            'nativeName' => 'සිංහල'
        ],
        'sk' => [
            'name' => 'Slovak',
            'nativeName' => 'Slovenčina'
        ],
        'sl' => [
            'name' => 'Slovene',
            'nativeName' => 'Slovenščina'
        ],
        'so' => [
            'name' => 'Somali',
            'nativeName' => 'Af-Soomaali'
        ],
        'st' => [
            'name' => 'Southern Sotho',
            'nativeName' => 'Sesotho'
        ],
        'es' => [
            'name' => 'Spanish',
            'nativeName' => 'Español'
        ],
        'su' => [
            'name' => 'Sundanese',
            'nativeName' => 'Basa Sunda'
        ],
        'sw' => [
            'name' => 'Swahili',
            'nativeName' => 'Kiswahili'
        ],
        'ss' => [
            'name' => 'Swati',
            'nativeName' => 'SiSwati'
        ],
        'sv' => [
            'name' => 'Swedish',
            'nativeName' => 'Svenska'
        ],
        'ta' => [
            'name' => 'Tamil',
            'nativeName' => 'தமிழ்'
        ],
        'te' => [
            'name' => 'Telugu',
            'nativeName' => 'తెలుగు'
        ],
        'tg' => [
            'name' => 'Tajik',
            'nativeName' => 'тоҷикӣ'
        ],
        'th' => [
            'name' => 'Thai',
            'nativeName' => 'ไทย'
        ],
        'ti' => [
            'name' => 'Tigrinya',
            'nativeName' => 'ትግርኛ'
        ],
        'bo' => [
            'name' => 'Standard Tibetan',
            'nativeName' => 'བོད་ཡིག'
        ],
        'tk' => [
            'name' => 'Turkmen',
            'nativeName' => 'Түркмен'
        ],
        'tl' => [
            'name' => 'Tagalog',
            'nativeName' => 'Wikang Tagalog'
        ],
        'tn' => [
            'name' => 'Tswana',
            'nativeName' => 'Setswana'
        ],
        'to' => [
            'name' => 'Tonga',
            'nativeName' => 'faka Tonga'
        ],
        'tr' => [
            'name' => 'Turkish',
            'nativeName' => 'Türkçe'
        ],
        'ts' => [
            'name' => 'Tsonga',
            'nativeName' => 'Xitsonga'
        ],
        'tt' => [
            'name' => 'Tatar',
            'nativeName' => 'татар теле'
        ],
        'tw' => [
            'name' => 'Twi',
            'nativeName' => 'Twi'
        ],
        'ty' => [
            'name' => 'Tahitian',
            'nativeName' => 'Reo Tahiti'
        ],
        'ug' => [
            'name' => 'Uyghur',
            'nativeName' => 'ئۇيغۇر تىلى'
        ],
        'uk' => [
            'name' => 'Ukrainian',
            'nativeName' => 'українська'
        ],
        'ur' => [
            'name' => 'Urdu',
            'nativeName' => 'اردو'
        ],
        'uz' => [
            'name' => 'Uzbek',
            'nativeName' => 'Oʻzbekcha'
        ],
        've' => [
            'name' => 'Venda',
            'nativeName' => 'Tshivenḓa'
        ],
        'vi' => [
            'name' => 'Vietnamese',
            'nativeName' => 'Tiếng Việt'
        ],
        'vo' => [
            'name' => 'Volapük',
            'nativeName' => 'Volapük'
        ],
        'wa' => [
            'name' => 'Walloon',
            'nativeName' => 'Walon'
        ],
        'cy' => [
            'name' => 'Welsh',
            'nativeName' => 'Cymraeg'
        ],
        'wo' => [
            'name' => 'Wolof',
            'nativeName' => 'Wollof'
        ],
        'fy' => [
            'name' => 'Western Frisian',
            'nativeName' => 'Frysk'
        ],
        'xh' => [
            'name' => 'Xhosa',
            'nativeName' => 'isiXhosa'
        ],
        'yi' => [
            'name' => 'Yiddish',
            'nativeName' => 'ייִדיש'
        ],
        'yo' => [
            'name' => 'Yoruba',
            'nativeName' => 'Yorùbá'
        ],
        'za' => [
            'name' => 'Zhuang',
            'nativeName' => 'Vaƅcueŋƅ'
        ]
    ];

    /**
     * Find a language by it's code.
     * @param   String    $code    ISO 639-1 code, for availlable codes check https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     * @returns Array    An array containing the language code, name and native name
     */
    public function getLanguageByCode($code) {

        if(isset($this->languages[$code]) || array_key_exists($code, $this->languages)) {

            return $this->addCodeToArray($code, $this->languages[$code]);
        }
        
        return null;
    }

    /**
     * Find a language by it's name.
     * @param   String   $name   The language name in English
     * @returns Array    An array containing the language code, name and native name
     */
    public function getLanguageByName($name) {

        return $this->getLanguageByNestedKey('name', $name);
    }

    /**
     * Find a language by it's native name.
     * @param   String    $name    The language name in the corresponding language
     * @returns Array    An array containing the language code, name and native name
     */
    public function getLanguageByNativeName($name) {

        return $this->getLanguageByNestedKey('nativeName', $name);
    }

    /**
     * Return a language by looking up a key in the 2nd dimension of the languages array.
     * @param   String    $key
     * @param   String    $value
     * @returns Array    An array containing the language name and native name
     */
    protected function getLanguageByNestedKey($key, $value) {

        foreach($this->languages as $code => $language) {

            if(is_array($language) && strcasecmp($language[$key], $value) == 0) {

                return $this->addCodeToArray($code, $this->languages[$code]);
           }
        }

        return null;
    }

    /**
     * Add the language code to the language array.
     * @param String $code
     * @param Array $array
     * @returns Array    An array containing the language code, name and native name
     */
    protected function addCodeToArray($code, $array) {

        $code = ['code' => $code];
        $arrayWithCode = $code + $array;

        return $arrayWithCode;
    }

    /**
     * Get all availlable languages
     * @returns Array
     */
    public function getAll() {

        return $this->languages;
    }
}
