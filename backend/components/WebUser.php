<?php
/**
 * CWebUser class file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * CWebUser represents the persistent state for a Web application user.
 *
 * CWebUser is used as an application component whose ID is 'user'.
 * Therefore, at any place one can access the user state via
 * <code>Yii::app()->user</code>.
 *
 * CWebUser should be used together with an {@link IUserIdentity identity}
 * which implements the actual authentication algorithm.
 *
 * A typical authentication process using CWebUser is as follows:
 * <ol>
 * <li>The user provides information needed for authentication.</li>
 * <li>An {@link IUserIdentity identity instance} is created with the user-provided information.</li>
 * <li>Call {@link IUserIdentity::authenticate} to check if the identity is valid.</li>
 * <li>If valid, call {@link CWebUser::login} to login the user, and
 *     Redirect the user browser to {@link returnUrl}.</li>
 * <li>If not valid, retrieve the error code or message from the identity
 * instance and display it.</li>
 * </ol>
 *
 * The property {@link id} and {@link name} are both identifiers
 * for the user. The former is mainly used internally (e.g. primary key), while
 * the latter is for display purpose (e.g. username). The {@link id} property
 * is a unique identifier for a user that is persistent
 * during the whole user session. It can be a username, or something else,
 * depending on the implementation of the {@link IUserIdentity identity class}.
 *
 * Both {@link id} and {@link name} are persistent during the user session.
 * Besides, an identity may have additional persistent data which can
 * be accessed by calling {@link getState}.
 * Note, when {@link allowAutoLogin cookie-based authentication} is enabled,
 * all these persistent data will be stored in cookie. Therefore, do not
 * store password or other sensitive data in the persistent storage. Instead,
 * you should store them directly in session on the server side if needed.
 *
 * @property boolean $isGuest Whether the current application user is a guest.
 * @property mixed $id The unique identifier for the user. If null, it means the user is a guest.
 * @property string $name The user name. If the user is not logged in, this will be {@link guestName}.
 * @property string $returnUrl The URL that the user should be redirected to after login.
 * @property string $stateKeyPrefix A prefix for the name of the session variables storing user session data.
 * @property array $flashes Flash messages (key => message).
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @version $Id$
 * @package system.web.auth
 * @since 1.0
 */
class WebUser extends CWebUser
{
	protected function beforeLogin($id,$states,$fromCookie)
	{
		parent::setReturnUrl('/User');
		return true;
	}
}
