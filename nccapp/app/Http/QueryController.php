<?php

require './vendor/autoload.php';

// Create the services client

function searchCustomers($name = '') {
    // Create the customer client
    $customers = new GuzzleHttp\Client(['base_uri' => 'http://localhost:3000/']);

    if($name == '') {
        $response = $customers->request('GET', 'customers?_embed=orders');
    } else {
        $response = $customers->request('GET', 'customers?_embed=orders&&q=' . $name);
    }

    // Return the customers array
    $data = $response->getBody();

    return buildCustomersInfo(json_decode($data));
}

function buildCustomersInfo($customers) {
    $client = new GuzzleHttp\Client(['base_uri' => 'http://localhost:3000/']);
    $services = new GuzzleHttp\Client(['base_uri' => 'http://localhost:4000/']);

    foreach ($customers as $customer) {
        // Fetch the details of the order
        foreach ($customer->orders as $order) {
            $response = $client->request('GET', 'order_details/' . $order->orderId);
            $order->details = json_decode($response->getBody());

            $response = $services->request('GET', 'services/' . $order->details->serviceId);
            $order->product = json_decode($response->getBody());

            $response = $services->request('GET', 'suppliers/' . $order->product->supplierId);
            $order->supplier = json_decode($response->getBody());

            $response = $services->request('GET', 'categories/' . $order->product->categoryId);
            $order->category = json_decode($response->getBody());
        }
    }

    return $customers;
}