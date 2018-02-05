<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='X-UA-Compatible' content='IE=Edge'>
    <meta name="description" content="Week van de mobiliteit 2018"/>
    <meta name="author" content="Yves Rijckaert"/>
    <meta name="keywords" content="mobiliteit hernieuwbaar transport activiteiten festival"/>
    <title>Week van de mobiliteit</title>
    <?php echo $css;?>
    <style type="text/css">
a,body,div,h1,h2,header,html,img,li,nav,p,section,strong,ul{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}header,nav,section{display:block}body{line-height:1}ul{list-style:none}html{font-size:62.5%;-webkit-box-sizing:border-box;box-sizing:border-box;height:100%}*,:after,:before{-webkit-box-sizing:inherit;box-sizing:inherit}body{font-family:Rubik,sans-serif;font-weight:400;font-size:2vh;line-height:28px;line-height:2.8rem}.hide{display:none}a{color:inherit;text-decoration:none}.link{text-decoration:underline}strong{font-weight:500}.button{background-color:#6bc9b4;padding:10px 40px;padding:1rem 4rem;color:#fff}main{min-height:calc(100vh - 40rem)}.header{background-color:#6bc9b4}.header-content{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;height:155px;height:15.5rem;width:84vw;margin:0 auto}.title{font-size:2.5vmax;color:#fff2ce}.nav-list{display:-webkit-box;display:-ms-flexbox;display:flex}.nav-list li:not(:first-child){margin-left:40px;margin-left:4rem}.active,.nav-link{border-bottom:5px solid transparent;border-bottom:.5rem solid transparent;color:#fff}.active.active,.nav-link.active{border-color:#d4f3ec}.main{display:grid;grid-template-columns:45vw 1fr;grid-gap:10rem;grid-row-gap:15vh;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;justify-items:center;grid-template-areas:"about about" "uitgelicht uitgelicht" "organiseer organiseer" "wistjes wistjes" "newsletter newsletter" "instagram instagram" "sponsors sponsors"}.about{margin-top:15vh;grid-area:about;display:grid;grid-template:-webkit-min-content 1fr/40vw 40vw;grid-template:min-content 1fr/40vw 40vw;grid-gap:5rem;grid-template-areas:"header header" "image text";position:relative;z-index:1}.about:after{content:"";position:absolute;top:12vmax;left:-10%;width:100vw;height:250px;height:25rem;background-image:-webkit-gradient(linear,left top,left bottom,color-stop(30vh,#fff2ce),color-stop(0,transparent));background-image:linear-gradient(#fff2ce 30vh,transparent 0);background-repeat:no-repeat;z-index:-1;background-position:50% 0}.about-header{grid-area:header;justify-self:center;font-size:2.5vmax;text-transform:uppercase}.about-image{grid-area:image;max-width:600px;max-width:60rem;width:100%;height:auto;position:relative;z-index:1}.about-image:after{content:"";z-index:0;position:absolute;top:40px;top:4rem;left:30px;left:3rem;width:100%;height:100%;background-color:#d4f3ec}.about-text{grid-area:text;-ms-flex-item-align:center;align-self:center}.about-buttons{grid-column:2;grid-row:2;-ms-flex-item-align:end;align-self:flex-end;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.about-buttons .button:first-child{margin-right:30px;margin-right:3rem}.uitgelicht{grid-area:uitgelicht;display:grid;grid-template:-webkit-min-content 1fr/40vw 40vw;grid-template:min-content 1fr/40vw 40vw;grid-gap:5rem;grid-template-areas:"header header" "events image"}.uitgelicht-header{grid-area:header;justify-self:center;font-size:2.5vmax;text-transform:uppercase;position:relative;z-index:2}.uitgelicht-image{grid-area:image;justify-self:flex-end;max-width:600px;max-width:60rem;width:100%;height:auto;position:relative;z-index:1}.uitgelicht-image:after{content:"";z-index:-1;position:absolute;top:-65px;top:-6.5rem;left:-25px;left:-2.5rem;width:100%;height:100%;background-color:#d4f3ec}.uitgelicht-events{grid-area:events;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.uitgelicht-event{width:100%;height:27%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:2.5vh}.uitgelicht-event:first-child{background-color:#fff2ce}.uitgelicht-event:nth-child(2){background-color:#d4f3ec}.uitgelicht-event:nth-child(3){background-color:#f8cdd1}.uitgelicht-event:before{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;content:attr(data-date);color:#fff;text-transform:uppercase;font-size:2.5vh;width:20%;height:100%;background-color:#7a7a7a}.uitgelicht-event:after{content:"";width:160px;width:16rem;height:106px;height:10.6rem;background-image:url(/assets/img/arrow.svg);background-repeat:no-repeat;background-size:3.2rem 3.6rem;background-position:50%;-webkit-backface-visibility:hidden;backface-visibility:hidden;will-change:transform}.uitgelicht-button{grid-column:span 2;justify-self:center}.organiseer{grid-area:organiseer;display:grid;grid-template:-webkit-min-content 1fr/40vw 40vw;grid-template:min-content 1fr/40vw 40vw;grid-gap:5rem;grid-template-areas:"header header" "image text";position:relative}.organiseer:after{content:"";position:absolute;top:12vmax;left:-10%;width:100vw;height:250px;height:25rem;background-image:-webkit-gradient(linear,left top,left bottom,color-stop(30vh,#fff2ce),color-stop(0,transparent));background-image:linear-gradient(#fff2ce 30vh,transparent 0);background-repeat:no-repeat;z-index:-1;background-position:50% 0}.organiseer-header{grid-area:header;justify-self:center;font-size:2.5vmax;text-transform:uppercase}.organiseer-image{grid-area:image;max-width:600px;max-width:60rem;width:100%;height:auto;position:relative;z-index:1}.organiseer-image:after{content:"";z-index:0;position:absolute;top:20px;top:2rem;left:30px;left:3rem;width:100%;height:100%;background-color:#f8cdd1}.organiseer-text{grid-area:text;-ms-flex-item-align:center;align-self:center}.organiseer-button{grid-column:2;grid-row:2;-ms-flex-item-align:end;align-self:flex-end;justify-self:flex-start}.wistjes{grid-area:wistjes;display:grid;max-width:80vw;grid-template-columns:1fr 2fr 1fr;grid-gap:5rem 1rem;grid-template-areas:"header header header" "wistje1 image wistje4" "wistje2 image wistje5" "wistje3 image wistje6"}.wistjes-header{grid-area:header;justify-self:center;font-size:2.5vmax;text-transform:uppercase}@media (min-width:780px) and (max-width:1025px){.main{grid-row-gap:10vh}.about,.organiseer{margin-top:10vh;grid-template-columns:35vw 45vw;grid-template-areas:"header header" "image text" "button button"}.about:after,.organiseer:after{top:5vh;left:-9%;height:37vh;background-image:-webkit-gradient(linear,left top,left bottom,color-stop(37vh,#fff2ce),color-stop(0,transparent));background-image:linear-gradient(#fff2ce 37vh,transparent 0)}.about-buttons{grid-area:button}.about-image,.organiseer-image{justify-self:center;-ms-flex-item-align:center;align-self:center;width:35vw}.about-image:after{display:none}.uitgelicht{grid-template-columns:45vw 35vw}.uitgelicht-image{-ms-flex-item-align:center;align-self:center}.uitgelicht-image:after{display:none}.organiseer{margin-top:auto}.organiseer-image:after{display:none}.organiseer-button{grid-column:span 2;grid-row:3;justify-self:center}}@media (min-width:100px) and (max-width:780px){.main{grid-template-columns:100vw;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;grid-row-gap:10vh;grid-template-areas:"about" "uitgelicht" "organiseer" "wistjes" "newsletter" "instagram" "sponsors"}.about{margin-top:5vh}.about,.organiseer{grid-template-columns:100vw;grid-template-areas:"header" "image" "text" "button";background:-webkit-gradient(linear,left top,left bottom,color-stop(20vh,#fff2ce),color-stop(0,transparent));background:linear-gradient(#fff2ce 20vh,transparent 0);background-position-y:1.5rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.about:after,.organiseer:after{display:none}.about-text,.organiseer-text{margin:5vw 10vw}.about-image,.organiseer-image{width:50vw}.about-image:after,.organiseer-image:after{display:none}.about-buttons,.organiseer-button{-ms-flex-item-align:center;align-self:center}.uitgelicht{grid-template-columns:80vw;grid-gap:2.5vh 0;grid-template-areas:"header" "events"}.uitgelicht-event:before{background-color:transparent;color:#000;margin-right:5vw;margin-left:5vw}.uitgelicht-image{display:none}.wistjes{grid-template-columns:80vw;grid-gap:2.5vh 0;grid-template-areas:"header" "wistje1" "wistje2" "wistje3"}}@media (min-width:100px) and (max-width:374px){.about-buttons{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.about-buttons .button:first-child{margin-right:0;margin-bottom:2.5vh}}
</style>
  </head>
  <body>
    <header class="header">
      <div class="header-content">
        <h1 class="title"><a href="index.php?page=home">Week van de mobiliteit</a></h1>
        <nav>
          <ul class="nav-list">
            <li><a class="nav-link <?php if ($_GET['page'] === 'home') {echo 'active';}?>" href="index.php?page=home">Home</a></li>
            <li><a class="nav-link <?php if ($_GET['page'] === 'events') {echo 'active';}?>" href="index.php?page=events">Activiteiten</a></li>
            <li><a class="nav-link" href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <?php echo $content; ?>
    <footer class="footer">
      <div class="footer-wrap">
        <p class="footer-text">Copyright Week Van De Mobiliteit</p>
        <div class="social">
          <a target="_blank" href="https://www.instagram.com/weekvandemobiliteit/">
            <img src="./assets/img/instagram.svg" title="instagram" alt="instagram icon" width="40" height="40"/>
          </a>
          <a target="_blank" href="https://twitter.com/week_mobiliteit">
            <img src="./assets/img/twitter.svg" title="twitter" alt="twitter icon" width="40" height="40"/>
          </a>
          <a target="_blank" href="https://www.facebook.com/Weekvandemobiliteit/">
            <img src="./assets/img/facebook.svg" title="facebook" alt="facebook icon" width="40" heyight="40"/>
          </a>
        </div>
        <p class="footer-text">Major 3 Yves Rijckaert</p>
      </div>
    </footer>
    <?php echo $js;?>
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: ['Rubik:400,500,700'] }
      };

      (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
  </body>
</html>
