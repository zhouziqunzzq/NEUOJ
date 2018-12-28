<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 18-12-19
 * Time: 下午10:11
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Languages supported by NEUOJ
    |--------------------------------------------------------------------------
    |
    | This value is a map that defines programming languages
    | that are supported by NEUOJ and its corresponding
    | filename suffix.
    |
    */
    'lang_suffix' => [
        "C" => "c",
        "Java" => "java",
        "C++11" => "cc",
        "C++" => "cpp",
        "Python2" => "py2",
        "Python3" => "py3",
    ],

    /*
    |--------------------------------------------------------------------------
    | Languages supported by SIM check Module
    |--------------------------------------------------------------------------
    |
    | This value is a map that defines programming languages
    | that are supported by SIM check Module and its corresponding
    | sim check method.
    |
    */
    'sim_lang_map' => [
        'C' => 'sim_c',
        'C++' => 'sim_c',
        'C++11' => 'sim_c',
        'Java' => 'sim_java',
        'Python2' => 'sim_text',    // this sim check doesn't have python check
        'Python3' => 'sim_text',
    ],

];
