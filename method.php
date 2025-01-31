<?php



require_once('main.inc.php');
session_start();







if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case 'login':

                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];

                try {
                    $response = $client->post($conf->base_url . 'login', [
                        'json' => [
                            'login' => $username,
                            'password' => $password,
                        ],
                        'verify' => false
                    ]);
                    $data = json_decode($response->getBody(), true);

                    if (isset($data['success']) && $data['success']) {
                        $_SESSION['user'] = $data['success']['token'];
                        header('Location: ./dashboard.php');
                        exit;
                    } else {
                        echo json_encode(['error' => 'Invalid credentials']);
                        exit;
                    }
                } catch (\Exception $e) {

                    setcookie('login_error', 'Credenciales invalidas', time() + 3600, '/');
                    header('Location: ./login.php');
                    exit;
                }
                break;

            case 'sendMqtt':
                $input = file_get_contents('php://input');
                $request_data = json_decode($input, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    echo json_encode(['error' => 'Bad Request: Error encoding/decoding JSON: ' . json_last_error_msg()]);
                    exit;
                }

                if (!isset($request_data['uni_token'])) {
                    echo json_encode(['error' => 'uni_token is required']);
                    exit;
                }

                $uni_token = $request_data['uni_token'];
                $response = callDolibarrApi('domocleverapi/domocleverviviendas/sendmqtt', 'POST', ['uni_token' => $uni_token]);
                if (isset($response['error'])) {
                    http_response_code(404);
                    exit;
                }
                echo json_encode($response);
                break;

            case 'validateToken':
                $input = file_get_contents('php://input');
                $request_data = json_decode($input, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    echo json_encode(['error' => 'Bad Request: Error encoding/decoding JSON: ' . json_last_error_msg()]);
                    exit;
                }

                if (!isset($request_data['token'])) {
                    echo json_encode(['error' => 'token is required']);
                    exit;
                }

                $token = $request_data['token'];
                $response = callDolibarrApi('domocleverapi/domocleverviviendas/validateToken', 'POST', ['token' => $token]);
                if (isset($response['error'])) {
                    http_response_code(404);
                    exit;
                }
                echo json_encode($response);
                break;

            case 'validateTokenOpen':
                $input = file_get_contents('php://input');
                $request_data = json_decode($input, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    echo json_encode(['error' => 'Bad Request: Error encoding/decoding JSON: ' . json_last_error_msg()]);
                    exit;
                }

                if (!isset($request_data['token'])) {
                    echo json_encode(['error' => 'token is required']);
                    exit;
                }

                $token = $request_data['token'];
                $response = callDolibarrApi('domocleverapi/domocleverviviendas/validateTokenOpen', 'POST', ['token' => $token]);
                if (isset($response['error'])) {
                    http_response_code(404);
                    exit;
                }
                $response['message'] = 'Token validado correctamente';
                echo (json_encode($response));

                break;

            case 'createTemporaryToken':
                $input = file_get_contents('php://input');
                $request_data = json_decode($input, true);


                if (json_last_error() !== JSON_ERROR_NONE) {
                    echo json_encode(['error' => 'Bad Request: Error encoding/decoding JSON: ' . json_last_error_msg()]);
                    exit;
                }

                if (empty($request_data['fk_vivienda']) || empty($request_data['fecha_inicio']) || empty($request_data['fecha_final'])) {
                    echo json_encode(['error' => 'Required fields are missing']);
                    exit;
                }

                $response = callDolibarrApi('domocleverapi/domocleverviviendas/createtempotoken', 'POST', $request_data);
                if (isset($response['error'])) {
                    http_response_code(404);
                    exit;
                }
                echo (json_encode($response));

                break;

            default:
                http_response_code(404);
                echo json_encode(['error' => 'Invalid action']);
        }
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'No action specified']);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'get_apartments':
            $response = callDolibarrApi('domocleverapi/domocleverviviendas');
            if (isset($response['error'])) {
                http_response_code(404);
                exit;
            }
            echo json_encode($response);
            break;

        default:
            http_response_code(404);
            echo json_encode(['error' => 'Invalid action']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}
