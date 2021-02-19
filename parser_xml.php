<?php 
// Парсим xml файл
if (file_exists('flightplan70098.xml')) {
    $xml = simplexml_load_file('flightplan70098.xml');
} else {
    exit('Не удалось открыть файл test.xml.');    
}

///Присваем значение переменны 
$id = intval($xml["flightPlanId"][0]);
$fnum = strval($xml->M633SupplementaryHeader->Flight->FlightIdentification->FlightIdentifier);
$origin = strval($xml->M633SupplementaryHeader->Flight->DepartureAirport->AirportICAOCode);
$dest = strval($xml->M633SupplementaryHeader->Flight->ArrivalAirport->AirportICAOCode);
$type = strval($xml->M633SupplementaryHeader->Aircraft->AircraftModel->AircraftICAOType);
$etd = strval($xml->Remarks->Remark[0]->Paragraph->Text);


//Преобразуем в массив
$location_vars = array('id', 'origin', 'dest', 'type');
$result = compact($location_vars);
print_r("Данные были преобразованы в массив". "\n");
print_r($result);













?>