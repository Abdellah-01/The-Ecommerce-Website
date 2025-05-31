<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
    exit;
}
?><!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>My Address</title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">

    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

</head>

<body class="preload-wrapper">
    
    <div id="wrapper">
        
        <!-- Header -->
        <?php require"header.php"; ?>

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">Address</div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- page-cart -->
        <section class="flat-spacing-11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="wrap-sidebar-account">
                            <ul class="my-account-nav">
                                <li><a href="my-account.php" class="my-account-nav-item ">Dashboard</a></li>
                                <li><a href="my-account-orders.php" class="my-account-nav-item">Orders</a></li>
                                <li><span class="my-account-nav-item active">Address</span></li>
                                <li><a href="my-account-edit.php" class="my-account-nav-item">Account Details</a></li>
                                <li><a href="my-account-wishlist.php" class="my-account-nav-item">Wishlist</a></li>
                                <li><a href="my-account-wallet.php" class="my-account-nav-item">Wallet</a></li>
                                <li><a href="logout.php" class="my-account-nav-item">Logout</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-9">
                        <div class="my-account-content account-address">
                            <div class="text-center widget-inner-address">
                                <button class="tf-btn btn-fill animate-hover-btn btn-address mb_20">Add a new
                                    address</button>
                                <form class="show-form-address wd-form-address" id="formnewAddress" action="#">
                                    <div class="title">Add a new address</div>
                                    <div class="box-field grid-2-lg">
                                        <div class="tf-field style-1">
                                            <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                id="firstname" name="first name">
                                            <label class="tf-field-label fw-4 text_black-2" for="firstname">First
                                                name</label>
                                        </div>
                                        <div class="tf-field style-1">
                                            <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                id="lastname" name="last name">
                                            <label class="tf-field-label fw-4 text_black-2" for="lastname">Last
                                                name</label>
                                        </div>
                                    </div>
                                    <div class="box-field">
                                        <div class="tf-field style-1">
                                            <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                id="company" name="company">
                                            <label class="tf-field-label fw-4 text_black-2"
                                                for="company">Company</label>
                                        </div>
                                    </div>
                                    <div class="box-field">
                                        <div class="tf-field style-1">
                                            <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                id="address" name="address">
                                            <label class="tf-field-label fw-4 text_black-2"
                                                for="address">Address</label>
                                        </div>
                                    </div>
                                    <div class="box-field">
                                        <div class="tf-field style-1">
                                            <input class="tf-field-input tf-input" placeholder=" " type="text" id="city"
                                                name="city">
                                            <label class="tf-field-label fw-4 text_black-2" for="city">City</label>
                                        </div>
                                    </div>
                                    <div class="box-field">
                                        <label for="country"
                                            class="mb_10 fw-4 text-start d-block text_black-2 ">Country/Region</label>
                                        <div class="select-custom">
                                            <select class="tf-select w-100" id="country" name="address[country]"
                                                data-default="">
                                                <option value="---" data-provinces="[]">---</option>
                                                <option value="Australia"
                                                    data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]">
                                                    Australia</option>
                                                <option value="Austria" data-provinces="[]">Austria</option>
                                                <option value="Belgium" data-provinces="[]">Belgium</option>
                                                <option value="Canada"
                                                    data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]">
                                                    Canada</option>
                                                <option value="Czech Republic" data-provinces="[]">Czechia</option>
                                                <option value="Denmark" data-provinces="[]">Denmark</option>
                                                <option value="Finland" data-provinces="[]">Finland</option>
                                                <option value="France" data-provinces="[]">France</option>
                                                <option value="Germany" data-provinces="[]">Germany</option>
                                                <option value="Hong Kong"
                                                    data-provinces="[['Hong Kong Island','Hong Kong Island'],['Kowloon','Kowloon'],['New Territories','New Territories']]">
                                                    Hong Kong SAR</option>
                                                <option value="Ireland"
                                                    data-provinces="[['Carlow','Carlow'],['Cavan','Cavan'],['Clare','Clare'],['Cork','Cork'],['Donegal','Donegal'],['Dublin','Dublin'],['Galway','Galway'],['Kerry','Kerry'],['Kildare','Kildare'],['Kilkenny','Kilkenny'],['Laois','Laois'],['Leitrim','Leitrim'],['Limerick','Limerick'],['Longford','Longford'],['Louth','Louth'],['Mayo','Mayo'],['Meath','Meath'],['Monaghan','Monaghan'],['Offaly','Offaly'],['Roscommon','Roscommon'],['Sligo','Sligo'],['Tipperary','Tipperary'],['Waterford','Waterford'],['Westmeath','Westmeath'],['Wexford','Wexford'],['Wicklow','Wicklow']]">
                                                    Ireland</option>
                                                <option value="Israel" data-provinces="[]">Israel</option>
                                                <option value="Italy"
                                                    data-provinces="[['Agrigento','Agrigento'],['Alessandria','Alessandria'],['Ancona','Ancona'],['Aosta','Aosta Valley'],['Arezzo','Arezzo'],['Ascoli Piceno','Ascoli Piceno'],['Asti','Asti'],['Avellino','Avellino'],['Bari','Bari'],['Barletta-Andria-Trani','Barletta-Andria-Trani'],['Belluno','Belluno'],['Benevento','Benevento'],['Bergamo','Bergamo'],['Biella','Biella'],['Bologna','Bologna'],['Bolzano','South Tyrol'],['Brescia','Brescia'],['Brindisi','Brindisi'],['Cagliari','Cagliari'],['Caltanissetta','Caltanissetta'],['Campobasso','Campobasso'],['Carbonia-Iglesias','Carbonia-Iglesias'],['Caserta','Caserta'],['Catania','Catania'],['Catanzaro','Catanzaro'],['Chieti','Chieti'],['Como','Como'],['Cosenza','Cosenza'],['Cremona','Cremona'],['Crotone','Crotone'],['Cuneo','Cuneo'],['Enna','Enna'],['Fermo','Fermo'],['Ferrara','Ferrara'],['Firenze','Florence'],['Foggia','Foggia'],['Forlì-Cesena','Forlì-Cesena'],['Frosinone','Frosinone'],['Genova','Genoa'],['Gorizia','Gorizia'],['Grosseto','Grosseto'],['Imperia','Imperia'],['Isernia','Isernia'],['L'Aquila','L’Aquila'],['La Spezia','La Spezia'],['Latina','Latina'],['Lecce','Lecce'],['Lecco','Lecco'],['Livorno','Livorno'],['Lodi','Lodi'],['Lucca','Lucca'],['Macerata','Macerata'],['Mantova','Mantua'],['Massa-Carrara','Massa and Carrara'],['Matera','Matera'],['Medio Campidano','Medio Campidano'],['Messina','Messina'],['Milano','Milan'],['Modena','Modena'],['Monza e Brianza','Monza and Brianza'],['Napoli','Naples'],['Novara','Novara'],['Nuoro','Nuoro'],['Ogliastra','Ogliastra'],['Olbia-Tempio','Olbia-Tempio'],['Oristano','Oristano'],['Padova','Padua'],['Palermo','Palermo'],['Parma','Parma'],['Pavia','Pavia'],['Perugia','Perugia'],['Pesaro e Urbino','Pesaro and Urbino'],['Pescara','Pescara'],['Piacenza','Piacenza'],['Pisa','Pisa'],['Pistoia','Pistoia'],['Pordenone','Pordenone'],['Potenza','Potenza'],['Prato','Prato'],['Ragusa','Ragusa'],['Ravenna','Ravenna'],['Reggio Calabria','Reggio Calabria'],['Reggio Emilia','Reggio Emilia'],['Rieti','Rieti'],['Rimini','Rimini'],['Roma','Rome'],['Rovigo','Rovigo'],['Salerno','Salerno'],['Sassari','Sassari'],['Savona','Savona'],['Siena','Siena'],['Siracusa','Syracuse'],['Sondrio','Sondrio'],['Taranto','Taranto'],['Teramo','Teramo'],['Terni','Terni'],['Torino','Turin'],['Trapani','Trapani'],['Trento','Trentino'],['Treviso','Treviso'],['Trieste','Trieste'],['Udine','Udine'],['Varese','Varese'],['Venezia','Venice'],['Verbano-Cusio-Ossola','Verbano-Cusio-Ossola'],['Vercelli','Vercelli'],['Verona','Verona'],['Vibo Valentia','Vibo Valentia'],['Vicenza','Vicenza'],['Viterbo','Viterbo']]">
                                                    Italy</option>
                                                <option value="Japan"
                                                    data-provinces="[['Aichi','Aichi'],['Akita','Akita'],['Aomori','Aomori'],['Chiba','Chiba'],['Ehime','Ehime'],['Fukui','Fukui'],['Fukuoka','Fukuoka'],['Fukushima','Fukushima'],['Gifu','Gifu'],['Gunma','Gunma'],['Hiroshima','Hiroshima'],['Hokkaidō','Hokkaido'],['Hyōgo','Hyogo'],['Ibaraki','Ibaraki'],['Ishikawa','Ishikawa'],['Iwate','Iwate'],['Kagawa','Kagawa'],['Kagoshima','Kagoshima'],['Kanagawa','Kanagawa'],['Kumamoto','Kumamoto'],['Kyōto','Kyoto'],['Kōchi','Kochi'],['Mie','Mie'],['Miyagi','Miyagi'],['Miyazaki','Miyazaki'],['Nagano','Nagano'],['Nagasaki','Nagasaki'],['Nara','Nara'],['Niigata','Niigata'],['Okayama','Okayama'],['Okinawa','Okinawa'],['Saga','Saga'],['Saitama','Saitama'],['Shiga','Shiga'],['Shimane','Shimane'],['Shizuoka','Shizuoka'],['Tochigi','Tochigi'],['Tokushima','Tokushima'],['Tottori','Tottori'],['Toyama','Toyama'],['Tōkyō','Tokyo'],['Wakayama','Wakayama'],['Yamagata','Yamagata'],['Yamaguchi','Yamaguchi'],['Yamanashi','Yamanashi'],['Ōita','Oita'],['Ōsaka','Osaka']]">
                                                    Japan</option>
                                                <option value="Malaysia"
                                                    data-provinces="[['Johor','Johor'],['Kedah','Kedah'],['Kelantan','Kelantan'],['Kuala Lumpur','Kuala Lumpur'],['Labuan','Labuan'],['Melaka','Malacca'],['Negeri Sembilan','Negeri Sembilan'],['Pahang','Pahang'],['Penang','Penang'],['Perak','Perak'],['Perlis','Perlis'],['Putrajaya','Putrajaya'],['Sabah','Sabah'],['Sarawak','Sarawak'],['Selangor','Selangor'],['Terengganu','Terengganu']]">
                                                    Malaysia</option>
                                                <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                                <option value="New Zealand"
                                                    data-provinces="[['Auckland','Auckland'],['Bay of Plenty','Bay of Plenty'],['Canterbury','Canterbury'],['Chatham Islands','Chatham Islands'],['Gisborne','Gisborne'],['Hawke's Bay','Hawke’s Bay'],['Manawatu-Wanganui','Manawatū-Whanganui'],['Marlborough','Marlborough'],['Nelson','Nelson'],['Northland','Northland'],['Otago','Otago'],['Southland','Southland'],['Taranaki','Taranaki'],['Tasman','Tasman'],['Waikato','Waikato'],['Wellington','Wellington'],['West Coast','West Coast']]">
                                                    New Zealand</option>
                                                <option value="Norway" data-provinces="[]">Norway</option>
                                                <option value="Poland" data-provinces="[]">Poland</option>
                                                <option value="Portugal"
                                                    data-provinces="[['Aveiro','Aveiro'],['Açores','Azores'],['Beja','Beja'],['Braga','Braga'],['Bragança','Bragança'],['Castelo Branco','Castelo Branco'],['Coimbra','Coimbra'],['Faro','Faro'],['Guarda','Guarda'],['Leiria','Leiria'],['Lisboa','Lisbon'],['Madeira','Madeira'],['Portalegre','Portalegre'],['Porto','Porto'],['Santarém','Santarém'],['Setúbal','Setúbal'],['Viana do Castelo','Viana do Castelo'],['Vila Real','Vila Real'],['Viseu','Viseu'],['Évora','Évora']]">
                                                    Portugal</option>
                                                <option value="Singapore" data-provinces="[]">Singapore</option>
                                                <option value="South Korea"
                                                    data-provinces="[['Busan','Busan'],['Chungbuk','North Chungcheong'],['Chungnam','South Chungcheong'],['Daegu','Daegu'],['Daejeon','Daejeon'],['Gangwon','Gangwon'],['Gwangju','Gwangju City'],['Gyeongbuk','North Gyeongsang'],['Gyeonggi','Gyeonggi'],['Gyeongnam','South Gyeongsang'],['Incheon','Incheon'],['Jeju','Jeju'],['Jeonbuk','North Jeolla'],['Jeonnam','South Jeolla'],['Sejong','Sejong'],['Seoul','Seoul'],['Ulsan','Ulsan']]">
                                                    South Korea</option>
                                                <option value="Spain"
                                                    data-provinces="[['A Coruña','A Coruña'],['Albacete','Albacete'],['Alicante','Alicante'],['Almería','Almería'],['Asturias','Asturias Province'],['Badajoz','Badajoz'],['Balears','Balears Province'],['Barcelona','Barcelona'],['Burgos','Burgos'],['Cantabria','Cantabria Province'],['Castellón','Castellón'],['Ceuta','Ceuta'],['Ciudad Real','Ciudad Real'],['Cuenca','Cuenca'],['Cáceres','Cáceres'],['Cádiz','Cádiz'],['Córdoba','Córdoba'],['Girona','Girona'],['Granada','Granada'],['Guadalajara','Guadalajara'],['Guipúzcoa','Gipuzkoa'],['Huelva','Huelva'],['Huesca','Huesca'],['Jaén','Jaén'],['La Rioja','La Rioja Province'],['Las Palmas','Las Palmas'],['León','León'],['Lleida','Lleida'],['Lugo','Lugo'],['Madrid','Madrid Province'],['Melilla','Melilla'],['Murcia','Murcia'],['Málaga','Málaga'],['Navarra','Navarra'],['Ourense','Ourense'],['Palencia','Palencia'],['Pontevedra','Pontevedra'],['Salamanca','Salamanca'],['Santa Cruz de Tenerife','Santa Cruz de Tenerife'],['Segovia','Segovia'],['Sevilla','Seville'],['Soria','Soria'],['Tarragona','Tarragona'],['Teruel','Teruel'],['Toledo','Toledo'],['Valencia','Valencia'],['Valladolid','Valladolid'],['Vizcaya','Biscay'],['Zamora','Zamora'],['Zaragoza','Zaragoza'],['Álava','Álava'],['Ávila','Ávila']]">
                                                    Spain</option>
                                                <option value="Sweden" data-provinces="[]">Sweden</option>
                                                <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                                <option value="United Arab Emirates"
                                                    data-provinces="[['Abu Dhabi','Abu Dhabi'],['Ajman','Ajman'],['Dubai','Dubai'],['Fujairah','Fujairah'],['Ras al-Khaimah','Ras al-Khaimah'],['Sharjah','Sharjah'],['Umm al-Quwain','Umm al-Quwain']]">
                                                    United Arab Emirates</option>
                                                <option value="United Kingdom"
                                                    data-provinces="[['British Forces','British Forces'],['England','England'],['Northern Ireland','Northern Ireland'],['Scotland','Scotland'],['Wales','Wales']]">
                                                    United Kingdom</option>
                                                <option value="United States"
                                                    data-provinces="[['Alabama','Alabama'],['Alaska','Alaska'],['American Samoa','American Samoa'],['Arizona','Arizona'],['Arkansas','Arkansas'],['Armed Forces Americas','Armed Forces Americas'],['Armed Forces Europe','Armed Forces Europe'],['Armed Forces Pacific','Armed Forces Pacific'],['California','California'],['Colorado','Colorado'],['Connecticut','Connecticut'],['Delaware','Delaware'],['District of Columbia','Washington DC'],['Federated States of Micronesia','Micronesia'],['Florida','Florida'],['Georgia','Georgia'],['Guam','Guam'],['Hawaii','Hawaii'],['Idaho','Idaho'],['Illinois','Illinois'],['Indiana','Indiana'],['Iowa','Iowa'],['Kansas','Kansas'],['Kentucky','Kentucky'],['Louisiana','Louisiana'],['Maine','Maine'],['Marshall Islands','Marshall Islands'],['Maryland','Maryland'],['Massachusetts','Massachusetts'],['Michigan','Michigan'],['Minnesota','Minnesota'],['Mississippi','Mississippi'],['Missouri','Missouri'],['Montana','Montana'],['Nebraska','Nebraska'],['Nevada','Nevada'],['New Hampshire','New Hampshire'],['New Jersey','New Jersey'],['New Mexico','New Mexico'],['New York','New York'],['North Carolina','North Carolina'],['North Dakota','North Dakota'],['Northern Mariana Islands','Northern Mariana Islands'],['Ohio','Ohio'],['Oklahoma','Oklahoma'],['Oregon','Oregon'],['Palau','Palau'],['Pennsylvania','Pennsylvania'],['Puerto Rico','Puerto Rico'],['Rhode Island','Rhode Island'],['South Carolina','South Carolina'],['South Dakota','South Dakota'],['Tennessee','Tennessee'],['Texas','Texas'],['Utah','Utah'],['Vermont','Vermont'],['Virgin Islands','U.S. Virgin Islands'],['Virginia','Virginia'],['Washington','Washington'],['West Virginia','West Virginia'],['Wisconsin','Wisconsin'],['Wyoming','Wyoming']]">
                                                    United States</option>
                                                <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="box-field">
                                        <div class="tf-field style-1">
                                            <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                id="AddressZipNew" name="AddressZipNew">
                                            <label class="tf-field-label fw-4 text_black-2"
                                                for="AddressZipNew">Postal/ZIP code</label>
                                        </div>
                                    </div>
                                    <div class="box-field">
                                        <div class="tf-field style-1">
                                            <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                id="phone" name="phone">
                                            <label class="tf-field-label fw-4 text_black-2" for="phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="box-field text-start">
                                        <div class="box-checkbox fieldset-radio d-flex align-items-center gap-8">
                                            <input type="checkbox" id="check-new-address" class="tf-check">
                                            <label for="check-new-address" class="text_black-2 fw-4">Set as default
                                                address</a>.</label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center gap-20">
                                        <button type="button" class="tf-btn btn-fill animate-hover-btn">Add
                                            address</button>
                                        <span class="tf-btn btn-fill animate-hover-btn btn-hide-address">Cancel</span>
                                    </div>
                                </form>
                                
 <?php
