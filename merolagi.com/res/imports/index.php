<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'wv') == true){
    $isWebView=true;
}else{
        $isWebView=false;

}

//Global Imports
?>


<link rel="icon" href="/res/database/logosmall.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3307952f9a.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
<script src="/res/packages/pushjs/push.min.js" crossorigin="anonymous"></script>
<script src="/res/packages/pushjs/serviceWorker.min.js" crossorigin="anonymous"></script>






<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180197979-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180197979-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81217218-6"></script>

<?php
if(!$isWebView){
?>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-81217218-6');
</script>
<script data-ad-client="ca-pub-3866603838151846" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<?php
}
?>
<style>
    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    html {
        scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
        width: 10px;

    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }


    .small-scrollbar::-webkit-scrollbar {
        height: 10px;

    }

    /* Track */
    .small-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    .small-scrollbar::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    /* Handle on hover */
    .small-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>