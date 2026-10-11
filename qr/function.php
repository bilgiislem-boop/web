<?php

## GetIP
## ucfirst_tr        
## ucwords_tr         
## case_upper_tr    
## textUcwords // tr-en
## textUpper   // tr-en   
## replace_tr        
## seflink          
## tinymce            
## bosluk_sil        
## kisaltmalar_tr    
## kisaltmalar_ekle		
## tirnak_replace	   
## objectToArray
## flash
## captcha
## formFlash
## input
## isAuth
## userInfo
## profileImage
## isAdmin 
## isAdmin2 
## isUser
## logout
## login
## isLogin
## isLogin2
## register
## imageToProfile
## validation
## template
## view
## cache_put
## cache_time
## sectionCache
## section
## pagination
## paginationn
## ozet
## sql
## insert
## update
## delete
## params
## swt
## deleteAll
## tarih              		 
## arrayToObject
## multiple_upload	
## one_upload
## imgCrop
## imgCropMultiple
## imgResizeMultiple
## imgResizeOne
## uploadFile     
## cumlekisalt		
## spdurum	
## reviewStar			   
## EmailKontrol
## title_span
## isTcKimlik
## navStyle2


define('EXT', '.php');
define('DOMAIN', 'http' . (empty($_SERVER['HTTPS']) ? '' : 's') . '://' . $_SERVER['HTTP_HOST']);
define('URL', DOMAIN . $_SERVER['REQUEST_URI']);
define('BACK', empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER']);
define('CACHE', './cache/' . md5($_SERVER['REQUEST_URI']) . 'cache' . EXT);
define('ROUTE', parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

define('METHOD', $_SERVER['REQUEST_METHOD']); 


if(!@$sayfano) $sayfano ="";

//sayfa navigasyon
$pagination		      =	@$syf[$sayfano][2];
$paginationAdmin		=	@$syf[$sayfano][2];

if($pagination=="") {
	$pagination       =	"Anasayfa";
	$paginationAdmin	=	"";
  
}

$seotitle	=	"";
if(@$syf[$sayfano][2]!=""){
$seotitle	=	" - ".$syf[$sayfano][2];
} // if($syf[$sayfano][2]=="")

//tarih
$tarih	=	time();
$tarih2 = getdate();



$iller = array (1 => "Adana", 2 => "Adıyaman", 3 => "Afyonkarahisar", 4 => "Ağrı", 5 => "Amasya", 6 => "Ankara", 7 => "Antalya", 8 => "Artvin", 9 => "Aydın", 10 => "Balıkesir", 11 => "Bilecik", 12 => "Bingöl", 13 => "Bitlis", 14 => "Bolu", 15 => "Burdur", 16 => "Bursa", 17 => "Çanakkale", 18 => "Çankırı", 19 => "Çorum", 20 => "Denizli", 21 => "Diyarbakır", 22 => "Edirne", 23 => "Elazığ", 24 => "Erzincan", 25 => "Erzurum", 26 => "Eskişehir", 27 => "Gaziantep", 28 => "Giresun", 29 => "Gümüşhane", 30 => "Hakkari", 31 => "Hatay", 32 => "Isparta", 33 => "Mersin", 34 => "İstanbul", 35 => "İzmir", 36 => "Kars", 37 => "Kastamonu", 38 => "Kayseri", 39 => "Kırklareli", 40 => "Kırşehir", 41 => "Kocaeli", 42 => "Konya", 43 => "Kütahya", 44 => "Malatya", 45 => "Manisa", 46 => "Kahramanmaraş", 47 => "Mardin", 48 => "Muğla", 49 => "Muş", 50 => "Nevşehir", 51 => "Niğde", 52 => "Ordu", 53 => "Rize", 54 => "Sakarya", 55 => "Samsun", 56 => "Siirt", 57 => "Sinop", 58 => "Sivas", 59 => "Tekirdağ", 60 => "Tokat", 61 => "Trabzon", 62 => "Tunceli", 63 => "Şanlıurfa", 64 => "Uşak", 65 => "Van", 66 => "Yozgat", 67 => "Zonguldak", 68 => "Aksaray", 69 => "Bayburt", 70 => "Karaman", 71 => "Kırıkkale", 72 => "Batman", 73 => "Şırnak", 74 => "Bartın", 75 => "Ardahan", 76 => "Iğdır", 77 => "Yalova", 78 => "Karabük", 79 => "Kilis", 80 => "Osmaniye", 81 => "Düzce"); 

$aylar = array(1=>"Ocak",2=>"Şubat",3=>"Mart",4=>"Nisan",5=>"Mayıs",6=>"Haziran",7=>"Temmuz",8=>"Ağustos",9=>"Eylül",10=>"Ekim",11=>"Kasım",12=>"Aralık");



$icons_plus = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>';
$icons_edit = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>';
$icons_delete = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>';

$wIcon = array(
  '01d' => 'gunes.svg',
  '02d' => 'gunes_bulut.svg',
  '03d' => 'bulut.svg',
  '04d' => 'bulut.svg',
  '09d' => 'yagmur.svg',
  '10d' => 'yagmur.svg',
  '11d' => 'simsek.svg',
  '13d' => 'kar.svg',
  '50d' => 'sis.svg'
);

function date_tr($format, $datetime){
  $z = date("$format", $datetime);
  $gun_dizi = array(
      'Monday'    => 'Pazartesi',
      'Tuesday'   => 'Salı',
      'Wednesday' => 'Çarşamba',
      'Thursday'  => 'Perşembe',
      'Friday'    => 'Cuma',
      'Saturday'  => 'Cumartesi',
      'Sunday'    => 'Pazar',
      'January'   => 'Ocak',
      'February'  => 'Şubat',
      'March'     => 'Mart',
      'April'     => 'Nisan',
      'May'       => 'Mayıs',
      'June'      => 'Haziran',
      'July'      => 'Temmuz',
      'August'    => 'Ağustos',
      'September' => 'Eylül',
      'October'   => 'Ekim',
      'November'  => 'Kasım',
      'December'  => 'Aralık',
      'Mon'       => 'Pts',
      'Tue'       => 'Sal',
      'Wed'       => 'Çar',
      'Thu'       => 'Per',
      'Fri'       => 'Cum',
      'Sat'       => 'Cts',
      'Sun'       => 'Paz',
      'Jan'       => 'Oca',
      'Feb'       => 'Şub',
      'Mar'       => 'Mar',
      'Apr'       => 'Nis',
      'Jun'       => 'Haz',
      'Jul'       => 'Tem',
      'Aug'       => 'Ağu',
      'Sep'       => 'Eyl',
      'Oct'       => 'Eki',
      'Nov'       => 'Kas',
      'Dec'       => 'Ara',
  );
  foreach($gun_dizi as $en => $tr){
      $z = str_replace($en, $tr, $z);
  }
  if(strpos($z, 'Mayıs') !== false && strpos($format, 'F') === false) $z = str_replace('Mayıs', 'May', $z);
  return $z;
}


function GetIP()
{
	if(getenv("HTTP_CLIENT_IP")) {
 		$ip = getenv("HTTP_CLIENT_IP");
 	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 		$ip = getenv("HTTP_X_FORWARDED_FOR");
 		if (strstr($ip, ',')) {
 			$tmp = explode (',', $ip);
 			$ip = trim($tmp[0]);
 		}
 	} else {
 	$ip = getenv("REMOTE_ADDR");
 	}
	return $ip;
}

function flash()
{
  if(!empty($_SESSION['mesaj'])){
    $mess = $_SESSION['mesaj'];
    unset($_SESSION['mesaj']);
    return $mess;
  }
  return null;
}

function captcha(){

  $text = strtoupper(substr(md5(microtime()),rand(0,26),5));
  $_SESSION['captcha'] = strtolower($text);
  $im = imagecreate(80, 30);
  $bg = imagecolorallocate($im, 255, 255, 255);
  for($i = 0; $i < strlen($text); $i++){
    $cord = rand(0,10);
    $color = imagecolorallocate($im, rand(0,100), rand(0,160), rand(0,160));
     imagestring($im, 5, 10+($i*10), $cord, $text[$i], $color);
  }
  header('Content-type: image/png');
  imagepng($im);
  imagedestroy($im);
}

function formFlash($key, $mesaj = null)
{
  if(!empty($_SESSION['form_hata'][$key])){
      if($mesaj){
         return $mesaj;
      }
      return $_SESSION['form_hata'][$key];
  }
  return null;
}

function input($key)
{
  if (METHOD == 'PUT' || METHOD == 'DELETE') {
    parse_str(file_get_contents('php://input'), $params);
  } else if (METHOD == 'GET') {
  $params = $_GET;
  } else if (METHOD == 'POST') {
    $params = $_POST;
  }
  return isset($params[$key]) ? $params[$key] : null;
}

############# -> ADMINLOGIN / START -> #############

function isAdmin()
{
  global $yon;

  if($_SESSION[$yon."_rolID"]!=1) {

    echo '
    <div class="container" style="margin:auto;">

      <div class="row">
          <div class="col-lg-12">
              <div class="jumbotron">

                <h2 class="display-4 mb-5  mt-4">Üzgünüm Yetkiniz Yok!</h2>
                <p class="lead mt-3 mb-4">Bir hata olduğunu düşünüyorsanız sistem yöneticinize başvurun.</p>

                <p class="lead">
                  <a class="btn btn-warning" href="index.php" role="button">Anasayfa</a>
                </p>

              </div>
          </div>
      </div>
    </div>

    ';
    exit;

  } // if(!array_key_exists($rolSef,$rol) or $rol[$rolSef][$value]!=1) {

}

function isAdmin2()
{
  global $yon;

  if($_SESSION[$yon."_rolID"]==1)
  return true; else return false;

}

function userInfo()
{
  global $yon;

    if(isset($_SESSION[$yon.'_hash'])){
       return array(
       "id" => $_SESSION[$yon.'_id'], 
       "ad" => $_SESSION[$yon.'_ad'], 
       "soyad" => $_SESSION[$yon.'_soyad'], 
       "eposta" => $_SESSION[$yon.'_eposta'], 
       "rol" => $_SESSION[$yon.'_rol'], 
       "rolID" => $_SESSION[$yon.'_rolID'], 
       "avatar" => profileImage($_SESSION[$yon.'_id']), 
       "user" => $_SESSION[$yon.'_user']);
    }
    return false;
}

function profileImage($email, $path = 'img/admin/avatar/')
{
    return is_file($path.md5($email).'.png') ? ltrim($path,'.').md5($email).'.png' : $path.'user-90.jpg';
}


function logout()
{
  global $yon;

  if (!empty($_SESSION[$yon.'_hash'])) {

    $result = sql('SELECT * FROM yoneticiler WHERE token = ? and sonIP = ? LIMIT 1', array(
      $_SESSION[$yon.'_hash'],
      GetIP()
    ));
    
    if (count($result) == 1) {
      update('yoneticiler', array('online' => 0), array('id' => $result[0]['id']));
    }

  }
  session_destroy();
  header('Location: sayfalar/giris/girisyap.php');
}

function login(array $form)
{
  global $yon;
  global $pas;
  global $tarih;

  $result = sql('SELECT * FROM yoneticiler WHERE user = ? AND sifre = ?', array(
    $form['user'],
    $form['sifre']
  ));  

  if (count($result) == 1) {

    $hash =  md5((md5($form['sifre'].$form['user'])).$pas);
    
    update('yoneticiler', array('token' => $hash, 'sonIP' => GetIP(), 'tarih' => $tarih), array('id' => $result[0]['id']));

    $rol = sql("SELECT * FROM roller WHERE id=?",array($result[0]['rol']))[0];

    $_SESSION[$yon.'_id']     = $result[0]['id'];
    $_SESSION[$yon.'_ad']     = $result[0]['ad'];
    $_SESSION[$yon.'_user']   = $result[0]['user'];
    $_SESSION[$yon.'_soyad']  = $result[0]['soyad'];
    $_SESSION[$yon.'_eposta'] = $result[0]['eposta'];
    $_SESSION[$yon.'_rolID']  = $result[0]['rol'];
    $_SESSION[$yon.'_rol']    = $rol["rol"];
    $_SESSION[$yon.'_hash']   = $hash;
    
    return true;
  }

  $_SESSION['err'] = 'kullanıcı adı yada şifre hatalı.';
  return false;
} // function login(array $form)

function isLogin()
{
  global $yon;

  if (!empty($_SESSION[$yon.'_hash'])) {

    $result = sql('SELECT * FROM yoneticiler WHERE token = ? and sonIP = ? LIMIT 1', array($_SESSION[$yon.'_hash'], GetIP()));
    
    if (count($result)==1) {
      return true;
    }else{
      header('Location: sayfalar/giris/girisyap.php');
      exit;
    }
  }else{
    header('Location: sayfalar/giris/girisyap.php');
    exit;
  }
}

function isLogin2()
{
  global $yon;

  if (!empty($_SESSION[$yon.'_hash'])) {

    $result = sql('SELECT * FROM yoneticiler WHERE token = ? and sonIP = ? LIMIT 1', array($_SESSION[$yon.'_hash'], GetIP()));
    
    if (count($result)==1) {
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
} // function isLogin2()

function register($form)
{
  if (!empty($form['user']) && 
    !empty($form['sifre'])  && 
    !empty($form['ad'])  && 
    !empty($form['soyad'])  && 
    !empty($form['rol'])  && 
    !empty($form['gsm'])  && 
    !empty($form['rol'])  && 
    !empty($form['eposta'])
    ) {

    $result = sql('SELECT * FROM yoneticiler WHERE eposta = ? LIMIT 1', array(
      $form['eposta']
    ));
    if (count($result) == 1) {
      $_SESSION['err'] = $form['email'] . " zaten kayıtlı";
      return false;
    }
    $result = sql('SELECT * FROM yoneticiler WHERE gsm = ? LIMIT 1', array(
      $form['gsm']
    ));
    if (count($result) == 1) {
      $_SESSION['err'] = $form['gsm'] . " zaten kayıtlı";
      return false;
    }
    if ($id = insert('yoneticiler', $form)) {
      return $id;
    }
  }
  return false;
}

function rol ($rolSef,$value) {

  // $value 1:Görüntüleme, 2:Ekleme, 3:Düzenleme, 4:Silme

  global $yon;

  $rol = sql('SELECT * FROM roller WHERE id=?',array($_SESSION[$yon."_rolID"]))[0];

  $rol[$rolSef] = json_decode($rol[$rolSef],1);

  if($value==4) {

    if(!is_array($rol[$rolSef]) or in_array(0,$rol[$rolSef])){

      echo '
        <div class="container" style="margin:auto;">

          <div class="row">
              <div class="col-lg-12">
                  <div class="jumbotron">

                    <h2 class="display-4 mb-5  mt-4">Üzgünüm Yetkiniz Yok!</h2>
                    <p class="lead mt-3 mb-4">Bir hata olduğunu düşünüyorsanız sistem yöneticinize başvurun.</p>

                    <p class="lead">
                      <a class="btn btn-warning" href="index.php" role="button">Anasayfa</a>
                    </p>

                  </div>
              </div>
          </div>
        </div>
        ';
      exit;

    } // if(!is_array($rol[$rolSef]) or in_array(0,$rol[$rolSef])){

  }else if(!array_key_exists($rolSef,$rol) or $rol[$rolSef][$value]!=1) {

    echo '
    <div class="container" style="margin:auto;">

      <div class="row">
          <div class="col-lg-12">
              <div class="jumbotron">

                <h2 class="display-4 mb-5  mt-4">Üzgünüm Yetkiniz Yok!</h2>
                <p class="lead mt-3 mb-4">Bir hata olduğunu düşünüyorsanız sistem yöneticinize başvurun.</p>

                <p class="lead">
                  <a class="btn btn-warning" href="index.php" role="button">Anasayfa</a>
                </p>

              </div>
          </div>
      </div>
    </div>
    ';
    exit;

  } // if($value==4)

} // function rol ($rolSef,$value)

function rolCheck ($rolSef,$value) {
  
  // $value 1:Görüntüleme, 2:Ekleme, 3:Düzenleme, 4:Silme

  global $yon;

  $rol          = sql('SELECT * FROM roller WHERE id=?',array($_SESSION[$yon."_rolID"]))[0];
  $rol[$rolSef] = json_decode($rol[$rolSef],1);

  if($value==4) 

    if(!is_array($rol[$rolSef]) or in_array(0,$rol[$rolSef]))
    return false;
    else return true;

  elseif(array_key_exists($rolSef,$rol) and $rol[$rolSef][$value]==1)
  return true;

  else return false;

} // function rolCheck ($rolSef,$value) {


############# <- ADMINLOGIN / END <- #############

############# -> USERLOGIN / START -> #############

function userLogin(array $form)
{
  global $usr;
  global $pas;
  global $tarih;

  $result = sql('SELECT * FROM user WHERE mail = ? AND sifre = ?', array(
    $form['mail'],
    $form['sifre']
  ));  

  if (count($result) == 1) {

    $hash =  md5((md5($form['sifre'].$form['mail'])).$pas);
    
    update('user', array('token' => $hash, 'sonIP' => GetIP(), 'online' => 1, 'tarih' => $tarih), array('id' => $result[0]['id']));

    $_SESSION[$usr.'_id']     = $result[0]['id'];
    $_SESSION[$usr.'_ad']     = $result[0]['ad'];
    $_SESSION[$usr.'_soyad']  = $result[0]['soyad'];
    $_SESSION[$usr.'_mail']   = $result[0]['mail'];
    $_SESSION[$usr.'_hash']   = $hash;
    
    return true;
  }
  
  $_SESSION['err'] = 'kullanıcı adı yada şifre hatalı.';
  return false;
}


function userLogout()
{
  global $usr;

  if (!empty($_SESSION[$usr.'_hash'])) {

    $result = sql('SELECT * FROM user WHERE token = ? and sonIP = ? LIMIT 1', array(
      $_SESSION[$usr.'_hash'],
      GetIP()
    ));
    
    if (count($result) == 1) {
      update('user', array('online' => 0), array('id' => $result[0]['id']));
    }

  }
  session_destroy();
  header('Location: anasayfa');
}


function isUser()
{
  global $usr;

  if (!empty($_SESSION[$usr.'_hash'])) {

    $result = sql('SELECT * FROM user WHERE token = ? and sonIP = ? LIMIT 1', array($_SESSION[$usr.'_hash'], GetIP()));
    
    if (count($result)==1) {
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
}


function userInf()
{
  global $usr;

    if(isset($_SESSION[$usr.'_hash'])){
       return array(
         "id" => $_SESSION[$usr.'_id'], 
         "ad" => $_SESSION[$usr.'_ad'], 
         "soyad" => $_SESSION[$usr.'_soyad'], 
         "mail" => $_SESSION[$usr.'_mail']);
    }
    return false;
}


############# <- USERLOGIN / END <- #############



function imageToProfile($srcFile, $fileName = null , $path = './profilimg/', $fileSize = 5 , $maxSize = 100)
{
    $fileSize = $fileSize * pow(1024, 2); /* Bayt 0, KB 1, MB 2, GB 3, TB 4 */  

    // Grafik dosyasının boyutu uygun mu? kontrol edelim
    if ($srcFile['size'] > $fileSize || $srcFile['size'] == 0) {
        return false;
    }
    
    $srcFile = $srcFile['tmp_name'];
    
    list($width_orig, $height_orig, $type) = getimagesize($srcFile);
    
    if(!$type){
       return false;
    }
    
    // gerçekten grafik dosyası mı? kontrol edelim
    if(!in_array($type,  array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
       return false;
    } 
    
    // Oranı hesaplayalım
    $ratio_orig = $width_orig / $height_orig;
    $width      = $maxSize;
    $height     = $maxSize;
    
    // Oran 1 den küçük ise bizim belirlediğimiz $maxSize boyutuna göre yüksekliği yeniden boyutlandıralım 
    if ($ratio_orig < 1) {
        $width = $height * $ratio_orig;
    }
    // değilse bizim belirlediğimiz $maxSize boyutuna göre genişliği yeniden boyutlandıralım
    else {
        $height = $width / $ratio_orig;
    }
    // grafik tipini dönüştürelim
    switch ($type) {
        case IMAGETYPE_GIF:
            $image = imagecreatefromgif($srcFile);
            break;
        case IMAGETYPE_JPEG:
            $image = imagecreatefromjpeg($srcFile);
            break;
        case IMAGETYPE_PNG:
            $image = imagecreatefrompng($srcFile);
            break;
        default:
            return false;
    }
    
    // Boş bir grafk oluşturalım
    $newImage = imagecreatetruecolor($width, $height);
    
    // Yeni grafiği en ve boyuna göre yeniden boyutlandırıp oluşturalım
    imagecopyresampled($newImage, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    
    // Resim dosyasının adını oluşturalım.
    if($fileName){
      $fileName = md5($fileName) . '.png';
    }else {
      $fileName = md5(uniqid(mt_rand(), true)) . '.png';
    }    
     // belirlediğimiz dizine kaydedelim.
    if(is_dir($path)){
        imagepng($newImage, $path . $fileName);
        // Hafızayı temizleyelim                          
        imagedestroy($newImage);
        return $fileName;
    }    
    return false;
}

function validation($mess)
{
  $_SESSION['form_hata'] = array();
  if (empty($_POST) && empty($mess)){
    return false;
  }

  foreach ($mess as $key => $value) {
    if (!isset($_POST[$key])) return false;
    $data = trim($_POST[$key]);
   
    if (!preg_match('/^' . $value . '$/su', $data)) {
          $_SESSION['form_hata'][$key] = "$key alanı istenilen kurala uymuyor";
    }
  }
  return empty($_SESSION['form_hata']);
}

function template($c)
{
  $c = str_replace(array('{{','}}','{!','!}','{[',']}'), array('<?=nl2br(',');?>', '<?=nl2br(htmlspecialchars(','));?>','<?=$lang("','")?>'), $c);
  return preg_replace(array('/@(\w+\s*\(.*\))/', '/@\s*end(\w+)/s', '/@\s*(\w+)/s',), array('<?php $1: ?>', '<?php end$1; ?>', '<?php $1: ?>'), $c);
}


function cache_put($___files, $___file, $data, $time__ = 0)
{
  extract($data, EXTR_SKIP);
  if ($time__) {
    ob_start();
  }
  $_lang = parse_ini_file('lang/' . LANG . '.ini');
  include($___files);
  if ($time__) {
    $c = ob_get_contents();
    ob_end_clean();
    file_put_contents($___file, '<?php if (!defined("EXT")) die();?>' . $c, LOCK_EX);
    echo $c;
  }
}

function cache_time($f, $t = 0)
{
  return file_exists($f) && (filemtime($f) + (strtotime($t) - time())) > time();
}

function cache($time = '+1 day')
{
  if (cache_time(CACHE, $time)) {
    include(CACHE);
    exit;
  }
}

function sectionCache($file, $time = '+1 day')
{
  $f = './cache/' . md5($file) . '_cache' . EXT;
  if (cache_time($f, $time) && filemtime(VIEW . $file . EXT) < filemtime($f)) {
    return include($f);
  }
  return true;
}

function section($file, array $data = array(), $time = 0)
{
  $c = file_get_contents(VIEW . $file . EXT);
  $c = template($c);
  $file2 = './cache/' . md5($file) . EXT;
  $file3 = './cache/' . md5($file) . '_cache' . EXT;
  file_put_contents($file2, $c, LOCK_EX);
  cache_put($file2, $file3, $data, $time);
}

function paginationn($table, $limit =10){
  global $db;
  $sayi = $db->query("SELECT COUNT(*) FROM $table");
  $row   = $sayi->fetch_row();
  $toplam = isset($row[0]) ? $row[0] : 1;
  $sayfalar = ceil($toplam / $limit);
  $sayfa  = min($sayfalar, filter_input(INPUT_GET, 'sayfa', FILTER_VALIDATE_INT, array(
          'options' => array(
                'default'   => 1,
                'min_range' => 1,
          ),
      )));
  $offset = ($sayfa - 1)  * $limit;
  return array($sayfalar, $sayfa, $limit, $offset);
}

function ozet($content, $limit = 20, $dot=""){

    if (str_word_count($content) > $limit) {
      $kelime = str_word_count($content, 2);
      $pos    = array_keys($kelime);
      return substr($content, 0, $pos[$limit]).$dot;      
    }else{
      return $content;      
    }
   return false;
}

function sql($sql, array $form = array())
{
  global $db;
  $stmt = $db->prepare($sql) or die($db->error);
  if (!empty($form)) call_user_func_array(array($stmt,'bind_param'), params($form));
  $stmt->execute() or die($db->error);
  $result = $stmt->get_result();
  return $result->fetch_all(MYSQLI_ASSOC);
}

function insert($tablo, array $form)
{
  global $db;
  $yer   = implode(', ', array_fill(0, count($form), '?'));
  $sutun = implode(', ', array_keys($form));
  $stmt = $db->prepare("INSERT INTO $tablo($sutun) VALUES($yer)") or die($db->error);
  call_user_func_array(array($stmt,'bind_param'), params($form));
  $stmt->execute() or die($db->error);
  return $db->insert_id;
}

function update($tablo, array $column, array $form)
{
  global $db;
  $sutun = implode(' = ?, ', array_keys($column)) . ' = ?';
  $where = implode(' = ?, ', array_keys($form)) . ' = ?';
  $stmt = $db->prepare("UPDATE $tablo SET $sutun  WHERE $where") or die($db->error);
  $form = array_merge($column, $form);
  call_user_func_array(array($stmt,'bind_param'), params($form));
  return $stmt->execute() or die($db->error);
}

function delete($tablo, $where, array $form)
{
  global $db;
  $stmt = $db->prepare("DELETE FROM $tablo WHERE $where") or die($db->error);
  call_user_func_array(array($stmt,'bind_param'), params($form));
  return $stmt->execute() or die($db->error);
}

function params($params, $types = '', $input = array())
{
  
  foreach ($params as $key => $val) {

    $$key = $val;
    $input[] =& $$key;

    if (is_float($val)) {
      $types .= 'd';
    } elseif (is_numeric($val)) {
      $types .= 'i';
    } elseif (is_string($val)) {
      $types .= 's';
    } else {
      $types .= 'b';
    }

  }

  array_unshift($input, $types);
  return $input;
} 

function tarih($tarih,$saat,$saniye,$ayrac){
	
	$tarih_ay		=	date('m', $tarih); // 01...12
	$tarih_yil		=	date('Y', $tarih); // 2017
	$tarih_gun		=	date('d', $tarih); // 01...31
	
	if($saat==1)	$tarih_saat=" ".date('H:i', $tarih); else  $tarih_saat=""; // 17:24
	if($saniye==1)	$tarih_saniye=":".date('s', $tarih); else  $tarih_saniye="";// 00..59
	if($ayrac=="") $ayrac=".";
	
	$tarih_format	=	$tarih_gun.$ayrac.$tarih_ay.$ayrac.$tarih_yil.$tarih_saat.$tarih_saniye;
	
	return $tarih_format;
	
}


function replace_tr($text) {
$text = trim($text);
$search = array('Ç','ç','Ğ','ğ','ı','İ','I','Ö','ö','Ş','ş','Ü','ü',' ',"'",'"','[',']','{','}','(',')','$',';',',','´','^','+','=','?','/','#','$','½','&','£','æ','~','!',':','.','°','<','>');
$replace = array('c','c','g','g','i','i','i','o','o','s','s','u','u','-','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
$new_text = str_replace($search,$replace,$text);
return $new_text;
} // function replace_tr


function bosluk_sil($metin) {
	$metin = preg_replace('/\s+/', '', $metin);
	return $metin;
}

function kucuk_yap($metin){
	
	$metin=	bosluk_sil($metin);
	
	$bul 	= array("I");
	$degis  = array("ı");
	$metin	= str_replace($bul, $degis, $metin);

  $bul 	= array("İ");
	$degis  = array("i");
	$metin	= str_replace($bul, $degis, $metin);

	$metin	= mb_strtolower($metin);
	return $metin;	

}

function tirnak_replace($metin) {
	return str_replace(array("'","‘","’","\"","“","”"),array("&#39;", "&#39;", "&#39;", "&quot;", "&quot;", "&quot;"),$metin);
}

function tirnak_replace2($metin) {
	return str_replace(array("&#39;", "&quot;"),array("'",'"'),$metin);
}

function seflink($baslik)
{
	$baslik = str_replace(array("&quot;","&#39;"), NULL, $baslik); // tırnaklar için replace
	$bul = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'I', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '-', '*','Ãœ','Å','Ä','Ã‡','Ä°','Ã–','Ã¼','ÅŸ','ÄŸ','Ã§','Ä±','Ã¶');
	$yap = array('c', 's', 'g', 'u', 'i', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', ' ', '','u','s','g','c','i','o','u','s','g','c','i','o');
	$perma = strtolower(str_replace($bul, $yap, $baslik));
	$perma = preg_replace("@[^A-Za-z0-9\-_]@i", ' ', $perma);
	$perma = trim(preg_replace('/\s+/',' ', $perma));
	$perma = str_replace(' ', '-', $perma);
	return $perma;
}	

// TinyMce Editör türkçe karakterleri Düzeltme
function tinymce($text) {
	$yazi=trim($text);
		  $yazi= str_replace ( "&ccedil;", "ç",$yazi); 
		  $yazi= str_replace ( "&yacute;","ı",$yazi); 
		  $yazi= str_replace ( "&Ccedil;", "Ç",$yazi); 
		  $yazi= str_replace ( "&Ouml;", "Ö",$yazi); 
		  $yazi= str_replace ( "&Uuml;", "Ü",$yazi); 
		  $yazi= str_replace ( "&ETH;","Ğ",$yazi); 
		  $yazi= str_replace ( "&THORN;","Ş",$yazi); 
		  $yazi= str_replace ( "&Yacute;","İ",$yazi); 
		  $yazi= str_replace ( "&ouml;","ö",$yazi); 
		  $yazi= str_replace ( "&thorn;","ş",$yazi); 
		  $yazi= str_replace ( "&eth;","ğ",$yazi); 
		  $yazi= str_replace ( "&uuml;","ü",$yazi); 
		  $yazi= str_replace ( "&amp;", "&",$yazi); 
		  $yazi= str_replace ( "&nbsp;", " ",$yazi);
	return $yazi;
}  

function ucfirst_tr($metin) {
	
	$metin=	trim($metin);
	
	$k_uzunluk 	= mb_strlen($metin, "UTF-8");
	$ilkKarakter= mb_substr($metin, 0, 1, "UTF-8");
	$k_uzunluk 	=	$k_uzunluk-1;
	$kalan		=	mb_substr($metin, 1, $k_uzunluk, "UTF-8");
	$b			=	array('I','İ','Ğ','Ü','Ş','Ç','Ö');
	$k			=	array('ı','i','ğ','ü','ş','ç','ö');
	$kalan		=	str_replace($b,$k,$kalan);
	$text		=	mb_strtoupper($ilkKarakter, "UTF-8") . mb_strtolower($kalan,"UTF-8");
	
	return $text;

}

function ucwords_tr($gelen){
  
	$gelen=	trim($gelen);
	
	$gelen = str_replace("&quot;",'"',$gelen);
	$gelen = str_replace("\\",'',$gelen);
	$sonuc='';
	$kelimeler=explode(" ", $gelen);
	
		foreach ($kelimeler as $kelime_duz){
		
		$kelime_uzunluk		=	strlen($kelime_duz);
		$ilk_karakter		=	mb_substr($kelime_duz,0,1,"UTF-8");
		$ikinci_karakter	=	mb_substr($kelime_duz,1,1,"UTF-8");
		$tirnakVarMi 		= 	false;
		
		if(ltrim($kelime_duz,'"') != $kelime_duz) {
			$kelime_duz 	= 	ltrim($kelime_duz,'"');
			$tirnakVarMi 	= true;
		}
			
			$ilk_karakter	=	mb_substr($kelime_duz,0,1,"UTF-8");	
				
				if($ilk_karakter=='Ç' or $ilk_karakter=='ç') $ilk_karakter='Ç';
					elseif ($ilk_karakter=='Ğ' or $ilk_karakter=='ğ') $ilk_karakter='Ğ';
					elseif($ilk_karakter=='I' or $ilk_karakter=='ı')  $ilk_karakter='I';
					elseif ($ilk_karakter=='İ' or $ilk_karakter=='i') $ilk_karakter='İ';
					elseif ($ilk_karakter=='Ö' or $ilk_karakter=='ö') $ilk_karakter='Ö';
					elseif ($ilk_karakter=='Ş' or $ilk_karakter=='ş') $ilk_karakter='Ş';
					elseif ($ilk_karakter=='Ü' or $ilk_karakter=='ü') $ilk_karakter='Ü';
					else $ilk_karakter=strtoupper($ilk_karakter);
				
					$digerleri=mb_substr($kelime_duz,1,$kelime_uzunluk,"UTF-8");
					if($tirnakVarMi)
						$sonuc.='"'.$ilk_karakter.kucuk_yap($digerleri).' ';
					else 
						$sonuc.=$ilk_karakter.kucuk_yap($digerleri).' ';
			} // if($ilk_karakter=="\"" or $ilk_karakter=="“" or $ilk_karakter=="\”") {
			

  return trim(addslashes($sonuc));

}

function case_upper_tr($deger) {

  $deger = str_replace("i","İ",$deger);

	$deger=	mb_strtoupper($deger, 'UTF-8');
  	
	$deger = str_replace("ç","Ç",$deger);
	$deger = str_replace("ğ","Ğ",$deger);
  $deger = str_replace("I","I",$deger);
	$deger = str_replace("ı","I",$deger);
  $deger = str_replace("İ","İ",$deger);
  $deger = str_replace("Ö","Ö",$deger);
	$deger = str_replace("ö","Ö",$deger);
  $deger = str_replace("Ü","Ü",$deger);
	$deger = str_replace("ü","Ü",$deger);
	$deger = str_replace("ş","Ş",$deger);
	
	$deger = trim($deger);

	return $deger;
}

function kisaltmalar_tr($metin){
	
	$metin			=	bosluk_sil($metin);
	$metinsonharf	=	mb_substr($metin,-1,1,"UTF-8");
	$metinparcala	=	explode("[k]",$metin);
	
	
	$cumle	=	"";
	foreach	($metinparcala as $metin){
		
		if(strstr($metin, "[/k]")){
			
			$kisaltmametinexp	=	explode("[/k]",$metin);
			$kisaltmaduzelt		=	case_upper_tr($kisaltmametinexp[0]);
			$kisaltmabirlestir	=	$kisaltmaduzelt." ".$kisaltmametinexp[1];
			
			$cumlesonharf	=	mb_substr($cumle,-1,1,"UTF-8");
					
			if($cumle!=""){
				if( $cumlesonharf=="'" or $cumlesonharf=="‘" or $cumlesonharf=="’" or $cumlesonharf=="\"" or $cumlesonharf=="“" or $cumlesonharf=="”" ) {
				
					$cumle	.=	$kisaltmabirlestir;
				}else{
					 $cumle	.=	" ".$kisaltmabirlestir;
				} // if( $cumlesonharf=="'" or $cumlesonharf=="‘" or
				
			}else{ // if($cumle!="")
			$cumle	=	$kisaltmabirlestir;
			} // if($cumle!="")
			
		}else{ // if(strstr($metin, "[/k]")){
			
			if($cumle!=""){
				
				if( $metinsonharf=="'" or $metinsonharf=="‘" or $metinsonharf=="’" or $metinsonharf=="\"" or $metinsonharf=="“" or $metinsonharf=="”" ) {
				
					$cumle	.=	$metin;
				}else{
					 $cumle	.=	" ".$metin;
				} // if( $cumlesonharf=="'" or $cumlesonharf=="‘" or

			}else{ // if($cumle!="")
			$cumle	=	$metin;
			} // if($cumle!="")
			
		} // if(strstr($metin, "[/k]")){
	} // foreach	($metinparcala as $metin){

	return $cumle;
} // function kisaltmalar_tr($metin){


function kisaltmalar_ekle($metin){
	
	$metin=tirnak_replace2($metin);
	
	$cumle = "";
	
	if($metin!=""){
		$metin=	bosluk_sil($metin);
		$bol = explode(" ",$metin);
		foreach($bol as $b) {
			
			$cumlesonharf	=	mb_substr($b,-1,1,"UTF-8");
			
			if(case_upper_tr($b) == $b)	{

				if($cumle!=""){
					
					$cumle	.=	" [k]".$b."[/k]";
					
				}else{
					$cumle	=	"[k]".$b."[/k]";
				} // if($cumle!="")				
				
			}else{ // if(case_upper_tr($b) == $b)
				
				if($cumle!=""){
					
					$cumle	.=	" ".$b;
					
				}else{
					$cumle	=	$b;
				} // if($cumle!="")	
			} // if(case_upper_tr($b) == $b)
		} // foreach($bol as $b) {
	} // if(isset($metin)){
		
	return $cumle;
}

	function objectToArray($d) {
		if (is_object($d)) {
			// Gelen nesnenin özelliklerini get_object_vars metodu
                        // ile alırız
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) {
			// Nesneden diziye çevirilmiş veriyi döndürür
                        // burdaki __FUNCTION__ bir magic constanttır.
                        // recursive gibi kendini çağırır
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}
	
	function arrayToObject($d) {
		if (is_array($d)) {
			// diziyi nesne olarak kendine döndürür
                        // __FUNCTION__ magic constanttır.
			return (object) array_map(__FUNCTION__, $d);
		}
		else {
			// Return object
			return $d;
		}
	}	



function multiple_upload($resimler, $baslik, $path){
  $resimlerid	=	"";
  $dosya_sayi	=	@count($resimler['name']);

  for($i=0;$i<$dosya_sayi;$i++){ 
    if(!empty($resimler['name'][$i])){ 

      $gelendosyaninadi         =	@$resimler["name"][$i]; //resmin tam adı (resim.jpg)
      $gelendosyaningeciciadi		=	@$resimler["tmp_name"][$i];
      $gelendosyaninturu        =	@$resimler["type"][$i];
      
      $name_bol					        =	explode('.', $gelendosyaninadi);
      $resminadi					      =	$name_bol["0"];
      $uzantiicinsay				    =	count($name_bol)-1;
      $resimuzantisi				    =	strtolower($name_bol[$uzantiicinsay]); 
            
      $duzeltilmisyeniresimadi	=	 seflink($baslik)."-".time(); // Karakterleri dönüştürür.
      $resimduzeltilmistamadi		=	$duzeltilmisyeniresimadi.".".$resimuzantisi;


      if(file_exists($path.$resimduzeltilmistamadi)){
        $arttir1	=	1;
        while (file_exists($path.$resimduzeltilmistamadi)){
          $resimduzeltilmistamadi	=	$duzeltilmisyeniresimadi."_".$arttir1.".".$resimuzantisi;
          $arttir1++;
        } // while (file_exists($path.$resimduzeltilmistamadi))
      } // if(file_exists($path.$resimduzeltilmistamadi))

      $dosyayukle		    = 	move_uploaded_file($gelendosyaningeciciadi, $path.$resimduzeltilmistamadi);

      if($dosyayukle) {
        
        if(substr_count($path,"../img/"))
          $path2	=	str_replace("../img/","",$path);
        else if(substr_count($path,"img/"))	
          $path2	=	str_replace("img/","",$path);

        $form           = array('path'=>$path2,'resim'=>$resimduzeltilmistamadi);
        $resimid        = insert('resimler', $form);
        
        if($resimlerid==""){
          $resimlerid		=	$resimid;
        }else{
          $resimlerid		.=	",".$resimid;
        } // if($resimlerid==""){
      } // if($dosyayukle)
    } // if(!empty($_FILES['dosya']['name'][$i]))
  } // for($i=0;$i<$dosya_sayi;$i++)
  return $resimlerid;
} // function multiple_upload($resimler, $baslik, $path){
  

function galeri_upload($resimler,$path,$galeriID=""){ 

  // $path = "../img/galeri/"
  global $tarih;
  
  $dosya_sayi	=	@count($resimler['name']);

  if($galeriID=="") {
    $galeriID = insert("galeriler",array("tarih"=>$tarih));
    $resimlerid	=	"";
  }else{
    $galeri  = sql('SELECT * FROM galeriler WHERE id = ? LIMIT 1', array($galeriID))[0];  
    $resimlerid	=	$galeri["resimler"];
  }

  $path = $path.($galeriID)."/";

  if(!is_dir($path)){
    mkdir($path, 0777, true);
  }

  for($i=0;$i<$dosya_sayi;$i++){ 

    if(!empty($resimler['name'][$i])){ 

      $gelendosyaninadi         =	@$resimler["name"][$i]; //resmin tam adı (resim.jpg)
      $gelendosyaningeciciadi		=	@$resimler["tmp_name"][$i];
      $gelendosyaninturu        =	@$resimler["type"][$i];
      
      $name_bol					        =	explode('.', $gelendosyaninadi);
      $resminadi					      =	seflink($name_bol["0"]);
      $uzantiicinsay				    =	count($name_bol)-1;
      $resimuzantisi				    =	strtolower($name_bol[$uzantiicinsay]); 

      $resminYeniAdi            = $resminadi.".".$resimuzantisi;

      if(file_exists($path.$resminYeniAdi)){
        $arttir	=	1;
        while (file_exists($path.$resminYeniAdi)){
          $resminYeniAdi	=	$resminadi."_".$arttir.".".$resimuzantisi;
          $arttir++;
        } // while (file_exists($path.$resimduzeltilmistamadi))
      } // if(file_exists($path.$resimduzeltilmistamadi))

      $dosyayukle		    = 	move_uploaded_file($gelendosyaningeciciadi, $path.$resminYeniAdi);

      if($dosyayukle) {

        if(substr_count($path,"../img/"))
          $path2	=	str_replace("../img/","",$path);
        else if(substr_count($path,"img/"))	
          $path2	=	str_replace("img/","",$path);

        $form           = array('path'=>$path2,'resim'=>$resminYeniAdi);
        $resimid        = insert('resimler', $form);
        
        if($resimlerid==""){
          $resimlerid		=	$resimid;
        }else{
          $resimlerid		.=	",".$resimid;
        } // if($resimlerid==""){

      } // if($dosyayukle)

    } // if(!empty($_FILES['dosya']['name'][$i]))

  } // for($i=0;$i<$dosya_sayi;$i++)

  update(
    'galeriler', 
    array(
        'resimler' => $resimlerid
    ),
    array("id"=>$galeriID)
    );  
  return $galeriID;
}//function galeri_upload($resimler,$path){ 
  

function delete_galeri($galeriID,$path){

  $galeri = sql("SELECT * FROM galeriler WHERE id = ?", array($galeriID))[0];

  if(substr_count($galeri["resimler"],",")) {
      $resimler   =   explode(",",$galeri["resimler"]);
  }else{
      $resimler   =   array($galeri["resimler"]);
  }

  foreach($resimler as $id){
      delete('resimler','id= ?', array('id' => $id));
  }

  delete('galeriler','id= ?', array('id' => $galeriID));
  deleteAll($path);

} // function delete_galeri($galeriID,$path){


function one_upload($resim, $baslik, $path){
	
	$resimid ='';
	
	if(!empty($resim['name'])){ 

		$gelendosyaninadi       =	@$resim["name"]; //resmin tam adı (resim.jpg)
		$gelendosyaningeciciadi =	@$resim["tmp_name"];
		$gelendosyaninturu			=	@$resim["type"];

		$name_bol					      =	explode('.', $gelendosyaninadi);
		$resminadi					    =	$name_bol["0"];
		$uzantiicinsay				  =	count($name_bol)-1;
		$resimuzantisi				  =	strtolower($name_bol[$uzantiicinsay]); 

		$duzeltilmisyeniresimadi=	 seflink($baslik)."-".time(); // Karakterleri dönüştürür.
		$resimduzeltilmistamadi	=	$duzeltilmisyeniresimadi.".".$resimuzantisi;


		if(file_exists($path.$resimduzeltilmistamadi)){
			$arttir1	=	1;
			while (file_exists($path.$resimduzeltilmistamadi)){
				$resimduzeltilmistamadi	=	$duzeltilmisyeniresimadi."_".$arttir1.".".$resimuzantisi;
				$arttir1++;
			} // while (file_exists($path.$resimduzeltilmistamadi))
		} // if(file_exists($path.$resimduzeltilmistamadi))

		$dosyayukle		= 	move_uploaded_file($gelendosyaningeciciadi, $path.$resimduzeltilmistamadi);

    if(substr_count($path,"../img/"))
      $path2	=	str_replace("../img/","",$path);
    else if(substr_count($path,"img/"))	
      $path2	=	str_replace("img/","",$path);

		if($dosyayukle) {
      $form       = array('path'=>$path2,'resim'=>$resimduzeltilmistamadi);
      $resimid    = insert('resimler', $form);


		} // if($dosyayukle)
	} // if(!empty($_FILES['dosya']['name']))

	return $resimid;
	
} // function one_upload($resimler, $baslik, $path){

function uploadFile($file, $baslik, $path){

  $fileID ='';
  
  if(!empty($file['name'])){ 

    $gelendosyaninadi			    =	@$file["name"];
    $gelendosyaningeciciadi		=	@$file["tmp_name"];
    $gelendosyaninturu			  =	@$file["type"];

    $name_bol					=	explode('.', $gelendosyaninadi);
    $dosyaninadi			=	$name_bol["0"];
    $uzantiicinsay		=	count($name_bol)-1;
    $dosyauzantisi		=	strtolower($name_bol[$uzantiicinsay]); 

    $duzeltilmisyenidosyaAdi	=	 seflink($baslik); // Karakterleri dönüştürür.
    $dosyaDuzeltilmisTamAdi		=	$duzeltilmisyenidosyaAdi.".".$dosyauzantisi;


    if(file_exists($path.$dosyaDuzeltilmisTamAdi)){
      $arttir1	=	1;
      while (file_exists($path.$dosyaDuzeltilmisTamAdi)){
        $dosyaDuzeltilmisTamAdi	=	$duzeltilmisyenidosyaAdi."_".$arttir1.".".$dosyauzantisi;
        $arttir1++;
      } // while (file_exists($path.$dosyaDuzeltilmisTamAdi))
    } // if(file_exists($path.$dosyaDuzeltilmisTamAdi))

    $dosyayukle		= 	move_uploaded_file($gelendosyaningeciciadi, $path.$dosyaDuzeltilmisTamAdi);

    if(substr_count($path,"../dokumanlar/"))	$path	=	str_replace("../dokumanlar/","",$path);
    if(substr_count($path,"dokumanlar/"))	$path	=	str_replace("dokumanlar/","",$path);

    if($dosyayukle) {

      $form       = array('path'=>$path,'dosya'=>$dosyaDuzeltilmisTamAdi);
      $fileID    = insert('dosyalar', $form);

    } // if($dosyayukle)
  } // if(!empty($_FILES['dosya']['name']))

  return array($fileID,$dosyaDuzeltilmisTamAdi);
  
} // function uploadFile($resimler, $baslik, $path){

function cumlekisalt($kelime, $uzunluk){
 $say = strlen($kelime); // harfleri saydık
 if($say > $uzunluk){ // uzunluk değşkeninden uzun ise;
	 $yeni = substr($kelime,0,$uzunluk); // büyük olduğunda parçaldık
 }elseif(($say == $uzunluk) or ($say < $uzunluk)){ // küçük yada eşit ise;
	 $yeni = $kelime; // değişiklilk yapma
 } return $yeni;
}

function spdurum($spdurumkodu){
	if($spdurumkodu==0) {
		$spdurum = "Ödeme Beklemede";
		$spdurumrenk = "label-warning";
	}elseif($spdurumkodu==1) {
		$spdurum 	= "Ödeme Yapıldı";
		$spdurumrenk = "label-success";
	}elseif($spdurumkodu==2) {
		$spdurum = "Hazırlanıyor";
		$spdurumrenk = "bg-orange";
	}elseif($spdurumkodu==3) {
		$spdurum = "Kargoya Verildi";
		$spdurumrenk = "bg-purple";
	}elseif($spdurumkodu==4) {
		$spdurum = "Tamamlandı";
		$spdurumrenk = "label-info";
	}elseif($spdurumkodu==8) {
		$spdurum = "Ürün İptal Edildi";
		$spdurumrenk = "bg-cold-grey";
	}elseif($spdurumkodu==9) {
		$spdurum = "Sipariş İptal Edildi";
		$spdurumrenk = "bg-cold-grey";
	}
	
	$sonuc	=	array("durum" => $spdurum, "renk" => $spdurumrenk);
	return $sonuc;
}

function reviewStar($puan){

	if($puan==10) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		';
	} elseif($puan==15) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		';
	} elseif($puan==20) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		';
	} elseif($puan==25) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>

		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		';
	} elseif($puan==30) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		';
	} elseif($puan==35) {
		$yildiz	=	'
		<li><i class="fa fa-star" aria-hidden="true"></i></li>

		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		';
	} elseif($puan==40) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>';
	} elseif($puan==45) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>';
	} elseif($puan==50) {
		$yildiz	='
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		<li><i class="fa fa-star" aria-hidden="true"></i></li>';
	} else {
		$yildiz	='
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
		<li><i class="fa fa-star-o" aria-hidden="true"></i></li>';
	}

return $yildiz;
	
} // function reviewStar ($puan){


function EmailKontrol($email){
  // Check the formatting is correct
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
  return FALSE;
  }
  // Next check the domain is real.
  $domain = explode("@", $email, 2);
  return checkdnsrr($domain[1]); // returns TRUE/FALSE;
}

function swt($no,$link) {

  $alert = array(
    0 => array("Veri silindi","","success"),
    1 => array("Başarıyla Kaydedildi","","success"),
    2 => array("Başarıyla Güncellendi","","success"),
    10 => array("Hata Meydana Geldi","Lütfen daha sonra tekrar deneyiniz","warning"),
    11 => array("Boş Bırakmayınız","Lütfen zorunlu alanları doldurunuz","warning"),
    12 => array("E-Posta Hatalı","Lütfen doğru e-posta adresi giriniz","warning"),
    13 => array("Resim Yüklenemedi","Lütfen daha sonra tekrar deneyiniz","warning"),
    14 => array("Kullanıcıadı ya da Şifre Uyuşmuyor","","warning"),
    15 => array("Dosya Yüklenemedi","Lütfen daha sonra tekrar deneyiniz","warning"),
    16 => array("Veri Girişi Yanlış","Lütfen doğru veri giriniz","warning"),
    17 => array("Aynı Bilgilerde Kayıt Var","Lütfen yeni veriler giriniz","warning"),
    18 => array("Dosya PDF Değil","Lütfen .pdf uzantılı dosya yükleyin","warning"),
    19 => array("Galeri Yüklenemedi","Galeri Resim(leri) yüklenemedi","warning"),
    20 => array("Kullanıcı Adı Var","Başka bir kullanıcı adı seçin","warning"),
    21 => array("E-Postanız Eklendi","Artık öncelikli haberdar olabileceksiniz ","success"),
    22 => array("İşlem Gerçekleşmedi","Bu veri düzenlemez!","warning"),
    23 => array("Kategori Silinemez","Bu kategoride ürünler var, ürünleri başka kategoriye taşıyın!","warning"),
    24 => array("Resim Silinemez","Silmek için önce resim yükleyiniz!","warning"),
    25 => array("Ürün Adı Kayıtlı!","Yeni bir ürün adı giriniz","warning"),
    26 => array("Ürün Kodu Kayıtlı!","Yeni bir ürün Kodu giriniz","warning"),
    27 => array("E-Posta Kayıtlı!","Lütfen yeni e-posta adresi giriniz","warning"),
    28 => array("Telefon Numarası Kayıtlı!","Lütfen yeni telefon numarası giriniz","warning"),
    29 => array("Kullanıcı Adı Kayıtlı!","Lütfen yeni kullanıcı adı giriniz","warning"),
    30 => array("Şifreler Eşleşmiyor!!","Lütfen şifreyi doğru giriniz","warning"),
    31 => array("Ürün Sepetinize Eklendi","İyi alışverişler dileriz","success"),
    32 => array("Ürün Sepetinizden Çıkartıldı","İyi alışverişler dileriz","success"),
    33 => array("Sepetiniz Silindi","İyi alışverişler dileriz","success"),
    34 => array("Sepetiniz Güncellendi","İyi alışverişler dileriz","success"),
    35 => array("Randevunuz Alındı","İlgili birimimiz sizinle en kısa sürede irtibata geçecektir","success"),
    36 => array("Giriş Başarısız","Kullanıcı adı ve şifre eşleşmiyor","warning"),
    37 => array("Üyelik Kaydınız Başarılı","Mutlu alışverişler dileriz","success"),
    38 => array("Adresiniz Güncellendi","Mutlu alışverişler dileriz","success"),
    39 => array("Varyasyon Silinemez","Varyasyona atanmış ürünler var!","warning"),
    40 => array("Resim Boyutu Büyük!","Bir Resminiz izin verilen boyuttan büyük!","warning"),
    41 => array("Eksik Varyasyon","Grup için birden fazla varyasyon eklemelisiniz","warning"),
    42 => array("Varyasyon(lar) Güncellenemez!","Ürüne atanmış varyasyonlar var","warning"),
    43 => array("Adres Seçimi Yapmalısınız","Bir adres seçin ya da yeni ekleyin","warning"),
    44 => array("Firma Bilgileriniz Eksik","Bilgilerinizi eksiksik girmelisiniz","warning"),
    45 => array("Adres Silinemez!","Varsayılan adresi değiştirmelisiniz.","warning"),
    46 => array("Sütun Sayısı Doldu!","Diğerlerini düzenleyin ya da silin.","warning"),
    47 => array("Varyasyon Silinemez!","Kategori filitrelemede etkin.","warning"),
    48 => array("Ürün Stokta Yok!","Seçtiğiniz adet kadar ürün bulunmamakadır.","warning"),
    49 => array("Şifreniz Başarıyla Güncellendi","Yeni şifreniz ile devam edebilirsiniz.","success"),
    50 => array("İade Talebiniz Alınmıştır","Mutlu alışverişler dileriz.","success"),
    51 => array("Videonun Resmini Eklemelisiniz!","Video linkin resmini ekleyin","warning"),
    52 => array("Şifreniz Yanlış","Lütfen mevcut şifrenizi doğru giriniz", "warning"),
		53 => array("Şifreniz Değiştirildi","Artık giriş yapabilirsiniz", "success"),
		54 => array("Mail Gönderildi","Şifre değişikliği için tarafınıza mail gönderildi", "success"),
		55 => array("Mail Kayıtlı Değil!","Mail bulunamadı, tekrar giriniz.", "warning"),
		56 => array("Şifreler Uyuşmuyor!","tekrar giriniz.", "warning"),
    57 => array("Mesajınız Alındı","İlgili birimimiz sizinle en kısa sürede irtibata geçecektir","success"),
    58 => array("Seflink Kayıtlı!","Benzersiz bir seflink oluşturunuz","success"),
    59 => array("Başvurunuz Alınmıştır","İlgi ve alakanız için teşekkür ederiz","success")

  );

  echo '<script type="text/javascript">swt("'.$alert[$no][0].'","'.$alert[$no][1].'","'.$alert[$no][2].'","'.$link.'");</script>';
}

function imgCrop($srcFile, $fileName, $path, $fileSize = 10 , $WSize = 100, $HSize = 100)
{
  $fileSize = $fileSize * pow(1024, 2); /* Bayt 0, KB 1, MB 2, GB 3, TB 4 */   

  $fileName = seflink($fileName)."-".time();

  if($srcFile["type"]=="image/png") $ek = "png"; else $ek = "jpg";

  if(file_exists($path.$fileName.".".$ek)){
    
    $arttir	=	1;
    $fileName2  =  $fileName;
    while (file_exists($path.$fileName2.".".$ek)){
      $fileName2	=	$fileName."_".$arttir;
      $arttir++;
    }
  }else{
    $fileName2	=	$fileName;
  }
 
  $fileName2 = $fileName2.".".$ek;

  // Grafik dosyasının boyutu uygun mu? kontrol edelim
  if ($srcFile['size'] > $fileSize || $srcFile['size'] == 0) {
      return false;
  }
  
  $srcFile = $srcFile['tmp_name'];
  
  list($width_orig, $height_orig, $type) = getimagesize($srcFile);
  
  if(!$type){
     return false;
  }

  // gerçekten grafik dosyası mı? kontrol edelim
  if(!in_array($type,  array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
     return false;
  } 

  // grafik tipini dönüştürelim
  switch ($type) {
      case IMAGETYPE_GIF:
          $image = imagecreatefromgif($srcFile);
          break;
      case IMAGETYPE_JPEG:
          $image = imagecreatefromjpeg($srcFile);
          break;
      case IMAGETYPE_PNG:
          $image = imagecreatefrompng($srcFile);
          break;
      default:
          return false;
  }

  // Oranı hesaplayalım
  $ratio_orig     = $width_orig / $height_orig;
  $thumb_width    = $WSize;
  $thumb_height   = $HSize;

  $original_aspect = $width_orig / $height_orig;
  $thumb_aspect = $thumb_width / $thumb_height;

  if ( $original_aspect >= $thumb_aspect )
  {
     // If image is wider than thumbnail (in aspect ratio sense)
     $new_height = $thumb_height;
     $new_width = $width_orig / ($height_orig / $thumb_height);
  }
  else
  {
     // If the thumbnail is wider than the image
     $new_width = $thumb_width;
     $new_height = $height_orig / ($width_orig / $thumb_width);
  }

  // Boş bir grafk oluşturalım
  $newImage = imagecreatetruecolor( $thumb_width, $thumb_height );

  imagealphablending( $newImage, false );
  imagesavealpha( $newImage, true );

  // Yeni grafiği en ve boyuna göre yeniden boyutlandırıp oluşturalım
  imagecopyresampled($newImage,
                  $image,
                  0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
                  0 - ($new_height - $thumb_height) / 2, // Center the image vertically
                  0, 0,
                  $new_width, $new_height,
                  $width_orig, $height_orig);


   // belirlediğimiz dizine kaydedelim.
  if(is_dir($path)){

    if($ek=="png") 
    imagepng($newImage, $path.$fileName2, 9);
    else
    imagejpeg($newImage, $path.$fileName2, 100);

    // Hafızayı temizleyelim                          
    imagedestroy($newImage);

    if(substr_count($path,"../img/"))
      $path2	=	str_replace("../img/","",$path);
    else if(substr_count($path,"img/"))	
      $path2	=	str_replace("img/","",$path);

    $form     = array('path'=>$path2,'resim'=>$fileName2);
    $imgID    = insert('resimler', $form);

      return $imgID;
    }    
    return false;
} // function imgCrop

function imgCropMultiple($Files, $fileName, $path, $fileSize = 5 , $ArrWHP)
{
  // $ArrWHP ==> array(0 => array(0=>Width, 1=>Height, 2=>$Path))

  $imgID      = array();
  $fileSize   = $fileSize * pow(1024, 2); /* Bayt 0, KB 1, MB 2, GB 3, TB 4 */   

  $dosya_sayi	= @count($Files['name']);
  
  if(!is_dir($path)){
    mkdir($path, 0777, true);
  }

  $fileName = seflink($fileName)."-".time();

  for($i=0;$i<$dosya_sayi;$i++){ 

      $srcFile["name"]      =   $Files["name"][$i];
      $srcFile["type"]      =   $Files["type"][$i];
      $srcFile["tmp_name"]  =   $Files["tmp_name"][$i];
      $srcFile["error"]     =   $Files["error"][$i];
      $srcFile["size"]      =   $Files["size"][$i];
    
      if($srcFile["type"]=="image/png") $ek = "png"; else $ek = "jpg";

      if(file_exists($path.$fileName.".".$ek)){
        $arttir	=	1;
        $fileName2  =  $fileName;
        while (file_exists($path.$fileName2.".".$ek)){
          $fileName2	=	$fileName."_".$arttir;
          $arttir++;
        }
      }else{
        $fileName2	=	$fileName;
      }

      foreach($ArrWHP as $WHP){

        if(!is_dir($path.$WHP[2])){
          mkdir($path, 0777, true);
        }

        if(file_exists($path.$WHP[2].$fileName.".".$ek)){
          $arttir	=	1;
          $fileName2  =  $fileName;
          while (file_exists($path.$WHP[2].$fileName2.".".$ek)){
            $fileName2	=	$fileName."_".$arttir;
            $arttir++;
          }
        }else{
          $fileName2	=	$fileName;
        }
      }
      
      $fileName2 = $fileName2.".".$ek;
    
      if ($srcFile['size'] > $fileSize || $srcFile['size'] == 0) {
          return false;
      }

      $srcFile2 = $srcFile['tmp_name'];
            
      list($width_orig, $height_orig, $type) = getimagesize($srcFile2);

      if(!$type){
          return false;
      }
      
      if(!in_array($type,  array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
          return false;
      }  

      foreach($ArrWHP as $WHP){

        $WSize  = $WHP[0];
        $HSize  = $WHP[1];
        $pathCr = $path.$WHP[2];
    
        $thumb_width    = $WSize;
        $thumb_height   = $HSize;
    
        $original_aspect = $width_orig / $height_orig;
        $thumb_aspect = $thumb_width / $thumb_height;
    
        if ( $original_aspect >= $thumb_aspect ) // (scale down <=) (cover >=)
        {
          $new_height = $thumb_height;
          $new_width = $width_orig / ($height_orig / $thumb_height);
        }
        else
        {
          $new_width  = $thumb_width;
          $new_height = $height_orig / ($width_orig / $thumb_width);
        }

        switch ($type) {
            case IMAGETYPE_GIF:
                $image = imagecreatefromgif($srcFile2);
                break;
            case IMAGETYPE_JPEG:
                $image = imagecreatefromjpeg($srcFile2);
                break;
            case IMAGETYPE_PNG:
                $image = imagecreatefrompng($srcFile2);
                break;
            default:
                return false;
        }

        $ratio_orig     = $width_orig / $height_orig;
      
        $newImage = imagecreatetruecolor( $thumb_width, $thumb_height );

        /* change crop background color => for scale down
        $whiteBackground  = imagecolorallocate($newImage, 255, 255, 255); 
        imagefill($newImage,0,0,$whiteBackground);
        */
    
        imagealphablending( $newImage, false );
        imagesavealpha( $newImage, true );
    
        imagecopyresampled($newImage,
                        $image,
                        0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
                        0 - ($new_height - $thumb_height) / 2, // Center the image vertically
                        0, 0,
                        $new_width, $new_height,
                        $width_orig, $height_orig);
                
        if($ek=="png") 
        imagepng($newImage, $pathCr.$fileName2, 9);
        else
        imagejpeg($newImage, $pathCr.$fileName2, 100);

        imagedestroy($newImage);

        if(substr_count($pathCr,"../img/"))
        $path2	=	str_replace("../img/","",$pathCr);
        else if(substr_count($pathCr,"img/"))	
        $path2	=	str_replace("img/","",$pathCr);

        $form  = array('path' => $path2,'resim' => $fileName2);
        
        $imgID[$i][$WSize."x".$HSize]  = insert('resimler', $form);
         
      } // foreach($ArrWH as $WH)

  } // for($i=0;$i<$dosya_sayi;$i++){

  if ($imgID!="") return $imgID;
  else return false;

} // function imgCropMultiple

function imgResizeMultiple($Files, $fileName, $path, $fileSize = 5) {

  global $ef_imgScale1;
  global $ef_imgScale2;
  global $ef_imgScale3;

  $ArrWHP     = array(
                      0=>array(0 => $ef_imgScale1, 1 => "thumb1/", 2 => "t1"),
                      1=>array(0 => $ef_imgScale2, 1 => "thumb2/", 2 => "t2"),
                      2=>array(0 => $ef_imgScale3, 1 => "thumb3/", 2 => "t3")
                      );

  $imgID      = array();
  $fileSize   = $fileSize * pow(1024, 2); /* Bayt 0, KB 1, MB 2, GB 3, TB 4 */   

  $dosya_sayi	= @count($Files['name']);
  
  if(!is_dir($path)){
    mkdir($path, 0777, true);
  }

  $fileName = seflink($fileName)."-".time();

  for($i=0;$i<$dosya_sayi;$i++){ 

      $srcFile["name"]      =   $Files["name"][$i];
      $srcFile["type"]      =   $Files["type"][$i];
      $srcFile["tmp_name"]  =   $Files["tmp_name"][$i];
      $srcFile["error"]     =   $Files["error"][$i];
      $srcFile["size"]      =   $Files["size"][$i];
    
      if($srcFile["type"]=="image/png") $ek = "png"; else $ek = "jpg";

      if(file_exists($path.$fileName.".".$ek)){
        $arttir	=	1;
        $fileName2  =  $fileName;
        while (file_exists($path.$fileName2.".".$ek)){
          $fileName2	=	$fileName."_".$arttir;
          $arttir++;
        }
      }else{
        $fileName2	=	$fileName;
      }

      foreach($ArrWHP as $WHP){

        if(!is_dir($path.$WHP[1])){
          mkdir($path, 0777, true);
        }

        if(file_exists($path.$WHP[1].$fileName.".".$ek)){
          $arttir	=	1;
          $fileName2  =  $fileName;
          while (file_exists($path.$WHP[1].$fileName2.".".$ek)){
            $fileName2	=	$fileName."_".$arttir;
            $arttir++;
          }
        }else{
          $fileName2	=	$fileName;
        }
      }
      
      $fileName2 = $fileName2.".".$ek;
    
      if ($srcFile['size'] > $fileSize || $srcFile['size'] == 0) {
          return false;
      }

      $srcFile2 = $srcFile['tmp_name'];
            
      list($width_orig, $height_orig, $type) = getimagesize($srcFile2);

      if(!$type){
          return false;
      }
      
      if(!in_array($type,  array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
          return false;
      }  

      foreach($ArrWHP as $WHP){

        if($width_orig>=$height_orig){

          $new_width    = $WHP[0];
          $new_height   = $height_orig*$WHP[0]/$width_orig;

        }else{

          $new_width    = $width_orig*$WHP[0]/$height_orig;
          $new_height   = $WHP[0];

        }

        $pathCr = $path.$WHP[1];

        switch ($type) {
            case IMAGETYPE_GIF:
                $image = imagecreatefromgif($srcFile2);
                break;
            case IMAGETYPE_JPEG:
                $image = imagecreatefromjpeg($srcFile2);
                break;
            case IMAGETYPE_PNG:
                $image = imagecreatefrompng($srcFile2);
                break;
            default:
                return false;
        }

        $newImage = imagecreatetruecolor( $new_width, $new_height );

        imagealphablending( $newImage, false );
        imagesavealpha( $newImage, true );
    
        imagecopyresampled($newImage,
                                    $image,
                                    0,0,0,0,
                                    $new_width, $new_height,
                                    $width_orig, $height_orig);
                
        if($ek=="png") 
        imagepng($newImage, $pathCr.$fileName2, 9);
        else
        imagejpeg($newImage, $pathCr.$fileName2, 100);

        imagedestroy($newImage);

        if(substr_count($pathCr,"../img/"))
        $path2	=	str_replace("../img/","",$pathCr);
        else if(substr_count($pathCr,"img/"))	
        $path2	=	str_replace("img/","",$pathCr);

        $form  = array('path' => $path2,'resim' => $fileName2);
        
        $imgID[$i][$WHP[2]]  = insert('resimler', $form);
        
      } // foreach($ArrWH as $WH)

  } // for($i=0;$i<$dosya_sayi;$i++){

  if ($imgID!="") return $imgID;
  else return false;

} // function imgResizeMultiple($Files, $fileName, $path, $fileSize = 5 , $ArrWHP) {


  function imgResizeOne($File, $fileName, $path, $fileResize, $fileSize = 5) {
  
    $imgID      = "";
    $fileSize   = $fileSize * pow(1024, 2); /* Bayt 0, KB 1, MB 2, GB 3, TB 4 */   
      
    if(!is_dir($path)){
      mkdir($path, 0777, true);
    }
  
    $fileName = seflink($fileName)."-".time();
  
    $srcFile["name"]      =   $File["name"];
    $srcFile["type"]      =   $File["type"];
    $srcFile["tmp_name"]  =   $File["tmp_name"];
    $srcFile["error"]     =   $File["error"];
    $srcFile["size"]      =   $File["size"];
  
    if($srcFile["type"]=="image/png") $ek = "png"; else $ek = "jpg";

    if(file_exists($path.$fileName.".".$ek)){
      $arttir	=	1;
      $fileName2  =  $fileName;
      while (file_exists($path.$fileName2.".".$ek)){
        $fileName2	=	$fileName."_".$arttir;
        $arttir++;
      }
    }else{
      $fileName2	=	$fileName;
    }
   
    $fileName2 = $fileName2.".".$ek;
  
    if ($srcFile['size'] > $fileSize || $srcFile['size'] == 0) {
        return false;
    }

    $srcFile2 = $srcFile['tmp_name'];
          
    list($width_orig, $height_orig, $type) = getimagesize($srcFile2);

    if(!$type){
        return false;
    }
    
    if(!in_array($type,  array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
        return false;
    }  

    if($width_orig>=$height_orig){

      $new_width    = $fileResize;
      $new_height   = $height_orig*$fileResize/$width_orig;

    }else{

      $new_width    = $width_orig*$fileResize/$height_orig;
      $new_height   = $fileResize;

    }

    switch ($type) {
        case IMAGETYPE_GIF:
            $image = imagecreatefromgif($srcFile2);
            break;
        case IMAGETYPE_JPEG:
            $image = imagecreatefromjpeg($srcFile2);
            break;
        case IMAGETYPE_PNG:
            $image = imagecreatefrompng($srcFile2);
            break;
        default:
            return false;
    }

    $newImage = imagecreatetruecolor( $new_width, $new_height );

    imagealphablending( $newImage, false );
    imagesavealpha( $newImage, true );

    imagecopyresampled($newImage,
                                $image,
                                0,0,0,0,
                                $new_width, $new_height,
                                $width_orig, $height_orig);
            
    if($ek=="png") 
    imagepng($newImage, $path.$fileName2, 9);
    else
    imagejpeg($newImage, $path.$fileName2, 100);

    imagedestroy($newImage);

    if(substr_count($path,"../img/"))
    $path2	=	str_replace("../img/","",$path);
    else if(substr_count($path,"img/"))	
    $path2	=	str_replace("img/","",$path);

    $form  = array('path' => $path2,'resim' => $fileName2);
    
    $imgID = insert('resimler', $form);
       
    if ($imgID!="") return $imgID;
    else return false;
  
  } //   function imgResizeOne($File, $fileName, $path, $fileResize, $fileSize = 5) 
  














function deleteAll($dirname) {
	if (is_dir($dirname))
		$dir_handle = opendir($dirname);
	if (!$dir_handle)
		 return false;
	while($file = readdir($dir_handle)) {
		  if ($file != "." && $file != "..") {
			   if (!is_dir($dirname."/".$file))
					unlink($dirname."/".$file);
			   else
         deleteAll($dirname.'/'.$file);
		  }
	}
	closedir($dir_handle);
	rmdir($dirname);
	return true;
}

function title_span($title) {

  if(substr_count($title,"*")) {

      $titleExp=explode("*",$title);

      $i=0;   
      $baslik = "";
      foreach( $titleExp as $item){
  
          if($i==0) {
              $baslik =  $item;
          }else if($i==1){
              $baslik .=  " <span>".$item."</span>";
          }else{
              $baslik .=  " ".$item;
          }
          $i++;
      }    

  }else{
      $baslik = $title;
  }
  return $baslik;
}

function tel0($tel) {
	
	$tel=	bosluk_sil($tel);
	
	$k_uzunluk 	= mb_strlen($tel, "UTF-8");
	$ilkRakam   = mb_substr($tel, 0, 1, "UTF-8");
	$k_uzunluk 	=	$k_uzunluk-1;
	$kalan		  =	mb_substr($tel, 1, $k_uzunluk, "UTF-8");
	$b		    	=	array('(',')','-',' ');
	$k		    	=	array('','','','');
	$kalan	  	=	str_replace($b,$k,$kalan);

  if($ilkRakam==0) return $kalan; else return $ilkRakam.$kalan;

}


function pagination($icerikSayisi, $sql, $alink) {

  global $_GET;

  $sayfa 		= isset($_GET['s']) ? (int) $_GET['s'] : 1;
  $limit 		= ($sayfa - 1) * $icerikSayisi;

  $sqlTop     =    $sql;
  $sql        =    $sql." LIMIT ".$limit." , ".$icerikSayisi;

  $items      =   sql($sql);
  $itemsTop   =   sql($sqlTop);
  $topIcerik  =	count($itemsTop);

  if($sayfa < 1) $sayfa = 1; 
  $toplam_sayfa 	= ceil($topIcerik / $icerikSayisi);	
  if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

  if($sayfa==0 or $sayfa=="") $sayfa = 1;
  if($topIcerik=="") $topIcerik = 0;

  if($sayfa==1) $disp1 = "hidden"; else $disp1 = "";

  echo'<ul>';
  echo '<li class="'.$disp1.'"><a class="active" href="'.$alink.'s=1"><i class="fa fa-angle-double-left"></i></a></li>';

  $sondansayfasay	=	$toplam_sayfa - 6;

  if($toplam_sayfa>=7){
      
      if($sayfa<6){

          for($ss=1; $ss<=7; $ss++){

              if($sayfa==$ss) $active = "active"; else $active = "";

              echo '<li class="'.$active.'"><a href="'.$alink.'s='.$ss.'">'.$ss.'</a></li>';

          } // for($ss=1; $ss<=7; $ss++){

          if($sayfa==$ss) $active = "active"; else $active = "";

          echo '
          <li class="dots-pagging">. . .</li>
          <li class="'.$active.'"><a href="'.$alink.'s='.$toplam_sayfa.'">'.$toplam_sayfa.'</a></li>
          ';

      }else if($sayfa>$sondansayfasay){

          echo'
          <li class=""><a href="'.$alink.'s=1">1</a></li>
          <li class="dots-pagging">. . .</li>
          ';

          for($ss=$sondansayfasay; $ss<$toplam_sayfa; $ss++){

              if($sayfa==$ss) $active = "active"; else $active = "";

              echo'
              <li class="'.$active.'"><a href="'.$alink.'s='.$ss.'">'.$ss.'</a></li>
              ';

          } // for($ss=1; $ss<=7; $ss++){

            if($sayfa==$ss) $active = "active"; else $active = "";

            echo '
            <li class="'.$active.'"><a href="'.$alink.'s='.$toplam_sayfa.'">'.$toplam_sayfa.'</a></li>
            ';
          
      }else{
          
          echo'
              <li><a href="'.$alink.'s=1">1</a></li>
              <li class="dots-pagging">. . .</li>
              <li><a href="'.$alink.'s='.($sayfa-2).'">'.($sayfa-2).'</a></li>
              <li><a href="'.$alink.'s='.($sayfa-1).'">'.($sayfa-1).'</a></li>
              <li class="active"><a href="'.$alink.'s='.$sayfa.'">'.$sayfa.'</a></li>
              <li><a href="'.$alink.'s='.($sayfa+1).'">'.($sayfa+1).'</a></li>
              <li><a href="'.$alink.'s='.($sayfa+2).'">'.($sayfa+2).'</a></li>
              <li class="dots-pagging">. . .</li>
              <li><a href="'.$alink.'s='.$toplam_sayfa.'">'.$toplam_sayfa.'</a>
          ';

      }// if($sayfa<6){

  }else{ // if($toplam_sayfa>=7){
        
      for($ss=1; $ss<=$toplam_sayfa; $ss++){

          if($sayfa==$ss) $active = "active"; else $active = "";

          echo '
              <li class="'.$active.'"><a href="'.$alink.'s='.$ss.'">'.$ss.'</a></li>
          ';

      } // for($ss=1; $ss<=7; $ss++){
  
  } // if($toplam_sayfa>=7){

      if($sayfa==$toplam_sayfa or $toplam_sayfa==1) $disp2 = "hidden"; else $disp2 = "";

      echo '
          <li class="'.$disp2.'"><a href="'.$alink.'s='.$toplam_sayfa.'"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
      ';
  
  echo'</ul>';
  
} // function pagination($icerikSayisi, $sql, $alink)

function isTcKimlik($tc)
{
    if (!ctype_digit($tc)) {
        return false;
    }
    if (strlen($tc) < 11) {
        return false;
    }
    if ($tc[0] == '0') {
        return false;
    }
    $plus = ($tc[0] + $tc[2] + $tc[4] + $tc[6] + $tc[8]) * 7;
    $minus = $plus - ($tc[1] + $tc[3] + $tc[5] + $tc[7]);
    $mod = $minus % 10;
    if ($mod != $tc[9]) {
        return false;
    }
    $all = 0;
    for ($i = 0; $i < 10; $i++) {
        $all += $tc[$i];
    }
    if ($all % 10 != $tc[10]) {
        return false;
    }

    return true;
}


function itemSay($id, $itemSay='0') {

	$urunkat	=	sql("SELECT * FROM urun_kategori WHERE kategoriID =?",array($id));

	$itemSay	=	$itemSay + count($urunkat);
	
	$altkategoriler	=	sql("SELECT * FROM kategoriler WHERE ustkategoriID = ?", array($id));

	if(count($altkategoriler)>0) {

		foreach($altkategoriler as $altkategori) {
			
			$itemSay= itemSay($altkategori["id"], $itemSay);
			
		} // foreach($altkategoriler as $altkategori

	} // if(count($altkategoriler)>0)
	
	return $itemSay;

}	// function itemSay($id, $itemSay='0') {



function KargoHesapla($desi,$agirlik) {

  $kargoSql		=	sql("SELECT * FROM kargo_ucret WHERE id=? ORDER BY id DESC LIMIT 1",array(1))[0];

  if($desi>$agirlik)	$kargo_birim = $desi; else $kargo_birim	= $agirlik;

  if($kargo_birim>30) {
    $kargo_toplamucret	=	$kargoSql["desi2630"] + $kargoSql["desiartan"]*($kargo_birim - 30);
  }elseif($kargo_birim<=30 and $kargo_birim>=25.5){
    $kargo_toplamucret	=	$kargoSql["desi2630"];
  }elseif($kargo_birim<25.5 and $kargo_birim>=20.5){
    $kargo_toplamucret	=	$kargoSql["desi2125"];
  }elseif($kargo_birim<20.5 and $kargo_birim>=15.5){
    $kargo_toplamucret	=	$kargoSql["desi1620"];
  }elseif($kargo_birim<15.5 and $kargo_birim>=10.5){
    $kargo_toplamucret	=	$kargoSql["desi1115"];
  }elseif($kargo_birim<10.5 and $kargo_birim>=5.5){
    $kargo_toplamucret	=	$kargoSql["desi610"];
  }elseif($kargo_birim<5.5 and $kargo_birim>=4.5){
    $kargo_toplamucret	=	$kargoSql["desi5"];
  }elseif($kargo_birim<4.5 and $kargo_birim>=3.5){
    $kargo_toplamucret	=	$kargoSql["desi4"];
  }elseif($kargo_birim<3.5 and $kargo_birim>=2.5){
    $kargo_toplamucret	=	$kargoSql["desi3"];
  }elseif($kargo_birim<2.5 and $kargo_birim>=1.5){
    $kargo_toplamucret	=	$kargoSql["desi2"];
  }elseif($kargo_birim<1.5){
    $kargo_toplamucret	=	$kargoSql["desi1"];
  }
  
  $kargo_toplamucret		=	$kargo_toplamucret + $kargo_toplamucret*0.0235 + $kargo_toplamucret*0.18;

  return $kargo_toplamucret;

} // funtion KargoHesapla($desi,$agirlik) {
  

function navStyle($NavKatID, $flyoutFloat, $i=0){

  $kat1 = sql("SELECT * FROM kategoriler WHERE ustkategoriID=? ORDER BY siralama ASC",array($NavKatID));

  if (count($kat1)>0) {

    if($i==0) echo '<ul class="drop-down-ul navStyle-ul animated fadeIndown">';
    else echo '<ul class="animated fadeIn">';
    foreach($kat1 as $kat2){

      $kat3 = sql("SELECT * FROM kategoriler WHERE ustkategoriID=? ORDER BY siralama ASC",array($kat2["id"]));

      if (count($kat3)>0) {

        echo '<li class="'.$flyoutFloat.'"><a href="kategoriler/'.$kat2["seflink"].'">'.$kat2["kategoriAdi"].'</a>';
        $i++;
        navStyle($kat2["id"], $flyoutFloat,$i);

        echo '</li>';

      }else{
        echo '<li><a href="kategoriler/'.$kat2["seflink"].'">'.$kat2["kategoriAdi"].'</a></li>';
      } // if (count($kat3)>0) {

    } // foreach($kat as $kat2){

    echo '</ul>';

  } // if (count($kat1)>0)

} // function navStyle2($NavKatID, $flyoutFloat)

function SqlAnd($sql){
	if($sql!="") $sql=" AND ".$sql; else $sql="";
	return $sql;
} // function sql_and($sql)

function KategorilerID($id, $array=array()) {
	$array[] = $id;
  
		$query	=	sql("SELECT * FROM kategoriler WHERE ustkategoriID=? ORDER BY id ASC",array($id));

		if(count($query)>0) {

			foreach($query as $kategori){

				$array = KategorilerID($kategori["id"], $array);

			} // foreach($query as $kategori){

		} else{

		return $array;

		} // if(mysql_num_rows($query)>0) {

	return $array;

} // function KategorilerID($id) {

function urunsay ($id, $urunsay='0') {

  $urunkatdb	=	sql("SELECT * FROM kategori_urunler WHERE kategoriID = ? ORDER BY id ASC",array($id));

  $urunsay	=	$urunsay + count($urunkatdb);
  
  $altkategorilerdb	=	sql("SELECT * FROM kategoriler WHERE ustkategoriID = ? ORDER BY id ASC",array($id));

  if(count($altkategorilerdb)>0) {

    foreach($altkategorilerdb as $altkategori) {
      
      $urunsay= urunsay($altkategori["id"], $urunsay);
      
    } // foreach($altkategorilerdb as $altkategori) {
      
  } // if(mysql_num_rows($altkategorilerdb)>0) {
  
  return $urunsay;
}	// function urunsay ($id, $urunsay='0') {



  function imgUpload($srcFile, $fileName, $path, $fileSize = 5 , $WSize = 100, $HSize = 100)
{
  global $tarih;

  $fileSize = $fileSize * pow(1024, 2); /* Bayt 0, KB 1, MB 2, GB 3, TB 4 */   

  $fileName = seflink($fileName)."-".$tarih;

  if($srcFile["type"]=="image/png") $ek = "png"; else $ek = "jpg";

  if(file_exists($path.$fileName.".".$ek)){
    
    $arttir	=	1;
    $fileName2  =  $fileName;
    while (file_exists($path.$fileName2.".".$ek)){
      $fileName2	=	$fileName."_".$arttir;
      $arttir++;
    }
  }else{
    $fileName2	=	$fileName;
  }
 
  $fileName2 = $fileName2.".".$ek;

  // Grafik dosyasının boyutu uygun mu? kontrol edelim
  if ($srcFile['size'] > $fileSize || $srcFile['size'] == 0) {
      return false;
  }
  
  $srcFile = $srcFile['tmp_name'];
  
  list($width_orig, $height_orig, $type) = getimagesize($srcFile);
  
  if(!$type){
     return false;
  }
  
  // gerçekten grafik dosyası mı? kontrol edelim
  if(!in_array($type,  array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
     return false;
  } 

  // grafik tipini dönüştürelim
  switch ($type) {
      case IMAGETYPE_GIF:
          $image = imagecreatefromgif($srcFile);
          break;
      case IMAGETYPE_JPEG:
          $image = imagecreatefromjpeg($srcFile);
          break;
      case IMAGETYPE_PNG:
          $image = imagecreatefrompng($srcFile);
          break;
      default:
          return false;
  }

  // Oranı hesaplayalım
  $ratio_orig     = $width_orig / $height_orig;
  $thumb_width    = $WSize;
  $thumb_height   = $HSize;

  $original_aspect = $width_orig / $height_orig;
  $thumb_aspect = $thumb_width / $thumb_height;

  if ( $original_aspect >= $thumb_aspect )
  {
     // If image is wider than thumbnail (in aspect ratio sense)
     $new_height = $thumb_height;
     $new_width = $width_orig / ($height_orig / $thumb_height);
  }
  else
  {
     // If the thumbnail is wider than the image
     $new_width = $thumb_width;
     $new_height = $height_orig / ($width_orig / $thumb_width);
  }

  // Boş bir grafik oluşturalım
  $newImage = imagecreatetruecolor( $thumb_width, $thumb_height );

  imagealphablending( $newImage, false );
  imagesavealpha( $newImage, true );

  // Yeni grafiği en ve boyuna göre yeniden boyutlandırıp oluşturalım
  imagecopyresampled($newImage,
                  $image,
                  0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
                  0 - ($new_height - $thumb_height) / 2, // Center the image vertically
                  0, 0,
                  $new_width, $new_height,
                  $width_orig, $height_orig);

  
  // Resim dosyasının adını oluşturalım.

   // belirlediğimiz dizine kaydedelim.
  if(is_dir($path)){

    if($ek=="png") 
    imagepng($newImage, $path.$fileName2, 9);
    else
    imagejpeg($newImage, $path.$fileName2, 100);

    // Hafızayı temizleyelim                          
    imagedestroy($newImage);

    if(substr_count($path,"../img/"))
      $path2	=	str_replace("../img/","",$path);
    else if(substr_count($path,"img/"))	
      $path2	=	str_replace("img/","",$path);

    $form     = array('path'=>$path2,'resim'=>$fileName2);
    $imgID    = insert('resimler', $form);

      return $imgID;
    }    
    return false;
} // function imgUpload

function tel90($tel){
  
  if(substr_count($tel,"("))	$tel     =	str_replace("(","",$tel);
  if(substr_count($tel,")"))	$tel     =	str_replace(")","",$tel);
  if(substr_count($tel,"-"))	$tel     =	str_replace("-","",$tel);

  if(!substr_count($tel,"90")) {
    $tel = "+90".$tel;
  }

  return bosluk_sil($tel);

}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
  $output = NULL;
  if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
      $ip = $_SERVER["REMOTE_ADDR"];
      if ($deep_detect) {
          if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
              $ip = $_SERVER['HTTP_CLIENT_IP'];
      }
  }
  $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
  $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
  $continents = array(
      "AF" => "Africa",
      "AN" => "Antarctica",
      "AS" => "Asia",
      "EU" => "Europe",
      "OC" => "Australia (Oceania)",
      "NA" => "North America",
      "SA" => "South America",
      "TR" => "Türkiye",
  );
  if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
      $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
      if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
          switch ($purpose) {
              case "location":
                  $output = array(
                      "city"           => @$ipdat->geoplugin_city,
                      "state"          => @$ipdat->geoplugin_regionName,
                      "country"        => @$ipdat->geoplugin_countryName,
                      "country_code"   => @$ipdat->geoplugin_countryCode,
                      "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                      "continent_code" => @$ipdat->geoplugin_continentCode
                  );
                  break;
              case "address":
                  $address = array($ipdat->geoplugin_countryName);
                  if (@strlen($ipdat->geoplugin_regionName) >= 1)
                      $address[] = $ipdat->geoplugin_regionName;
                  if (@strlen($ipdat->geoplugin_city) >= 1)
                      $address[] = $ipdat->geoplugin_city;
                  $output = implode(", ", array_reverse($address));
                  break;
              case "city":
                  $output = @$ipdat->geoplugin_city;
                  break;
              case "state":
                  $output = @$ipdat->geoplugin_regionName;
                  break;
              case "region":
                  $output = @$ipdat->geoplugin_regionName;
                  break;
              case "country":
                  $output = @$ipdat->geoplugin_countryName;
                  break;
              case "countrycode":
                  $output = @$ipdat->geoplugin_countryCode;
                  break;
          }
      }
  }
  return $output;
}

function getOS() { 

	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	$os_platform =   "Bilinmeyen İşletim Sistemi";
	$os_array =   array(
		'/windows nt 10/i'      =>  'Windows 10',
		'/windows nt 6.3/i'     =>  'Windows 8.1',
		'/windows nt 6.2/i'     =>  'Windows 8',
		'/windows nt 6.1/i'     =>  'Windows 7',
		'/windows nt 6.0/i'     =>  'Windows Vista',
		'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
		'/windows nt 5.1/i'     =>  'Windows XP',
		'/windows xp/i'         =>  'Windows XP',
		'/windows nt 5.0/i'     =>  'Windows 2000',
		'/windows me/i'         =>  'Windows ME',
		'/win98/i'              =>  'Windows 98',
		'/win95/i'              =>  'Windows 95',
		'/win16/i'              =>  'Windows 3.11',
		'/macintosh|mac os x/i' =>  'Mac OS X',
		'/mac_powerpc/i'        =>  'Mac OS 9',
		'/linux/i'              =>  'Linux',
		'/ubuntu/i'             =>  'Ubuntu',
		'/iphone/i'             =>  'iPhone',
		'/ipod/i'               =>  'iPod',
		'/ipad/i'               =>  'iPad',
		'/android/i'            =>  'Android',
		'/blackberry/i'         =>  'BlackBerry',
		'/webos/i'              =>  'Mobile'
	);

	foreach ( $os_array as $regex => $value ) { 
		if ( preg_match($regex, $user_agent ) ) {
			$os_platform = $value;
		}
	}   
	return $os_platform;
}

function getBrowser() {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	$browser        = "Bilinmeyen Tarayıcı";
	$browser_array  = array(
		'/msie/i'       =>  'Internet Explorer',
		'/firefox/i'    =>  'Firefox',
		'/safari/i'     =>  'Safari',
		'/chrome/i'     =>  'Chrome',
		'/edge/i'       =>  'Edge',
		'/opera/i'      =>  'Opera',
		'/netscape/i'   =>  'Netscape',
		'/maxthon/i'    =>  'Maxthon',
		'/konqueror/i'  =>  'Konqueror',
		'/mobile/i'     =>  'Handheld Browser'
	);

	foreach ( $browser_array as $regex => $value ) { 
		if ( preg_match( $regex, $user_agent ) ) {
			$browser = $value;
		}
	}
	return $browser;
}

function detectMobile(){
  $useragent=$_SERVER['HTTP_USER_AGENT'];
  if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
  { 
    return 1;
  }
  else{
    return 0;
  }
}

function isBotDetected() {

  if ( preg_match('/abacho|accona|AddThis|AdsBot|ahoy|AhrefsBot|AISearchBot|alexa|altavista|anthill|appie|applebot|arale|araneo|AraybOt|ariadne|arks|aspseek|ATN_Worldwide|Atomz|baiduspider|baidu|bbot|bingbot|bing|Bjaaland|BlackWidow|BotLink|bot|boxseabot|bspider|calif|CCBot|ChinaClaw|christcrawler|CMC\/0\.01|combine|confuzzledbot|contaxe|CoolBot|cosmos|crawler|crawlpaper|crawl|curl|cusco|cyberspyder|cydralspider|dataprovider|digger|DIIbot|DotBot|downloadexpress|DragonBot|DuckDuckBot|dwcp|EasouSpider|ebiness|ecollector|elfinbot|esculapio|ESI|esther|eStyle|Ezooms|facebookexternalhit|facebook|facebot|fastcrawler|FatBot|FDSE|FELIX IDE|fetch|fido|find|Firefly|fouineur|Freecrawl|froogle|gammaSpider|gazz|gcreep|geona|Getterrobo-Plus|get|girafabot|golem|googlebot|\-google|grabber|GrabNet|griffon|Gromit|gulliver|gulper|hambot|havIndex|hotwired|htdig|HTTrack|ia_archiver|iajabot|IDBot|Informant|InfoSeek|InfoSpiders|INGRID\/0\.1|inktomi|inspectorwww|Internet Cruiser Robot|irobot|Iron33|JBot|jcrawler|Jeeves|jobo|KDD\-Explorer|KIT\-Fireball|ko_yappo_robot|label\-grabber|larbin|legs|libwww-perl|linkedin|Linkidator|linkwalker|Lockon|logo_gif_crawler|Lycos|m2e|majesticsEO|marvin|mattie|mediafox|mediapartners|MerzScope|MindCrawler|MJ12bot|mod_pagespeed|moget|Motor|msnbot|muncher|muninn|MuscatFerret|MwdSearch|NationalDirectory|naverbot|NEC\-MeshExplorer|NetcraftSurveyAgent|NetScoop|NetSeer|newscan\-online|nil|none|Nutch|ObjectsSearch|Occam|openstat.ru\/Bot|packrat|pageboy|ParaSite|patric|pegasus|perlcrawler|phpdig|piltdownman|Pimptrain|pingdom|pinterest|pjspider|PlumtreeWebAccessor|PortalBSpider|psbot|rambler|Raven|RHCS|RixBot|roadrunner|Robbie|robi|RoboCrawl|robofox|Scooter|Scrubby|Search\-AU|searchprocess|search|SemrushBot|Senrigan|seznambot|Shagseeker|sharp\-info\-agent|sift|SimBot|Site Valet|SiteSucker|skymob|SLCrawler\/2\.0|slurp|snooper|solbot|speedy|spider_monkey|SpiderBot\/1\.0|spiderline|spider|suke|tach_bw|TechBOT|TechnoratiSnoop|templeton|teoma|titin|topiclink|twitterbot|twitter|UdmSearch|Ukonline|UnwindFetchor|URL_Spider_SQL|urlck|urlresolver|Valkyrie libwww\-perl|verticrawl|Victoria|void\-bot|Voyager|VWbot_K|wapspider|WebBandit\/1\.0|webcatcher|WebCopier|WebFindBot|WebLeacher|WebMechanic|WebMoose|webquest|webreaper|webspider|webs|WebWalker|WebZip|wget|whowhere|winona|wlm|WOLP|woriobot|WWWC|XGET|xing|yahoo|YandexBot|YandexMobileBot|yandex|yeti|Zeus/i', $_SERVER['HTTP_USER_AGENT'])
  ) {
      return 1; // 'Above given bots detected'
  }

  return 0;

} // End :: isBotDetected()

function ziyaretciler(){

  $ip       = GetIP();
  $getTarih = date("Y-m-d");
  
  if(isLogin2()==false){

    $sql  = sql("SELECT * FROM sayac_ip WHERE ip=? and tarih=? LIMIT 1",array($ip,$getTarih));

    if($sql) {
      $tiklama  = $sql[0]["tiklama"]+1;
      update("sayac_ip",array("tiklama"=>$sql[0]["tiklama"]+1),array("id"=>$sql[0]["id"]));
    }else{
      insert("sayac_ip",array("ip" => $ip,"tiklama"=>1,"tarih" =>$getTarih));
    }
    
    $refLink = empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER'];

    insert("ziyaretciler",
                          array(
                            "ip" =>GetIP(),
                            "ulke" =>ip_info($ip, "Country"),
                            "il" =>ip_info($ip, "state"),
                            "ilce" =>ip_info($ip, "City"),
                            "browser" => getBrowser(),
                            "os"  => getOS(),
                            "mobile" => detectMobile(),
                            "bot" =>  isBotDetected(),
                            "tarih" =>  $getTarih,
                            "referer" =>  $refLink,
                            "page" =>  $_SERVER["REQUEST_URI"]
                            
                          ));

  }
} // function ziyaretciler()

  function fileSizeCheck($Files,$maxsize){

    $maxsize = $maxsize * pow(1024, 2); /* Bayt 0, KB 1, MB 2, GB 3, TB 4 */   
  
    if(is_array($Files["name"])){
  
        $dosya_sayi	= @count($Files['name']);
   
        for($i=0;$i<$dosya_sayi;$i++){ 
               
    
            if ($Files["size"][$i] > $maxsize) {
  
                return false;
            }
    
        } // for($i=0;$i<$dosya_sayi;$i++)
  
    }else{
  
        if ($Files['size'] > $maxsize) {
  
            return false;
        }
  
    } // if($files["name"][0])
    return true;
  }
  
  function kategorilerOption($id, $katAD="",$selectIDs=array(),$ilkKatAD=""){

    if($ilkKatAD=="") $ilkKatAD = $katAD;
                                                                                          
    $query = sql("SELECT * FROM kategoriler WHERE ustkategoriID = ? ORDER BY kategoriAdi ASC",array($id));
  
    if(count($query) > 0){
    
        foreach($query as $kategori){
  
          $katAD  = $katAD." > ".$kategori["kategoriAdi"];
          $katAD0 = $katAD;
  
          if(in_array($kategori["id"],$selectIDs)) $selected= "selected"; else $selected = "";
  
          echo '<option value="'.$kategori["id"].'" '.$selected.'>'.$katAD.'</option>';
  
          $query2 = sql("SELECT * FROM kategoriler WHERE ustkategoriID = ? ORDER BY id ASC",array($kategori["id"]));
  
          if(count($query2)>0) {
            kategorilerOption($kategori["id"],$katAD,$selectIDs);
            $katAD = $ilkKatAD;
          }else{
            $katAD = $ilkKatAD;
          }
  
  
        } // foreach($query as $kategori)
    } // if(count($query) > 0)
  } // kategorilerOption($id, $katAD="",$selectIDs="",$ilkKatAD="")  

  function kategorilerOption2($id, $katAD="",$selectIDs=array(),$ilkKatAD=""){

    if($ilkKatAD=="") $ilkKatAD = $katAD;
                                                                                          
    $query = sql("SELECT * FROM mutfak_kategoriler WHERE ustkategoriID = ? ORDER BY siralama ASC",array($id));
  
    if(count($query) > 0){
    
        foreach($query as $kategori){
  
          $katAD  = $katAD." > ".$kategori["kategoriAdi"];
          $katAD0 = $katAD;
  
          if(in_array($kategori["id"],$selectIDs)) $selected= "selected"; else $selected = "";
  
          echo '<option value="'.$kategori["id"].'" '.$selected.'>'.$katAD.'</option>';
  
          $query2 = sql("SELECT * FROM mutfak_kategoriler WHERE ustkategoriID = ? ORDER BY id ASC",array($kategori["id"]));
  
          if(count($query2)>0) {
            kategorilerOption($kategori["id"],$katAD,$selectIDs);
            $katAD = $ilkKatAD;
          }else{
            $katAD = $ilkKatAD;
          }
  
  
        } // foreach($query as $kategori)
    } // if(count($query) > 0)
  } // kategorilerOption($id, $katAD="",$selectIDs="",$ilkKatAD="") 

function textUpper($text){

  global $lang;

  if($lang=="tr"){
    $text2  =   case_upper_tr($text);

  }elseif($lang=="en"){
    $text2  =   strtoupper($text);
  }  
  return $text2;

} // function textUpper($text)

function textUcwords($text){

  global $lang;

  if($lang=="tr"){
    $text2  =   ucwords_tr($text);

  }elseif($lang=="en"){
    $text2  =   ucwords($text);
  }  
  return $text2;

} // function textUcwords($text)


  