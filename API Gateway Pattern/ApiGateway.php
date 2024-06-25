<?php

class ApiGateway {
    public function routeRequest() {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        switch (true) {
            case preg_match('/\/api\/users\/(\d+)/', $uri, $matches) && $method == 'GET':
                $this->getUser($matches[1]);
                break;

            case preg_match('/\/api\/orders\/(\d+)/', $uri, $matches) && $method == 'GET':
                $this->getOrder($matches[1]);
                break;

            default:
                $this->sendResponse(404, ['error' => 'Not Found']);
                break;
        }
    }

    private function getUser($userId) {
        // Simulate a request to the user service
        $userServiceUrl = "http://user-service/$userId";
        $response = file_get_contents($userServiceUrl);
        $this->sendResponse(200, json_decode($response, true));
    }

    private function getOrder($orderId) {
        // Simulate a request to the order service
        $orderServiceUrl = "http://order-service/$orderId";
        $response = file_get_contents($orderServiceUrl);
        $this->sendResponse(200, json_decode($response, true));
    }

    private function sendResponse($statusCode, $data) {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
?>
