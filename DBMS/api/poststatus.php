<?php
/**
 * SocialPlus - A light and agile social network
 *
 * @author      Subrot Sundewar <subrot2895@gmail.com>
 * @copyright   2015 Subrot Sundewar
 * @link        http://www.github.com/subrot2895/My-Projects/socialplus
 * @license     MIT licence
 * @version     1.0
 * @package     socialplus
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace socialplus\api;
require_once('../core/DB.php');
require_once('../core/User.php');
require_once('../core/Posts.php');
include('login.php');


if(isset($_POST['extra']))
{

	$status=$_POST['status'];
	$extra=$_POST['extra'];
	$exp=explode('/',$extra);
	$extra=$exp[5].'/'.$exp[6].'/'.$exp[7];
	if($user->PostStatus(2,$status,$extra))
		echo 1;
	else echo 0;
}
else
{
	$status=$_POST['status'];
	if($user->PostStatus(1,$status,''))
		echo 1;
	else echo 0;
}

?>
