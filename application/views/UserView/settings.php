<html>
<head>
<meta charset="utf-8">
<title>Dashboard | UptimeRobot</title>
<meta name="description" content="Free Website Uptime Monitoring">

<meta property="og:title" content="Dashboard | UptimeRobot">
<meta property="og:site_name" content="UptimeRobot">
<meta property="og:description" content="Free Website Uptime Monitoring">
<!-- <meta property="og:image" content="https://www.uptimerobot.com/facebook.jpg?v=1648011330"> -->

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="author" content="">

<link href="<?php echo base_url('assets/css/lib/bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/lib/bootstrap-3-3-7-grid.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/lib/bootstrap-responsive.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/ur-extension.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/ur.css?v1.189'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/ur-coloring.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/ur-utility.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/lib/ladda-themeless.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/lib/cookieconsent.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/pl-form/noUiSlider/nouislider.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs2.css'); ?>">
<link href="<?php echo base_url('assets/img/apple-touch-icon-152.png" rel="apple-touch-icon'); ?>" sizes="152x152">

<!-- <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAAXNSR0IArs4c6QAAC35JREFUeF7tmnlw1EUWx7+v58p9kQQCiYRcyBlMQBIgu1lEkfVCKXYVJVILuKAbQEUQ8YgWigXCEigUArvghZaWkUNwRUqBlYV4oYGEQIIQTZArIZkQMpmZ36+3esLgJJnJ7zdHglXQf/7mdfd7n36v3+vuIVzjja5x+3EdwHUPuMYJXA+Ba9wBrm+Cv4sQmMgnauqLe/s1aCWDAVq9RUOsrWdyrWzVN1jNCAsz7Y7PawaB+8J7rxqA9G8f0WkCdSF6GLpx4iGQ4A9ifgDXEXFNa+OIcyZLnKNZAzRLEhpBmguSznzhhqTTjR/Sh5KnMLoWAAdllz4aaGL6SAbEcPAQ4qRl5Lji1MHK8iv6ck4SgZslTjVakk/X8rCakgF5ZndBdBmA7BN5fnLzxRirbIkjaIJaVrkjY9WawgkEi0xyjd6q/wVnA8/v/lOeVW3vzgfA89jwwxei9DpKkmUW6jvD2+0SNhAg+tXCLCeKklcZ1UDoVAADSvL0IdqGBJLlGxhg8M2KK5slc8lIzFCxr2/AaVCe3FGPTgNw249zA5t01r4SENMS475wd2XjWyQ4SZDNkNlxw9nQkx2FRKcAyC55NMhCfgOJEKlW5c6QE5lDIpy0GC9VfDe0wOJsDp8DECvfqJMHEfGorl115wg5hyxp5RNxydXHnKVLnwIQMR9BdQM5sZ6dsaKejik8QcO1ZXv7vnaybQHlOwA8j2Uea0ghSUpkxDwaV+ayYnXn2dhcVFImq2QtLhqUf8YRpEeKOluJ4Ydmd9doWaq7u70wmsA4gRtkhjDGqTcnHgvwINt2xplMQC2IVxJHNYAGWxFEaFcud+whYmOkGgTxg/vj/tlkl/UJAFHkSM116ZxThDtxbzOeYODE+hHnowA+GKBwADoA9nJYeIUodUWVV8UJXzOZF4FYpejvrkdYNfLxA8lhR+3p0ScA/lA2t48ky/3cXRWZEEec3w1CBjjCVMa4yOtVAP+UgD0yh1E9BE4y8UZ9E77ffdOKOjGf1wBEyjOTLo0RC3Vn9UF8iMyRQ0CySsPbigmP2EfE35FlnFEPQbgTr9x/Y2iJ8AKvAWQcmROv4ay/m6s/FOBTORDrofH2biI8DnDQBrE/qNWBZDSZ9ZZvRLnsFQBxpDUEBgxloEg1q2/b5Yn1JfBcAPFeGu8IYQ+BF6gNB6GHFvKxvf1XlnsF4OYjj3XTQDtUA43YtDpsLSmOgokwG0CGkrzj75GnjOheWYfQ85egN1nAGeFSsAG1PYJRnRgBU6DeAsJbxGmzunFFWqRzOv+QH7wCMOrIEykyl5PVxh/n/A4Qpl7e5TvUNWPHUdz0xU/I3F6maFNlv2iUDet18ee+Uev+e+/AXcqh0FIXMJ3ZcwDiGuvU0dibiCNGyf1t6QqI4MTmAXygK4sCGpoxbsN3GP1+MYIvXEnVigAcBYwRAUeKs/psXffq2K+UOspazRGPPcBW82ulNGIifXV80hOlKEkYyYmeBODnTLEx7/6AnEVfKums+ve6qMAfd+akvbl92rByV50kGdUeA8gseTyCEUsnkv2UAMjENcSRA+C+tsoE1Zsw9dnPkb6rQrVx7giWjOy9fsn6CVuc9bHdG7gzmKNsdslTPSwkpSnF2+VSNwjEnwMwwHGM2PIazJ1eiIgzFz1VQ1W/X1IiP3l2S87adsLErR4DGFk2rydxS7ri6ovdn7Fw4nw5gCi7ErHl5/HU9I8R3oHxgffei5AZM6BPSwMLCwNptbbuvKkJ1p9/RmNhIeoWL4bc0KAIojohYucz26esaivYJQBaNkDkX67zEVRnwqLxb7tceX3//uiWnw+/7OwrRruy0FpVhdoFC3DxnXcUIfw0sMdHL344aaOj4FUBMDt3m8uYF8ZHv/ce9IMHKxpkF5Dr6mwQjGvWKPYpuuPGZa+/9ufddsEuB6C020dt3IjgyZMB5t5p13riBM5MmoTmAwcUIbz87l8fOpbWq14IegnAmqY0m20TFKmSY0lAg7nnmptfd9nFkJGB7u+/D23v3q1khJvXL12Khg0b4D9mDMKffx761FSAHNSXZRgLCnB+5kwllVCVHLlj4dacN7wCMKJibjRJ1nSSWZtnrNbz24ogxgI4509OWPm/4fe8UeRSwfCXXkLY/Pkgvf6KjHT2LM7PmIHGjz++8s0VqObvv0d1eroiACGw/pXbZ+wdP+Anjz0g++CcMLM/0hinQKVMYNu5IU9YPWLtlI4qvOApUxBw993Q9ekDTUwMWEgITAcO4NfRo9sZ1XPfPviNGNHqu7m0FFUDWmValzBO9o/e/OxHDy31HIAbt0CiEvzL0n0P3bn+m0mqlkeFUGxxMfSDBrWSdMcDrFrWOOXQ7EyPAYCDRpTOSWWM4pQ8QITBkjvefDrmxIVRKmxTFAmZORMRixeDhYb+JuvGHmDvVJYe+6DnAMSZ1o3LkDf7Ld+maJmCgEiRwdOnI/jhh8HCxdXhb82dLGDvZQrUv+YVgOHluSE6i/ZmEDk94NgnGvp5RXTurK3/8gZAbEkJBABnTTp1CjXz56sqhhz7c6L/eAVAHImrSuMGa5i4xnZ9Inxgyd7U2zd8u8hTAH5ZWYjetAna2NY3aNxqhWn3btQ+95yq/O9sfq8AiAGzSufEcEap4NRSqDtpM+buyM7cXiaOwh61gLvuQtT69dBER7frL9fX49K2bbZKUNQL7javAYwrzzXUydpUjYzurrxgVu7Wsem7Kv7hrnJ2+aDJkxG5ejVYcLDLIayVlbYi6NKnn7o1jdcAxGziaGzVWIe48oLcWdtuHfp5+Sy3NHMQ9h87FrqEBJj27IFsNCLs6acRlJPTDoi5uBhnH3gAoh5Q23wCQOwFvx6LGwgZcc4mnrZw54iswsML1CqlRi7i5ZcR+sQTID+H/deDVOgTAEJhkRE0FjbE2QPJPWu/TrlvxVfL1BimVkaEQ8/9+6FvU/mZDx1ClcqTJAEHfQZAKC4uSWTePKjtNXmvk7X+r4zb+IFa49TK9diyxVY6OzZrdTXO5eSg6Ysv1Azzrk8BiOows/TxRKblyW0PSa8PX50faGxOUKOVWhmRGYKnilv235o7ADiQ61sAYkP8Mk9r6lWXrLGyPo73hS9M3DQl4fDpCa6MM6SlIeSxx6AfMsR2/aWJirKdChs3b8bZ++932i3ms8/gf9ttHgMg4EafAxDaiCczXUhAkoYjnmRRHxC/c+3XKRM72AcMw4ah+wcfQBvf+sXMXFKCU5mZ7e79dCkp6LF9O3RJSa0AuHEgKkoEMjoFgNBIZIYzR3vfIMk8yX51vmrkmiUhtZf6ufKCmF274H/LLa1+5mYz6pctQ+0zz7T63m3ZMoTk5oJ0Dq9ybmQBDvw9CSjoNAA2bTlo+OHZ0UyrSdQAEdMWfJaVtblknisAIr+L2x7y928NoakJDW+/DWN+vu17+AsvIGD8+FYXJ+K7G/Ffn4iW/yN0LoDLZmT+8rg/b+LxTEbMqqx1y8PONaY6gyBSW/fCwhYvcLzuUrErcpMJ9cuXo3bhQkVpAqYlALbDWZcAaPGGPDbqkCn04cU7bh/9XvEmV1raboU3bWq5FVYJQYTJxbfewrnp0xWNB/BJInCXXbDrANhn5HmsOOyVeYH15sWutBWnvsiCAvjfeqviu4BUUwPjihW4sEjdYZOA+ASg8uoBuDxzBbCKgA4PSOIMEDp7NkSKZN26tX8Z2roVxpUrVZ8CZWBsMrDTEXzXe4DD7BXAOhGPavzWBzITEoHCtuNcVQBCmePAqwDm+8BAl0M4W/mrHgKO2h4HHgSg/LjnPqVPRJg5xvzvzgPsCpUDUQx4EYDy044yiHoCnrSnuo7Er3oItFWuDOirAx4B8DdcLlaU7b0iUcSBf4sKT22f3x2ANqExhoA/ckC8d41z4r4HAZSI/woC2JUAHFVruF3u/+ezfxhDX4kzAAAAAElFTkSuQmCC" type="image/png"> -->
<!-- <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/zLD1nfkNCJC1kEswSRdSyd-p/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-uObFsIlmV0TvXnvnUvEhhDHEbjC4zBHwRA8tg/f0CcVHlIG0XlMAK1oHeK06zBCe"></script><script src="https://connect.facebook.net/signals/config/2102472709905236?v=2.9.57&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-50DCJGBBH2&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TMWSCG3"></script><script>
            hashedUserId = "5dbc8a0d429159a93a3ab9e507986213";
            uruid = "1668626";
        </script> -->

<!-- <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TMWSCG3');
    </script> -->

