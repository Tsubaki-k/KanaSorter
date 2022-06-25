<?php



function stringggg(){

    $data = $_POST['string'];

    $default = 'あした:tomorrow,
    はじめまして:nice to meet you,
    ちかてつ:subway,
    はな:flower,
    わ:I,
    さようなら:goodbye,
    すみません:sorry,
    わたし:I,
    わんし:I,
    もしもし:alo,
    あか:red,
    ゆうめい:famous,
    あお:blue';

    // if( !empty($strr) ){
    //     return $strr;
    // }else(
    //     return $default;
    // )

    return $data;
}

function kana_mode(){
    // define("KANA_MODE", "hiragana");
    $data = $_POST['kana'];
    if( $data == 'hiragana' ){
        $result = 'hiragana';
    }else{
        $result = 'katakana';
    }

    return $result;
}
function hiragana(){
    $hiragana = array(
                    array(
                        'gojuOn',
                        array(
                            array('あ','い','う','え','お'),
                            array('か','き','く','け','こ'),
                            array('さ','し','す','せ','そ'),
                            array('た','ち','つ','て','と'),
                            array('な','に','ぬ','ね','の'),
                            array('は','ひ','ふ','へ','ほ'),
                            array('ま','み','む','め','も'),
                            array('や','ゆ','よ'),
                            array('ら','り','る','れ','ろ'),
                            array('わ','を'),
                            array('ん'),
                        )
                    ),
                    array(
                        'dakuOn',
                        array(
                            array( 'が' , 'ぎ' ,'ぐ' , 'げ' , 'ご' ),
                            array( 'ざ' , 'じ' ,'ず' , 'ぜ' , 'ぞ' ),
                            array( 'だ' , 'ぢ' ,'づ' , 'で' , 'ど' ),
                            array( 'ば' , 'び' ,'ぶ' , 'べ' , 'ぼ' ),
                            array( 'ぱ' , 'ぴ' ,'ぷ' , 'ぺ' , 'ぽ' ),
                        )
                    ),
                    array(
                        'youOn',
                        array(
                            array( 'きゃ' , 'きゅ' , 'きょ' ),
                            array( 'しゃ' , 'しゅ' , 'しょ' ),
                            array( 'ちゃ' , 'ちゅ' , 'ちょ' ),
                            array( 'にゃ' , 'にゅ' , 'にょ' ),
                            array( 'ひゃ' , 'ひゅ' , 'ひょ' ),
                            array( 'みゃ' , 'みゅ' , 'みょ' ),
                            array( 'りゃ' , 'りゅ' , 'りょ' ),
                        )
                    ),
                    array(
                        'dakuOn + youOn',
                        array(
                            array( 'ぎゃ' , 'ぎゅ' , 'ぎょ' ),
                            array( 'じゃ' , 'じゅ' , 'じょ' ),
                            array( 'びゃ' , 'びゅ' , 'びょ' ),
                            array( 'ぴゃ' , 'ぴゅ' , 'ぴょ' ),
                        )
                    ),
                    array(
                        'tashdid',
                        array(
                            array( 'っ' ),
                        )
                    ),

    );
    $katakana = array(
        array(
            'gojuOn',
            array(
                array('ア','イ','ワ','エ','オ'),
                array('カ','キ','ク','ケ','コ'),
                array('サ','シ','ス','セ','ソ'),
                array('タ','チ','ツ','テ','ト'),
                array('ナ','ニ','ヌ','ネ','ノ'),
                array('ハ','ヒ','フ','へ','ホ'),
                array('マ','ミ','ム','メ','モ'),
                array('ヤ','ユ','ヨ'),
                array('ラ','リ','ル','レ','ロ'),
                array('ワ','ヲ'),
                array('ン'),
            )
        ),
        array(
            'dakuOn',
            array(
                array( 'ガ' , 'ギ' ,'グ' , 'ゲ' , 'ゴ' ),
                array( 'ザ' , 'ジ' ,'ズ' , 'ゼ' , 'ゾ' ),
                array( 'ダ' , 'ヂ' ,'ヅ' , 'デ' , 'ド' ),
                array( 'バ' , 'ビ' ,'ブ' , 'ベ' , 'ボ' ),
                array( 'パ' , 'ピ' ,'プ' , 'ペ' , 'ポ' ),
            )
        ),
        array(
            'youOn',
            array(
                array( 'キャ' , 'キュ' , 'キョ' ),
                array( 'シャ' , 'シュ' , 'ショ' ),
                array( 'チャ' , 'チュ' , 'チョ' ),
                array( 'ニャ' , 'ニュ' , 'ニョ' ),
                array( 'ヒャ' , 'ヒュ' , 'ヒョ' ),
                array( 'ミャ' , 'ミュ' , 'ミョ' ),
                array( 'リャ' , 'リュ' , 'リョ' ),
            )
        ),
        array(
            'dakuOn + youOn',
            array(
                array( 'ギャ' , 'ギュ' , 'ギョ' ),
                array( 'ジャ' , 'ジュ' , 'ジョ' ),
                array( 'ビャ' , 'ビュ' , 'ビョ' ),
                array( 'ピャ' , 'ピュ' , 'ピョ' ),
            )
        ),
        array(
            'tashdid',
            array(
                array( 'ッ' ),
            )
        ),
    );

    $kana = kana_mode();
    if( $kana == 'hiragana' ){
        return $hiragana;
    }
    if( $kana == 'katakana' ){
        return $katakana;
    }
}

