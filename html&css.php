<!doctype html>
<head>
  <title>homework</title>
<body>

<div class=containertxt>
  <h1>My Gallery
  </div>
<div class="container1">

  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
  <img class="photo" src="/simpleImg.jpg">
</div>
<style>



/* 4k */
@media screen and (min-width: 1440px)
{
  div.containertxt {
    height: 10em;
    position: relative }
  div.containertxt h1 {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }

    IMG.photo
    {
    margin: 3%;

    }

    div.container1 {
         }
 }

/* Laptop L */
@media screen and (min-width: 1024px) and (max-width: 1440px)
{
  div.containertxt {
    height: 10em;
    position: relative }
div.containertxt h1 {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }

    IMG.photo
    {
        margin: 2%;
    }

    div.container1 {
         }
 }
 /* Laptop */
@media screen and (min-width: 768px) and (max-width: 1024px)
{
  div.containertxt {
    height: 10em;
    position: relative }
div.containertxt h1 {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }

    IMG.photo
    {
      margin: 2%;
    }

    div.container1 {
         }
 }

/* tablet */
@media screen and (min-width: 425px) and (max-width: 768px)
{
  div.containertxt {
    height: 10em;
    position: relative }
  div.containertxt h1 {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }

    IMG.photo
    {
      margin: 2%;

    }

    div.container1 {
         }
 }

 /* mobile L */
 @media screen and (min-width: 375px) and (max-width: 425px)
 {
   div.containertxt {
     height: 10em;
     position: relative }
 div.containertxt h1 {
     margin: 0;
     position: absolute;
     top: 50%;
     left: 50%;
     margin-right: -50%;
     transform: translate(-50%, -50%) }

     IMG.photo
     {
        margin: 6%;
     }

     div.container1 {
          }

 }

</style>

</body>
</head>
</html>