include '../admin/dbcon.php';

$sqsl = mysqli_query($con, "SELECT 
customer_fname,
customer_lname, 
customer_email,
customer_mobile,  
billing_address, 
billing_address2, 
city, 
zipcode, 
country, 
SUM(total_price) as total_price 
FROM orders 
WHERE  customer_email='$email' 
GROUP BY order_id 
ORDER BY order_id DESC");
while($row=mysqli_fetch_array($sqsl))
{ 
    
    
    
    ?>

                                <div class="list-account-address">
                                    <div class="account-address-item">
                                        <h6 class="mb_20">Default</h6>
                                        <p><?php echo "$row[customer_fname]"; ?> <?php echo "$row[customer_lname]"; ?></p>
                                        <p><?php echo "$row[billing_address]"; ?>,</p>
                                        <p><?php echo "$row[billing_address2]"; ?></p>
                                        <p><?php echo "$row[country]"; ?></p>
                                        <p><?php echo "$row[customer_email]"; ?></p>
                                        <p class="mb_10"><?php echo "$row[customer_mobile]"; ?></p>
                                        <div class="d-flex gap-10 justify-content-center">
                                            <button
                                                class="tf-btn btn-fill animate-hover-btn justify-content-center btn-edit-address">
                                                <span>Edit</span>
                                            </button>
                                            <button class="tf-btn btn-outline animate-hover-btn justify-content-center">
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                        <form class="edit-form-address wd-form-address" id="formeditAddress" action="#">
                                            <div class="title">Edit address</div>
                                            <div class="box-field grid-2-lg">
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="firstnameEdit" name="first name">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="firstnameEdit">First name</label>
                                                </div>
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="lastnameEdit" name="last name">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="lastnameEdit">Last name</label>
                                                </div>
                                            </div>
                                            <div class="box-field">
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="companyEdit" name="company">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="companyEdit">Company</label>
                                                </div>
                                            </div>
                                            <div class="box-field">
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="addressEdit" name="address">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="addressEdit">Address</label>
                                                </div>
                                            </div>
                                            <div class="box-field">
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="cityEdit" name="city">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="cityEdit">City</label>
                                                </div>
                                            </div>
                                            <div class="box-field">
                                                <label for="countryEdit"
                                                    class="mb_10 fw-4 text-start d-block text_black-2">Country/Region</label>
                                                <div class="select-custom">
                                                    <select class="tf-select w-100" id="countryEdit"
                                                        name="address[country]" data-default="">
                                                        <option value="---" data-provinces="[]">---</option>
                                                        <option value="Australia"
                                                            data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]">
                                                            Australia</option>
                                                        <option value="Austria" data-provinces="[]">Austria</option>
                                                        <option value="Belgium" data-provinces="[]">Belgium</option>
                                                        <option value="Canada"
                                                            data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]">
                                                            Canada</option>
                                                        <option value="Czech Republic" data-provinces="[]">Czechia
                                                        </option>
                                                        <option value="Denmark" data-provinces="[]">Denmark</option>
                                                        <option value="Finland" data-provinces="[]">Finland</option>
                                                        <option value="France" data-provinces="[]">France</option>
                                                        <option value="Germany" data-provinces="[]">Germany</option>
                                                        <option value="Hong Kong"
                                                            data-provinces="[['Hong Kong Island','Hong Kong Island'],['Kowloon','Kowloon'],['New Territories','New Territories']]">
                                                            Hong Kong SAR</option>
                                                        <option value="Ireland"
                                                            data-provinces="[['Carlow','Carlow'],['Cavan','Cavan'],['Clare','Clare'],['Cork','Cork'],['Donegal','Donegal'],['Dublin','Dublin'],['Galway','Galway'],['Kerry','Kerry'],['Kildare','Kildare'],['Kilkenny','Kilkenny'],['Laois','Laois'],['Leitrim','Leitrim'],['Limerick','Limerick'],['Longford','Longford'],['Louth','Louth'],['Mayo','Mayo'],['Meath','Meath'],['Monaghan','Monaghan'],['Offaly','Offaly'],['Roscommon','Roscommon'],['Sligo','Sligo'],['Tipperary','Tipperary'],['Waterford','Waterford'],['Westmeath','Westmeath'],['Wexford','Wexford'],['Wicklow','Wicklow']]">
                                                            Ireland</option>
                                                        <option value="Israel" data-provinces="[]">Israel</option>
                                                        <option value="Italy"
                                                            data-provinces="[['Agrigento','Agrigento'],['Alessandria','Alessandria'],['Ancona','Ancona'],['Aosta','Aosta Valley'],['Arezzo','Arezzo'],['Ascoli Piceno','Ascoli Piceno'],['Asti','Asti'],['Avellino','Avellino'],['Bari','Bari'],['Barletta-Andria-Trani','Barletta-Andria-Trani'],['Belluno','Belluno'],['Benevento','Benevento'],['Bergamo','Bergamo'],['Biella','Biella'],['Bologna','Bologna'],['Bolzano','South Tyrol'],['Brescia','Brescia'],['Brindisi','Brindisi'],['Cagliari','Cagliari'],['Caltanissetta','Caltanissetta'],['Campobasso','Campobasso'],['Carbonia-Iglesias','Carbonia-Iglesias'],['Caserta','Caserta'],['Catania','Catania'],['Catanzaro','Catanzaro'],['Chieti','Chieti'],['Como','Como'],['Cosenza','Cosenza'],['Cremona','Cremona'],['Crotone','Crotone'],['Cuneo','Cuneo'],['Enna','Enna'],['Fermo','Fermo'],['Ferrara','Ferrara'],['Firenze','Florence'],['Foggia','Foggia'],['Forlì-Cesena','Forlì-Cesena'],['Frosinone','Frosinone'],['Genova','Genoa'],['Gorizia','Gorizia'],['Grosseto','Grosseto'],['Imperia','Imperia'],['Isernia','Isernia'],['L'Aquila','L’Aquila'],['La Spezia','La Spezia'],['Latina','Latina'],['Lecce','Lecce'],['Lecco','Lecco'],['Livorno','Livorno'],['Lodi','Lodi'],['Lucca','Lucca'],['Macerata','Macerata'],['Mantova','Mantua'],['Massa-Carrara','Massa and Carrara'],['Matera','Matera'],['Medio Campidano','Medio Campidano'],['Messina','Messina'],['Milano','Milan'],['Modena','Modena'],['Monza e Brianza','Monza and Brianza'],['Napoli','Naples'],['Novara','Novara'],['Nuoro','Nuoro'],['Ogliastra','Ogliastra'],['Olbia-Tempio','Olbia-Tempio'],['Oristano','Oristano'],['Padova','Padua'],['Palermo','Palermo'],['Parma','Parma'],['Pavia','Pavia'],['Perugia','Perugia'],['Pesaro e Urbino','Pesaro and Urbino'],['Pescara','Pescara'],['Piacenza','Piacenza'],['Pisa','Pisa'],['Pistoia','Pistoia'],['Pordenone','Pordenone'],['Potenza','Potenza'],['Prato','Prato'],['Ragusa','Ragusa'],['Ravenna','Ravenna'],['Reggio Calabria','Reggio Calabria'],['Reggio Emilia','Reggio Emilia'],['Rieti','Rieti'],['Rimini','Rimini'],['Roma','Rome'],['Rovigo','Rovigo'],['Salerno','Salerno'],['Sassari','Sassari'],['Savona','Savona'],['Siena','Siena'],['Siracusa','Syracuse'],['Sondrio','Sondrio'],['Taranto','Taranto'],['Teramo','Teramo'],['Terni','Terni'],['Torino','Turin'],['Trapani','Trapani'],['Trento','Trentino'],['Treviso','Treviso'],['Trieste','Trieste'],['Udine','Udine'],['Varese','Varese'],['Venezia','Venice'],['Verbano-Cusio-Ossola','Verbano-Cusio-Ossola'],['Vercelli','Vercelli'],['Verona','Verona'],['Vibo Valentia','Vibo Valentia'],['Vicenza','Vicenza'],['Viterbo','Viterbo']]">
                                                            Italy</option>
                                                        <option value="Japan"
                                                            data-provinces="[['Aichi','Aichi'],['Akita','Akita'],['Aomori','Aomori'],['Chiba','Chiba'],['Ehime','Ehime'],['Fukui','Fukui'],['Fukuoka','Fukuoka'],['Fukushima','Fukushima'],['Gifu','Gifu'],['Gunma','Gunma'],['Hiroshima','Hiroshima'],['Hokkaidō','Hokkaido'],['Hyōgo','Hyogo'],['Ibaraki','Ibaraki'],['Ishikawa','Ishikawa'],['Iwate','Iwate'],['Kagawa','Kagawa'],['Kagoshima','Kagoshima'],['Kanagawa','Kanagawa'],['Kumamoto','Kumamoto'],['Kyōto','Kyoto'],['Kōchi','Kochi'],['Mie','Mie'],['Miyagi','Miyagi'],['Miyazaki','Miyazaki'],['Nagano','Nagano'],['Nagasaki','Nagasaki'],['Nara','Nara'],['Niigata','Niigata'],['Okayama','Okayama'],['Okinawa','Okinawa'],['Saga','Saga'],['Saitama','Saitama'],['Shiga','Shiga'],['Shimane','Shimane'],['Shizuoka','Shizuoka'],['Tochigi','Tochigi'],['Tokushima','Tokushima'],['Tottori','Tottori'],['Toyama','Toyama'],['Tōkyō','Tokyo'],['Wakayama','Wakayama'],['Yamagata','Yamagata'],['Yamaguchi','Yamaguchi'],['Yamanashi','Yamanashi'],['Ōita','Oita'],['Ōsaka','Osaka']]">
                                                            Japan</option>
                                                        <option value="Malaysia"
                                                            data-provinces="[['Johor','Johor'],['Kedah','Kedah'],['Kelantan','Kelantan'],['Kuala Lumpur','Kuala Lumpur'],['Labuan','Labuan'],['Melaka','Malacca'],['Negeri Sembilan','Negeri Sembilan'],['Pahang','Pahang'],['Penang','Penang'],['Perak','Perak'],['Perlis','Perlis'],['Putrajaya','Putrajaya'],['Sabah','Sabah'],['Sarawak','Sarawak'],['Selangor','Selangor'],['Terengganu','Terengganu']]">
                                                            Malaysia</option>
                                                        <option value="Netherlands" data-provinces="[]">Netherlands
                                                        </option>
                                                        <option value="New Zealand"
                                                            data-provinces="[['Auckland','Auckland'],['Bay of Plenty','Bay of Plenty'],['Canterbury','Canterbury'],['Chatham Islands','Chatham Islands'],['Gisborne','Gisborne'],['Hawke's Bay','Hawke’s Bay'],['Manawatu-Wanganui','Manawatū-Whanganui'],['Marlborough','Marlborough'],['Nelson','Nelson'],['Northland','Northland'],['Otago','Otago'],['Southland','Southland'],['Taranaki','Taranaki'],['Tasman','Tasman'],['Waikato','Waikato'],['Wellington','Wellington'],['West Coast','West Coast']]">
                                                            New Zealand</option>
                                                        <option value="Norway" data-provinces="[]">Norway</option>
                                                        <option value="Poland" data-provinces="[]">Poland</option>
                                                        <option value="Portugal"
                                                            data-provinces="[['Aveiro','Aveiro'],['Açores','Azores'],['Beja','Beja'],['Braga','Braga'],['Bragança','Bragança'],['Castelo Branco','Castelo Branco'],['Coimbra','Coimbra'],['Faro','Faro'],['Guarda','Guarda'],['Leiria','Leiria'],['Lisboa','Lisbon'],['Madeira','Madeira'],['Portalegre','Portalegre'],['Porto','Porto'],['Santarém','Santarém'],['Setúbal','Setúbal'],['Viana do Castelo','Viana do Castelo'],['Vila Real','Vila Real'],['Viseu','Viseu'],['Évora','Évora']]">
                                                            Portugal</option>
                                                        <option value="Singapore" data-provinces="[]">Singapore</option>
                                                        <option value="South Korea"
                                                            data-provinces="[['Busan','Busan'],['Chungbuk','North Chungcheong'],['Chungnam','South Chungcheong'],['Daegu','Daegu'],['Daejeon','Daejeon'],['Gangwon','Gangwon'],['Gwangju','Gwangju City'],['Gyeongbuk','North Gyeongsang'],['Gyeonggi','Gyeonggi'],['Gyeongnam','South Gyeongsang'],['Incheon','Incheon'],['Jeju','Jeju'],['Jeonbuk','North Jeolla'],['Jeonnam','South Jeolla'],['Sejong','Sejong'],['Seoul','Seoul'],['Ulsan','Ulsan']]">
                                                            South Korea</option>
                                                        <option value="Spain"
                                                            data-provinces="[['A Coruña','A Coruña'],['Albacete','Albacete'],['Alicante','Alicante'],['Almería','Almería'],['Asturias','Asturias Province'],['Badajoz','Badajoz'],['Balears','Balears Province'],['Barcelona','Barcelona'],['Burgos','Burgos'],['Cantabria','Cantabria Province'],['Castellón','Castellón'],['Ceuta','Ceuta'],['Ciudad Real','Ciudad Real'],['Cuenca','Cuenca'],['Cáceres','Cáceres'],['Cádiz','Cádiz'],['Córdoba','Córdoba'],['Girona','Girona'],['Granada','Granada'],['Guadalajara','Guadalajara'],['Guipúzcoa','Gipuzkoa'],['Huelva','Huelva'],['Huesca','Huesca'],['Jaén','Jaén'],['La Rioja','La Rioja Province'],['Las Palmas','Las Palmas'],['León','León'],['Lleida','Lleida'],['Lugo','Lugo'],['Madrid','Madrid Province'],['Melilla','Melilla'],['Murcia','Murcia'],['Málaga','Málaga'],['Navarra','Navarra'],['Ourense','Ourense'],['Palencia','Palencia'],['Pontevedra','Pontevedra'],['Salamanca','Salamanca'],['Santa Cruz de Tenerife','Santa Cruz de Tenerife'],['Segovia','Segovia'],['Sevilla','Seville'],['Soria','Soria'],['Tarragona','Tarragona'],['Teruel','Teruel'],['Toledo','Toledo'],['Valencia','Valencia'],['Valladolid','Valladolid'],['Vizcaya','Biscay'],['Zamora','Zamora'],['Zaragoza','Zaragoza'],['Álava','Álava'],['Ávila','Ávila']]">
                                                            Spain</option>
                                                        <option value="Sweden" data-provinces="[]">Sweden</option>
                                                        <option value="Switzerland" data-provinces="[]">Switzerland
                                                        </option>
                                                        <option value="United Arab Emirates"
                                                            data-provinces="[['Abu Dhabi','Abu Dhabi'],['Ajman','Ajman'],['Dubai','Dubai'],['Fujairah','Fujairah'],['Ras al-Khaimah','Ras al-Khaimah'],['Sharjah','Sharjah'],['Umm al-Quwain','Umm al-Quwain']]">
                                                            United Arab Emirates</option>
                                                        <option value="United Kingdom"
                                                            data-provinces="[['British Forces','British Forces'],['England','England'],['Northern Ireland','Northern Ireland'],['Scotland','Scotland'],['Wales','Wales']]">
                                                            United Kingdom</option>
                                                        <option value="United States"
                                                            data-provinces="[['Alabama','Alabama'],['Alaska','Alaska'],['American Samoa','American Samoa'],['Arizona','Arizona'],['Arkansas','Arkansas'],['Armed Forces Americas','Armed Forces Americas'],['Armed Forces Europe','Armed Forces Europe'],['Armed Forces Pacific','Armed Forces Pacific'],['California','California'],['Colorado','Colorado'],['Connecticut','Connecticut'],['Delaware','Delaware'],['District of Columbia','Washington DC'],['Federated States of Micronesia','Micronesia'],['Florida','Florida'],['Georgia','Georgia'],['Guam','Guam'],['Hawaii','Hawaii'],['Idaho','Idaho'],['Illinois','Illinois'],['Indiana','Indiana'],['Iowa','Iowa'],['Kansas','Kansas'],['Kentucky','Kentucky'],['Louisiana','Louisiana'],['Maine','Maine'],['Marshall Islands','Marshall Islands'],['Maryland','Maryland'],['Massachusetts','Massachusetts'],['Michigan','Michigan'],['Minnesota','Minnesota'],['Mississippi','Mississippi'],['Missouri','Missouri'],['Montana','Montana'],['Nebraska','Nebraska'],['Nevada','Nevada'],['New Hampshire','New Hampshire'],['New Jersey','New Jersey'],['New Mexico','New Mexico'],['New York','New York'],['North Carolina','North Carolina'],['North Dakota','North Dakota'],['Northern Mariana Islands','Northern Mariana Islands'],['Ohio','Ohio'],['Oklahoma','Oklahoma'],['Oregon','Oregon'],['Palau','Palau'],['Pennsylvania','Pennsylvania'],['Puerto Rico','Puerto Rico'],['Rhode Island','Rhode Island'],['South Carolina','South Carolina'],['South Dakota','South Dakota'],['Tennessee','Tennessee'],['Texas','Texas'],['Utah','Utah'],['Vermont','Vermont'],['Virgin Islands','U.S. Virgin Islands'],['Virginia','Virginia'],['Washington','Washington'],['West Virginia','West Virginia'],['Wisconsin','Wisconsin'],['Wyoming','Wyoming']]">
                                                            United States</option>
                                                        <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box-field">
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="province" name="province">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="province">Province</label>
                                                </div>
                                            </div>
                                            <div class="box-field">
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="AddressZipNew" name="AddressZipNew">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="AddressZipNew">Postal/ZIP code</label>
                                                </div>
                                            </div>
                                            <div class="box-field">
                                                <div class="tf-field style-1">
                                                    <input class="tf-field-input tf-input" placeholder=" " type="text"
                                                        id="phone" name="phone">
                                                    <label class="tf-field-label fw-4 text_black-2"
                                                        for="phone">Phone</label>
                                                </div>
                                            </div>
                                            <div class="box-field text-start">
                                                <div
                                                    class="box-checkbox fieldset-radio d-flex align-items-center gap-8">
                                                    <input type="checkbox" id="check-edit-address" class="tf-check">
                                                    <label for="check-edit-address" class="text_black-2 fw-4">Set as
                                                        default address</a>.</label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center gap-20">
                                                <button type="button" class="tf-btn btn-fill animate-hover-btn">Update
                                                    address</button>
                                                <span
                                                    class="tf-btn btn-fill animate-hover-btn btn-hide-edit-address">Cancel</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