<!-- <script>
        var _rollbarConfig = {
            accessToken: "154d1cc1c9cb460494318d790e9d953e",
            captureUncaught: true,
            captureUnhandledRejections: true,
            payload: {
                environment: "production"
            }
        };
        // Rollbar Snippet
        !function(r){var e={};function o(n){if(e[n])return e[n].exports;var t=e[n]={i:n,l:!1,exports:{}};return r[n].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=r,o.c=e,o.d=function(r,e,n){o.o(r,e)||Object.defineProperty(r,e,{enumerable:!0,get:n})},o.r=function(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},o.t=function(r,e){if(1&e&&(r=o(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var t in r)o.d(n,t,function(e){return r[e]}.bind(null,t));return n},o.n=function(r){var e=r&&r.__esModule?function(){return r.default}:function(){return r};return o.d(e,"a",e),e},o.o=function(r,e){return Object.prototype.hasOwnProperty.call(r,e)},o.p="",o(o.s=0)}([function(r,e,o){"use strict";var n=o(1),t=o(5);_rollbarConfig=_rollbarConfig||{},_rollbarConfig.rollbarJsUrl=_rollbarConfig.rollbarJsUrl||"https://cdn.rollbar.com/rollbarjs/refs/tags/v2.22.0/rollbar.min.js",_rollbarConfig.async=void 0===_rollbarConfig.async||_rollbarConfig.async;var a=n.setupShim(window,_rollbarConfig),l=t(_rollbarConfig);window.rollbar=n.Rollbar,a.loadFull(window,document,!_rollbarConfig.async,_rollbarConfig,l)},function(r,e,o){"use strict";var n=o(2),t=o(3);function a(r){return function(){try{return r.apply(this,arguments)}catch(r){try{console.error("[Rollbar]: Internal error",r)}catch(r){}}}}var l=0;function i(r,e){this.options=r,this._rollbarOldOnError=null;var o=l++;this.shimId=function(){return o},"undefined"!=typeof window&&window._rollbarShims&&(window._rollbarShims[o]={handler:e,messages:[]})}var s=o(4),d=function(r,e){return new i(r,e)},c=function(r){return new s(d,r)};function u(r){return a((function(){var e=this,o=Array.prototype.slice.call(arguments,0),n={shim:e,method:r,args:o,ts:new Date};window._rollbarShims[this.shimId()].messages.push(n)}))}i.prototype.loadFull=function(r,e,o,n,t){var l=!1,i=e.createElement("script"),s=e.getElementsByTagName("script")[0],d=s.parentNode;i.crossOrigin="",i.src=n.rollbarJsUrl,o||(i.async=!0),i.onload=i.onreadystatechange=a((function(){if(!(l||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){i.onload=i.onreadystatechange=null;try{d.removeChild(i)}catch(r){}l=!0,function(){var e;if(void 0===r._rollbarDidLoad){e=new Error("rollbar.js did not load");for(var o,n,a,l,i=0;o=r._rollbarShims[i++];)for(o=o.messages||[];n=o.shift();)for(a=n.args||[],i=0;i<a.length;++i)if("function"==typeof(l=a[i])){l(e);break}}"function"==typeof t&&t(e)}()}})),d.insertBefore(i,s)},i.prototype.wrap=function(r,e,o){try{var n;if(n="function"==typeof e?e:function(){return e||{}},"function"!=typeof r)return r;if(r._isWrap)return r;if(!r._rollbar_wrapped&&(r._rollbar_wrapped=function(){o&&"function"==typeof o&&o.apply(this,arguments);try{return r.apply(this,arguments)}catch(o){var e=o;throw e&&("string"==typeof e&&(e=new String(e)),e._rollbarContext=n()||{},e._rollbarContext._wrappedSource=r.toString(),window._rollbarWrappedError=e),e}},r._rollbar_wrapped._isWrap=!0,r.hasOwnProperty))for(var t in r)r.hasOwnProperty(t)&&(r._rollbar_wrapped[t]=r[t]);return r._rollbar_wrapped}catch(e){return r}};for(var p="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad".split(","),f=0;f<p.length;++f)i.prototype[p[f]]=u(p[f]);r.exports={setupShim:function(r,e){if(r){var o=e.globalAlias||"Rollbar";if("object"==typeof r[o])return r[o];r._rollbarShims={},r._rollbarWrappedError=null;var l=new c(e);return a((function(){e.captureUncaught&&(l._rollbarOldOnError=r.onerror,n.captureUncaughtExceptions(r,l,!0),e.wrapGlobalEventHandlers&&t(r,l,!0)),e.captureUnhandledRejections&&n.captureUnhandledRejections(r,l,!0);var a=e.autoInstrument;return!1!==e.enabled&&(void 0===a||!0===a||"object"==typeof a&&a.network)&&r.addEventListener&&(r.addEventListener("load",l.captureLoad.bind(l)),r.addEventListener("DOMContentLoaded",l.captureDomContentLoaded.bind(l))),r[o]=l,l}))()}},Rollbar:c}},function(r,e,o){"use strict";function n(r,e,o,n){r._rollbarWrappedError&&(n[4]||(n[4]=r._rollbarWrappedError),n[5]||(n[5]=r._rollbarWrappedError._rollbarContext),r._rollbarWrappedError=null);var t=e.handleUncaughtException.apply(e,n);o&&o.apply(r,n),"anonymous"===t&&(e.anonymousErrorsPending+=1)}r.exports={captureUncaughtExceptions:function(r,e,o){if(r){var t;if("function"==typeof e._rollbarOldOnError)t=e._rollbarOldOnError;else if(r.onerror){for(t=r.onerror;t._rollbarOldOnError;)t=t._rollbarOldOnError;e._rollbarOldOnError=t}e.handleAnonymousErrors();var a=function(){var o=Array.prototype.slice.call(arguments,0);n(r,e,t,o)};o&&(a._rollbarOldOnError=t),r.onerror=a}},captureUnhandledRejections:function(r,e,o){if(r){"function"==typeof r._rollbarURH&&r._rollbarURH.belongsToShim&&r.removeEventListener("unhandledrejection",r._rollbarURH);var n=function(r){var o,n,t;try{o=r.reason}catch(r){o=void 0}try{n=r.promise}catch(r){n="[unhandledrejection] error getting `promise` from event"}try{t=r.detail,!o&&t&&(o=t.reason,n=t.promise)}catch(r){}o||(o="[unhandledrejection] error getting `reason` from event"),e&&e.handleUnhandledRejection&&e.handleUnhandledRejection(o,n)};n.belongsToShim=o,r._rollbarURH=n,r.addEventListener("unhandledrejection",n)}}}},function(r,e,o){"use strict";function n(r,e,o){if(e.hasOwnProperty&&e.hasOwnProperty("addEventListener")){for(var n=e.addEventListener;n._rollbarOldAdd&&n.belongsToShim;)n=n._rollbarOldAdd;var t=function(e,o,t){n.call(this,e,r.wrap(o),t)};t._rollbarOldAdd=n,t.belongsToShim=o,e.addEventListener=t;for(var a=e.removeEventListener;a._rollbarOldRemove&&a.belongsToShim;)a=a._rollbarOldRemove;var l=function(r,e,o){a.call(this,r,e&&e._rollbar_wrapped||e,o)};l._rollbarOldRemove=a,l.belongsToShim=o,e.removeEventListener=l}}r.exports=function(r,e,o){if(r){var t,a,l="EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");for(t=0;t<l.length;++t)r[a=l[t]]&&r[a].prototype&&n(e,r[a].prototype,o)}}},function(r,e,o){"use strict";function n(r,e){this.impl=r(e,this),this.options=e,function(r){for(var e=function(r){return function(){var e=Array.prototype.slice.call(arguments,0);if(this.impl[r])return this.impl[r].apply(this.impl,e)}},o="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,captureLoad".split(","),n=0;n<o.length;n++)r[o[n]]=e(o[n])}(n.prototype)}n.prototype._swapAndProcessMessages=function(r,e){var o,n,t;for(this.impl=r(this.options);o=e.shift();)n=o.method,t=o.args,this[n]&&"function"==typeof this[n]&&("captureDomContentLoaded"===n||"captureLoad"===n?this[n].apply(this,[t[0],o.ts]):this[n].apply(this,t));return this},r.exports=n},function(r,e,o){"use strict";r.exports=function(r){return function(e){if(!e&&!window._rollbarInitialized){for(var o,n,t=(r=r||{}).globalAlias||"Rollbar",a=window.rollbar,l=function(r){return new a(r)},i=0;o=window._rollbarShims[i++];)n||(n=o.handler),o.handler._swapAndProcessMessages(l,o.messages);window[t]=n,window._rollbarInitialized=!0}}}}]);
        // End Rollbar Snippet
    </script> -->
<script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/606789896/?random=1648011331142&amp;cv=9&amp;fst=1648011331142&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=864&amp;u_w=1536&amp;u_ah=824&amp;u_aw=1536&amp;u_cd=24&amp;u_his=4&amp;u_tz=330&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;gtm=2wg3e0&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fuptimerobot.com%2Fdashboard&amp;ref=https%3A%2F%2Fuptimerobot.com%2F&amp;tiba=Dashboard%20%7C%20UptimeRobot&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><style type="text/css"></style></head>
<body class="sidebar-left loadMySettings" data-new-gr-c-s-check-loaded="14.1052.0" data-gr-ext-installed="" style="">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMWSCG3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<a class="sessionWarning hide" href="#sessionWarning" data-toggle="modal">.</a>
<a class="accountPausedNotification hide" href="#accountPausedNotification" data-toggle="modal">.</a>
<div class="page-container">
<div id="header-container">
<div id="header" class="" style="left: 0px;">
<div id="logo" style="margin: 24px 0 0 15px;">
<a href="/">
<img class="normal-logo" src="assets/img/uptimerobot-logo-dark.svg" alt="UptimeRobot logo" width="180">
<img class="tvmode-logo" src="assets/img/uptimerobot-logo.svg" alt="UptimeRobot logo" width="180" style="display:none">
</a>
</div>
<div id="logoMiniWrap" class="margin-top5 hide">
<div style="float: left;">
<div id="logo-mini" style="margin: 5px 0 0 15px;">
<a href="/">
<img class="normal-logo" src="assets/img/uptimerobot-logo-dark.svg" alt="UptimeRobot logo" width="150">
<img class="tvmode-logo" src="assets/img/uptimerobot-logo.svg" alt="UptimeRobot logo" width="150" style="display:none">
</a>
</div>
</div>
<div style="float: right; margin-right:10px;">
<div class="btn-group pull-right">
<a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="fontello-icon-menu"></i></a>
<ul class="dropdown-menu dropdown-menu-arrow" style="min-width: 100px;">
<li style="padding: 0 10px;"><a href="dashboard.php#mainDashboard" class="mainDashboard mainDashboardMobile">Dashboard</a></li>
<li style="padding: 0 10px;"><a href="statuspage.php" class="mySettings mySettingsMobile">Status pages</a></li>
<li style="padding: 0 10px;"><a href="incidents.php" class="mySettings mySettingsMobile">Incidents</a></li>
<li style="padding: 0 10px;"><a href="dashboard.php#mySettings" class="mySettings mySettingsMobile">My Settings</a></li>
 <li style="padding: 0 10px;"><a href="">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div id="main-container">
<style> .uptimeSidebarWrapper { width:238px;}</style><script>
        monitorNamesLengthStatus = "short";
        monitorNamesLengthStatusText = "Expand Monitor Names";
</script>
<div class="sidebar-item" style="">
<div class="media profile" style="border-top: 1px solid rgb(186, 190, 204); position: relative; left: 0px;">
<div>
<div class="addMonitorInSearch">
<div>
<a class="btn btn-green btn-large btn-glyph newMonitor" href="#newMonitor" data-toggle="modal"><i class="fontello-icon-plus-1"></i> <span id="addNewMonitorRemoval">Add New</span> Monitor</a><br>
<span class="text-grey" style="font-size:10px; height: 10px; position:relative; float:right; margin-right:10px;">
<a class="bulkActions text-grey underlineLink" href="#bulkActions" data-toggle="modal">(Bulk Actions) </a>
(<a class="bulkActions text-grey underlineLink" href="../inc/dml/monitorDML.php?action=exportMonitors">Export Monitors</a> -
<a class="bulkActions text-grey underlineLink" href="#bulkImportUpload" data-toggle="modal">Import Monitors</a> -
<a class="switchMonitorNamesLength text-grey underlineLink shortMonitorNamesState" href="javascript:void(0);">Expand Monitor Names</a>)</span>
</div>
<div id="sidebarHeaderMenu">
<div>
<ul id="sidebarHeaderMenuList" style="height:30px; margin:0;">
<li style="width:115px; background:#999999; padding-left: 10px;">
<a href="javascript:void(0);" class="sortMonitors" style="text-decoration:none;"><strong class="text-blacky">Sort Monitors</strong> <i class="fontello-icon-down-dir" style="color: #333333;"></i></a>
</li>
<li style="width:128px; padding-left: 10px;" id="last24HoursTitle">
<i class="fontello-icon-clock"></i> <strong>Last 24 Hours</strong>
</li>
<li class="twentyFourHourText twentyFourHourTextHide">3</li><li class="twentyFourHourText twentyFourHourTextShow">2</li><li class="twentyFourHourText twentyFourHourTextHide">1</li><li class="twentyFourHourText twentyFourHourTextShow">0</li><li class="twentyFourHourText twentyFourHourTextHide">23</li><li class="twentyFourHourText twentyFourHourTextShow">22</li><li class="twentyFourHourText twentyFourHourTextHide">21</li><li class="twentyFourHourText twentyFourHourTextShow">20</li><li class="twentyFourHourText twentyFourHourTextHide">19</li><li class="twentyFourHourText twentyFourHourTextShow">18</li><li class="twentyFourHourText twentyFourHourTextHide">17</li><li class="twentyFourHourText twentyFourHourTextShow">16</li><li class="twentyFourHourText twentyFourHourTextHide">15</li><li class="twentyFourHourText twentyFourHourTextShow">14</li><li class="twentyFourHourText twentyFourHourTextHide">13</li><li class="twentyFourHourText twentyFourHourTextShow">12</li><li class="twentyFourHourText twentyFourHourTextHide">11</li><li class="twentyFourHourText twentyFourHourTextShow">10</li><li class="twentyFourHourText twentyFourHourTextHide">9</li><li class="twentyFourHourText twentyFourHourTextShow">8</li><li class="twentyFourHourText twentyFourHourTextHide">7</li><li class="twentyFourHourText twentyFourHourTextShow">6</li><li class="twentyFourHourText twentyFourHourTextHide">5</li><li class="twentyFourHourText twentyFourHourTextShow">4</li> </ul>
 </div>
</div>
</div>
</div>
<div class="search-global">
<input id="searchMonitors" class="search search-query input-large" type="search" value="">
<a class="search-button" href="javascript:void(0);"><i class="fontello-icon-search-5"></i></a>
</div>
</div>
</div>
<div id="main-sidebar" class="sidebar" tabindex="0" style="overflow: hidden; outline: none; left: 0px;">
<div id="sortMonitors" class="hide">
<ul style="list-style-type:none;" class="margin-top10 text-whitesmoke">
<li><strong class="text-whitesmoke">- Sort by name:</strong> (<a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="1">a-z</a> / <a href="javascript:void(0);" class="sortMonitorType text-green" data-sortmonitortype="2">z-a</a>)</li>
<li><strong class="text-whitesmoke">- Sort by status:</strong> (<a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="3">up-down-paused</a> / <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="4">down-up-paused</a> / <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="5">paused-up-down</a>)</li>
<li><strong class="text-whitesmoke">- Sort by type:</strong> (<a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="6">http-kywd-ping-port-hrtb</a> / <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="7">kywd-http-ping-port-hrtb</a> / <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="8">ping-port-http-kywd-hrtb</a> / <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="9">port-ping-http-kywd-hrtb</a> / <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="10">hrtb-http-kywd-ping-port</a>)</li>
<li>- <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="1" id="sortMonitorsReset">Reset all sorts (defaults to a-z)</a></li>
</ul>
<input type="hidden" id="mainSideMenuMonitorsSortType" value="2">
</div>

<style>
				.uptimeSidebarWrapper {
					display:inline-block;
					float: right;
				}
			</style>
<ul id="mainSideMenu" class="nav nav-list nav-side">
	<li class="accordion-group" id="mSidebar791106997" style="">
						  <div class="accordion-heading">
						    <span class="label newMonitorColor sidebarMonitorPercentage">0%</span>
						    <span class="label">http</span>
						    <a class="monitorTitle" href="#791106997">Twinkle</a> <a href="https://twinkle.com" target="_blank">
						       <i class="item-icon fontello-icon-link-1 sidebarMonitorLink"></i>
						 </a>
						    <div class="pull-right">
						      <div class="uptimeSidebarWrapper pull-left">
						        <ul class="uptimeChart">
						          <li class="newMonitorUptimeLine" data-tooltip="No logs (info) exist.">
													<img alt="1px" src="assets/img/1px.gif">
												</li>
						        </ul>
						      </div>
						      <div class="pull-right">
						        <a class="accordion-toggle monitorAccordionBtn" data-parent="#mainSideMenu" data-toggle="collapse" href="#mMenuAccordion791106997">
						             <i class="chevron fontello-icon-cog-3"></i>
						        </a>
						      </div>
						    </div>
						  </div>
					  <ul class="accordion-content nav nav-list collapse" id="mMenuAccordion791106997">
					    
					    <li class="startStopMonitor">
					      <a href="#"><i class="fontello-icon-right-dir"></i>
					        <span class="monitorStartStopText791106997">Pause</span></a>
					    </li>
					    <li>
					      <a class="editMonitor" data-monitorid="791106997" data-toggle="modal" href="#editMonitor">
										<i class="fontello-icon-right-dir"></i>
										 Edit
								</a>
					    </li>
					    <li>
					      <a class="deleteMonitor" data-monitorid="791106997" data-toggle="modal" href="#deleteMonitor">
										<i class="fontello-icon-right-dir"></i>
										 Delete
								</a>
					    </li>
					    <li>
					      <a class="resetMonitor" data-monitorid="791106997" data-toggle="modal" href="#resetMonitor">
										<i class="fontello-icon-right-dir"></i>
										 Reset Stats
								</a>
					    </li>
					  </ul>
					</li>
<li class="accordion-group" id="mSidebar791077807">
<div class="accordion-heading">
<span class="label sidebarMonitorPercentage" style="background-color: #ba3737">0.000%</span> 
<span class="label">http</span> 
<a href="#791077807" class="monitorTitle" title="https://twinkle.com" data-monitortitle="Twinkle">Twinkle</a>
<a id="sidebarMonitorLink-791077807" href="https://twinkle.com" target="_blank">
<i class="item-icon fontello-icon-link-1" style="color:#999999; font-size: 0.7em;"></i>
</a> <div class="pull-right"><div class="uptimeSidebarWrapper pull-left"><div class="uptimeHiddenRatio" style="display:none;">0.000</div><ul class="uptimeChart"><li data-tooltip="Start Time: 2022-03-22 06:10:04<br>End Time: 2022-03-23 04:55:30<br>Duration: 22 hrs, 45 mins<br>Status: Down" style="width: 94.821759259259%; background:#ba3737;"><img src="assets/img/1px.gif" alt="1px"></li><li data-tooltip="Start Time: 2022-03-22 06:07:06<br>End Time: 2022-03-22 06:10:04<br>Duration: 0 hrs, 2 mins<br>Status: Started" style="width: 0.20601851851852%; background:#9c9b9b;"><img src="assets/img/1px.gif" alt="1px"></li><li data-tooltip="No data exists for this period." style="width: 4.9722222222222%; background:#9c9b9b;"><img src="assets/img/1px.gif" alt="1px"></li></ul></div> <div class="pull-right"><a href="#mMenuAccordion791077807" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle monitorAccordionBtn"><i class="chevron fontello-icon-cog-3"></i></a></div></div>
</div>
<ul class="accordion-content nav nav-list collapse" id="mMenuAccordion791077807">
<li class="startStopMonitor"> <a href="#"> <i class="fontello-icon-right-dir"></i><span class="monitorStartStopText791077807"> Pause</span> </a> </li>
<li> <a href="#editMonitor" data-toggle="modal" data-monitorid="791077807" class="editMonitor"> <i class="fontello-icon-right-dir"></i> Edit </a> </li>
<li> <a href="#deleteMonitor" data-toggle="modal" data-monitorid="791077807" class="deleteMonitor"> <i class="fontello-icon-right-dir"></i> Delete </a> </li>
<li> <a href="#resetMonitor" data-toggle="modal" data-monitorid="791077807" class="resetMonitor"> <i class="fontello-icon-right-dir"></i> Reset Stats </a> </li>
</ul>
</li>
<li class="accordion-group" id="mSidebar791078415">
<div class="accordion-heading">
<span class="label sidebarMonitorPercentage" style="background-color: #ba3737">0.000%</span> <span class="label">ping</span> <a href="#791078415" class="monitorTitle" title="120.128.90.2" data-monitortitle="jjjj">jjjj</a> <div class="pull-right"><div class="uptimeSidebarWrapper pull-left"><div class="uptimeHiddenRatio" style="display:none;">0.000</div><ul class="uptimeChart"><li data-tooltip="Start Time: 2022-03-22 07:20:53<br>End Time: 2022-03-23 04:55:30<br>Duration: 21 hrs, 34 mins<br>Status: Down" style="width: 89.903935185185%; background:#ba3737;"><img src="assets/img/1px.gif" alt="1px"></li><li data-tooltip="Start Time: 2022-03-22 06:39:58<br>End Time: 2022-03-22 07:20:53<br>Duration: 0 hrs, 40 mins<br>Status: Started" style="width: 2.8414351851852%; background:#9c9b9b;"><img src="assets/img/1px.gif" alt="1px"></li><li data-tooltip="No data exists for this period." style="width: 7.2546296296296%; background:#9c9b9b;"><img src="assets/img/1px.gif" alt="1px"></li></ul></div> <div class="pull-right"><a href="#mMenuAccordion791078415" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle monitorAccordionBtn"><i class="chevron fontello-icon-cog-3"></i></a></div></div>
</div>
<ul class="accordion-content nav nav-list collapse" id="mMenuAccordion791078415">
<li class="startStopMonitor"> <a href="#"> <i class="fontello-icon-right-dir"></i><span class="monitorStartStopText791078415"> Pause</span> </a> </li>
<li> <a href="#editMonitor" data-toggle="modal" data-monitorid="791078415" class="editMonitor"> <i class="fontello-icon-right-dir"></i> Edit </a> </li>
<li> <a href="#deleteMonitor" data-toggle="modal" data-monitorid="791078415" class="deleteMonitor"> <i class="fontello-icon-right-dir"></i> Delete </a> </li>
<li> <a href="#resetMonitor" data-toggle="modal" data-monitorid="791078415" class="resetMonitor"> <i class="fontello-icon-right-dir"></i> Reset Stats </a> </li>
</ul>
</li>
<li class="accordion-group monitorsLastRow" id="mSidebar791078479">
<div class="accordion-heading">
<span class="label sidebarMonitorPercentage" style="background-color: #4da74d">100.000%</span> <span class="label">http</span> <a href="#791078479" class="monitorTitle" title="https://jj.com" data-monitortitle="jjj">jjj</a>
<a id="sidebarMonitorLink-791078479" href="https://jj.com" target="_blank">
<i class="item-icon fontello-icon-link-1" style="color:#999999; font-size: 0.7em;"></i>
</a> <div class="pull-right"><div class="uptimeSidebarWrapper pull-left"><div class="uptimeHiddenRatio" style="display:none;">100.000</div><ul class="uptimeChart"><li data-tooltip="Start Time: 2022-03-22 06:58:29<br>End Time: 2022-03-23 04:55:30<br>Duration: 21 hrs, 57 mins<br>Status: Up" style="width: 91.459490740741%; background:#4da74d;"><img src="assets/img/1px.gif" alt="1px"></li><li data-tooltip="Start Time: 2022-03-22 06:44:26<br>End Time: 2022-03-22 06:58:29<br>Duration: 0 hrs, 14 mins<br>Status: Started" style="width: 0.97569444444444%; background:#9c9b9b;"><img src="assets/img/1px.gif" alt="1px"></li><li data-tooltip="No data exists for this period." style="width: 7.5648148148148%; background:#9c9b9b;"><img src="assets/img/1px.gif" alt="1px"></li></ul></div> <div class="pull-right"><a href="#mMenuAccordion791078479" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle monitorAccordionBtn"><i class="chevron fontello-icon-cog-3"></i></a></div></div>
</div>
<ul class="accordion-content nav nav-list collapse" id="mMenuAccordion791078479">
<li class="startStopMonitor"> <a href="#"> <i class="fontello-icon-right-dir"></i><span class="monitorStartStopText791078479"> Pause</span> </a> </li>
<li> <a href="#editMonitor" data-toggle="modal" data-monitorid="791078479" class="editMonitor"> <i class="fontello-icon-right-dir"></i> Edit </a> </li>
<li> <a href="#deleteMonitor" data-toggle="modal" data-monitorid="791078479" class="deleteMonitor"> <i class="fontello-icon-right-dir"></i> Delete </a> </li>
<li> <a href="#resetMonitor" data-toggle="modal" data-monitorid="791078479" class="resetMonitor"> <i class="fontello-icon-right-dir"></i> Reset Stats </a> </li>
</ul>
</li>
<input type="hidden" value="20" id="mainSideMenuMonitorsLimit">
<li class="accordion-group hide" id="loadingMoreMonitors" style="background: #373b3e;">
<div class="accordion-heading">
<a class="monitorTitle" href="#" style="color:#e6e8eb;">Loading more....</a>
</div>
</li>
</ul>
<input id="monitorsLastRowReached" type="hidden" value="0">

<div class="sidebar-item" style=""></div>

</div>

<a href="#upgradeAccount" class="upgradeProAccount hide" data-toggle="modal">.</a>
<div id="main-content" class="main-content container-fluid" style="opacity: 1;">
<div id="headerMenuWrap" class="row-fluid" style="">
<ul id="headerMenu" class="unstyled inline f16">
<li class="margin-right20 standardHeaderItem" style="position: relative;">
<a href="#upgradeAccount" class="upgradeProAccount btn btn-green btn-large" data-toggle="modal" style="margin-top: -10px;" data-cta-source="main_header-cta">Upgrade</a>
</li>
<li class="margin-right20 standardHeaderItem"><a href="#mainDashboard" class="mainDashboard text-color">Dashboard</a></li>
<li class="margin-right20 standardHeaderItem"><a href="statuspage.php" class="mySettings text-color">Status pages</a></li>
<li class="margin-right20 standardHeaderItem">
<a href="incidents.php" class="mySettings text-color">Incidents</a>
<span class="badge badge-light badge-warning">BETA</span>
</li>
<li class="margin-right20 standardHeaderItem"><a href="#mySettings" class="mySettings text-color">My Settings</a></li>
<li class="standardHeaderItem" style="float: right;">
<a href="inc/dml/userDML.php?action=logoutUser" class="text-dirtyred">Logout</a>
</li>
<li class="margin-right20 standardHeaderItem" style="float: right;">
<img src="assets/img/icon/user-icon.svg" width="24" alt="user icon" class="margin-right10">trivedikausha@gmail.com
</li>
<li class="margin-right20 exitTVModeHeaderItem hidden">
<a href="../dashboard#mainDashboard" class="exitTVMode text-dirtyred">Exit TV Mode</a> (refreshing in <span class="countdown"></span> seconds)
<span id="TVModeNotificationHolder">
<a id="TVModeNotification" href="#" style="color:white;">
<i class="fontello-icon-volume-down-1"></i>
</a>
</span>
</li>
</ul>
<div class="socialWrapper" style="position: absolute; left: 571px; bottom: -10px;">
<ul class="unstyled inline">
<li style="height:20px;border-top-left-radius: 5px; border-top-right-radius: 5px;background: url(assets/img/background/body-bg-02-15.jpg) repeat; padding:0 6px 0 4px;" class="text-center">
<a href="#tvMode" class="enableTVMode noUnderline"><i class="fontello-icon-monitor tvModeLink"> TV Mode</i></a>
</li>
<li style="height:20px; margin:0 0 0 5px; border-top-left-radius: 5px; border-top-right-radius: 5px;background: url(assets/img/background/body-bg-02-15.jpg) repeat; padding:0 6px 0 4px;" class="text-center">
<a href="https://twitter.com/uptimerobot" class="noUnderline"><i class="fontello-icon-twitter-squared twitterLink"></i></a>
</li>
<li style="height:20px; margin:0 20px 0 5px;border-top-left-radius: 5px; border-top-right-radius: 5px;background: url(assets/img/background/body-bg-02-15.jpg) repeat; padding:0 6px 0 4px;" class="text-center">
<a href="https://facebook.com/UptimeRobot" class="noUnderline"><i class="fontello-icon-facebook-squared facebookLink"></i></a>
</li>
</ul>
</div>
</div>
<div class="row-fluid page-head">
<h2 class="page-title"><i class="fontello-icon-monitor"></i> <span class="dashBigTitle" data-monitorid="">My Settings</span> <small class="dashSmallTitle greenLink"></small></h2>
<p class="pagedesc">A place to find all the details about your monitors</p>
<p class="backToMonitorListBtn"><a href="javascript:">&lt; Back to "Monitors List"</a></p>
<div class="page-bar">
<div class="btn-toolbar"> </div>
</div>
</div>


<div id="page-content" class="page-content">
<div id="TabTop1" class="tab-pane active fade in">
<div class="row-fluid">
<div class="span6 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-user"></i> Account profile</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4>Plan <a href="#upgradeAccount" class="upgradeProAccount" data-toggle="modal" data-cta-source="dashboard_settings-upgrade_to_pro"><small class="btn btn-small btn-navi">
Upgrade to Pro</small></a></h4>
</li>

<li class="control-group">
You are using the "<b>Free Plan (50 monitors, 5 minute intervals)</b>".
</li>
<li class="control-group">
<small>There are <b>0 SMS (or voice-calls) left</b>. <a href="#upgradeAccount" class="upgradeSMS" data-toggle="modal" data-cta-source="dashboard_settings-add_more_sms">Want to add more?</a></small>
</li>

<li class="control-group">
<small>
<b><a href="" class="showPaymentsHistory showPaymentsHistoryText">Payments history</a></b> <div id="paymentsHistory" class="hide"></div>
<div>
<div id="userProPlanStatusInfoText" class="">The auto-renew billing is cancelled. Please <b>click the "Change Plan button" above</b> to renew the subscription.</div>
</div>
</small>
</li>
</ul>
</fieldset>
<form id="editPersonalInfoForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPersonalInfo" novalidate="novalidate">
<input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImVkaXRQZXJzb25hbEluZm8iLCJ0aW1lc3RhbXAiOjE2NDgwMTE4Nzh9.ZiE0GVuD1eg5AqQV2YIv1kX_YYfwPtQXtBWUGcFYYNIyRdLeDdnMFj0soGRW8tUp7qQR4uWna5NWDLGhu5ls6A" name="formToken">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
 <li class="section-form">
<h4>Personal </h4>
</li>

<li class="control-group">
<label for="userFirstLastName" class="control-label">First-Last Name <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userFirstLastName" class="span6" type="text" value="Kausha Trivedi" name="userFirstLastName">
</div>
</div>
</li>

<li class="control-group">
<label for="userTimezoneID" class="control-label">Timezone</label>
<div class="controls">
<div class="input-append block">
<div class="select2-container selecttwoMySettings span6" id="s2id_userTimezoneID" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-75"> GMT/UTC (GMT +00:00:00)</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen75" class="select2-offscreen">Timezone</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-75" id="s2id_autogen75"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen75_search" class="select2-offscreen">Timezone</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-75" id="s2id_autogen75_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-75">   </ul></div></div><select id="userTimezoneID" class="selecttwoMySettings span6" name="userTimezoneID" tabindex="-1" title="Timezone" style="display: none;">
<option value="39"> Yankee Timezone (GMT -12:00:00)</option><option value="2"> Midway Island, Samoa (GMT -11:00:00)</option><option value="3"> Hawaii (GMT -10:00:00)</option><option value="4"> Alaska (GMT -08:00:00)</option><option value="5"> Pacific Time (US &amp; Canada) (GMT -07:00:00)</option><option value="46"> Arizona (GMT -07:00:00)</option><option value="6"> Mountain Time (US &amp; Canada) (GMT -06:00:00)</option><option value="49"> Bogota (GMT -05:00:00)</option><option value="7"> Central Time (US &amp; Canada), Mexico City (GMT -05:00:00)</option><option value="8"> Eastern Time (US &amp; Canada) (GMT -04:00:00)</option><option value="48"> Lima (GMT -05:00:00)</option><option value="34"> Caracas-Venezuela (GMT -04:00:00)</option><option value="9"> Atlantic Time (Canada), La Paz (GMT -04:00:00)</option><option value="10"> Newfoundland (GMT -02:30:00)</option><option value="11"> Buenos Aires, Georgetown (GMT -03:00:00)</option><option value="12"> Mid-Atlantic (GMT -02:00:00)</option><option value="42"> Sao Paulo (GMT -03:00:00)</option><option value="13"> Azores, Cape Verde Islands (GMT -01:00:00)</option><option selected="selected" value="37"> GMT/UTC (GMT +00:00:00)</option><option value="35"> South African Standard Time (GMT +02:00:00)</option><option value="14"> Western Europe Time, London, Lisbon, Casablanca (GMT +00:00:00)</option><option value="15"> Brussels, Copenhagen, Madrid, Paris (GMT +01:00:00)</option><option value="43"> Istanbul (GMT +03:00:00)</option><option value="16"> Kaliningrad, Athens, Helsinki (GMT +02:00:00)</option><option value="36"> Moscow, St. Petersburg (GMT +03:00:00)</option><option value="45"> Jerusalem (GMT +02:00:00)</option><option value="17"> Baghdad, Riyadh (GMT +03:00:00)</option><option value="40"> Samara (GMT +04:00:00)</option><option value="18"> Tehran (GMT +04:30:00)</option><option value="20"> Kabul (GMT +04:30:00)</option><option value="19"> Abu Dhabi, Muscat, Baku, Tbilisi (GMT +04:00:00)</option><option value="21"> Ekaterinburg, Islamabad, Karachi, Tashkent (GMT +05:00:00)</option><option value="22"> Bombay, Colombo, Calcutta, Madras, New Delhi (GMT +05:30:00)</option><option value="23"> Kathmandu (GMT +05:45:00)</option><option value="24"> Almaty, Dhaka (GMT +06:00:00)</option><option value="47"> Yangon (Myanmar) (GMT +06:30:00)</option><option value="25"> Bangkok, Hanoi, Jakarta (GMT +07:00:00)</option><option value="26"> Beijing, Perth, Singapore, Hong Kong (GMT +08:00:00)</option><option value="27"> Tokyo, Seoul, Osaka, Sapporo, Yakutsk (GMT +09:00:00)</option><option value="28"> Adelaide, Darwin (GMT +10:30:00)</option><option value="29"> Guam, Vladivostok (GMT +10:00:00)</option><option value="44"> Australian Eastern Time Zone (Brisbane) (GMT +10:00:00)</option><option value="38"> Sydney, Melbourne (GMT +11:00:00)</option><option value="30"> Magadan, Solomon Islands, New Caledonia (GMT +11:00:00)</option><option value="41"> Nouméa, Solomon Islands (GMT +11:00:00)</option><option value="1"> Eniwetok, Kwajalein (GMT +12:00:00)</option><option value="31"> Auckland, Wellington, Fiji, Kamchatka (GMT +13:00:00)</option><option value="32"> Chatham Islands (GMT +13:45:00)</option><option value="33"> New Zealand Daylight Time, Tonga (GMT +13:00:00)</option> </select>
</div>
</div>
</li>

<li class="control-group">
<input id="userNewsletter" class="checkbox" type="checkbox" value="1" name="userNewsletter"> <span class="f12">Inform me about new features and updates (no more than twice a month).</span>
<br>
<input id="userDevNewsletter" class="checkbox" type="checkbox" value="1" name="userDevNewsletter"> <span class="f12">Inform me about development/technical updates (API, IPs used..).</span>
<p>
<span class="f11"><strong>Note:</strong> important updates that can effect your usage of the service will still be delivered.</span>
</p>
</li>

</ul>
</fieldset>
<div id="editPersonalInfoSuccessNotification" class="alert alert-success no-margin hide">
<strong class="alert-success">Success!</strong> Personal information is now updated..
</div>
<div class="form-actions">
<button type="submit" class="btn btn-blue">Update</button>
</div>
</form>
<form id="editPersonalPasswordForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPersonalPassword" novalidate="novalidate">
<input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImVkaXRQZXJzb25hbFBhc3N3b3JkIiwidGltZXN0YW1wIjoxNjQ4MDExODc4fQ.5IQtw2NjJpkhE2ihIi7YTqSDIpjaJUfqygHYm0VlVIXJHnpUEL0C4UhSfJPDjgFRDhsz0vkkzoOPv6axVXkUSw" name="formToken">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4>Password <small>(not required if you won't be updating the password)</small></h4>
</li>

<li class="control-group">
<label for="userOldPassword" class="control-label">Current Password <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userOldPassword" class="span6" type="password" name="userOldPassword" value="">
</div>
</div>
</li>

<li class="control-group">
<label for="userNewPassword" class="control-label">New Password <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userNewPassword" class="span6" type="password" name="userNewPassword" value="">
</div>
</div>
</li>

<li class="control-group">
<label for="userNewPassword2" class="control-label">Repeat New Password <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userNewPassword2" class="span6" type="password" name="userNewPassword2" value="">
</div>
</div>
</li>

</ul>
</fieldset>
<div id="editPasswordSuccessNotification" class="alert alert-success no-margin hide">
<strong class="alert-success">Success!</strong> Password is now updated.
</div>
<div id="editPasswordErrorNotification" class="alert alert-error no-margin hide">
<strong class="alert-error">Ooops!</strong> Current password is not valid.
</div>
<div class="form-actions">
<button type="submit" class="btn btn-blue">Update</button>
 </div>
</form>
<form id="editPersonalEmailForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPersonalEmail" novalidate="novalidate">
<input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImVkaXRQZXJzb25hbEVtYWlsIiwidGltZXN0YW1wIjoxNjQ4MDExODc4fQ.putV9Q7hy_LvsGXCNEjLOwAHZn2ZUrqFBdb4AAEOZVUdfm8wgoQgegAMx-7PDmw07pVfLWCCV7fU-Ek9YUoNEQ" name="formToken">
<fieldset>
<legend class="section-form">E-mail</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group">
Your e-mail at UptimeRobot is <b>trivedikausha@gmail.com</b>. <a href="#" class="showUserNewEmailWrapper">I want to change it</a>.
</li>
<li class="control-group userNewEmailWrapper hide">
<label for="userNewEmail" class="control-label">New E-mail <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userNewEmail" class="span6" type="text" value="" name="userNewEmail">
</div>
</div>
</li>

</ul>
</fieldset>

<div id="editPersonalEmailSuccessNotification" class="alert alert-info no-margin hide">
<strong class="alert-info">One more step left!</strong> Please approve the e-mail sent to your new e-mail address.
</div>
<div id="editPersonalEmailAlertNotification" class="alert alert-alert no-margin hide">
<strong class="alert-alert">Ooops!</strong> This e-mail is in use by another UptimeRobot user.
</div>
<div class="form-actions userNewEmailWrapper hide">
<button type="submit" class="btn btn-blue">Update</button>
</div>
</form>
<fieldset>
<legend class="section-form">Two-Factor Authentication (2FA)</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group">
<input id="showQR" class="checkbox" type="checkbox" value="0" name="userAuthSetting">
<span id="authCheckBoxText" class="f12">Select to enable two-factor authentication for login.</span>
</li>

</ul>
</fieldset>
<div id="createQRModal" class="modal hide fade in" tabindex="-1" data-toggle="true"></div>
<form id="deleteAccountSendVerificationForm" data-formtoken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImRlbGV0ZUFjY291bnRTZW5kVmVyaWZpY2F0aW9uIiwidGltZXN0YW1wIjoxNjQ4MDExODc4fQ.fz-q7kZ41NyhlCxFoV7djT-Sd9MqeqIUNE2w8tnOVS6c15EzFVs21Ya5ckZM5_iQXhsWTYdetPTLuP2fYgYRMg" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deleteAccount">
<fieldset>
<legend class="section-form">Delete Account</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group">
UptimeRobot sends an "account deletion verification e-mail" to the account e-mail. Once the verification link inside the e-mail is clicked, all account information at UptimeRobot (including the account, monitors, logs and settings will be lost and <b>can not be recovered</b>).
<p><a href="#" class="showDeleteAccountSendVerificationWrapper">I still want to delete the account</a>.</p>
</li>
</ul>
</fieldset>

<div id="deleteAccountSendVerificationSuccessNotification" class="alert alert-info no-margin hide">
<strong class="alert-info">One more step left!</strong> Please approve the e-mail sent to your current e-mail address.
</div>
<div class="form-actions deleteAccountSendVerificationWrapper hide">
<button type="submit" class="btn btn-red">Send account deletion e-mail</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>

<div class="span6 grider alertContactsContainerList">
<div class="widget widget-simple widget-notes widgetToGetEmail" data-alertcontactaccountemail="trivedikausha@gmail.com">
<div class="widget-header">
<h4><i class="fontello-icon-users-1"></i> Alert Contacts</h4><div class="widget-tool">
<a class="btn btn-green btn-small btn-glyph addAlertContact" data-toggle="modal" href="#newAlertContact">Add Alert Contact</a>
</div>
</div>
<div class="widget-body">
<div class="alert alert-success hide" id="startStopAlertContactSuccessNotification"></div><h5 class="span7 alertContactResultText">There are
<span class="alertContactCount">3</span> alert contacts (
<a class="showHideAlertContactsInSettings" href="#no">hide them</a>).
</h5>
<button class="searchAlertContactBtn" type="button">
<i class="fontello-icon-search-5" style="margin-right:0;"></i>
</button>
<input class="span3 alertContactSearchKeyword" placeholder="Search" type="text" value="">
<div class="alertContactsTableShowHideList">
<table class="table table-condensed alertContactsTableList">
<thead>
<tr>
<th width="40px">Type</th>
<th>Alert Contact</th>
<th width="60px">Action</th>
</tr>
</thead>
<tbody><tr class="" data-alertcontactid="01668626">
<td><i class="fontello-icon-mail" title="E-mail"></i></td>
<td><span title="trivedikausha@gmail.com">trivedikausha@gmail.<span class="shortenLongAlertContacts"></span>..</span></td>
<td>
<a class="editBaseAccountEmailAlertContact" data-alertcontactid="1668626" data-toggle="modal" href="#editAlertContact">
<i class="fontello-icon-pencil" title="Edit Alert Contact"></i>
</a><a class="startStopAlertContact" data-alertcontactid="01668626" href="#" style="padding: 0px 0px 0px 3px;">
<i class="fontello-icon-pause-1" title="Disable Alert Contact">
</i>
</a>
</td>
</tr><tr data-alertcontactid="3445692" class="alertContactDisabled"><td><i class="fontello-icon-mail" title="E-mail"></i></td><td><span title="kaushatrivedi.18.cs@iite.indusuni.ac.in">kausha trivedi</span></td><td><a class="editAlertContact" data-alertcontactid="3445692" data-toggle="modal" href="#editAlertContact">
<i class="fontello-icon-pencil" title="Edit Alert Contact">
</i>
</a> <i class="fontello-icon-lock-1" title="Activation Required"></i> <a href="#deleteAlertContact" data-toggle="modal" data-alertcontactid="3445692" class="deleteAlertContact"><i class="fontello-icon-cancel-3" title="Delete Alert Contact"></i></a></td></tr><tr data-alertcontactid="3445694" class=""><td><i class="fontello-icon-mail" title="E-mail"></i></td><td><span title="kaushatrivedi.elsner@gmail.com">kausha</span></td><td><a class="editAlertContact" data-alertcontactid="3445694" data-toggle="modal" href="#editAlertContact">
<i class="fontello-icon-pencil" title="Edit Alert Contact">
</i>
</a> <a class="startStopAlertContact" data-alertcontactid="3445694" href="#">
<i class="fontello-icon-pause-1" title="Disable Alert Contact">
</i>
</a> <a href="#deleteAlertContact" data-toggle="modal" data-alertcontactid="3445694" class="deleteAlertContact"><i class="fontello-icon-cancel-3" title="Delete Alert Contact"></i></a></td></tr></tbody>
</table>
</div>
</div></div><input type="hidden" value="4" class="alertContactsLimitList">
</div>
<input type="hidden" class="getAlertContactsEditOrListDetector" value="1">
<div class="span6 grider mWindowsContainerList">
<div class="widget widget-simple widget-notes">
<div class="widget-header">
<h4>Maintenance Windows</h4>
</div>
<div class="widget-body">
<div class="alert alert-success hide" id="startStopMWindowSuccessNotification"></div><h5>This is a Pro Plan feature for auto-disabling/enabling monitoring on pre-defined periods.
<a class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" href="#upgradeAccount" data-cta-source="dashboard_setting-maintenance_windows">Upgrade</a>?</h5>
<div class="mWindowsTableShowHideList hide">
<table class="table table-condensed mWindowsTableList">
<thead>
<tr>
<th>Maintenance Windows</th>
<th width="60px">Action</th>
</tr>
</thead>
<tbody></tbody>
</table>
</div>
</div>
</div><input type="hidden" value="4" class="mWindowsLimitList">
</div>
<input type="hidden" class="getMWindowsEditOrListDetector" value="1">
<input type="hidden" class="getPspEditOrListDetector" value="1">
<div class="span6 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-rss"></i> RSS Notifications</h4>
</div>
<div class="widget-body">
<div class="row-fluid">
<div class="span12">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group userRSSLinkWrapper">
<div id="enableRSSLinkWrapper">
<button type="submit" id="enableRSSLinkButton" data-formtoken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImdlbmVyYXRlUlNTRmVlZEtleSIsInRpbWVzdGFtcCI6MTY0ODAxMTg3OH0.mxRaUdqWmBohwohBY_HhBK2zI6RXmT8OyIGyc6pHrkSueqDOaD7xCFA5F3Gpbsq8hMBBboXgp108Ml7mTt6bfg" class="btn btn-blue">Enable RSS</button>
</div>
<div id="disableRSSLinkWrapper" class="hide">
<button type="submit" id="disableRSSLinkButton" data-formtoken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImRlbGV0ZVJTU0ZlZWRLZXkiLCJ0aW1lc3RhbXAiOjE2NDgwMTE4Nzh9.dCVt-tH6HdVnNjBkXmyPtTvMYFMTCzEpm_9A4xUVPOucrX82sWFkMhiEi_QnDqLjSBxJgegMNicn-TVmygUXRA" class="btn btn-red">Disable RSS</button>
<br><br>
<span class="f14">
UptimeRobot notifications can be reached through RSS with <b><a href=":javascript " id="userRSSLink">this link</a></b>.</span>
(<a href="#" class="copyToClipboard" title=""><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
</div>
</li>
</ul>
</fieldset>
</div>
</div>
</div>
<div class="widget-footer">
</div>
</div>
</div>
<div class="span6 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-flash"></i> API Settings</h4>
</div>
<div class="widget-body">
<div class="row-fluid">
 <div class="span12">
<fieldset>
<legend class="section-form">Main API Key</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group" style="border-bottom:none;"> This is the API key that can control almost everything for your account (adding/editing/deleting monitors, alert contacts..).
<a href="#" class="showMainAPIKey">
Create the main API key.
</a>
</li>
<li class="control-group mainAPIKeyWrapper hide">
<div id="createMainAPIKeyWrapper">
<button type="submit" id="createMainAPIKeyButton" data-formtoken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImdlbmVyYXRlTWFpbkFQSUtleSIsInRpbWVzdGFtcCI6MTY0ODAxMTg3OH0.0n43iQmRa6BC3oW45fl9GyCkP5ZLJ9TdVIXL0MLYh7Zjk_V8CGp9VOZXGGaaKR2gYbcI5_uCxjiwlQqFxJFLnQ" class="btn btn-blue">Create the main API key</button>
</div>
<div id="deleteMainAPIKeyWrapper" class="hide">
The main API key is <span class="bold" id="mainAPIKeyValue">u1668626-</span> (<a href="#" id="mainAPIKeyCtC" class="copyToClipboard" title="u1668626-"><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
<div class="form-actions">
<button type="submit" id="deleteMainAPIKeyButton" data-formtoken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImRlbGV0ZU1haW5BUElLZXkiLCJ0aW1lc3RhbXAiOjE2NDgwMTE4Nzh9.HSAJOR-F6eS59s3Pnp1gvlrHSNyq1ZmJ31Mllam7gpcT5AeO8aa2-Gx-p9XjQ8lH4yh8JxxUXHapz-YamBFIKA" class="btn btn-red">Delete the main API key</button>
</div>
</div>
</li>

</ul>
</fieldset>

<form class="form-horizontal">
<fieldset>
<legend class="section-form">Monitor-Specific API Keys</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group" style="border-bottom:none;"> These are the API keys that can only use the read-only GetMonitors API method for a given monitor. They can be safely shared and/or used in client-side code as the main API key won't be revealed.
<a href="#" class="showMonitorAPIKey">Show/hide it.</a>
</li>
<div class="monitorAPIKeyWrapper hide">
<li class="control-group">
<label for="monitorAPIKeyMonitorID" class="control-label">Monitor</label>
<div class="controls">
<div class="select2-container span8" id="s2id_monitorAPIKeyMonitorID" style=""><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-76">Search</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen76" class="select2-offscreen">Monitor</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-76" id="s2id_autogen76"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen76_search" class="select2-offscreen">Monitor</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-76" id="s2id_autogen76_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-76">   </ul></div></div><input type="hidden" id="monitorAPIKeyMonitorID" class="span8" tabindex="-1" title="Monitor" style="display: none;">
</div>
</li>
<li class="control-group monitorAPIKeyWrapper2">
<div id="createMonitorAPIKeyWrapper" class="hide">
The monitor doesn't have an API key.
<div class="form-actions">
<button type="submit" id="createMonitorAPIKeyButton" class="btn btn-blue">Create API key for the monitor</button>
</div>
</div>
<div id="deleteMonitorAPIKeyWrapper" class="hide">
API key for this monitor is: <span class="bold" id="monitorAPIKeyValue"></span> (<a href="#" class="copyToClipboard" title=""><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
<div class="form-actions">
<button type="submit" id="deleteMonitorAPIKeyButton" class="btn btn-red">Delete monitor's API key</button>
</div>
</div>
</li>
</div>

</ul>
</fieldset>
</form>

</div>
<fieldset>
<legend class="section-form">Read-Only API Key</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group" style="border-bottom:none;"> This is the API key that can only use the read-only GetMonitors API method call for all monitors. It can be safely shared and/or used in client-side code as the main API key won't be revealed.
<a href="#" class="showReadOnlyAPIKey">
Create the read-only API key.
</a>
</li>
<li class="control-group readOnlyAPIKeyWrapper hide">
<div id="createReadOnlyAPIKeyWrapper">
<button type="submit" id="createReadOnlyAPIKeyButton" data-formtoken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImdlbmVyYXRlUmVhZE9ubHlBUElLZXkiLCJ0aW1lc3RhbXAiOjE2NDgwMTE4Nzh9.gsIIDzaxwG24qNDiEaUfLE7G4HhrMN0PuCQ72tEsQHFTYrz6Rl7KOtqxl0MUcCEkBAc6-QPDlySdQAWQxK_Ndw" class="btn btn-blue">Create the Read Only API key</button>
</div>
<div id="deleteReadOnlyAPIKeyWrapper" class="hide">
The Read Only API key is <span class="bold" id="readOnlyAPIKeyValue">ur1668626-</span> (<a href="#" id="readOnlyAPIKeyCtC" class="copyToClipboard" title="ur1668626-"><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
<div class="form-actions">
 <button type="submit" id="deleteReadOnlyAPIKeyButton" data-formtoken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImRlbGV0ZVJlYWRPbmx5QVBJS2V5IiwidGltZXN0YW1wIjoxNjQ4MDExODc4fQ.J6aiz1EfxWbChsO96A-lZU5FK6xC9vfEXr4iUCg26AFdtOoBvQE_qdldpMPQm-rKEVz2UPNEYJElT4N1ZvKfOg" class="btn btn-red">Delete the Read Only API key</button>
</div>
</div>
</li>

</ul>
</fieldset>

</div>
</div>
<div class="widget-footer">
</div>
</div>
</div>

</div>

</div>
</div>

<div id="footer" class="row-fluid text-color" style="background:#dfdfdf; padding: 10px 10px 0 10px; font-size: 11px; height:40px;">
<div class="span12">
<a href="privacyPolicy">Privacy Policy</a> / <a href="termsOfService">Terms</a> / <a href="locations">Locations &amp; IPs</a> --- <a href="faq">FAQ</a> / <a href="support">Contact Us</a> --- <a href="api">API</a>
</div>
</div>

<div id="editMonitor" class="modal hide fade" tabindex="-1" data-width="60%">
<div class="modal-header"> </div>
<form id="editMonitorForm" class="form-horizontal" method="POST" action="" autocomplete="off" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span7 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Edit Monitor </h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Monitor Information</h4>
</li>

<li class="control-group">
<label for="editMonitorType" class="control-label">Monitor Type</label>
<div class="controls">
<span class="bold" id="editMonitorTypeTitle"></span>
<input id="editMonitorType" class="span6" type="hidden" value="" name="editMonitorType">
</div>
</li>

<div class="hide" id="editHTTPMonitor">
 <li class="control-group">
<label for="editHTTPMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="editHTTPMonitorFriendlyName" class="span6" type="text" value="" name="editHTTPMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="editHTTPMonitorURL" class="control-label">URL (or IP)</label>
<div class="controls">
<input id="editHTTPMonitorURL" class="span8" type="text" name="editHTTPMonitorURL" value="">
</div>
</li>

<li class="control-group">
<label for="editHTTPMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="editHTTPMonitorIntervalDisplay">61</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="editHTTPMonitorInterval" name="editHTTPMonitorInterval" value="5" class="hide">
</div>
</li>
<li class="control-group">
<label for="newHTTPMonitorTimeout" class="control-label">Monitor Timeout</label>
<div class="controls">
<div class="noUiSlider span6 timeoutSlider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-508.475%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="60.0" aria-valuenow="30.0" aria-valuetext="30"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">in <span class="timeoutInText"></span>
<input type="text" name="editHTTPMonitorTimeout" value="1" class="hide monitorTimeout">
</span></div>
</li>
<li class="control-group">
<label for="editHTTPMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
<div class="controls">
<input id="editHTTPMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="editHTTPMonitorIgnoreSSLErrors" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<li class="control-group">
<label for="editHTTPMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
<div class="controls">
<input id="editHTTPMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="editHTTPMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<div class="sslHttpsWarning hide">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
<li class="section-form">
<h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#editHTTPMonitorAdvancedSettings">show/hide</a></small></h4>
</li>
<div class="collapse" id="editHTTPMonitorAdvancedSettings">
<div class="accordion-group subSection">
<li class="section-form">
<h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#editHTTPMonitorAdvancedSettings" data-target="#editHTTPMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
</li>
<div class="collapse" id="editHTTPMonitorAdvancedSettingsAuthentication">
<li class="control-group">
<label for="editHTTPMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
<div class="controls">
<input id="editHTTPMonitorHTTPUsername" class="span6" type="text" name="editHTTPMonitorHTTPUsername" value="" autocomplete="off">
</div>
</li>

<li class="control-group">
<label for="editHTTPMonitorHTTPPassword" class="control-label">Password</label>
<div class="controls">
<div class="input-append">
<input id="editHTTPMonitorHTTPPassword" class="span8 passwordHolder" type="password" name="editHTTPMonitorHTTPPassword" value="" autocomplete="new-password">
<span class="add-on"><i class="glyphicon fontello-icon-eye reveal"></i></span>
</div>
</div>
</li>
<li class="control-group">
<label for="editHTTPMonitorAuthType" class="control-label">Authentication Type</label>
<div class="controls">
<div data-toggle="buttons-radio" class="btn-group">
<button id="editHTTPMonitorAuthTypeBasic" onclick="javascript:document.getElementById('editHTTPMonitorAuthType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
<button id="editHTTPMonitorAuthTypeRealm" onclick="javascript:document.getElementById('editHTTPMonitorAuthType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
</div>
<input type="hidden" id="editHTTPMonitorAuthType" value="" name="editHTTPMonitorAuthType">
</div>
</li>
</div>
</div>
<div class="accordion-group subSection">
<li class="section-form">
<h4>Custom Http Statuses <small><a href="#" data-toggle="collapse" data-parent="#editHTTPMonitorAdvancedSettings" data-target="#editHTTPMonitorAdvancedSettingsCustomHttpStatuses">show/hide</a></small></h4>
</li>
<div class="collapse" id="editHTTPMonitorAdvancedSettingsCustomHttpStatuses">
<div class="span12" style="position:absolute;top: 50%;left: 35%;">
<span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span>
Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</span>
</div>
<div class="opaci15 blur disableTouch noSelect">
<div class="row-fluid">
<div class="statusCodesBlock upstatuses">
<li class="control-group">
<label for="editHTTPStatusCodesUpValues" class="control-label">Up Status Codes: </label>
</li>
<li class="control-group upStatusesBlock">
</li>
</div>
<div class="statusCodesBlock downstatuses">
<li class="control-group">
<label for="editHTTPStatusCodesUpValues" class="control-label">Down Status Codes: </label>
</li>
<li class="control-group downStatusesBlock">
</li>
</div>
</div>
<div class="row-fluid">
<button type="button" class="httpStatusCodesResetBtn btn btn-grey btn-mini pull-right">Reset HTTP Statuses</button>
</div>
</div>
</div>
</div>
<div class="accordion-group subSection">
<li class="section-form">
<h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#editHTTPMonitorAdvancedSettings" data-target="#editHTTPMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
</li>
<div class="collapse" id="editHTTPMonitorAdvancedSettingsCustomHeaders">
<div class="span12" style="position:absolute;top: 50%;left: 35%;">
<span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span>
Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</span>
</div>
<div class="opaci15 blur">
<li class="control-group">
<label for="editHTTPMonitorCustomHeaders" class="control-label">Custom Headers</label>
<div class="editHTTPMonitorCustomHeadersContainer monitorCustomHeadersContainer"></div>
<div class="controls">
<button type="button" class="monitorCustomHeaderBtn editHTTPMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="editHTTPMonitorCustomHeaders" disabled="">Add Custom Header</button>
</div>
</li>
</div>
</div>
</div>
</div>
</div>
<div class="hide" id="editKeywordMonitor">
<li class="control-group">
<label for="editKeywordMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="editKeywordMonitorFriendlyName" class="span6" type="text" value="" name="editKeywordMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="editKeywordMonitorURL" class="control-label">URL (or IP)</label>
<div class="controls">
<input id="editKeywordMonitorURL" class="span8" type="text" name="editKeywordMonitorURL" value="">
</div>
</li>

<li class="control-group">
<label for="editKeywordMonitorKeywordValue" class="control-label">Keyword</label>
<div class="controls">
<input id="editKeywordMonitorKeywordValue" class="span6" type="text" value="" name="editKeywordMonitorKeywordValue">
<span class="help-block">(the keyword must be present in the HTML source)</span>
</div>
</li>

<li class="control-group">
<label for="editKeywordCaseType" class="control-label">Case-insensitive</label>
<div class="controls">
<input id="editKeywordCaseType" class="leftFloat" type="checkbox" name="editKeywordCaseType" value="1">
</div>
</li>
<li class="control-group">
<label for="editKeywordMonitorKeywordType" class="control-label">Alert When</label>
<div class="controls">
<div data-toggle="buttons-radio" class="btn-group">
<button id="editKeywordMonitorKeywordTypeExists" onclick="javascript:document.getElementById('editKeywordMonitorKeywordType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">Keyword Exists</button>
<button id="editKeywordMonitorKeywordTypeNotExists" onclick="javascript:document.getElementById('editKeywordMonitorKeywordType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Keyword Not Exists</button>
</div>
<span class="help-block">(the event log will be erased when you change this setting)</span>
<input type="hidden" id="editKeywordMonitorKeywordType" value="" name="editKeywordMonitorKeywordType">
</div>
</li>

<li class="control-group">
<label for="editKeywordMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="editKeywordMonitorIntervalDisplay">61</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="editKeywordMonitorInterval" name="editKeywordMonitorInterval" class="hide">
 </div>
</li>
<li class="control-group">
<label for="editKeywordMonitorTimeout" class="control-label">Monitor Timeout</label>
<div class="controls">
<div class="noUiSlider span6 timeoutSlider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-508.475%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="60.0" aria-valuenow="30.0" aria-valuetext="30"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">in <span class="timeoutInText"></span>
<input type="text" name="editKeywordMonitorTimeout" value="1" class="hide monitorTimeout">
</span></div>
</li>
<li class="control-group">
<label for="editKeywordMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
<div class="controls">
<input id="editKeywordMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="editKeywordMonitorIgnoreSSLErrors" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<li class="control-group">
<label for="editKeywordMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
<div class="controls">
<input id="editKeywordMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="editKeywordMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<div class="sslHttpsWarning hide">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
<li class="section-form">
<h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#editKeywordMonitorAdvancedSettings">show/hide</a></small></h4>
</li>
<div class="collapse" id="editKeywordMonitorAdvancedSettings">
<div class="accordion-group subSection">
<li class="section-form">
<h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#editKeywordMonitorAdvancedSettings" data-target="#editKeywordMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
</li>
<div class="collapse" id="editKeywordMonitorAdvancedSettingsAuthentication">
<li class="control-group">
<label for="editKeywordMonitorHTTPUsername" class="control-label">Username</label>
<div class="controls">
<input id="editKeywordMonitorHTTPUsername" class="span6" type="text" name="editKeywordMonitorHTTPUsername" value="" autocomplete="off">
</div>
</li>

<li class="control-group">
<label for="editKeywordMonitorHTTPPassword" class="control-label">Password</label>
<div class="controls">
<div class="input-append">
<input id="editKeywordMonitorHTTPPassword" class="span8 passwordHolder" type="password" name="editKeywordMonitorHTTPPassword" value="" autocomplete="new-password">
<span class="add-on"><i class="glyphicon fontello-icon-eye reveal"></i></span>
</div>
</div>
</li>
<li class="control-group">
<label for="editKeywordMonitorAuthType" class="control-label">Authentication Type</label>
<div class="controls">
<div data-toggle="buttons-radio" class="btn-group">
<button id="editKeywordMonitorAuthTypeBasic" onclick="javascript:document.getElementById('editKeywordMonitorAuthType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
<button id="editKeywordMonitorAuthTypeRealm" onclick="javascript:document.getElementById('editKeywordMonitorAuthType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
</div>
<input type="hidden" id="editKeywordMonitorAuthType" value="" name="editKeywordMonitorAuthType">
</div>
</li>
</div>
</div>
<div class="accordion-group subSection">
<li class="section-form">
<h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#editKeywordMonitorAdvancedSettings" data-target="#editKeywordMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
</li>
<div class="collapse" id="editKeywordMonitorAdvancedSettingsCustomHeaders">
<div class="span12" style="position:absolute;top: 50%;left: 35%;">
<span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span>
Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</span>
</div>
<div class="opaci15 blur">
<li class="control-group">
<label for="editKeywordMonitorCustomHeaders" class="control-label">Custom Headers</label>
<div class="editKeywordMonitorCustomHeadersContainer monitorCustomHeadersContainer"></div>
<div class="controls">
<button type="button" class="monitorCustomHeaderBtn editKeywordMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="editKeywordMonitorCustomHeaders">Add Custom Header</button>
</div>
</li>
</div>
</div>
</div>
</div>
</div>
<div class="hide" id="editPingMonitor">
<li class="control-group">
<label for="editPingMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="editPingMonitorFriendlyName" class="span6" type="text" value="" name="editPingMonitorFriendlyName">
</div>
</li>

<li class="control-group">
 <label for="editPingMonitorURL" class="control-label">IP (or Host)</label>
<div class="controls">
<input id="editPingMonitorURL" class="span8" type="text" name="editPingMonitorURL" value="">
</div>
</li>
<li class="control-group">
<label for="editPingMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="editPingMonitorIntervalDisplay">61</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="editPingMonitorInterval" name="editPingMonitorInterval" class="hide">
</div>
</li>

</div>
<div class="hide" id="editPortMonitor">
<li class="control-group">
<label for="editPortMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="editPortMonitorFriendlyName" class="span6" type="text" value="" name="editPortMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="editPortMonitorURL" class="control-label">IP (or URL or Host)</label>
<div class="controls">
<input id="editPortMonitorURL" class="span8" type="text" name="editPortMonitorURL" value="">
</div>
</li>

<li class="control-group">
<label for="editPortMonitorPort" class="control-label">Port</label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editPortMonitorPort" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3">Please select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen">Port</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen3_search" class="select2-offscreen">Port</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-3">   </ul></div></div><select id="editPortMonitorPort" class="selecttwo span6" name="editPortMonitorPort" tabindex="-1" title="Port" style="display: none;">
<option value="" selected="selected">Please select</option>
 <optgroup label="Popular Ports">
<option value="1">HTTP (80)</option>
<option value="2">HTTPS (443)</option>
<option value="3">FTP (21)</option>
<option value="4">SMTP (25)</option>
<option value="5">POP3 (110)</option>
<option value="6">IMAP (143)</option>
</optgroup>
<optgroup label="Custom Port">
<option value="99">Custom Port</option>
</optgroup>
</select>
</div>
</li>

<li class="control-group hide" id="editPortMonitorCustomPortWrapper">
<label for="editPortMonitorCustomPort" class="control-label">Custom Port</label>
<div class="controls">
<input id="editPortMonitorCustomPort" class="span6" type="text" value="" name="editPortMonitorCustomPort">
</div>
</li>

<li class="control-group">
<label for="editPortMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="editPortMonitorIntervalDisplay">61</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="editPortMonitorInterval" name="editPortMonitorInterval" class="hide">
</div>
</li>
<li class="control-group">
<label for="editPortMonitorTimeout" class="control-label">Monitor Timeout</label>
<div class="controls">
<div class="noUiSlider span6 timeoutSlider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-508.475%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="60.0" aria-valuenow="30.0" aria-valuetext="30"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">in <span class="timeoutInText"> seconds</span>
 <input type="text" name="editPortMonitorTimeout" value="1" class="hide monitorTimeout">
</span></div>
</li>
</div>
<div class="hide" id="editHBMonitor">
<li class="control-group">
<label for="editHBMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="editHBMonitorFriendlyName" class="span6" type="text" value="" name="editHBMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="editHBMonitorURL" class="control-label">IP (or Host)</label>
<div class="controls">
<span id="editHBMonitorURL" style="word-break:break-all;"></span>
<span class="help-block">
(<a href="https://uptimerobot.com/heartbeatMonitoring" target="_blank">How to send regular HTTP requests in Unix/Linux and Windows?</a>)<p></p>
</span>
</div>
</li>
<li class="control-group">
<label for="editHBMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">

<input type="number" id="editHBMonitorIntervalInput" name="editHBMonitorIntervalInput" value="5" min="5" class="span3" style="float: left !important" max="44640">
<div class="span3">
<select name="editHBMonitorIntervalType" id="editHBMonitorIntervalType" style="width: 100%;">
<option value="1" selected="selected" data-text="minute">minute</option>
<option value="60" data-text="hour">hours</option>
<option value="1440" data-text="day">days</option>
</select>
</div>
<input type="text" id="editHBMonitorInterval" name="editHBMonitorInterval" class="hide">
</div>
</li>

<li class="control-group">
<label for="editHBMonitorGracePeriodInput" class="control-label">Grace Period</label>
<div class="controls" style="position: relative;">

<input type="number" id="editHBMonitorGracePeriodInput" name="editHBMonitorGracePeriodInput" value="30" class="span3" style="float: left !important" min="0" max="86400">
<div class="span3">
<select name="editHBMonitorGracePeriodType" id="editHBMonitorGracePeriodType" style="width: 100%;">
<option value="1" selected="" data-text="second">seconds</option>
<option value="60" data-text="minute">minutes</option>
<option value="3600" data-text="hour">hours</option>
</select>
</div>
<div class="clearfix span12">
<input type="hidden" name="editHBMonitorGracePeriod" value="0" id="editHBMonitorGracePeriod" class="editHBMonitorGracePeriod">
</div>
<p style="margin-top: 15px; clear: both;" class="help-block">
<i class="fontello-icon-help-circled"></i> Useful for jobs with varying runtime to prevent false positives. If set to 1 hour, monitor will add a 1-hour buffer to the monitoring interval.
</p>
</div>
</li>
</div>
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>
 
<div id="editMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide" style="">
<strong class="alert-success">Monitor edited!</strong> You can keep editing it.
</div>
<div id="editMonitorErrorNotificationExist" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-error">This monitor url is already in the list.</strong>.
</div>
<div id="editMonitorBlacklistErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-error">The monitor URL/IP is in blacklist, please try with another URL/IP</strong>.
</div>
<div id="editMonitorInvalidUrlErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-error">The monitor URL/IP is invalid, please try with another URL/IP</strong>.
</div>
</div>

<div class="span5 grider">
<input type="hidden" name="alertContactsInputEdit" class="alertContactsInputEdit">
<div id="editMonitorAlertContacts" class="alertContactsContainerEdit">
</div>
<input type="hidden" class="getAlertContactsEditOrListDetector" value="0">
<input type="hidden" name="mWindowsInputEdit" class="mWindowsInputEdit">
<input type="hidden" class="getMWindowsEditOrListDetector" value="0">
</div>

</div>

</div>
</div>
<div class="modal-footer">
<span class="pull-left" style="margin-top:6px;">
<a href="#" id="previousMonitorLink" class="getMonitor hide"> « Previous Monitor</a>
<span id="brackets"> - </span>
<a href="#" id="nextMonitorLink" class="getMonitor hide"> Next Monitor »</a>
</span>
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary">Save Changes</button>
</div>
</form>
</div>
<div id="deleteMonitor" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="deleteMonitorForm" class="form-horizontal" method="POST" action="">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Delete Monitor </h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
 <li class="section-form">
<h4 class="test">Monitor Information</h4>
</li>

<li class="control-group">
<label for="deleteMonitorType" class="control-label">Monitor Type</label>
<div class="controls">
<span class="bold" id="deleteMonitorTypeTitle"></span>
</div>
<input type="hidden" name="deleteMonitorID" id="deleteMonitorID">
</li>

<li class="control-group">
<label for="deleteMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<span class="bold" id="deleteMonitorFriendlyNameTitle" style="word-break:break-all;"></span>
</div>
</li>

<li class="control-group">
<label for="deleteMonitorURL" class="control-label">URL (or IP)</label>
<div class="controls">
<span class="bold" id="deleteMonitorURLTitle" style="word-break:break-all;"></span>
</div>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="deleteMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Monitor deleted!</strong>
</div>
<div id="deleteMonitorInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-warning">Warning!</strong> You are about to delete this monitor and any logs related to it.
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="deleteMonitorFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="deleteMonitorFormSubmitButton">Delete Monitor</button>
</div>
</form>
</div>
<div id="resetMonitor" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="resetMonitorForm" class="form-horizontal" method="POST" action="">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Reset Monitor </h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Monitor Information</h4>
</li>

<li class="control-group">
<label for="resetMonitorType" class="control-label">Monitor Type</label>
<div class="controls">
<span class="bold" id="resetMonitorTypeTitle"></span>
</div>
<input type="hidden" name="resetMonitorID" id="resetMonitorID">
</li>

<li class="control-group">
<label for="resetMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<span class="bold" id="resetMonitorFriendlyNameTitle" style="word-break:break-all;"></span>
</div>
</li>

<li class="control-group">
<label for="resetMonitorURL" class="control-label">URL (or IP)</label>
<div class="controls">
<span class="bold" id="resetMonitorURLTitle" style="word-break:break-all;"></span>
</div>
</li>

 </ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="resetMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Monitor is reset!</strong>.
</div>
<div id="resetMonitorInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-warning">Warning!</strong> You are about to delete any logs and reset the stats of this monitor.
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="resetMonitorFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="resetMonitorFormSubmitButton">Reset Monitor</button>
</div>
</form>
</div>

<div id="deleteAlertContact" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="deleteAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deleteAlertContact">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Delete Alert Contact</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Alert Contact Information</h4>
</li>

<li class="control-group">
<label for="deleteAlertContactType" class="control-label">Alert Contact Type</label>
<div class="controls">
<span class="bold" id="deleteAlertContactTypeTitle"></span>
</div>
</li>

<li class="control-group">
<label for="deleteAlertContactValue" class="control-label">Alert Contact</label>
<div class="controls">
<span class="bold" id="deleteAlertContactValueTitle"></span>
</div>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="deleteAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
 <strong class="alert-success">Alert contact deleted!</strong>.
</div>
<div id="deleteAlertContactInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-warning">Warning!</strong> You are about to delete this alert contact and it will be removed from any monitors it is attached to (monitors will not be deleted).
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="deleteAlertContactFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="deleteAlertContactFormSubmitButton">Delete Alert Contact</button>
</div>
</form>
</div>
<div id="activateAlertContact" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="activateAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=activateAlertContact">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Activate Alert Contact</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Alert Contact Information</h4>
</li>

<li class="control-group">
<label for="activateAlertContactType" class="control-label">Alert Contact Type</label>
<div class="controls">
<span class="bold" id="activateAlertContactTypeTitle"></span>
</div>
</li>

<li class="control-group">
<label for="activateAlertContactValue" class="control-label">Alert Contact</label>
<div class="controls">
<span class="bold" id="activateAlertContactValueTitle"></span>
</div>
</li>
<li id="activateTelegramAlertNotStarted" class="control-group hide">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> In order to activate the Telegram alert contact, it is needed to /start a dialog with the Telegram UptimeRobot Bot. Please <a href="https://telegram.me/officialuptimerobot?start=">click this custom link and start the dialog on Telegram</a>, <b>for this alert contact to work</b>.
</div>
</li>
<li id="activateGoogleAdWordsAlertNoAuth" class="control-group hide">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> Please <em>sign in with Google</em> to complete Google AdWords Authentication process. After Google AdWords authentication you have to edit alert contact to select which campaigns should be managed depending on your monitor.<br><a class="sign_in_with_google" href="inc/lib/GoogleAdWords/index.php?auth=1&amp;dacid=" onclick="javascript:window.open('inc/lib/GoogleAdWords/index.php?auth=1&amp;dacid=','google_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><b>Sign in with Google</b></a>.
</div>
</li>
<li id="activateGoogleAdWordsAlertYesAuthNoActive" class="control-group hide">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> You have already completed the Google Authentication process. To activate the monitor please edit this alert contact and choose related Ad Campaigns.
</div>
</li>
<li id="activateFacebookAdsAlertNoAuth" class="control-group hide">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> Please <em>sign in with Facebook</em> to complete Facebook Ads Authentication process. After Facebook Ads authentication you have to edit alert contact to select which campaigns should be managed depending on your monitor.<br><a class="sign_in_with_facebook" href="inc/lib/FacebookAds/index.php?auth=1&amp;dacid=" onclick="javascript:window.open('inc/lib/FacebookAds/index.php?auth=1&amp;dacid=','facebook_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><b>Sign in with Facebook</b></a>.
</div>
</li>
<li id="activateFacebookAdsAlertYesAuthNoActive" class="control-group hide">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> You have already completed the Facebook Authentication process. To activate the monitor please edit this alert contact and choose related Ad Campaigns.
</div>
</li>
<li class="control-group" id="activateAlertContactActivationCodeContainer">
<label for="activateAlertContactActivationCode" class="control-label">Activation Code</label>
<div class="controls">
<input id="activateAlertContactActivationCode" class="span6" type="text" value="" name="activateAlertContactActivationCode" autocomplete="one-time-code">
</div>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="activateAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Alert contact activated!</strong>.
</div>
<div id="activateAlertContactErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-error">Oops!</strong> The activation code is not valid. Please try again.
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="activateAlertContactFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="activateAlertContactFormSubmitButton">Activate Alert Contact</button>
</div>
</form>
</div>
<div id="editAlertContact" class="modal hide fade" tabindex="-1" data-width="40%">
<div class="modal-header"> </div>
<form id="editAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editAlertContact" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Edit Alert Contact</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Alert Contact Information</h4>
</li>

<li class="control-group">
<label for="editAlertContactType" class="control-label">Alert Contact Type <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editAlertContactTypeTitle"></span>
<input id="editAlertContactType" class="span6" type="hidden" value="" name="editAlertContactType">
</div>
</li>

<div class="hide" id="editMobileFreeAlertContact">
<li class="control-group">
<label for="editMobileFreeAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editMobileFreeAlertContactFriendlyName" class="span6" type="text" value="" name="editMobileFreeAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editMobileFreeAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editMobileFreeAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editMobileFreeAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editMobileFreeAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-23">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen23" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-23" id="s2id_autogen23"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen23_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-23" id="s2id_autogen23_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-23">   </ul></div></div><select id="editMobileFreeAlertContactExcludeNotifications" class="selecttwo span6" name="editMobileFreeAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editMobileFreeAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editMobileFreeAlertContactSSLExpirationReminder" id="editMobileFreeAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
 </div>
</li>
</div>
<div class="hide" id="editEmailAlertContact">
<li class="control-group">
<label for="editEmailAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editEmailAlertContactFriendlyName" class="span6" type="text" value="" name="editEmailAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editEmailAlertContactValue" class="control-label">E-mail <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editEmailAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editEmailAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editEmailAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-24">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen24" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-24" id="s2id_autogen24"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen24_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-24" id="s2id_autogen24_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-24">   </ul></div></div><select id="editEmailAlertContactExcludeNotifications" class="selecttwo span6" name="editEmailAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editEmailAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editEmailAlertContactSSLExpirationReminder" id="editEmailAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>

 </div>
<div class="hide" id="editTwitterAlertContact">
<li class="control-group">
<label for="editTwitterAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editTwitterAlertContactFriendlyName" class="span6" type="text" value="" name="editTwitterAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editTwitterAlertContactValue" class="control-label">Twitter User <span class="required">*</span></label>
<div class="controls">
@<span class="bold" id="editTwitterAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editTwitterAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editTwitterAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-25">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen25" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-25" id="s2id_autogen25"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen25_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-25" id="s2id_autogen25_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-25">   </ul></div></div><select id="editTwitterAlertContactExcludeNotifications" class="selecttwo span6" name="editTwitterAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editTwitterAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editTwitterAlertContactSSLExpirationReminder" id="editTwitterAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editBoxcarAlertContact">
<li class="control-group">
 <label for="editBoxcarAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editBoxcarAlertContactFriendlyName" class="span6" type="text" value="" name="editBoxcarAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editBoxcarAlertContactValue" class="control-label">Boxcar Access Token <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editBoxcarAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editBoxcarAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editBoxcarAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-26">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen26" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-26" id="s2id_autogen26"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen26_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-26" id="s2id_autogen26_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-26">   </ul></div></div><select id="editBoxcarAlertContactExcludeNotifications" class="selecttwo span6" name="editBoxcarAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editBoxcarAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editBoxcarAlertContactSSLExpirationReminder" id="editBoxcarAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editWebHookAlertContact">
<li class="control-group">
<label for="editWebHookAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editWebHookAlertContactFriendlyName" class="span6" type="text" value="" name="editWebHookAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editWebHookAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
<div class="controls">
<textarea id="editWebHookAlertContactValue" class="span6" type="text" name="editWebHookAlertContactValue" rows="4"></textarea>
<span class="help-block">
<input id="editWebHookAlertContactValueSendQueryString" type="checkbox" name="editWebHookAlertContactValueSendQueryString" value="1"> Send default variables as a query string
</span>
</div>
</li>
<li class="control-group">
<label for="editWebHookAlertContactPOSTValue" class="control-label">POST Value (JSON Format)</label>
<div class="controls">
<textarea id="editWebHookAlertContactPOSTValue" class="span6" type="text" name="editWebHookAlertContactPOSTValue" rows="4" placeholder="{&quot;sampleParameter&quot;: &quot;Message from UptimeRobot&quot;,&quot;website&quot;: &quot;*monitorURL*&quot;}"></textarea>
<span class="help-block"><input type="checkbox" id="editWebHookAlertContactPOSTValueSendJSON" name="editWebHookAlertContactPOSTValueSendJSON" value="1"> Send as JSON (application/json). </span>
<span class="help-block"><input type="checkbox" id="editWebHookAlertContactPOSTValueSendPOST" name="editWebHookAlertContactPOSTValueSendPOST" value="1"> Send default variables as POST parameters</span>
</div>
</li>
<li class="control-group">
<label for="editWebHookAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editWebHookAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-27">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen27" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-27" id="s2id_autogen27"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen27_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-27" id="s2id_autogen27_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-27">   </ul></div></div><select id="editWebHookAlertContactExcludeNotifications" class="selecttwo span6" name="editWebHookAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editWebHookAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editWebHookAlertContactSSLExpirationReminder" id="editWebHookAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<p>UptimeRobot will add the below querystring to the end of the requests sent for <b>up-down events</b>:</p>
<code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;alertDuration=*alertDuration*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
<p>And. it will add the below querystring to the end of the requests sent for <b>SSL expiry notifications</b>:</p>
<code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;sslExpiryDate=*sslExpiryDate&amp;sslExpiryDaysLeft=*sslExpiryDaysLeft*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
<p>Or, you can create a totally custom web-hook URL by using the variables.</p>
<p><a class="btn btn-primary newWebHookAlertContactDetailsButton">Show/Hide Details &amp; Variables</a></p>
<div class="newWebHookAlertContactDetails hide">
<p>If the default web-hook structure mentioned above is not a good fit for you, feel free to use the variables below in the web-hook URLs:</p>
<ul>
<li><code>*monitorID*</code> (the ID of the monitor)</li>
<li><code>*monitorURL*</code> (the URL of the monitor)</li>
<li><code>*monitorFriendlyName*</code> (the friendly name of the monitor)</li>
<li><code>*alertType*</code> (1: down, 2: up, 3: SSL expiry notification)</li>
<li><code>*alertTypeFriendlyName*</code> (Down or Up)</li>
<li><code>*alertDetails*</code> (any info regarding the alert -if exists-)</li>
<li><code>*alertDuration*</code> (in seconds and only for up events)</li>
<li><code>*alertDateTime*</code> (in Unix timestamp)</li>
<li><code>*monitorAlertContacts*</code> (the alert contacts associated with the alert in the format of 457;2;john@doe.com -alertContactID;alertContactType, alertContactValue)</li>
<li><code>*sslExpiryDate*</code> (only for SSL expiry notifications)</li>
<li><code>*sslExpiryDaysLeft*</code> (only for SSL expiry notifications)</li>
</ul>
</div>
</div>
</li>

</div>
<div class="hide" id="editPushbulletAlertContact">
<li class="control-group">
<label for="editPushbulletAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editPushbulletAlertContactFriendlyName" class="span6" type="text" value="" name="editPushbulletAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editPushbulletAlertContactValue" class="control-label">Pushbullet Access Token <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editPushbulletAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editPushbulletAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editPushbulletAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-28">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen28" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-28" id="s2id_autogen28"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen28_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-28" id="s2id_autogen28_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-28">   </ul></div></div><select id="editPushbulletAlertContactExcludeNotifications" class="selecttwo span6" name="editPushbulletAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editPushbulletAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editPushbulletAlertContactSSLExpirationReminder" id="editPushbulletAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editZapierAlertContact">
<li class="control-group">
<label for="editZapierAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editZapierAlertContactFriendlyName" class="span6" type="text" value="" name="editZapierAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editZapierAlertContactValue" class="control-label">Zapier Hook URL <span class="required">*</span></label>
<div class="controls">
<input id="editZapierAlertContactValue" class="span6" type="text" value="" name="editZapierAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="editZapierAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editZapierAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-29">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen29" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-29" id="s2id_autogen29"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen29_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-29" id="s2id_autogen29_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-29">   </ul></div></div><select id="editZapierAlertContactExcludeNotifications" class="selecttwo span6" name="editZapierAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editZapierAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editZapierAlertContactSSLExpirationReminder" id="editZapierAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> Please, <a href="https://zapier.com/developer/invite/7929/34260862469ef61e98577e5e2234a539/" target"_blank"="">click this link</a> for using the UptimeRobot app on Zapier (as it is not public yet).
</div>
</li>
</div>
<div class="hide" id="editProSMSAlertContact">
<li class="control-group">
 <label for="editProSMSAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editProSMSAlertContactFriendlyName" class="span6" type="text" value="" name="editProSMSAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editProSMSAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editProSMSAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editProSMSAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editProSMSAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-30">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen30" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-30" id="s2id_autogen30"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen30_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-30" id="s2id_autogen30_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-30">   </ul></div></div><select id="editProSMSAlertContactExcludeNotifications" class="selecttwo span6" name="editProSMSAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editProSMSAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editProSMSAlertContactSSLExpirationReminder" id="editProSMSAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editProVoiceCallAlertContact">
<li class="control-group">
<label for="editProVoiceCallAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
 <div class="controls">
<input id="editProVoiceCallAlertContactFriendlyName" class="span6" type="text" value="" name="editProVoiceCallAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editProVoiceCallAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editProVoiceCallAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editProVoiceCallAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editProVoiceCallAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-31">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen31" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-31" id="s2id_autogen31"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen31_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-31" id="s2id_autogen31_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-31">   </ul></div></div><select id="editProVoiceCallAlertContactExcludeNotifications" class="selecttwo span6" name="editProVoiceCallAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editProVoiceCallAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editProVoiceCallAlertContactSSLExpirationReminder" id="editProVoiceCallAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editPushoverAlertContact">
<li class="control-group">
<label for="editPushoverAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editPushoverAlertContactFriendlyName" class="span6" type="text" value="" name="editPushoverAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editPushoverAlertContactValue" class="control-label">Pushover User Key <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editPushoverAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editPushoverAlertContactPriority" class="control-label">Pushover Priority</label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editPushoverAlertContactPriority" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-32">Lowest Priority</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen32" class="select2-offscreen">Pushover Priority</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-32" id="s2id_autogen32"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen32_search" class="select2-offscreen">Pushover Priority</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-32" id="s2id_autogen32_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-32">   </ul></div></div><select id="editPushoverAlertContactPriority" class="selecttwo span6" name="editPushoverAlertContactPriority" style="float: none; display: none;" tabindex="-1" title="Pushover Priority">
<option value="-2">Lowest Priority</option>
<option value="-1">Low Priority</option>
<option value="0">Normal Priority</option>
<option value="1">High Priority</option>
<option value="2">Emergency Priority</option>
</select>
<span class="help-block">Info about this setting can be found <a href="https://pushover.net/api#priority">here</a>.</span>
</div>
</li>
<li class="control-group">
<label for="editPushoverAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editPushoverAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-33">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen33" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-33" id="s2id_autogen33"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen33_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-33" id="s2id_autogen33_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-33">   </ul></div></div><select id="editPushoverAlertContactExcludeNotifications" class="selecttwo span6" name="editPushoverAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editPushoverAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editPushoverAlertContactSSLExpirationReminder" id="editPushoverAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editHipchatAlertContact">
<li class="control-group">
<label for="editHipchatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editHipchatAlertContactFriendlyName" class="span6" type="text" value="" name="editHipchatAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editHipchatAlertContactValue" class="control-label">Hipchat Room ID <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editHipchatAlertContactValue"></span>
</div>
</li>
<li class="control-group">
<label for="editHipchatAlertContactToken" class="control-label">Hipchat Room Token <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editHipchatAlertContactToken" style="word-break: break-all;"></span>
</div>
</li>
<li class="control-group">
<label for="editHipchatAlertContactCustomValue" class="control-label">Custom Value </label>
<div class="controls">
<input id="editHipchatAlertContactCustomValue" class="span6" type="text" value="" name="editHipchatAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group" style="border-bottom:none;">
<small>I'm using self-hosted HipChat Server (<a href="#" data-toggle="collapse" data-target="#editHipchatAlertContactServerURLWrapper">show/hide settings</a>).</small>
</li>
<div id="editHipchatAlertContactServerURLWrapper" class="control-group collapse">
<li class="control-group">
<label for="editHipchatAlertContactServerURL" class="control-label">HipChat Server URL</label>
<div class="controls">
<span class="bold" id="editHipchatAlertContactServerURL" style="word-break: break-all;"></span>
</div>
</li>
</div>
<li class="control-group">
<label for="editHipchatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editHipchatAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-34">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen34" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-34" id="s2id_autogen34"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen34_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-34" id="s2id_autogen34_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-34">   </ul></div></div><select id="editHipchatAlertContactExcludeNotifications" class="selecttwo span6" name="editHipchatAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editHipchatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editHipchatAlertContactSSLExpirationReminder" id="editHipchatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>

</div>
<div class="hide" id="editSlackAlertContact">
<li class="control-group">
<label for="editSlackAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editSlackAlertContactFriendlyName" class="span6" type="text" value="" name="editSlackAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editSlackAlertContactValue" class="control-label">Slack WebHook URL <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editSlackAlertContactValue" style="word-break: break-all;"></span>
</div>
</li>
<li class="control-group">
<label for="editSlackAlertContactCustomValue" class="control-label">Custom Value </label>
<div class="controls">
<input id="editSlackAlertContactCustomValue" class="span6" type="text" value="" name="editSlackAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group">
<label for="editSlackAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editSlackAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-35">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen35" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-35" id="s2id_autogen35"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen35_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-35" id="s2id_autogen35_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-35">   </ul></div></div><select id="editSlackAlertContactExcludeNotifications" class="selecttwo span6" name="editSlackAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editSlackAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editSlackAlertContactSSLExpirationReminder" id="editSlackAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>

</div>
 <div class="hide" id="editSplunkAlertContact">
<li class="control-group">
<label for="editSplunkAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editSplunkAlertContactFriendlyName" class="span6" type="text" value="" name="editSplunkAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editSplunkAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
<div class="controls">
<textarea id="editSplunkAlertContactValue" class="span6" type="text" name="editSplunkAlertContactValue" rows="4"></textarea>
</div>
</li>
<li class="control-group">
<label for="editSplunkAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editSplunkAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-36">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen36" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-36" id="s2id_autogen36"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen36_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-36" id="s2id_autogen36_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-36">   </ul></div></div><select id="editSplunkAlertContactExcludeNotifications" class="selecttwo span6" name="editSplunkAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editSplunkAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editSplunkAlertContactSSLExpirationReminder" id="editSplunkAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editPagerDutyAlertContact">
<li class="control-group">
 <label for="editPagerDutyAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editPagerDutyAlertContactFriendlyName" class="span6" type="text" value="" name="editPagerDutyAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editPagerDutyAlertContactValue" class="control-label">Integration Key <span class="required">*</span></label>
<div class="controls">
<input id="editPagerDutyAlertContactValue" class="span6" type="text" value="" name="editPagerDutyAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="editPagerDutyAlertContactAutoResolve" class="control-label">Auto-Resolve</label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editPagerDutyAlertContactAutoResolve" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-37">Resolve after up event</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen37" class="select2-offscreen">Auto-Resolve</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-37" id="s2id_autogen37"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen37_search" class="select2-offscreen">Auto-Resolve</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-37" id="s2id_autogen37_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-37">   </ul></div></div><select id="editPagerDutyAlertContactAutoResolve" class="selecttwo span6" name="editPagerDutyAlertContactAutoResolve" style="float: none; display: none;" tabindex="-1" title="Auto-Resolve">
<option value="1">Resolve after up event</option>
<option value="0">Do not resolve after up event</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editPagerDutyAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editPagerDutyAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-38">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen38" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-38" id="s2id_autogen38"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen38_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-38" id="s2id_autogen38_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-38">   </ul></div></div><select id="editPagerDutyAlertContactExcludeNotifications" class="selecttwo span6" name="editPagerDutyAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editPagerDutyAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editPagerDutyAlertContactSSLExpirationReminder" id="editPagerDutyAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editOpsGenieAlertContact">
<li class="control-group">
<label for="editOpsGenieAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editOpsGenieAlertContactFriendlyName" class="span6" type="text" value="" name="editOpsGenieAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editOpsGenieAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
<div class="controls">
<textarea id="editOpsGenieAlertContactValue" class="span6" type="text" name="editOpsGenieAlertContactValue" rows="4"></textarea>
</div>
</li>
<li class="control-group">
<label for="editOpsGenieAlertContactTeamsToNotify" class="control-label">Teams to notify</label>
<div class="controls">
<input id="editOpsGenieAlertContactTeamsToNotify" class="span6" type="text" value="" name="editOpsGenieAlertContactTeamsToNotify" maxlength="200">
</div>
</li>
<li class="control-group">
<label for="editOpsGenieAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editOpsGenieAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-39">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen39" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-39" id="s2id_autogen39"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen39_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-39" id="s2id_autogen39_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-39">   </ul></div></div><select id="editOpsGenieAlertContactExcludeNotifications" class="selecttwo span6" name="editOpsGenieAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
 <li class="control-group">
<label for="editOpsGenieAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editOpsGenieAlertContactSSLExpirationReminder" id="editOpsGenieAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editTelegramAlertContact">
<li class="control-group">
<label for="editTelegramAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editTelegramAlertContactFriendlyName" class="span6" type="text" value="" name="editTelegramAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editTelegramAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editTelegramAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-40">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen40" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-40" id="s2id_autogen40"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen40_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-40" id="s2id_autogen40_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-40">   </ul></div></div><select id="editTelegramAlertContactExcludeNotifications" class="selecttwo span6" name="editTelegramAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editTelegramAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editTelegramAlertContactSSLExpirationReminder" id="editTelegramAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li id="editTelegramAlertNotStarted" class="control-group hide">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> In order to activate the Telegram alert contact, it is needed to /start a dialog with the Telegram UptimeRobot Bot. Please <a href="https://telegram.me/officialuptimerobot?start=">click this custom link and start the dialog on Telegram</a>, <b>for this alert contact to work</b>.
</div>
</li>
<li id="editTelegramAlertStarted" class="control-group hide">
<div class="alert alert-success no-margin">
<strong class="alert-success">Great!</strong> You are connected to Telegram with this account:<br><span></span>.
</div>
</li>

</div>
<div class="hide" id="editIosAppAlertContact">
<li class="control-group">
<label for="editIosAppAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editIosAppAlertContactFriendlyName" class="span6" type="text" value="" name="editIosAppAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editIosAppAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editIosAppAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-41">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen41" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-41" id="s2id_autogen41"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen41_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-41" id="s2id_autogen41_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-41">   </ul></div></div><select id="editIosAppAlertContactExcludeNotifications" class="selecttwo span6" name="editIosAppAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editIosAppAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editIosAppAlertContactSSLExpirationReminder" id="editIosAppAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div>
<div class="hide" id="editAndroidAppAlertContact">
<li class="control-group">
<label for="editAndroidAppAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editAndroidAppAlertContactFriendlyName" class="span6" type="text" value="" name="editAndroidAppAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editAndroidAppAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editAndroidAppAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-42">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen42" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-42" id="s2id_autogen42"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen42_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-42" id="s2id_autogen42_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-42">   </ul></div></div><select id="editAndroidAppAlertContactExcludeNotifications" class="selecttwo span6" name="editAndroidAppAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editAndroidAppAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editAndroidAppAlertContactSSLExpirationReminder" id="editAndroidAppAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
</div> 
<div class="hide" id="editBaseAccountAlertContact">
<li class="control-group">
<label for="editBaseAccountAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<span id="editBaseAccountAlertContactFriendlyName" class="span6">trivedikausha@gmail.com</span>
</div>
</li>
<li class="control-group">
<label for="editBaseAccountAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editBaseAccountAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-43">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen43" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-43" id="s2id_autogen43"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen43_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-43" id="s2id_autogen43_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-43">   </ul></div></div><select id="editBaseAccountAlertContactExcludeNotifications" class="selecttwo span6" name="editBaseAccountAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editBaseAccountAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editBaseAccountAlertContactSSLExpirationReminder" id="editBaseAccountAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
<input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOiIxNjY4NjI2IiwiYWN0aW9uTmFtZSI6ImVkaXRCYXNlQWNjb3VudEVtYWlsQWxlcnRDb250YWN0IiwidGltZXN0YW1wIjoxNjQ4MDExMzMwfQ.gsT6RqFH_VowOFgllHlJOLpQNGF0sC770cZdn5aZIZi9l1oByxHwy1B_Wd4OHKFfl8XeXfJW-QWqoY63G_EjiQ" name="formToken">
</div>
</li>
</div>
<div class="hide" id="editMSTeamsAlertContact">
<li class="control-group">
<label for="editMSTeamsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editMSTeamsAlertContactFriendlyName" class="span6" type="text" value="" name="editMSTeamsAlertContactFriendlyName">
 </div>
</li>
<li class="control-group">
<label for="editMSTeamsAlertContactWebHookURL" class="control-label breakword">MS Teams Webhook URL <span class="required">*</span></label>
<div class="controls">
<span class="bold breakword" id="editMSTeamsAlertContactWebHookURL"></span>
</div>
</li>
<li class="control-group">
<label for="editMSTeamsAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editMSTeamsAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-44">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen44" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-44" id="s2id_autogen44"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen44_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-44" id="s2id_autogen44_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-44">   </ul></div></div><select id="editMSTeamsAlertContactExcludeNotifications" class="selecttwo span6" name="editMSTeamsAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editMSTeamsAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editMSTeamsAlertContactSSLExpirationReminder" id="editMSTeamsAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled">
<span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
</div>
</li>
</div>
<div class="hide" id="editHangoutsChatAlertContact">
<li class="control-group">
<label for="editHangoutsChatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editHangoutsChatAlertContactFriendlyName" class="span6" type="text" value="" name="editHangoutsChatAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editHangoutsChatAlertContactRoomURL" class="control-label">Room URL <span class="required">*</span></label>
<div class="controls">
<input id="editHangoutsChatAlertContactRoomURL" class="span6" type="text" value="" name="editHangoutsChatAlertContactRoomURL">
</div>
</li>
<li class="control-group">
<label for="editHangoutsChatAlertContactCustomValue" class="control-label">Custom Message </label>
<div class="controls">
<input id="editHangoutsChatAlertContactCustomValue" class="span6" type="text" value="" name="editHangoutsChatAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group">
<label for="editHangoutsChatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span8" id="s2id_editHangoutsChatAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-45">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen45" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-45" id="s2id_autogen45"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen45_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-45" id="s2id_autogen45_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-45">   </ul></div></div><select id="editHangoutsChatAlertContactExcludeNotifications" class="selecttwo span8" name="editHangoutsChatAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</div>
</li>
<li class="control-group">
<label for="editHangoutsChatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editHangoutsChatAlertContactSSLExpirationReminder" id="editHangoutsChatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled">
<span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong>
The room url can be found in the <a href="https://chat.google.com/" target="_blank">chat.google.com</a> &gt; Room menu &gt; Configure webhooks &gt; Add new &gt; Copy room url.
<p>If you prefer to update the webhook's image to UptimeRobot's logo, <a href="https://uptimerobot.com/assets/img/logo-square.png" target="_blank">here it is</a>)</p>
</div>
</li>

</div>
<div class="hide" id="editDiscordAlertContact">
<li class="control-group">
<label for="editDiscordAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editDiscordAlertContactFriendlyName" class="span6" type="text" value="" name="editDiscordAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editDiscordAlertContactValue" class="control-label">Discord WebHook URL <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editDiscordAlertContactValue" style="word-break: break-all;"></span>
</div>
</li>
<li class="control-group">
<label for="editDiscordAlertContactCustomValue" class="control-label">Custom Value </label>
<div class="controls">
<input id="editDiscordAlertContactCustomValue" class="span6" type="text" value="" name="editDiscordAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group">
<label for="editDiscordAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_editDiscordAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-46">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen46" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-46" id="s2id_autogen46"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen46_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-46" id="s2id_autogen46_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-46">   </ul></div></div><select id="editDiscordAlertContactExcludeNotifications" class="selecttwo span6" name="editDiscordAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</li>
<li class="control-group">
<label for="editDiscordAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="editDiscordAlertContactSSLExpirationReminder" id="editDiscordAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>

</div>
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="editAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Alert contact edited!</strong> You can keep editing alert contacts.
</div>
<div id="editAlertContactNoGoogleAdwordsCampaignNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-warning">Alert contact edited!</strong> But, alert contact will not be activated until you select Google AdWords campaigns to manage with this alert contact.
</div>
<div id="editAlertContactNoFacebookAdsCampaignNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-warning">Alert contact edited!</strong> But, alert contact will not be activated until you select Facebook Ads campaigns to manage with this alert contact.
</div>
<div id="editAlertContactExistsNotification" class="alert alert-danger no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-danger">Alert contact could not be saved!</strong> An alert contact with similar data exists.
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary">Save Changes</button>
</div>
</form>
</div>
<div id="shareMonitorWidgets" class="modal hide fade" tabindex="-1" data-width="60%">
<div class="modal-header"> </div>
<form id="shareMonitorForm" class="form-horizontal" method="POST" action="">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span6 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-rss"></i> Widgets</h4>
</div>
<div class="widget-body">
<div class="row-fluid">
<div class="span12">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group userRSSLinkWrapper">
<div class="enableWidgetWrapper hide">
<button type="submit" class="btn btn-blue enableWidgetButton">Enable Widget</button>
<br><br>
<span class="f14">Please click to enable widgets for this monitor.</span>
</div>
<div class="disableWidgetWrapper hide">
<button type="submit" class="btn btn-red disableWidgetButton">Disable Widget</button>
</div>
</li>
</ul>
</fieldset>
</div>
</div>
<div class="row-fluid widgetGenerationWrapper hide">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Widget Generation Tool</h4>
</li>

<li class="control-group">
<label for="newMonitorWidgetType" class="control-label">Widget Type <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_newMonitorWidgetType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-47">Please Select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen47" class="select2-offscreen">Widget Type *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-47" id="s2id_autogen47"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen47_search" class="select2-offscreen">Widget Type *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-47" id="s2id_autogen47_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-47">   </ul></div></div><select id="newMonitorWidgetType" class="selecttwo span8" name="newMonitorWidgetType" style="float: none; display: none;" tabindex="-1" title="Widget Type *">
<option selected="selected" value="0">Please Select</option>
<option value="1">Type1 - Detailed</option>
<option value="2">Type2 - Summary</option>
</select>
</div>
</li>

<li class="control-group widgetColorStep hide">
<label for="newMonitorWidgetColor" class="control-label">Widget Color <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_newMonitorWidgetColor" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-48">Please Select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen48" class="select2-offscreen">Widget Color *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-48" id="s2id_autogen48"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen48_search" class="select2-offscreen">Widget Color *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-48" id="s2id_autogen48_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-48">   </ul></div></div><select id="newMonitorWidgetColor" class="selecttwo span8" name="newMonitorWidgetColor" style="float: none; display: none;" tabindex="-1" title="Widget Color *">
<option selected="selected" value="0">Please Select</option>
<option value="1">Black</option>
<option value="2">Green</option>
</select>
</div>
</li>

<li class="control-group widgetPeriodStep hide">
<label for="newMonitorWidgetPeriod" class="control-label">Widget Period <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_newMonitorWidgetPeriod" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-49">Please Select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen49" class="select2-offscreen">Widget Period *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-49" id="s2id_autogen49"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen49_search" class="select2-offscreen">Widget Period *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-49" id="s2id_autogen49_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-49">   </ul></div></div><select id="newMonitorWidgetPeriod" class="selecttwo span8" name="newMonitorWidgetPeriod" style="float: none; display: none;" tabindex="-1" title="Widget Period *">
<option selected="selected" value="0">Please Select</option>
<option value="1">1 Day</option>
<option value="7">7 Days</option>
<option value="30">30 Days</option>
</select>
</div>
</li>

</ul>
</fieldset>
</div>
</div>
<div class="row-fluid widgetResultWrapper hide">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Generated Widget</h4>
</li>
 <li class="widgetResult">
<img class="widgetImage">
<br>
<h5>UptimeRobot Widget URL: <a href="" class="widgetLink" target="_blank"></a></h5>
</li>
</ul>
</fieldset>
</div>
</div>
</div>
<div class="widget-footer">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
</div>
</form>
</div>
<div id="debugMonitor" class="modal hide fade" tabindex="-1" data-width="80%">
<div class="modal-header"></div>
<form id="debugMonitorForm" class="form-horizontal" method="POST" action="">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span7 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4 class="debugMonitorPanelTitle"><i class="fontello-icon-briefcase"></i> Debug Monitor (<label class="debugMonitorType label"></label><label class="debugMonitorName"></label><a href="" class="debugMonitorUrl" target="_blank"><i class="item-icon fontello-icon-link-1" style="color:#999999; font-size: 0.6em;"></i></a>)</h4>
<label class="debugMonitorID"></label>
<label class="debugMonitorIP"></label>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span6 form-dark" style="padding-right: 2.5%; border-right: 1px solid #ccc;">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4>Current Configuration</h4>
</li>

<li class="control-group">
<label for="debugMonitorCurrentServer" class="control-label span6">Server :</label>
<div class="controls">
<div class="select2-container selecttwo span10 debugMonitorCurrentServer" id="s2id_debugMonitorCurrentServer" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-50">&nbsp;</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen50" class="select2-offscreen">Server :</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-50" id="s2id_autogen50"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen50_search" class="select2-offscreen">Server :</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-50" id="s2id_autogen50_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-50">   </ul></div></div><select id="debugMonitorCurrentServer" class="selecttwo span10 debugMonitorCurrentServer" name="debugMonitorCurrentServer" tabindex="-1" title="Server :" style="display: none;">
</select>
<a href="javascript:" class="copyDebugServerBtn" data-copy-element="#debugMonitorCurrentServer">Copy</a>
</div>
 </li>
<li class="control-group debugMonitorRequestTypeBlock">
<label for="debugMonitorCurrentRequestType" class="control-label span6">Request Type :</label>
<div class="controls">
<div class="select2-container selecttwo span10" id="s2id_debugMonitorCurrentRequestType" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-51">HEAD</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen51" class="select2-offscreen">Request Type :</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-51" id="s2id_autogen51"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen51_search" class="select2-offscreen">Request Type :</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-51" id="s2id_autogen51_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-51">   </ul></div></div><select id="debugMonitorCurrentRequestType" class="selecttwo span10" name="debugMonitorCurrentRequestType" tabindex="-1" title="Request Type :" style="display: none;">
<option value="HEAD">HEAD</option>
<option value="GET">GET</option>
</select>
</div>
</li>
<li class="control-group debugMonitorUserAgentBlock">
<label for="debugMonitorCurrentUserAgent" class="control-label span6">Custom User Agent :</label>
<div class="controls">
<input id="debugMonitorCurrentUserAgent" class="span6" type="text" value="" name="debugMonitorCurrentUserAgent">
</div>
</li>
<li class="control-group">
<div class="span4">
<label for="debugMonitorCurrentIsTrace" class="control-label span4">TRACE</label>
<input id="debugMonitorCurrentIsTrace" class="checkbox" type="checkbox" value="1" name="debugMonitorCurrentIsTrace">
</div>
<div class="span4">
<label for="debugMonitorCurrentIsPing" class="control-label span4">PING</label>
<input id="debugMonitorCurrentIsPing" class="checkbox" type="checkbox" value="1" name="debugMonitorCurrentIsPing">
</div>
<div class="span4 debugMonitorIsHttpBlock">
<label for="debugMonitorCurrentIsHttp" class="control-label span4">HTTP</label>
<input id="debugMonitorCurrentIsHttp" class="checkbox" type="checkbox" value="1" name="debugMonitorCurrentIsHttp">
</div>
</li>
<li class="control-group">
<button type="submit" class="btn btn-primary debugCurrentSubmit">Debug</button>
</li>
</ul>
</fieldset>

</div>
<div class="span6 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4>Custom Configuration</h4>
</li>

<li class="control-group">
<label for="debugMonitorCustomServer" class="control-label span6">Server :</label>
<div class="controls">
<div class="select2-container selecttwo span10 debugMonitorCustomServer" id="s2id_debugMonitorCustomServer" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-52">Please Select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen52" class="select2-offscreen">Server :</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-52" id="s2id_autogen52"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen52_search" class="select2-offscreen">Server :</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-52" id="s2id_autogen52_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-52">   </ul></div></div><select id="debugMonitorCustomServer" class="selecttwo span10 debugMonitorCustomServer" name="debugMonitorCustomServer" tabindex="-1" title="Server :" style="display: none;">
<option selected="selected" value="0">Please Select</option>
</select>
<a href="javascript:" class="copyDebugServerBtn" data-copy-element="#debugMonitorCustomServer">Copy</a>
</div>
</li>
<li class="control-group debugMonitorRequestTypeBlock">
<label for="debugMonitorCustomRequestType" class="control-label span6">Request Type :</label>
<div class="controls">
<div class="select2-container selecttwo span10" id="s2id_debugMonitorCustomRequestType" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-53">HEAD</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen53" class="select2-offscreen">Request Type :</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-53" id="s2id_autogen53"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen53_search" class="select2-offscreen">Request Type :</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-53" id="s2id_autogen53_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-53">   </ul></div></div><select id="debugMonitorCustomRequestType" class="selecttwo span10" name="debugMonitorCustomRequestType" tabindex="-1" title="Request Type :" style="display: none;">
<option value="HEAD">HEAD</option>
<option value="GET">GET</option>
</select>
</div>
</li>
<li class="control-group">
<div class="span4">
<label for="debugMonitorCustomIsTrace" class="control-label span4">TRACE</label>
<input id="debugMonitorCustomIsTrace" class="checkbox" type="checkbox" value="1" name="debugMonitorCustomIsTrace">
</div>
<div class="span4">
<label for="debugMonitorCustomIsPing" class="control-label span4">PING</label>
<input id="debugMonitorCustomIsPing" class="checkbox" type="checkbox" value="1" name="debugMonitorCustomIsPing">
</div>
<div class="span4 debugMonitorIsHttpBlock">
 <label for="debugMonitorCustomIsHttp" class="control-label span4">HTTP</label>
<input id="debugMonitorCustomIsHttp" class="checkbox" type="checkbox" value="1" name="debugMonitorCustomIsHttp">
</div>
</li>
<li class="control-group">
<label style="color: red;" class="customDebugError hide">Please select a debug server.</label>
<button type="submit" class="btn btn-primary debugCustomSubmit">Debug</button>
</li>
</ul>
</fieldset>

</div>
</div>
<div class="row-fluid debugResultMainBlock">
<div class="span6 form-dark debugResultCurrentContainer hide">
<div class="debugResultBlock">
<div class="debugResultTitles">
<ul class="nav nav-pills nav-sm">
<li class="active"><a href="javascript:" data-resulttype="ping">Ping</a></li>
<li class="portResBlockBtn"><a href="javascript:" data-resulttype="port">Port</a></li>
<li><a href="javascript:" data-resulttype="tracert">Tracert</a></li>
<li class="headerResBlockBtn"><a href="javascript:" data-resulttype="headerResBlock">Header</a></li>
<li class="httpResBtn"><a href="javascript:" data-resulttype="http">Http</a></li>
</ul>
</div>
<div class="debugResultTexts">
<ul class="debugResultTextsContainer">
<li class="ping active">
<span><strong>Target:</strong> </span><span class="target"></span><br>
<span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
<span><strong>Result:</strong> </span><span class="stat"></span>
</li>
<li class="port">
<span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
<span><strong>Result:</strong> </span><span class="stat"></span>
</li>
<li class="tracert">
 <span><strong>Tracing route to</strong> </span><span class="target"></span><br><br>
<span class="route"></span><br>
</li>
<li class="headerResBlock">
</li>
<li class="http"></li>
</ul>
</div>
</div>
</div>
<div class="span6 form-dark debugResultCustomContainer hide">
<div class="debugResultBlock">
<div class="debugResultTitles">
<ul class="nav nav-pills nav-sm">
<li class="active"><a href="javascript:" data-resulttype="ping">Ping</a></li>
<li class="portResBlockBtn"><a href="javascript:" data-resulttype="port">Port</a></li>
<li><a href="javascript:" data-resulttype="tracert">Tracert</a></li>
<li class="headerResBlockBtn"><a href="javascript:" data-resulttype="headerResBlock">Header</a></li>
<li class="httpResBtn"><a href="javascript:" data-resulttype="http">Http</a></li>
</ul>
</div>
<div class="debugResultTexts">
<ul class="debugResultTextsContainer">
<li class="ping active">
<span><strong>Target:</strong> </span><span class="target"></span><br>
<span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
<span><strong>Result:</strong> </span><span class="stat"></span>
</li>
<li class="port">
<span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
<span><strong>Result:</strong> </span><span class="stat"></span>
</li>
<li class="tracert">
<span><strong>Tracing route to</strong> </span><span class="target"></span><br><br>
<span class="route"></span><br>
</li>
<li class="headerResBlock">

</li>
<li class="http"></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="debugMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Monitor debugged!</strong>
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
</div>
</form>
</div>
<div id="sessionWarning" class="modal hide fade" tabindex="-1" data-width="35%" data-keyboard="false" data-backdrop="static">
<div class="modal-header"> </div>
<div class="modal-body">
<div class="tab-pane padding-bottom30 active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="alert alert-warning no-margin">
<strong class="alert-warning">Warning!</strong> The session has expired. Please <a href="/login" style="color:#c09853; text-decoration:underline;">click here</a> to login again.
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
</div>
</div>
<div id="intervalUpgrade" class="modal hide fade" tabindex="-1" data-width="35%" data-keyboard="false" data-backdrop="static">
<div class="modal-header"> </div>
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="alert alert-info no-margin">
You can set 5 minutes as the lowest monitoring interval in the free plan. Upgrade to PRO plan and be notified 5x faster!
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary upgradeProAccount" data-toggle="modal" data-target="#upgradeAccount" onclick="$('#intervalUpgrade').modal('hide');">Upgrade</button>
 </div>
</div> <div id="bulkActions" class="modal hide fade" tabindex="-1" data-width="40%">
<div class="modal-header"> </div>
<form id="bulkActionsForm" class="form-horizontal" method="POST" action="inc/dml/monitorDML.php?action=bulkAction" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Bulk Actions</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Action Details</h4>
</li>

<li class="control-group">
<label for="bulkActionType" class="control-label">I want to
<span class="required">*</span>
</label>
<div class="controls">
<div class="select2-container selecttwo span10" id="s2id_bulkActionType" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-54">Please Select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen54" class="select2-offscreen">I want to
*
</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-54" id="s2id_autogen54"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen54_search" class="select2-offscreen">I want to
*
</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-54" id="s2id_autogen54_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-54">   </ul></div></div><select id="bulkActionType" class="selecttwo span10" name="bulkActionType" tabindex="-1" title="I want to
*
" style="display: none;">
<option selected="selected" data-approvetext="-" value="0">Please Select</option>
<option value="1" data-approvetext="PAUSE MONITORS">Pause Monitors</option>
<option value="2" data-approvetext="START MONITORS">Start Monitors</option>
<option value="6" data-approvetext="RESET MONITORS">Reset Monitors</option>
<option value="3" data-approvetext="DELETE MONITORS">Delete Monitors</option>
<option value="4" data-approvetext="CHANGE INTERVAL">Change Intervals Of Monitors</option>
<option value="5" data-approvetext="CHANGE ALERT CONTACTS">Change Alert Contacts Of Monitors</option>
<option value="9" data-approvetext="CHANGE TIMEOUT">Change Timeouts Of Monitors</option>
<option value="7" disabled="">Change SSL Settings Of Monitors (Pro Plan)</option>
<option value="8" disabled="">Add Maintenance Window To Monitors (Pro Plan)</option>
</select>
 </div>
</li>
<li class="control-group">
<label for="bulkType" class="control-label">Applies to <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span10" id="s2id_bulkType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-55">Please Select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen55" class="select2-offscreen">Applies to *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-55" id="s2id_autogen55"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen55_search" class="select2-offscreen">Applies to *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-55" id="s2id_autogen55_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-55">   </ul></div></div><select id="bulkType" class="selecttwo span10" name="bulkType" style="float: none; display: none;" tabindex="-1" title="Applies to *">
<option selected="selected" value="0">Please Select</option>
<option value="1">For all the monitors</option>
<option value="2">For selected monitors</option>
</select>
</div>
</li>
<li id="bulkActionMonitorSelect" class="control-group hide">
<label for="bulkActionMonitorList" class="control-label">Monitors</label>
<div class="controls">
<div class="select2-container span10" id="s2id_bulkActionMonitorList" style=""><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-61">Search Monitors</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen61" class="select2-offscreen">Monitors</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-61" id="s2id_autogen61"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen61_search" class="select2-offscreen">Monitors</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-61" id="s2id_autogen61_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-61">   </ul></div></div><input type="hidden" id="bulkActionMonitorList" multiple="multiple" class="span10" tabindex="-1" title="Monitors" style="display: none;">
</div>
</li>
<li id="bulkEditSelectedMonitorsList" class="control-group hide">
<div class="select2-container select2-container-multi" id="s2id_bulkEditSelectedMonitors" style=""><ul class="select2-choices">  <li class="select2-search-field">    <label for="s2id_autogen62" class="select2-offscreen"></label>    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen62" placeholder="" style="width: 10px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none hide">   <ul class="select2-results">   <li class="select2-no-results"></li></ul></div></div><select id="bulkEditSelectedMonitors" name="bulkEditSelectedMonitors[]" multiple="multiple" tabindex="-1" style="display: none;">
<option value="0">0</option>
</select>
</li>

<div class="hide" id="bulkActionChangeIntervalsWrapper">
<li class="control-group">
<label for="bulkActionInterval" class="control-label">Monitoring Interval <span class="required">*</span></label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="bulkActionIntervalDisplay">61</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="bulkActionInterval" name="bulkActionInterval" value="300" class="hide">
</div>
</li>
</div>
<div class="hide" id="bulkActionSSLSettingsWrapper">
<li class="section-form">
<h4 class="test">SSL Settings</h4>
 </li>
<li class="control-group">
<label for="bulkActionIgnoreSSLErrors" class="control-label">Ignore SSL errors </label>
<div class="controls">
<input id="bulkActionIgnoreSSLErrorsEnabled" class="leftFloat hide" type="hidden" name="bulkActionIgnoreSSLErrorsEnabled" value="1" disabled="disabled">
<input id="bulkActionIgnoreSSLErrors" class="leftFloat hide" type="checkbox" name="bulkActionIgnoreSSLErrors" value="1" disabled="disabled"> <a class="enableBulkIgnoreSSLErrorsEditing">(Click to enable for editing.)</a> <a class="disableBulkIgnoreSSLErrorsEditing hide">(Click to disable for editing.)</a>
</div>
</li>
<li class="control-group">
<label for="bulkActionSSLCheckDisableStatus" class="control-label">Disable SSL expiry reminders </label>
<div class="controls">
<input id="bulkActionSSLCheckDisableStatusEnabled" class="leftFloat hide" type="hidden" name="bulkActionSSLCheckDisableStatusEnabled" value="1" disabled="disabled">
<input id="bulkActionSSLCheckDisableStatus" class="leftFloat hide" type="checkbox" name="bulkActionSSLCheckDisableStatus" value="1" disabled="disabled"> <a class="enableBulkSSLCheckDisableStatusEditing">(Click to enable for editing.)</a> <a class="disableBulkSSLCheckDisableStatusEditing hide">(Click to disable for editing.)</a>
</div>
</li>
</div>
<div class="hide" id="bulkActionAlertContactsWrapper">
<br>
<input type="hidden" name="alertContactsInputBulk" class="alertContactsInputBulk">
<div id="bulkActionAlertContacts" class="alertContactsContainerBulk">
</div>
<input type="hidden" class="getAlertContactsEditOrListDetector" value="0">
</div>
<div class="hide" id="bulkActionChangeTimeoutsWrapper">
<li class="control-group">
<label for="bulkActionTimeout" class="control-label">Monitoring Timeout <span class="required">*</span></label>
<div class="controls">
<div class="noUiSlider timeoutSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-508.475%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="60.0" aria-valuenow="30.0" aria-valuetext="30"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">in <b id="bulkActionTimeoutDisplay"></b> <span class="timeoutInText"><b>30</b> seconds</span></span>
<input type="text" id="bulkActionTimeout" name="bulkActionTimeout" class="monitorTimeout hide" value="30">
</div>
</li>
</div>
<div class="hide" id="bulkAddMaintenanceWindowWrapper"></div>
<input type="hidden" name="mWindowsInputBulk" class="mWindowsInputBulk">
</ul>
<ul class="form-list label-left list-bordered dotted hide" id="bulkActionApproveTextWrapper">
<li class="section-form">
<h4 class="test">Action Approval</h4>
</li>

<div>
<li class="control-group">
<div class="alert alert-info no-margin">
Please write <span id="bulkActionApproveTextInfo" class="bold"></span> to the field below to approve the action.
</div>
</li>
<li class="control-group">
<label for="bulkActionApproveText" class="control-label">Approval Text <span class="required">*</span></label>
<div class="controls">
<input id="bulkActionApproveText" class="span6" type="text" value="" name="bulkActionApproveText">
<input id="bulkActionApproveTextHidden" class="span6" type="hidden" value="" name="bulkActionApproveTextHidden">
</div>
</li>
</div>
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="bulkActionSuccessNotification" class="alert alert-success no-margin hide">
<strong class="alert-success">Bulk Action Completed!</strong> You can apply new actions (or <a href="#no" onclick="window.location.reload();">refresh the page</a> to see an updated view).
</div>
<div id="bulkActionErrorNotification" class="alert alert-error no-margin hide"></div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary">Complete Action</button>
</div>
</form>
</div>
<div id="bulkImportUpload" class="modal hide fade in" tabindex="-1" data-width="70%" data-backdrop="static" data-keyboard="false">
<div class="modal-header"> </div>
<form id="bulkImportActionForm" class="form-horizontal" method="POST" action="inc/dml/monitorDML.php?action=validateBulkImportUpload" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div id="bulkImportUploadWidget" class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-upload"></i> Import Monitors</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left">
<li><p class="alert alert-info" style="margin: 0 0 8px 0;">This is a PRO feature. If you need to import large amount of monitors, upgrade to PRO plan first.</p></li>
<li style="border-bottom:none;">
<p>
Using this dialog, you can import any number of monitors (that fit to your accounts limit). Below is a guide on how to create a valid import file. After the import, monitors will be started automatically.
</p>
</li>
<li class="section-form">
<h3 class="test">Creating import file</h3>
</li>
<li>
<ol>
<li><a href="downloads/TemplateBulkImportFile.csv">Download file template</a></li>
<li>Download <a href="inc/dml/monitorDML.php?action=exportAlertContacts">your alert contacts</a> (If you don't have any alert contacts, go create them first!)</li>
<li>Fill the template with your specific monitor attributes (see below for explanation)</li>
</ol>
</li>
</ul>
</fieldset>
<fieldset>
<ul class="form-list label-left">
<li class="section-form">
<h4 class="test">Attributes</h4>
</li>
<li class="control-group">
<ul>
<li><strong>Type:</strong> Monitor type, possible values <code>HTTP, Ping, Port, Keyword</code></li>
<li><strong>Friendly Name:</strong> name of your monitor as it will be displayed in UI and on Status pages</li>
<li><strong>URL/IP:</strong> the monitored resource</li>
<li><strong>Interval:</strong> monitoring interval, possible values <code>1-1440</code></li>
<li><strong>Keyword type:</strong> for keyword monitor polarity (alert when), possible values: <code>1 (If exists) / 0 (If not exists)</code></li>
<li><strong>Keyword value:</strong> the specific string value for keyword monitors, keep empty otherwise</li>
<li><strong>Port:</strong> the port number in case of Port monitor, keep empty for otherwise</li>
<li>
<strong>Alert Contacts:</strong> where to send notifications in case of an outage<br>
<p class="alert alert-warning" role="alert" style="margin: 10px 0;">We strongly recommend attaching alert contacts when importing monitors, if you don't have alert contacts yet, add them first.</p>
<p>
Use the <a href="inc/dml/monitorDML.php?action=exportAlertContacts">alert contacts file</a> to prepare your specific values for each monitor.
Format: <code>{&lt;alertContactId&gt;;&lt;threshold&gt;;&lt;recurrence&gt;}</code> → separate multiple contacts with <code>|</code>.
See explained threshold and recurrence attributes at example below.
</p>
<ul>
<li><strong>Threshold:</strong> the number (in minutes) after when outage is still active you want to get notification, possible values: <code>0-720</code></li>
<li><strong>Recurrence:</strong> get notification every X minutes while the outage lasts, possible values: <code>0-60</code></li>
</ul>
</li>
</ul>
</li>
</ul>
</fieldset>
<fieldset>
<ul class="form-list label-left">
<li class="section-form">
<h4 class="test">Example (<a href="downloads/ExampleBulkImportFile.csv">download file</a>)</h4>
</li>
<li><img src="/assets/img/monitor_import_example.png"></li>
</ul>
</fieldset>
<fieldset>
<ul class="form-list label-left list-bordered dotted form-inline">
<li class="section-form">
<h3 class="test">Upload file</h3>
</li>
<li class="form-group">
<label for="newMonitorsBulkFile" class="control-label" style="width: 170px;">File (can be .csv, max 10MB)</label>
<div class="controls pull-right">
<input id="newMonitorsBulkFile" type="file" name="newMonitorsBulkFile" accept=".csv" required="">
</div>
</li>
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div class="spinner" style="display: none;">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
<div id="bulkImportResultsWidget" class="widget widget-box hide">
<div class="tabbable tabs-top">
<ul class="nav nav-tabs">
<li><a id="validatedMonitorsTabLink" class="hide" href="#validatedMonitors" data-toggle="tab"><i class="fontello-icon-ok-circle"></i> Validated Monitors <span></span></a></li>
<li><a id="failedMonitorsTabLink" class="hide" href="#failedMonitors" data-toggle="tab"><i class="fontello-icon-attention"></i> Failed Monitors <span></span></a></li>
</ul>
<div class="tab-content">
<div class="tab-pane" id="validatedMonitors">
<div class="dataTables_scroll">
<div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
<div class="dataTables_scrollHeadInner">
<table id="bulkImportSuccessResults" class="table boo-table table-bordered table-condensed table-hover" style="background: url('../../../assets/img/table/loading-background.png')">
<thead>
<tr>
<th scope="col">Friendly Name</th>
<th scope="col">Type</th>
<th scope="col">Interval</th>
<th scope="col">URL/IP</th>
<th scope="col">Keyword Type</th>
<th scope="col">Keyword Value</th>
<th scope="col">Port</th>
<th scope="col">Alert Contact</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<div style="position: absolute; top: 0px; left: 0px; width: 1px; height: 0px;"></div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="failedMonitors">
 <div class="dataTables_scroll">
<div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
<div class="dataTables_scrollHeadInner">
<table id="bulkImportErrorResults" class="table boo-table table-bordered table-condensed table-hover" style="background: url('assets/img/table/loading-background.png')">
<thead>
<tr>
<th scope="col">Friendly Name</th>
<th scope="col">Type</th>
<th scope="col">Interval</th>
<th scope="col">URL/IP</th>
<th scope="col">Keyword Type</th>
<th scope="col">Keyword Value</th>
<th scope="col">Port</th>
<th scope="col">Alert Contact</th>
<th scope="col">Error</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<div style="position: absolute; top: 0px; left: 0px; width: 1px; height: 0px;"></div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>
<div id="bulkImportSuccessNotification" class="alert alert-success no-margin hide">
<strong class="alert-success">Bulk Import Completed!</strong>
<a href="#no" onclick="window.location.reload();">Refresh the
page</a> to see an updated view.
</div>
<div id="bulkImportErrorNotification" class="alert alert-error no-margin hide">
<ul class="bulkImportErrorList"></ul>
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button id="clearBulkImportButton" type="button" data-dismiss="modal" class="btn">Close</button>
</div>
</form>
</div>
<div id="upgradeAccount" class="modal hide fade" tabindex="-1" data-width="75%">
<form id="newPaymentForm" method="POST" action="" novalidate="novalidate">
<input id="stripe-key" type="hidden" name="stripeKey" value="pk_live_51IjOxLB2nYnZgMUN68I5bcReIUQah5bieiottGO0NFwkxYx75wqyk0abCG2DaKQ0q9h5M8572D2xZal2uzrtkk08006vAVACJn">
<div class="modal-body">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 hidden-sm hidden-xs">

<h3 class="text-center">What you get with PRO plan?</h3>
<div style="padding: 20px; font-size: 11px;" class="upsell-reasons">
<div class="row" style="margin-bottom: 15px">
<div class="col-md-3 text-center">
<img src="assets/img/interval-icon.svg" alt="status page icon" width="50">
</div>
<div class="col-md-9">
<h5><s>5 min.</s> 1 min. monitoring interval</h5>
Get notified about downtimes 5x faster.
</div>
</div>
<hr>
<div class="row" style="margin-bottom: 15px">
<div class="col-md-3 text-center">
<img src="assets/img/statuspage-icon.svg" alt="status page icon" width="50">
</div>
<div class="col-md-9">
<h5>Status page customizations</h5>
Customize, link your domain and notify customers.
</div>
</div>
<hr>
<div class="row" style="margin-bottom: 15px">
<div class="col-md-3 text-center">
<img src="assets/img/ssl-monitoring.svg" alt="ssl icon" width="50">
</div>
<div class="col-md-9">
<h5>SSL certificate monitoring</h5>
Monitor SSL errors and certificate expiry dates.
</div>
</div>
<hr>
<div class="row" style="margin-bottom: 15px">
<div class="col-md-3 text-center">
<img src="assets/img/cron-job-monitoring.svg" alt="cron job icon" width="50">
</div>
<div class="col-md-9">
<h5>Background job monitoring</h5>
Monitor recurring jobs or intranet devices.
</div>
</div>
<hr>
<div class="row" style="margin-bottom: 15px">
<div class="col-md-3 text-center">
<img src="assets/img/more-icon.svg" alt="ssl icon" width="50">
</div>
<div class="col-md-9">
<h5>...and more!</h5>
Custom HTTP headers &amp; statuses, maintenance windows, and 24 months log retention.
</div>
</div>
<div class="row">
<div data-tooltip="">
</div>
</div>
</div>
</div>
<div class="col-md-8 col-sm-12" style="padding-top: 20px;">
<input type="hidden" id="productType" name="productType" value="">
<input type="hidden" id="userId" name="userId" value="1668626">
<input type="hidden" id="userCurrency" name="userCurrency" value="usd">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div id="paymentFormStep1Wrapper">
<div class="widget well">
<div class="widget-header">
<h4 id="upgradeFormTitle"><i class="fontello-icon-edit"></i> The Current Plan</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<p id="upgradeAccountCurrentDetails">You are using Free Plan (50 monitors, 5 minute intervals).</p>
<p id="upgradeSMSCurrentDetails" class="hide">You have 0 SMS or voice-calls left.</p>
</div>
</div>
</div>

<div id="proPlanMonitorLimitWrapper" class="widget well ">
<div class="widget-header">
<h4>Select your Pro Plan</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted form-horizontal" style="margin-bottom: 0; border-bottom: 1px dotted #bec2c4;">

<li class="control-group">
<label for="proPlanMonitorLimit" class="control-label">Number of monitors</label>
<div class="controls">
<select id="proPlanMonitorLimit" class="span4" name="proPlanMonitorLimit" style="height:auto; font-size:16px; background:#FFF; color:#333; padding:0; margin:0; min-width:80px;">
<option data-addedvalue1="20" data-annualmonthlyprice="7" data-annualprice="84.00" data-feature1="1" data-monthlyprice="8.00" data-onceprice="" data-productname="50 Monitors (1-minute monitoring)" data-productsku="pro50" value="91">
50
</option><option data-addedvalue1="30" data-annualmonthlyprice="21" data-annualprice="252.00" data-feature1="1" data-monthlyprice="26.00" data-onceprice="" data-productname="100 Monitors (1-minute monitoring)" data-productsku="pro100" value="92">
100
</option><option data-addedvalue1="50" data-annualmonthlyprice="28" data-annualprice="336.00" data-feature1="1" data-monthlyprice="34.00" data-onceprice="" data-productname="200 Monitors (1-minute monitoring)" data-productsku="pro200" value="93">
200
</option><option data-addedvalue1="100" data-annualmonthlyprice="62" data-annualprice="744.00" data-feature1="1" data-monthlyprice="74.00" data-onceprice="" data-productname="500 Monitors (1-minute monitoring)" data-productsku="pro500" value="94">
500
</option><option data-addedvalue1="160" data-annualmonthlyprice="121" data-annualprice="1452.00" data-feature1="1" data-monthlyprice="134.00" data-onceprice="" data-productname="1,000 Monitors (1-minute monitoring)" data-productsku="pro1000" value="95">
1000
</option><option data-addedvalue1="240" data-annualmonthlyprice="204" data-annualprice="2448.00" data-feature1="1" data-monthlyprice="224.00" data-onceprice="" data-productname="2,000 Monitors (1-minute monitoring)" data-productsku="pro2000" value="96">
2000
</option><option data-addedvalue1="480" data-annualmonthlyprice="412" data-annualprice="4944.00" data-feature1="1" data-monthlyprice="444.00" data-onceprice="" data-productname="5,000 Monitors (1-minute monitoring)" data-productsku="pro5000" value="97">
5000
</option><option data-addedvalue1="900" data-annualmonthlyprice="828" data-annualprice="9936.00" data-feature1="1" data-monthlyprice="884.00" data-onceprice="" data-productname="10,000 Monitors (1-minute monitoring)" data-productsku="pro10000" value="98">
10000
</option> </select> &nbsp;monitors
</div>
</li>

<li class="control-group">
<label for="proPlanSMSCredits" class="control-label">SMS or Voice-calls</label>
<div class="controls">
<span class="pricingProSMS">20</span> <small>(doesn't renew but more messages (or calls) can be purchased anytime)</small>
</div>
</li>




</ul>
<div class="container-fluid" style="border-top: 1px dotted #fff;">
<div class="row">
<div class="col-md-12 old-price-strike hidden" style="margin-top: 15px;">
<span style="color:#FFF; background:#faa05a; padding:3px 5px; border-radius: 3px;">Special entry offer!</span>
</div>
<div class="col-md-6 proPricingMonthlyAnnual">
<div>
<h3 class="inline-block" style="margin: 0;"><s class="old-price-strike price usd hidden" style="opacity: 0.5">15</s>&nbsp;</h3>
<h3 class="inline-block pricingAnnualMonthlyPrice price usd" style="margin:0;">7</h3>
<h4 class="inline-block" style="margin: 0;"> / month</h4><br>
billed annually
</div>
</div>
<div class="col-md-6 proPricingMonthlyAnnual">
<h3 class="inline-block" style="margin: 0; font-weight: normal;"><s class="old-price-strike price usd hidden" style="opacity: 0.5">18</s>&nbsp;</h3>
<h3 class="inline-block pricingMonthlyPrice annual-possible price usd" style="margin:0; font-weight: normal;">8.00</h3>
<h4 class="inline-block" style="margin: 0; font-weight: normal;"> / month</h4><br>
billed monthly
</div>
<div class="col-md-12">
<div class="proPricingMonthly hide">
<h3 class="inline-block" style="margin-bottom: 0;">$</h3><h3 class="inline-block pricingMonthlyPrice" style="margin:-10px 0 0 0; line-height:20px;">8.00</h3><h4 class="inline-block" style="margin-bottom: 0;"> / month</h4> (No annual billing option exists for this plan).
</div>
</div>
</div>
</div>
</fieldset>

</div>
</div>
</div>
</div>
</div>
 
<div id="proSMSCreditsWrapper" class="widget well">
<div class="widget-header">
<h4>Select the number of SMS (or voice-calls)</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted form-horizontal">

<li class="control-group">
<label for="proSMSCredits" class="control-label">Number of messages/calls</label>
<div class="controls">
<select id="proSMSCredits" class="span6" name="proSMSCredits" style="height:auto; font-size:inherit; background:#FFF; color:#333; padding:0; margin:0;">
<option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="15.00" data-productname="100 SMS (or voice calls)" data-productsku="sms100" value="19">
100
</option><option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="25.00" data-productname="200 SMS (or voice calls)" data-productsku="sms200" value="20">
200
</option><option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="55.00" data-productname="500 SMS (or voice calls)" data-productsku="sms500" value="30">
500
</option><option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="100.00" data-productname="1000 SMS (or voice calls)" data-productsku="sms1000" value="31">
1000
</option> </select>
</div>
</li>

<li class="control-group">
<small>Note: 1 notification = 1 SMS (or voice-call)</small>
</li>

<li class="control-group">
<div>
Pricing is <h3 class="inline-block pricingOncePrice price usd" style="margin:-10px 0 0 0; line-height:20px;">15.00</h3><h4 class="inline-block" style="margin-bottom: 0;">/one-time</h4>.
</div>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

</div>
<div id="paymentFormStep2StatusWrapper" class="hide">
<div class="widget well">
<div class="widget-header">
<h4><i class="fontello-icon-ok-5"></i> Selected Plan <small style="color: #111; font-weight:normal;">(<a href="#no" class="showPaymentFormStep1 underlineLink text-color">edit</a>)</small></h4>
</div>
<div class="widget-content" style="height:40px;">
<div class="widget-body">
<p>You have selected "<span class="selectedProduct">
50
</span> <span class="selectedProductInfo">monitors Pro Plan</span>".</p>
</div>
</div>
</div>
</div>
<div id="paymentFormStep3StatusWrapper" class="hide">
<div class="widget well" style="">
<div class="widget-header">
<h4><i class="fontello-icon-ok-5"></i> Payment Details <small style="color: #111; font-weight:normal;">(<a href="#no" class="showPaymentFormStep2 underlineLink text-color">edit</a>)</small></h4>
</div>
<div class="widget-content" style="height:auto;">
<div class="widget-body">
<p>You will be charged
<span id="pricingNoVATWrapper">
<span class="pricingAnnualPrice price usd">84.00</span>
<span class="pricingMonthlyPrice price usd hide">8.00</span>
<span class="pricingOncePrice price usd hide">15.00</span>
<span class="pricingPeriod">every year</span>
<span class="pricingAnnualDeductionTinyInfo opaci75 hide"></span>
<span class="pricingMonthlyDeductionTinyInfo opaci75 hide"></span>
</span>
<span id="pricingVATWrapper" class="hide">
<span class="pricingVATAnnualPrice price usd">0</span>
<span class="pricingVATMonthlyPrice price usd hide">0</span>
<span class="pricingVATOncePrice price usd hide">0</span>
<span class="pricingPeriod">every year</span>
<span class="pricingAnnualDeductionTinyInfo opaci75 hide"></span>
<span class="pricingMonthlyDeductionTinyInfo opaci75 hide"></span> (including VAT).
</span>
</p>
</div>
</div>
</div>
</div>
<div id="paymentFormStep4StatusWrapper" class="hide">
<div class="widget well" style="">
<div class="widget-header">
<h4><i class="fontello-icon-ok-5"></i> Billing Details <small style="color: #111; font-weight:normal;">(<a href="#no" class="showPaymentFormStep3 underlineLink text-color">edit</a>)</small></h4>
</div>
<div class="widget-content" style="height:40px;">
<div class="widget-body">
<p id="paymentBillingInfoSummary"></p>
</div>
</div>
</div>
</div>
<div id="paymentFormStep2Wrapper" class="hide">
<div id="paymentPeriodWrapper" class="widget well">
<div class="widget-header">
<h4>Select the Payment Period</h4>
</div>
<div class="widget-body">
<table class="table table-condensed">
<thead>
<tr>
<th width="15px">&nbsp;</th>
<th>Period</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<tr id="annualPricingWrap">
<td><input type="radio" name="paymentPeriod" id="paymentPeriodAnnual" class="paymentPeriod" checked="checked" value="12"></td>
<td id="annualPricingTitle">Annual</td>
 <td>
<div id="pricingAnnualPriceWrapper">
<span class="pricingAnnualPrice price usd">84.00</span> / year (<span class="pricingAnnualMonthlyPrice price usd">7</span> / month - best price!)
</div>
<div class="pricingAnnualDeductionInfo opaci75"></div>
</td>
</tr>
<tr id="monthlyPricingWrap">
<td><input type="radio" name="paymentPeriod" id="paymentPeriodMonthly" class="paymentPeriod" value="1"></td>
<td id="monthlyPricingTitle">Monthly</td>
<td>
<div id="pricingMonthlyPriceWrapper">
<span class="pricingMonthlyPrice price usd">8.00</span> / month
</div>
<div class="pricingMonthlyDeductionInfo opaci75"></div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="widget well">
<div class="widget-header">
<h4>Select the Payment Method</h4>
</div>
<div class="widget-body">
<table class="table table-condensed">
<thead>
<tr>
<th width="15px">&nbsp;</th>
<th>Payment Type</th>
</tr>
</thead>
<tbody>
<tr id="paymentTypeCreditCardTR">
<td><input type="radio" id="paymentTypeCreditCard" name="paymentMethod" class="paymentMethod" checked="checked" value="1"></td>
<td>Credit Card</td>
</tr>
<tr id="paymentTypePayPalTR">
<td><input type="radio" id="paymentTypePayPal" name="paymentMethod" class="paymentMethod" value="2"></td>
<td>PayPal</td>
</tr>
</tbody>
</table>
<div id="paymentTypeSMSAppUpsell" class="alert alert-info margin-top20 hide" style="margin-right: 5px; margin-left: 5px;">
If you would like to pay for credits by credit card, use our
<strong><a href="https://blog.uptimerobot.com/redesigned-mobile-app/">brand new mobile app</a></strong>
and pay via Apple Pay (iOS) or Google Pay (Android).
</div>
<input id="userProPlanUnusedValue" type="hidden" value="">
</div>
</div>
</div>
<div id="paymentFormStep3Wrapper" class="hide">
<div class="widget well">
<div class="widget-header">
<h4>Billing Details</h4>
</div>
<div class="widget-body">
<fieldset>
<ul class="form-list label-left list-bordered dotted">

<div class="row-fluid">
<div class="span6 form-dark">
<li class="control-group">
<label for="paymentBillingName" class="control-label">Full name or company name <span class="required">*</span></label>
<div class="controls">
<input type="text" name="paymentBillingName" id="paymentBillingName" class="span10" value="">
</div>
</li>
</div>
<div class="span6 form-dark">
<li class="control-group">
<label for="paymentBillingAddress" class="control-label">Billing Address <span class="required">*</span></label>
<div class="controls">
<input type="text" name="paymentBillingAddress" id="paymentBillingAddress" class="span12" value="">
</div>
</li>
</div>
</div>
<div class="row-fluid">
<div class="span3 form-dark">
<li class="control-group">
<label for="paymentBillingZipCode" class="control-label">Billing Zip <span class="required">*</span></label>
<div class="controls">
<input type="text" name="paymentBillingZipCode" id="paymentBillingZipCode" class="span12" value="">
</div>
</li>
</div>
<div class="span3 form-dark">
<li class="control-group">
<label for="paymentBillingState" class="control-label">Billing State</label>
<div class="controls">
<input type="text" name="paymentBillingState" id="paymentBillingState" class="span9" value="">
</div>
</li>
</div>
<div class="span3 form-dark">
<li class="control-group">
<label for="paymentBillingCity" class="control-label">Billing City <span class="required">*</span></label>
<div class="controls">
<input type="text" name="paymentBillingCity" id="paymentBillingCity" class="span12" value="">
</div>
</li>
</div>
<div class="span3 form-dark">
<li class="control-group">
<label for="paymentBillingPhoneNumber" class="control-label">Billing Phone</label>
<div class="controls">
<input type="text" name="paymentBillingPhoneNumber" id="paymentBillingPhoneNumber" class="span12" value="">
</div>
</li>
</div>
</div>
<div class="row-fluid">
<div class="span6 form-dark">
<li class="control-group">
<label for="paymentBillingCountry" class="control-label">Billing Country <span class="required">*</span></label>
<div class="controls">
<select id="paymentBillingCountry" class="span10 darkSelect" name="paymentBillingCountry">
<option value="">Please Select</option>
<option value="AFG">Afghanistan</option><option value="ALB">Albania</option><option value="DZA">Algeria</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATG">Antigua &amp; Barbuda</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus</option><option value="BEL">Belgium</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia</option><option value="BIH">Bosnia &amp; Herzegovina</option><option value="BWA">Botswana</option><option value="BRA">Brazil</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic</option><option value="TCD">Chad</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="COL">Colombia</option><option value="COM">Comoros</option><option value="COG">Congo</option><option value="COD">Congo, D.R.</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="CIV">Cote dIvoire</option><option value="HRV">Croatia</option><option value="CYP">Cyprus</option><option value="CZE">Czech Republic</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic</option><option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option><option value="FIN">Finland</option><option value="FRA">France</option><option value="GUF">French Guiana</option><option value="PYF">French Polynesia</option><option value="GAB">Gabon</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GRD">Grenada</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GGY">Guernsey</option><option value="GIN">Guinea</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="HND">Honduras</option><option value="HKG">Hong Kong</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IDN">Indonesia</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="IMN">Isle of Man</option><option value="ISR">Israel</option><option value="ITA">Italy</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="PRK">Korea South</option><option value="XKX">Kosovo</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan</option><option value="LAO">Laos</option><option value="LVA">Latvia</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania</option><option value="LUX">Luxembourg</option><option value="MAC">Macau</option><option value="MKD">Macedonia</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MTQ">Martinique</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MYT">Mayotte</option><option value="MEX">Mexico</option><option value="MDA">Moldova</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar</option><option value="NAM">Namibia</option><option value="NPL">Nepal</option><option value="NLD">Netherlands</option><option value="ANT">Netherlands Antilles</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PSE">Palestinian Territory</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="POL">Poland</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Reunion</option><option value="ROU">Romania</option><option value="RUS">Russia</option><option value="RWA">Rwanda</option><option value="KNA">Saint Kitts and Nevis</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome &amp; Principe</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="ZAF">South Africa</option><option value="ESP">Spain</option><option value="LKA">Sri Lanka</option><option value="VCT">St Vincent and the Grenadines</option><option value="SUR">Suriname</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland</option><option value="TWN">Taiwan</option><option value="TJK">Tajikistan</option><option value="TZA">Tanzania</option><option value="THA">Thailand</option><option value="TGO">Togo</option><option value="TON">Tonga</option><option value="TTO">Trinidad &amp; Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey</option><option value="TKM">Turkmenistan</option><option value="TCA">Turks &amp; Caicos Islands</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="USA" selected="selected">United States</option><option value="URY">Uruguay</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela</option><option value="VNM">Vietnam</option><option value="VGB">Virgin Islands, British</option><option value="VIR">Virgin Islands, U.S.</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option> </select>
</div>
</li>
</div>
<div class="span6 form-dark">
<li class="control-group">
<label for="paymentBillingVAT" class="control-label">Billing VAT</label>
<div class="controls">
<input type="text" name="paymentBillingVAT" id="paymentBillingVAT" class="span12" value="">
</div>
</li>
</div>
</div>
<div id="paymentVATInfoWrapper" class="row-fluid hide">
<div class="span12 form-dark">
<div id="paymentVATInfo" class="alert alert-info no-margin">
<p><b>VAT Information: </b>An additional <span class="paymentVATInfoRatio"></span>% EU VAT will be added to the purchase <span class="paymentNonMaltaVATInfo">if no valid VAT Number is mentioned</span><span class="paymentMaltaVATInfo hide">(even if a valid VAT is mentioned as UptimeRobot is based in Malta)</span>.</p>
</div>
<br>
<p id="billingError" class="alert alert-danger no-margin hide">Something went wrong when trying to save your billing information. Please try again.</p>
</div>
</div>
</ul>
</fieldset>
</div>
</div>
</div>
<div id="paymentFormStep4Wrapper" class="hide">
<input name="paymentFormStep4WrapperIsOpen" id="paymentFormStep4WrapperIsOpen" type="hidden" value="0">
<input name="paymentFormStep4WrapperIsOpen" id="paymentFormStep4WrapperIsOpenFirstTime" type="hidden" value="1">
<div id="stripePayment" class="widget well">
<div class="widget-header">
<h4>Enter the Card Details</h4>
<div class="card-images-header">
<img src="assets/img/icon/payment-icons/visa_icon.png">
<img src="assets/img/icon/payment-icons/mastercard_icon.png">
<img src="assets/img/icon/payment-icons/amex_icon.png">
<img src="assets/img/icon/payment-icons/dinersclub_icon.png">

</div>
</div>
<div class="widget-content">
<div class="widget-body">
<input type="hidden" name="setupIntentId" id="setupIntentId" val="">
<div id="card-element"></div>
</div>
</div>
</div>
<div id="paypalPayment" class="widget well hide">
<div class="widget-header">
<h4>Paying with PayPal</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<p>You will be redirected to the PayPal's payment page.</p>
<input type="hidden" name="lc" value="US">
<input type="hidden" name="image_url" value="https://uptimerobot.com/assets/img/uptimerobot-logo-paypal.png">
<input type="hidden" name="business" value="paypalmt@uptimerobot.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="notify_url" value="https://uptimerobot.com/inc/dml/paymentDML.php?action=paypalPayment&amp;userVerificationCode=u1668626-81b404b0255d91eddb397912f99f4ac8">
<input type="hidden" name="return" value="https://uptimerobot.com/dashboard?paymentSuccess=1#mySettings">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="cancel_return" value="https://uptimerobot.com/dashboard#mySettings">
<input type="hidden" name="no_shipping" value="1">

<input type="hidden" id="paypalCMD" name="cmd" value="">

<input type="hidden" id="paypalProductName" name="item_name" value="">
<input type="hidden" id="paypalProductSKU" name="item_number" value="">
<div id="paypalVariablesInsideForm">
<div id="paypalSubscriptionVariables">

<input type="hidden" id="paypalProductDeductedValue" name="a1" value="">
<input type="hidden" name="p1" value="1">
<input type="hidden" id="paypalDeductionPeriodIdentifier" name="t1" value="">

<input type="hidden" id="paypalProductPrice" name="a3" value="">
<input type="hidden" name="p3" value="1">
<input type="hidden" id="paypalSubscriptionPeriodIdentifier" name="t3" value="">
</div>
<div id="paypalOnetimeVariables">

<input type="hidden" id="paypalAmount" name="amount" value="">
</div>
</div>

<input type="hidden" name="src" value="1">
<input type="hidden" id="paypalNewUpgradeRenewalText" name="paypalNewUpgradeRenewalText" value="">
<input type="submit" value="" style="width:200px; height:43px; background:url(assets/img/paypal-checkout.png) no-repeat; border: 0px;; cursor:pointer;">
</div>
</div>
</div>

</div>
<div class="widget well hide">
<div class="widget-header">
<h4>Success!</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<p><i class="fontello-icon-ok-4"></i> The payment is completed successfully (and the account is updated accordingly).</p>
</div>
</div>
</div>

<div id="paymentSuccessNotification" class="hide alert alert-success no-margin">
<p><strong class="alert-success">Success!</strong></p>
<p>The payment is completed successfully (and the account is updated accordingly).</p>
<p>For an updated view: <a href="https://uptimerobot.com/dashboard?refresh=1#mySettings" class="btn btn-primary refreshMySettingsPage">Refresh the page</a></p>
</div>
<div id="stripeErrorNotification" class="hide alert alert-error no-margin">
<p><strong class="alert-error">Payment failed!</strong></p>
<p class="error-msg"></p>
<p>Try another card or <button type="button" id="switchToPayPal" class="btn btn-green">Use PayPal</button></p>
</div>
<div id="downgradeDaysNotification" class="widget alert alert-error no-margin hide"> 
<p><strong class="alert-error">Info</strong></p>
<p>The account currently has a bigger limit that can be used until <span class="proPlanExpiryDate"></span>.</p>
<p>It <b>can be downgraded by <span class="proPlanDowngradeDate"></span> (<span class="proPlanDowngradeDateXDaysLater"></span> days later)</b> in order to prevent any double-payments.</p>
</div>
<div id="downgradeLimitNotification" class="widget alert alert-error no-margin hide">
<p><strong class="alert-error">Info</strong></p>
<p>There are <span class="numberOfMonitorsInAccount"></span> monitors in the account while the new plan can only handle <span class="downgradeProPlanMonitorLimit"></span>.</p>
<p><b><span class="numberOfMonitorsToRemoveForDowngrade"></span> monitors must be removed</b> for completing the downgrade.</p>
</div>
<div id="pleskLicenceRemovalError" class="hide alert alert-error no-margin">
<p><strong class="alert-error">Something wrong, please try again later!</strong></p>
</div>
</div>

</div>

</div>

<div id="paypalVariablesOutsideForm">
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="button" class="btn btn-primary showPaymentFormStep2 paymentFormStep1Buttons ">Next Step - Payment Details</button>
<button type="button" class="btn btn-primary hide showPaymentFormStep3 paymentFormStep2Buttons">Next Step - Billing</button>
<button type="submit" class="btn btn-primary hide showPaymentFormStep4 paymentFormStep3Buttons">Next Step - Payment</button>
<button type="submit" class="btn btn-primary hide paymentFormStep4Buttons">Complete the Payment</button>
<button type="button" class="btn btn-primary paymentFormStep4ProcessingButtons disabled">Please Wait..</button>
</div>
</form>
</div>
<div id="cancelProPlan" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="cancelProPlanForm" class="form-horizontal" method="POST" action="inc/dml/paymentDML.php?action=cancelProPlan" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Cancel Auto-Renewal</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<div id="cancelProPlanThxText" class="hide">Thanks very much for being an awesome customer. You staying as a Free Plan user is still great and we are always here to help if more is needed.</div>
<ul id="cancelProPlanInfoWrapper" class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Pro Plan Information</h4>
</li>

<li class="control-group">
 <p>You are using the "<b>Free Plan (50 monitors, 5 minute intervals)</b>.</p>
<p>Once canceled, the account will need to be renewed until 01.01.1970 or will be automatically downgraded to the Free Plan on 01.01.1970.</p>
<p><strong>Important!</strong> if more than 50 monitors exist on this expiry date, they will be deleted automatically (with the order of "latest added is deleted first").</p>
</li>
<li class="control-group">
<div id="cpp-captcha_container"></div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
Please write <span class="bold">CANCEL AUTO-RENEW</span> to the field below to approve the action.
</div>
</li>
<li class="control-group">
<label for="cancelProPlanApproveText" class="control-label">Approval Text <span class="required">*</span></label>
<div class="controls">
<input id="cancelProPlanApproveText" class="span6" type="text" value="" name="cancelProPlanApproveText">
<input id="cancelProPlanApproveTextHidden" class="span6" type="hidden" value="CANCEL AUTO-RENEW" name="cancelProPlanApproveTextHidden">
</div>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="cancelProPlanSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Pro Plan auto-renewal is cancelled!</strong>
</div>
<div id="cancelProPlanErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
<span class="alert-error">Please make sure that the captcha is verified.</span>
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="cancelProPlanFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="cancelProPlanFormSubmitButton">Cancel Pro Plan</button>
</div>
 </form>
</div>
<div id="newMWindow" class="modal hide fade" tabindex="-1" data-width="40%">
<div class="modal-header"> </div>
<form id="newMWindowForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=newMWindow" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> New Maintenance Window</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Maintenance Window Information</h4>
</li>

<li class="control-group">
<label for="newMWindowType" class="control-label">Maint. Window Type <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_newMWindowType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-56">Please Select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen56" class="select2-offscreen">Maint. Window Type *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-56" id="s2id_autogen56"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen56_search" class="select2-offscreen">Maint. Window Type *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-56" id="s2id_autogen56_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-56">   </ul></div></div><select id="newMWindowType" class="selecttwo span8" name="newMWindowType" style="float: none; display: none;" tabindex="-1" title="Maint. Window Type *">
<option selected="selected" value="0">Please Select</option>
<option value="1">Once</option>
<option value="2">Daily</option>
<option value="3">Weekly</option>
<option value="4">Monthly</option>
</select>
</div>
</li>

<div class="hide" id="newOnceMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>only once</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="newOnceMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newOnceMWindowFriendlyName" class="span6" type="text" value="" name="newOnceMWindowFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newOnceMWindowStartDateTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<input id="newOnceMWindowStartDateTime" class="span6" type="text" value="" name="newOnceMWindowStartDateTime">
</div>
</li>
<li class="control-group">
<label for="newOnceMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
<div class="controls">
<input id="newOnceMWindowDuration" class="span2" type="text" value="" name="newOnceMWindowDuration"> mins.
</div>
</li>

</div>
<div class="hide" id="newDailyMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every day</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="newDailyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newDailyMWindowFriendlyName" class="span6" type="text" value="" name="newDailyMWindowFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newDailyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<input id="newDailyMWindowStartHour" class="span2" type="text" value="" name="newDailyMWindowStartHour" placeholder="18"> : <input id="newDailyMWindowStartMinute" class="span2" type="text" value="" name="newDailyMWindowStartMinute" placeholder="30">
</div>
</li>
<li class="control-group">
 <label for="newDailyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
<div class="controls">
<input id="newDailyMWindowDuration" class="span6" type="text" value="" name="newDailyMWindowDuration"> mins.
</div>
</li>

</div>
<div class="hide" id="newWeeklyMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every week</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="newWeeklyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newWeeklyMWindowFriendlyName" class="span6" type="text" value="" name="newWeeklyMWindowFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newWeeklyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
<div class="controls alignCheckboxes">
<div class="errorsAfterThis">
<input type="checkbox" value="1" name="newWeeklyMWindowDays[]"> Mon <input type="checkbox" value="2" name="newWeeklyMWindowDays[]"> Tue <input type="checkbox" value="3" name="newWeeklyMWindowDays[]"> Wed <input type="checkbox" value="4" name="newWeeklyMWindowDays[]"> Thu <input type="checkbox" value="5" name="newWeeklyMWindowDays[]"> Fri <input type="checkbox" value="6" name="newWeeklyMWindowDays[]"> Sat <input type="checkbox" value="7" name="newWeeklyMWindowDays[]"> Sun
</div>
</div>
</li>
<li class="control-group">
<label for="newWeeklyMWindowStartHour" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<div class="errorsAfterThis">
<input id="newWeeklyMWindowStartHour" class="span2" type="text" value="" name="newWeeklyMWindowStartHour" placeholder="18"> : <input id="newWeeklyMWindowStartMinute" class="span2" type="text" value="" name="newWeeklyMWindowStartMinute" placeholder="30">
</div>
</div>
</li>
<li class="control-group">
<label for="newWeeklyMWindowDuration" class="control-label">Maintenance End Time <span class="required">*</span></label>
<div class="controls">
<input id="newWeeklyMWindowDuration" class="span6" type="text" value="" name="newWeeklyMWindowDuration"> mins.
</div>
</li>

</div>
<div class="hide" id="newMonthlyMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every month</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="newMonthlyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newMonthlyMWindowFriendlyName" class="span6" type="text" value="" name="newMonthlyMWindowFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newMonthlyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
<div class="controls alignCheckboxes span6">
<div class="errorsAfterThis">
<table width="100%" style="max-width:200px; margin-left:3px;">
<tbody><tr>
<td width="25%"><input type="checkbox" value="1" name="newMonthlyMWindowDays[]"> 1</td>
<td width="25%"><input type="checkbox" value="2" name="newMonthlyMWindowDays[]"> 2</td>
<td width="25%"><input type="checkbox" value="3" name="newMonthlyMWindowDays[]"> 3</td>
<td width="25%"><input type="checkbox" value="4" name="newMonthlyMWindowDays[]"> 4</td>
</tr>
<tr>
 <td><input type="checkbox" value="5" name="newMonthlyMWindowDays[]"> 5</td>
<td><input type="checkbox" value="6" name="newMonthlyMWindowDays[]"> 6</td>
<td><input type="checkbox" value="7" name="newMonthlyMWindowDays[]"> 7</td>
<td><input type="checkbox" value="8" name="newMonthlyMWindowDays[]"> 8</td>
</tr>
<tr>
<td><input type="checkbox" value="9" name="newMonthlyMWindowDays[]"> 9</td>
<td><input type="checkbox" value="10" name="newMonthlyMWindowDays[]"> 10</td>
<td><input type="checkbox" value="11" name="newMonthlyMWindowDays[]"> 11</td>
<td><input type="checkbox" value="12" name="newMonthlyMWindowDays[]"> 12</td>
</tr>
<tr>
<td><input type="checkbox" value="13" name="newMonthlyMWindowDays[]"> 13</td>
<td><input type="checkbox" value="14" name="newMonthlyMWindowDays[]"> 14</td>
<td><input type="checkbox" value="15" name="newMonthlyMWindowDays[]"> 15</td>
<td><input type="checkbox" value="16" name="newMonthlyMWindowDays[]"> 16</td>
</tr>
<tr>
<td><input type="checkbox" value="17" name="newMonthlyMWindowDays[]"> 17</td>
<td><input type="checkbox" value="18" name="newMonthlyMWindowDays[]"> 18</td>
<td><input type="checkbox" value="19" name="newMonthlyMWindowDays[]"> 19</td>
<td><input type="checkbox" value="20" name="newMonthlyMWindowDays[]"> 20</td>
</tr>
<tr>
<td><input type="checkbox" value="21" name="newMonthlyMWindowDays[]"> 21</td>
<td><input type="checkbox" value="22" name="newMonthlyMWindowDays[]"> 22</td>
<td><input type="checkbox" value="23" name="newMonthlyMWindowDays[]"> 23</td>
<td><input type="checkbox" value="24" name="newMonthlyMWindowDays[]"> 24</td>
</tr><tr>
<td><input type="checkbox" value="25" name="newMonthlyMWindowDays[]"> 25</td>
<td><input type="checkbox" value="26" name="newMonthlyMWindowDays[]"> 26</td>
<td><input type="checkbox" value="27" name="newMonthlyMWindowDays[]"> 27</td>
<td><input type="checkbox" value="28" name="newMonthlyMWindowDays[]"> 28</td>
</tr>
<tr><td><input type="checkbox" value="29" name="newMonthlyMWindowDays[]"> 29</td>
<td><input type="checkbox" value="30" name="newMonthlyMWindowDays[]"> 30</td>
<td><input type="checkbox" value="31" name="newMonthlyMWindowDays[]"> 31</td>
<td></td>
</tr><tr>
<td colspan="4"><input type="checkbox" value="99" name="newMonthlyMWindowDays[]"> Last day of month</td>
</tr>
</tbody></table>
</div>
</div>
</li>
<li class="control-group">
<label for="newMonthlyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<div class="errorsAfterThis">
<input id="newMonthlyMWindowStartHour" class="span2" type="text" value="" name="newMonthlyMWindowStartHour" placeholder="18"> : <input id="newMonthlyMWindowStartMinute" class="span2" type="text" value="" name="newMonthlyMWindowStartMinute" placeholder="30">
</div>
</div>
</li>
<li class="control-group">
<label for="newMonthlyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
<div class="controls">
<input id="newMonthlyMWindowDuration" class="span6" type="text" value="" name="newMonthlyMWindowDuration"> mins.
</div>
</li>

</div>
</ul>
</fieldset>

 </div>
</div>
</div>
</div>
</div>

<div id="newMWindowSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Maintenance window created!</strong> You can keep adding new maintenance windows.
</div>
<div id="newMWindowErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
<div id="newMWindowExistsErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"><strong class="alert-error">Ooops!</strong> This maintenance window already exists under your account.</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary">Create Maintenance Window</button>
</div>
</form>
</div>
<div id="editMWindow" class="modal hide fade" tabindex="-1" data-width="40%">
<div class="modal-header"> </div>
<form id="editMWindowForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editMWindow" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Edit Maintenance Window</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Maintenance Window Information</h4>
</li>

<li class="control-group">
<label for="editMWindowType" class="control-label">Maint. Window Type <span class="required">*</span></label>
<div class="controls">
<span class="bold" id="editMWindowTypeTitle"></span>
<input id="editMWindowType" class="span6" type="hidden" value="" name="editMWindowType">
</div>
</li>

 <div class="hide" id="editOnceMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>only once</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="editOnceMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editOnceMWindowFriendlyName" class="span6" type="text" value="" name="editOnceMWindowFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editOnceMWindowStartDateTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<input id="editOnceMWindowStartDateTime" class="span6" type="text" value="" name="editOnceMWindowStartDateTime">
</div>
</li>
<li class="control-group">
<label for="editOnceMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
<div class="controls">
<input id="editOnceMWindowDuration" class="span6" type="text" value="" name="editOnceMWindowDuration"> mins.
</div>
</li>

</div>
<div class="hide" id="editDailyMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every day</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="editDailyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editDailyMWindowFriendlyName" class="span6" type="text" value="" name="editDailyMWindowFriendlyName">
</div>
 </li>
<li class="control-group">
<label for="editDailyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<input id="editDailyMWindowStartHour" class="span2" type="text" value="" name="editDailyMWindowStartHour" placeholder="18"> : <input id="editDailyMWindowStartMinute" class="span2" type="text" value="" name="editDailyMWindowStartMinute" placeholder="30">
</div>
</li>
<li class="control-group">
<label for="editDailyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
<div class="controls">
<input id="editDailyMWindowDuration" class="span6" type="text" value="" name="editDailyMWindowDuration"> mins.
</div>
</li>

</div>
<div class="hide" id="editWeeklyMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every week</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="editWeeklyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editWeeklyMWindowFriendlyName" class="span6" type="text" value="" name="editWeeklyMWindowFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editWeeklyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
<div class="controls alignCheckboxes">
<div class="errorsAfterThis">
<input type="checkbox" value="1" name="editWeeklyMWindowDays[]"> Mon <input type="checkbox" value="2" name="editWeeklyMWindowDays[]"> Tue <input type="checkbox" value="3" name="editWeeklyMWindowDays[]"> Wed <input type="checkbox" value="4" name="editWeeklyMWindowDays[]"> Thu <input type="checkbox" value="5" name="editWeeklyMWindowDays[]"> Fri <input type="checkbox" value="6" name="editWeeklyMWindowDays[]"> Sat <input type="checkbox" value="7" name="editWeeklyMWindowDays[]"> Sun
</div>
</div>
</li>
<li class="control-group">
<label for="editWeeklyMWindowStartHour" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<div class="errorsAfterThis">
<input id="editWeeklyMWindowStartHour" class="span2" type="text" value="" name="editWeeklyMWindowStartHour" placeholder="18"> : <input id="editWeeklyMWindowStartMinute" class="span2" type="text" value="" name="editWeeklyMWindowStartMinute" placeholder="30">
</div>
</div>
</li>
<li class="control-group">
<label for="editWeeklyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
<div class="controls">
<input id="editWeeklyMWindowDuration" class="span6" type="text" value="" name="editWeeklyMWindowDuration"> mins.
</div>
</li>

</div>
<div class="hide" id="editMonthlyMWindow">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every month</strong> for the mentioned period (in the account's timezone).
</div>
<li class="control-group">
<label for="editMonthlyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="editMonthlyMWindowFriendlyName" class="span6" type="text" value="" name="editMonthlyMWindowFriendlyName">
</div>
</li>
<li class="control-group">
<label for="editMonthlyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
<div class="controls alignCheckboxes span6">
<div class="errorsAfterThis">
<table width="100%" style="max-width:200px; margin-left:3px;">
<tbody><tr>
<td width="25%"><input type="checkbox" value="1" name="editMonthlyMWindowDays[]"> 1</td>
<td width="25%"><input type="checkbox" value="2" name="editMonthlyMWindowDays[]"> 2</td>
<td width="25%"><input type="checkbox" value="3" name="editMonthlyMWindowDays[]"> 3</td>
<td width="25%"><input type="checkbox" value="4" name="editMonthlyMWindowDays[]"> 4</td>
</tr>
<tr>
<td><input type="checkbox" value="5" name="editMonthlyMWindowDays[]"> 5</td>
<td><input type="checkbox" value="6" name="editMonthlyMWindowDays[]"> 6</td>
<td><input type="checkbox" value="7" name="editMonthlyMWindowDays[]"> 7</td>
<td><input type="checkbox" value="8" name="editMonthlyMWindowDays[]"> 8</td>
</tr>
<tr>
<td><input type="checkbox" value="9" name="editMonthlyMWindowDays[]"> 9</td>
<td><input type="checkbox" value="10" name="editMonthlyMWindowDays[]"> 10</td>
<td><input type="checkbox" value="11" name="editMonthlyMWindowDays[]"> 11</td>
<td><input type="checkbox" value="12" name="editMonthlyMWindowDays[]"> 12</td>
</tr>
<tr>
<td><input type="checkbox" value="13" name="editMonthlyMWindowDays[]"> 13</td>
<td><input type="checkbox" value="14" name="editMonthlyMWindowDays[]"> 14</td>
<td><input type="checkbox" value="15" name="editMonthlyMWindowDays[]"> 15</td>
<td><input type="checkbox" value="16" name="editMonthlyMWindowDays[]"> 16</td>
</tr>
<tr>
<td><input type="checkbox" value="17" name="editMonthlyMWindowDays[]"> 17</td>
<td><input type="checkbox" value="18" name="editMonthlyMWindowDays[]"> 18</td>
<td><input type="checkbox" value="19" name="editMonthlyMWindowDays[]"> 19</td>
<td><input type="checkbox" value="20" name="editMonthlyMWindowDays[]"> 20</td>
</tr>
<tr>
<td><input type="checkbox" value="21" name="editMonthlyMWindowDays[]"> 21</td>
<td><input type="checkbox" value="22" name="editMonthlyMWindowDays[]"> 22</td>
<td><input type="checkbox" value="23" name="editMonthlyMWindowDays[]"> 23</td>
<td><input type="checkbox" value="24" name="editMonthlyMWindowDays[]"> 24</td>
</tr><tr>
<td><input type="checkbox" value="25" name="editMonthlyMWindowDays[]"> 25</td>
<td><input type="checkbox" value="26" name="editMonthlyMWindowDays[]"> 26</td>
<td><input type="checkbox" value="27" name="editMonthlyMWindowDays[]"> 27</td>
<td><input type="checkbox" value="28" name="editMonthlyMWindowDays[]"> 28</td>
</tr>
<tr><td><input type="checkbox" value="29" name="editMonthlyMWindowDays[]"> 29</td>
<td><input type="checkbox" value="30" name="editMonthlyMWindowDays[]"> 30</td>
<td><input type="checkbox" value="31" name="editMonthlyMWindowDays[]"> 31</td>
<td></td>
</tr><tr>
<td colspan="4"><input type="checkbox" value="99" name="editMonthlyMWindowDays[]"> Last day of month</td>
</tr>
</tbody></table>
</div>
</div>
</li>
<li class="control-group">
<label for="editMonthlyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
<div class="controls">
<div class="errorsAfterThis">
<input id="editMonthlyMWindowStartHour" class="span2" type="text" value="" name="editMonthlyMWindowStartHour" placeholder="18"> : <input id="editMonthlyMWindowStartMinute" class="span2" type="text" value="" name="editMonthlyMWindowStartMinute" placeholder="30">
</div>
</div>
</li>
<li class="control-group">
<label for="editMonthlyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
<div class="controls">
<input id="editMonthlyMWindowDuration" class="span6" type="text" value="" name="editMonthlyMWindowDuration"> mins.
</div>
</li>

</div>
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="editMWindowSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Maintenance window saved!</strong> You can keep editing the maintenance window.
</div>
<div id="editMWindowErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary">Save Maintenance Window</button>
</div>
</form>
</div>
<div id="deleteMWindow" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="deleteMWindowForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deleteMWindow">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Delete Maintenance Window</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Maintenance Window Information</h4>
</li>

<li class="control-group">
<label for="deleteMWindowType" class="control-label">Maintenance Window Type</label>
<div class="controls">
<span class="bold" id="deleteMWindowTypeTitle"></span>
</div>
</li>

<li class="control-group">
<label for="deleteMWindowValue" class="control-label">Maintenance Window</label>
<div class="controls">
<span class="bold" id="deleteMWindowFriendlyNameTitle"></span>
</div>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="deleteMWindowSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Maintenance window deleted!</strong>.
</div>
<div id="deleteMWindowInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-warning">Warning!</strong> You are about to delete this maintenance window and it will be removed from any monitors it is attached to (monitors will not be deleted).
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="deleteMWindowFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="deleteMWindowFormSubmitButton">Delete Maintenance Window</button>
</div>
</form>
</div>
<div id="newPsp" class="modal hide fade" tabindex="-1" data-width="40%">
<div class="modal-header"> </div>
<form enctype="multipart/form-data" id="newPspForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=newPsp" autocomplete="off">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple"> 
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> New Public Status Page</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Public Status Page Information</h4>


</li><li class="control-group">
<label for="newPspFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newPspFriendlyName" class="span6" type="text" value="" name="newPspFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newPspLogo" class="control-label">Logo</label>
<div class="controls">
<input id="newPspLogo" type="file" name="newPspLogo" accept=".jpg,.png">
</div>
<span class="help-block">Can be .jpg, .jpeg or .png and no bigger than 400x200px and 150kb.<br>
You can change this later in "Appereance" section of Status page dashboard.
</span>
</li>
<li class="control-group">
<label for="newPspCustomDomain" class="control-label">Custom Domain</label>
<div class="controls">
<input id="newPspCustomDomain" class="span6" type="text" value="" placeholder="status.site.com" name="newPspCustomDomain" disabled="">
</div>
<div style="margin-top: 10px;">
<span class="label label-warning">PRO</span>
Available only in the PRO plan.
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_psp-custom_domain">Upgrade</a>
</div>
<span class="help-block">Host status page on your own domain! Make sure you <strong>create a CNAME DNS record</strong> for your domain to <code>stats.uptimerobot.com</code>. It can take up to 24 hours for the custom domain to be activated.
</span>
</li><li class="control-group">
<label for="newPspPassword" class="control-label">Password</label>
<div class="controls">
<input id="newPspPassword" class="span6" type="password" value="" name="newPspPassword" autocomplete="new-password">
</div>
</li>
<li class="control-group">
<label for="newPspHideURLogo" class="control-label">Hide UptimeRobot Logo</label>
<div class="controls">
<span class="label label-warning">PRO</span>
Available only in the PRO plan.
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_psp-hide_ur_logo">Upgrade</a>
</div>
</li>
<li class="control-group">
<label for="newPspSEONoIndex" class="control-label">Robots meta tag</label>
<div class="controls">
<select id="newPspSEONoIndex" name="newPspSEONoIndex">
<option value="1">noindex</option>
<option value="0" selected="">index</option>
</select>
</div>
<span class="help-block">Meta robots "index" means your website will be visible in search engines. Setting value to "noindex" will hide your Status page in search engines.</span>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="newPspSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Public status page created!</strong> It can be reached from: <a id="newPspCustomURL" class="hide" href="">here</a> <span class="hide" id="newPspCustomURLInfo">(once a CNAME record for the hostname to stats.uptimerobot.com is created)</span><a id="newPspURLBig" href="">here</a>.<p></p>
 <p id="newPspURLSmallWrapper" class="hide"> <small>(or always from <a id="newPspURLSmall" href="">here</a>)</small> .
</p></div>
<div id="newPspErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary">Create Public Status Page</button>
</div>
</form>
</div>
<style>
  		.select2-container-multi .select2-choices .select2-search-field input {
  			background: none !important;
  			background-color: #F5F6F9;
  		}
  		.select2-container-multi .select2-choices  {
  			background-color: #F5F6F9;
  			border: 0;
  		}
  		.select2-container-multi.select2-container-active .select2-choice {
  			border: 0;
  		}
		</style>
<div id="deletePsp" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="deletePspForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deletePsp">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Delete Public Status Page</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Public Status Page Information</h4>
</li>

<li class="control-group">
<label for="deletePspFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<span class="bold" id="deletePspFriendlyName"></span>
</div>
</li>

<li class="control-group">
<label for="deletePspMonitors" class="control-label">Monitors</label>
<div class="controls">
<span class="bold" id="deletePspMonitors"></span>
</div>
</li>
 
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="deletePspInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20">
<strong class="alert-warning">Warning!</strong> You are about to delete this public status page.
</div>
<div class="alert alert-warning no-margin-right no-margin-left margin-top20">
<strong class="alert-warning">Warning!</strong> If there are any Status page subscribers they will be removed (this can't be undone).
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="deletePspFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="deletePspFormSubmitButton">Delete Public Status Page</button>
</div>
</form>
</div>
<div id="deletePspAnnouncement" class="modal hide fade" tabindex="-1" data-width="35%">
<div class="modal-header"> </div>
<form id="deletePspAnnouncementForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deletePspAnnouncement">
<div class="modal-body">
<input type="hidden" id="deletePspAnnouncementPspID" name="pspID" value="">
<input type="hidden" id="deletePspAnnouncementID" name="pspAnnouncementID" value="">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="spa12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Delete Public Status Page Announcement</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Public Status Page Announcement Information</h4>
</li>

<li class="control-group">
<label for="deletePspAnnouncementFriendlyName" class="control-label">Announcement Title</label>
<div class="controls">
<span class="bold" id="deletePspAnnouncementFriendlyName"></span>
</div>
</li>

</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="deletePspAnnouncementSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Public status announcement page deleted!</strong>.
</div>
<div id="deletePspAnnouncementInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-warning">Warning!</strong> You are about to delete this public status page announcement.
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="deletePspAnnouncementFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="deletePspAnnouncementFormSubmitButton">Delete Announcement</button>
</div>
</form>
</div>
<div id="editProPlanBilling" class="modal hide fade" tabindex="-1" data-width="40%">
<div class="modal-header"> </div>
<form id="editProPlanBillingForm" method="POST" action="inc/dml/paymentDML.php?action=editProPlanBilling" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> Edit "Pro Plan" Billing Details</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">

<div class="row-fluid">
<div class="span6 form-dark">
<li class="control-group">
<label for="editProPlanBillingName" class="control-label">Full name or company name <span class="required">*</span></label>
<div class="controls">
<input type="text" name="editProPlanBillingName" id="editProPlanBillingName" class="span10" value="">
</div>
</li>
</div>
<div class="span6 form-dark">
<li class="control-group">
<label for="editProPlanBillingAddress" class="control-label">Billing Address <span class="required">*</span></label>
<div class="controls">
<input type="text" name="editProPlanBillingAddress" id="editProPlanBillingAddress" class="span12" value="">
</div>
</li>
</div>
</div>
<div class="row-fluid">
<div class="span3 form-dark">
<li class="control-group">
<label for="editProPlanBillingZipCode" class="control-label">Billing Zip <span class="required">*</span></label>
<div class="controls">
<input type="text" name="editProPlanBillingZipCode" id="editProPlanBillingZipCode" class="span12" value="">
</div>
</li>
</div>
<div class="span3 form-dark">
<li class="control-group">
<label for="editProPlanBillingState" class="control-label">Billing State</label>
<div class="controls">
<input type="text" name="editProPlanBillingState" id="editProPlanBillingState" class="span9" value="">
</div>
</li>
</div>
<div class="span3 form-dark">
<li class="control-group">
<label for="editProPlanBillingCity" class="control-label">Billing City <span class="required">*</span></label>
<div class="controls">
<input type="text" name="editProPlanBillingCity" id="editProPlanBillingCity" class="span12" value="">
</div>
</li>
</div>
<div class="span3 form-dark">
<li class="control-group">
<label for="editProPlanBillingPhoneNumber" class="control-label">Billing Phone # <span class="required">*</span></label>
<div class="controls">
<input type="text" name="editProPlanBillingPhoneNumber" id="editProPlanBillingPhoneNumber" class="span12" value="">
</div>
</li>
</div>
</div>
<div class="row-fluid">
<div class="span6 form-dark">
<li class="control-group">
<label for="editProPlanBillingCountry" class="control-label">Billing Country <span class="required">*</span></label>
<div class="controls">
<select id="editProPlanBillingCountry" class="span10 darkSelect" name="editProPlanBillingCountry">
<option value="">Please Select</option>
<option value="AFG">Afghanistan</option><option value="ALB">Albania</option><option value="DZA">Algeria</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATG">Antigua &amp; Barbuda</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus</option><option value="BEL">Belgium</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia</option><option value="BIH">Bosnia &amp; Herzegovina</option><option value="BWA">Botswana</option><option value="BRA">Brazil</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic</option><option value="TCD">Chad</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="COL">Colombia</option><option value="COM">Comoros</option><option value="COG">Congo</option><option value="COD">Congo, D.R.</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="CIV">Cote dIvoire</option><option value="HRV">Croatia</option><option value="CYP">Cyprus</option><option value="CZE">Czech Republic</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic</option><option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option><option value="FIN">Finland</option><option value="FRA">France</option><option value="GUF">French Guiana</option><option value="PYF">French Polynesia</option><option value="GAB">Gabon</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GRD">Grenada</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GGY">Guernsey</option><option value="GIN">Guinea</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="HND">Honduras</option><option value="HKG">Hong Kong</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IDN">Indonesia</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="IMN">Isle of Man</option><option value="ISR">Israel</option><option value="ITA">Italy</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="PRK">Korea South</option><option value="XKX">Kosovo</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan</option><option value="LAO">Laos</option><option value="LVA">Latvia</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania</option><option value="LUX">Luxembourg</option><option value="MAC">Macau</option><option value="MKD">Macedonia</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MTQ">Martinique</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MYT">Mayotte</option><option value="MEX">Mexico</option><option value="MDA">Moldova</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar</option><option value="NAM">Namibia</option><option value="NPL">Nepal</option><option value="NLD">Netherlands</option><option value="ANT">Netherlands Antilles</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PSE">Palestinian Territory</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="POL">Poland</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Reunion</option><option value="ROU">Romania</option><option value="RUS">Russia</option><option value="RWA">Rwanda</option><option value="KNA">Saint Kitts and Nevis</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome &amp; Principe</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="ZAF">South Africa</option><option value="ESP">Spain</option><option value="LKA">Sri Lanka</option><option value="VCT">St Vincent and the Grenadines</option><option value="SUR">Suriname</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland</option><option value="TWN">Taiwan</option><option value="TJK">Tajikistan</option><option value="TZA">Tanzania</option><option value="THA">Thailand</option><option value="TGO">Togo</option><option value="TON">Tonga</option><option value="TTO">Trinidad &amp; Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey</option><option value="TKM">Turkmenistan</option><option value="TCA">Turks &amp; Caicos Islands</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="USA" selected="selected">United States</option><option value="URY">Uruguay</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela</option><option value="VNM">Vietnam</option><option value="VGB">Virgin Islands, British</option><option value="VIR">Virgin Islands, U.S.</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option> </select>
</div>
</li>
</div>
<div class="span6 form-dark">
<li class="control-group">
<label for="editProPlanBillingVAT" class="control-label">Billing VAT</label>
<div class="controls">
<input type="text" name="editProPlanBillingVAT" id="editProPlanBillingVAT" class="span12" value="">
</div>
</li>
</div>
</div>
<div id="editProPlanBillingVATInfoWrapper" class="row-fluid hide">
<div class="span12 form-dark">
<div id="editProPlanBillingVATInfo" class="alert alert-info no-margin">
<p><b>VAT Information: </b>An additional <span class="editProPlanBillingVATInfoRatio"></span>% EU VAT will be added to the purchase <span class="editProPlanBillingNonMaltaVATInfo">if no valid VAT Number is mentioned</span><span class="editProPlanBillingMaltaVATInfo hide">(even if a valid VAT is mentioned as UptimeRobot is based in Malta)</span>.</p>
</div>
</div>
</div>
</ul>
</fieldset>

</div>
</div>
 </div>
</div>
</div>

<div id="editProPlanBillingSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-success">Pro Plan billing details are saved!</strong>
</div>
<div id="editProPlanBillingVatDifferenceNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
<strong class="alert-error">The action couldn't be performed as this update causes a change in VAT rates (and the subscription amount). Please contact support@uptimerobot.com and we'd love to help.</strong>.
</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn" id="editProPlanBillingFormCancelButton">Close</button>
<button type="submit" class="btn btn-primary" id="editProPlanBillingFormSubmitButton">Save "Pro Plan" Billing Details</button>
</div>
</form>
</div>
<div class="modal hide fade" data-width="40%" id="newCND" tabindex="-1">
<div class="modal-header"></div>
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4>New Custom Notification Delivery</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<form action="inc/dml/monitorDML.php?action=saveContentDeliveryNotification" class="form-horizontal" id="newCNDEmailSMTPForm" method="post" name="newCNDEmailSMTPForm" novalidate="novalidate">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Custom Notification Delivery Information</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newCNDType">Delivery Type <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_newCNDType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-57">
Please Select
</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen57" class="select2-offscreen">Delivery Type *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-57" id="s2id_autogen57"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen57_search" class="select2-offscreen">Delivery Type *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-57" id="s2id_autogen57_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-57">   </ul></div></div><select class="selecttwo span8" id="newCNDType" name="newCNDType" style="float: none; display: none;" tabindex="-1" title="Delivery Type *">
<option selected="selected" value="0">
Please Select
</option>
<option value="1">
E-mail
</option>
</select>
</div>
</li>
<div class="hide" id="newCNDEmailType">
<li class="form-horizontal control-group">
<label class="form-horizontal control-label" for="newCNDEmailSubType">E-mail provider
<span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_newCNDEmailSubType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-58">
 Please Select
</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen58" class="select2-offscreen">E-mail provider
*</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-58" id="s2id_autogen58"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen58_search" class="select2-offscreen">E-mail provider
*</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-58" id="s2id_autogen58_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-58">   </ul></div></div><select class="selecttwo span8" id="newCNDEmailSubType" name="newCNDEmailSubType" style="float: none; display: none;" tabindex="-1" title="E-mail provider
*">
<option selected="selected" value="0">
 Please Select
</option>
<option value="1">
SMTP
</option>
</select>
</div>
</li>
<div class="hide" id="newCNDEmailSMTPSubType">
<li class="section-form">
<h4 class="test">Server Information</h4>
</li>
<li class="control-group">
<label class="control-label" for="newCNDEmailTypeHost">Host <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newCNDEmailTypeHost" name="newCNDEmailTypeHost" type="text" placeholder="smtp.example.com" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="newCNDEmailTypeUsername">Username <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newCNDEmailTypeUsername" name="newCNDEmailTypeUsername" type="text" placeholder="username@example.com" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="newCNDEmailTypePassword">Password <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newCNDEmailTypePassword" name="newCNDEmailTypePassword" type="password" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="newCNDEmailTypePort">Port <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newCNDEmailTypePort" name="newCNDEmailTypePort" type="text" placeholder="465" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="newCNDEmailTypeSecureConnection">TLS/SSL required</label>
<div class="controls">
<input id="newCNDEmailTypeSecureConnection" type="checkbox" value="1" name="newCNDEmailTypeSecureConnection">
</div>
</li>
<li class="control-group">
<div id="smtpVerifyMessageHolder"></div>
<button type="button" class="btn btn-blue pull-right addVerifySMTPConnection">Verify</button>
</li>
<div id="cndDetailsForm" class="hide">
<li class="section-form">
<h4 class="test">Custom Notification Delivery Details</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDFriendlyName">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newEmailCNDFriendlyName" name="newEmailCNDFriendlyName" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDSenderAddress">Sender Address <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newEmailCNDSenderAddress" name="newEmailCNDSenderAddress" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDSenderName">Sender Name <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newEmailCNDSenderName" name="newEmailCNDSenderName" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group"><label class="control-label" for="newEmailCNDActive">Enabled:</label>
<div class="controls">
<input id="newEmailCNDActive" type="checkbox" value="1" name="newEmailCNDActive">
</div>
</li>
<li class="section-form">
<h4 class="test">Up Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeUpSubject">Up Notification Subject
<span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newEmailCNDTypeUpSubject" name="newEmailCNDTypeUpSubject" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeUpMessage">Up Notification Message<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="newEmailCNDTypeUpMessage" name="newEmailCNDTypeUpMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="section-form">
<h4 class="test">Down Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeDownSubject">Down Notification
Subject <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newEmailCNDTypeDownSubject" name="newEmailCNDTypeDownSubject" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeDownMessage">Down Notification <br>Message
<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="newEmailCNDTypeDownMessage" name="newEmailCNDTypeDownMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="section-form">
<h4 class="test">SSL Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeSSLSubject">SSL Notification Subject
<span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newEmailCNDTypeSSLSubject" name="newEmailCNDTypeSSLSubject" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeSSLMessage">SSL Notification Message
<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="newEmailCNDTypeSSLMessage" name="newEmailCNDTypeSSLMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="section-form">
<h4 class="test">SSL Expired Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeSSLExpiredSubject">SSL Expired
Notification Subject <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="newEmailCNDTypeSSLExpiredSubject" name="newEmailCNDTypeSSLExpiredSubject" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="newEmailCNDTypeSSLExpiredMessage">SSL Expired
Notification Message<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="newEmailCNDTypeSSLExpiredMessage" name="newEmailCNDTypeSSLExpiredMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="form-horizontal control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> This is a information message
</div>
</li>
</div>
</div></div></ul>
</fieldset>
</div>
</div>
<div id="newCNDMessageHolder"></div>
</form></div>
</div>
</div>
</div>
</div>
</div>
 </div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" type="button">Close</button>
<button id="cndSubmitButton" type="submit" class="btn btn-primary hide">Create</button>

</div>
</div><div class="modal hide fade" data-width="40%" id="editCND" tabindex="-1">
<div class="modal-header"></div>
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4>New Custom Notification Delivery</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<form action="inc/dml/monitorDML.php?action=editContentDeliveryNotification" class="form-horizontal" id="editCNDEmailSMTPForm" method="post" name="editCNDEmailSMTPForm" novalidate="novalidate">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Custom Notification Delivery Information</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editCNDType">Delivery Type <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_editCNDType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-59">
Please Select
</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen59" class="select2-offscreen">Delivery Type *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-59" id="s2id_autogen59"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen59_search" class="select2-offscreen">Delivery Type *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-59" id="s2id_autogen59_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-59">   </ul></div></div><select class="selecttwo span8" id="editCNDType" name="editCNDType" style="float: none; display: none;" tabindex="-1" title="Delivery Type *">
<option selected="selected" value="0">
Please Select
</option>
<option value="1">
E-mail
</option>
</select>
</div>
</li>
<div class="" id="editCNDEmailType">
<li class="form-horizontal control-group">
<label class="form-horizontal control-label" for="editCNDEmailSubType">E-mail provider
<span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_editCNDEmailSubType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-60">
Please Select
</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen60" class="select2-offscreen">E-mail provider
*</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-60" id="s2id_autogen60"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen60_search" class="select2-offscreen">E-mail provider
*</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-60" id="s2id_autogen60_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-60">   </ul></div></div><select class="selecttwo span8" id="editCNDEmailSubType" name="editCNDEmailSubType" style="float: none; display: none;" tabindex="-1" title="E-mail provider
*">
<option selected="selected" value="0">
Please Select
</option>
<option value="1">
SMTP
</option>
</select>
</div>
</li>
<div class="" id="editCNDEmailSMTPSubType">
<li class="section-form">
<h4 class="test">Server Information</h4>
</li>
<li class="control-group">
<label class="control-label" for="editCNDEmailTypeHost">Host <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editCNDEmailTypeHost" name="editCNDEmailTypeHost" type="text" placeholder="smtp.example.com" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="editCNDEmailTypeUsername">Username <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editCNDEmailTypeUsername" name="editCNDEmailTypeUsername" type="text" placeholder="username@example.com" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="editCNDEmailTypePassword">Password <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editCNDEmailTypePassword" name="editCNDEmailTypePassword" type="password" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="editCNDEmailTypePort">Port <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editCNDEmailTypePort" name="editCNDEmailTypePort" type="text" placeholder="465" value="">
</div>
</li>
<li class="control-group">
<label class="control-label" for="editCNDEmailTypeSecureConnection">TLS/SSL required</label>
<div class="controls">
<input id="editCNDEmailTypeSecureConnection" type="checkbox" value="1" name="editCNDEmailTypeSecureConnection">
</div>
</li>
<li class="control-group">
<div id="editSmtpVerifyMessageHolder"></div>
<button type="button" class="btn btn-blue pull-right">Verify</button>
</li>
<div>
<li class="section-form">
<h4 class="test">Custom Notification Delivery Details</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDFriendlyName">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editEmailCNDFriendlyName" name="editEmailCNDFriendlyName" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDSenderAddress">Sender Address <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editEmailCNDSenderAddress" name="editEmailCNDSenderAddress" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDSenderName">Sender Name <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editEmailCNDSenderName" name="editEmailCNDSenderName" type="text" value="">
 </div>
</li>
<li class="form-horizontal control-group"><label class="control-label" for="editEmailCNDActive">Enabled:</label>
<div class="controls">
<input id="editEmailCNDActive" type="checkbox" value="1" name="editEmailCNDActive">
</div>
</li>
<li class="section-form">
<h4 class="test">Up Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeUpSubject">Up Notification Subject
<span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editEmailCNDTypeUpSubject" name="editEmailCNDTypeUpSubject" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeUpMessage">Up Notification Message<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="editEmailCNDTypeUpMessage" name="editEmailCNDTypeUpMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="section-form">
<h4 class="test">Down Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeDownSubject">Down Notification
Subject <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editEmailCNDTypeDownSubject" name="editEmailCNDTypeDownSubject" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeDownMessage">Down Notification <br>Message
<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="editEmailCNDTypeDownMessage" name="editEmailCNDTypeDownMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="section-form">
<h4 class="test">SSL Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeSSLSubject">SSL Notification Subject
<span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editEmailCNDTypeSSLSubject" name="editEmailCNDTypeSSLSubject" type="text" value="">
</div>
</li>
 <li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeSSLMessage">SSL Notification Message
<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="editEmailCNDTypeSSLMessage" name="editEmailCNDTypeSSLMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="section-form">
<h4 class="test">SSL Expired Notification</h4>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeSSLExpiredSubject">SSL Expired
Notification Subject <span class="required">*</span></label>
<div class="controls">
<input class="span6" id="editEmailCNDTypeSSLExpiredSubject" name="editEmailCNDTypeSSLExpiredSubject" type="text" value="">
</div>
</li>
<li class="form-horizontal control-group">
<label class="control-label" for="editEmailCNDTypeSSLExpiredMessage">SSL Expired
Notification Message<span class="required">*</span></label>
<div class="controls">
<textarea class="span6" id="editEmailCNDTypeSSLExpiredMessage" name="editEmailCNDTypeSSLExpiredMessage" rows="3" type="text"></textarea>
</div>
</li>
<li class="form-horizontal control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> This is a information message
</div>
</li>
</div>
</div></div></ul>
</fieldset>
</div>
</div>
<div id="editCNDMessageHolder"></div>
</form></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" type="button">Close</button>
<button type="submit" class="btn btn-primary">Update</button>

</div>
</div><aside class="offcanvas" id="incident-detail" aria-hidden="true">
<div class="offcanvas-container">
<div class="offcanvas-header">
<h1>
<i class="item-icon fontello-icon-cd incident-type"></i>
Incident on <strong id="incident-monitor-name" class="incident-detail"></strong>
</h1>
<button class="offcanvas-close" aria-label="Close" title="Close panel">+</button>
</div>
<div id="incident-details" class="offcanvas-body">
<div>
<a class="btn btn-secondary incident-detail-download" target="_blank">Full response</a>
<a id="incident-monitor-link" class="btn btn-secondary pull-right" onclick="loadMonitorDetails()">Go to monitor</a>
</div>
<div class="row-fluid margin-top30">
<div class="span4">
<div class="info-block">Status:</div>
<div class="incident-type">
<i class="item-icon fontello-icon-cd"></i>
<strong id="incident-status"></strong>
</div>
</div>
<div class="span4">
<div class="info-block">Started at:</div>
<div id="incident-start-time" class="incident-detail"></div>
</div>
<div class="span4">
<div class="info-block">Duration:</div>
<div id="incident-duration" class="incident-detail"></div>
</div>
</div>
<div class="well margin-top30">
<div class="info-block">Root cause:</div>
<div>
<strong id="incident-reason" class="incident-detail"></strong>
</div>
</div>
<div id="server-details-widget" class="widget">
<div class="margin-top10">
<div class="info-block">Checked by:</div>
</div>
<div id="server-details-preholder" class="row-fluid margin-bottom15">
<div class="span4">
<div class="incident-placeholder"></div>
<div class="incident-placeholder"></div>
<div class="incident-placeholder"></div>
</div>
<div class="span4">
<div class="incident-placeholder"></div>
<div class="incident-placeholder"></div>
<div class="incident-placeholder"></div>
</div>
<div class="span4">
<div class="incident-placeholder"></div>
<div class="incident-placeholder"></div>
<div class="incident-placeholder"></div>
</div>
</div>
<div id="server-details" class="row-fluid margin-bottom15 incident-detail">
</div>
</div>
<div id="incident-rootcause-headers-widget" class="widget well hide">
<div class="info-block margin-top15">Response headers:</div>
<pre id="incident-rootcause-headers" class="incident-detail"></pre>
</div>
<div id="incident-loader-container">
<div class="spinner" style="z-index: 1; display: none;">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
<div id="incident-response-widget" class="widget well">
<div class="widget-header margin-top10">
<div class="info-block">Telemetry</div>
</div>
<div id="incident-request-details-container">
<div class="info-block margin-top15">Request:</div>
<pre id="incident-request-details" class="incident-detail"></pre>
</div>
<div id="incident-response-title" class="info-block margin-top15">Response preview:</div>
<div class="incident-response-container">
<textarea id="incident-rootcause-html" class="pre incident-detail" style="overflow-y: scroll;" rows="6" disabled=""></textarea>
<div class="incident-response-hover">
<a class="btn btn-blue incident-detail-download" target="_blank">See full response</a>
</div>
</div>
</div>

<div class="alert-contact-details"></div>

<div class="info-block margin-top30">Comments:
<a id="add-comment" class="btn btn-green btn-mini pull-right" onclick="showNewCommentForm()"> Add comment</a>
</div>
<div class="well well-box well-nice">
<div id="comments-error-container" style="margin: 15px 15px 0 15px">
</div>
<div id="comments-container">
<div id="incident-comments" class="incident-detail"></div>
<div id="incident-placeholder-container" class="section-content item">
<div>
<p class="incident-placeholder"></p>
<span class="help-block padding-bottom10">
<span class="pull-left"></span>
<span class="pull-right">
<div style="width: 25px;height: 16px;display: inline-block;background: #e6e7e8;border-radius: 6px;"></div>
|
<div style="width: 25px;height: 16px;display: inline-block;background: #e6e7e8;border-radius: 6px;"></div>
</span>
</span>
</div>
</div>
</div>
 <div id="newCommentSection" class="section-content hide">
<div class="control-group">
<textarea id="incident-new-comment" class="input-block-level" rows="6"></textarea>
</div>
<div class="control-group">
<div class="row-fluid">
<button class="btn btn-blue pull-right ladda-button" onclick="addNewComment()">
<span class="ladda-label">Add comment</span></button>
</div>
</div>
</div>
</div>
</div>
</div></aside>
<div id="newAlertContact" class="modal hide fade" tabindex="-1" data-width="40%" aria-hidden="true" style="width: 40%; margin-left: -20%; display: none; margin-top: -150px;">
<div class="modal-header"> </div>
<form id="newAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=newAlertContact" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span12 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> New Alert Contact</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Alert Contact Information</h4>
</li>

<li class="control-group">
<label for="newAlertContactType" class="control-label">Alert Contact Type <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span8" id="s2id_newAlertContactType" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">E-mail</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen">Alert Contact Type *</label><input class="select2-focusser select2-offscreen valid" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4" aria-invalid="false"></div><select id="newAlertContactType" class="selecttwo span8" name="newAlertContactType" style="float: none; display: none;" tabindex="-1" title="Alert Contact Type *">
<option selected="selected" value="0">Please Select</option>
<optgroup label="Standard Methods">
<option value="2">E-mail</option>
<option value="8">Pro SMS</option>
<option value="14">Voice Call</option>
<option value="5">Webhook</option>
<option value="1">Email-to-SMS</option>
</optgroup>
<optgroup label="3rd Party Apps/Services">
<option value="3">Twitter</option>
<option value="18">Telegram</option>
<option value="11">Slack</option>
<option value="20">Microsoft Teams</option>
<option value="21">Google Chat</option>
<option value="23">Discord</option>
<option value="10">HipChat</option>
<option value="16">PagerDuty</option>
<option value="6">Pushbullet (Push for Android &amp; Browsers)</option>
<option value="9">Pushover (Push for Android, iOS, Browsers &amp; Desktop)</option>
<option value="15">Splunk</option>
<option value="7">Zapier</option>
</optgroup>
</select>
</div>
</li>

<div class="hide" id="newMobileFreeAlertContact">
<li class="control-group">
<label for="newMobileFreeAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newMobileFreeAlertContactFriendlyName" class="span6" type="text" value="" name="newMobileFreeAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newMobileFreeProviderID" class="control-label">Mobile Provider <span class="required">*</span></label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_newMobileFreeProviderID" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-5">&nbsp;</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen5" class="select2-offscreen">Mobile Provider *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen5_search" class="select2-offscreen">Mobile Provider *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-5" id="s2id_autogen5_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-5">   </ul></div></div><select id="newMobileFreeProviderID" class="selecttwo span6" name="newMobileFreeProviderID" style="float: none; display: none;" tabindex="-1" title="Mobile Provider *">
</select>
<span class="help-block">If your mobile network doesn't provide free email-to-SMS, you can always use Pro SMS.</span>
</div>
</li>

<li class="control-group">
<label for="newMobileFreeAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
<div class="controls">
<span id="newMobileFreeAlertContactPrefix"></span>
<input id="newMobileFreeAlertContactValue" class="span6" type="text" value="" name="newMobileFreeAlertContactValue">
<span id="newMobileFreeAlertContactSuffix"></span>
<span class="hide" id="newMobileFreeAlertContactNumberLimit"></span>
<span class="hide" id="newMobileFreeAlertContactNumberLimitUp"></span>
</div>
</li>
<li class="control-group">
<label for="newMobileFreeAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newMobileFreeAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-6">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen6_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-6">   </ul></div></div><select id="newMobileFreeAlertContactExcludeNotifications" class="selecttwo span6" name="newMobileFreeAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newMobileFreeAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newMobileFreeAlertContactSSLExpirationReminder" id="newMobileFreeAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
 </div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> UptimeRobot uses free e-mail to SMS gateways of the providers that support it. These gateways are not always stable and such free SMS notifications may not always work as expected.
</div>
</li>

</div>
<div class="hide" id="newEmailAlertContact" style="display: block;">
<li class="control-group">
<label for="newEmailAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newEmailAlertContactFriendlyName" class="span6" type="text" value="" name="newEmailAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newEmailAlertContactValue" class="control-label">E-mail <span class="required">*</span></label>
<div class="controls">
<input id="newEmailAlertContactValue" class="span6" type="text" value="" name="newEmailAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newEmailAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newEmailAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-7">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen7" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-7" id="s2id_autogen7"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen7_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-7" id="s2id_autogen7_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-7">   </ul></div></div><select id="newEmailAlertContactExcludeNotifications" class="selecttwo span6" name="newEmailAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newEmailAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
 <div class="controls">
<input type="checkbox" name="newEmailAlertContactSSLExpirationReminder" id="newEmailAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>

</div>
<div class="hide" id="newTwitterAlertContact">
<li class="control-group">
<label for="newTwitterAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newTwitterAlertContactFriendlyName" class="span6" type="text" value="" name="newTwitterAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newTwitterAlertContactValue" class="control-label">Twitter User <span class="required">*</span></label>
<div class="controls">
@ <input id="newTwitterAlertContactValue" class="span5" type="text" value="" name="newTwitterAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newTwitterAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newTwitterAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-8">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen8_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-8">   </ul></div></div><select id="newTwitterAlertContactExcludeNotifications" class="selecttwo span6" name="newTwitterAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newTwitterAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
 <div class="controls">
<input type="checkbox" name="newTwitterAlertContactSSLExpirationReminder" id="newTwitterAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> Please make sure that you follow the <a href="http://twitter.com/uptimerobot">@uptimerobot</a> Twitter user (as notification direct messages are sent from this address) before adding the alert contact.
</div>
</li>


</div>
<div class="hide" id="newWebHookAlertContact">
<li class="control-group">
<label for="newWebHookAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newWebHookAlertContactFriendlyName" class="span6" type="text" value="" name="newWebHookAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newWebHookAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
<div class="controls">
<textarea id="newWebHookAlertContactValue" class="span6" type="text" name="newWebHookAlertContactValue" rows="3">http://</textarea>
</div>
 </li>
<li class="control-group">
<label for="newWebHookAlertContactPOSTValue" class="control-label">POST Value (JSON Format)</label>
<div class="controls">
<textarea id="newWebHookAlertContactPOSTValue" class="span6" type="text" name="newWebHookAlertContactPOSTValue" rows="4" placeholder="{&quot;sampleParameter&quot;: &quot;Message from UptimeRobot&quot;,&quot;website&quot;: &quot;*monitorURL*&quot;}"></textarea>
<span class="help-block"><input type="checkbox" name="newWebHookAlertContactPOSTValueSendJSON" value="1"> Send as JSON (application/json). If not selected, the data will be sent as a standard POST (application/x-www-form-urlencoded).</span>
</div>
</li>
<li class="control-group">
<label for="newWebHookAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newWebHookAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-9">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen9" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-9" id="s2id_autogen9"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen9_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-9" id="s2id_autogen9_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-9">   </ul></div></div><select id="newWebHookAlertContactExcludeNotifications" class="selecttwo span6" name="newWebHookAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newWebHookAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newWebHookAlertContactSSLExpirationReminder" id="newWebHookAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<p>UptimeRobot will add the below querystring to the end of the requests sent for <b>up-down events</b>:</p>
<code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;alertDuration=*alertDuration*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
<p>And. it will add the below querystring to the end of the requests sent for <b>SSL expiry notifications</b>:</p>
<code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;sslExpiryDate=*sslExpiryDate&amp;sslExpiryDaysLeft=*sslExpiryDaysLeft*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
<p>Or, you can create a totally custom webhook URL by using the variables.</p>
<p><a class="btn btn-primary newWebHookAlertContactDetailsButton">Show/Hide Details &amp; Variables</a></p>
<div class="newWebHookAlertContactDetails hide">
<p>If the default webhook structure mentioned above is not a good fit for you, feel free to use the variables below in the webhook URLs:</p>
<ul>
<li><code>*monitorID*</code> (the ID of the monitor)</li>
<li><code>*monitorURL*</code> (the URL of the monitor)</li>
<li><code>*monitorFriendlyName*</code> (the friendly name of the monitor)</li>
<li><code>*alertType*</code> (1: down, 2: up, 3: SSL expiry notification)</li>
<li><code>*alertTypeFriendlyName*</code> (Down or Up)</li>
<li><code>*alertDetails*</code> (any info regarding the alert -if exists-)</li>
<li><code>*alertDuration*</code> (in seconds and only for up events)</li>
<li><code>*alertDateTime*</code> (in Unix timestamp)</li>
<li><code>*monitorAlertContacts*</code> (the alert contacts associated with the alert in the format of 457;2;john@doe.com -alertContactID;alertContactType, alertContactValue)</li>
<li><code>*sslExpiryDate*</code> (only for SSL expiry notifications)</li>
<li><code>*sslExpiryDaysLeft*</code> (only for SSL expiry notifications)</li>
</ul>
</div>
</div>
</li>

</div>
<div class="hide" id="newPushbulletAlertContact">
<li class="control-group">
<label for="newPushbulletAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newPushbulletAlertContactFriendlyName" class="span6" type="text" value="" name="newPushbulletAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newPushbulletAlertContactValue" class="control-label">Pushbullet Access Token <span class="required">*</span></label>
<div class="controls">
<input id="newPushbulletAlertContactValue" class="span6" type="text" value="" name="newPushbulletAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newPushbulletAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newPushbulletAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-10">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen10" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-10" id="s2id_autogen10"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen10_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-10" id="s2id_autogen10_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-10">   </ul></div></div><select id="newPushbulletAlertContactExcludeNotifications" class="selecttwo span6" name="newPushbulletAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newPushbulletAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newPushbulletAlertContactSSLExpirationReminder" id="newPushbulletAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> Push notifications (for Android, iOS and Chrome) are sent using the free-to-use <a href="https://www.pushbullet.com/">Pushbullet app/service</a>.<p>The Access Token can be found inside the "Account Settings" menu of <a href="https://www.pushbullet.com/">Pushbullet's website</a>. The service has apps for <a href="https://play.google.com/store/apps/details?id=com.pushbullet.android">Android</a>, <a href="https://itunes.apple.com/us/app/pushbullet/id810352052?mt=8">iOS</a> and extensions for <a href="https://chrome.google.com/webstore/detail/pushbullet/chlffgpmiacpedhhbkiomidkjlcfhogd?hl=en">Chrome</a> and <a href="https://addons.mozilla.org/en-US/firefox/addon/pushbullet/">Firefox</a>.</p>
</div>
</li>

</div>
<div class="hide" id="newZapierAlertContact">
<li class="control-group">
<label for="newZapierAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newZapierAlertContactFriendlyName" class="span6" type="text" value="" name="newZapierAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newZapierAlertContactValue" class="control-label">Zapier Hook URL <span class="required">*</span></label>
<div class="controls">
<input id="newZapierAlertContactValue" class="span6" type="text" value="" name="newZapierAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newZapierAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newZapierAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-11">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen11" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-11" id="s2id_autogen11"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen11_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-11" id="s2id_autogen11_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-11">   </ul></div></div><select id="newZapierAlertContactExcludeNotifications" class="selecttwo span6" name="newZapierAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newZapierAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
 <input type="checkbox" name="newZapierAlertContactSSLExpirationReminder" id="newZapierAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> Please, <a href="https://zapier.com/developer/invite/7929/34260862469ef61e98577e5e2234a539/" target"_blank"="">click this link</a> for using the UptimeRobot app on Zapier (as it is not public yet).
</div>
</li>

</div>
<div class="hide" id="newProSMSAlertContact">
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info!</strong> Pro SMS (or voice calls) supports all international mobile network providers and requires a SMS (or voice calls) pack for usage. The packs are priced:
<ul>
<li>100 SMS (or voice calls) / $15</li>
<li>200 SMS (or voice calls) / $25</li>
<li>500 SMS (or voice calls) / $55</li>
<li>1000 SMS (or voice calls) / $100</li>
</ul>
<p class="margin-top15"><a href="#upgradeAccount" class="upgradeSMS btn btn-success" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-create_new_sms_contact">Purchase SMS (or voice calls)</a></p>
</div>
</li>
</div>
<div class="hide" id="newProVoiceCallAlertContact">
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Info!</strong> Pro SMS (or voice calls) supports all international mobile network providers and requires a SMS (or voice calls) pack for usage. The packs are priced:
<ul>
 <li>100 SMS (or voice calls) / $15</li>
<li>200 SMS (or voice calls) / $25</li>
<li>500 SMS (or voice calls) / $55</li>
<li>1000 SMS (or voice calls) / $100</li>
</ul>
<p class="margin-top15"><a href="#upgradeAccount" class="upgradeSMS btn btn-success" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-create_new_voicecall_contact">Purchase SMS (or voice calls)</a></p>
</div>
</li>

</div>
<div class="hide" id="newPushoverAlertContact">
<li class="control-group">
<label for="newPushoverAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newPushoverAlertContactFriendlyName" class="span6" type="text" value="" name="newPushoverAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newPushoverAlertContactValue" class="control-label">Pushover User Key <span class="required">*</span></label>
<div class="controls">
<input id="newPushoverAlertContactValue" class="span6" type="text" value="" name="newPushoverAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newPushoverAlertContactPriority" class="control-label">Pushover Priority</label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_newPushoverAlertContactPriority" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-12">Normal Priority</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen12" class="select2-offscreen">Pushover Priority</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-12" id="s2id_autogen12"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen12_search" class="select2-offscreen">Pushover Priority</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-12" id="s2id_autogen12_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-12">   </ul></div></div><select id="newPushoverAlertContactPriority" class="selecttwo span6" name="newPushoverAlertContactPriority" style="float: none; display: none;" tabindex="-1" title="Pushover Priority">
<option value="-2">Lowest Priority</option>
<option value="-1">Low Priority</option>
<option selected="selected" value="0">Normal Priority</option>
<option value="1">High Priority</option>
<option value="2">Emergency Priority</option>
</select>
 <span class="help-block">Info about this setting can be found <a href="https://pushover.net/api#priority">here</a>.</span>
</div>
</li>
<li class="control-group">
<label for="newPushoverAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newPushoverAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-13">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen13" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-13" id="s2id_autogen13"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen13_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-13" id="s2id_autogen13_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-13">   </ul></div></div><select id="newPushoverAlertContactExcludeNotifications" class="selecttwo span6" name="newPushoverAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newPushoverAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newPushoverAlertContactSSLExpirationReminder" id="newPushoverAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> Push notifications (for Android, iOS, Chrome, Firefox &amp; Safari) are sent using the paid <a href="https://pushover.net/">Pushover app/service</a>.<p>The User Key can be found when logged into <a href="https://pushover.net/">Pushover's website</a>. The apps for the service are presented <a href="https://pushover.net/clients">here</a>.</p>
</div>
</li>

</div>
<div class="hide" id="newHipchatAlertContact">
<li class="control-group">
<label for="newHipchatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
 <input id="newHipchatAlertContactFriendlyName" class="span6" type="text" value="" name="newHipchatAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newHipchatAlertContactValue" class="control-label">Hipchat Room ID <span class="required">*</span></label>
<div class="controls">
<input id="newHipchatAlertContactValue" class="span6" type="text" value="" name="newHipchatAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newHipchatAlertContactToken" class="control-label">Hipchat Room Token <span class="required">*</span></label>
<div class="controls">
<input id="newHipchatAlertContactToken" class="span6" type="text" value="" name="newHipchatAlertContactToken">
</div>
</li>
<li class="control-group">
<label for="newHipchatAlertContactCustomValue" class="control-label">Custom Value </label>
<div class="controls">
<input id="newHipchatAlertContactCustomValue" class="span6" type="text" value="" name="newHipchatAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group" style="border-bottom:none;">
<small>I'm using self-hosted HipChat Server (<a href="#" data-toggle="collapse" data-target="#newHipchatAlertContactServerURLWrapper">show/hide settings</a>).</small>
</li>
<div id="newHipchatAlertContactServerURLWrapper" class="control-group collapse">
<li class="control-group">
<label for="newHipchatAlertContactServerURL" class="control-label">HipChat Server URL</label>
<div class="controls">
<input id="newHipchatAlertContactServerURL" class="span6" type="text" value="" name="newHipchatAlertContactServerURL">
</div>
</li>
</div>
<li class="control-group">
<label for="newHipchatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newHipchatAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-14">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen14" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-14" id="s2id_autogen14"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen14_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-14" id="s2id_autogen14_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-14">   </ul></div></div><select id="newHipchatAlertContactExcludeNotifications" class="selecttwo span6" name="newHipchatAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newHipchatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newHipchatAlertContactSSLExpirationReminder" id="newHipchatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> The room token can be found in the <a href="http://hipchat.com/">HipChat.com</a>&gt;My Account&gt;Rooms&gt;(Selected Room)&gt;Tokens menu.
<p>The Room ID can be found in the <a href="http://hipchat.com/">HipChat.com</a>&gt;My Account&gt;Rooms&gt;(Selected Room)&gt;API ID value.</p>
</div>
</li>

</div>
<div class="hide" id="newSlackAlertContact">
<li class="control-group">
<label for="newSlackAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newSlackAlertContactFriendlyName" class="span6" type="text" value="" name="newSlackAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newSlackAlertContactValue" class="control-label">Slack WebHook URL <span class="required">*</span></label>
<div class="controls">
<input id="newSlackAlertContactValue" class="span6" type="text" value="" name="newSlackAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newSlackAlertContactCustomValue" class="control-label">Custom Value </label>
<div class="controls">
<input id="newSlackAlertContactCustomValue" class="span6" type="text" value="" name="newSlackAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group">
<label for="newSlackAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newSlackAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-15">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen15" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-15" id="s2id_autogen15"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen15_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-15" id="s2id_autogen15_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-15">   </ul></div></div><select id="newSlackAlertContactExcludeNotifications" class="selecttwo span6" name="newSlackAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
 <option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newSlackAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newSlackAlertContactSSLExpirationReminder" id="newSlackAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> The Slack Incoming Webhook URL can be created from Slack's <a href="https://slack.com/services/new/incoming-webhook">Channel Settings&gt;Add an App&gt;Incoming WebHooks</a> menu.
</div>
</li>

</div>
<div class="hide" id="newSplunkAlertContact">
<li class="control-group">
<label for="newSplunkAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newSplunkAlertContactFriendlyName" class="span6" type="text" value="" name="newSplunkAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newSplunkAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
<div class="controls">
<textarea id="newSplunkAlertContactValue" class="span6" type="text" name="newSplunkAlertContactValue" rows="3">https://</textarea>
</div>
</li>
<li class="control-group">
<label for="newSplunkAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newSplunkAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-16">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen16" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-16" id="s2id_autogen16"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen16_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-16" id="s2id_autogen16_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-16">   </ul></div></div><select id="newSplunkAlertContactExcludeNotifications" class="selecttwo span6" name="newSplunkAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newSplunkAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newSplunkAlertContactSSLExpirationReminder" id="newSplunkAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>

</div>
<div class="hide" id="newPagerDutyAlertContact">
<li class="control-group">
<label for="newPagerDutyAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newPagerDutyAlertContactFriendlyName" class="span6" type="text" value="" name="newPagerDutyAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newPagerDutyAlertContactValue" class="control-label">Integration Key <span class="required">*</span></label>
<div class="controls">
<input id="newPagerDutyAlertContactValue" class="span6" type="text" value="" name="newPagerDutyAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newPagerDutyAlertContactAutoResolve" class="control-label">Auto-Resolve</label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_newPagerDutyAlertContactAutoResolve" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-17">Resolve after up event</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen17" class="select2-offscreen">Auto-Resolve</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-17" id="s2id_autogen17"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen17_search" class="select2-offscreen">Auto-Resolve</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-17" id="s2id_autogen17_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-17">   </ul></div></div><select id="newPagerDutyAlertContactAutoResolve" class="selecttwo span6" name="newPagerDutyAlertContactAutoResolveValue" style="float: none; display: none;" tabindex="-1" title="Auto-Resolve">
<option value="1" selected="">Resolve after up event</option>
<option value="0">Do not resolve after up event</option>
</select>
</div>
</li>
<li class="control-group">
<label for="newPagerDutyAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newPagerDutyAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-18">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen18" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-18" id="s2id_autogen18"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen18_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-18" id="s2id_autogen18_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-18">   </ul></div></div><select id="newPagerDutyAlertContactExcludeNotifications" class="selecttwo span6" name="newPagerDutyAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newPagerDutyAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newPagerDutyAlertContactSSLExpirationReminder" id="newPagerDutyAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
We are using <strong class="alert-info">Events API v2</strong> for sending notifications.
</div>
</li>
</div>
<div class="hide" id="newTelegramAlertContact">
<li class="control-group">
<label for="newTelegramAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newTelegramAlertContactFriendlyName" class="span6" type="text" value="" name="newTelegramAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newTelegramAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newTelegramAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-19">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen19" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-19" id="s2id_autogen19"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen19_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-19" id="s2id_autogen19_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-19">   </ul></div></div><select id="newTelegramAlertContactExcludeNotifications" class="selecttwo span6" name="newTelegramAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newTelegramAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newTelegramAlertContactSSLExpirationReminder" id="newTelegramAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
 <li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> In order to activate the Telegram alert contact, it is needed to /start a dialog with the Telegram UptimeRobot Bot via clicking the custom link (the link will be generated <b>after the alert contact is created</b>).
</div>
</li>

</div>
<div class="hide" id="newGoogleAdWordsAlertContact">
<li class="control-group">
<label for="newGoogleAdWordsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newGoogleAdWordsAlertContactFriendlyName" class="span6" type="text" value="" name="newGoogleAdWordsAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> In order to manage Google AdWords Campaigns you have to <u>authenticate with the related Google account</u> and give permissions <b>after the alert contact is created</b>.
</div>
</li>

</div>
<div class="hide" id="newFacebookAdsAlertContact">
<li class="control-group">
<label for="newFacebookAdsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newFacebookAdsAlertContactFriendlyName" class="span6" type="text" value="" name="newFacebookAdsAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> In order to manage Facebook Ads Campaigns you have to <u>authenticate with the related Facebook account</u> and give permissions <b>after the alert contact is created</b>.
</div>
</li>

</div>
<div class="hide" id="newMSTeamsAlertContact">
<li class="control-group">
<label for="newMSTeamsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newMSTeamsAlertContactFriendlyName" class="span6" type="text" value="" name="newMSTeamsAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newMSTeamsAlertContactWebHookURL" class="control-label">MS Teams Webhook URL <span class="required">*</span></label>
<div class="controls">
<input id="newMSTeamsAlertContactWebHookURL" class="span6" type="text" value="" name="newMSTeamsAlertContactWebHookURL">
</div>
</li>
<li class="control-group">
<label for="newMSTeamsAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newMSTeamsAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-20">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen20" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-20" id="s2id_autogen20"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen20_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-20" id="s2id_autogen20_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-20">   </ul></div></div><select id="newMSTeamsAlertContactExcludeNotifications" class="selecttwo span6" name="newMSTeamsAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newMSTeamsAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newMSTeamsAlertContactSSLExpirationReminder" id="newMSTeamsAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled">
<span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> The incoming webhook URL can be created from the <a href="https://teams.microsoft.com/_#/apps">Microsoft Teams Store</a> using the Connectors&gt;Incoming WebHooks link (if you prefer to update the webhook's image to UptimeRobot's logo, <a href="https://uptimerobot.com/assets/img/logo-square.png" target="_blank">here it is</a>)
</div>
</li>

</div>
<div class="hide" id="newHangoutsChatAlertContact">
<li class="control-group">
<label for="newHangoutsChatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newHangoutsChatAlertContactFriendlyName" class="span6" type="text" value="" name="newHangoutsChatAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newHangoutsChatAlertContactRoomURL" class="control-label">Room URL <span class="required">*</span></label>
<div class="controls">
<input id="newHangoutsChatAlertContactRoomURL" class="span6" type="text" value="" name="newHangoutsChatAlertContactRoomURL">
</div>
</li>
<li class="control-group">
<label for="newHangoutsChatAlertContactCustomValue" class="control-label">Custom Message </label>
<div class="controls">
<input id="newHangoutsChatAlertContactCustomValue" class="span6" type="text" value="" name="newHangoutsChatAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group">
<label for="newHangoutsChatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newHangoutsChatAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-21">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen21" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-21" id="s2id_autogen21"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen21_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-21" id="s2id_autogen21_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-21">   </ul></div></div><select id="newHangoutsChatAlertContactExcludeNotifications" class="selecttwo span6" name="newHangoutsChatAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
</div>
</div>
</li>
<li class="control-group">
<label for="newHangoutsChatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newHangoutsChatAlertContactSSLExpirationReminder" id="newHangoutsChatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled">
<span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong>
The room url can be found in the <a href="https://chat.google.com/" target="_blank">chat.google.com</a> &gt; Room menu &gt; Configure webhooks &gt; Add new &gt; Copy room url.
<p>If you prefer to update the webhook's image to UptimeRobot's logo, <a href="https://uptimerobot.com/assets/img/logo-square.png" target="_blank">here it is</a>)</p>
</div>
</li>

</div>
<div class="hide" id="newDiscordAlertContact">
 <li class="control-group">
<label for="newDiscordAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
<div class="controls">
<input id="newDiscordAlertContactFriendlyName" class="span6" type="text" value="" name="newDiscordAlertContactFriendlyName">
</div>
</li>
<li class="control-group">
<label for="newDiscordAlertContactValue" class="control-label">Discord WebHook URL <span class="required">*</span></label>
<div class="controls">
<input id="newDiscordAlertContactValue" class="span6" type="text" value="" name="newDiscordAlertContactValue">
</div>
</li>
<li class="control-group">
<label for="newDiscordAlertContactCustomValue" class="control-label">Custom Value </label>
<div class="controls">
<input id="newDiscordAlertContactCustomValue" class="span6" type="text" value="" name="newDiscordAlertContactCustomValue">
<span class="help-block">An optional text that'll be added to each notification.</span>
</div>
</li>
<li class="control-group">
<label for="newDiscordAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
<div class="controls">
<div class="span8">
<div class="select2-container selecttwo span6" id="s2id_newDiscordAlertContactExcludeNotifications" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-22">Up &amp; down events</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen22" class="select2-offscreen">Enable notifications for: </label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-22" id="s2id_autogen22"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen22_search" class="select2-offscreen">Enable notifications for: </label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-22" id="s2id_autogen22_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-22">   </ul></div></div><select id="newDiscordAlertContactExcludeNotifications" class="selecttwo span6" name="newDiscordAlertContactExcludeNotifications" style="float: none; display: none;" tabindex="-1" title="Enable notifications for: ">
<option selected="selected" value="0">Up &amp; down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
<div>
</div>
</div></div></li>
<li class="control-group">
<label for="newDiscordAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
<div class="controls">
<input type="checkbox" name="newDiscordAlertContactSSLExpirationReminder" id="newDiscordAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled"> <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<strong class="alert-info">Important!</strong> The Discord Webhook URL can be created from Discord's Channel Settings&gt;Integrations&gt; WebHooks menu.
</div>
</li>

</div>
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="newAlertContactAttachNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide" style="">
<strong>Please, assign the alert contact</strong> to each monitor you would like to be notified of. Click on the "cogwheel" button next to your monitor and <code>"edit" &gt; Select "Alert Contacts To Notify"</code>.
</div>
<div id="newAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide" style="">
<strong class="alert-success">Alert contact created!</strong> You can keep adding new alert contacts.
</div>
<div id="newAlertContactErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide" style=""></div>
<div id="newPushbulletAlertContactErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide" style=""></div>
<div id="newAlertContactExistsErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide" style=""><strong class="alert-error">Ooops!</strong> This alert contact already exists under your account.</div>
<div id="newTwitterAlertContactNoFollowNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide" style=""><strong class="alert-error">Ooops!</strong> Please make sure that you follow the <a href="http://twitter.com/uptimerobot">@uptimerobot</a> Twitter user (as notification direct messages are sent from this address).</div>
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn valid" aria-invalid="false">Close</button>
<button type="submit" class="btn btn-primary">Create Alert Contact</button>
</div>
</form>
</div><div id="newMonitor" class="modal hide fade" tabindex="-1" data-width="60%" aria-hidden="true" style="width: 60%; margin-left: -30%; display: none; margin-top: -348px;">
<div class="modal-header"> </div>
<form id="newMonitorForm" class="form-horizontal" method="POST" action="inc/dml/monitorDML.php?action=newMonitor" autocomplete="off" novalidate="novalidate">
<div class="modal-body">
<div class="tab-pane active fade in">
<div class="row-fluid">
<div class="span7 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-edit"></i> New Monitor</h4>
</div>
<div class="widget-content">
<div class="widget-body">
<div class="row-fluid">
<div class="span12 form-dark">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4 class="test">Monitor Information</h4>
</li>

<li class="control-group">
<input type="hidden" id="userMonitorLimit" value="5">
<label for="newMonitorType" class="control-label">Monitor Type</label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_newMonitorType" style=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">HTTP(s)</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen">Monitor Type</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"></div><select id="newMonitorType" class="selecttwo span6" name="newMonitorType" tabindex="-1" title="Monitor Type" style="display: none;">
<option selected="selected" value="0">Please Select</option>
<option value="1">HTTP(s)</option>
<option value="2">Keyword</option>
<option value="3">Ping</option>
<option value="4">Port</option>
<option value="5" disabled="disabled" class="newMonitorType is-pro">Heartbeat</option>
</select>
</div>
</li>

<div class="hide" id="newHTTPMonitor" style="display: block;">
<li class="control-group success">
<label for="newHTTPMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="newHTTPMonitorFriendlyName" class="span6 valid validateIgnore" type="text" value="" name="newHTTPMonitorFriendlyName" aria-invalid="false">
</div>
 </li>

<li class="control-group success">
<label for="newHTTPMonitorURL" class="control-label">URL (or IP)</label>
<div class="controls">
<input id="newHTTPMonitorURL" class="span8 valid validateIgnore" type="text" name="newHTTPMonitorURL" value="https://" aria-invalid="false">
</div>
</li>

<li class="control-group">
<label for="newHTTPMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-472.993%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="61.0" aria-valuetext="61.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="newHTTPMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="newHTTPMonitorInterval" name="newHTTPMonitorInterval" value="300" class="hide validateIgnore">
</div>
</li>
<li class="control-group">
<label for="newHTTPMonitorTimeout" class="control-label">Monitor Timeout</label>
<div class="controls">
<div class="noUiSlider span6 timeoutSlider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-508.475%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="60.0" aria-valuenow="30.0" aria-valuetext="30"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
<input type="text" name="newHTTPMonitorTimeout" value="30" class="hide monitorTimeout validateIgnore">
</span></div>
</li>
<div id="newHTTPMonitorAdvancedSettingsIgnoreSSLErrors" style="margin-bottom: 15px;">
<li class="control-group">
<label for="newHTTPMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
<div class="controls">
<input id="newHTTPMonitorIgnoreSSLErrors" class="leftFloat validateIgnore" type="checkbox" name="newHTTPMonitorIgnoreSSLErrors" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<li class="control-group">
<label for="newHTTPMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
<div class="controls">
<input id="newHTTPMonitorSSLCheckDisableStatus" class="leftFloat validateIgnore" type="checkbox" name="newHTTPMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<div class="sslHttpsWarning hide">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
</div>
<li class="section-form">
<h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#newHTTPMonitorAdvancedSettings">show/hide</a></small></h4>
</li>
<div class="collapse" id="newHTTPMonitorAdvancedSettings">
<div class="accordion-group subSection">
<li class="section-form">
<h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
</li>
<div class="collapse" id="newHTTPMonitorAdvancedSettingsAuthentication">
<li class="control-group">
<label for="newHTTPMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
<div class="controls">
<input id="newHTTPMonitorHTTPUsername" class="span6 valid validateIgnore" type="text" name="newHTTPMonitorHTTPUsername" value="" autocomplete="off">
</div>
</li>

<li class="control-group">
<label for="newHTTPMonitorHTTPPassword" class="control-label">Password</label>
<div class="controls">
<input id="newHTTPMonitorHTTPPassword" class="span6 valid validateIgnore" type="text" name="newHTTPMonitorHTTPPassword" value="" autocomplete="new-password">
</div>
</li>
<li class="control-group">
<label for="newHTTPMonitorAuthType" class="control-label">Authentication Type</label>
<div class="controls">
<div data-toggle="buttons-radio" class="btn-group">
<button onclick="javascript:document.getElementById('newHTTPMonitorAuthType').value='1';" class="btn btn-green active validateIgnore" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
<button onclick="javascript:document.getElementById('newHTTPMonitorAuthType').value='2';" class="btn validateIgnore" type="button" class-toggle="btn-green" value="2">Digest</button>
</div>
<input type="hidden" id="newHTTPMonitorAuthType" value="1" name="newHTTPMonitorAuthType" class="validateIgnore">
</div>
</li>
</div>
</div>
<div class="accordion-group subSection">
<li class="section-form">
<h4>Custom Http Statuses <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsCustomHttpStatuses">show/hide</a></small></h4>
</li>
<div class="collapse" id="newHTTPMonitorAdvancedSettingsCustomHttpStatuses">
<div class="span12" style="position:absolute;top: 50%;left: 35%;">
<span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span>
Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_monitor-adv_monitor_settings-http_statuses">Upgrade</a>
</span>
</div>
<div class="opaci15 blur disableTouch noSelect">
<div class="row-fluid">
<div class="statusCodesBlock upstatuses">
<li class="control-group">
<label for="editHTTPStatusCodesUpValues" class="control-label">Up Status Codes: </label>
</li>
<li class="control-group upStatusesBlock"><a href="javascript:" data-hint="<strong>OK</strong>" data-status-sign="up" data-status-code="200" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>200</span><input type="text" name="upHttpStatus[]" value="200" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Created</strong>" data-status-sign="up" data-status-code="201" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>201</span><input type="text" name="upHttpStatus[]" value="201" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Accepted</strong>" data-status-sign="up" data-status-code="202" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>202</span><input type="text" name="upHttpStatus[]" value="202" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Non-Authoritative Information</strong>" data-status-sign="up" data-status-code="203" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>203</span><input type="text" name="upHttpStatus[]" value="203" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>No Content</strong>" data-status-sign="up" data-status-code="204" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>204</span><input type="text" name="upHttpStatus[]" value="204" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Reset Content</strong>" data-status-sign="up" data-status-code="205" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>205</span><input type="text" name="upHttpStatus[]" value="205" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Partial Content</strong>" data-status-sign="up" data-status-code="206" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>206</span><input type="text" name="upHttpStatus[]" value="206" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Multi-Status (WebDAV) (RFC 4918)</strong>" data-status-sign="up" data-status-code="207" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>207</span><input type="text" name="upHttpStatus[]" value="207" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Already Reported (WebDAV)</strong>" data-status-sign="up" data-status-code="208" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>208</span><input type="text" name="upHttpStatus[]" value="208" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>IM Used</strong>" data-status-sign="up" data-status-code="226" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>226</span><input type="text" name="upHttpStatus[]" value="226" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Multiple Choices</strong>" data-status-sign="up" data-status-code="300" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>300</span><input type="text" name="upHttpStatus[]" value="300" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Moved Permanently</strong>" data-status-sign="up" data-status-code="301" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>301</span><input type="text" name="upHttpStatus[]" value="301" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Found</strong>" data-status-sign="up" data-status-code="302" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>302</span><input type="text" name="upHttpStatus[]" value="302" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>See Other</strong>" data-status-sign="up" data-status-code="303" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>303</span><input type="text" name="upHttpStatus[]" value="303" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Not Modified</strong>" data-status-sign="up" data-status-code="304" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>304</span><input type="text" name="upHttpStatus[]" value="304" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Use Proxy</strong>" data-status-sign="up" data-status-code="305" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>305</span><input type="text" name="upHttpStatus[]" value="305" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Switch Proxy</strong>" data-status-sign="up" data-status-code="306" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>306</span><input type="text" name="upHttpStatus[]" value="306" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Temporary Redirect</strong>" data-status-sign="up" data-status-code="307" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>307</span><input type="text" name="upHttpStatus[]" value="307" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>Permanent Redirect</strong>" data-status-sign="up" data-status-code="308" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>308</span><input type="text" name="upHttpStatus[]" value="308" class="hide validateIgnore"></a><a href="javascript:" data-hint="<strong>OK</strong>" data-status-sign="up" data-status-code="200" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>200</span><input type="text" name="upHttpStatus[]" value="200" class="hide"></a><a href="javascript:" data-hint="<strong>Created</strong>" data-status-sign="up" data-status-code="201" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>201</span><input type="text" name="upHttpStatus[]" value="201" class="hide"></a><a href="javascript:" data-hint="<strong>Accepted</strong>" data-status-sign="up" data-status-code="202" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>202</span><input type="text" name="upHttpStatus[]" value="202" class="hide"></a><a href="javascript:" data-hint="<strong>Non-Authoritative Information</strong>" data-status-sign="up" data-status-code="203" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>203</span><input type="text" name="upHttpStatus[]" value="203" class="hide"></a><a href="javascript:" data-hint="<strong>No Content</strong>" data-status-sign="up" data-status-code="204" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>204</span><input type="text" name="upHttpStatus[]" value="204" class="hide"></a><a href="javascript:" data-hint="<strong>Reset Content</strong>" data-status-sign="up" data-status-code="205" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>205</span><input type="text" name="upHttpStatus[]" value="205" class="hide"></a><a href="javascript:" data-hint="<strong>Partial Content</strong>" data-status-sign="up" data-status-code="206" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>206</span><input type="text" name="upHttpStatus[]" value="206" class="hide"></a><a href="javascript:" data-hint="<strong>Multi-Status (WebDAV) (RFC 4918)</strong>" data-status-sign="up" data-status-code="207" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>207</span><input type="text" name="upHttpStatus[]" value="207" class="hide"></a><a href="javascript:" data-hint="<strong>Already Reported (WebDAV)</strong>" data-status-sign="up" data-status-code="208" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>208</span><input type="text" name="upHttpStatus[]" value="208" class="hide"></a><a href="javascript:" data-hint="<strong>IM Used</strong>" data-status-sign="up" data-status-code="226" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>226</span><input type="text" name="upHttpStatus[]" value="226" class="hide"></a><a href="javascript:" data-hint="<strong>Multiple Choices</strong>" data-status-sign="up" data-status-code="300" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>300</span><input type="text" name="upHttpStatus[]" value="300" class="hide"></a><a href="javascript:" data-hint="<strong>Moved Permanently</strong>" data-status-sign="up" data-status-code="301" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>301</span><input type="text" name="upHttpStatus[]" value="301" class="hide"></a><a href="javascript:" data-hint="<strong>Found</strong>" data-status-sign="up" data-status-code="302" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>302</span><input type="text" name="upHttpStatus[]" value="302" class="hide"></a><a href="javascript:" data-hint="<strong>See Other</strong>" data-status-sign="up" data-status-code="303" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>303</span><input type="text" name="upHttpStatus[]" value="303" class="hide"></a><a href="javascript:" data-hint="<strong>Not Modified</strong>" data-status-sign="up" data-status-code="304" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>304</span><input type="text" name="upHttpStatus[]" value="304" class="hide"></a><a href="javascript:" data-hint="<strong>Use Proxy</strong>" data-status-sign="up" data-status-code="305" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>305</span><input type="text" name="upHttpStatus[]" value="305" class="hide"></a><a href="javascript:" data-hint="<strong>Switch Proxy</strong>" data-status-sign="up" data-status-code="306" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>306</span><input type="text" name="upHttpStatus[]" value="306" class="hide"></a><a href="javascript:" data-hint="<strong>Temporary Redirect</strong>" data-status-sign="up" data-status-code="307" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>307</span><input type="text" name="upHttpStatus[]" value="307" class="hide"></a><a href="javascript:" data-hint="<strong>Permanent Redirect</strong>" data-status-sign="up" data-status-code="308" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>308</span><input type="text" name="upHttpStatus[]" value="308" class="hide"></a></li>
</div>
<div class="statusCodesBlock downstatuses">
<li class="control-group">
<label for="editHTTPStatusCodesUpValues" class="control-label">Down Status Codes: </label>
</li>
<li class="control-group downStatusesBlock"><a href="javascript:" data-hint="<strong>Bad Request</strong>" data-status-sign="down" data-status-code="400" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>400</span><input type="text" name="downHttpStatus[]" value="400" class="hide"></a><a href="javascript:" data-hint="<strong>Unauthorized</strong>" data-status-sign="down" data-status-code="401" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>401</span><input type="text" name="downHttpStatus[]" value="401" class="hide"></a><a href="javascript:" data-hint="<strong>Payment Required</strong>" data-status-sign="down" data-status-code="402" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>402</span><input type="text" name="downHttpStatus[]" value="402" class="hide"></a><a href="javascript:" data-hint="<strong>Forbidden</strong>" data-status-sign="down" data-status-code="403" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>403</span><input type="text" name="downHttpStatus[]" value="403" class="hide"></a><a href="javascript:" data-hint="<strong>Not Found</strong>" data-status-sign="down" data-status-code="404" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>404</span><input type="text" name="downHttpStatus[]" value="404" class="hide"></a><a href="javascript:" data-hint="<strong>Method Not Allowed</strong>" data-status-sign="down" data-status-code="405" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>405</span><input type="text" name="downHttpStatus[]" value="405" class="hide"></a><a href="javascript:" data-hint="<strong>Not Acceptable</strong>" data-status-sign="down" data-status-code="406" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>406</span><input type="text" name="downHttpStatus[]" value="406" class="hide"></a><a href="javascript:" data-hint="<strong>Proxy Authentication Required</strong>" data-status-sign="down" data-status-code="407" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>407</span><input type="text" name="downHttpStatus[]" value="407" class="hide"></a><a href="javascript:" data-hint="<strong>Request Timeout</strong>" data-status-sign="down" data-status-code="408" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>408</span><input type="text" name="downHttpStatus[]" value="408" class="hide"></a><a href="javascript:" data-hint="<strong>Conflict</strong>" data-status-sign="down" data-status-code="409" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>409</span><input type="text" name="downHttpStatus[]" value="409" class="hide"></a><a href="javascript:" data-hint="<strong>Gone</strong>" data-status-sign="down" data-status-code="410" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>410</span><input type="text" name="downHttpStatus[]" value="410" class="hide"></a><a href="javascript:" data-hint="<strong>Length Required</strong>" data-status-sign="down" data-status-code="411" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>411</span><input type="text" name="downHttpStatus[]" value="411" class="hide"></a><a href="javascript:" data-hint="<strong>Precondition Failed</strong>" data-status-sign="down" data-status-code="412" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>412</span><input type="text" name="downHttpStatus[]" value="412" class="hide"></a><a href="javascript:" data-hint="<strong>Request Entity Too Large</strong>" data-status-sign="down" data-status-code="413" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>413</span><input type="text" name="downHttpStatus[]" value="413" class="hide"></a><a href="javascript:" data-hint="<strong>Request-URI Too Long</strong>" data-status-sign="down" data-status-code="414" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>414</span><input type="text" name="downHttpStatus[]" value="414" class="hide"></a><a href="javascript:" data-hint="<strong>Unsupported Media Type</strong>" data-status-sign="down" data-status-code="415" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>415</span><input type="text" name="downHttpStatus[]" value="415" class="hide"></a><a href="javascript:" data-hint="<strong>Range Not Satisfiable</strong>" data-status-sign="down" data-status-code="416" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>416</span><input type="text" name="downHttpStatus[]" value="416" class="hide"></a><a href="javascript:" data-hint="<strong>Expectation Failed</strong>" data-status-sign="down" data-status-code="417" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>417</span><input type="text" name="downHttpStatus[]" value="417" class="hide"></a><a href="javascript:" data-hint="<strong>I am a teapot</strong>" data-status-sign="down" data-status-code="418" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>418</span><input type="text" name="downHttpStatus[]" value="418" class="hide"></a><a href="javascript:" data-hint="<strong>Misdirected Request</strong>" data-status-sign="down" data-status-code="421" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>421</span><input type="text" name="downHttpStatus[]" value="421" class="hide"></a><a href="javascript:" data-hint="<strong>Unprocessable Entity (WebDAV</strong>" data-status-sign="down" data-status-code="422" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>422</span><input type="text" name="downHttpStatus[]" value="422" class="hide"></a><a href="javascript:" data-hint="<strong>Locked (WebDAV)</strong>" data-status-sign="down" data-status-code="423" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>423</span><input type="text" name="downHttpStatus[]" value="423" class="hide"></a><a href="javascript:" data-hint="<strong>Failed Dependency (WebDAV)</strong>" data-status-sign="down" data-status-code="424" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>424</span><input type="text" name="downHttpStatus[]" value="424" class="hide"></a><a href="javascript:" data-hint="<strong>Upgrade Required</strong>" data-status-sign="down" data-status-code="426" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>426</span><input type="text" name="downHttpStatus[]" value="426" class="hide"></a><a href="javascript:" data-hint="<strong>Precondition Required</strong>" data-status-sign="down" data-status-code="428" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>428</span><input type="text" name="downHttpStatus[]" value="428" class="hide"></a><a href="javascript:" data-hint="<strong>Too Many Requests</strong>" data-status-sign="down" data-status-code="429" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>429</span><input type="text" name="downHttpStatus[]" value="429" class="hide"></a><a href="javascript:" data-hint="<strong>Shopify Blocking</strong>" data-status-sign="down" data-status-code="430" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>430</span><input type="text" name="downHttpStatus[]" value="430" class="hide"></a><a href="javascript:" data-hint="<strong>Request Header Fields Too Large</strong>" data-status-sign="down" data-status-code="431" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>431</span><input type="text" name="downHttpStatus[]" value="431" class="hide"></a><a href="javascript:" data-hint="<strong>Login Time-out</strong>" data-status-sign="down" data-status-code="440" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>440</span><input type="text" name="downHttpStatus[]" value="440" class="hide"></a><a href="javascript:" data-hint="<strong>Retry With</strong>" data-status-sign="down" data-status-code="449" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>449</span><input type="text" name="downHttpStatus[]" value="449" class="hide"></a><a href="javascript:" data-hint="<strong>Blocked by Windows Parental Controls</strong>" data-status-sign="down" data-status-code="450" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>450</span><input type="text" name="downHttpStatus[]" value="450" class="hide"></a><a href="javascript:" data-hint="<strong>Unavailable For Legal Reasons</strong>" data-status-sign="down" data-status-code="451" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>451</span><input type="text" name="downHttpStatus[]" value="451" class="hide"></a><a href="javascript:" data-hint="<strong>SSL Certificate Error</strong>" data-status-sign="down" data-status-code="495" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>495</span><input type="text" name="downHttpStatus[]" value="495" class="hide"></a><a href="javascript:" data-hint="<strong>SSL Certificate Required</strong>" data-status-sign="down" data-status-code="496" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>496</span><input type="text" name="downHttpStatus[]" value="496" class="hide"></a><a href="javascript:" data-hint="<strong>HTTP Request Sent to HTTPS Port</strong>" data-status-sign="down" data-status-code="497" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>497</span><input type="text" name="downHttpStatus[]" value="497" class="hide"></a><a href="javascript:" data-hint="<strong>Client Closed Request</strong>" data-status-sign="down" data-status-code="499" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>499</span><input type="text" name="downHttpStatus[]" value="499" class="hide"></a><a href="javascript:" data-hint="<strong>Internal Server Error</strong>" data-status-sign="down" data-status-code="500" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>500</span><input type="text" name="downHttpStatus[]" value="500" class="hide"></a><a href="javascript:" data-hint="<strong>Not Implemented</strong>" data-status-sign="down" data-status-code="501" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>501</span><input type="text" name="downHttpStatus[]" value="501" class="hide"></a><a href="javascript:" data-hint="<strong>Bad Gateway</strong>" data-status-sign="down" data-status-code="502" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>502</span><input type="text" name="downHttpStatus[]" value="502" class="hide"></a><a href="javascript:" data-hint="<strong>Service Unavailable</strong>" data-status-sign="down" data-status-code="503" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>503</span><input type="text" name="downHttpStatus[]" value="503" class="hide"></a><a href="javascript:" data-hint="<strong>Gateway Timeout</strong>" data-status-sign="down" data-status-code="504" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>504</span><input type="text" name="downHttpStatus[]" value="504" class="hide"></a><a href="javascript:" data-hint="<strong>HTTP Version Not Supported</strong>" data-status-sign="down" data-status-code="505" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>505</span><input type="text" name="downHttpStatus[]" value="505" class="hide"></a><a href="javascript:" data-hint="<strong>Loop Detected</strong>" data-status-sign="down" data-status-code="508" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>508</span><input type="text" name="downHttpStatus[]" value="508" class="hide"></a><a href="javascript:" data-hint="<strong>Bandwidth Limit Exceeded</strong>" data-status-sign="down" data-status-code="509" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>509</span><input type="text" name="downHttpStatus[]" value="509" class="hide"></a><a href="javascript:" data-hint="<strong>Not Extended</strong>" data-status-sign="down" data-status-code="510" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>510</span><input type="text" name="downHttpStatus[]" value="510" class="hide"></a><a href="javascript:" data-hint="<strong>Network Authentication Required</strong>" data-status-sign="down" data-status-code="511" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>511</span><input type="text" name="downHttpStatus[]" value="511" class="hide"></a><a href="javascript:" data-hint="<strong>CloudFlare Timeout</strong>" data-status-sign="down" data-status-code="520" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>520</span><input type="text" name="downHttpStatus[]" value="520" class="hide"></a><a href="javascript:" data-hint="<strong>CloudFlare Timeout</strong>" data-status-sign="down" data-status-code="521" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>521</span><input type="text" name="downHttpStatus[]" value="521" class="hide"></a><a href="javascript:" data-hint="<strong>CloudFlare Timeout</strong>" data-status-sign="down" data-status-code="522" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>522</span><input type="text" name="downHttpStatus[]" value="522" class="hide"></a><a href="javascript:" data-hint="<strong>Cloudflare Timeout</strong>" data-status-sign="down" data-status-code="523" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>523</span><input type="text" name="downHttpStatus[]" value="523" class="hide"></a><a href="javascript:" data-hint="<strong>Cloudflare Timeout</strong>" data-status-sign="down" data-status-code="524" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>524</span><input type="text" name="downHttpStatus[]" value="524" class="hide"></a><a href="javascript:" data-hint="<strong>CloudFlare SSL Handshake</strong>" data-status-sign="down" data-status-code="525" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>525</span><input type="text" name="downHttpStatus[]" value="525" class="hide"></a><a href="javascript:" data-hint="<strong>CloudFlare SSL Validation</strong>" data-status-sign="down" data-status-code="526" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>526</span><input type="text" name="downHttpStatus[]" value="526" class="hide"></a><a href="javascript:" data-hint="<strong>CloudFlare Railgun Error</strong>" data-status-sign="down" data-status-code="527" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>527</span><input type="text" name="downHttpStatus[]" value="527" class="hide"></a><a href="javascript:" data-hint="<strong>CloudFlare Origin DNS Error</strong>" data-status-sign="down" data-status-code="530" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>530</span><input type="text" name="downHttpStatus[]" value="530" class="hide"></a><a href="javascript:" data-hint="<strong>Network read timeout error</strong>" data-status-sign="down" data-status-code="598" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>598</span><input type="text" name="downHttpStatus[]" value="598" class="hide"></a><a href="javascript:" data-hint="<strong>Network connect timeout error</strong>" data-status-sign="down" data-status-code="599" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>599</span><input type="text" name="downHttpStatus[]" value="599" class="hide"></a></li>
</div>
</div>
<div class="row-fluid">
<button type="button" class="httpStatusCodesResetBtn btn btn-grey btn-mini pull-right validateIgnore" disabled="">
Reset HTTP Statuses
</button>
</div>
</div>
</div>
</div>
<div class="accordion-group subSection">
<li class="section-form">
<h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
</li>
<div class="collapse" id="newHTTPMonitorAdvancedSettingsCustomHeaders">
<div class="span12" style="position:absolute;top: 50%;left: 35%;">
 <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span>
Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_monitor-adv_monitor_settings-custom_headers">Upgrade</a>
</span>
</div>
<li class="control-group opaci15 blur">
<label for="newHTTPMonitorCustomHeaders" class="control-label">Custom Headers</label>
<div class="newHTTPMonitorCustomHeadersContainer monitorCustomHeadersContainer"></div>
<div class="controls">
<button type="button" class="monitorCustomHeaderBtn newHTTPMonitorCustomHeadersBtn btn btn-primary btn-sm validateIgnore" data-generateclass="newHTTPMonitorCustomHeaders" disabled="">
Add Custom Header</button>
</div>
</li>
</div>
</div>
</div>
</div>
<div class="hide" id="newKeywordMonitor" style="">
<li class="control-group">
<label for="newKeywordMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="newKeywordMonitorFriendlyName" class="span6" type="text" value="" name="newKeywordMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="newKeywordMonitorURL" class="control-label">URL (or IP)</label>
<div class="controls">
<input id="newKeywordMonitorURL" class="span8" type="text" name="newKeywordMonitorURL" value="https://">
</div>
</li>

<li class="control-group">
<label for="newKeywordMonitorKeywordValue" class="control-label">Keyword</label>
<div class="controls">
<input id="newKeywordMonitorKeywordValue" class="span6" type="text" value="" name="newKeywordMonitorKeywordValue">
<span class="help-block">(the keyword must be present in the HTML source)</span>
</div>
</li>

<li class="control-group">
<label for="newKeywordCaseType" class="control-label">Case-insensitive</label>
<div class="controls">
<input id="newKeywordCaseType" class="leftFloat" type="checkbox" name="newKeywordCaseType" value="1">
</div>
</li>
<li class="control-group">
<label for="newKeywordMonitorKeywordType" class="control-label">Alert When</label>
<div class="controls">
<div data-toggle="buttons-radio" class="btn-group">
<button onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">Keyword Exists</button>
<button onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Keyword Not Exists</button>
</div>
<input type="hidden" id="newKeywordMonitorKeywordType" value="" name="newKeywordMonitorKeywordType">
</div>
</li>

<li class="control-group">
<label for="newKeywordMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
 <span class="help-inline span5">every <b id="newKeywordMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="newKeywordMonitorInterval" name="newKeywordMonitorInterval" value="300" class="hide">
</div>
</li>
<li class="control-group">
<label for="newKeywordMonitorTimeout" class="control-label">Monitor Timeout</label>
<div class="controls">
<div class="noUiSlider span6 timeoutSlider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-508.475%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="60.0" aria-valuenow="30.0" aria-valuetext="30"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
<input type="text" name="newKeywordMonitorTimeout" value="30" class="hide monitorTimeout">
</span></div>
</li>
<div id="newKeywordMonitorAdvancedSettingsIgnoreSSLErrors">
<li class="control-group">
<label for="newKeywordMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
<div class="controls">
<input id="newKeywordMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="newKeywordMonitorIgnoreSSLErrors" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<li class="control-group">
 <label for="newKeywordMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
<div class="controls">
<input id="newKeywordMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="newKeywordMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
<div style="margin-top: 5px; margin-left: 10px; float: left;">
<span class="label label-warning">PRO</span><br>
<span class="font-size: 11px">Available only in the PRO plan.</span>
<a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
</div>
</div>
</li>
<div class="sslHttpsWarning hide">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
</div>
<li class="section-form">
<h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#newKeywordMonitorAdvancedSettings">show/hide</a></small></h4>
</li>
<div class="collapse" id="newKeywordMonitorAdvancedSettings">
<div class="accordion-group subSection">
<li class="section-form">
<h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#newKeywordMonitorAdvancedSettings" data-target="#newKeywordMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
</li>
<div class="collapse" id="newKeywordMonitorAdvancedSettingsAuthentication">
<li class="control-group">
<label for="newKeywordMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
<div class="controls">
<input id="newKeywordMonitorHTTPUsername" class="span6" type="text" name="newKeywordMonitorHTTPUsername" value="" autocomplete="off">
</div>
</li>

<li class="control-group">
<label for="newKeywordMonitorHTTPPassword" class="control-label">Password</label>
<div class="controls">
<input id="newKeywordMonitorHTTPPassword" class="span6" type="text" name="newKeywordMonitorHTTPPassword" value="" autocomplete="new-password">
</div>
</li>
<li class="control-group">
<label for="newKeywordMonitorAuthType" class="control-label">Authentication Type</label>
<div class="controls">
<div data-toggle="buttons-radio" class="btn-group">
<button onclick="javascript:document.getElementById('newKeywordMonitorAuthType').value='1';" class="btn btn-green active" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
<button onclick="javascript:document.getElementById('newKeywordMonitorAuthType').value='2';" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
</div>
<input type="hidden" id="newKeywordMonitorAuthType" value="1" name="newKeywordMonitorAuthType">
</div>
</li>
</div>
</div>
<div class="accordion-group subSection">
<li class="section-form">
<h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#newKeywordMonitorAdvancedSettings" data-target="#newKeywordMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
</li>
<div class="collapse" id="newKeywordMonitorAdvancedSettingsCustomHeaders">
<div class="span12" style="position:absolute;top: 50%;left: 35%;">
<span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span>
Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_monitor-adv_monitor_settings-custom_headers">Upgrade</a>
</span>
</div>
<div class="opaci15 blur">
<li class="control-group">
<label for="newKeywordMonitorCustomHeaders" class="control-label">Custom Headers</label>
<div class="newKeywordMonitorCustomHeadersContainer monitorCustomHeadersContainer"></div>
<div class="controls">
<button type="button" class="monitorCustomHeaderBtn newKeywordMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="newKeywordMonitorCustomHeaders">Add Custom Header</button>
</div>
</li>
</div>
</div>
</div>
</div>
</div>
<div class="hide" id="newPingMonitor" style="">
<li class="control-group">
<label for="newPingMonitorFriendlyName" class="control-label">Friendly Name</label>
 <div class="controls">
<input id="newPingMonitorFriendlyName" class="span6" type="text" value="" name="newPingMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="newPingMonitorURL" class="control-label">IP (or Host)</label>
<div class="controls">
<input id="newPingMonitorURL" class="span8" type="text" name="newPingMonitorURL" value="">
</div>
</li>
<li class="control-group">
<label for="newPingMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="newPingMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
<input type="text" id="newPingMonitorInterval" name="newPingMonitorInterval" value="300" class="hide">
</div>
</li>

</div>
<div class="hide" id="newPortMonitor" style="">
<li class="control-group">
<label for="newPortMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="newPortMonitorFriendlyName" class="span6" type="text" value="" name="newPortMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="newPortMonitorURL" class="control-label">IP (or URL or Host)</label>
<div class="controls">
<input id="newPortMonitorURL" class="span8" type="text" name="newPortMonitorURL" value="">
</div>
 </li>

<li class="control-group">
<label for="newPortMonitorPort" class="control-label">Port</label>
<div class="controls">
<div class="select2-container selecttwo span6" id="s2id_newPortMonitorPort" style="float: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">Please select</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen">Port</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen">Port</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select id="newPortMonitorPort" class="selecttwo span6" name="newPortMonitorPort" style="float: none; display: none;" tabindex="-1" title="Port">
<option value="0" selected="selected">Please select</option>
<optgroup label="Popular Ports">
<option value="1">HTTP (80)</option>
<option value="2">HTTPS (443)</option>
<option value="3">FTP (21)</option>
<option value="4">SMTP (25)</option>
<option value="5">POP3 (110)</option>
<option value="6">IMAP (143)</option>
</optgroup>
<optgroup label="Custom Port">
<option value="99">Custom Port</option>
</optgroup>
</select>
</div>
</li>

<li class="control-group hide" id="newPortMonitorCustomPortWrapper" style="">
<label for="newPortMonitorCustomPort" class="control-label">Custom Port</label>
<div class="controls">
<input id="newPortMonitorCustomPort" class="span6" type="text" value="" name="newPortMonitorCustomPort">
</div>
</li>

<li class="control-group">
<label for="newPortMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">
<div class="noUiSlider newEditMonitorSlider span6 noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="142.0" aria-valuenow="5.0" aria-valuetext="5.00"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">every <b id="newPortMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
 <input type="text" id="newPortMonitorInterval" name="newPortMonitorInterval" value="300" class="hide">
</div>
</li>
<li class="control-group">
<label for="newPortMonitorTimeout" class="control-label">Monitor Timeout</label>
<div class="controls">
<div class="noUiSlider span6 timeoutSlider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-508.475%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="60.0" aria-valuenow="30.0" aria-valuetext="30"><div class="noUi-touch-area"></div></div></div></div></div>
<span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
<input type="text" name="newPortMonitorTimeout" value="30" class="hide monitorTimeout">
</span></div>
</li>
</div>
<div class="hide" id="newHBMonitor" style="">
<li class="control-group">
<label for="newHBMonitorFriendlyName" class="control-label">Friendly Name</label>
<div class="controls">
<input id="newHBMonitorFriendlyName" class="span6" type="text" value="" name="newHBMonitorFriendlyName">
</div>
</li>

<li class="control-group">
<label for="newHBMonitorInterval" class="control-label">Monitoring Interval</label>
<div class="controls">

<input type="number" id="newHBMonitorIntervalInput" name="newHBMonitorIntervalInput" value="5" min="5" class="span3" style="float: left !important" max="44640">
<div class="span3">
<select name="newHBMonitorIntervalType" id="newHBMonitorIntervalType" style="width: 100%;">
<option value="1" selected="selected" data-text="minute">minute</option>
<option value="60" data-text="hour">hours</option>
 <option value="1440" data-text="day">days</option>
</select>
</div>
<input type="text" id="newHBMonitorInterval" name="newHBMonitorInterval" value="300" class="hide">
</div>
</li>
<li class="control-group">
<label for="newHBMonitorGracePeriodInput" class="control-label">Grace Period</label>
<div class="controls" style="position: relative;">

<input type="number" id="newHBMonitorGracePeriodInput" name="newHBMonitorGracePeriodInput" value="30" class="span3" style="float: left !important" min="0" max="86400">
<div class="span3">
<select name="newHBMonitorGracePeriodType" id="newHBMonitorGracePeriodType" style="width: 100%;">
<option value="1" selected="selected" data-text="second">seconds</option>
<option value="60" data-text="minute">minutes</option>
<option value="3600" data-text="hour">hours</option>
</select>
</div>
<div class="clearfix span12">
<input type="text" name="newHBMonitorGracePeriod" value="0" id="newHBMonitorGracePeriod" class="hide">
</div>
<p style="margin-top: 15px; clear: both;" class="help-block">
<i class="fontello-icon-help-circled"></i> Useful for jobs with varying runtime to prevent false positives. If set to 1 hour, monitor will add a 1-hour buffer to the monitoring interval.
</p>
</div>
</li>
<li class="control-group">
<div class="alert alert-info no-margin">
<p class="">
Heartbeat monitor generates a unique URL you send requests to. UptimeRobot then expects your request in a selected interval. Accepted methods are <strong>POST and GET</strong>. You can <a href="https://blog.uptimerobot.com/new-feature-heartbeat-monitoring/">read more about Heartbeat monitoring on our blog.</a>
</p>
</div>
</li>

</div>
</ul>
</fieldset>

</div>
</div>
</div>
</div>
</div>

<div id="newHBMonitorSuccessNotification" class="alert alert-info no-margin-right no-margin-left margin-top20 hide" style="display: none;">
<h4 style="margin-bottom: 15px">Copy &amp; set up</h4>
<p>
The URL for the heartbeat monitor:
</p>
<div class="input-append" style="margin: 15px 0; width: 90%">
<input type="url" id="newHBMonitorSuccessNotificationMonitorURL" class="span12">
<button type="button" class="btn btn-primary copy-input">Copy</button>
</div>
<p style="margin-top: 15px">
<i class="fontello-icon-help-circled"></i> <a href="https://uptimerobot.com/help/heartbeat-monitoring/" target="_blank">How to send requests to heartbeat monitor from Cron or Task scheduler</a>
</p>
</div>
<div id="newMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide" style="display: none;">
<strong class="alert-success">Monitor created!</strong> You can keep creating new monitors.
</div>
<div id="newMonitorSuccessNotificationTestInfo" class="alert alert-info no-margin-right no-margin-left margin-top20 hide" style="min-height: 30px; display: none;">
Go ahead and test notification setup to see if everything works.
<button type="button" class="btn btn-primary pull-right" id="show-monitor-detail" data-monitor-id="791106997">
Go to monitor detail
</button>
</div>
<div id="newMonitorErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide" style="display: none;">
<strong class="alert-error">The monitor already exists in the list</strong>.
</div>
<div id="newMonitorBlacklistErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide" style="display: none;">
<strong class="alert-error">The monitor URL/IP is in blacklist, please try with another URL/IP</strong>.
</div>
<div id="newMonitorInvalidUrlErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide" style="display: none;">
<strong class="alert-error">The monitor URL/IP is invalid, please try with another URL/IP</strong>.
</div>
</div>

<div class="span5 grider">
<input type="hidden" name="alertContactsInputNew" class="alertContactsInputNew" value="">
<input type="hidden" name="alertContactsSettingsStatus" class="alertContactsSettingsStatus" value="0">
<div id="newMonitorAlertContacts" class="alertContactsContainerNew"><div class="widget widget-simple widget-notes widgetToGetEmail" data-alertcontactaccountemail="trivedikausha@gmail.com"><div class="widget-header"><h4><i class="fontello-icon-users-1"></i> Select "Alert Contacts To Notify"</h4></div><div id="maxAlertContactError"></div><div class="widget-body"><h5>Selected: <span class="alertContactSelectedCount">0</span> of <span class="alertContactCount">3</span> <span class="showHideAlertContactsInSettingsWrap"> (<a href="#no" class="showHideAlertContactsInNewEdit">hide</a>)</span>.</h5><button class="searchAlertContactBtn" type="button"><i class="fontello-icon-search-5" style="margin-right:0;"></i></button><input type="text" value="" placeholder="Search" class="span3 alertContactSearchKeyword"> <div class="alertContactsTableShowHideNewEdit"><table class="table table-condensed"><thead><tr><th>&nbsp;</th><th>Type</th><th>Alert Contact</th></tr></thead><tbody><tr><td colspan="3" style="padding-top:0;padding-bottom:0;"><div class="monitorAlertAdvancedOptionsInfo alert alert-info hide no-margin">These are optional controls to define "when to get notified" and "if to get notified once or every x minutes".<p><b>Info:</b> When a monitor is down, UptimeRobot checks them each minute (no matter their interval) and, for that reason, the minute values mentioned are also equal to the tries/checks made.</p><p>And, recurring notifications are auto-stopped once the downtime is over 1 day.</p></div></td></tr><tr><td><input type="checkbox" name="monitorAlertContactsNew[]" value="01668626" class="monitorAlertContactsNew monitorAlertContactsNew01668626 monitorAlertContactVariableNew" data-alertcontactid="01668626"></td><td><i class="fontello-icon-mail"></i></td><td><span title="trivedikausha@gmail.com">trivedikausha@gmail.<span class="shortenLongAlertContacts"></span>..</span></td></tr><tr class="monitorAlertContactsAdvancedOptionsNew01668626 hide"><td colspan="3" style="border-top:0px;">if down for <select disabled="" class="monitorAlertThresholdNew monitorAlertThresholdNew01668626 monitorAlertContactVariableNew" name="monitorAlertThresholdNew[]" data-alertcontactid="01668626" style="font-size: 11px;height: 20px;width:80px; padding:1px;"><option value="0">
0 mins
</option>
<option value="1">
1 mins
</option>
<option value="2">
2 mins
</option>
<option value="3">
3 mins
</option>
<option value="4">
4 mins
</option>
<option value="5">
5 mins
</option>
<option value="6">
6 mins
</option>
<option value="7">
7 mins
</option>
<option value="8">
8 mins
</option>
<option value="9">
9 mins
</option>
<option value="10">
10 mins
</option>
<option value="11">
11 mins
</option>
<option value="12">
12 mins
</option>
<option value="13">
13 mins
</option>
<option value="14">
14 mins
</option>
<option value="15">
15 mins
</option>
<option value="20">
20 mins
</option>
<option value="25">
25 mins
</option>
<option value="30">
30 mins
</option>
<option value="35">
35 mins
</option>
<option value="40">
40 mins
</option>
<option value="45">
45 mins
</option>
<option value="50">
50 mins
</option>
<option value="55">
55 mins
</option>
<option value="60">
60 mins
</option>
<option value="70">
70 mins
</option>
<option value="80">
80 mins
</option>
<option value="90">
90 mins
</option>
<option value="100">
100 mins
</option>
<option value="110">
110 mins
</option>
<option value="120">
2 hrs
</option>
<option value="150">
2.5 hrs
</option>
<option value="180">
3 hrs
</option>
<option value="210">
3.5 hrs
</option>
<option value="240">
4 hrs
</option>
<option value="270">
4.5 hrs
</option>
<option value="300">
5 hrs
</option>
<option value="360">
6 hrs
</option>
<option value="420">
7 hrs
</option>
<option value="480">
8 hrs
</option>
 <option value="540">
9 hrs
</option>
<option value="600">
10 hrs
</option>
<option value="660">
11 hrs
</option>
<option value="720">
12 hrs
</option></select>, notify <select disabled="" class="monitorAlertRecurrenceNew monitorAlertRecurrenceNew01668626 monitorAlertContactVariableNew" name="monitorAlertRecurrenceNew[]" data-alertcontactid="01668626" style="font-size: 11px;height: 20px;width:110px; padding:1px;"><option value="0">
once
</option>
<option value="1">
every 1 min
</option>
<option value="2">
every 2 mins
</option>
<option value="3">
every 3 mins
</option>
<option value="4">
every 4 mins
</option>
<option value="5">
every 5 mins
</option>
<option value="6">
every 6 mins
</option>
<option value="7">
every 7 mins
</option>
<option value="8">
every 8 mins
</option>
<option value="9">
every 9 mins
</option>
<option value="10">
every 10 mins
</option>
<option value="11">
every 11 mins
</option>
<option value="12">
every 12 mins
</option>
<option value="13">
every 13 mins
</option>
<option value="14">
every 14 mins
</option>
<option value="15">
every 15 mins
</option>
<option value="20">
every 20 mins
</option>
<option value="25">
every 25 mins
</option>
<option value="30">
every 30 mins
</option>
<option value="35">
every 35 mins
</option>
<option value="40">
every 40 mins
</option>
<option value="45">
every 45 mins
</option>
<option value="50">
every 50 mins
</option>
<option value="55">
every 55 mins
</option>
<option value="60">
every 60 mins
</option></select></td></tr><tr class="alertContactDisabled"><td><input type="checkbox" name="monitorAlertContactsNew[]" value="3445692" class="monitorAlertContactsNew monitorAlertContactsNew3445692 monitorAlertContactVariableNew" data-alertcontactid="3445692"></td><td><i class="fontello-icon-mail" title="E-mail"></i></td><td><span title="kaushatrivedi.18.cs@iite.indusuni.ac.in"></span>kausha trivedi</td></tr><tr><td><input type="checkbox" name="monitorAlertContactsNew[]" value="3445694" class="monitorAlertContactsNew monitorAlertContactsNew3445694 monitorAlertContactVariableNew" data-alertcontactid="3445694"></td><td><i class="fontello-icon-mail" title="E-mail"></i></td><td><span title="kaushatrivedi.elsner@gmail.com"></span>kausha</td></tr><tr><td colspan="3">New alert contacts can be defined from the "<a href="#mySettings" class="mySettings text-color underline">My Settings</a>" page.</td></tr></tbody></table></div></div></div><input type="hidden" value="4" class="alertContactsLimitNew">
</div>
<input type="hidden" class="getAlertContactsEditOrListDetector" value="0">
<input type="hidden" name="mWindowsInputNew" class="mWindowsInputNew" value="">
<input type="hidden" class="getMWindowsEditOrListDetector" value="0">
</div>

</div>

</div>
</div>
<div class="modal-footer">
<button type="button" data-dismiss="modal" class="btn">Close</button>
<button type="submit" class="btn btn-primary ladda-button" data-style="expand-right">Create Monitor</button>
</div>
</form>
</div></div>

</div>

</div>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","2102472709905236");fbq("set","agent","tmgoogletagmanager","2102472709905236");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2102472709905236&amp;ev=PageView&amp;noscript=1"></noscript>




<script type="text/javascript" src="assets/js/lib/jquery1.8.3.js"></script>
<script type="text/javascript" src="assets/js/lib/jquery.jfeed.pack.js"></script>
<script type="text/javascript" src="assets/js/lib/bootstrap/bootstrap.js"></script>

<script type="text/javascript" src="assets/js/lib/favico.js"></script>

<script type="text/javascript" src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>

<script type="text/javascript" src="assets/plugins/pl-system/nicescroll/jquery.nicescroll-3_6_0.min.js"></script>

<script type="text/javascript" src="assets/plugins/pl-system-info/qtip2/dist/jquery.qtip.min.js"></script>
<script type="text/javascript" src="assets/plugins/pl-system-info/notyfy/jquery.notyfy.js"></script>

<script type="text/javascript" src="assets/plugins/pl-system/momentjs/moment.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="assets/plugins/pl-content/jquery.bullseye/jquery.bullseye-1.0-min.js"></script>
<script type="text/javascript" src="assets/plugins/pl-content/truncate/jquery.truncate.min.js"></script>

<script type="text/javascript" src="assets/plugins/pl-form/select2-3.5.2/select2.js"></script>
<script type="text/javascript" src="assets/plugins/pl-form/validate/js/jquery.validate.min.js?v1.16"></script>
<script type="text/javascript" src="assets/plugins/pl-form/noUiSlider/nouislider.min.js"></script>
<script type="text/javascript" src="assets/plugins/pl-form/creditCardValidator/jquery.creditCardValidator.js?v1.1"></script>
<script>paymentsForSMSExists = 0;</script>
<script type="text/javascript" src="assets/plugins/pl-form/form/jquery.form.js"></script>

<script type="text/javascript" src="assets/plugins/pl-visualization/knob/knob.js"></script>
<script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.js"></script>
<script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.time.js"></script>
<script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.resize.min.js"></script>

<script type="text/javascript" src="assets/js/common.js?v1.235"></script>
<script type="text/javascript" src="assets/js/lib/spin.js"></script>
<script type="text/javascript" src="assets/js/lib/ladda.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="assets/js/lib/cookieconsent.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&amp;features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="assets/js/stripe-payment.js?v1.0"></script>
<script type="text/javascript" src="assets/js/common-loggedIn.js?v1.978"></script>
<script type="text/javascript" src="assets/js/incidents.js?v1.979"></script>

<script data-cfasync="false">
        window.civchat = {
            apiKey: "su5k6k",
            name: "Kausha Trivedi",
            user_id: "1668626",
            email: "trivedikausha@gmail.com",
            is_pro: "",
            monitor_limit: "50",
            psp_count: "0",
            monitor_count: "3",
            registration: "2022-03-19 17:49:44",
        }
    </script>
<script data-cfasync="false" src="https://uptimerobot.user.com/widget.js"></script>


<div id="qtip-rcontainer"></div><ul id="notyfy_container_center" class="notyfy_container" style="top: 361px; left: 296px;"></ul><span role="status" aria-live="polite" class="select2-hidden-accessible">E-mail</span><div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 6px; z-index: auto; cursor: default; position: fixed; top: 186px; left: 553px; height: 546px; touch-action: none; display: none; opacity: 0.4;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(102, 102, 102); background-clip: padding-box; border-radius: 6px; touch-action: none;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 6px; z-index: auto; top: 716px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0.4;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(102, 102, 102); background-clip: padding-box; border-radius: 6px; left: 0px;"></div></div><div class="daterangepicker dropdown-menu single opensright show-calendar" style="top: 20px; left: 0px; right: auto;"><div class="calendar first single right" style="display: block;"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-arrow-left icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month"><select class="monthselect"><option value="0">Jan</option><option value="1">Feb</option><option value="2" selected="selected">Mar</option><option value="3">Apr</option><option value="4">May</option><option value="5">Jun</option><option value="6">Jul</option><option value="7">Aug</option><option value="8">Sep</option><option value="9">Oct</option><option value="10">Nov</option><option value="11">Dec</option></select><select class="yearselect"><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022" selected="selected">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option></select></th><th class="next available"><i class="fa fa-arrow-right icon-arrow-right glyphicon glyphicon-arrow-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="available off" data-title="r0c0">27</td><td class="available off" data-title="r0c1">28</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="available" data-title="r0c6">5</td></tr><tr><td class="available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="available" data-title="r1c6">12</td></tr><tr><td class="available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="available" data-title="r2c6">19</td></tr><tr><td class="available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available active start-date end-date" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="available" data-title="r3c6">26</td></tr><tr><td class="available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="available" data-title="r4c4">31</td><td class="available off" data-title="r4c5">1</td><td class="available off" data-title="r4c6">2</td></tr><tr><td class="available off" data-title="r5c0">3</td><td class="available off" data-title="r5c1">4</td><td class="available off" data-title="r5c2">5</td><td class="available off" data-title="r5c3">6</td><td class="available off" data-title="r5c4">7</td><td class="available off" data-title="r5c5">8</td><td class="available off" data-title="r5c6">9</td></tr></tbody></table></div><div class="calendar-time"><select class="hourselect"><option value="0" selected="selected">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select> : <select class="minuteselect"><option value="0" selected="selected">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select> </div></div><div class="calendar second left" style="display: none;"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-arrow-left icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month"><select class="monthselect"><option value="0">Jan</option><option value="1">Feb</option><option value="2" selected="selected">Mar</option><option value="3">Apr</option><option value="4">May</option><option value="5">Jun</option><option value="6">Jul</option><option value="7">Aug</option><option value="8">Sep</option><option value="9">Oct</option><option value="10">Nov</option><option value="11">Dec</option></select><select class="yearselect"><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022" selected="selected">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option></select></th><th class="next available"><i class="fa fa-arrow-right icon-arrow-right glyphicon glyphicon-arrow-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="available off" data-title="r0c0">27</td><td class="available off" data-title="r0c1">28</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="available" data-title="r0c6">5</td></tr><tr><td class="available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="available" data-title="r1c6">12</td></tr><tr><td class="available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="available" data-title="r2c6">19</td></tr><tr><td class="available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available active start-date end-date" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="available" data-title="r3c6">26</td></tr><tr><td class="available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="available" data-title="r4c4">31</td><td class="available off" data-title="r4c5">1</td><td class="available off" data-title="r4c6">2</td></tr><tr><td class="available off" data-title="r5c0">3</td><td class="available off" data-title="r5c1">4</td><td class="available off" data-title="r5c2">5</td><td class="available off" data-title="r5c3">6</td><td class="available off" data-title="r5c4">7</td><td class="available off" data-title="r5c5">8</td><td class="available off" data-title="r5c6">9</td></tr></tbody></table></div><div class="calendar-time"><select class="hourselect"><option value="0" selected="selected">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select> : <select class="minuteselect"><option value="0" selected="selected">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select> </div></div><div class="ranges"><div class="range_inputs"><div class="daterangepicker_start_input" style="display: none;"><label for="daterangepicker_start">From</label><input class="input-mini" type="text" name="daterangepicker_start" value=""></div><div class="daterangepicker_end_input" style="display: none;"><label for="daterangepicker_end">To</label><input class="input-mini" type="text" name="daterangepicker_end" value=""></div><button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;<button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button></div></div></div><div id="usercom-widget" class="usercom-alignment-right"><!----> <div><div data-footer="true" class="usercom-launcher-container" style="display: none;"><iframe id="usercom-greeting-wrapper-frame" name="usercom-greeting-wrapper-frame"></iframe> <div class="usercom-launcher-container--close"><svg width="37" height="37" viewBox="0 0 74 74"><path fill-opacity="0.2" d="M37 74a37 37 0 100-74 37 37 0 000 74z"></path> <path fill="#fff" d="M26 22l11 12 10-12 3 3-11 12 11 12-3 3-10-12-11 12-3-3 11-12-11-12z"></path></svg></div></div> <div><!----> <iframe id="usercom-launcher-dot-frame" name="usercom-launcher-dot-frame"></iframe></div></div> <!----> <!----> <!----> <!----><style>#usercom-widget iframe{font-family:'Helvetica Neue', 'Apple Color Emoji', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased;font-size:100%;font-style:normal;letter-spacing:normal;text-transform:none;animation-play-state:running;backface-visibility:visible;background-color:transparent;background-image:none;border:0px none transparent;border-radius:0px;bottom:auto;z-index:auto;text-align:start;direction:ltr;display:inline;empty-cells:show;float:none;height:auto;-webkit-hyphenate-character:auto;hyphens:manual;font-weight:normal;text-align-last:initial;text-decoration:none;text-indent:0px;text-shadow:none;text-transform:none;animation-play-state:running;backface-visibility:visible;image-rendering:auto;box-shadow:none;box-sizing:content-box;caption-side:top;clear:none;clip:auto;color:inherit;columns:auto auto;column-gap:normal;content:normal;counter-increment:none;counter-reset:none;cursor:auto;padding:0px;break-after:auto;break-before:auto;break-inside:auto;perspective:none;perspective-origin:50% 50%;column-fill:balance;pointer-events:auto;position:static;font-stretch:normal;quotes:none;resize:none;right:auto;size:auto;table-layout:auto;top:auto;transform:none;transform-origin:50% 50% 0px;text-shadow:none;transform-style:flat;unicode-bidi:normal;vertical-align:baseline;white-space:normal;widows:2;width:auto;word-break:normal;word-spacing:normal;overflow-wrap:normal;orphans:2;font-variant:normal;font-weight:normal;text-align-last:initial;text-decoration:none;text-indent:0px;left:auto;line-height:inherit;list-style:outside none disc;margin:0px;max-height:none;max-width:none;min-height:0px;min-width:0px;opacity:1;outline-offset:0px;overflow:visible}#usercom-widget *{box-sizing:border-box !important}.userengage-widget-mobile-active{overflow:hidden;height:100%;width:100%;position:fixed}
#ue_popups{position:fixed;width:100%;height:100%;top:0;left:0;pointer-events:none;z-index:2147483647}#ue_popups #ue_form{position:fixed;width:100%;height:100%;top:0;left:0;pointer-events:auto}#ue_popups #ue_form iframe{width:100%;height:100%;border:0}#ue_popups #ue_push_dialog{width:367px !important;display:inline-flex !important;flex-direction:column !important;padding:0 !important;margin:10px 10px !important;position:relative !important;overflow:hidden !important;border-radius:7.5px !important;background-color:#ffffff !important;box-shadow:0 1px 13px 0 rgba(0,0,0,0.1) !important}#ue_popups #ue_push_dialog *{letter-spacing:normal !important;font-family:Arial, sans-serif !important;pointer-events:auto}@media screen and (max-width: 521px){#ue_popups #ue_push_dialog{max-width:367px !important;width:auto !important}}@media screen and (min-width: 520px){#ue_popups #ue_push_dialog.__ue__placement-left{position:absolute !important;left:0;margin:10px 10px 10px 104px !important}#ue_popups #ue_push_dialog.__ue__placement-right{position:absolute !important;right:0;margin:10px 104px 10px 10px !important}#ue_popups #ue_push_dialog.__ue__placement-center{position:absolute !important;left:50%;transform:translateX(-50%)}}#ue_popups #ue_push_dialog .__ue__close{position:absolute !important;right:10px !important;top:10px !important;font-size:16px !important;width:16px !important;height:16px !important;display:inline-flex !important;align-items:center !important;justify-content:center !important;color:#afaeae !important;cursor:pointer !important}#ue_popups #ue_push_dialog .__ue__close:hover{color:#7a7979 !important}#ue_popups #ue_push_dialog .__ue__content{padding:17.5px 17.5px 0 !important;display:flex !important}#ue_popups #ue_push_dialog .__ue__content h6{font-size:16px !important;font-weight:600 !important;line-height:normal !important;margin:0 8.5px 8.5px 0 !important;text-align:left !important;color:#373737 !important}#ue_popups #ue_push_dialog .__ue__content p{font-size:14px !important;font-weight:normal !important;font-style:normal !important;font-stretch:normal !important;line-height:normal !important;letter-spacing:normal !important;text-align:left !important;color:#6f6f6f !important;margin:0 !important;padding:0 !important}#ue_popups #ue_push_dialog .__ue__footer{display:flex !important;justify-content:space-between !important;align-items:center !important;padding:15px 17.5px 10px !important}#ue_popups #ue_push_dialog .__ue__footer .__ue__button{font-size:14px !important;font-weight:normal !important;font-style:normal !important;font-stretch:normal !important;line-height:1.5 !important;letter-spacing:normal !important;text-align:center !important;color:#949292 !important;background-color:transparent !important;border-radius:3px !important;transition:color 0.2s ease, background-color 0.2s ease !important;border:0 !important;box-shadow:none !important;height:auto !important;text-decoration:initial !important;text-transform:initial !important;padding:1px 7px 2px !important}#ue_popups #ue_push_dialog .__ue__footer .__ue__button:hover{background-color:#f2f2f2 !important}#ue_popups #ue_push_dialog .__ue__footer .__ue__button_primary{color:#0088ff !important}#ue_popups #ue_push_dialog .__ue__footer .__ue__button_primary:hover{background-color:#dbeeff !important;color:#0088ff !important}#ue_popups #ue_push_dialog .__ue__footer .__ue__branding__href{font-size:11px !important;font-weight:normal !important;font-family:inherit !important;font-style:normal !important;vertical-align:initial !important;font-stretch:normal !important;line-height:2.67 !important;letter-spacing:normal !important;text-align:left !important;color:#afaeae !important;display:inline-flex !important;align-items:center !important;transition:color 0.2s ease !important;border:0 !important;text-decoration:initial !important;margin:0 !important;padding:0 !important}#ue_popups #ue_push_dialog .__ue__footer .__ue__branding__href:hover{color:#7a7979 !important}#ue_popups #ue_push_dialog .__ue__footer .__ue__branding__href img{margin-right:4px !important}#ue_popups #ue_push_dialog .__ue__logo{width:50px !important;min-width:50px !important;max-width:50px !important;margin-right:17.5px !important}#ue_popups #ue_push_dialog .__ue__logo img{width:100% !important}
</style><style>.usercom-launcher-counter{width:28px;height:28px;max-width:28px;max-height:28px;border-radius:50%;z-index:2147483646;position:fixed;bottom:65px;right:7px;color:#fff;display:flex;justify-content:center;align-items:center;background:#ff3535;font-family:"Helvetica Neue",Helvetica,sans-serif;font-size:17px}@media screen and (max-width: 550px){.usercom-launcher-counter{transform:scale(.75);bottom:57px}}.usercom-alignment-left .usercom-launcher-counter{right:auto;left:75px}@media screen and (max-width: 550px){.usercom-alignment-left .usercom-launcher-counter{transform:scale(.75);left:55px}}#usercom-launcher-dot-frame[name]{width:60px !important;height:70px !important;padding-top:10px;z-index:2147483645;position:fixed;bottom:20px;right:20px}@media screen and (max-width: 550px){#usercom-launcher-dot-frame[name]{width:50px !important;height:60px !important}}.usercom-alignment-left #usercom-launcher-dot-frame[name]{left:20px;right:auto}.usercom-greeting-enter-active{transition:opacity 0.2s}.usercom-greeting-leave-active{transition:opacity 0.1s}.usercom-greeting-enter,.usercom-greeting-leave-to{transform:none;opacity:0}@media screen and (max-width: 550px){.usercom-greeting-enter,.usercom-greeting-leave-to{transform:scale(.75);bottom:60px;right:-30px}}
</style><style>.usercom-launcher-container{z-index:2147483645;position:fixed}@media screen and (max-width: 550px){.usercom-launcher-container{display:none !important}}.usercom-launcher-container--close{opacity:0;z-index:2147483645;position:fixed;bottom:197px;right:20px;padding-bottom:75px;height:37px;width:37px}.usercom-alignment-left .usercom-launcher-container--close{right:auto;left:370px}@media screen and (max-width: 550px){.usercom-alignment-left .usercom-launcher-container--close{transform:scale(.75);left:275px;bottom:197px !important}}@media screen and (max-width: 550px){.usercom-launcher-container--close{transform:scale(.75);bottom:197px !important;right:10px}}.usercom-launcher-container--close svg{cursor:pointer}.usercom-launcher-container:hover .usercom-launcher-container--close{bottom:235px;opacity:1;transition:bottom 0.1s, opacity 0.1s}.usercom-launcher-container[data-footer] .usercom-launcher-container--close{bottom:247px}.usercom-launcher-container[data-footer]:hover .usercom-launcher-container--close{transition:bottom 0.1s, opacity 0.1s;opacity:1;bottom:280px}#usercom-greeting-wrapper-frame[name]{box-shadow:10px 10px 25px rgba(0,0,0,0.06);width:380px !important;z-index:2147483645;position:fixed;bottom:90px;right:20px;max-height:144px;height:100%;border-radius:12px 12px 3px 12px}.usercom-alignment-left #usercom-greeting-wrapper-frame[name]{right:auto;left:20px;border-radius:12px 12px 12px 3px}@media screen and (max-width: 550px){.usercom-alignment-left #usercom-greeting-wrapper-frame[name]{transform:scale(.75);left:-30px}}@media screen and (max-width: 550px){#usercom-greeting-wrapper-frame[name]{transform:scale(.75);bottom:55px;right:-30px}}.usercom-launcher-container[data-footer] #usercom-greeting-wrapper-frame[name]{max-height:192px}
</style></div><div class="select2-drop select2-display-none select2-drop-active" style="left: 519.85px; width: 142px; top: 323.8px; bottom: auto; display: none;">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen">Monitor Type</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="" aria-activedescendant="select2-result-label-70">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1"></ul></div><div id="select2-drop-mask" class="select2-drop-mask" style="display: none;"></div><div class="select2-drop select2-display-none select2-drop-active" style="left: 653.763px; width: 369px; top: 381.8px; bottom: auto; display: none;">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen4_search" class="select2-offscreen">Alert Contact Type *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="" aria-activedescendant="select2-result-label-79">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4"></ul></div></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>