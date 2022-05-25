<?php
/**
 * UserApiInterface
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\User;

/**
 * UserApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface UserApiInterface
{

    /**
     * Sets authentication method api_key
     *
     * @param string $value Value of the api_key authentication method.
     *
     * @return void
     */
    public function setapi_key($value);

    /**
     * Operation createUser
     *
     * Create user
     *
     * @param  \OpenAPI\Server\Model\User $user  Created user object (required)
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function createUser(User $user, &$responseCode, array &$responseHeaders): void;


    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array
     *
     * @param  \OpenAPI\Server\Model\User[] $user  List of user object (required)
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function createUsersWithArrayInput(array $user, &$responseCode, array &$responseHeaders): void;


    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array
     *
     * @param  \OpenAPI\Server\Model\User[] $user  List of user object (required)
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function createUsersWithListInput(array $user, &$responseCode, array &$responseHeaders): void;


    /**
     * Operation deleteUser
     *
     * Delete user
     *
     * @param  \string $username  The name that needs to be deleted (required)
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function deleteUser($username, &$responseCode, array &$responseHeaders): void;


    /**
     * Operation getUserByName
     *
     * Get user by user name
     *
     * @param  \string $username  The name that needs to be fetched. Use user1 for testing. (required)
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \OpenAPI\Server\Model\User
     */
    public function getUserByName($username, &$responseCode, array &$responseHeaders): array|\OpenAPI\Server\Model\User;


    /**
     * Operation loginUser
     *
     * Logs user into the system
     *
     * @param  \string $username  The user name for login (required)
     * @param  \string $password  The password for login in clear text (required)
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \string
     */
    public function loginUser($username, $password, &$responseCode, array &$responseHeaders): array|\string;


    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session
     *
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function logoutUser(&$responseCode, array &$responseHeaders): void;


    /**
     * Operation updateUser
     *
     * Updated user
     *
     * @param  \string $username  name that need to be deleted (required)
     * @param  \OpenAPI\Server\Model\User $user  Updated user object (required)
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function updateUser($username, User $user, &$responseCode, array &$responseHeaders): void;

}
