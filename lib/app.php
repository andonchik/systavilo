<?php

class BeforeRenderCallback {

    private $callbacks;
    private $cwd;

    public function __construct($callbacks, $cwd=null) {
        $this->callbacks = $callbacks;
        $this->cwd = $cwd;
    }

    public function addCallback($callback) {
        $this->callbacks[] = $callback;
    }

    public function __invoke($content, $phase) {

        if ($this->cwd) {
            chdir($this->cwd);
        }

        $content = trim($content);
        foreach ($this->callbacks as $callback) {
            $content = $callback($content, $this->cwd);
        }
        return $content;
    }

    public function prepare() {
        foreach ($this->callbacks as $callback) {
            $callback->prepare();
        }
    }
}


class JsInjector {

    public $redirectUrl;
    private $code;

    public $utm = [
        "utm_source" => '',
        "utm_medium" => '',
        "utm_campaign" => '',
        "utm_content" => '',
        "utm_term" => '',

        "sub1" => '',
        "sub2" => '',
        "sub3" => '',
        "sub4" => '',
        "sub5" => '',

        "fb_pixel" => '',
    ];

    public function __construct($params) {
        foreach($this->utm as $key => $val) {
            $this->utm[$key] = clear_value(array_get($params, $key));
        }
    }

    public function __invoke($content, $cwd) {
        $content = preg_replace('#<(?!header)head([^>])*>#',  '<head$1>' . "\n" .$this->code, $content, 1);
        return $content;
    }

    public function prepare() {
        $this->code = $this->render();
    }

    private function render() {
        ob_start();
        incl('js.app.php', array(
            'redirectUrl' => $this->redirectUrl,
            'utm' => $this->utm,
        ));
        global $dir;
        incl($dir.'/trackers.php');
        $code = ob_get_clean();
        return $code;
    }
}

function incl($filename, $context=array()) {
    extract($context);
    require($filename);
}

function countrySelect() {

    global $offers, $offer;

    usort($offers, function($a, $b) {
        return strcmp($a['country']['name'], $b['country']['name']);
    });

    ob_start();
    ?>
    <input type="hidden" name="country" value="<?php echo $offer['country']['code']; ?>">
    <select name="offer" class="form-control country_chang">
        <?php foreach($offers as $offerData): ?>
            <option
                    data-country-code="<?php echo $offerData['country']['code'] ?>"
                <?php if ($offerData['id'] == $offer['id']): ?>
                    selected="selected"
                <?php endif ?>
                    value="<?php echo $offerData['id'] ?>"
            >
                <?php echo $offerData['country']['name'] ?>
            </option>
        <?php endforeach ?>
    </select>
    <?php
    return ob_get_clean();
}

function countryDefault() {

    global $offer;
    ob_start();
    ?>

    <select name="offer" class="form-control country_chang" style="display: none;">
        <option
                data-country-code="<?php echo $offer['country']['code']; ?>"
                selected="selected"
                value="<?php echo $offer['id'] ?>"
        >
            <?php echo $offer['country']['name'] ?>
        </option>
    </select>

    <?php
    return ob_get_clean();
}


function prepaid_info_html() {
}

function footer($id=2) {
    ob_start();
    incl("pieces/footer.{$id}.php");
    return ob_get_clean();
}

function normalizePrice($price) {
    if (null !== $price) {
        if (intval($price) == $price) {
            $price = intval($price);
        }
    }
    return $price;
}

function clear_value($input_text){
    $input_text = strip_tags($input_text);
    $input_text = htmlspecialchars($input_text);
    return $input_text;
}

function array_get($array, $key, $default=null) {
    if (is_array($array) && array_key_exists($key, $array)) {
        return $array[$key];
    } else {
        return $default;
    }
}

function get_country($ip_address, $offers, $offer) {
    // Подключаем SxGeo.php класс
    include(__DIR__.'/geo/SxGeo.php');
    $SxGeo = new SxGeo(__DIR__.'/geo/SxGeo.dat');

    $countryDetect = $SxGeo->get($ip_address);

    return $countryDetect;
}

function get_offer_by_ip($ip_address, $offers, $offer){

    $country_code = get_country($ip_address, $offers, $offer);
    $offerDetected = $offer;
    foreach ($offers as $offerData){
        if ($offerData['country']['code'] == $country_code) {
            $offerDetected = $offerData;
        }
    }
    return $offerDetected;
}