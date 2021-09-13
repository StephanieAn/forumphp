<?php
declare(strict_types=1);
require_once '../app/Config/config.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require '../app/Model/User.php';
require '../app/Model/Topic.php';
require '../app/Model/Board.php';
require '../app/Model/Message.php';

//Include all your controller files here
require '../app/Controllers/MessageController.php';
require '../app/Controllers/TopicController.php';
require '../app/Controllers/UserController.php';
require '../app/Controllers/HomepageController.php';
require '../app/Controllers/BoardController.php';

// Get the current page to load
// If nothing is specified, it will remain empty (home should be loaded)
$page = $_GET['page'] ?? null;

// Load the controller
// It will *control* the rest of the work to load the page
switch ($page) {
    case 'users-index':
        // This is shorthand for:
        // $articleController = new ArticleController;
        // $articleController->index();
        (new UserController()) -> index();
        break;
    case 'users-show':
        (new UserController()) -> show();
        break;
    case 'topics-index':
        (new TopicController()) -> index();
        break;
    case 'topics-show':
        (new TopicController()) -> show();
        break;
    case 'messages-index':
        (new MessageController()) -> index();
        break;
    case 'messages-show':
        (new MessageController()) -> show();
        break;
    // case 'boards-index':
    //     (new BoardController()) -> index();
    //     break;
    // case 'boards-show':
    //     (new BoardController()) -> show();
    //     break;
    case 'home':
    default:
        (new HomepageController()) -> index();
        break;
}

?>