<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->post('/api/signup', function(Request $request, Response $response) {
        require __DIR__ . '/../db/db.php';
        if($con === false){ 
            $response->getBody()->write('not connected!');
        }else{
            $contentType = $request->getHeaderLine('Content-Type');
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $type_id = $_POST['type_id'];
            $insert = "insert into accounts(email, pass, type_id, name) values('$email', '$pass', '$type_id', '$name')";
            $run = mysqli_query($con, $insert);
            return $response
            ->withHeader('Location', 'http://localhost/heavyhire/client/login.php')
            ->withStatus(302);
        }
    });

    $app->get('/api/login', function(Request $request, Response $response){
        require __DIR__ . '/../db/db.php';
        if($con === false){ 
            $response->getBody()->write('not connected!');
        }else{
            $email = $_GET['email'];
            $pass = $_GET['pass'];
            $select = "select * from accounts";
            $run = mysqli_query($con, $select);
            while($row = mysqli_fetch_array($run)){
                $email_db = $row['email'];
                if($email_db == $email){
                    $pass_db = $row['pass'];
                    if($pass_db == $pass){
                        return $response
                        ->withHeader('Location', 'http://localhost/heavyhire/client/index.php')
                        ->withStatus(302);
                    }else{
                        echo "<script>console.log('You entered wrong email/password');</script>";
                    }
                }
            }
            echo "<script>console.log('You entered wrong email/password');</script>";
            return $response
                    ->withHeader('Location', 'http://localhost/heavyhire/client/signup.php')
                    ->withStatus(302);
        }
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