function string_sorter( $value , $mode = null ){

    $string_names = array();
    $string_meanings = array();
    $alphabet_name = $mode ;
    $aaaaa = preg_replace( "/\r|\n/", "", stringggg() );
    // $string_br_deleter = preg_split('/[\s,]+/' , stringggg() , -1 , 0);
    $string_br_deleter = explode( ',', $aaaaa );

    // return $string_br_deleter;

    foreach( $string_br_deleter as $key ){

        if( strlen($key) != 0  ){
            $string_colon_exploder = explode( ':', $key );
            // echo $string_colon_exploder[1].'</br>';          
                $hiragana = '/([\p{Hiragana}「」]+)/mu';
                $katakana = '/([\p{Katakana}「」]+)/mu';

                $match_hiragana = preg_match_all($hiragana, $key, $matches, PREG_PATTERN_ORDER , 0);
                $match_katakana = preg_match_all($katakana, $key, $matches, PREG_PATTERN_ORDER , 0);

                if( strpos($key , '*') !== 0 && $key !== '' ){
                    if( $alphabet_name == 'hiragana' && $match_hiragana && $match_katakana !== 1 ){
                        array_push( $string_names    , $string_colon_exploder[0] );
                        if( isset($string_meanings) ){
                            array_push( $string_meanings , $string_colon_exploder[1] );
                        }else{
                            array_push( $string_meanings , "" );
                        }
                    }
                    if( $alphabet_name == 'katakana' && $match_katakana ){
                        array_push( $string_names    , $string_colon_exploder[0] );
                        array_push( $string_meanings , $string_colon_exploder[1] );
                    }
                }
        }
    }

    if( $value == 'word' ){
        $sss = $string_names;
    }

    if( $value == 'meaning' ){
        $sss = $string_meanings;
    }
    return $sss ;

}
// var_dump( string_sorter( 'meaning' , kana_mode() ) );
// var_dump( string_sorter( 'word' , kana_mode() ) );

function kana_walker( $char ){

    $alefba = hiragana( kana_mode() );
    for( $n1=  count( $alefba ) -1 ; $n1 >= 0 ; $n1--){
        $Level1 =  $alefba[$n1][1];
        // print_r( count( $Level1 ) ."___" . $alefba[$n1][0] . '</br>');

        for( $n3 = count( $Level1 ) -1  ; $n3 >= 0; $n3--){
            $level3 = $Level1[$n3];

            foreach( $level3 as $key => $kana ){
                // print_r( $Level3[$key] ."___" . $alefba[$n1][0] . '</br>');

                // echo $level3[$key].'<br>';
                if( strpos( $char , $kana ) > -1 ){
                    // echo 'yes!</br> searched for: ' . $char;
                    // echo '</br>found in colunm : '. $level3[0].'</br></br>';
                    return array( $char,  $level3[$key], $level3[0] );
                }
                
            }
            
        }
    }

}

function list_maker(){

    $array_hiragana = array( 
        "あ" => array(),
        "か" => array(),
        "さ" => array(),
        "た" => array(),
        "な" => array(),
        "は" => array(),
        "ま" => array(),
        "や" => array(),
        "ら" => array(),
        "わ" => array(),
        "ん" => array(),
        "が" => array(),
        "ざ" => array(),
        "だ" => array(),
        "ば" => array(),
        "ぱ" => array(),
        "きゃ" => array(),
        "しゃ" => array(),
        "ちゃ" => array(),
        "にゃ" => array(),
        "ひゃ" => array(),
        "みゃ" => array(),
        "りゃ" => array(),
        "ぎゃ" => array(),
        "じゃ" => array(),
        "びゃ" => array(),
        "ぴゃ" => array(),
        "っ" => array(),
    );

    $array_katakana = array( 
        "ア" => array(),
        "カ" => array(),
        "サ" => array(),
        "タ" => array(),
        "ナ" => array(),
        "ハ" => array(),
        "マ" => array(),
        "ヤ" => array(),
        "ラ" => array(),
        "ワ" => array(),
        "ン" => array(),
        "ガ" => array(),
        "ザ" => array(),
        "ダ" => array(),
        "バ" => array(),
        "パ" => array(),
        "キャ" => array(),
        "シャ" => array(),
        "チャ" => array(),
        "ニャ" => array(),
        "ヒャ" => array(),
        "ミャ" => array(),
        "リャ" => array(),
        "ギャ" => array(),
        "ジャ" => array(),
        "ビャ" => array(),
        "ピャ" => array(),
        "ッ" => array(),
    );

    if( kana_mode() == 'hiragana' ){
        $array_pushed = $array_hiragana;
    }else{
        $array_pushed = $array_katakana;
    }
               
    $stringgg = string_sorter( 'word' ,    kana_mode() );
    $meaningg = string_sorter( 'meaning' , kana_mode() );

    foreach( $stringgg as $key => $word ){
        $aaa0 = kana_walker($word );
        $aaa1 = $aaa0[0];
        $aaa2 = $aaa0[1];
        $aaa3 = $aaa0[2];

        // echo 'finded : '.$aaa1.'<br>';
        // echo 'last Char : '.$aaa2.'<br>';
        // echo 'col : '.$aaa3.'<br><br>';
        if( strlen($aaa1) != 0 ){
            array_push( $array_pushed[$aaa3] , array($aaa1,  $meaningg[$key])) ;
        }
        
    }
    return $array_pushed;
}
// var_dump(list_maker());
