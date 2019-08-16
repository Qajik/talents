<?php

namespace frontend\helpers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Yii;
/**
 * Description of EnumHelper
 *
 * @author armen
 */
class EnumHelper
{
    //put your code here

    public static function getMonthsList($shortName = FALSE): array
    {
        return array_reduce(range(1, 12), function ($rslt, $m) use ($shortName) {
            $month = date('F', mktime(0, 0, 0, $m, 10));
            $rslt[$m] = $shortName ? mb_substr($month, 0, 3) : $month;
            return $rslt;
        });
    }

    public static function getYearsList($startFrom = 1900): array
    {
        $yearList = range(date("Y"), $startFrom);
        return array_combine($yearList, $yearList);
    }

    public static function getTestList()
    {
        return ['kawa', 'brązowa', 'kofeina'];
    }
    
    public static function getLanguageLevelList(){
        return [
            1 => Yii::t('app', 'Basic'),
            2 => Yii::t('app', 'Good'),
            3 => Yii::t('app', 'Fluent'),
            4 => Yii::t('app', 'First Language')
        ];
    }
    
    public static function getLanguageList(){
        return [
            'ab' => Yii::t('app', 'Abkhazian'),
            'aa' => Yii::t('app', 'Afar'),
            'af' => Yii::t('app', 'Afrikaans'),
            'ak' => Yii::t('app', 'Akan'),
            'sq' => Yii::t('app', 'Albanian'),
            'am' => Yii::t('app', 'Amharic'),
            'ar' => Yii::t('app', 'Arabic'),
            'an' => Yii::t('app', 'Aragonese'),
            'hy' => Yii::t('app', 'Armenian'),
            'as' => Yii::t('app', 'Assamese'),
            'av' => Yii::t('app', 'Avaric'),
            'ae' => Yii::t('app', 'Avestan'),
            'ay' => Yii::t('app', 'Aymara'),
            'az' => Yii::t('app', 'Azerbaijani'),
            'bm' => Yii::t('app', 'Bambara'),
            'ba' => Yii::t('app', 'Bashkir'),
            'eu' => Yii::t('app', 'Basque'),
            'be' => Yii::t('app', 'Belarusian'),
            'bn' => Yii::t('app', 'Bengali'),
            'bh' => Yii::t('app', 'Bihari languages'),
            'bi' => Yii::t('app', 'Bislama'),
            'bs' => Yii::t('app', 'Bosnian'),
            'br' => Yii::t('app', 'Breton'),
            'bg' => Yii::t('app', 'Bulgarian'),
            'my' => Yii::t('app', 'Burmese'),
            'ca' => Yii::t('app', 'Catalan, Valencian'),
            'km' => Yii::t('app', 'Central Khmer'),
            'ch' => Yii::t('app', 'Chamorro'),
            'ce' => Yii::t('app', 'Chechen'),
            'ny' => Yii::t('app', 'Chichewa, Chewa, Nyanja'),
            'zh' => Yii::t('app', 'Chinese'),
            'cu' => Yii::t('app', 'Church Slavonic'),
            'cv' => Yii::t('app', 'Chuvash'),
            'kw' => Yii::t('app', 'Cornish'),
            'co' => Yii::t('app', 'Corsican'),
            'cr' => Yii::t('app', 'Cree'),
            'hr' => Yii::t('app', 'Croatian'),
            'cs' => Yii::t('app', 'Czech'),
            'da' => Yii::t('app', 'Danish'),
            'dv' => Yii::t('app', 'Divehi, Dhivehi, Maldivian'),
            'nl' => Yii::t('app', 'Dutch, Flemish'),
            'dz' => Yii::t('app', 'Dzongkha'),
            'en' => Yii::t('app', 'English'),
            'eo' => Yii::t('app', 'Esperanto'),
            'et' => Yii::t('app', 'Estonian'),
            'ee' => Yii::t('app', 'Ewe'),
            'fo' => Yii::t('app', 'Faroese'),
            'fj' => Yii::t('app', 'Fijian'),
            'fi' => Yii::t('app', 'Finnish'),
            'fr' => Yii::t('app', 'French'),
            'ff' => Yii::t('app', 'Fulah'),
            'gd' => Yii::t('app', 'Gaelic, Scottish Gaelic'),
            'gl' => Yii::t('app', 'Galician'),
            'lg' => Yii::t('app', 'Ganda'),
            'ka' => Yii::t('app', 'Georgian'),
            'de' => Yii::t('app', 'German'),
            'ki' => Yii::t('app', 'Gikuyu, Kikuyu'),
            'el' => Yii::t('app', 'Greek (Modern)'),
            'kl' => Yii::t('app', 'Greenlandic, Kalaallisut'),
            'gn' => Yii::t('app', 'Guarani'),
            'gu' => Yii::t('app', 'Gujarati'),
            'ht' => Yii::t('app', 'Haitian, Haitian Creole'),
            'ha' => Yii::t('app', 'Hausa'),
            'he' => Yii::t('app', 'Hebrew'),
            'hz' => Yii::t('app', 'Herero'),
            'hi' => Yii::t('app', 'Hindi'),
            'ho' => Yii::t('app', 'Hiri Motu'),
            'hu' => Yii::t('app', 'Hungarian'),
            'is' => Yii::t('app', 'Icelandic'),
            'io' => Yii::t('app', 'Ido'),
            'ig' => Yii::t('app', 'Igbo'),
            'id' => Yii::t('app', 'Indonesian'),
            'ia' => Yii::t('app', 'Interlingua'),
            'ie' => Yii::t('app', 'Interlingue'),
            'iu' => Yii::t('app', 'Inuktitut'),
            'ik' => Yii::t('app', 'Inupiaq'),
            'ga' => Yii::t('app', 'Irish'),
            'it' => Yii::t('app', 'Italian'),
            'ja' => Yii::t('app', 'Japanese'),
            'kn' => Yii::t('app', 'Kannada'),
            'kr' => Yii::t('app', 'Kanuri'),
            'ks' => Yii::t('app', 'Kashmiri'),
            'kk' => Yii::t('app', 'Kazakh'),
            'rw' => Yii::t('app', 'Kinyarwanda'),
            'kv' => Yii::t('app', 'Komi'),
            'kg' => Yii::t('app', 'Kongo'),
            'ko' => Yii::t('app', 'Korean'),
            'kj' => Yii::t('app', 'Kwanyama, Kuanyama'),
            'ku' => Yii::t('app', 'Kurdish'),
            'ky' => Yii::t('app', 'Kyrgyz'),
            'lo' => Yii::t('app', 'Lao'),
            'la' => Yii::t('app', 'Latin'),
            'lv' => Yii::t('app', 'Latvian'),
            'lb' => Yii::t('app', 'Letzeburgesch, Luxembourgish'),
            'li' => Yii::t('app', 'Limburgish, Limburgan, Limburger'),
            'ln' => Yii::t('app', 'Lingala'),
            'lt' => Yii::t('app', 'Lithuanian'),
            'lu' => Yii::t('app', 'Luba-Katanga'),
            'mk' => Yii::t('app', 'Macedonian'),
            'mg' => Yii::t('app', 'Malagasy'),
            'ms' => Yii::t('app', 'Malay'),
            'ml' => Yii::t('app', 'Malayalam'),
            'mt' => Yii::t('app', 'Maltese'),
            'gv' => Yii::t('app', 'Manx'),
            'mi' => Yii::t('app', 'Maori'),
            'mr' => Yii::t('app', 'Marathi'),
            'mh' => Yii::t('app', 'Marshallese'),
            'ro' => Yii::t('app', 'Moldovan, Moldavian, Romanian'),
            'mn' => Yii::t('app', 'Mongolian'),
            'na' => Yii::t('app', 'Nauru'),
            'nv' => Yii::t('app', 'Navajo, Navaho'),
            'nd' => Yii::t('app', 'Northern Ndebele'),
            'ng' => Yii::t('app', 'Ndonga'),
            'ne' => Yii::t('app', 'Nepali'),
            'se' => Yii::t('app', 'Northern Sami'),
            'no' => Yii::t('app', 'Norwegian'),
            'nb' => Yii::t('app', 'Norwegian Bokmål'),
            'nn' => Yii::t('app', 'Norwegian Nynorsk'),
            'ii' => Yii::t('app', 'Nuosu, Sichuan Yi'),
            'oc' => Yii::t('app', 'Occitan (post 1500)'),
            'oj' => Yii::t('app', 'Ojibwa'),
            'or' => Yii::t('app', 'Oriya'),
            'om' => Yii::t('app', 'Oromo'),
            'os' => Yii::t('app', 'Ossetian, Ossetic'),
            'pi' => Yii::t('app', 'Pali'),
            'pa' => Yii::t('app', 'Panjabi, Punjabi'),
            'ps' => Yii::t('app', 'Pashto, Pushto'),
            'fa' => Yii::t('app', 'Persian'),
            'pl' => Yii::t('app', 'Polish'),
            'pt' => Yii::t('app', 'Portuguese'),
            'qu' => Yii::t('app', 'Quechua'),
            'rm' => Yii::t('app', 'Romansh'),
            'rn' => Yii::t('app', 'Rundi'),
            'ru' => Yii::t('app', 'Russian'),
            'sm' => Yii::t('app', 'Samoan'),
            'sg' => Yii::t('app', 'Sango'),
            'sa' => Yii::t('app', 'Sanskrit'),
            'sc' => Yii::t('app', 'Sardinian'),
            'sr' => Yii::t('app', 'Serbian'),
            'sn' => Yii::t('app', 'Shona'),
            'sd' => Yii::t('app', 'Sindhi'),
            'si' => Yii::t('app', 'Sinhala, Sinhalese'),
            'sk' => Yii::t('app', 'Slovak'),
            'sl' => Yii::t('app', 'Slovenian'),
            'so' => Yii::t('app', 'Somali'),
            'st' => Yii::t('app', 'Sotho, Southern'),
            'nr' => Yii::t('app', 'South Ndebele'),
            'es' => Yii::t('app', 'Spanish, Castilian'),
            'su' => Yii::t('app', 'Sundanese'),
            'sw' => Yii::t('app', 'Swahili'),
            'ss' => Yii::t('app', 'Swati'),
            'sv' => Yii::t('app', 'Swedish'),
            'tl' => Yii::t('app', 'Tagalog'),
            'ty' => Yii::t('app', 'Tahitian'),
            'tg' => Yii::t('app', 'Tajik'),
            'ta' => Yii::t('app', 'Tamil'),
            'tt' => Yii::t('app', 'Tatar'),
            'te' => Yii::t('app', 'Telugu'),
            'th' => Yii::t('app', 'Thai'),
            'bo' => Yii::t('app', 'Tibetan'),
            'ti' => Yii::t('app', 'Tigrinya'),
            'to' => Yii::t('app', 'Tonga (Tonga Islands)'),
            'ts' => Yii::t('app', 'Tsonga'),
            'tn' => Yii::t('app', 'Tswana'),
            'tr' => Yii::t('app', 'Turkish'),
            'tk' => Yii::t('app', 'Turkmen'),
            'tw' => Yii::t('app', 'Twi'),
            'ug' => Yii::t('app', 'Uighur, Uyghur'),
            'uk' => Yii::t('app', 'Ukrainian'),
            'ur' => Yii::t('app', 'Urdu'),
            'uz' => Yii::t('app', 'Uzbek'),
            've' => Yii::t('app', 'Venda'),
            'vi' => Yii::t('app', 'Vietnamese'),
            'vo' => Yii::t('app', 'Volap_k'),
            'wa' => Yii::t('app', 'Walloon'),
            'cy' => Yii::t('app', 'Welsh'),
            'fy' => Yii::t('app', 'Western Frisian'),
            'wo' => Yii::t('app', 'Wolof'),
            'xh' => Yii::t('app', 'Xhosa'),
            'yi' => Yii::t('app', 'Yiddish'),
            'yo' => Yii::t('app', 'Yoruba'),
            'za' => Yii::t('app', 'Zhuang, Chuang'),
            'zu' => Yii::t('app', 'Zulu')
        ];
    }
}
