<?php
  define('title','homework');
  $linkImg = 'https://fakeimg.pl/300x180/';
?>

<!doctype html>
  <head>
    <title><?php echo title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>

<div class=containertxt>
  <h1>My Gallery</h1>
</div>

<div class="useragent">
  <div class="K">
    <p>

      Page version for "4K" devices.
    </p>
  </div>

  <div class="Ll">
    <p>
      Page version for "Laptop L" devices.
    </p>
  </div>

  <div class="L">
    <p>
      Page version for "Laptop" devices.
    </p>
  </div>

  <div class="T">
    <p>
      Page version for "Tablet" devices.
    </p>
  </div>
  <div class="M">
    <p>
      Page version for "Mobile" devices.
    </p>
  </div>
  <div class="other">
    <p>
      I don't support calculators. Please open this page on your smartphone or laptop.
    </p>
  </div>
</div>




<div class="photoContainer">
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
</div>


<style>
  @media screen and (max-width:374px)
  {
    div.photoContainer
    {
      display: none;
    }
  }


  /* K */
  @media screen and (min-width: 1441px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }
    div.containertxt h1
    {
      font-size: 5em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }

      IMG.photo
      {
        margin: 3%;
      }

      div.photoContainer
      {
      }
      div.K
      {
        display: flex;
        text-align: center;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }

  /* Laptop L */
  @media screen and (min-width: 1023px) and (max-width: 1440px)
  {

    div.containertxt
    {
      height: 10em;
      position: relative
    }

    div.containertxt h1
    {
      font-size: 4em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
     }

      IMG.photo
      {
        margin: 2%;
      }

      div.photoContainer
      {
      }

      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: flex;
        text-align: center;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }
   /* Laptop */
  @media screen and (min-width: 769px) and (max-width: 1024px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }

    div.containertxt h1
    {
      font-size: 3em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }

      IMG.photo
      {
        margin: 1%;
      }

      div.photoContainer
      {

      }
      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: flex;
        text-align: center;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }

  /* tablet */
  @media screen and (min-width: 424px) and (max-width: 768px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }
    div.containertxt h1
    {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }

      IMG.photo
      {
        margin: 2%;
      }

      div.photoContainer
      {
      }
      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: flex;
         text-align: center;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }

   /* mobile L */
   @media screen and (min-width: 376px) and (max-width: 425px)
   {

     div.containertxt
     {
       height: 10em;
       position: relative
     }

     div.containertxt h1
     {
       margin: 0;
       position: absolute;
       top: 50%;
       left: 50%;
       margin-right: -50%;
       transform: translate(-50%, -50%)
     }

      IMG.photo
      {
        margin: 6%;
      }

       div.photoContainer
      {
      }

      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: flex;
         text-align: center;
      }
      div.other
      {
        display: none;
      }
    }
        /*other*/
      @media screen and (min-width: 100px) and (max-width: 375px)
      {

        div.containertxt
        {
          height: 10em;
          position: relative
        }

        div.containertxt h1
        {
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          margin-right: -50%;
          transform: translate(-50%, -50%)
        }
        div.photoContainer
       {
         display: none;
       }

       div.K
       {
         display: none;
       }
       div.Ll
       {
         display: none;
       }
       div.L
       {
         display: none;
       }
       div.T
       {
         display: none;
       }
       div.M
       {
         display: none;
       }
       div.other
       {
         display: flex;
         text-align: center;
       }
   }
   div.useragent
   {
     margin-left: 70%;
    text-align: center;
    align: center;

   }
   div.photoContainer
   {
     text-align: center;
   }
</style>

</body>
</html>
