<?php
class RequireLogin extends CBehavior
{

    public function attach($owner)
    {
        $owner->attachEventHandler('onBeginRequest', array($this, 'handleBeginRequest'));
    }

    public function handleBeginRequest($event)
    {
		$app = Yii::app();
		$user = $app->user;

		$request = trim($app->urlManager->parseUrl($app->request), '/');
		$login = trim(is_array($user->loginUrl) ? $user->loginUrl[0] : $user->loginUrl, '/');

		// Restrict guests to public pages.
		$allowed = array($login);
		if ($user->isGuest && !in_array($request, $allowed))
			$user->loginRequired();

		// Prevent logged in users from viewing the login page.
		$request = substr($request, 0, strlen($login));
		if (!$user->isGuest && $request == $login)
		{
			$url = $app->createUrl($app->homeUrl[0]);
			$app->request->redirect($url);
		}
/*
	    if (Yii::app()->user->isGuest && !in_array($_SERVER['REQUEST_URI'],array('/login','/user/login'))) {
            dd($_SERVER,Yii::app()->baseUrl);
            Yii::app()->user->loginRequired();
        }
*/
    }
}
?>