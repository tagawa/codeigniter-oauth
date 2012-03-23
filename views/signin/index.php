<style>
/*
 * CSS source: https://github.com/necolas/css3-social-signin-buttons
 * Button Object
 */

/*
 * 1. Corrects inability to style clickable 'input' types in iOS
 * 2. Remove excess padding in IE6/7
 * 3. IE6/7 inline-block hack for native block-level elements
 */

.btn-auth {
    position: relative;
    display: inline-block;
    height: 22px;
    padding: 0 1em;
    border: 1px solid #999;
    border-radius: 2px;
    margin: 0;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    line-height: 22px;
    white-space: nowrap;
    cursor: pointer;
    color: #222;
    background: #fff;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    /* iOS */
    -webkit-appearance: none; /* 1 */
    /* IE6/7 hacks */
    *overflow: visible;  /* 2 */
    *display: inline; /* 3 */
    *zoom: 1; /* 3 */
}

.btn-auth:hover,
.btn-auth:focus,
.btn-auth:active {
    color: #222;
    text-decoration: none;
}

.btn-auth:before {
    content: "";
    float: left;
    width: 22px;
    height: 22px;
    /* Please change the URL below to a local file */
    background: url(https://github.com/necolas/css3-social-signin-buttons/raw/master/auth-icons.png) no-repeat 99px 99px;
}

/*
 * 36px
 */

.btn-auth.large {
    height: 36px;
    line-height: 36px;
    font-size: 20px;
}

.btn-auth.large:before {
    width: 36px;
    height: 36px;
}

/*
 * Remove excess padding and border in FF3+
 */

.btn-auth::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/* Facebook (extends .btn-auth)
   ========================================================================== */

.btn-facebook {
    border-color: #29447e;
    border-bottom-color: #1a356e;
    color: #fff;
    background-color: #5872a7;
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#637bad), to(#5872a7));
    background-image: -webkit-linear-gradient(#637bad, #5872a7);
    background-image: -moz-linear-gradient(#637bad, #5872a7);
    background-image: -ms-linear-gradient(#637bad, #5872a7);
    background-image: -o-linear-gradient(#637bad, #5872a7);
    background-image: linear-gradient(#637bad, #5872a7);
    -webkit-box-shadow: inset 0 1px 0 #879ac0;
    box-shadow: inset 0 1px 0 #879ac0;
}

.btn-facebook:hover,
.btn-facebook:focus {
    color: #fff;
    background-color: #3b5998;
}

.btn-facebook:active {
    color: #fff;
    background: #4f6aa3;
    -webkit-box-shadow: inset 0 1px 0 #45619d;
    box-shadow: inset 0 1px 0 #45619d;
}

/*
 * Icon
 */

.btn-facebook:before {
    border-right: 1px solid #465f94;
    margin: 0 1em 0 -1em;
    background-position: 0 0;
}

.btn-facebook.large:before {
    background-position: 0 -22px;
}

/* Twitter
   ========================================================================== */

.btn-twitter {
    border-color: #a6cde6;
    color: #327695;
    background: #cfe4f0;
    /* css3 */
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f1f5f7), to(rgba(255,255,255,0)));
    background-image: -webkit-linear-gradient(#f1f5f7, rgba(255,255,255,0));
    background-image: -moz-linear-gradient(#f1f5f7, rgba(255,255,255,0));
    background-image: -ms-linear-gradient(#f1f5f7, rgba(255,255,255,0));
    background-image: -o-linear-gradient(#f1f5f7, rgba(255,255,255,0));
    background-image: linear-gradient(#f1f5f7, rgba(255,255,255,0));
    -webkit-box-shadow: inset 0 1px 0 #fff;
    box-shadow: inset 0 1px 0 #fff;
}

.btn-twitter:hover,
.btn-twitter:focus,
.btn-twitter:active {
    color: #327695;    
    border-color: #8dc2e4;
    background-color: #cadde9;
}

.btn-twitter:active {
    background: #cadde9;
    -webkit-box-shadow: inset 0 1px 0 #bbd6e7;
    box-shadow: inset 0 1px 0 #bbd6e7;
}

/*
 * Icon
 */

.btn-twitter:before {
    margin: 0 0.6em 0 -0.6em;
    background-position: -22px 0;
}

.btn-twitter.large:before {
    background-position: -36px -22px;
}
</style>

<?php
if (!empty($username)) {    
    echo('<p>Logged in as '.$username.'</p>
    <p><a href="./signin/logout">Logout</a></p>');
} else {
    echo('<p>Not logged in.</p>
    <p><a href="./signin/login/twitter" class="btn-auth btn-twitter large">Login with Twitter</a></p>
    <p><a href="./signin/login/facebook" class="btn-auth btn-twitter large">Login with Facebook</a></p>');
}
?>
