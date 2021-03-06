<?php

return [
    ['GET',  "/", ["controller" => "DefaultController", "action" => "Index"]],

    ['GET',  "/signup", ["controller" => "UserController", "action" => "SignUp"]],
    ['POST', "/signup/process", ["controller" => "UserController", "action" => "SignUpProcess"]],
    ['GET',  "/login", ["controller" => "UserController", "action" => "Login"]],
    ['POST', "/login/process", ["controller" => "UserController", "action" => "LoginProcess"]],
    ['GET',  "/logout", ["controller" => "UserController", "action" => "LogoutProcess"]],
    ['GET',  "/profile", ["controller" => "UserController", "action" => "Profile"]],
    ['POST', "/profile/save", ["controller" => "UserController", "action" => "ProfileProcess"]],
    ['POST', "/profile/delete", ["controller" => "UserController", "action" => "DeleteProcess"]],

    ['GET',  "/code", ["controller" => "CodeController", "action" => "Blank"], ["template"=>"[\w]+"]], /* /code or /code?template=default */
    ['POST', "/code/fork", ["controller" => "CodeController", "action" => "Fork"]],
    ['POST', "/code/delete", ["controller" => "CodeController", "action" => "Delete"]],
    ['GET',  "/code/list", ["controller" => "CodeController", "action" => "List"]],
    ['POST', "/code/save", ["controller" => "CodeController", "action" => "SaveProcess"]],
    ['POST', "/code/unsaved", ["controller" => "CodeController", "action" => "UnsavedProcess"]],
    ['POST', "/code/layout", ["controller" => "CodeController", "action" => "LayoutProcess"]],

    ['GET',  "/:user/code/:hash", ["controller" => "CodeController", "action" => "Editor"], ["user"=>'[\w]+', "hash"=>'[\w]{10}']], /* /olton/code/wEAK85evGp */


    ['GET',  "/:user/full/:code", ["controller" => "CodeController", "action" => "Full"], ["user"=>'[\w]+', "code"=>'[\w]{10}']], /* /olton/full/wEAK85evGp */
    ['GET',  "/:user/debug/:code", ["controller" => "CodeController", "action" => "Debug"], ["user"=>'[\w]+', "code"=>'[\w]{10}']], /* /olton/debug/wEAK85evGp */

    ['GET',  "/oauth/github/login", ["controller" => "GithubOAuthController", "action" => "Login"]],
    ['GET',  "/oauth/github/return", ["controller" => "GithubOAuthController", "action" => "Return"]],
    ['GET',  "/oauth/gitlab/login", ["controller" => "GitlabOAuthController", "action" => "Login"]],
    ['GET',  "/oauth/gitlab/return", ["controller" => "GitlabOAuthController", "action" => "Return"]],
    ['GET',  "/oauth/twitter/login", ["controller" => "TwitterOAuthController", "action" => "Login"]],
    ['GET',  "/oauth/twitter/return", ["controller" => "TwitterOAuthController", "action" => "Return"]],

    ['GET', "/data/table", ["controller" => "InteractController", "action" => "TableData"]],

    ['POST', "/form/post", ["controller" => "InteractController", "action" => "FormPost"]],
];