<br>
<?php }?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-cart -->

        <div class="btn-sidebar-account">
            <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount" aria-controls="offcanvas"><i
                    class="icon icon-sidebar-2"></i></button>
        </div>

        <!-- Footer -->
        <?php require"footer.php"; ?>

    </div>

    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>
    <!-- /gotop -->

    <!-- sidebar account-->
    <div class="offcanvas offcanvas-start canvas-filter canvas-sidebar canvas-sidebar-account" id="mbAccount">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <span class="title">SIDEBAR ACCOUNT</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </header>
            <div class="canvas-body sidebar-mobile-append">

            </div>

        </div>
    </div>
    <!-- End sidebar account -->

    <!-- toolbar-bottom -->
<?php require"toolbar-bottom.php"; ?>
    <!-- /toolbar-bottom -->

    <!-- Mobile Navigation -->
    <?php require"mob-header.php"; ?>



    <!-- canvasSearch -->
    <?php require"search.php"; ?>
    <!-- /canvasSearch -->

    <!-- Mobile Shopping Side bar -->
    <?php require "shop-cate.php"; ?>
    <!-- /Mobile Shopping Side bar -->

    <!-- modal login -->
    <?php require"model-login.php"; ?>

    <!-- modal compare -->
    <div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <div class="close-popup">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </header>
            <div class="canvas-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf-compare-list">
                                <div class="tf-compare-head">
                                    <div class="title">Compare Products</div>
                                </div>
                                <div class="tf-compare-offcanvas">
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-detail.php">
                                                <img class="radius-3" src="images/products/orange-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-detail.php">
                                                <img class="radius-3" src="images/products/pink-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-compare-buttons">
                                    <div class="tf-compare-buttons-wrap">
                                        <a href="compare.php"
                                            class="tf-btn radius-3 btn-fill justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn ">Compare</a>
                                        <div class="tf-compapre-button-clear-all link">
                                            Clear All
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal compare -->

    <!-- modal quick_add -->
    <div class="modal fade modalDemo" id="quick_add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-info-item">
                        <div class="image">
                            <img src="images/products/orange-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <a href="product-detail.php">Ribbed Tank Top</a>
                            <div class="tf-product-info-price">
                                <!-- <div class="price-on-sale">$8.00</div>
                                <div class="compare-at-price">$10.00</div>
                                <div class="badges-on-sale"><span>20</span>% OFF</div> -->
                                <div class="price">$18.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-variant-picker mb_15">
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                            </div>
                            <div class="variant-picker-values">
                                <input id="values-orange" type="radio" name="color" checked>
                                <label class="hover-tooltip radius-60" for="values-orange" data-value="Orange">
                                    <span class="btn-checkbox bg-color-orange"></span>
                                    <span class="tooltip">Orange</span>
                                </label>
                                <input id="values-black" type="radio" name="color">
                                <label class=" hover-tooltip radius-60" for="values-black" data-value="Black">
                                    <span class="btn-checkbox bg-color-black"></span>
                                    <span class="tooltip">Black</span>
                                </label>
                                <input id="values-white" type="radio" name="color">
                                <label class="hover-tooltip radius-60" for="values-white" data-value="White">
                                    <span class="btn-checkbox bg-color-white"></span>
                                    <span class="tooltip">White</span>
                                </label>
                            </div>
                        </div>
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Size: <span class="fw-6 variant-picker-label-value">S</span>
                            </div>
                            <div class="variant-picker-values">
                                <input type="radio" name="size" id="values-s" checked>
                                <label class="style-text" for="values-s" data-value="S">
                                    <p>S</p>
                                </label>
                                <input type="radio" name="size" id="values-m">
                                <label class="style-text" for="values-m" data-value="M">
                                    <p>M</p>
                                </label>
                                <input type="radio" name="size" id="values-l">
                                <label class="style-text" for="values-l" data-value="L">
                                    <p>L</p>
                                </label>
                                <input type="radio" name="size" id="values-xl">
                                <label class="style-text" for="values-xl" data-value="XL">
                                    <p>XL</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-quantity mb_15">
                        <div class="quantity-title fw-6">Quantity</div>
                        <div class="wg-quantity">
                            <span class="btn-quantity minus-btn">-</span>
                            <input type="text" name="number" value="1">
                            <span class="btn-quantity plus-btn">+</span>
                        </div>
                    </div>
                    <div class="tf-product-info-buy-button">
                        <form class="">
                            <a href="javascript:void(0);"
                                class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add
                                    to cart -&nbsp;</span><span class="tf-qty-price">$18.00</span></a>
                            <div class="tf-product-btn-wishlist btn-icon-action">
                                <i class="icon-heart"></i>
                                <i class="icon-delete"></i>
                            </div>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="icon icon-check"></span>
                            </a>
                            <div class="w-100">
                                <a href="#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                                <a href="#" class="payment-more-option">More payment options</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_add -->

    <!-- modal quick_view -->
    <?php require"size-chart.php"; ?>
    <!-- /modal quick_view -->

    <!-- modal find_size -->
    <?php require"size-chart.php"; ?>
    <!-- /modal find_size -->

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>

    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="js/sibforms.js" defer></script>

    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/my-account-address.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2025 08:27:07 GMT -->

</html>