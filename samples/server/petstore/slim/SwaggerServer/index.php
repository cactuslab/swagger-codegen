<?php
/**
 * Swagger Petstore
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * POST createUser
 * Summary: Create user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/user', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing createUser as a POST method ?');
            return $response;
            });


/**
 * POST createUsersWithArrayInput
 * Summary: Creates list of users with given input array
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/user/createWithArray', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing createUsersWithArrayInput as a POST method ?');
            return $response;
            });


/**
 * POST createUsersWithListInput
 * Summary: Creates list of users with given input array
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/user/createWithList', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing createUsersWithListInput as a POST method ?');
            return $response;
            });


/**
 * GET loginUser
 * Summary: Logs user into the system
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/user/login', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $qp_username = $queryParams['username'];    $qp_password = $queryParams['password'];    
            
            
            $response->write('How about implementing loginUser as a GET method ?');
            return $response;
            });


/**
 * GET logoutUser
 * Summary: Logs out current logged in user session
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/user/logout', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing logoutUser as a GET method ?');
            return $response;
            });


/**
 * GET getUserByName
 * Summary: Get user by user name
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/user/{username}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getUserByName as a GET method ?');
            return $response;
            });


/**
 * PUT updateUser
 * Summary: Updated user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/xml, application/json]
 */
$app->PUT('/user/{username}', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing updateUser as a PUT method ?');
            return $response;
            });


/**
 * DELETE deleteUser
 * Summary: Delete user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/xml, application/json]
 */
$app->DELETE('/user/{username}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing deleteUser as a DELETE method ?');
            return $response;
            });


/**
 * GET getInventory
 * Summary: Returns pet inventories by status
 * Notes: Returns a map of status codes to quantities
 * Output-Formats: [application/json]
 */
$app->GET('/store/inventory', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getInventory as a GET method ?');
            return $response;
            });


/**
 * POST placeOrder
 * Summary: Place an order for a pet
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/store/order', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing placeOrder as a POST method ?');
            return $response;
            });


/**
 * GET getOrderById
 * Summary: Find purchase order by ID
 * Notes: For valid response try integer IDs with value &lt;= 5 or &gt; 10. Other values will generated exceptions
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/store/order/{orderId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getOrderById as a GET method ?');
            return $response;
            });


/**
 * DELETE deleteOrder
 * Summary: Delete purchase order by ID
 * Notes: For valid response try integer IDs with value &lt; 1000. Anything above 1000 or nonintegers will generate API errors
 * Output-Formats: [application/xml, application/json]
 */
$app->DELETE('/store/order/{orderId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing deleteOrder as a DELETE method ?');
            return $response;
            });


/**
 * PUT updatePet
 * Summary: Update an existing pet
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->PUT('/pet', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing updatePet as a PUT method ?');
            return $response;
            });


/**
 * POST addPet
 * Summary: Add a new pet to the store
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/pet', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing addPet as a POST method ?');
            return $response;
            });


/**
 * GET findPetsByStatus
 * Summary: Finds Pets by status
 * Notes: Multiple status values can be provided with comma seperated strings
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/pet/findByStatus', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $qp_status = $queryParams['status'];    
            
            
            $response->write('How about implementing findPetsByStatus as a GET method ?');
            return $response;
            });


/**
 * GET findPetsByTags
 * Summary: Finds Pets by tags
 * Notes: Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/pet/findByTags', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $qp_tags = $queryParams['tags'];    
            
            
            $response->write('How about implementing findPetsByTags as a GET method ?');
            return $response;
            });


/**
 * GET getPetById
 * Summary: Find pet by ID
 * Notes: Returns a single pet
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/pet/{petId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getPetById as a GET method ?');
            return $response;
            });


/**
 * POST updatePetWithForm
 * Summary: Updates a pet in the store with form data
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/pet/{petId}', function($request, $response, $args) {
            
            
            $fp_name = $args['name'];    $fp_status = $args['status'];    
            
            $response->write('How about implementing updatePetWithForm as a POST method ?');
            return $response;
            });


/**
 * DELETE deletePet
 * Summary: Deletes a pet
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->DELETE('/pet/{petId}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            
            
            
            $response->write('How about implementing deletePet as a DELETE method ?');
            return $response;
            });


/**
 * POST uploadFile
 * Summary: uploads an image
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->POST('/pet/{petId}/uploadImage', function($request, $response, $args) {
            
            
            $fp_additional_metadata = $args['additional_metadata'];    $fp_file = $args['file'];    
            
            $response->write('How about implementing uploadFile as a POST method ?');
            return $response;
            });



$app->run();
