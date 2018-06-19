<?php

require_once "superjob.php";

$CLIENT_ID = "834";
$NIZHNEKAMSK_ID = "370897";
$CLIENT_SECRET = "v1.h0033f1e717cef540be328d916f08c30ffd98b5430820a4f16911a44f585cbef2615a0a3e.f243cc0aa25b200788acf207a4546112226d2a5c";

try
{
    $API = new SuperjobAPI();
    $API->setSecretKey($CLIENT_SECRET);

    $data = [];
    $page = 0;
    $more = false;

    do {
        $part = $API->vacancies([
            'id_client' => $NIZHNEKAMSK_ID,
            'page' => $page,
            'count' => 100
        ]);
        $page++;
        $add = $part['objects'];
        $more = $part['more'];
        $data = array_merge($data, $add);
    } while (count($add) && $more);

    $vacancies = [];

    if ( is_array($data) ) {
        foreach ($data as $vacancy) {
            $city = $vacancy['town']['title'] ? $vacancy['town']['title'] : 'Другие города';
            $address_parts = '';

            array_push($vacancies, array(
                'id' => $vacancy['id'],
                'profession' => $vacancy['profession'], // Должность
                'link' => $vacancy['link'], // Ссылка на вакансию
                'city' => $city, // Город
                'address' => $address_parts, // Адрес работы
                'timetable' => $vacancy['type_of_work']['title'], // Режим работы
                'payment' => $vacancy['payment'], // Точная зарплата
                'payment_from' => $vacancy['payment_from'], // Зарплата ОТ
                'payment_to' => $vacancy['payment_to'], // Зарплата ДО
                'published' => date(DATE_ATOM, intval($vacancy['date_published'])), // Дата публикации
                'experience' => $vacancy['experience']['title'] // Опыт работы
            ));
        }
    }

    var_dump($vacancies);
}
catch (SuperjobAPIException $e)
{
    $error = $e->getMessage();
}