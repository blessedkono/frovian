<?php


if (!function_exists('get_uri')) {
    /**
     * Determine the requested url path name
     *
     * @return string
     */
    function get_uri() {
        return urldecode(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );
    }
}

if (!function_exists('test_uri')) {
    function test_uri() {
        $uri = get_uri();
        //return (substr($uri, 0, 7) === '/public' Or strtolower(substr($_SERVER['SERVER_SOFTWARE'], 0, 5)) == 'nginx');
        return (strpos($uri, 'public') Or strtolower(substr($_SERVER['SERVER_SOFTWARE'], 0, 5)) == 'nginx');
    }
}

if (!function_exists('asset_url')) {

    /**
     * Return the assets folder url of this application
     *
     * @return string
     */
    function asset_url() {
        if (test_uri()) {
            return url("/") . '/assets';
        } else {
            return url("/") . '/public/assets';
        }
    }

}

if (!function_exists('public_url')) {

    /**
     * Return the public url of the application
     *
     * @return type string
     */
    function public_url() {
        return url("/");
    }

}

if (! function_exists('includeRouteFiles')) {
    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    function includeRouteFiles($folder)
    {
        try {
            $rdi = new recursiveDirectoryIterator($folder);
            $it = new recursiveIteratorIterator($rdi);

            while ($it->valid()) {
                if (! $it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
                    require $it->key();
                }

                $it->next();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}


if (!function_exists('getFallbackLocale')) {

    /**
     * Get the fallback locale
     *
     * @return \Illuminate\Foundation\Application|mixed
     */
    function getFallbackLocale() {
        return config('app.fallback_locale');
    }

}

if (!function_exists('getLanguageBlock')) {

    /**
     * Get the language block with a fallback
     *
     * @param $view
     * @param array $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function getLanguageBlock($view, $data = []) {
        $components = explode("lang", $view);
        $current = $components[0] . "lang." . app()->getLocale() . "." . $components[1];
        $fallback = $components[0] . "lang." . getFallbackLocale() . "." . $components[1];

        if (view()->exists($current)) {
            return view($current, $data);
        } else {
            return view($fallback, $data);
        }
    }

}


if (! function_exists('access')) {
    /**
     * Access (lol) the Access:: facade as a simple function.
     */
    function access()
    {
        return app('access');
    }
}

if (! function_exists('sysdef')) {
    /**
     * Access (lol) the Access:: facade as a simple function.
     */
    function sysdef()
    {
        return app('sysdef');
    }
}

if (! function_exists('code_value')) {
    /**
     * Access (lol) the Access:: facade as a simple function.
     */
    function code_value()
    {
        return app('code_value');
    }
}


if (! function_exists('sec_env')) {
    function sec_env($name, $fallback = '') {
        $env = require __DIR__. './../../config/env.php';
        $crypt  = new \Illuminate\Encryption\Encrypter($env["key"]);
        if (isset($_SERVER[$name])) {
            $password = $crypt->decrypt($_SERVER[$name]);
        } else {
            $password = $fallback;
        }
        return $password;
    }
}


/*
 * truncate to n characters of string
 */
if(! function_exists('truncateString')) {
    function truncateString($string, $stringLimit = 300){
        return str_limit($string, $stringLimit, $end = "...");
    }
}

/*
 * Generate random string with n number of characters, 3 is default, for reference [code_values]
 */
if(! function_exists('randomString')) {
    function randomString($chars = 3) {
        return strtoupper(str_random($chars));
    }
}


/* Number format with 2 decimal places with thousands separator 10,000.00*/

if (! function_exists('number_2_format')) {
    function number_2_format($value)
    {
        return  number_format( $value , 2, '.' , ',' );
    }
}


/* Number format with no decimal places with thousands separator 10,000 */

if (! function_exists('number_0_format')) {
    function number_0_format($value)
    {
        return  number_format( $value , 0, '.' , ',' );
    }
}

/*short date format D-M-Y*/
if (! function_exists('short_date_format')) {
    function short_date_format($date)
    {
        return \Carbon\Carbon::parse($date)->format('d-M-Y');
    }
}



/*Standard format date format Y-m-j for storing in the database*/
if (! function_exists('standard_date_format')) {
    function standard_date_format($date)
    {
        return \Carbon\Carbon::parse($date)->format('Y-n-j');
    }
}

/*comparable date format D-M-Y*/
if (! function_exists('comparable_date_format')) {
    function comparable_date_format($date)
    {
        $standard_format = standard_date_format($date);
        return strtotime($standard_format);
    }
}



/*Today's date*/
if (! function_exists('getTodayDate')) {

    function getTodayDate()
    {
        return \Carbon\Carbon::now()->format('Y-n-j');

    }
}

/*System Launch date*/
if (! function_exists('getLaunchDate')) {
    function getLaunchDate()
    {
        $launch_date = '2018-11-01';
        return \Carbon\Carbon::parse($launch_date)->format('Y-n-j');
    }
}


/*convert int to date format long*/
if (! function_exists('convert_int_to_datetime')) {
    function convert_int_to_datetime($timestamp)
    {
        return idate('j', $timestamp) . '-' . idate('m', $timestamp) . '-' . idate('Y', $timestamp) . ' ' . idate('H', $timestamp) . ':' . idate('i', $timestamp) . ':' . idate('s', $timestamp);
    }
}


/*add - after 3 characters, for TIN*/
if (! function_exists('chunk_hyphen')) {
    function chunk_hyphen($string){
        return implode("-", str_split($string, 3));
    }
}

/*capture the first word after dot (.)*/
if (! function_exists('capture_first')) {
    function capture_first($string){
        $arr = explode(".", $string, 2);
        return $first = $arr[0];
    }
}


if (! function_exists('phone_255')) {
    function phone_255($phone)
    {
        return \Propaganistas\LaravelPhone\PhoneNumber::make($phone, 'TZ')->formatE164();
    }
}

if (! function_exists('phone_make')) {
    function phone_make($phone, $country_code)
    {
        return \Propaganistas\LaravelPhone\PhoneNumber::make($phone, $country_code)->formatE164();
    }
}


function renderVariable($text) {
    return preg_replace_callback('/@\(\"([^"]+)\"\)/', function($matches) {
        return $matches[1];
    }, $text);
}

function renderDescription($text) {
    //Evaluate all trans functions as PHP
    //We don't want to use eval() for security reasons so we're explicitly converting trans cases
    return preg_replace_callback('/trans\(\"([^"]+)\"\)/', function($matches) {
        return trans($matches[1]);
    }, $text);
}

/**
 * Exception $e
 */
if (! function_exists('log_error')) {
    function log_error(Exception $e)
    {
        \Illuminate\Support\Facades\Log::error('[' . $e->getCode() . '] ' . $e->getMessage() . ' on line ' . @$e->getTrace()[0]['line'] . ' of file ' . @$e->getTrace()[0]['file']);
    }
}



if (! function_exists('unix_to_excel_date')) {
    function unix_to_excel_date($unix_date)
    {
        $excel_date = 25569 + ($unix_date / 86400);
        return $excel_date;
    }
}




if (! function_exists('remove_thousands_separator')) {
    function remove_thousands_separator($value)
    {
        $value = str_replace(",", "",   $value);
        return $value;

    }
}

if (! function_exists("single_space")) {
    function single_space($input) {
        $input = preg_replace('!\s+!', ' ', trim($input));
        return $input;
    }
}




if (! function_exists("remove_extra_white_spaces")) {
    function remove_extra_white_spaces($value) {
        $value =  preg_replace('/\s+/', ' ', $value );
        return $value;
    }
}

if (! function_exists('checksum')) {
    /**
     * @author Mathayo Mihayo
     * upgraded by Erick Chrysostom (To restrict the checksum repeated sequence)
     * Add a checksum and padding for a given ID
     * @param $id
     * @param $pad_length
     * @return string
     */
    function checksum($id, $pad_length)
    {
        $number = $id;
        $list = "542316798";
        $sum = 0;
        do {
            $sum += $number % 10;
        }
        while ($number = (int) $number / 10);
        $check = $sum % 10;
        $check = $check + 3;
        $check = $check % 10;
        if($check == 0)
        {
            //$check = 1;
        }
        if ($id % 2 == 0) {
            /* It is even */
            if($check == 0)
            {
                $check = 7;
            }
            $check = substr($list, $check - 1, 1);
        } else {
            /* It is odd */
            if($check == 0)
            {
                $check = -2;
            }
            $check = substr($list, $check * -1, 1);
        }
        $padding = str_pad($id, $pad_length, '00', STR_PAD_LEFT);
        return $check.$padding;
    }
}




if (! function_exists('months_diff')) {
    /**
     * Access (lol) the Access:: facade as a simple function.
     */
    function months_diff($from_date, $end_date)
    {
        /*end parts*/
        $end_day = \Carbon\Carbon::parse($end_date)->format('d');
        $end_month = \Carbon\Carbon::parse($end_date)->format('m');
        $end_year = \Carbon\Carbon::parse($end_date)->format('Y');
        /*from parts*/
        $from_day = \Carbon\Carbon::parse($from_date)->format('d');
        $from_month = \Carbon\Carbon::parse($from_date)->format('m');
        $from_year = \Carbon\Carbon::parse($from_date)->format('Y');

        $diff_months = 0;
        if ($end_year == $from_year ){
            $diff_months = $end_month - $from_month;
        };

        if ($end_year <> $from_year ){
            $diff_year = $end_year - $from_year;
            $get_months = $diff_year * 12;
            $end_month  = $end_month + $get_months;
            $diff_months = $end_month - $from_month;
        };
        return $diff_months;

    }

}



if (!function_exists('explode_parameter')) {
    /**
     * Return an array of the inputs string parameter
     * separated by commas e.g 1,2,3,4
     *
     * @param $parameter
     * @return array
     */
    function explode_parameter($parameter) {
        if (! isset($parameter)) {
            $output = [];
        } else {
            $output = explode(",", $parameter);
        }
        return $output;
    }

}


if (!function_exists('implode_collection_name')) {
    /**
     * Return an strings separated by commas
     * separated by commas e.g Dsm, Morogoro, Arusha
     *
     * @param $parameter
     * @return array
     */
    function implode_collection_name($collection) {
        $output = [];
        foreach ($collection as $parameter) {
            array_push($output, $parameter->name);
        }
        return implode(", ", $output);
    }

}


/*Base doc directory used for attaching document*/
if (!function_exists('base_doc_dir')) {

    function base_doc_dir() {
        return public_path() . '/storage';
    }

}

/*Base doc path for review attached file*/
if (!function_exists('base_doc_path')) {

    function base_doc_path() {
        /**
         *
         */
        if (test_uri()) {
            return asset('/storage');
        } else {
            return asset('/public/storage');
        }
    }

}

//task attachment dir
if (!function_exists('task_dir')) {
    function task_dir() {
        return public_path() . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'task';
    }
}


//   url for task documents files
if (!function_exists('task_url')) {
    function task_url() {
        return 'storage' . DIRECTORY_SEPARATOR . 'task';
    }
}

if (!function_exists('document_resource_dir')) {
    function document_resource_dir() {
        return public_path() . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'document_resource';
    }
}



